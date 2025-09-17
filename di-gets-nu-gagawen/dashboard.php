<?php
session_start();

// Prevent access if not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: loginn.php");
    exit;
}

// -------- AUTH / LOGOUT --------
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: loginn.php");
    exit;
}

// -------- DB CONNECTION --------
include "db.php";

// -------- FETCH CATEGORIES & SUBCATEGORIES --------
$categories = $conn->query("SELECT * FROM categories");
$subcategories = [];
$res = $conn->query("SELECT * FROM subcategories");
while ($row = $res->fetch_assoc()) {
    $subcategories[$row['category_id']][] = $row;
}

// -------- POST / UPDATE --------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $category = intval($_POST['category']);
    $subcategory = $_POST['subcategory'] ?? null;

    // Check subcategory requirement
    if (!empty($subcategories[$category]) && empty($subcategory)) {
        die("Error: Subcategory required for this category.");
    }

    // Handle PDF upload
    $pdfPath = null;
    if (!empty($_FILES['pdf']['name'])) {
        $uploadDir = "uploads/";
        if (!file_exists($uploadDir)) mkdir($uploadDir, 0777, true);
        $filename = pathinfo($_FILES['pdf']['name'], PATHINFO_FILENAME);
        $extension = pathinfo($_FILES['pdf']['name'], PATHINFO_EXTENSION);
        $pdfPath = $uploadDir . $filename . "_" . time() . "." . $extension;
        move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfPath);
    }

    if ($action === "post") {
        $stmt = $conn->prepare("INSERT INTO content (category_id, subcategory_id, title, subtitle, pdf_path, updated_at) VALUES (?, ?, ?, ?, ?, NULL)");
        $stmt->bind_param("iisss", $category, $subcategory, $title, $subtitle, $pdfPath);
        $stmt->execute();
        $stmt->close();
    } elseif ($action === "update") {
        $id = intval($_POST['id']);
        if ($pdfPath) {
            $stmt = $conn->prepare("UPDATE content SET category_id=?, subcategory_id=?, title=?, subtitle=?, pdf_path=?, updated_at=NOW() WHERE id=?");
            $stmt->bind_param("iisssi", $category, $subcategory, $title, $subtitle, $pdfPath, $id);
        } else {
            $stmt = $conn->prepare("UPDATE content SET category_id=?, subcategory_id=?, title=?, subtitle=?, updated_at=NOW() WHERE id=?");
            $stmt->bind_param("iissi", $category, $subcategory, $title, $subtitle, $id);
        }
        $stmt->execute();
        $stmt->close();
    }
}

// -------- DELETE --------
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM content WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}

// -------- SEARCH / PAGINATION --------
$search = $_GET['search'] ?? "";
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$limit = 5;
$offset = ($page - 1) * $limit;
$where = "WHERE 1";
if ($search) {
    $searchEsc = $conn->real_escape_string($search);
    $where .= " AND (c.title LIKE '%$searchEsc%' OR c.subtitle LIKE '%$searchEsc%' OR cat.name LIKE '%$searchEsc%')";
}

// Count total
$totalRes = $conn->query("SELECT COUNT(*) as total FROM content c JOIN categories cat ON c.category_id = cat.id $where");
$total = $totalRes->fetch_assoc()['total'];
$totalPages = ceil($total / $limit);

// Fetch content
$content = $conn->query("SELECT c.*, cat.name AS category, sub.name AS subcategory FROM content c JOIN categories cat ON c.category_id = cat.id LEFT JOIN subcategories sub ON c.subcategory_id = sub.id $where ORDER BY c.created_at DESC LIMIT $limit OFFSET $offset");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Admin Dashboard | Sanggunian ng Bongabon</title>
          <link rel="icon" type="image/x-icon" href="assets/icon.png" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4 md:p-6">

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Left Column: Post Form + Logout -->
    <div class="bg-white p-6 rounded shadow flex flex-col">
      <!-- Logout / Welcome Row -->
