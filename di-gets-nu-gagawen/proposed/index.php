<?php include "../db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposed Ordinance | Sanggunian ng Bongabon</title>
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
            <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">PROPOSED ORDINANCES</h1>
            <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
        </div>
    </div>

    <!-- Search -->
    <form class="max-w-3xl px-8 mx-auto">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none text-gray-500">
                <i class="fas fa-search"></i>
            </div>
            <input type="search" id="default-search" 
                class="block w-full p-4 ps-12 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Search..." required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2">Search</button>
        </div>
    </form>
</section>

<section class="text-gray-600 bg-white body-font overflow-hidden">

<?php
// Pagination setup
$limit = 10;
$page_num = isset($_GET['p']) ? intval($_GET['p']) : 1;
$offset = ($page_num - 1) * $limit;

$subcategory_id = 11;

// Count total records in that subcategory
$total_res = $conn->query("SELECT COUNT(*) as total FROM content WHERE subcategory_id = $subcategory_id");
$total = $total_res->fetch_assoc()['total'];
$total_pages = ceil($total / $limit);

// Fetch data from that subcategory
$res = $conn->query("SELECT * FROM content 
                     WHERE subcategory_id = $subcategory_id 
                     ORDER BY created_at DESC 
                     LIMIT $limit OFFSET $offset");

// Store results in an array so we can reuse later
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
        <h3 class="text-md text-gray-700 italic mb-2"><?= htmlspecialchars($row['subtitle']) ?></h3>
    <?php endif; ?>

    <?php if (!empty($row['pdf_path'])): ?>
       <a href="../<?= $row['pdf_path'] ?>" target="_blank" class="block text-blue-500 underline my-2">
            📄 View PDF
        </a>
    <?php endif; ?>

    <a href="../v/vw.php?id=<?= $row['id'] ?>" class="text-blue-500">Read More</a>

    <small class="text-gray-500 block mt-2">
        <?= date("F j, Y g:i A", strtotime($row['created_at'])) ?>
    </small>
  </div>
<?php endforeach; ?>

<!-- Pagination -->
<div class="flex justify-between mt-6">
    <?php if ($page_num > 1): ?>
        <a href="?p=<?= $page_num-1 ?>" class="px-3 py-2 bg-gray-200 rounded">Previous</a>
    <?php endif; ?>
    <?php if ($page_num < $total_pages): ?>
        <a href="?p=<?= $page_num+1 ?>" class="px-3 py-2 bg-gray-200 rounded ml-auto">Next</a>
    <?php endif; ?>
</div>

</section>

<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">DOWNLOAD (PDF)</h1>
            <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>

        <ul class="space-y-2 text-gray-700 text-left">
    <?php foreach ($rows as $row): ?>
        <?php if (!empty($row['pdf_path'])): ?>
            <li class="flex items-start">
                <!-- Custom bullet -->
                <span class="mt-1 mr-2 h-2 w-2 rounded-full bg-gray-500 flex-shrink-0"></span>
                <a href="../<?= $row['pdf_path'] ?>" download 
                   class="text-blue-600 hover:underline break-words">
                    <?= htmlspecialchars($row['title']) ?>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

        </div>
    </div>
</section>

<?php include "../includes/footer.php"; ?>

<script>
// for mobile screen menu bar
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
  mobileMenu.classList.remove("hidden");
});

closeBtn.addEventListener("click", () => {
  mobileMenu.classList.add("hidden");
});
</script>

</body>
</html>
