<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sangguniang Panlungsod ng Bongabon</title>
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
            <a href="../landing.php" class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-dark">SP Bongabon</span>
            </a>
            
            <nav class="hidden md:flex items-center space-x-8">
                <a href="../landing.php" class="text-gray-600 hover:text-primary transition-colors">SP Home</a>
                <a href="index.php" class="text-gray-600 hover:text-primary transition-colors">About the Sanggunian</a>
                <a href="../proposed/index.php" class="text-primary font-medium">Proposed Ordinance</a>
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

    <!-- Hero Section -->
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
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SP</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SP</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">Previous SP</a></li>
                </ul>
            </li>

            <!-- Regular Sessions -->
            <li class="relative group" role="presentation">
                <button class="inline-block px-4 py-3 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-600" 
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                    Regular Sessions
                </button>
                <ul class="absolute left-0 hidden group-hover:block bg-white border rounded-lg shadow-md w-40 text-gray-600">
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">15th SP Agenda</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">14th SP Agenda</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:text-blue-600 hover:bg-blue-50">13th SP Agenda</a></li>
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

    <!-- Features/Content Section pwedeng pdf na lang to pag read more -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Proposed measures in the Sangguniang Panlungsod</h2>
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
    <footer class="bg-dark text-white pt-16 pb-8">
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
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2023 Sangguniang Panlungsod ng Bongabon. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>