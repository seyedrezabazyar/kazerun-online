@extends('layouts.resume')

@section('title', 'فهرست رزومه‌ها')

@section('content')
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-16 animate-fade-in">
            <div class="relative inline-block">
                <h1 class="text-5xl font-bold bg-gradient-to-r from-white via-purple-100 to-white bg-clip-text text-transparent mb-4">
                    کشف استعدادهای برتر
                </h1>
                <div class="absolute -top-2 -right-2 w-4 h-4 bg-yellow-400 rounded-full animate-bounce-gentle"></div>
                <div class="absolute -bottom-2 -left-2 w-3 h-3 bg-pink-400 rounded-full animate-bounce-gentle" style="animation-delay: 0.3s"></div>
            </div>
            <p class="text-white/80 text-lg max-w-2xl mx-auto leading-relaxed">
                مجموعه‌ای منحصر به فرد از رزومه‌های متخصصان حرفه‌ای در حوزه‌های مختلف تکنولوژی
            </p>
        </div>

        <!-- Search and Filter Section -->
        <div class="mb-12 animate-slide-up">
            <div class="glass-effect rounded-2xl p-8 backdrop-blur-xl">
                <div class="flex flex-col lg:flex-row gap-6">
                    <div class="flex-1 relative">
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text"
                               id="searchInput"
                               placeholder="جستجو در رزومه‌ها، مهارت‌ها، و تخصص‌ها..."
                               class="w-full pl-4 pr-12 py-4 bg-white/90 backdrop-blur-sm border border-white/20 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent placeholder-gray-500 text-gray-800 transition-all duration-200">
                    </div>
                    <div class="flex-1 lg:flex-none">
                        <select id="filterSpecialty" class="w-full lg:w-56 px-6 py-4 bg-white/90 backdrop-blur-sm border border-white/20 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-800 transition-all duration-200">
                            <option value="">همه تخصص‌ها</option>
                            <option value="برنامه‌نویس">🚀 برنامه‌نویس</option>
                            <option value="طراح">🎨 طراح</option>
                            <option value="مهندس">⚙️ مهندس</option>
                            <option value="مدیر">📊 مدیر</option>
                            <option value="تحلیل‌گر">📈 تحلیل‌گر</option>
                        </select>
                    </div>
                    <button id="searchBtn" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-xl hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl font-medium transform hover:scale-105">
                        <span class="flex items-center space-x-2 space-x-reverse">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <span>جستجو</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Resume Grid -->
        <div id="resumeGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                // نمونه داده‌ها برای نمایش
                $resumes = [
                    [
                        'id' => 1,
                        'name' => 'وانیا پورشمس',
                        'title' => '100',
                        'experience' => '5 سال',
                        'location' => 'بوستان رفیع',
                        'skills' => ['sak', 'dogi', '۷', '۸'],
                        'avatar' => 'https://ui-avatars.com/api/?name=علی+احمدی&background=667eea&color=fff&size=120&rounded=true',
                        'status' => 'آماده همکاری',
                        'category' => 'خدمات دهنده'
                    ],
                    [
                        'id' => 2,
                        'name' => 'رضا آقایی',
                        'title' => 'طراح رابط کاربری',
                        'experience' => '3 سال',
                        'location' => 'کازرون',
                        'skills' => ['گوزگیج', 'کلو', 'CSS', 'React'],
                        'avatar' => 'https://ui-avatars.com/api/?name=مریم+رضایی&background=f093fb&color=fff&size=120&rounded=true',
                        'status' => 'مشغول به کار',
                        'category' => 'ریدن'
                    ],
                    [
                        'id' => 3,
                        'name' => 'حسن محمدی',
                        'title' => 'مهندس DevOps',
                        'experience' => '7 سال',
                        'location' => 'مشهد',
                        'skills' => ['Docker', 'Kubernetes', 'AWS', 'Jenkins'],
                        'avatar' => 'https://ui-avatars.com/api/?name=حسن+محمدی&background=764ba2&color=fff&size=120&rounded=true',
                        'status' => 'آماده همکاری',
                        'category' => 'مهندس'
                    ],
                    [
                        'id' => 4,
                        'name' => 'فاطمه کریمی',
                        'title' => 'تحلیل‌گر داده',
                        'experience' => '4 سال',
                        'location' => 'شیراز',
                        'skills' => ['Python', 'SQL', 'Tableau', 'TensorFlow'],
                        'avatar' => 'https://ui-avatars.com/api/?name=فاطمه+کریمی&background=f5576c&color=fff&size=120&rounded=true',
                        'status' => 'آماده همکاری',
                        'category' => 'تحلیل‌گر'
                    ],
                    [
                        'id' => 5,
                        'name' => 'رضا نوری',
                        'title' => 'مدیر پروژه',
                        'experience' => '8 سال',
                        'location' => 'تبریز',
                        'skills' => ['Scrum', 'Agile', 'Jira', 'Leadership'],
                        'avatar' => 'https://ui-avatars.com/api/?name=رضا+نوری&background=667eea&color=fff&size=120&rounded=true',
                        'status' => 'مشغول به کار',
                        'category' => 'مدیر'
                    ],
                    [
                        'id' => 6,
                        'name' => 'زهرا علوی',
                        'title' => 'توسعه‌دهنده موبایل',
                        'experience' => '6 سال',
                        'location' => 'کرج',
                        'skills' => ['React Native', 'Flutter', 'Swift', 'Kotlin'],
                        'avatar' => 'https://ui-avatars.com/api/?name=زهرا+علوی&background=764ba2&color=fff&size=120&rounded=true',
                        'status' => 'آماده همکاری',
                        'category' => 'برنامه‌نویس'
                    ],
                    [
                        'id' => 7,
                        'name' => 'امید صادقی',
                        'title' => 'مطور بک‌اند',
                        'experience' => '4 سال',
                        'location' => 'تهران',
                        'skills' => ['Node.js', 'MongoDB', 'Express', 'GraphQL'],
                        'avatar' => 'https://ui-avatars.com/api/?name=امید+صادقی&background=48c9b0&color=fff&size=120&rounded=true',
                        'status' => 'آماده همکاری',
                        'category' => 'برنامه‌نویس'
                    ],
                    [
                        'id' => 8,
                        'name' => 'سارا احمدی',
                        'title' => 'طراح گرافیک',
                        'experience' => '5 سال',
                        'location' => 'اصفهان',
                        'skills' => ['Photoshop', 'Illustrator', 'InDesign', 'Branding'],
                        'avatar' => 'https://ui-avatars.com/api/?name=سارا+احمدی&background=e17055&color=fff&size=120&rounded=true',
                        'status' => 'مشغول به کار',
                        'category' => 'طراح'
                    ],
                    [
                        'id' => 9,
                        'name' => 'محسن قربانی',
                        'title' => 'مهندس شبکه',
                        'experience' => '9 سال',
                        'location' => 'مشهد',
                        'skills' => ['CISCO', 'Network Security', 'VPN', 'Firewall'],
                        'avatar' => 'https://ui-avatars.com/api/?name=محسن+قربانی&background=3742fa&color=fff&size=120&rounded=true',
                        'status' => 'آماده همکاری',
                        'category' => 'مهندس'
                    ]
                ];
            @endphp

            @foreach($resumes as $resume)
                <div class="resume-card glass-effect rounded-2xl p-6 cursor-pointer backdrop-blur-xl border border-white/20 hover:shadow-lg transition-shadow duration-300 relative overflow-hidden"
                     onclick="window.location.href='{{ route('resume.show', $resume['id']) }}'"
                     data-name="{{ $resume['name'] }}"
                     data-title="{{ $resume['title'] }}"
                     data-skills="{{ implode(' ', $resume['skills']) }}"
                     data-category="{{ $resume['category'] }}">

                    <!-- Background Pattern -->
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 via-transparent to-blue-500/5"></div>

                    <!-- Status Badge -->
                    <div class="absolute top-4 left-4 z-10">
                        <span class="px-3 py-1 text-xs font-medium rounded-full {{ $resume['status'] == 'آماده همکاری' ? 'bg-green-500/20 text-green-300 border border-green-500/30' : 'bg-yellow-500/20 text-yellow-300 border border-yellow-500/30' }}">
                            {{ $resume['status'] }}
                        </span>
                    </div>

                    <!-- Main Content -->
                    <div class="relative z-10">
                        <!-- Avatar and Basic Info -->
                        <div class="flex flex-col items-center text-center mb-6 mt-4">
                            <div class="relative mb-4">
                                <img src="{{ $resume['avatar'] }}"
                                     alt="{{ $resume['name'] }}"
                                     class="w-20 h-20 rounded-full border-4 border-white/20 shadow-xl">
                                <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 rounded-full border-2 border-white/50 flex items-center justify-center">
                                    <div class="w-2 h-2 bg-white rounded-full"></div>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-1">{{ $resume['name'] }}</h3>
                            <p class="text-purple-200 font-medium text-sm">{{ $resume['title'] }}</p>
                        </div>

                        <!-- Experience and Location -->
                        <div class="mb-6 space-y-3">
                            <div class="flex items-center text-sm text-white/80">
                                <svg class="w-4 h-4 ml-2 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"/>
                                </svg>
                                سابقه کار: {{ $resume['experience'] }}
                            </div>
                            <div class="flex items-center text-sm text-white/80">
                                <svg class="w-4 h-4 ml-2 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                محل سکونت: {{ $resume['location'] }}
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="mb-6">
                            <p class="text-sm text-white/60 mb-3 font-medium">مهارت‌های کلیدی:</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach(array_slice($resume['skills'], 0, 3) as $skill)
                                    <span class="px-3 py-1 bg-white/10 backdrop-blur-sm text-white/90 text-xs rounded-full border border-white/20">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                                @if(count($resume['skills']) > 3)
                                    <span class="px-3 py-1 bg-gradient-to-r from-purple-500/20 to-blue-500/20 text-white/70 text-xs rounded-full border border-white/20">
                                        +{{ count($resume['skills']) - 3 }} مورد
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="flex">
                            <button class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white py-3 rounded-xl hover:from-purple-700 hover:to-blue-700 transition-all duration-200 font-medium text-sm shadow-lg hover:shadow-xl transform hover:scale-105">
                                مشاهده رزومه
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- No Results Message -->
        <div id="noResults" class="hidden text-center py-12">
            <div class="glass-effect rounded-2xl p-8 backdrop-blur-xl">
                <div class="text-white/60 text-lg mb-4">
                    <svg class="w-16 h-16 mx-auto mb-4 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.29-1.007-5.824-2.412M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    نتیجه‌ای یافت نشد
                </div>
                <p class="text-white/40">
                    لطفاً جستجوی خود را تغییر دهید یا فیلترهای مختلفی را امتحان کنید
                </p>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="mt-16 mb-12">
            <div class="glass-effect rounded-2xl p-8 backdrop-blur-xl">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">{{ count($resumes) }}+</div>
                        <div class="text-white/60">متخصص فعال</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">95%</div>
                        <div class="text-white/60">نرخ موفقیت</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">24/7</div>
                        <div class="text-white/60">پشتیبانی</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">1000+</div>
                        <div class="text-white/60">پروژه موفق</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center">
            <nav class="glass-effect rounded-xl p-2 backdrop-blur-xl">
                <div class="flex items-center space-x-2 space-x-reverse">
                    <button id="prevBtn" class="px-4 py-2 text-white/60 hover:text-white hover:bg-white/10 rounded-lg transition-all duration-200 flex items-center space-x-1 space-x-reverse">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        <span>قبلی</span>
                    </button>

                    <div id="pageNumbers" class="flex items-center space-x-2 space-x-reverse">
                        <button class="page-btn px-4 py-2 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-lg shadow-lg font-medium" data-page="1">1</button>
                        <button class="page-btn px-4 py-2 text-white/60 hover:text-white hover:bg-white/10 rounded-lg transition-all duration-200" data-page="2">2</button>
                        <button class="page-btn px-4 py-2 text-white/60 hover:text-white hover:bg-white/10 rounded-lg transition-all duration-200" data-page="3">3</button>
                    </div>

                    <button id="nextBtn" class="px-4 py-2 text-white/60 hover:text-white hover:bg-white/10 rounded-lg transition-all duration-200 flex items-center space-x-1 space-x-reverse">
                        <span>بعدی</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const filterSpecialty = document.getElementById('filterSpecialty');
            const searchBtn = document.getElementById('searchBtn');
            const resumeGrid = document.getElementById('resumeGrid');
            const noResults = document.getElementById('noResults');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const pageButtons = document.querySelectorAll('.page-btn');

            let currentPage = 1;
            const itemsPerPage = 6;
            let filteredResumes = [...document.querySelectorAll('.resume-card')];

            // جستجو و فیلترینگ
            function performSearch() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                const selectedSpecialty = filterSpecialty.value;
                const allResumes = document.querySelectorAll('.resume-card');

                filteredResumes = [];

                allResumes.forEach(resume => {
                    const name = resume.dataset.name.toLowerCase();
                    const title = resume.dataset.title.toLowerCase();
                    const skills = resume.dataset.skills.toLowerCase();
                    const category = resume.dataset.category;

                    const matchesSearch = !searchTerm ||
                        name.includes(searchTerm) ||
                        title.includes(searchTerm) ||
                        skills.includes(searchTerm);

                    const matchesSpecialty = !selectedSpecialty || category === selectedSpecialty;

                    if (matchesSearch && matchesSpecialty) {
                        filteredResumes.push(resume);
                    }
                });

                currentPage = 1;
                displayResults();
            }

            // نمایش نتایج
            function displayResults() {
                const allResumes = document.querySelectorAll('.resume-card');
                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = startIndex + itemsPerPage;

                // پنهان کردن همه رزومه‌ها
                allResumes.forEach(resume => {
                    resume.style.display = 'none';
                });

                // نمایش رزومه‌های فیلتر شده
                const currentPageResumes = filteredResumes.slice(startIndex, endIndex);
                currentPageResumes.forEach(resume => {
                    resume.style.display = 'block';
                });

                // نمایش پیام عدم وجود نتیجه
                if (filteredResumes.length === 0) {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }

                updatePagination();
            }

            // بروزرسانی صفحه‌بندی
            function updatePagination() {
                const totalPages = Math.ceil(filteredResumes.length / itemsPerPage);

                // فعال/غیرفعال کردن دکمه‌های قبل و بعد
                prevBtn.disabled = currentPage === 1;
                nextBtn.disabled = currentPage === totalPages || totalPages === 0;

                if (currentPage === 1) {
                    prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }

                if (currentPage === totalPages || totalPages === 0) {
                    nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }

                // بروزرسانی دکمه‌های شماره صفحه
                pageButtons.forEach(btn => {
                    const pageNum = parseInt(btn.dataset.page);
                    if (pageNum === currentPage) {
                        btn.classList.add('bg-gradient-to-r', 'from-purple-600', 'to-blue-600', 'text-white', 'shadow-lg');
                        btn.classList.remove('text-white/60', 'hover:text-white', 'hover:bg-white/10');
                    } else {
                        btn.classList.remove('bg-gradient-to-r', 'from-purple-600', 'to-blue-600', 'text-white', 'shadow-lg');
                        btn.classList.add('text-white/60', 'hover:text-white', 'hover:bg-white/10');
                    }

                    // مخفی کردن دکمه‌هایی که از محدوده خارج هستند
                    if (pageNum > totalPages) {
                        btn.style.display = 'none';
                    } else {
                        btn.style.display = 'block';
                    }
                });
            }

            // Event listeners
            searchBtn.addEventListener('click', performSearch);

            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });

            filterSpecialty.addEventListener('change', performSearch);

            // جستجوی لحظه‌ای
            searchInput.addEventListener('input', function() {
                clearTimeout(this.searchTimeout);
                this.searchTimeout = setTimeout(performSearch, 300);
            });

            // صفحه‌بندی
            prevBtn.addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    displayResults();
                }
            });

            nextBtn.addEventListener('click', function() {
                const totalPages = Math.ceil(filteredResumes.length / itemsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    displayResults();
                }
            });

            pageButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const pageNum = parseInt(this.dataset.page);
                    const totalPages = Math.ceil(filteredResumes.length / itemsPerPage);
                    if (pageNum <= totalPages) {
                        currentPage = pageNum;
                        displayResults();
                    }
                });
            });

            // نمایش اولیه
            displayResults();
        });
    </script>
@endsection