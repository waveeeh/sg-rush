<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposed Ordinance | Sangguniang Bayan ng Bongabon</title>
       <link rel="icon" type="image/x-icon" href="../assets/icon.png" />
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-gray-50 font-sans antialiased">

    <!-- Header -->
<header class="sticky top-0 z-50 bg-white shadow-md">
  <div class="container mx-auto px-4 py-3 flex justify-between items-center">
    <!-- Logo -->
    <a href="../landing.php" class="flex items-center space-x-2">
      <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
<img src="../assets/icon.png" alt="Sangguniang Bayan Logo" class="w-10 h-10 rounded-full" />

      </div>
      <span class="text-xl font-bold text-dark">SB Bongabon</span>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center space-x-8">
      <a href="../landing.php" class="text-gray-600 hover:text-primary transition-colors">Home</a>
      <a href="../about/index.php" class="text-gray-600 hover:text-primary transition-colors">About the Sanggunian</a>
      <a href="index.php" class="text-primary font-medium">Proposed Ordinance</a>
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
   <img src="../assets/icon.png" alt="Sangguniang Bayan Logo" class="rounded-full" />

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
    <a href="../landing.php" class="text-gray-600 hover:text-primary transition-colors">Home</a>
    <a href="../about/index.php" class="text-gray-600 hover:text-primary transition-colors">About the Sanggunian</a>
    <a href="index.php" class="text-primary font-medium">Proposed Ordinance</a>
  </nav>
</div>

    <!-- Hero Section -->
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

     <?php include  "../includes/section-nav.php"; ?>
    
    <!-- Features/Content Section pwedeng pdf na lang to pag read more -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Proposed measures in the Sangguniang Bayan</h2>
                <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-file-alt text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Ordinances</h3>
                    <p class="text-gray-600">Local laws enacted by the Sanggunian to regulate community affairs and promote general welfare.</p>
                    <a class="text-indigo-500 inline-flex items-center">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-scroll text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Resolutions</h3>
                    <p class="text-gray-600">Formal expressions of opinion, will, or intent intended to govern the administrative business of the Sanggunian.</p>
                    <a class="text-indigo-500 inline-flex items-center">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-users text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Sessions</h3>
                    <p class="text-gray-600">Regular meetings where Sanggunian members discuss, debate, and decide on legislative matters.</p>
                    <a class="text-indigo-500 inline-flex items-center">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-clipboard-list text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Committees</h3>
                    <p class="text-gray-600">Specialized groups that study specific issues in depth and make recommendations to the full Sanggunian.</p>
                    <a class="text-indigo-500 inline-flex items-center">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pili ka ano mas maganda -->
    <section class="text-gray-600 bg-white body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="bg-light rounded-xl p-6 hover:shadow-md transition-shadow">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                            <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pagination aayusin pa-->
    <div class="max-w-screen-xl mx-auto mt-12 px-4 text-gray-600 md:px-8">
        <div class="hidden items-center justify-between sm:flex" aria-label="Pagination">
            <a href="#" class="hover:text-indigo-600 flex items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
                </svg>
                Previous
            </a>
            <ul class="flex items-center gap-1">
                <li class="text-sm">
                    <div>
                        1
                    </div>
                </li>
                <li class="text-sm">
                    <a href="#" aria-current="page" class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50 bg-indigo-50 text-indigo-600 font-medium">
                        2
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50">
                        3
                    </a>
                </li>
                <li class="text-sm">
                    <div>
                        ...
                    </div>
                </li>
                <li class="text-sm">
                    <a href="#" class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50">
                        8
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50">
                        9
                    </a>
                </li>
                <li class="text-sm">
                    <a href="#" class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50">
                        10
                    </a>
                </li>
            </ul>
            <a href="#" class="hover:text-indigo-600 flex items-center gap-x-2">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <!-- On mobile version -->
        <div class="flex items-center justify-between text-sm text-gray-600 font-medium sm:hidden">
            <a href="#" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Previous</a>
            <div class="font-medium">
                Page 1 of 9
            </div>
            <a href="#" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Next</a>
        </div>
    </div>


      <?php include  "../includes/footer.php"; ?>
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