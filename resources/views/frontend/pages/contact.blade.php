@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="تماس با کازرون آنلاین - ارتباط با ما برای معرفی کازرون و ارسال پیشنهادات">
    <title>تماس با کازرون آنلاین</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazir:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-green: #2ecc71;
            --primary-blue: #3498db;
            --dark-green: #1a3c34;
            --light-gray: #f8fafc;
            --medium-gray: #64748b;
            --text-color: #1e293b;
            --white: #ffffff;
            --gradient-bg: linear-gradient(135deg, #e8f8f5 0%, #d1ecf1 100%);
            --gradient-primary: linear-gradient(135deg, #2ecc71, #3498db);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazir', 'Arial', sans-serif;
            direction: rtl;
            background: var(--gradient-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header Section */
        .hero-section {
            background: var(--gradient-primary);
            padding: 5rem 0;
            text-align: center;
            position: relative;
            min-height: 40vh;
            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            color: var(--white);
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: clamp(0.9rem, 1.8vw, 1.2rem);
            color: rgba(255,255,255,0.9);
        }

        /* Main Content */
        .main-content {
            padding: 3rem 0;
        }

        .section-card {
            background: var(--white);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .section-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 1rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -0.3rem;
            right: 0;
            width: 3rem;
            height: 0.15rem;
            background: var(--primary-green);
        }

        .section-text {
            font-size: 0.95rem;
            color: var(--medium-gray);
            margin-bottom: 1rem;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .service-item {
            background: var(--light-gray);
            padding: 1.5rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: var(--transition);
            border-right: 3px solid var(--primary-green);
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(46,204,113,0.2);
            background: var(--white);
        }

        .service-icon {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 20px; /* تنظیم اندازه ایموجی */
        }

        .service-item p {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-color);
        }

        /* Contact Methods */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1rem;
        }

        .contact-method {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .contact-method:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-green);
            border-radius: 50%;
            margin: 0 auto  درخت .8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px; /* تنظیم اندازه ایموجی */
        }

        .contact-method h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
        }

        .contact-method p {
            font-size: 0.9rem;
            color: var(--medium-gray);
            margin-bottom: 0.5rem;
        }

        .contact-method a {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .contact-method a:hover {
            color: var(--primary-blue);
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary);
            padding: 3rem 0;
            text-align: center;
            border-radius: 16px;
            margin: 2rem 0;
        }

        .cta-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--white);
            margin-bottom: 0.8rem;
        }

        .cta-text {
            font-size: 1rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 1.5rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            background: var(--white);
            color: var(--primary-green);
            padding: 0.8rem 2rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .cta-button:hover {
            background: var(--dark-green);
            color: var(--white);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 3rem 0;
            }
            .section-card {
                padding: 1.5rem;
            }
            .services-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }
            .cta-section {
                padding: 2rem 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.6rem;
            }
            .section-card {
                padding: 1rem;
            }
            .contact-method,
            .service-item {
                padding: 1rem;
            }
            .service-item {
                flex-direction: column;
                text-align: center;
            }
            .service-icon {
                margin-bottom: 0.5rem;
            }
        }

        /* Animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(15px);
            transition: all 0.5s ease-out;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <header class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">تماس با کازرون آنلاین</h1>
                <p class="hero-subtitle">برای معرفی کازرون، کسب‌وکار شما یا ارسال پیشنهادات با ما در ارتباط باشید.</p>
            </div>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <section class="section-card animate-on-scroll">
                <h2 class="section-title">درباره کازرون آنلاین</h2>
                <p class="section-text">
                    کازرون آنلاین، رسانه‌ای برای معرفی زیبایی‌ها و توانمندی‌های شهر کازرون است. 
                    ما مشتاق شنیدن پیشنهادات و محتوای شما هستیم.
                </p>
                
                <h3 class="section-title">خدمات ما</h3>
                <div class="services-grid">
                    <div class="service-item animate-on-scroll">
                        <div class="service-icon" aria-label="محتوای فرهنگی">🌍</div>
                        <p>انتشار محتوای فرهنگی و گردشگری برای معرفی جاذبه‌های کازرون</p>
                    </div>
                    <div class="service-item animate-on-scroll">
                        <div class="service-icon" aria-label="تولید محتوا">✍️</div>
                        <p>تولید محتوای اختصاصی با تمرکز بر ارزش‌های کازرون</p>
                    </div>
                    <div class="service-item animate-on-scroll">
                        <div class="service-icon" aria-label="پوشش خبری">📰</div>
                        <p>پوشش خبری رویدادها و موفقیت‌های شهروندان کازرونی</p>
                    </div>
                    <div class="service-item animate-on-scroll">
                        <div class="service-icon" aria-label="دیجیتال مارکتینگ">📈</div>
                        <p>مشاوره دیجیتال مارکتینگ برای کسب‌وکارهای محلی</p>
                    </div>
                    <div class="service-item animate-on-scroll">
                        <div class="service-icon" aria-label="همکاری رسانه‌ای">🤝</div>
                        <p>همکاری رسانه‌ای با فعالان فرهنگی و کارآفرینان</p>
                    </div>
                </div>
            </section>

            <section class="section-card animate-on-scroll">
                <h2 class="section-title">راه‌های ارتباطی</h2>
                <p class="section-text">از طریق روش‌های زیر با ما در تماس باشید:</p>
                
                <div class="contact-grid">
                    <div class="contact-method">
                        <div class="contact-icon">📧</div>
                        <h3>ایمیل</h3>
                        <p><a href="mailto:info@kazeroonline.com" aria-label="ارسال ایمیل به کازرون آنلاین">info@kazeroonline.com</a></p>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">☎️</div>
                        <h3>تماس با دفتر</h3>
                        <p><a href="tel:+987142224162" aria-label="تماس با دفتر کازرون آنلاین">۰۷۱-۴۲۲۲۴۱۶۲</a></p>
                        <p>شنبه تا چهارشنبه: ۸ صبح تا ۱۰ شب</p>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">💬</div>
                        <h3>واتس‌اپ</h3>
                        <p><a href="https://wa.me/+989179070298" target="_blank" aria-label="ارسال پیام واتس‌اپ">ارسال پیام فوری</a></p>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">📨</div>
                        <h3>تلگرام</h3>
                        <p><a href="https://t.me/kazeroonline" target="_blank" aria-label="ارتباط از طریق تلگرام">ارتباط مستقیم</a></p>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">📞</div>
                        <h3>مدیر ارتباطات</h3>
                        <p><a href="tel:+989179070298" aria-label="تماس با مدیر ارتباطات">۰۹۱۷-۹۰۷۰۲۹۸</a></p>
                        <p>پاسخگویی ۲۴ ساعته</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">ارسال محتوای پیشنهادی</h2>
                <p class="cta-text">
                    محتوای ارزشمند خود درباره کازرون را از طریق راه‌های ارتباطی با ما به اشتراک بگذارید.
                </p>
                <a href="#contact-methods" class="cta-button">تماس با ما</a>
            </div>
        </div>
    </section>

    <script>
        // Intersection Observer for animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, index * 100); // Staggered animation for services
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(anchor.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
@endsection