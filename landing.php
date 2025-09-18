<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Sanggunian ng Bongabon</title>
       <link rel="icon" type="image/x-icon" href="assets/icon.png" />
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


<?php include "includes/home-header.php" ?>


    <!-- Carousel Section -->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img0.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!--Hero Section 2-->
    <div class="relative z-10 w-full px-4 py-16 md:px-8 bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://cdn.fastpixel.io/fp/ret_img+v_5b0f+w_794+h_447+q_glossy+to_webp/nebmci.org/wp-content/uploads/2021/05/bongabon-3.png');">
        <div class="max-w-screen-xl mx-auto">
            <div class="space-y-5 max-w-4xl mx-auto text-center">
                <h2 class="text-4xl text-gray-800 font-extrabold mx-auto md:text-5xl">
                    SANGGUNIANG BAYAN NG BONGABON    
                </h2>
                <p class="max-w-2xl mx-auto text-gray-600">
                    Sed ut perspiciatis unde omnis iste natus voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                </p>
            </div>
        </div>           
    </div>

<!-- Section Nav -->
<div class="relative z-10 border-b border-gray-200 bg-white dark:border-gray-700">
  <ul class="grid grid-cols-2 sm:flex sm:flex-wrap sm:justify-center 
             text-sm md:text-base font-medium text-center text-gray-600 
             gap-2 sm:gap-0"
      id="default-tab" role="tablist">

    <!-- Standing Committees -->
    <li class="relative group" role="presentation">
      <button class="w-full sm:w-auto inline-block px-3 md:px-4 py-3 border-b-2 border-transparent rounded-t-lg 
                     hover:text-blue-600 hover:border-blue-600">
        Standing Committees
      </button>
      <!-- Dropdown -->
      <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md min-w-full text-gray-600 z-50">
        <li><a href="standingc/index.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Standing Committees</a></li>
        <li><a href="standingc/14thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SB Standing Committees</a></li>
        <li><a href="standingc/previous.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous SB Standing Committees</a></li>
      </ul>
    </li>

    <!-- Regular Sessions -->
    <li class="relative group" role="presentation">
      <button class="w-full sm:w-auto inline-block px-3 md:px-4 py-3 border-b-2 border-transparent rounded-t-lg 
                     hover:text-blue-600 hover:border-blue-600">
        Regular Sessions
      </button>
      <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md min-w-full text-gray-600 z-50">
        <li><a href="regulars/index.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Regular Sessions</a></li>
        <li><a href="regulars/14thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SB Regular Sessions</a></li>
        <li><a href="regulars/13thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">13th SB Regular Sessions</a></li>
      </ul>
    </li>

    <!-- Resolutions -->
    <li class="relative group" role="presentation">
      <button class="w-full sm:w-auto inline-block px-3 md:px-4 py-3 border-b-2 border-transparent rounded-t-lg 
                     hover:text-blue-600 hover:border-blue-600">
        Resolutions
      </button>
      <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md min-w-full text-gray-600 z-50">
        <li><a href="resolution/index.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Resolutions</a></li>
        <li><a href="resolution/14thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SB Resolutions</a></li>
        <li><a href="resolution/previous.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous SB Resolutions (2010-2022)</a></li>
      </ul>
    </li>

    <!-- Ordinances -->
    <li class="relative group" role="presentation">
      <button class="w-full sm:w-auto inline-block px-3 md:px-4 py-3 border-b-2 border-transparent rounded-t-lg 
                     hover:text-blue-600 hover:border-blue-600">
        Ordinances
      </button>
      <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md min-w-full text-gray-600 z-50">
        <li><a href="ordinance/index.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Ordinances</a></li>
        <li><a href="ordinance/14thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SB Ordinances</a></li>
        <li><a href="ordinance/13thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">13th SB Ordinances</a></li>
        <li><a href="ordinance/previous.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous SB Ordinances (1948-12 SB)</a></li>
      </ul>
    </li>

  </ul>
</div>


    <!-- Blog Section -->
    <div class="bg-[#F2F9FF] py-8">
        <div class="max-w-6xl mx-auto p-6">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Left side - Image section -->
                <div class="md:w-2/5">
                <img src="https://cdn.sanity.io/images/anl9abaw/production/0badf9aa9b89b64565154a17758d43baca982d97-1920x1280.png?w=3840&q=75&fit=clip&auto=format" 
                    alt="Content image" 
                    class="w-full h-64 object-cover rounded-lg">
                </div>
                
                <!-- Right side - Content section -->
                <div class="md:w-3/5">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">The City's Law-making Body</h2>
                <p class="text-gray-700 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
                <p class="text-gray-700">
                    Additional content goes here. Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">The Mace: Emblem of Authority and Order</h2>
                <p class="text-gray-700 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
                <p class="text-gray-700">
                    Additional content goes here. Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
        </div>
    </div>

    <!-- Sg Members Section -->
    <div class="max-w-8xl mx-auto p-6">
        <!-- Image Section (80% width, centered) -->
        <div class="flex justify-center mb-6">
            <div class="w-full md:w-4/5">
            <img src="https://georgiatoday.ge/wp-content/uploads/2022/11/1.jpg" 
                alt="Content image" 
                class="w-full h-96 object-cover rounded-lg mx-auto">
            </div>
        </div>
        
        <!-- Title and Subtitle (centered) -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Members of the 15th Sanggunian</h2>
            <h3 class="text-lg text-gray-600">This is a compelling subtitle that summarizes the content</h3>
        </div>
        
        <!-- Content below (centered, 80% width) -->
        <div class="mx-auto w-full md:w-4/5">
            <p class="text-gray-700 mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </p>
            <p class="text-gray-700">
            Additional content goes here. Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>
    </div>

    <?php include "includes/home-footer.php" ?>
    
    
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