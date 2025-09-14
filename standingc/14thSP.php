<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanggunian ng Bongabon</title>
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
            <a href="../landing.php" class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-dark">SP Bongabon</span>
            </a>
            
            <nav class="hidden md:flex items-center space-x-8">
                <a href="../landing.php" class="text-primary font-medium">SP Home</a>
                <a href="../about/index.php" class="text-gray-600 hover:text-primary transition-colors">About the Sanggunian</a>
                <a href="../proposed/index.php" class="text-gray-600 hover:text-primary transition-colors">Proposed Ordinance</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <div class="hidden md:flex items-center bg-gray-100 rounded-full px-3 py-1.5">
                    <input type="text" placeholder="Search..." class="bg-transparent border-none focus:outline-none focus:ring-0 w-36 lg:w-44">
                    <button type="submit" class="text-gray-500 hover:text-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                
                <button class="md:hidden text-gray-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!--Hero Section 2-->
    <div class="relative z-10 w-full px-4 py-16 md:px-8 bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://cdn.fastpixel.io/fp/ret_img+v_5b0f+w_794+h_447+q_glossy+to_webp/nebmci.org/wp-content/uploads/2021/05/bongabon-3.png');">
        <div class="max-w-screen-xl mx-auto">
            <div class="space-y-5 max-w-4xl mx-auto text-center">
                <h2 class="text-4xl text-gray-800 font-extrabold mx-auto md:text-5xl">
                    SANGGUNIANG PANLUNGSOD NG BONGABON    
                </h2>
                <p class="max-w-2xl mx-auto text-gray-600">
                    Sed ut perspiciatis unde omnis iste natus voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                </p>
            </div>
        </div>           
    </div>

    <!-- Section Nav -->
    <div class="border-b border-gray-200 bg-white dark:border-gray-700">
        <ul class="flex justify-center text-base font-medium text-center space-x-6 text-gray-600" id="default-tab" role="tablist">

            <!-- Standing Committees -->
            <li class="relative group" role="presentation">
                <button class="inline-block px-4 py-3 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-600" 
                        id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                    Standing Committees
                </button>
                <!-- Dropdown -->
                <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md w-40 text-gray-600">
                    <li><a href="../standingc/15thSP.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SP</a></li>
                    <li><a href="../standingc/14thSP.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SP</a></li>
                    <li><a href="../standingc/previous.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous SP</a></li>
                </ul>
            </li>

            <!-- Regular Sessions -->
            <li class="relative group" role="presentation">
                <button class="inline-block px-4 py-3 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-600" 
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                    Regular Sessions
                </button>
                <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md w-40 text-gray-600">
                    <li><a href="../sg/regulars/15thSP.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SP Agenda</a></li>
                    <li><a href="../regulars/14thSP.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SP Agenda</a></li>
                    <li><a href="../regulars/13thSP.php" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">13th SP Agenda</a></li>
                </ul>
            </li>

            <!-- Resolution -->
            <li class="relative group" role="presentation">
                <button class="inline-block px-4 py-3 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-600" 
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                    Resolutions
                </button>
                <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md w-40 text-gray-600">
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SP Resolutions</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SP Resolutions</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous Resolutions (2010-2022)</a></li>
                </ul>
            </li>

            <!-- Ordinances -->
            <li class="relative group" role="presentation">
                <button class="inline-block px-4 py-3 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-600" 
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">
                    Ordinances
                </button>
                <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md w-40 text-gray-600">
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th Ordinances</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th Ordinances</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">13th Ordinances</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous Ordinances (1948-12 SP)</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!--Testimonial-->

    <div class="container px-1 py-12 mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-2">
            <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">14th Sangguniang Panlungsod</h2>
            <h1 class="text-3xl md:text-4xl font-bold text-dark mb-4">STANDING COMMITTEE</h1>
            <div class="h-1 w-20 bg-primary mx-auto mb-2"></div>
        </div>
    </div>
    
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col md:flex-row items-center md:gap-12">
            
                <!-- Left: Image -->
                <div class="md:w-1/2 w-full mb-8 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                        alt="Profile Image"
                        class="w-full h-auto rounded-lg shadow-lg object-cover">
                </div>

                <!-- Right: Testimonial/Content -->
                <div class="md:w-1/2 w-full text-center md:text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                    </svg>
                    <p class="leading-relaxed text-lg mb-4">
                    Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.
                    </p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-4 mb-2"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                    <p class="text-gray-500">Senior Product Designer</p>
                </div>
            </div>
        </div>
    </section>

    <!--Standing Committee-->


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-2 mx-auto">
            <div class="container px-1 py-12 mx-auto">
                <div class="text-center max-w-3xl mx-auto mb-2">
                    <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">STANDING COMMITTEE</h2>
                    <div class="h-1 w-20 bg-primary mx-auto mb-2"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                        <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
                        <div class="w-full">
                            <h2 class="title-font font-medium text-lg text-gray-900">Alper Kamu</h2>
                            <h3 class="text-gray-500 mb-3">UI Developer</h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                            <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                        <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/201x201">
                        <div class="w-full">
                            <h2 class="title-font font-medium text-lg text-gray-900">Holden Caulfield</h2>
                            <h3 class="text-gray-500 mb-3">UI Developer</h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                            <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                            </a>
                            <a class="ml-2 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/202x202">
                    <div class="w-full">
                        <h2 class="title-font font-medium text-lg text-gray-900">Atticus Finch</h2>
                        <h3 class="text-gray-500 mb-3">UI Developer</h3>
                        <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-flex">
                        <a class="text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>
                        </a>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/4 md:w-1/2">
                    <div class="h-full flex flex-col items-center text-center">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/203x203">
                    <div class="w-full">
                        <h2 class="title-font font-medium text-lg text-gray-900">Henry Letham</h2>
                        <h3 class="text-gray-500 mb-3">UI Developer</h3>
                        <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-flex">
                        <a class="text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>
                        </a>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- add ng hr or kopyahin mo div na before magtestimonial tas lagyan mo na lang ng download pdf -->

    <!--Contact Section-->
    <main class="py-8 bg-white" x-data="contactComponent()">
        <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
            <div class="max-w-xl space-y-3">
                <h3 class="text-indigo-600 font-semibold">
                    Contact
                </h3>
                <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                    Let us know how we can help
                </p>
                <p>
                    We're here to help and answer any question you might have, We look forward to hearing from you.
                </p>
            </div>
            <div>
                <ul class="mt-12 flex flex-wrap gap-x-12 gap-y-6 items-center lg:gap-x-24">
                    <template x-for="(item, idx) in contactMethods" :key="idx">
                        <li>
                            <h4 class="text-gray-800 text-lg font-medium" x-text="item.title"></h4>
                            <div class="mt-3 flex items-center gap-x-3">
                                <div class="flex-none text-gray-400" x-html="item.icon"></div>
                                <p x-text="item.contact"></p>
                            </div>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
    function contactComponent() {
        return {
            contactMethods: [
                {
                    icon: `
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    `,
                    contact: "Mountain View, California, United State.",
                    title: "Our office"
                },
                {
                    icon: `
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    `,
                    contact: "+1 (555) 000-000",
                    title: "Phone"
                },
                {
                    icon: `
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    `,
                    contact: "Support@example.com",
                    title: "Email"
                },
            ]
        }
    }
    </script>

    
   


    <!-- Footer -->
    <footer class="bg-dark text-white pt-10 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-bold mb-6">SP Bongabon</h3>
                    <p class="text-gray-400 mb-6">The Sangguniang Panlungsod of Bongabon is committed to serving the community through effective legislation and governance.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
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
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Ordinances</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Resolutions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
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
                            <span>sanggunian@bongabon.gov.ph</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2023 Sangguniang Panlungsod ng Bongabon. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>