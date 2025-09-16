<!-- Default Header -->
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
      <a href="../about/index.php" class="text-gray-600 hover:text-primary transition-color">About the Sanggunian</a>
      <a href="../proposed/index.php" class="text-gray-600 hover:text-primary transition-colors">Proposed Ordinances</a>
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
    <a href="../proposed/index.php" class="text-gray-600 hover:text-primary transition-colors">Proposed Ordinance</a>
  </nav>
</div>