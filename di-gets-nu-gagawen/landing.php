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

<!-- Header -->
<header class="sticky top-0 z-50 bg-white shadow-md">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <!-- Logo -->
    <a href="landing.php" class="flex items-center space-x-2">
      <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
        <img src="assets/icon.png" alt="Sangguniang Bayan Logo" class="w-10 h-10 rounded-full" />
      </div>
      <span class="text-xl font-bold text-dark">SB Bongabon</span>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center space-x-8">
      <a href="landing.php" class="text-primary font-medium">Home</a>
      <a href="about/index.php" class="text-gray-600 hover:text-primary transition-colors">About the Sanggunian</a>
      <a href="proposed/index.php" class="text-gray-600 hover:text-primary transition-colors">Proposed Ordinances</a>
    </nav>

    <!-- Search + Mobile Toggle -->
    <div class="flex items-center space-x-4">
      <!-- Search (desktop only) -->
      <div class="hidden md:flex items-center bg-gray-100 rounded-full px-3 py-1.5">
        <input type="text" placeholder="Search..." 
               class="bg-transparent border-none focus:outline-none focus:ring-0 w-36 lg:w-44">
        <button type="submit" class="text-gray-500 hover:text-primary">
          <i class="fas fa-search"></i>
        </button>
      </div>

      <!-- Mobile Menu Button -->
      <button id="menu-btn" class="md:hidden text-gray-600">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>
  </div>
</header>

<!-- Fullscreen Mobile Menu (overlay) -->
<div id="mobile-menu" class="fixed inset-0 bg-white hidden z-50 flex flex-col">
  <!-- Top bar inside overlay -->
  <div class="flex justify-between items-center px-4 py-3 border-b">
    <!-- Close button on right -->
    <button id="close-btn" class="ml-auto text-gray-600">
      <i class="fas fa-times text-2xl"></i>
    </button>
  </div>

  <!-- Centered Logo inside mobile menu -->
  <div class="flex flex-col items-center justify-center py-6 border-b">
    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center">
   <img src="assets/icon.png" alt="Sangguniang Bayan Logo" class="rounded-full" />

    </div>
    <span class="mt-3 text-2xl font-bold text-dark">SB Bongabon</span>
  </div>

  <!-- Search (mobile only) -->
  <div class="px-4 py-3 border-b">
    <div class="flex items-center bg-gray-100 rounded-full px-3 py-1.5">
      <input type="text" placeholder="Search..." 
             class="bg-transparent border-none focus:outline-none focus:ring-0 w-full">
      <button type="submit" class="text-gray-500 hover:text-primary">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>

  <!-- Navigation Links -->
  <nav class="flex flex-col space-y-4 px-4 py-6 text-lg">
    <a href="landing.php" class="text-primary font-medium">SB Home</a>
    <a href="about/index.php" class="text-gray-600 hover:text-primary transition-colors">About the Sanggunian</a>
    <a href="proposed/index.php" class="text-gray-600 hover:text-primary transition-colors">Proposed Ordinance</a>
  </nav>
