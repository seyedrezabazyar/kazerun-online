@extends('layouts.resume')

@section('title', 'نمایش رزومه')

@section('content')
    <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        @php
            // داده‌های نمونه رزومه
            $resumes = [
                1 => [
                    'name' => 'وانیا پورشمس',
                    'title' => 'توسعه‌دهنده فول‌استک',
                    'experience' => '5 سال',
                    'location' => 'تهران',
                    'skills' => ['Laravel', 'Vue.js', 'PHP', 'JavaScript', 'MySQL', 'Docker', 'Git', 'REST API'],
                    'avatar' => 'https://ui-avatars.com/api/?name=وانیا+پورشمس&background=667eea&color=fff&size=200&rounded=true',
                    'status' => 'آماده همکاری',
                    'category' => 'برنامه‌نویس',
                    'phone' => '09123456789',
                    'email' => 'vania.pourshams@example.com',
                    'bio' => 'توسعه‌دهنده باتجربه در زمینه طراحی و پیاده‌سازی سیستم‌های وب مدرن. تخصص در Laravel و Vue.js با سابقه کار در پروژه‌های مختلف.',
                    'education' => [
                        ['degree' => 'کارشناسی ارشد', 'field' => 'مهندسی نرم‌افزار', 'university' => 'دانشگاه تهران', 'year' => '1398-1400'],
                        ['degree' => 'کارشناسی', 'field' => 'مهندسی کامپیوتر', 'university' => 'دانشگاه شریف', 'year' => '1394-1398']
                    ],
                    'work_experience' => [
                        ['position' => 'توسعه‌دهنده ارشد', 'company' => 'شرکت تکنولوژی پیشرو', 'duration' => '1400-1403', 'description' => 'طراحی و توسعه سیستم‌های مدیریت محتوا و پنل‌های ادمین'],
                        ['position' => 'توسعه‌دهنده جونیور', 'company' => 'استارتاپ دیجیتال', 'duration' => '1399-1400', 'description' => 'کار بر روی پروژه‌های وب و موبایل اپلیکیشن']
                    ],
                    'salary_range' => '25-35 میلیون تومان'
                ],
                2 => [
                    'name' => 'رضا آقایی',
                    'title' => 'طراح رابط کاربری',
                    'experience' => '3 سال',
                    'location' => 'کازرون',
                    'skills' => ['Figma', 'Adobe XD', 'CSS', 'React', 'Tailwind', 'Photoshop'],
                    'avatar' => 'https://ui-avatars.com/api/?name=رضا+آقایی&background=f093fb&color=fff&size=200&rounded=true',
                    'status' => 'مشغول به کار',
                    'category' => 'طراح',
                    'phone' => '09987654321',
                    'email' => 'reza.aghaei@example.com',
                    'bio' => 'طراح خلاق رابط کاربری با تمرکز بر تجربه کاربری بهینه و طراحی‌های مدرن.',
                    'education' => [
                        ['degree' => 'کارشناسی', 'field' => 'طراحی گرافیک', 'university' => 'دانشگاه هنر', 'year' => '1396-1400']
                    ],
                    'work_experience' => [
                        ['position' => 'UI/UX Designer', 'company' => 'آژانس دیجیتال', 'duration' => '1401-1403', 'description' => 'طراحی رابط کاربری وب‌سایت‌ها و اپلیکیشن‌های موبایل']
                    ],
                    'salary_range' => '15-25 میلیون تومان'
                ]
            ];

            $resume = $resumes[$id] ?? $resumes[1];
        @endphp

                <!-- Back Button -->
        <div class="mb-8 animate-fade-in">
            <a href="{{ route('resume.index') }}" class="inline-flex items-center text-white/80 hover:text-white transition-colors duration-200">
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                بازگشت به فهرست رزومه‌ها
            </a>
        </div>

        <!-- Profile Header -->
        <div class="glass-effect rounded-2xl p-8 mb-8 backdrop-blur-xl animate-slide-up">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Avatar Section -->
                <div class="lg:w-1/4 flex flex-col items-center text-center">
                    <div class="relative mb-4">
                        <img src="{{ $resume['avatar'] }}" alt="{{ $resume['name'] }}" class="w-32 h-32 rounded-full border-4 border-white/20 shadow-xl">
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-2 border-white/50 flex items-center justify-center">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                    </div>
                    <span class="px-4 py-2 text-sm font-medium rounded-full {{ $resume['status'] == 'آماده همکاری' ? 'bg-green-500/20 text-green-300 border border-green-500/30' : 'bg-yellow-500/20 text-yellow-300 border border-yellow-500/30' }}">
                        {{ $resume['status'] }}
                    </span>
                </div>

                <!-- Main Info -->
                <div class="lg:w-3/4">
                    <h1 class="text-3xl font-bold text-white mb-2">{{ $resume['name'] }}</h1>
                    <p class="text-xl text-purple-200 mb-4">{{ $resume['title'] }}</p>
                    <p class="text-white/80 mb-6 leading-relaxed">{{ $resume['bio'] }}</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center text-white/80">
                            <svg class="w-5 h-5 ml-3 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"/>
                            </svg>
                            {{ $resume['experience'] }} سابقه کار
                        </div>
                        <div class="flex items-center text-white/80">
                            <svg class="w-5 h-5 ml-3 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ $resume['location'] }}
                        </div>
                        <div class="flex items-center text-white/80">
                            <svg class="w-5 h-5 ml-3 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                            </svg>
                            {{ $resume['salary_range'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="glass-effect rounded-2xl p-8 mb-8 backdrop-blur-xl animate-slide-up">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <svg class="w-6 h-6 ml-3 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
                مهارت‌های تخصصی
            </h2>
            <div class="flex flex-wrap gap-3">
                @foreach($resume['skills'] as $skill)
                    <span class="px-4 py-2 bg-gradient-to-r from-purple-500/20 to-blue-500/20 text-white/90 rounded-full border border-white/20 hover:from-purple-500/30 hover:to-blue-500/30 transition-all duration-200">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </div>

        <!-- Experience & Education Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Work Experience -->
            <div class="glass-effect rounded-2xl p-8 backdrop-blur-xl animate-slide-up">
                <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                    <svg class="w-6 h-6 ml-3 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"/>
                    </svg>
                    سوابق کاری
                </h2>
                <div class="space-y-6">
                    @foreach($resume['work_experience'] as $work)
                        <div class="relative">
                            <div class="absolute right-0 top-0 w-3 h-3 bg-purple-500 rounded-full"></div>
                            <div class="mr-6">
                                <h3 class="text-lg font-semibold text-white">{{ $work['position'] }}</h3>
                                <p class="text-purple-200 mb-2">{{ $work['company'] }}</p>
                                <p class="text-white/60 text-sm mb-3">{{ $work['duration'] }}</p>
                                <p class="text-white/80 text-sm">{{ $work['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Education -->
            <div class="glass-effect rounded-2xl p-8 backdrop-blur-xl animate-slide-up">
                <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                    <svg class="w-6 h-6 ml-3 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                    </svg>
                    تحصیلات
                </h2>
                <div class="space-y-6">
                    @foreach($resume['education'] as $edu)
                        <div class="relative">
                            <div class="absolute right-0 top-0 w-3 h-3 bg-blue-500 rounded-full"></div>
                            <div class="mr-6">
                                <h3 class="text-lg font-semibold text-white">{{ $edu['degree'] }}</h3>
                                <p class="text-purple-200 mb-2">{{ $edu['field'] }}</p>
                                <p class="text-white/60 text-sm mb-1">{{ $edu['university'] }}</p>
                                <p class="text-white/60 text-sm">{{ $edu['year'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="glass-effect rounded-2xl p-8 backdrop-blur-xl animate-slide-up">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                <svg class="w-6 h-6 ml-3 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                اطلاعات تماس
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-center space-x-4 space-x-reverse">
                    <div class="bg-gradient-to-r from-purple-500/20 to-blue-500/20 p-3 rounded-full">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-white/60 text-sm">شماره تماس</p>
                        <p class="text-white">{{ $resume['phone'] }}</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 space-x-reverse">
                    <div class="bg-gradient-to-r from-purple-500/20 to-blue-500/20 p-3 rounded-full">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-white/60 text-sm">ایمیل</p>
                        <p class="text-white">{{ $resume['email'] }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex gap-4">
                <button class="flex-1 bg-gradient-to-r from-purple-600 to-blue-600 text-white py-3 px-6 rounded-xl hover:from-purple-700 hover:to-blue-700 transition-all duration-200 font-medium shadow-lg hover:shadow-xl transform hover:scale-105">
                    ارسال پیام
                </button>
                <button class="flex-1 bg-white/10 backdrop-blur-sm text-white py-3 px-6 rounded-xl hover:bg-white/20 transition-all duration-200 font-medium border border-white/20">
                    دانلود رزومه
                </button>
            </div>
        </div>
    </div>
@endsection