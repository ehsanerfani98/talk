<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما | سامانه تاک</title>
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

        /* استایل‌های خاص صفحه تماس با ما */
        .contact-hero {
            padding: 180px 0 80px;
            background: linear-gradient(135deg, #e0e7ff 0%, #d1e0fd 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(143, 148, 251, 0.15) 0%, rgba(78, 84, 200, 0.15) 100%);
        }

        .contact-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
        }

        .contact-hero h1::after {
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

        .contact-hero p {
            font-size: 1.2rem;
            color: var(--gray-color);
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-content {
            padding: 80px 0;
            background: white;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-info {
            background: linear-gradient(135deg, #f8f9fa 0%, #edf2ff 100%);
            border-radius: var(--border-radius);
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .contact-info h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
        }

        .contact-info h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }

        .contact-details {
            margin-top: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-left: 15px;
            flex-shrink: 0;
        }

        .contact-text h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .contact-text p, .contact-text a {
            color: var(--gray-color);
            line-height: 1.8;
        }

        .contact-text a:hover {
            color: var(--primary-color);
        }

        .contact-form {
            background: white;
            border-radius: var(--border-radius);
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .contact-form h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
        }

        .contact-form h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(102, 75, 255, 0.1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(78, 84, 200, 0.3);
            width: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(78, 84, 200, 0.4);
        }

        .contact-map {
            margin-top: 60px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 400px;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: none;
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
        @media (max-width: 768px) {
            .nav-desktop {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .contact-hero h1 {
                font-size: 2rem;
            }

            .contact-container {
                grid-template-columns: 1fr;
            }

            .contact-info, .contact-form {
                padding: 30px;
            }
        }

        @media (max-width: 576px) {
            .contact-hero {
                padding: 150px 0 60px;
            }

            .contact-hero h1 {
                font-size: 1.8rem;
            }

            .contact-hero p {
                font-size: 1rem;
            }

            .contact-item {
                flex-direction: column;
            }

            .contact-icon {
                margin-left: 0;
                margin-bottom: 15px;
            }

            .contact-map {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container header-container">
            <a href="index.html" class="logo">
                <i class="fas fa-rocket"></i>
                سامانه تاک (تالار ارتباطی کشور وابسته به سازمان متخصصین و مدیران ایران)
            </a>

            <nav class="desktop-nav">
                <ul class="nav-desktop">
                    <li><a href="index.html">صفحه اصلی</a></li>
                    <li><a href="about.html">درباره ما</a></li>
                    <li><a href="faq.html">سوالات متداول</a></li>
                    <li><a href="contact.html" class="active">تماس با ما</a></li>
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
            <li><a href="about.html">درباره ما</a></li>
            <li><a href="faq.html">سوالات متداول</a></li>
            <li><a href="contact.html" class="active">تماس با ما</a></li>
            <li><a href="{{ route('login') }}" class="cta-button">ورود به سامانه</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>تماس با ما</h1>
            <p>ما آماده پاسخگویی به سوالات و دریافت پیشنهادات شما هستیم. از طریق راه‌های ارتباطی زیر با ما در تماس باشید.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>اطلاعات تماس</h2>
                    <p>برای ارتباط با ما می‌توانید از راه‌های زیر استفاده کنید. کارشناسان ما در کمترین زمان ممکن پاسخگوی شما خواهند بود.</p>

                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>آدرس دفتر مرکزی</h3>
                                <p>تهران، خیابان آزادی، نبش خیابان جمالزاده، پلاک ۱۲۳، طبقه ۴</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h3>تلفن‌های تماس</h3>
                                <p><a href="tel:+982112345678">۰۲۱-۱۲۳۴۵۶۷۸</a></p>
                                <p><a href="tel:+989121234567">۰۹۱۲-۱۲۳۴۵۶۷</a> (پشتیبانی فنی)</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>پست الکترونیک</h3>
                                <p><a href="mailto:info@talk-system.ir">info@talk-system.ir</a></p>
                                <p><a href="mailto:support@talk-system.ir">support@talk-system.ir</a> (پشتیبانی)</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h3>ساعات کاری</h3>
                                <p>شنبه تا چهارشنبه: ۸:۰۰ تا ۱۶:۰۰</p>
                                <p>پنجشنبه: ۸:۰۰ تا ۱۳:۰۰</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h2>فرم تماس با ما</h2>
                    <p>برای ارسال پیام، لطفاً فرم زیر را تکمیل کنید. در اولین فرصت پاسخگوی شما خواهیم بود.</p>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">نام کامل</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">پست الکترونیک</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">شماره تماس</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">موضوع</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="">-- انتخاب موضوع --</option>
                                <option value="پشتیبانی فنی">پشتیبانی فنی</option>
                                <option value="پیشنهادات">پیشنهادات</option>
                                <option value="انتقادات">انتقادات</option>
                                <option value="همکاری">درخواست همکاری</option>
                                <option value="سایر">سایر</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">متن پیام</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">ارسال پیام</button>
                    </form>
                </div>
            </div>

            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.676096248003!2d51.38926631527099!3d35.69975598018783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQxJzU5LjEiTiA1McKwMjMnMjYuNiJF!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
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
                        <li><a href="faq.html"><i class="fas fa-chevron-left"></i> سوالات متداول</a></li>
                        <li><a href="contact.html"><i class="fas fa-chevron-left"></i> تماس با ما</a></li>
                        <li><a href="rules.html"><i class="fas fa-chevron-left"></i> قوانین و مقررات</a></li>
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

        // Highlight active link in navigation
        const currentPage = window.location.pathname.split('/').pop();
        const navLinks = document.querySelectorAll('.nav-desktop a, .mobile-nav a');

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
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

        // Form Submission
        const contactForm = document.querySelector('.contact-form form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Here you would normally send the form data to the server
                // For demo purposes, we'll just show an alert
                alert('پیام شما با موفقیت ارسال شد. در اولین فرصت پاسخگوی شما خواهیم بود.');
                this.reset();
            });
        }
    </script>
</body>
</html>