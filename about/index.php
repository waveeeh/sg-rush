<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanggunian ng Bongabon</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white shadow-md text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="landing.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="../landing.php" class="mr-5 hover:text-blue-900">SP Home</a>
            <a href="index.php" class="mr-5 text-blue-900 hover:text-blue-700">About the Sanggunian</a>
            <a href="#" class="mr-5 hover:text-blue-900">Proposed Ordinance</a>
            </nav>
            <div class="flex items-center bg-gray-100 border border-gray-300 py-1 px-3 focus-within:bg-gray-200 rounded text-base mt-4 md:mt-0">
                <input type="text" placeholder="Search..." class="bg-transparent border-none focus:outline-none focus:ring-0 w-full">
                <button type="submit" class="p-1">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="M21 21l-4.35-4.35"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>


    <!-- Hero Section-->
    <!-- <div
    x-data="{
    isVideoPoppedUp: false,
    closeVideo() {
        $refs.video.pause();
        this.isVideoPoppedUp = false;
    },
    openVideo() {
        this.isVideoPoppedUp = true;
        $refs.video.play();
    }
    }"
    >
    <section class="bg-[#ECF9FF]">
        <div
        class="max-w-screen-xl mx-auto px-4 py-28 gap-12 text-gray-600 md:px-8 xl:flex"
        >
        <div class="space-y-5 max-w-2xl mx-auto text-center xl:text-left">
            <div
            class="flex flex-wrap items-center justify-center gap-6 xl:justify-start"
            >
            <div class="flex items-center gap-x-2 text-gray-500 text-sm">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="w-5 h-5"
                >
                <path
                    fill-rule="evenodd"
                    d="M16.403 12.652a3 3 0 000-5.304 3 3 0 00-3.75-3.751 3 3 0 00-5.305 0 3 3 0 00-3.751 3.75 3 3 0 000 5.305 3 3 0 003.75 3.751 3 3 0 005.305 0 3 3 0 003.751-3.75zm-2.546-4.46a.75.75 0 00-1.214-.883l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                    clip-rule="evenodd"
                ></path>
                </svg>
                Trusted
            </div>
            <div class="flex items-center gap-x-2 text-gray-500 text-sm">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="w-5 h-5"
                >
                <path
                    fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                    clip-rule="evenodd"
                ></path>
                </svg>
                400 ratings
            </div>
            </div>
            <h1
            class="text-4xl text-gray-800 font-extrabold mx-auto md:text-5xl"
            >
            SANGGUNIANG PANLUNGSOD NG BONGABON
            </h1>
            <p class="max-w-xl mx-auto xl:mx-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta animi ipsam ducimus adipisci ex explicabo perferendis quia, quibusdam ipsum, exercitationem necessitatibus expedita, quasi minus deserunt possimus numquam rem odio.
            </p>
            <div
            class="items-center justify-center gap-x-3 space-y-3 sm:flex sm:space-y-0 xl:justify-start"
            >
            </div>
        </div>

        <div class="flex-1 max-w-xl mx-auto mt-14 xl:mt-0">
            <div class="relative">
            <img
                src="https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                class="rounded-lg"
                alt=""
            />
            <button
                class="absolute w-16 h-16 rounded-full inset-0 m-auto duration-150 bg-blue-500 hover:bg-blue-600 ring-offset-2 focus:ring text-white"
                x-on:click="openVideo()"
            >
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="w-6 h-6 m-auto"
                >
                <path
                    d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"
                />
                </svg>
            </button>
            </div>
        </div>
        </div>
        <div
        x-bind:class="{ 'flex': isVideoPoppedUp, 'hidden': !isVideoPoppedUp }"
        class="fixed inset-0 w-full h-full flex items-center justify-center hidden"
        >
        <div
            class="absolute inset-0 w-full h-full bg-black/50"
            x-on:click="closeVideo()"
        ></div>
        <div class="px-4 relative">
            <button
            class="w-12 h-12 mb-5 rounded-full duration-150 bg-gray-800 hover:bg-gray-700 text-white"
            x-on:click="closeVideo()"
            >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="w-5 h-5 m-auto"
            >
                <path
                d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"
                />
            </svg>
            </button>
            <video x-ref="video" class="rounded-lg w-full max-w-2xl" controls>
            <source
                src="https://raw.githubusercontent.com/sidiDev/remote-assets/main/FloatUI.mp4"
                type="video/mp4"
            />
            </video>
        </div>
        </div>
    </section>
    </div> -->

    <!--Hero Section 2-->
    <div class="relative z-10 w-full px-4 py-16 md:px-8 bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://cdn.fastpixel.io/fp/ret_img+v_5b0f+w_794+h_447+q_glossy+to_webp/nebmci.org/wp-content/uploads/2021/05/bongabon-3.png');">
        <div class="max-w-screen-xl mx-auto">
            <div class="space-y-5 max-w-4xl mx-auto text-center">
                <h2 class="text-4xl text-gray-800 font-extrabold mx-auto md:text-5xl">
                    SANGGUNIANG PANLUNGSOD NG BONGABON    
                </h2>
            </div>
        </div>           
    </div>

    <!-- Section Nav -->
    <div class="mb-4 border-b border-gray-200 bg-[#FBFBFB] dark:border-gray-700">
        <ul class="flex flex-wrap justify-center -mb-px text-base font-medium text-center" id="default-styled-tab" data-tabs-active-classes="text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-blue-600 dark:text-gray-400 border-gray-100 hover:border-blue-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
            <li class="me-2 relative group" role="presentation">
                <a href="/standing-committees" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-300">Standing Committees</a>
                <!-- Dropdown menu -->
                <div class="absolute left-0 mt-1 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-blue-200 dark:border-blue-700">
                    <div class="py-1">
                        <a href="/15th-sp-committees" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">15th SP</a>
                        <a href="/14th-sp-committees" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">14th SP</a>
                        <a href="/previous-sp-committees" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">Previous SP</a>
                    </div>
                </div>
            </li>
            <li class="me-2 relative group" role="presentation">
                <a href="/regular-sessions" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-300">Regular Sessions</a>
                <!-- Dropdown menu -->
                <div class="absolute left-0 mt-1 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-blue-极200 dark:border-blue-700">
                    <div class="py-1">
                        <a href="/15th-sp-agenda" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">15th SP Agenda</a>
                        <a href="/14th-sp-agenda" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">14th SP Agenda</a>
                        <a href="/13th-sp-agenda" class="block px-4 py-2 text-sm text极-gray-700 dark:text-gray-300 hover:极bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">13th SP Agenda</a>
                    </div>
                </div>
            </li>
            <li class="me-2 relative group" role="presentation">
                <a href="/resolutions" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-300">Resolutions</a>
                <!-- Dropdown menu -->
                <div class="absolute left-0 mt-1 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-blue-200 dark:border-blue-700">
                    <div class="py-1">
                        <a href="/15th-sp-resolutions" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">15th SP Resolutions</a>
                        <a href="/14th-sp-resolutions" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">14th SP Resolutions</a>
                        <a href="/previous-resolutions" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">Previous Resolutions (2010-2022)</a>
                    </div>
                </div>
            </li>
            <li class="relative group" role="presentation">
                <a href="/ordinances" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-300">Ordinances</a>
                <!-- Dropdown menu -->
                <div class="absolute left-0 mt-1 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-blue-200 dark:border-blue-700">
                    <div class="py-1">
                        <a href="/15th-sp-ordinances" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">15th SP Ordinances</a>
                        <a href="/14th-sp-ordinances" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">14th SP Ordinances</a>
                        <a href="/13th-sp-ordinances" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">13th SP Ordinances</a>
                        <a href="/previous-ordinances" class="block px-4极 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-700 hover:text-blue-600 dark:hover:text-white">Previous Ordinances (1948-12 SP)</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <!--card section-->
    <section class="text-gray-600 bg-[#F7F7F7] body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="lg:w-2/3 flex flex-col items-center text-center mx-auto">
                <h1 class="text-base font-medium title-font text-gray-900 mb-6">
                    The Sangguniang Panlungsod ng Lungsod ng Naga (The Naga City Council), is the city’s law-making body. Sanggunian is a Tagalog word which translates as “council” – from the rootword “sangguni” (“to consult”). Lungsod translates to “city”.
                </h1>
                <p class="text-sm text-gray-700">
                    The <a href=" " class="text-blue-600 hover:text-blue-800 hover:underline">Local Government Code of 1991</a> governs the composition, powers and functions of the Sangguniang Panlungsod. 
                </p>
            </div>
        </div>
    </section>

    <!-- Tabs Section -->
    <div 
        x-data="{ selectedTab: 'The Mace', tabItems: ['The Mace', 'The Secretary', 'The Sergeant of Arms', 'The Session Hall'] }"
        >
        <div class="max-w-screen-xl mt-2 mx-auto px-4 md:px-8">
            <div
            class="hidden gap-x-3 py-1 overflow-x-auto px-px text-sm sm:flex"
            aria-label="Manage your account"
            >
            <template x-for="(item, index) in tabItems" :key="index">
                <button
                @click="selectedTab = item"
                :class="{'bg-blue-100 text-blue-700 shadow-sm': selectedTab === item, 'text-black-500 hover:text-blue-700 hover:bg-blue-100 active:bg-gray-100': selectedTab !== item}"
                class="outline-blue-800 py-1.5 px-3 rounded-lg duration-150 font-medium"
                x-text="item"
                ></button>
            </template>
            </div>
            <div class="relative text-gray-500 sm:hidden">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="pointer-events-none w-5 h-5 absolute right-2 inset-y-0 my-auto"
            >
                <path
                fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd"
                />
            </svg>
            <select
                x-model="selectedTab"
                class="py-2 px-3 w-full bg-transparent appearance-none outline-none border rounded-lg shadow-sm focus:border-gray-800 text-sm"
            >
                <template x-for="(item, index) in tabItems" :key="index">
                <option :value="item" x-text="item"></option>
                </template>
            </select>
            </div>
            <template x-for="(item, index) in tabItems" :key="index">
                <div x-show="selectedTab === item" class="py-6">
                    <!-- THE MACE CONTENT -->
                    <template x-if="item === 'The Mace'">
                        <div class="flex flex-col md:flex-row gap-8 items-center">
                            <!-- Image Section -->
                            <div class="md:w-2/5">
                                <img src="https://images.unsplash.com/photo-1577720643272-265f0936742f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                                    alt="Content image" 
                                    class="w-full h-64 object-cover rounded-lg shadow-md">
                            </div>
                            <!-- Text Content Section -->
                            <div class="md:w-3/5">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">About Sanggunian Panlungsod</h2>
                                <p class="text-base text-gray-600 mb-4">
                                    The Sangguniang Panlungsod serves as the legislative body of the city, responsible for 
                                    creating ordinances and resolutions that benefit the community and ensure good governance.
                                </p>
                                <p class="text-base text-gray-600">
                                    Composed of elected and ex-officio members, the Sanggunian works collaboratively to 
                                    address the needs of constituents and promote sustainable development throughout the city.
                                </p>
                            </div>
                        </div>
                    </template>
                    
                    <!-- THE SECRETARY CONTENT -->
                    <template x-if="item === 'The Secretary'">
                            <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                                <!-- Image Section (on right for desktop) -->
                                <div class="md:w-2/5">
                                    <img src="https://images.unsplash.com/photo-1577720643272-265f0936742f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                                        alt="Content image" 
                                        class="w-full h-64 object-cover rounded-lg shadow-md">
                                </div>
                                
                                <!-- Text Content Section -->
                                <div class="md:w-3/5">
                                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Legislative Processes</h2>
                                    <p class="text-xl text-gray-600 mb-4">
                                        The Sanggunian follows a structured legislative process to ensure that all ordinances 
                                        and resolutions are thoroughly discussed and properly enacted for the welfare of the city.
                                    </p>
                                    <p class="text-xl text-gray-600">
                                        Regular sessions are held to deliberate on important matters, with committees 
                                        dedicated to specific areas of governance and public service.
                                    </p>
                                </div>
                            </div>
                    </template>

                    <!-- THE SERGEANT AT ARMS CONTENT -->
                    <template x-if="item === 'The Sergeant of Arms'">
                    <div>
                        <h2>The Sergeant at Arms</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero natus in ipsum unde tenetur numquam atque magnam! Esse velit minus autem eum. Optio, eius debitis ab architecto deleniti vitae. Sequi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quos soluta laboriosam perferendis aspernatur? Quis cum deserunt, magnam, quas laboriosam asperiores voluptatibus quibusdam dolores libero consectetur possimus enim, nulla mollitia? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci error atque porro nam pariatur optio et neque quasi repellat placeat eligendi, autem maxime unde consectetur accusantium. Laudantium maiores minima autem.</p>
                    </div>
                    </template>

                    <!-- THE SESSION HALL CONTENT -->
                    <template x-if="item === 'The Session Hall'">
                    <div>
                        <h2>The Session Hall</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero natus in ipsum unde tenetur numquam atque magnam! Esse velit minus autem eum. Optio, eius debitis ab architecto deleniti vitae. Sequi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quos soluta laboriosam perferendis aspernatur? Quis cum deserunt, magnam, quas laboriosam asperiores voluptatibus quibusdam dolores libero consectetur possimus enim, nulla mollitia? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci error atque porro nam pariatur optio et neque quasi repellat placeat eligendi, autem maxime unde consectetur accusantium. Laudantium maiores minima autem.</p>
                    </div>
                    </template>

                </div>
            </div>
        </template>
    </div>

    <!-- Resolution Section -->
    <section class="text-gray-600 body-font bg-[#F2F9FF]">
        <div class="container px-5 py-8 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg> -->
            <p class="leading-relaxed text-base">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
            <p class="text-gray-500">Resolution Section</p>
            </div>
        </div>
    </section>

    <!-- Large Image Section -->

    <div class="w-full my-12">
        <!-- Large Heading -->
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">
            SANGUNIANG PANLUNGSOD NG BONGABON
        </h2>
        
        <!-- Extra Big Image -->
        <div class="w-full">
            <img src="https://www.fcnl.org/sites/default/files/2021-02/FCNL-Legislative-Process-2020.png" 
                alt="Sanggunian Session Hall" 
                class="w-full h-[900px] object-cover rounded-lg shadow-xl">
        </div>
    </div>

    <!-- Publications Section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="lg:w-2/3 flex flex-col items-center text-center mx-auto">
                <h1 class="text-2xl font-bold title-font text-gray-900 mb-6">
                    Publications
                </h1>
                <p class="text-base text-gray-700">
                    Local Government Code of 1991</a> governs the composition, powers and functions of the Sangguniang Panlungsod. 
                </p>
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
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                <li>
                    <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
                </nav>
            </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© 2025 Tailblocks —
                <a href=" " rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@sdfsdfs</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
                </a>
                <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
                </a>
                <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
                </a>
                <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
                </a>
            </span>
            </div>
        </div>
    </footer>
</body>
</html>