<?php include "../db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read More | Sanggunian ng Bongabon</title>
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

<?php
$post = null;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $res = $conn->query("SELECT * FROM content WHERE id = $id");
    if ($res && $res->num_rows > 0) {
        $post = $res->fetch_assoc();
    }
}
?>

<div class="bg-white shadow p-6 rounded max-w-4xl mx-auto my-10">
    <?php if ($post): ?>
        <h1 class="text-2xl font-bold mb-4"><?= htmlspecialchars($post['title']) ?></h1>

        <?php if (!empty($post['pdf_path'])): ?>
            <?php 
                $ext = strtolower(pathinfo($post['pdf_path'], PATHINFO_EXTENSION)); 
                if ($ext === "pdf"): 
            ?>
                <!-- PDF Embed -->
                <iframe src="../<?= htmlspecialchars($post['pdf_path']) ?>" 
                        class="w-full h-[600px] border rounded my-4" 
                        frameborder="0"></iframe>
                <a href="../<?= htmlspecialchars($post['pdf_path']) ?>" target="_blank" 
                   class="text-blue-500 underline block mt-2">📄 Open PDF in New Tab</a>
            <?php else: ?>
                <!-- Image -->
                <img src="../<?= htmlspecialchars($post['pdf_path']) ?>" 
                     alt="Post File" 
                     class="w-full h-64 object-cover rounded my-2">
            <?php endif; ?>
        <?php endif; ?>

        <!-- Allow HTML links inside subtitle -->
        <div class="prose max-w-none">
            <?= $post['subtitle'] ?>
        </div>

        <small class="text-gray-500 block mt-4">
            <?= date("F j, Y g:i A", strtotime($post['created_at'])) ?>
        </small>

    <?php else: ?>
        <!-- Error Message -->
        <div class="text-center py-20">
            <i class="fa-solid fa-triangle-exclamation text-red-500 text-5xl mb-4"></i>
            <h2 class="text-2xl font-semibold mb-2">Unavailable Content</h2>
            <p class="text-gray-600">The content you’re looking for doesn’t exist or is no longer available.</p>
            <a href="../landing.php" class="mt-4 inline-block px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
                Back to Home
            </a>
        </div>
    <?php endif; ?>
</div>

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
