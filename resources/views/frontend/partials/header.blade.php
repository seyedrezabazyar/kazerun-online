    <!-- Header -->
    <header class="nav-glass sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Desktop Header -->
            <div class="hidden lg:flex items-center justify-between h-20 gap-8">

                <!-- Logo -->
                <div class="flex items-center space-x-3 space-x-reverse flex-shrink-0">
                    <div class="gradient-bg w-12 h-12 rounded-full flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-xl">ک</span>
                    </div>
                    <div class="text-2xl font-bold text-gray-800 whitespace-nowrap">کازرون آنلاین</div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="desktop-nav flex-1 justify-center">
                    <a href="#" class="menu-item-desktop text-gray-700 hover:text-purple-600 font-medium">خانه</a>
                    <a href="#" class="menu-item-desktop text-gray-700 hover:text-purple-600 font-medium">درباره
                        ما</a>
                    <a href="#"
                        class="menu-item-desktop text-gray-700 hover:text-purple-600 font-medium">خدمات</a>

                    <!-- Articles Dropdown -->
                    <div class="relative">
                        <button onclick="toggleDropdown('articles')"
                            class="menu-item-desktop text-gray-700 hover:text-purple-600 font-medium flex items-center">
                            مقالات
                            <svg class="w-4 h-4 mr-2 transform transition-transform duration-300" id="articles-arrow"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="articles-dropdown"
                            class="absolute right-0 mt-2 w-56 dropdown-glass rounded-xl shadow-xl opacity-0 invisible transform translate-y-2 transition-all duration-300 z-50">
                            <div class="py-3">
                                <a href="#"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-colors rounded-lg mx-2">تکنولوژی</a>
                                <a href="#"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-colors rounded-lg mx-2">برنامه
                                    نویسی</a>
                                <a href="#"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-colors rounded-lg mx-2">طراحی
                                    وب</a>
                                <a href="#"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-colors rounded-lg mx-2">هوش
                                    مصنوعی</a>
                                <a href="#"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-colors rounded-lg mx-2">موبایل</a>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="menu-item-desktop text-gray-700 hover:text-purple-600 font-medium">وبلاگ</a>
                    <a href="#" class="menu-item-desktop text-gray-700 hover:text-purple-600 font-medium">عکس
                        ها</a>
                    <a href="#" class="menu-item-desktop text-gray-700 hover:text-purple-600 font-medium">تماس با
                        ما</a>
                </nav>

                <!-- Search & Action Buttons -->
                <div class="flex items-center space-x-4 space-x-reverse flex-shrink-0">
                    <!-- Enhanced Search -->
                    <div class="relative">
                        <div class="search-enhanced rounded-full px-5 py-3 flex items-center w-64">
                            <input type="text" placeholder="جستجو در سایت..."
                                class="bg-transparent border-none outline-none text-gray-700 placeholder-gray-500 w-full text-sm">
                            <svg class="w-5 h-5 text-gray-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Enhanced Action Buttons -->
                    <button class="button-enhanced px-5 py-3 rounded-xl font-medium text-sm whitespace-nowrap">
                        اعضای تیم
                    </button>
                    <button class="button-enhanced px-5 py-3 rounded-xl font-medium text-sm whitespace-nowrap">
                        نمونه کارها
                    </button>
                </div>
            </div>

            <!-- Mobile Header -->
            <div class="lg:hidden flex items-center justify-between h-16">
                <!-- Mobile Logo -->
                <div class="flex items-center space-x-2 space-x-reverse">
                    <div class="gradient-bg w-10 h-10 rounded-full flex items-center justify-center shadow-md">
                        <span class="text-white font-bold text-lg">ک</span>
                    </div>
                    <div class="text-lg font-bold text-gray-800">کازرون آنلاین</div>
                </div>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu()" class="p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-gray-700" id="mobile-menu-icon" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700 hidden" id="mobile-close-icon" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden mobile-menu-glass border-t border-gray-200 hidden">
            <div class="container mx-auto px-4 py-6 space-y-6">

                <!-- Mobile Search -->
                <div class="search-enhanced rounded-xl px-4 py-3 flex items-center">
                    <input type="text" placeholder="جستجو در سایت..."
                        class="bg-transparent border-none outline-none text-gray-700 placeholder-gray-500 w-full text-sm">
                    <svg class="w-5 h-5 text-gray-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>

                <!-- Mobile Navigation -->
                <div class="space-y-1">
                    <a href="#"
                        class="block py-3 px-4 text-gray-700 hover:bg-purple-50 hover:text-purple-600 font-medium rounded-lg transition-colors">خانه</a>
                    <a href="#"
                        class="block py-3 px-4 text-gray-700 hover:bg-purple-50 hover:text-purple-600 font-medium rounded-lg transition-colors">درباره
                        ما</a>
                    <a href="#"
                        class="block py-3 px-4 text-gray-700 hover:bg-purple-50 hover:text-purple-600 font-medium rounded-lg transition-colors">خدمات</a>

                    <!-- Mobile Articles Dropdown -->
                    <div class="bg-gray-50 rounded-lg">
                        <button onclick="toggleMobileDropdown('mobile-articles')"
                            class="w-full py-3 px-4 text-gray-700 hover:text-purple-600 font-medium flex items-center justify-between rounded-lg transition-colors">
                            مقالات
                            <svg class="w-4 h-4 transform transition-transform duration-300"
                                id="mobile-articles-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobile-articles-dropdown" class="mobile-dropdown">
                            <div class="pb-2 pr-6 space-y-1">
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-600 hover:text-purple-600 hover:bg-white rounded-lg transition-colors">تکنولوژی</a>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-600 hover:text-purple-600 hover:bg-white rounded-lg transition-colors">برنامه
                                    نویسی</a>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-600 hover:text-purple-600 hover:bg-white rounded-lg transition-colors">طراحی
                                    وب</a>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-600 hover:text-purple-600 hover:bg-white rounded-lg transition-colors">هوش
                                    مصنوعی</a>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-600 hover:text-purple-600 hover:bg-white rounded-lg transition-colors">موبایل</a>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="block py-3 px-4 text-gray-700 hover:bg-purple-50 hover:text-purple-600 font-medium rounded-lg transition-colors">وبلاگ</a>
                    <a href="#"
                        class="block py-3 px-4 text-gray-700 hover:bg-purple-50 hover:text-purple-600 font-medium rounded-lg transition-colors">عکس
                        ها</a>
                    <a href="#"
                        class="block py-3 px-4 text-gray-700 hover:bg-purple-50 hover:text-purple-600 font-medium rounded-lg transition-colors">تماس
                        با ما</a>
                </div>

                <!-- Mobile Action Buttons -->
                <div class="space-y-3 pt-4 border-t border-gray-200">
                    <button class="w-full button-enhanced py-3 px-4 rounded-xl font-medium text-sm">
                        اعضای تیم
                    </button>
                    <button class="w-full button-enhanced py-3 px-4 rounded-xl font-medium text-sm">
                        نمونه کارها
                    </button>
                </div>
            </div>
        </div>
    </header>
