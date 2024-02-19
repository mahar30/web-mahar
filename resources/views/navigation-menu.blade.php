<div class="flex h-screen bg-gray-50 dark:bg-gray-900" x-on:roles-updated.window="window.location.reload()">
    <!-- Primary Navigation Menu -->
    <aside
        class="z-10 hidden w-64 overflow-y-auto bg-gradient-to-t from-sky-700 to-sky-600 dark:bg-gray-800 md:block flex-shrink-0">
        <div class=" text-center py-4 text-gray-500 dark:text-gray-400">
            <a href="{{ route('dashboard') }}" class="text-lg font-bold text-white dark:text-gray-200">
                Sistem Penjualan UD Bali Jaya Packing
            </a>
            <ul class="mt-6">
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('dashboard') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('dashboard') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path
                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </x-nav-link>
                </li>
                @can('read')
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('permissions') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('permissions') }}" :active="request()->routeIs('permissions')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('permissions') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M15.75 1.5a6.75 6.75 0 0 0-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 0 0-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 0 0 .75-.75v-1.5h1.5A.75.75 0 0 0 9 19.5V18h1.5a.75.75 0 0 0 .53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1 0 15.75 1.5Zm0 3a.75.75 0 0 0 0 1.5A2.25 2.25 0 0 1 18 8.25a.75.75 0 0 0 1.5 0 3.75 3.75 0 0 0-3.75-3.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-4">Permissions</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('roles') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('roles') }}" :active="request()->routeIs('roles')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('roles') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-4">Roles</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('users') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('users') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-4">Users</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('detailpembeli') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('detailpembeli') }}" :active="request()->routeIs('detailpembeli')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('detailpembeli') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span class="ml-4">Detail Pembeli</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('barang') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('barang') }}" :active="request()->routeIs('barang')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('barang') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                            <span class="ml-4">Barang</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('rekening') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('rekening') }}" :active="request()->routeIs('rekening')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('rekening') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z" />
                            </svg>

                            <span class="ml-4">Rekening</span>
                        </x-nav-link>
                    </li>
                @endcan
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('keranjang') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('keranjang') }}" :active="request()->routeIs('keranjang')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('keranjang') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>


                        <span class="ml-4">Keranjang</span>
                    </x-nav-link>
                </li>
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('transaksi') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('transaksi') }}" :active="request()->routeIs('transaksi')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('transaksi') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                            <path fill-rule="evenodd"
                                d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="ml-4">Transaksi</span>
                    </x-nav-link>
                </li>
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('pembayaran') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('pembayaran') }}" :active="request()->routeIs('pembayaran')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('pembayaran') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            <path fill-rule="evenodd"
                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                clip-rule="evenodd" />
                            <path
                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                        </svg>

                        <span class="ml-4">Pembayaran</span>
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </aside>

    <div x-show="open" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

    <!-- Responsive Navigation Menu -->
    <aside :class="{ 'block': open, 'hidden': !open }"
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-gradient-to-t from-sky-700 to-sky-600 dark:bg-gray-800 md:hidden"
        x-show="open" x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20">

        <div class="py-4 text-gray-500 text-center">
            <a href="{{ route('dashboard') }}" class="text-lg font-bold text-white dark:text-gray-200">
                Sistem Penjualan UD Bali Jaya Packing
            </a>
            <ul class="mt-6">
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('dashboard') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('dashboard') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6">
                            <path
                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path
                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </x-nav-link>
                </li>
                @can('read')
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('permissions') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('permissions') }}" :active="request()->routeIs('permissions')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('permissions') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M15.75 1.5a6.75 6.75 0 0 0-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 0 0-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 0 0 .75-.75v-1.5h1.5A.75.75 0 0 0 9 19.5V18h1.5a.75.75 0 0 0 .53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1 0 15.75 1.5Zm0 3a.75.75 0 0 0 0 1.5A2.25 2.25 0 0 1 18 8.25a.75.75 0 0 0 1.5 0 3.75 3.75 0 0 0-3.75-3.75Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-4">Permissions</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('roles') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('roles') }}" :active="request()->routeIs('roles')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('roles') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-4">Roles</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('users') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('users') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-4">Users</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('detailpembeli') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('detailpembeli') }}" :active="request()->routeIs('detailpembeli')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('detailpembeli') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span class="ml-4">Detail Pembeli</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('barang') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('barang') }}" :active="request()->routeIs('barang')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('barang') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                            <span class="ml-4">Barang</span>
                        </x-nav-link>
                    </li>
                    <li
                        class="relative px-6 py-3 {{ request()->routeIs('rekening') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <x-nav-link href="{{ route('rekening') }}" :active="request()->routeIs('rekening')"
                            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('rekening') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z" />
                            </svg>

                            <span class="ml-4">Rekening</span>
                        </x-nav-link>
                    </li>
                @endcan
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('keranjang') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('keranjang') }}" :active="request()->routeIs('keranjang')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('keranjang') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6">
                            <path
                                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>


                        <span class="ml-4">Keranjang</span>
                    </x-nav-link>
                </li>
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('transaksi') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('transaksi') }}" :active="request()->routeIs('transaksi')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('transaksi') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6">
                            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                            <path fill-rule="evenodd"
                                d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="ml-4">Transaksi</span>
                    </x-nav-link>
                </li>
                <li
                    class="relative px-6 py-3 {{ request()->routeIs('pembayaran') ? 'bg-white' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                    <x-nav-link href="{{ route('pembayaran') }}" :active="request()->routeIs('pembayaran')"
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 {{ request()->routeIs('pembayaran') ? 'text-sky-500' : 'text-white hover:text-white dark:hover:text-gray-200 dark:text-gray-100' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6">
                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            <path fill-rule="evenodd"
                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                clip-rule="evenodd" />
                            <path
                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                        </svg>

                        <span class="ml-4">Pembayaran</span>
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </aside>
</div>
