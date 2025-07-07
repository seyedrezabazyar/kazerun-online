    <!-- Navigation Menu -->
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-4">
            <!-- Desktop Navigation -->
            <div class="desktop-only">
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center space-x-4 space-x-reverse">
                            <div class="dropdown relative">
                                <button
                                    class="flex items-center space-x-2 space-x-reverse text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors"
                                    aria-expanded="false">
                                    <span>همه دسته‌بندی‌ها</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div
                                    class="dropdown-menu absolute top-full right-0 mt-2 min-w-[320px] max-w-[400px] bg-white border border-gray-200 rounded-lg shadow-lg z-20 p-4">
                                    <div class="mb-4">
                                        <input type="text" id="categorySearch" placeholder="جستجو در دسته‌بندی‌ها..."
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-custom text-right">
                                    </div>
                                    <div id="categoryGrid" class="space-y-2">
                                        <div class="accordion-item">
                                            <div class="accordion-header text-gray-700 hover:text-red-custom"
                                                data-category="restaurant">
                                                <span>گردشگری</span>
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </div>
                                            <div class="accordion-content">
                                                <ul class="space-y-2 pl-4">
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">
                                                            جاذبه های طبیعی</a></li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">
                                                            جاذبه های تاریخی</a></li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">
                                                            مکان های مذهبی</a></li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">
                                                            جاذبه های شهری</a></li>
                                                    
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- سایر دسته‌بندی‌ها -->
                                        <div class="accordion-item">
                                            <div class="accordion-header text-gray-700 hover:text-red-custom"
                                                data-category="entertainment">
                                                <span>کسب و کار </span>
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </div>
                                            <div class="accordion-content">
                                                <ul class="space-y-2 pl-4">
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">طراحی سایت</a>
                                                    </li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">هوش مصنوعی</a>
                                                    </li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">ساخت ربات</a>
                                                    </li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">
                                                            برنامه نویسی</a></li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">امنیت سایبری</a></li>
                                                    <li><a href="#"
                                                            class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">
                                                            طراحی گرافیک</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- می‌توانید دسته‌بندی‌های دیگر را به همین صورت اضافه کنید -->
                                    </div>
                                </div>
                            </div>
                            <a href="#"
                                class="text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors">صفحه اصلی
                                  </a>
                            <a href="#"
                                class="text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors">درباره کازرون
                                  </a>
                            <a href="#"
                                class="text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors">وقایع و گردشگری
                                </a>
                                <a href="#"
                                class="text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors">گردشگری 
                                  </a>
                            <a href="#"
                                class="text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors"> کسب و کار
                                </a>
                        </div>
                        <div class="flex items-center space-x-4 space-x-reverse">
                            <a href="#"
                                class="text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors">دانلود
                                اپلیکیشن</a>
                            <a href="#"
                                class="text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors">کسب
                                و کار من</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="mobile-only">
                <div class="bg-gray-50 rounded-lg p-4">
                    <button id="mobileMenuToggle"
                        class="w-full text-right text-gray-700 hover:text-red-custom py-2 px-4 rounded-lg hover:bg-gray-100 transition-colors">
                        منو
                        <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-45"></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Main Menu -->
    <div id="mobileMenu" class="mobile-only mobile-menu fixed top-0 right-0 w-80 h-full bg-white z-50 shadow-lg">
        <div class="p-4 border-b">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-bold text-gray-800">منو</h2>
                <button id="closeMobileMenu" class="text-gray-600 hover:text-red-custom">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="p-4 overflow-y-auto h-full pb-20">
            <ul class="space-y-4">
                <li><a href="#" class="block py-2 text-gray-700 hover:text-red-custom">صفحه اصلی </a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-red-custom"> درباره کازرون  </a></li>
                <li><button id="categoryMenuFromMain"
                        class="block py-2 text-gray-700 hover:text-red-custom text-right w-full">همه
                        دسته‌بندی‌ها</button></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-red-custom">  وقایع   </a>
                </li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-red-custom"> گردشگری</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-red-custom">  کسب و کار و اقتصاد</a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-red-custom">دانب </a></li>
                <li><a href="#" class="block py-2 text-gray-700 hover:text-red-custom">تخفیفان سازمانی</a></li>
            </ul>
        </div>
    </div>

    <!-- Mobile Category Menu -->
    <div id="mobileCategoryMenu"
        class="mobile-only mobile-category-menu fixed top-0 right-0 w-80 h-full bg-white z-50 shadow-lg">
        <div class="p-4 border-b">
            <div class="flex items-center justify-between">
                <button id="categoryBackBtn" class="category-back-btn text-gray-600 hover:text-red-custom">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <h2 id="categoryTitle" class="text-lg font-bold text-gray-800">دسته‌بندی‌ها</h2>
                <button id="closeCategoryMenu" class="text-gray-600 hover:text-red-custom">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="mt-4">
                <input type="text" id="mobileCategorySearch" placeholder="جستجو در دسته‌بندی‌ها..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-custom text-right">
            </div>
        </div>
        <div class="relative h-full overflow-hidden">
            <div id="mainCategories" class="p-4 overflow-y-auto h-full pb-20">
                <div id="accordionCategories">
                    <div class="accordion-item">
                        <div class="accordion-header text-gray-700 hover:text-red-custom" data-category="restaurant">
                            <span>رستوران</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </div>
                        <div class="accordion-content">
                            <ul class="space-y-2 pl-4">
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">فست
                                        فود</a></li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">رستوران‌های
                                        ایرانی</a></li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">رستوران‌های
                                        خارجی</a></li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">کافه
                                        و قهوه‌خانه</a></li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">شیرینی
                                        و قنادی</a></li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">آبمیوه
                                        و بستنی</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header text-gray-700 hover:text-red-custom" data-category="entertainment">
                            <span>تفریحی</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </div>
                        <div class="accordion-content">
                            <ul class="space-y-2 pl-4">
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">سینما</a>
                                </li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">تئاتر</a>
                                </li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">کنسرت</a>
                                </li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">پارک‌های
                                        تفریحی</a></li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">بازی‌های
                                        کامپیوتری</a></li>
                                <li><a href="#"
                                        class="block py-2 px-2 text-gray-700 hover:text-red-custom hover:bg-gray-100 rounded-lg transition-colors">اسکیپ
                                        روم</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- سایر دسته‌بندی‌ها را می‌توانید اینجا اضافه کنید -->
                </div>
            </div>
            <div id="subCategories" class="category-submenu p-4 overflow-y-auto h-full pb-20">
                <!-- Dynamic content will be populated here -->
            </div>
        </div>
    </div>
    <div id="mobileCategoryOverlay" class="mobile-only fixed inset-0 bg-black bg-opacity-50 z-45"></div>