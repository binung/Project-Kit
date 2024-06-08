<nav class="fixed top-0 z-10 flex flex-wrap items-center justify-between w-full p-4 bg-green-700">
    <div class="flex items-center flex-shrink-0 mr-6 text-white">
        <a class="text-white no-underline hover:text-white hover:no-underline" href="/" wire:navigate>
            <span class="pl-2 text-2xl">PROJECT KIT</span>
        </a>
    </div>

    <div class="block lg:hidden">
        <button id="nav-toggle"
            class="flex items-center px-3 py-2 text-gray-500 border border-gray-600 rounded hover:text-white hover:border-white">
            <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>

    <div class="flex-grow hidden w-full pt-6 lg:flex lg:items-center lg:w-auto lg:block lg:pt-0" id="nav-content">
        <ul class="items-center justify-end flex-1 list-reset lg:flex">
            @guest
                <li class="mr-3">
                    <a class="flex items-center px-4 py-2 text-white no-underline" href="/login" wire:navigate>
                        <svg class="w-6 h-6 -m1-2" fill="none" stroke="currentColor" strokeWidth="2" fill="none"
                            strokeLinecap="round" strokeLinejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                        </svg>
                        &nbsp;Log in</a>
                </li>
                <li class="mr-3">
                    <a class="flex items-center px-4 py-2 text-white no-underline" href="/register" wire:navigate>
                        <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" strokeWidth="2"
                            strokeLinecap="round" strokeLinejoin="round">
                            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                            <circle cx="8.5" cy="7" r="4" />
                            <path d="M20 8v6M23 11h-6" />
                        </svg>
                        &nbsp;Register</a>
                </li>
            @endguest

            @auth
                <li class="mr-3 ">
                    <a class="flex items-center px-4 py-2 text-white no-underline" href="/dashboard" wire:navigate>
                        <svg class="w-8 h-8 text-gray-400" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
