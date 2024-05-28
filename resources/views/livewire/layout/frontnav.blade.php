<!-- Navbar -->
<nav class="flex justify-between px-4 py-4 items-center bg-white shadow">
    <h1 class="text-xl text-gray-800 font-bold">MovieDB</h1>
    <div class="md:flex items-center">
        <ul class="hidden sm:flex items-center">
            <li class="font-semibold text-gray-700 px-4"><a href="#">Now Playing</a></li>
            <li class="font-semibold text-gray-700 px-4"><a href="#">Popular</a></li>
            <li class="font-semibold text-gray-700 px-4"><a href="#">Upcoming</a></li>
            <li class="font-semibold text-gray-700 px-4"><a href="#">Top Rated</a></li>
        </ul>
    </div>
    <div class="sm:hidden">
        <button id="nav-toggle" class="text-gray-700 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</nav>
