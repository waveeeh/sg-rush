<?php include "../db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>--- | Sanggunian ng Bongabon</title>
    <link rel="icon" type="image/x-icon" href="../assets/icon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#3b82f6',
                        accent: '#f59e0b',
                        dark: '#1f2937',
                        light: '#f8fafc'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">

<?php include "../includes/default-header.php" ?>
<?php include "../includes/default-banner.php" ?>
<?php include "../includes/section-nav.php"; ?>

<!--Content-->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-8">
          <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">
  <?php if (!empty($_GET['q'])): ?>
    Search Results for: <?= htmlspecialchars($_GET['q']) ?>
  <?php else: ?>
  All Files Uploaded
  <?php endif; ?>
</h1>
            <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
        </div>
    </div>
</section>

<section class="text-gray-600 bg-white body-font overflow-hidden">

<?php
// Pagination setup
$limit = 10;
$page_num = isset($_GET['p']) ? intval($_GET['p']) : 1;
$offset = ($page_num - 1) * $limit;

$q = isset($_GET['q']) ? trim($_GET['q']) : ""; // search query

// Count total records
if ($q !== "") {
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM content WHERE title LIKE ?");
    $like = "%" . $q . "%";
    $stmt->bind_param("s", $like);
    $stmt->execute();
    $total_res = $stmt->get_result();
} else {
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM content");
    $stmt->execute();
    $total_res = $stmt->get_result();
}

$total = $total_res->fetch_assoc()['total'];
$total_pages = ceil($total / $limit);

// Fetch paginated data
if ($q !== "") {
    $stmt = $conn->prepare("SELECT * FROM content 
                            WHERE title LIKE ? 
                            ORDER BY created_at DESC 
                            LIMIT ? OFFSET ?");
    $stmt->bind_param("sii", $like, $limit, $offset);
} else {
    $stmt = $conn->prepare("SELECT * FROM content 
                            ORDER BY created_at DESC 
                            LIMIT ? OFFSET ?");
    $stmt->bind_param("ii", $limit, $offset);
}

$stmt->execute();
$res = $stmt->get_result();

$rows = [];
while($row = $res->fetch_assoc()) {
    $rows[] = $row;
}

// Display session cards
foreach ($rows as $row):
?>
  <div class="bg-gray-100 shadow p-4 rounded mb-5 mx-10">
    <h2 class="text-xl font-bold"><?= htmlspecialchars($row['title']) ?></h2>
    <?php if (!empty($row['subtitle'])): ?>
        <h3 class="text-md text-gray-700 italic mb-2"><?= htmlspecialchars(mb_strimwidth($row['subtitle'], 0, 300, "...")) ?></h3>
    <?php endif; ?>

    <a href="../v/vw.php?id=<?= $row['id'] ?>" class="text-blue-500">Read More</a>

    <small class="text-gray-500 block mt-2">
    <?php if (!empty($row['updated_at'])): ?>
        Updated: <?= date("F j, Y g:i A", strtotime($row['updated_at'])) ?>
    <?php else: ?>
        Uploaded: <?= date("F j, Y g:i A", strtotime($row['created_at'])) ?>
    <?php endif; ?>
    </small>
  </div>
<?php endforeach; ?>

<!-- Pagination -->
<div class="mt-6 flex gap-2 flex-wrap justify-center">
    <?php
    $limit_links = 5; // how many page numbers to show at once
    $start = max(1, $page_num - floor($limit_links / 2));
    $end = min($total_pages, $start + $limit_links - 1);

    if ($end - $start + 1 < $limit_links) {
        $start = max(1, $end - $limit_links + 1);
    }
    ?>

    <!-- Previous button -->
    <?php if ($page_num > 1): ?>
        <a href="?p=<?= $page_num - 1 ?>&q=<?= urlencode($q) ?>" class="px-3 py-2 bg-gray-200 rounded">Previous</a>
    <?php endif; ?>

    <!-- Page numbers -->
    <?php for ($i = $start; $i <= $end; $i++): ?>
        <a href="?p=<?= $i ?>&q=<?= urlencode($q) ?>"
           class="px-3 py-2 border rounded <?= $i == $page_num ? 'bg-blue-500 text-white' : 'bg-gray-200' ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <!-- Next button -->
    <?php if ($page_num < $total_pages): ?>
        <a href="?p=<?= $page_num + 1 ?>&q=<?= urlencode($q) ?>" class="px-3 py-2 bg-gray-200 rounded">Next</a>
    <?php endif; ?>
</div>

</section>

<?php include "../includes/footer.php"; ?>

<script>
// Mobile menu
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => { mobileMenu.classList.remove("hidden"); });
closeBtn.addEventListener("click", () => { mobileMenu.classList.add("hidden"); });
</script>

</body>
</html>
