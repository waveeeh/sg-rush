<?php include "../db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14th Ordinances  | Sanggunian ng Bongabon</title>
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
            <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">14th Sangguniang Bayan</h2>
            <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">ORDINANCES</h1>
            <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
        </div>
    </div>

    <!-- Search -->
    <div class="container mx-auto px-4 max-w-3xl">
    <form id="search-form" class="relative">
      <input type="search" id="search-input" name="query"
             class="w-full p-4 ps-12 border border-gray-300 rounded-full focus:ring-blue-500 focus:border-blue-500"
             placeholder="Search here..." autocomplete="off" required>
      <button type="submit" class="absolute end-2.5 top-2.5 bg-blue-700 hover:bg-blue-800 text-white rounded-full px-5 py-2">
        Search
      </button>
    </form>

<div id="search-results" class="mt-2 space-y-4 max-h-96 overflow-y-auto"></div>
<p id="results-count" class="text-gray-600 mt-2 hidden"></p>

  </div>
</section>

<section class="text-gray-600 bg-white body-font overflow-hidden">

<?php
// Pagination setup
$limit = 10;
$page_num = isset($_GET['p']) ? intval($_GET['p']) : 1;
$offset = ($page_num - 1) * $limit;

$subcategory_id = 8;

// Count total records in that subcategory
$total_res = $conn->query("SELECT COUNT(*) as total FROM content WHERE subcategory_id = $subcategory_id");
$total = $total_res->fetch_assoc()['total'];
$total_pages = ceil($total / $limit);

// Fetch paginated data for session cards
$res = $conn->query("SELECT * FROM content 
                     WHERE subcategory_id = $subcategory_id 
                     ORDER BY created_at DESC 
                     LIMIT $limit OFFSET $offset");

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
        <h3 class="text-md text-gray-700 italic mb-2">  <?= htmlspecialchars(mb_strimwidth($row['subtitle'], 0, 300, "...")) ?></h3>
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
    $limit = 5; // how many page numbers to show at once
    $start = max(1, $page_num - floor($limit / 2));
    $end = min($total_pages, $start + $limit - 1);

    // Adjust start if we're at the end
    if ($end - $start + 1 < $limit) {
        $start = max(1, $end - $limit + 1);
    }
    ?>

    <!-- Previous button -->
    <?php if ($page_num > 1): ?>
        <a href="?p=<?= $page_num - 1 ?>" class="px-3 py-2 bg-gray-200 rounded">Previous</a>
    <?php endif; ?>

    <!-- Page numbers -->
    <?php for ($i = $start; $i <= $end; $i++): ?>
        <a href="?p=<?= $i ?>"
           class="px-3 py-2 border rounded <?= $i == $page_num ? 'bg-blue-500 text-white' : 'bg-gray-200' ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <!-- Next button -->
    <?php if ($page_num < $total_pages): ?>
        <a href="?p=<?= $page_num + 1 ?>" class="px-3 py-2 bg-gray-200 rounded">Next</a>
    <?php endif; ?>
</div>

</section>

<?php // 🔹 Fetch ALL records with PDFs (no pagination)
$pdf_res = $conn->query("SELECT id, title, pdf_path 
                         FROM content 
                         WHERE subcategory_id = $subcategory_id 
                         AND pdf_path IS NOT NULL 
                         ORDER BY created_at DESC");

$pdf_rows = [];
while($row = $pdf_res->fetch_assoc()) {
    $pdf_rows[] = $row;
} ?>

<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">DOWNLOAD (PDF)</h1>
            <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>

    <?php if (!empty($pdf_rows)): ?>
    <ul class="space-y-2 text-gray-700 text-left">
        <?php foreach ($pdf_rows as $row): ?>
            <li class="flex items-start">
                <span class="mt-1 mr-2 h-2 w-2 rounded-full bg-gray-500 flex-shrink-0"></span>
                <a href="../<?= $row['pdf_path'] ?>" download 
                   class="text-blue-600 hover:underline break-words">
                    <?= htmlspecialchars($row['title']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p class="text-gray-500 italic">No PDF available at the moment.</p>
<?php endif; ?>

        </div>
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


// helper function to format date
function formatDate(dateStr) {
    const d = new Date(dateStr);
    const options = { month: 'short', day: 'numeric', year: 'numeric' };
    let datePart = d.toLocaleDateString('en-US', options);

    let hours = d.getHours() % 12 || 12; // 12-hour format
    let minutes = d.getMinutes().toString().padStart(2, '0');
    let ampm = d.getHours() >= 12 ? 'PM' : 'AM';

    return `${datePart} ${hours}:${minutes} ${ampm}`;
}

// AJAX Search
const form = document.getElementById('search-form');
const input = document.getElementById('search-input');
const resultsBox = document.getElementById('search-results');

form.addEventListener('submit', function(e) {
    e.preventDefault();
    const query = input.value.trim();
    if (!query) {
        resultsBox.innerHTML = ''; // clear results if input is empty
        return;
    }

// Detect subcategory depending on page filename
let currentPage = window.location.pathname.split("/").pop();
let subcategoryId = 1; // default

if (currentPage === "index.php") subcategoryId = 7;
else if (currentPage === "14thSB.php") subcategoryId = 8;
else if (currentPage === "13thSB.php") subcategoryId = 9;
else if (currentPage === "previous.php") subcategoryId = 10;

fetch('search.php?query=' + encodeURIComponent(query) + '&subcategory_id=' + subcategoryId)

    .then(res => res.json())
    .then(data => {
        resultsBox.innerHTML = '';
        const resultsCount = document.getElementById('results-count');

        if (data.length === 0) {
            resultsBox.innerHTML = '<p class="text-gray-500">No results found.</p>';
            resultsCount.textContent = '';
            resultsCount.classList.add('hidden');
            resultsBox.classList.remove('border-2', 'border-gray-200'); // remove border
            return;
        }

        // Show total results + add border
        resultsCount.textContent = `Total results: ${data.length}`;
        resultsCount.classList.remove('hidden');
        resultsBox.classList.add('border-2', 'border-gray-200'); // add border

        data.forEach(item => {
    const div = document.createElement('div');
    div.classList.add('p-4', 'bg-gray-100', 'rounded', 'shadow', "m-2");

    // truncate title (100 chars)
    const truncatedTitle = item.title.length > 100 
        ? item.title.substring(0, 100) + "..." 
        : item.title;

    // truncate subtitle (150 chars) only if it exists
    const truncatedSubtitle = item.subtitle && item.subtitle.length > 150 
        ? item.subtitle.substring(0, 150) + "..." 
        : item.subtitle || '';

    div.innerHTML = `
        <h2 class="text-xl font-bold text-gray-600">${truncatedTitle}</h2>
        ${truncatedSubtitle ? `<h3 class="text-gray-700 italic">${truncatedSubtitle}</h3>` : ''}
        <a href="../v/vw.php?id=${item.id}" class="text-blue-500">Read More</a>
     <small class="block text-gray-500 mt-2">
    ${item.updated_at 
        ? 'Updated: ' + formatDate(item.updated_at) 
        : 'Uploaded: ' + formatDate(item.created_at)}
</small>
    `;
    resultsBox.appendChild(div);
});

    });



});

// Clear results as user clears input
input.addEventListener('input', function() {
    const resultsCount = document.getElementById('results-count');
    if (input.value.trim() === '') {
        resultsBox.innerHTML = '';
        resultsCount.textContent = '';
        resultsCount.classList.add('hidden');
        resultsBox.classList.remove('border-2', 'border-gray-200'); // remove border when cleared
    }
});

</script>

</body>
</html>
