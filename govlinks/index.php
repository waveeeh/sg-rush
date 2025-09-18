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


<div class="bg-white shadow p-6 rounded max-w-4xl mx-auto my-10">
   
      <!-- Under Development Message -->
<div class="text-center py-20">
    <i class="fa-solid fa-tools text-yellow-500 text-5xl mb-4"></i>
    <h2 class="text-2xl font-semibold mb-2">Under Development</h2>
    <p class="text-gray-600">This page or feature is currently under development. Please check back later!</p>
    <a href="../landing.php" 
       class="mt-4 inline-block px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
        Back to Home
    </a>
</div>


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
