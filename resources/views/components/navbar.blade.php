<nav class="bg-gray-900 text-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">

                    <a href="{{ route('dashboard', request()->only('username')) }}" class="text-xl font-bold text-red-500">
                        CinemaKu
                    </a>
                </div>

                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button block text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path class="hamburger" fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="mobile-menu hidden md:flex md:items-center md:space-x-6 mt-3 md:mt-0">
                <a href="{{ route('dashboard', request()->only('username')) }}" class="block md:inline-block px-3 py-2 rounded hover:bg-gray-800 transition duration-150">
                    Dashboard
                </a>
                <a href="{{ route('pengelolaan', request()->only('username')) }}" class="block md:inline-block px-3 py-2 rounded hover:bg-gray-800 transition duration-150">
                    Kelola Film
                </a>
                <a href="{{ route('profile', request()->only('username')) }}" class="block md:inline-block px-3 py-2 rounded hover:bg-gray-800 transition duration-150">
                    Profil
                </a>
                <a href="{{ route('login') }}" class="block md:inline-block px-3 py-2 rounded bg-red-600 hover:bg-red-700 transition duration-150">
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>
