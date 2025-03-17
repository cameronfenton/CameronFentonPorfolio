<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center space-x-2">
                <div class="sm:hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="focus:outline-none navbar-text flex items-center">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <div x-show="open" x-cloak class="absolute navbar-text w-full top-16 left-0 shadow-lg">
                        <a href="/projects" class="block px-3 py-2 text-sm font-medium navbar-text">
                            Projects
                        </a>
                    </div>
                </div>

                <a href="/" class="text-lg font-semibold navbar-text flex items-center leading-none">
                    Cameron Fenton's Portfolio
                </a>
            </div>

            <div class="hidden sm:flex sm:space-x-4">
                <a href="/projects" class="px-3 py-2 rounded-md text-sm font-medium navbar-text">
                    Projects
                </a>
            </div>
        </div>
    </div>
</nav>