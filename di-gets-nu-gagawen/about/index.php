<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Sangguniang Bayan ng Bongabon</title>
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

 <?php include "../includes/about-header.php" ?>

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

    <!-- Council Members Section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">City Council Members</h2>
                <div class="h-1 w-20 bg-primary mx-auto mb-6"></div>
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <a href="../about/15thSB.php" 
                    class="block h-full flex items-center border-gray-200 border p-3 rounded-lg text-center transition-colors duration-300 
                            bg-white text-gray-600 hover:bg-primary hover:text-white font-medium">
                        <div class="flex-grow">
                            <h2 class="title-font text-lg">15th SB</h2>
                        </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <a href="../about/14thSB.php" 
                    class="block h-full flex items-center border-gray-200 border p-4 rounded-lg text-center transition-colors duration-300 
                            bg-white text-gray-600 hover:bg-primary hover:text-white font-medium">
                        <div class="flex-grow">
                            <h2 class="title-font text-lg">14th SB</h2>
                        </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <a href="../about/13thSB.php" 
                    class="block h-full flex items-center border-gray-200 border p-4 rounded-lg text-center transition-colors duration-300 
                            bg-white text-gray-600 hover:bg-primary hover:text-white font-medium">
                        <div class="flex-grow">
                            <h2 class="title-font text-lg">13th SB</h2>
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