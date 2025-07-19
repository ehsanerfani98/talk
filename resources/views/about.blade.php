<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما | سامانه تاک</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* استایل‌های پایه از فایل اصلی */
        :root {
            --primary-color: #664bff;
            --secondary-color: #4b87ff;
            --accent-color: #ff6b6b;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gray-color: #6c757d;
            --transition: all 0.3s ease;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Vazir, sans-serif;
        }

        a {
            text-decoration: none;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            color: var(--dark-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* استایل‌های هدر و نویگیشن از فایل اصلی */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 15px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo i {
            margin-left: 10px;
            color: var(--accent-color);
        }

        .nav-desktop {
            display: flex;
            list-style: none;
        }

        .nav-desktop li {
            margin-left: 25px;
        }

        .nav-desktop a {
            color: var(--dark-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: var(--transition);
            padding: 5px 0;
            position: relative;
        }

        .nav-desktop a:hover {
            color: var(--primary-color);
        }

        .nav-desktop a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: var(--transition);
        }

        .nav-desktop a:hover::after {
            width: 100%;
        }

        .cta-button {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(78, 84, 200, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(78, 84, 200, 0.4);
        }

        /* استایل‌های منوی موبایل از فایل اصلی */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.8rem;
            color: var(--primary-color);
            cursor: pointer;
        }

        .mobile-nav {
            position: fixed;
            top: 0;
            right: -300px;
            width: 280px;
            height: 100vh;
            background: white;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 2000;
            transition: var(--transition);
            padding: 80px 20px 20px;
            overflow-y: auto;
        }

        .mobile-nav.active {
            right: 0;
        }

        .mobile-nav ul {
            list-style: none;
        }

        .mobile-nav ul li {
            margin-bottom: 20px;
        }

        .mobile-nav ul li a {
            color: var(--dark-color);
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 500;
            display: block;
            padding: 10px;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .mobile-nav ul li a:hover {
            background-color: #f0f4ff;
            color: var(--primary-color);
        }

        .close-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background: none;
            border: none;
            font-size: 1.8rem;
            color: var(--primary-color);
            cursor: pointer;
        }

        /* استایل‌های خاص صفحه درباره ما */
        .about-hero {
            padding: 180px 0 80px;
            background: linear-gradient(135deg, #e0e7ff 0%, #d1e0fd 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(143, 148, 251, 0.15) 0%, rgba(78, 84, 200, 0.15) 100%);
        }

        .about-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
        }

        .about-hero h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        .about-hero p {
            font-size: 1.2rem;
            color: var(--gray-color);
            max-width: 800px;
            margin: 0 auto;
        }

        .about-content {
            padding: 80px 0;
            background: white;
        }

        .about-section {
            margin-bottom: 60px;
        }

        .about-section:last-child {
            margin-bottom: 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray-color);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .about-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-top: 4px solid var(--primary-color);
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .about-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .about-card p {
            color: var(--gray-color);
            line-height: 1.8;
        }

        .team-members {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .team-member {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .member-image {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .team-member:hover .member-image img {
            transform: scale(1.05);
        }

        .member-info {
            padding: 25px 20px;
        }

        .member-info h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .member-info p {
            color: var(--gray-color);
            margin-bottom: 15px;
        }

        .member-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .member-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background: #f0f4ff;
            border-radius: 50%;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .member-social a:hover {
            background: var(--primary-color);
            color: white;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 40px auto 0;
            padding: 0 20px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            transform: translateX(50%);
            width: 3px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            display: flex;
            justify-content: flex-start;
        }

        .timeline-item:nth-child(even) {
            justify-content: flex-end;
        }

        .timeline-content {
            width: calc(50% - 40px);
            padding: 20px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            position: relative;
        }

        .timeline-content::before {
            content: '';
            position: absolute;
            top: 20px;
            width: 20px;
            height: 20px;
            background: var(--primary-color);
            border-radius: 50%;
        }

        .timeline-item:nth-child(odd) .timeline-content::before {
            left: -30px;
        }

        .timeline-item:nth-child(even) .timeline-content::before {
            right: -30px;
        }

        .timeline-date {
            display: inline-block;
            padding: 5px 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .timeline-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .timeline-content p {
            color: var(--gray-color);
            line-height: 1.7;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-title {
            font-size: 1.2rem;
            color: var(--dark-color);
        }

        /* استایل فوتر از فایل اصلی */
        footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.4rem;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--primary-color);
        }

        .footer-column p {
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-5px);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }

        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }

        .footer-links a i {
            margin-left: 8px;
            font-size: 0.8rem;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* رسپانسیو */
        @media (max-width: 992px) {
            .timeline::before {
                right: 40px;
            }

            .timeline-item {
                justify-content: flex-start !important;
            }

            .timeline-content {
                width: calc(100% - 80px);
            }

            .timeline-content::before {
                left: -30px !important;
                right: auto !important;
            }
        }

        @media (max-width: 768px) {
            .nav-desktop {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .about-hero h1 {
                font-size: 2rem;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .about-hero {
                padding: 150px 0 60px;
            }

            .about-hero h1 {
                font-size: 1.8rem;
            }

            .about-hero p {
                font-size: 1rem;
            }

            .section-title h2 {
                font-size: 1.5rem;
            }

            .about-card, .team-member {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-rocket"></i>
                سامانه تاک (تالار ارتباطی کشور وابسته به سازمان متخصصین و مدیران ایران)
            </a>

            <nav class="desktop-nav">
                <ul class="nav-desktop">
                    <li><a href="index.html">صفحه اصلی</a></li>
                    <li><a href="about.html" class="active">درباره ما</a></li>
                    <li><a href="services.html">خدمات</a></li>
                    <li><a href="contact.html">تماس با ما</a></li>
                </ul>
            </nav>

            <a href="{{ route('login') }}" class="cta-button">ورود به سامانه</a>

            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav">
        <button class="close-btn">
            <i class="fas fa-times"></i>
        </button>
        <ul>
            <li><a href="index.html">صفحه اصلی</a></li>
            <li><a href="about.html" class="active">درباره ما</a></li>
            <li><a href="services.html">خدمات</a></li>
            <li><a href="contact.html">تماس با ما</a></li>
            <li><a href="{{ route('login') }}" class="cta-button">ورود به سامانه</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>درباره سامانه تاک</h1>
            <p>سامانه تاک با هدف ایجاد تحول در ارتباطات سازمانی و ارائه راهکارهای هوشمند برای مدیران و متخصصین کشور تأسیس شده است</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <!-- About Us Section -->
            <div class="about-section">
                <div class="section-title">
                    <h2>چه کسی هستیم؟</h2>
                    <p>ما یک تیم متخصص و متعهد هستیم که برای بهبود ارتباطات سازمانی تلاش می‌کنیم</p>
                </div>

                <div class="about-grid">
                    <div class="about-card">
                        <h3>ماموریت ما</h3>
                        <p>ایجاد بستری امن، هوشمند و کارآمد برای تسهیل ارتباطات سازمانی و تخصصی در سطح کشور با بهره‌گیری از آخرین فناوری‌های روز دنیا</p>
                    </div>

                    <div class="about-card">
                        <h3>چشم‌انداز</h3>
                        <p>تبدیل شدن به پیشروترین سامانه ارتباطات تخصصی در منطقه تا سال ۱۴۱۰ با تمرکز بر نوآوری، امنیت و تجربه کاربری بی‌نظیر</p>
                    </div>

                    <div class="about-card">
                        <h3>ارزش‌های ما</h3>
                        <p>تعهد به مشتری، نوآوری مستمر، شفافیت، مسئولیت‌پذیری اجتماعی و توسعه پایدار از اصلی‌ترین ارزش‌های سازمانی ما محسوب می‌شوند</p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="about-section">
                <div class="section-title">
                    <h2>سامانه تاک در یک نگاه</h2>
                    <p>آمار و ارقامی که نشان‌دهنده رشد و اعتماد کاربران به سامانه ماست</p>
                </div>

                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-number">۵۰۰+</div>
                        <div class="stat-title">سازمان عضو</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">۱۰,۰۰۰+</div>
                        <div class="stat-title">کاربر فعال</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">۹۸%</div>
                        <div class="stat-title">رضایت کاربران</div>
                    </div>

                    <div class="stat-item">
                        <div class="stat-number">۲۴/۷</div>
                        <div class="stat-title">پشتیبانی</div>
                    </div>
                </div>
            </div>

            <!-- Timeline Section -->
            <div class="about-section">
                <div class="section-title">
                    <h2>مسیر رشد ما</h2>
                    <p>نگاهی به مهم‌ترین نقاط عطف در مسیر پیشرفت سامانه تاک</p>
                </div>

                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-date">۱۳۹۸</span>
                            <h3>شکل‌گیری ایده</h3>
                            <p>ایده اولیه سامانه تاک در جلسات مشترک با سازمان‌های دولتی و شرکت‌های خصوصی شکل گرفت</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-date">۱۳۹۹</span>
                            <h3>تأسیس شرکت</h3>
                            <p>شرکت فناوری اطلاعات تاک با هدف توسعه سامانه ارتباطات تخصصی تأسیس شد</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-date">۱۴۰۰</span>
                            <h3>نسخه آزمایشی</h3>
                            <p>اولین نسخه آزمایشی سامانه با همکاری ۱۰ سازمان پیشرو راه‌اندازی شد</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-date">۱۴۰۲</span>
                            <h3>راه‌اندازی رسمی</h3>
                            <p>سامانه تاک به صورت رسمی با حضور وزیر ارتباطات و مدیران ارشد سازمان‌ها راه‌اندازی شد</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-content">
                            <span class="timeline-date">۱۴۰۳</span>
                            <h3>گسترش خدمات</h3>
                            <p>با اضافه شدن ماژول‌های جدید، سامانه تاک به یک پلتفرم جامع ارتباطات سازمانی تبدیل شد</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="about-section">
                <div class="section-title">
                    <h2>تیم ما</h2>
                    <p>متخصصان و مدیرانی که سامانه تاک را به شما معرفی می‌کنند</p>
                </div>

                <div class="team-members">
                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="دکتر محمد رضایی">
                        </div>
                        <div class="member-info">
                            <h3>دکتر محمد رضایی</h3>
                            <p>مدیرعامل و بنیان‌گذار</p>
                            <div class="member-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="نسرین محمدی">
                        </div>
                        <div class="member-info">
                            <h3>نسرین محمدی</h3>
                            <p>مدیر فنی</p>
                            <div class="member-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="علیرضا حسینی">
                        </div>
                        <div class="member-info">
                            <h3>علیرضا حسینی</h3>
                            <p>مدیر محصول</p>
                            <div class="member-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-image">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="فاطمه کریمی">
                        </div>
                        <div class="member-info">
                            <h3>فاطمه کریمی</h3>
                            <p>مدیر بازاریابی</p>
                            <div class="member-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>درباره ما</h3>
                    <p>سامانه تاک با هدف ایجاد تحول در تجربه کاربری و ارائه راهکارهای نوین در سال ۱۴۰۴ تأسیس شد. ما به کیفیت و رضایت کاربران خود متعهد هستیم.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>لینک‌های مفید</h3>
                    <ul class="footer-links">
                        <li><a href="index.html"><i class="fas fa-chevron-left"></i> صفحه اصلی</a></li>
                        <li><a href="about.html"><i class="fas fa-chevron-left"></i> درباره ما</a></li>
                        <li><a href="services.html"><i class="fas fa-chevron-left"></i> خدمات</a></li>
                        <li><a href="contact.html"><i class="fas fa-chevron-left"></i> تماس با ما</a></li>
                        <li><a href="#"><i class="fas fa-chevron-left"></i> سوالات متداول</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>خدمات ما</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-left"></i> ارتباطات سازمانی</a></li>
                        <li><a href="#"><i class="fas fa-chevron-left"></i> مدیریت جلسات</a></li>
                        <li><a href="#"><i class="fas fa-chevron-left"></i> انجمن‌های تخصصی</a></li>
                        <li><a href="#"><i class="fas fa-chevron-left"></i> آموزش آنلاین</a></li>
                        <li><a href="#"><i class="fas fa-chevron-left"></i> پشتیبانی فنی</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>تماس با ما</h3>
                    <p><i class="fas fa-map-marker-alt"></i> تهران، خیابان آزادی، پلاک ۱۲۳</p>
                    <p><i class="fas fa-phone"></i> ۰۲۱-۱۲۳۴۵۶۷۸</p>
                    <p><i class="fas fa-envelope"></i> info@talk-system.ir</p>
                </div>
            </div>

            <div class="copyright">
                <p>تمامی حقوق برای سامانه تاک محفوظ است © ۱۴۰۴</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const closeBtn = document.querySelector('.close-btn');
        const mobileNav = document.querySelector('.mobile-nav');

        mobileMenuBtn.addEventListener('click', () => {
            mobileNav.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeBtn.addEventListener('click', () => {
            mobileNav.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = document.querySelectorAll('.mobile-nav a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add shadow to header on scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            }
        });

        // Highlight active link in navigation
        const currentPage = window.location.pathname.split('/').pop();
        const navLinks = document.querySelectorAll('.nav-desktop a, .mobile-nav a');

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>