</div>


    <!-- Carousel Section -->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://scontent.fmnl17-7.fna.fbcdn.net/v/t39.30808-6/514098782_122158060088537199_2280862184484719632_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=3ucOXzb5QIgQ7kNvwEMjFWu&_nc_oc=Adnue-PAhymLLEMuus3CXb5KUZ53xo1RVplvIwuBvgE75ohxasAbGTXxzdE3_-9hmK0&_nc_zt=23&_nc_ht=scontent.fmnl17-7.fna&_nc_gid=C9czznGhjPvqoWPcYw1dtQ&oh=00_AfanKMqpTobvvu2i3tpUI2Y1Hyo9voCjPhXFzxZ---b1zg&oe=68C9E297" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://scontent.fmnl17-5.fna.fbcdn.net/v/t39.30808-6/514002762_122158059980537199_4565664459683296491_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=127cfc&_nc_ohc=lPlIB4C9KQcQ7kNvwH9B3ca&_nc_oc=Adkkwr46rZ-eTp95T1RtPYZDexbyVe5yrrbd-G5Pn940hlRUHJkilgmI-A6c2vkniqY&_nc_zt=23&_nc_ht=scontent.fmnl17-5.fna&_nc_gid=WF4uhixccABe5pmGZzHfyA&oh=00_AfaHWTVJQ8_yWIdcNQC1guqQd62_ty9ug6WQ6BInHdI3Qw&oe=68C9EF6B" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://scontent.fmnl17-3.fna.fbcdn.net/v/t39.30808-6/515013107_122158188332537199_3912422767005767001_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=127cfc&_nc_ohc=U7zxWVSUjhkQ7kNvwEeEd9e&_nc_oc=Adlug8uBlZTeUYnoRWMh_IZxAN2xw3gjwf1dAVH1Rojbmt-Bc0Htp2rGbFgIur9FXmo&_nc_zt=23&_nc_ht=scontent.fmnl17-3.fna&_nc_gid=IxP5NpPJT1G50auuqt5M7Q&oh=00_Afald1QE3i1nSOtci-xS1W06Od4J_hsg73ebUTZrXfT0Og&oe=68C9F038" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://scontent.fmnl17-3.fna.fbcdn.net/v/t39.30808-6/515013107_122158188332537199_3912422767005767001_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=127cfc&_nc_ohc=U7zxWVSUjhkQ7kNvwEeEd9e&_nc_oc=Adlug8uBlZTeUYnoRWMh_IZxAN2xw3gjwf1dAVH1Rojbmt-Bc0Htp2rGbFgIur9FXmo&_nc_zt=23&_nc_ht=scontent.fmnl17-3.fna&_nc_gid=IxP5NpPJT1G50auuqt5M7Q&oh=00_Afald1QE3i1nSOtci-xS1W06Od4J_hsg73ebUTZrXfT0Og&oe=68C9F038" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://scontent.fmnl17-3.fna.fbcdn.net/v/t39.30808-6/515013107_122158188332537199_3912422767005767001_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=127cfc&_nc_ohc=U7zxWVSUjhkQ7kNvwEeEd9e&_nc_oc=Adlug8uBlZTeUYnoRWMh_IZxAN2xw3gjwf1dAVH1Rojbmt-Bc0Htp2rGbFgIur9FXmo&_nc_zt=23&_nc_ht=scontent.fmnl17-3.fna&_nc_gid=IxP5NpPJT1G50auuqt5M7Q&oh=00_Afald1QE3i1nSOtci-xS1W06Od4J_hsg73ebUTZrXfT0Og&oe=68C9F038" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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
        <li><a href="standingc/15thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Standing Committees</a></li>
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
        <li><a href="regulars/15thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Regular Sessions</a></li>
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
        <li><a href="resolution/15thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Resolutions</a></li>
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
        <li><a href="ordinance/15thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SB Ordinances</a></li>
        <li><a href="ordinance/14thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SB Ordinances</a></li>
        <li><a href="ordinance/13thSB.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">13th SB Ordinances</a></li>
        <li><a href="ordinance/previous.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous SB Ordinances (1948-12 SP)</a></li>
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

    
    <!--Contact Section-->
     <main class="py-14 bg-white">
      <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
        <div class="max-w-xl space-y-3">
          <h3 class="text-indigo-600 font-semibold" id="contact-info" >Contact</h3>
          <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
            Let us know how we can help
          </p>
          <p>
            We're here to help and answer any question you might have. We look
            forward to hearing from you.
          </p>
        </div>
        <div>
          <div class="mt-12">
            <div
              class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-6"
            >
              <div class="text-center sm:text-left">
                <h4 class="text-gray-800 text-lg font-medium">Our Office</h4>
                <div
                  class="mt-3 flex items-center gap-x-3 justify-center sm:justify-start"
                >
                  <div class="flex-none text-gray-400">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                      />
                    </svg>
                  </div>
                  <a
                    href="https://maps.app.goo.gl/smtfGCGW1nwuho378"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="hover:text-indigo-600 transition-colors duration-200"
                  >
                    <p>
                      Bongabon Municipal Hall, <br />Brgy. Sinipit, Bongabon,
                      Nueva Ecija
                    </p>
                  </a>
                </div>
              </div>
              <div class="text-center sm:text-left">
                <h4 class="text-gray-800 text-lg font-medium">Office Hour</h4>
                <div
                  class="mt-3 flex items-center gap-x-3 justify-center sm:justify-start"
                >
                  <div class="flex-none text-gray-400">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                  </div>
                  <p>Monday-Friday, 8:00 AM - 5:00 PM.</p>
                </div>
              </div>

              <div class="text-center sm:text-left">
                <h4 class="text-gray-800 text-lg font-medium">Email</h4>
                <div
                  class="mt-3 flex items-center gap-x-3 justify-center sm:justify-start"
                >
                  <div class="flex-none text-gray-400">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                      />
                    </svg>
                  </div>
                  <a
                    href="https://mail.google.com/mail/?view=cm&fs=1&to=office.of.vmbinuya@gmail.con"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="hover:text-indigo-600 transition-colors duration-200"
                  >
                    <p>office.of.vmbinuya@gmail.con</p>
                  </a>
                </div>
              </div>

              <div class="text-center sm:text-left">
                <h4 class="text-gray-800 text-lg font-medium">Facebook Page</h4>
                <div
                  class="mt-3 flex items-center gap-x-3 justify-center sm:justify-start"
                >
                  <div class="flex-none text-gray-400">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                    >
                      <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.959.192-1.333 1.581-1.333h2.419v-3h-3c-3.007 0-4 1.334-4 3.5v1.5z"
                      />
                    </svg>
                  </div>
                  <a
                    href="https://www.facebook.com/people/Sangguniang-Bayan-ng-Bongabon-2025-2028/61579079125289/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="hover:text-indigo-600 transition-colors duration-200"
                  >
                    <p>Sangguniang Bayan ng Bongabon 2025-2028</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-10 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-bold mb-6">SB Bongabon</h3>
                    <p class="text-gray-400 mb-6">The Sangguniang Bayan ng Bongabon is committed to serving the community through effective legislation and governance.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/people/Sangguniang-Bayan-ng-Bongabon-2025-2028/61579079125289/" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="about" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="ordinance/15thSB.php" class="text-gray-400 hover:text-white">Ordinances</a></li>
                        <li><a href="resolution/15thSB.php" class="text-gray-400 hover:text-white">Resolutions</a></li>
                        <li><a href="#contact-info" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white">Publications</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">News & Updates</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Government Links</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Downloadable Forms</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6">Contact Info</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span>Municipal Hall Building, Bongabon, Nueva Ecija</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3"></i>
                            <span>(044) 123-4567</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3"></i>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=office.of.vmbinuya@gmail.con"
                  target="_blank"
                  rel="noopener noreferrer">
                                <span class="hover:text-white">office.of.vmbinuya@gmail.con</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2025 SANGGUNIANG BAYAN NG BONGABON. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
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