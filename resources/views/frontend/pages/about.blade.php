@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره کازرون آنلاین</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazir:wght@300;400;500;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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
        }

        body {
            font-family: 'Vazir', 'Arial', sans-serif;
            direction: rtl;
            background: var(--gradient-bg);
            color: var(--text-color);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Section */
        .hero-section {
            background: var(--gradient-primary);
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            color: var(--white);
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.2);
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            color: rgba(255,255,255,0.9);
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Main Content */
        .main-content {
            padding: 80px 0;
        }

        .section-card {
            background: var(--white);
            border-radius: 24px;
            padding: 60px;
            margin-bottom: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .section-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-primary);
        }

        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.12);
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            right: 0;
            width: 60px;
            height: 3px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }

        .section-text {
            font-size: 1.1rem;
            color: var(--medium-gray);
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .service-item {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            padding: 25px;
            border-radius: 16px;
            border-right: 4px solid var(--primary-green);
            transition: all 0.3s ease;
            position: relative;
        }

        .service-item:hover {
            transform: translateX(-5px);
            box-shadow: 0 8px 25px rgba(46, 204, 113, 0.15);
        }

        .service-item::before {
            content: '✦';
            position: absolute;
            top: 20px;
            right: 20px;
            color: var(--primary-green);
            font-size: 1.2rem;
        }

        .service-item p {
            margin-right: 25px;
            font-size: 1rem;
            color: var(--text-color);
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary);
            padding: 80px 0;
            text-align: center;
            border-radius: 30px;
            position: relative;
            overflow: hidden;
            margin-top: 40px;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 30% 30%, rgba(255,255,255,0.1) 0%, transparent 70%),
                radial-gradient(circle at 70% 70%, rgba(255,255,255,0.1) 0%, transparent 70%);
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 20px;
            text-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .cta-text {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            background: var(--white);
            color: var(--primary-green);
            padding: 18px 45px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 12px 35px rgba(0,0,0,0.2);
            background: var(--dark-green);
            color: var(--white);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .section-card {
                padding: 40px 30px;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-section {
                padding: 60px 20px;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .section-card {
                padding: 30px 20px;
            }
        }

        /* Animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
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
                <h1 class="hero-title">درباره کازرون آنلاین</h1>
                <p class="hero-subtitle">ما با هدف ارتقاء، معرفی و اعتلای شهرستان کازرون، این پلتفرم را با عشق و دقت طراحی کرده‌ایم.</p>
            </div>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <section class="section-card animate-on-scroll">
                <h2 class="section-title">داستان ما</h2>
                <p class="section-text">
                    ما با هدف ارتقاء، معرفی و اعتلای شهرستان کازرون، وب‌سایت کازرون آنلاین را با دقت، علاقه و رویکردی حرفه‌ای راه‌اندازی کرده‌ایم. این پلتفرم نه‌تنها دروازه‌ای به سوی زیبایی‌های طبیعی، تاریخی و فرهنگی کازرون است، بلکه محلی است برای نمایش توانمندی‌ها، ظرفیت‌ها و استعدادهای جوانان این خطه پر افتخار.
                </p>
                <p class="section-text">
                    کازرون آنلاین تلاش می‌کند تا با گردآوری و ارائه محتوای دقیق، به‌روز و جامع، تصویری زنده و الهام‌بخش از کازرون ارائه دهد. ما باور داریم که هر شهر داستانی دارد و داستان کازرون، داستان تمدن، مقاومت، هنر، طبیعت و پیشرفت است. ما این داستان را با زبان تصویر، متن، فناوری و تجربه‌های کاربر، برای همگان بازگو می‌کنیم.
                </p>
            </section>

            <section class="section-card animate-on-scroll">
                <h2 class="section-title">تیم ما</h2>
                <p class="section-text">
                    تیم ما مجموعه‌ای از جوانان پرانرژی، با انگیزه و متخصص در زمینه‌های مختلف فناوری و علوم دیجیتال است. اعضای این تیم در حوزه‌هایی مانند:
                </p>
                <div class="services-grid">
                    <div class="section-card">
                        <p>برنامه‌نویسی وب با زبان PHP و فریم‌ورک Laravel</p>
                    </div>
                    <div class="section-card">
                        <p>طراحی رابط کاربری و تجربه کاربری (UI/UX)</p>
                    </div>
                    <div class="section-card">
                        <p>توسعه وب‌سایت‌های اختصاصی و بهینه‌سازی برای موتورهای جستجو (SEO)</p>
                    </div>
                    <div class="section-card">
                        <p>طراحی و پیاده‌سازی اسکریپت‌های سفارشی و ربات‌های هوشمند</p>
                    </div>
                    <div class="section-card">
                        <p>خدمات امنیت سایبری، تحلیل تهدیدات و تست نفوذ</p>
                    </div>
                    <div class="section-card">
                        <p>مشاوره هوش مصنوعی و طراحی راهکارهای مبتنی بر داده</p>
                    </div>
                    <div class="section-card">
                        <p>ارائه استراتژی‌های توسعه کسب‌وکارهای دیجیتال</p>
                    </div>
                    <div class="section-card">
                        <p>افزایش بازدید، تعامل و درآمد از طریق ابزارهای نوین بازاریابی دیجیتال</p>
                    </div>
                </div>
                <p class="section-text">
                    تسلط ما به ابزارها و فناوری‌های روز دنیا به ما امکان می‌دهد تا خدماتی انعطاف‌پذیر، دقیق و قابل اطمینان را به افراد، استارتاپ‌ها، کسب‌وکارهای محلی و سازمان‌های مختلف ارائه دهیم.
                </p>
            </section>

            <section class="section-card animate-on-scroll">
                <h2 class="section-title">مأموریت ما</h2>
                <p class="section-text">
                    ما در کازرون آنلاین فقط یک وب‌سایت ساده راه‌اندازی نکرده‌ایم. این پروژه، بخشی از یک مأموریت بزرگ‌تر برای ساخت تصویری روشن، حرفه‌ای و مثبت از کازرون در فضای دیجیتال است. ما بر این باوریم که:
                </p>
                <div class="services-grid">
                    <div class="service-item">
                        <p>هر شهر نیاز دارد در عصر دیجیتال صدایی مستقل و قدرتمند داشته باشد؛</p>
                    </div>
                    <div class="service-item">
                        <p>گردشگری، فرهنگ و اقتصاد محلی می‌توانند از طریق فناوری جهشی بزرگ داشته باشند؛</p>
                    </div>
                    <div class="service-item">
                        <p>معرفی استعدادهای بومی، هنرمندان، کارآفرینان و محصولات سنتی می‌تواند به رونق شهر کمک کند.</p>
                    </div>
                </div>
                <p class="section-text">
                    از این رو، ما با رویکردی مسئولانه و بلندمدت، در تلاش هستیم تا پلتفرمی پویا، معتبر و الهام‌بخش بسازیم که کازرون را آنگونه که شایسته است به جهانیان معرفی کند.
                </p>
            </section>

            <section class="section-card animate-on-scroll">
                <h2 class="section-title">ارزش‌های ما</h2>
                <p class="section-text">
                    ما به اصولی پایبندیم که زیربنای همه فعالیت‌های ما را تشکیل می‌دهند:
                </p>
                <div class="services-grid">
                    <div class="service-item">
                        <p>صداقت و شفافیت: ما همیشه در ارائه اطلاعات و خدمات، دقیق و راستگو هستیم.</p>
                    </div>
                    <div class="service-item">
                        <p>خلاقیت و نوآوری: نوآوری در راهکارها، طراحی و محتوا، روح اصلی تیم ماست.</p>
                    </div>
                    <div class="service-item">
                        <p>کار تیمی: موفقیت ما حاصل همکاری، احترام و همدلی میان اعضای تیم است.</p>
                    </div>
                    <div class="service-item">
                        <p>مشتری‌محوری: ما باور داریم که رضایت کاربران، مهم‌ترین شاخص موفقیت ماست.</p>
                    </div>
                    <div class="service-item">
                        <p>توسعه پایدار: به دنبال ایجاد تحولاتی هستیم که در بلندمدت مفید، تأثیرگذار و ماندگار باشند.</p>
                    </div>
                </div>
            </section>

            <section class="section-card animate-on-scroll">
                <h2 class="section-title">هدف ما</h2>
                <p class="section-text">
                    ما می‌خواهیم تجربه‌ای فراتر از یک وب‌گردی ساده برای کاربرانمان خلق کنیم. تجربه‌ای سرشار از اطلاعات مفید، احساس تعلق، افتخار به ریشه‌ها و انگیزه برای مشارکت در ساختن آینده‌ای بهتر برای کازرون. چه شما یک شهروند علاقه‌مند باشید، چه یک گردشگر کنجکاو، یا حتی صاحب یک کسب‌وکار محلی، ما در کازرون آنلاین کنار شما هستیم تا همراهی مؤثر، خلاقانه و قابل اتکا باشیم.
                </p>
                <p class="section-text">
                    ما به ارتباطی زنده و مستمر با مخاطبان خود اعتقاد داریم. نظرات، پیشنهادات و بازخوردهای شما، چراغ راه ما برای بهبود و توسعه مداوم است. کازرون آنلاین یک مسیر است؛ مسیری به سوی معرفی بهتر، توسعه بیشتر و آینده‌ای روشن‌تر برای شهری که دوستش داریم.
                </p>
                <p class="section-text">
                    💙 کازرون آنلاین با عشق برای کازرون ساخته شده است.<br>
                    با ما باشید، ماجراجویی دیجیتالی‌تان در دل کازرون از همین‌جا آغاز می‌شود.
                </p>
            </section>
        </div>
    </main>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">با ما همراه شوید</h2>
                <p class="cta-text">
                    اگر علاقه‌مند به همکاری با کازرون آنلاین هستید یا ایده‌ای برای بهبود محتوا دارید، با ما تماس بگیرید.
                </p>
                <a href="#contact" class="cta-button">تماس با ما</a>
            </div>
        </div>
    </section>

    <script>
        // Animate on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
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