<div class="flex justify-between items-center mb-4 md:mb-6">
    <h1 class="text-xl font-bold text-[#1e40af]">Welcome, <?= htmlspecialchars($_SESSION['admin']) ?>!</h1>
    <a href="?logout=1" class="bg-red-600 text-white px-4 py-2 rounded">Logout</a>
</div>
        <!-- Post / Update Form -->
        <h2 class="text-xl font-semibold mb-4" id="formTitle">Post Content</h2>
        <form method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="hidden" name="action" value="post" id="formAction">
            <input type="hidden" name="id" id="edit-id">

            <div>
                <label class="block">Category</label>
                <select name="category" id="category" class="w-full border p-2 rounded" required>
                    <option value="">-- Select Category --</option>
                    <?php $categories->data_seek(0); while($cat = $categories->fetch_assoc()): ?>
                    <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div>
                <label class="block">Subcategory</label>
                <select name="subcategory" id="subcategory" class="w-full border p-2 rounded" required>
                    <option value="">-- Select Subcategory --</option>
                </select>
            </div>

            <div>
                <label class="block">Title</label>
                <input type="text" name="title" id="edit-title" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label class="block">Subtitle</label>
                <!-- <input type="text" name="subtitle" id="edit-subtitle" class="w-full border p-2 rounded"> -->
                <textarea name="subtitle" id="edit-subtitle" 
    class="w-full border p-2 rounded h-24"
    placeholder="Enter subtitle..."></textarea>

                
            </div>

            <div>
                <label class="block">PDF File</label>
                <input type="file" name="pdf" accept=".pdf">
                <div id="current-pdf" class="mt-2 text-sm text-blue-500"></div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded" id="submitBtn">Post</button>
                <button type="button" id="clearBtn" class="bg-gray-400 text-white px-4 py-2 rounded">Cancel</button>
            </div>
        </form>
    </div>

    <!-- Right Column: Search + Posted Content -->
    <div class="flex flex-col gap-4">

        <!-- Search -->
        <form method="GET" class="flex gap-2">
            <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search..." class="border p-2 rounded flex-1">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
            <a href="<?= strtok($_SERVER["REQUEST_URI"], '?') ?>" class="bg-gray-400 text-white px-4 py-2 rounded">Clear</a>
        </form>

        <!-- Posted Content -->
        <div class="bg-white p-6 rounded shadow flex-1 overflow-auto">
            <h2 class="text-xl font-semibold mb-4">Posted Content</h2>
            <ul class="space-y-4">
                <?php while($row = $content->fetch_assoc()): ?>
                <li class="p-4 border rounded">
                    <div class="flex justify-between flex-col md:flex-row">
                        <div>
                               <?php
// Original full title
$title = $row['title'];

// Strip HTML tags (just in case) and split into words
$words = explode(" ", strip_tags($title));

// Limit to 5 words, add ellipsis if needed
$preview_title = (count($words) > 20) 
    ? implode(" ", array_slice($words, 0, 5)) . "..." 
    : $title;
?>

<h3 class="font-bold"><?= htmlspecialchars($preview_title) ?></h3>


               <?php
// Original full subtitle
$subtitle = $row['subtitle'];

// Strip HTML tags (just in case)
$clean_subtitle = strip_tags($subtitle);

// Limit to 10 characters, add ellipsis if needed
$preview_subtitle = (mb_strlen($clean_subtitle) > 10) 
    ? mb_substr($clean_subtitle, 0, 20) . "..." 
    : $clean_subtitle;

