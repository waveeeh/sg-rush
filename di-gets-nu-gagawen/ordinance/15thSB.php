<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>15th Ordinance | Sanggunian ng Bongabon</title>
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

        <?php include  "../includes/section-nav.php"; ?>

    <!--Content-->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-8">
                         <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">15th Sangguniang Bayan</h2>
            <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">ORDINANCE</h1>
                <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
            </div>
        </div>
    </section>

    <!-- lagay ng search button kaso saan hahaha naka sticky header redundant-->

    <!-- Pili ka ano mas maganda -->
    <section class="text-gray-600 bg-white body-font overflow-hidden">
        <div class="container px-5 py-2 mx-auto">
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