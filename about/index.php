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
                <a href="index.php" class="text-primary font-medium">About the Sanggunian</a>
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

    <!-- Council Members Section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-8">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">City Council Members</h1>
                <div class="h-1 w-20 bg-primary mx-auto mb-2"></div>
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <a href="../about/15thSP.php" 
                    class="block h-full flex items-center border-gray-200 border p-3 rounded-lg text-center transition-colors duration-300 
                            bg-white text-gray-600 hover:bg-primary hover:text-white font-medium">
                        <div class="flex-grow">
                            <h2 class="title-font text-lg">15th SP</h2>
                        </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <a href="../about/14thSP.php" 
                    class="block h-full flex items-center border-gray-200 border p-4 rounded-lg text-center transition-colors duration-300 
                            bg-white text-gray-600 hover:bg-primary hover:text-white font-medium">
                        <div class="flex-grow">
                            <h2 class="title-font text-lg">14th SP</h2>
                        </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <a href="../about/13thSP.php" 
                    class="block h-full flex items-center border-gray-200 border p-4 rounded-lg text-center transition-colors duration-300 
                            bg-white text-gray-600 hover:bg-primary hover:text-white font-medium">
                        <div class="flex-grow">
                            <h2 class="title-font text-lg">13th SP</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Tabs Section -->
    <section class="py-16 bg-[#D9EAFD]" x-data="{ selectedTab: 'The Mace' }">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">

                <!-- Tab Buttons -->
                <div class="flex flex-wrap gap-2 mb-8 justify-start">
                    <button @click="selectedTab = 'The Mace'" 
                            :class="selectedTab === 'The Mace' ? 'px-5 py-3 rounded-lg bg-primary text-white font-medium' : 'px-5 py-3 rounded-lg bg-white text-gray-600 hover:text-primary font-medium'">
                        The Mace
                    </button>
                    <button @click="selectedTab = 'The Secretary'" 
                            :class="selectedTab === 'The Secretary' ? 'px-5 py-3 rounded-lg bg-primary text-white font-medium' : 'px-5 py-3 rounded-lg bg-white text-gray-600 hover:text-primary font-medium'">
                        The Secretary
                    </button>
                    <button @click="selectedTab = 'The Sergeant of Arms'" 
                            :class="selectedTab === 'The Sergeant of Arms' ? 'px-5 py-3 rounded-lg bg-primary text-white font-medium' : 'px-5 py-3 rounded-lg bg-white text-gray-600 hover:text-primary font-medium'">
                        The Sergeant of Arms
                    </button>
                    <button @click="selectedTab = 'The Session Hall'" 
                            :class="selectedTab === 'The Session Hall' ? 'px-5 py-3 rounded-lg bg-primary text-white font-medium' : 'px-5 py-3 rounded-lg bg-white text-gray-600 hover:text-primary font-medium'">
                        The Session Hall
                    </button>
                </div>

                <!-- Tab Content: The Mace -->
                <div x-show="selectedTab === 'The Mace'" class="bg-white rounded-xl shadow-md p-6 md:p-8">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-2/5">
                            <img src="https://images.unsplash.com/photo-1577720643272-265f0936742f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                                alt="The Mace"
                                class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="md:w-3/5">
                            <h2 class="text-2xl font-bold text-dark mb-4">The Mace of Authority</h2>
                            <p class="text-gray-600 mb-4">
                                The Mace symbolizes the authority and dignity of the Sangguniang Panlungsod. It is displayed during official sessions and represents the power vested in the council by the people of Bongabon.
                            </p>
                            <p class="text-gray-600">
                                Crafted with precision and care, the Mace features elements that represent the rich history and culture of our community, serving as a reminder of our commitment to serve with integrity and honor.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: The Secretary -->
                <div x-show="selectedTab === 'The Secretary'" class="bg-white rounded-xl shadow-md p-6 md:p-8">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-2/5">
                            <img src="https://images.unsplash.com/photo-1591012911204-2d7d3c947e07?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                                alt="The Secretary"
                                class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="md:w-3/5">
                            <h2 class="text-2xl font-bold text-dark mb-4">The Secretary</h2>
                            <p class="text-gray-600 mb-4">
                                The Secretary manages records and correspondence of the council, ensuring smooth operations and accurate documentation.
                            </p>
                            <p class="text-gray-600">
                                The Secretary plays a vital role in supporting council members and facilitating communication with the public.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: The Sergeant of Arms -->
                <div x-show="selectedTab === 'The Sergeant of Arms'" class="bg-white rounded-xl shadow-md p-6 md:p-8">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-2/5">
                            <img src="https://images.unsplash.com/photo-1612831660032-5f347d7367c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                                alt="The Sergeant of Arms"
                                class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="md:w-3/5">
                            <h2 class="text-2xl font-bold text-dark mb-4">The Sergeant of Arms</h2>
                            <p class="text-gray-600 mb-4">
                                The Sergeant of Arms maintains order during sessions and ensures the security of council proceedings.
                            </p>
                            <p class="text-gray-600">
                                This position represents discipline and order, symbolizing the council’s authority.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: The Session Hall -->
                <div x-show="selectedTab === 'The Session Hall'" class="bg-white rounded-xl shadow-md p-6 md:p-8">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="md:w-2/5">
                            <img src="https://images.unsplash.com/photo-1591012911204-2d7d3c947e07?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                                alt="The Session Hall"
                                class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="md:w-3/5">
                            <h2 class="text-2xl font-bold text-dark mb-4">The Session Hall</h2>
                            <p class="text-gray-600 mb-4">
                                The Session Hall is where official council meetings and public gatherings take place, reflecting the history and governance of Bongabon.
                            </p>
                            <p class="text-gray-600">
                                The hall stands as a testament to the civic pride and heritage of Bongabon.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Features/Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Our Legislative Processes</h2>
                <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600">Learn about how we create, debate, and pass legislation that serves the people of Bongabon.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-file-alt text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Ordinances</h3>
                    <p class="text-gray-600">Local laws enacted by the Sanggunian to regulate community affairs and promote general welfare.</p>
                </div>
                
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-scroll text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Resolutions</h3>
                    <p class="text-gray-600">Formal expressions of opinion, will, or intent intended to govern the administrative business of the Sanggunian.</p>
                </div>
                
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-users text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Sessions</h3>
                    <p class="text-gray-600">Regular meetings where Sanggunian members discuss, debate, and decide on legislative matters.</p>
                </div>
                
                <div class="bg-light rounded-xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-clipboard-list text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-dark mb-3">Committees</h3>
                    <p class="text-gray-600">Specialized groups that study specific issues in depth and make recommendations to the full Sanggunian.</p>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Large Image Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Our Session Hall</h2>
                <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600">The place where legislation comes to life through discussion, debate, and democratic processes.</p>
            </div>
            
            <div class="rounded-xl overflow-hidden shadow-xl">
                <img src="https://www.fcnl.org/sites/default/files/2021-02/FCNL-Legislative-Process-2020.png" 
                     alt="Sanggunian Session Hall" 
                     class="w-full h-auto object-cover">
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section class="py-10 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Publications & Resources</h2>
                <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
                <p class="text-gray-600">Access our official documents, reports, and legislative materials.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Ordinances" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-dark mb-3">Ordinances</h3>
                        <p class="text-gray-600 mb-4">Browse through our collection of enacted ordinances.</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            View ordinances
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Resolutions" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-dark mb-3">Resolutions</h3>
                        <p class="text-gray-600 mb-4">Review our formal expressions of opinion and intent.</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            View resolutions
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                             alt="Reports" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-dark mb-3">Annual Reports</h3>
                        <p class="text-gray-600 mb-4">Access our yearly performance and accomplishment reports.</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            View reports
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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