?>

                                <p class="text-sm text-gray-600"><?= htmlspecialchars($preview_subtitle) ?></p>  
                            <p class="text-xs text-gray-500"><?= $row['category'] ?> → <?= $row['subcategory'] ?? "N/A" ?></p>
                            <p class="text-xs text-gray-400"> Uploaded: <?= date("F j, Y g:i A", strtotime($row['created_at'])) ?> <br>
                                <?php if ($row['updated_at'] && $row['updated_at'] != $row['created_at']): ?> Updated: <?= date("F j, Y g:i A", strtotime($row['updated_at'])) ?> <?php endif; ?>
                            </p>
                            <?php if ($row['pdf_path']): ?>
                            <a href="<?= $row['pdf_path'] ?>" target="_blank" class="text-blue-500 text-sm">View PDF</a>
                            <?php endif; ?>
                        </div>
                        <div class="mt-2 md:mt-0 space-x-2">
                            <button type="button" onclick='editPost(<?= json_encode($row) ?>)' class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</button>
                            <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Warning: Deleting this post will permanently remove it. Are you sure?');" class="bg-red-500 text-white px-3 py-1 rounded">Delete</a>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>

            <!-- Pagination -->
          <div class="mt-4 flex gap-2 flex-wrap justify-center">
    <?php
    $limit = 5; // how many page numbers to show at once
    $start = max(1, $page - floor($limit / 2));
    $end = min($totalPages, $start + $limit - 1);

    // Adjust start if we're at the end
    if ($end - $start + 1 < $limit) {
        $start = max(1, $end - $limit + 1);
    }
    ?>

    <!-- Previous button -->
    <?php if ($page > 1): ?>
        <a href="?page=<?= $page - 1 ?>&search=<?= urlencode($search) ?>" class="px-3 py-1 border rounded">Prev</a>
    <?php endif; ?>

    <!-- Page numbers -->
    <?php for ($i = $start; $i <= $end; $i++): ?>
        <a href="?page=<?= $i ?>&search=<?= urlencode($search) ?>"
           class="px-3 py-1 border rounded <?= $i == $page ? 'bg-blue-500 text-white' : '' ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <!-- Next button -->
    <?php if ($page < $totalPages): ?>
        <a href="?page=<?= $page + 1 ?>&search=<?= urlencode($search) ?>" class="px-3 py-1 border rounded">Next</a>
    <?php endif; ?>
</div>



        </div>

    </div>

</div>

<script>
const subcategories = <?= json_encode($subcategories) ?>;
const categorySelect = document.getElementById('category');
const subcategorySelect = document.getElementById('subcategory');
const currentPdfDiv = document.getElementById('current-pdf');
const clearBtn = document.getElementById('clearBtn');

categorySelect.addEventListener('change', function() {
    const catId = this.value;
    subcategorySelect.innerHTML = '<option value="">-- Select Subcategory --</option>';
    if (subcategories[catId]) {
        subcategories[catId].forEach(sub => {
            let opt = document.createElement('option');
            opt.value = sub.id;
            opt.textContent = sub.name;
            subcategorySelect.appendChild(opt);
        });
    }
});

// Edit function
function editPost(row) {
    document.getElementById('formTitle').textContent = "Update Content";
    document.getElementById('formAction').value = "update";
    document.getElementById('edit-id').value = row.id;
    document.getElementById('edit-title').value = row.title;
    document.getElementById('edit-subtitle').value = row.subtitle;

    // Fill categories and subcategories
    categorySelect.value = row.category_id;
    categorySelect.dispatchEvent(new Event('change'));
    subcategorySelect.value = row.subcategory_id ?? "";

    // Show current PDF if exists
    if (row.pdf_path) {
        currentPdfDiv.innerHTML = `Current PDF: <a href="${row.pdf_path}" target="_blank" class="text-blue-500">View PDF</a>`;
    } else {
        currentPdfDiv.textContent = '';
    }

    document.getElementById('submitBtn').textContent = "Update";
}

// Clear / Cancel button
clearBtn.addEventListener('click', () => {
    document.getElementById('formTitle').textContent = "Post Content";
    document.getElementById('formAction').value = "post";
    document.getElementById('edit-id').value = "";
    document.getElementById('edit-title').value = "";
    document.getElementById('edit-subtitle').value = "";
    categorySelect.value = "";
    subcategorySelect.innerHTML = '<option value="">-- Select Subcategory --</option>';
    currentPdfDiv.textContent = '';
    document.getElementById('submitBtn').textContent = "Post";
});
</script>

</body>
</html>
