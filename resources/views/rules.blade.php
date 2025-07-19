<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قوانین و مقررات | سامانه تاک</title>
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

        /* استایل‌های خاص صفحه قوانین */
        .rules-hero {
            padding: 180px 0 80px;
            background: linear-gradient(135deg, #e0e7ff 0%, #d1e0fd 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .rules-hero::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(143, 148, 251, 0.15) 0%, rgba(78, 84, 200, 0.15) 100%);
        }

        .rules-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
        }

        .rules-hero h1::after {
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

        .rules-hero p {
            font-size: 1.2rem;
            color: var(--gray-color);
            max-width: 800px;
            margin: 0 auto;
        }

        .rules-content {
            padding: 80px 0;
            background: white;
        }

        .rules-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .rules-section {
            margin-bottom: 50px;
        }

        .rules-section:last-child {
            margin-bottom: 0;
        }

        .rules-section h2 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f4ff;
            position: relative;
        }

        .rules-section h2::after {
            content: '';
            position: absolute;
            bottom: -2px;
            right: 0;
            width: 100px;
            height: 2px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }

        .rules-list {
            list-style-type: none;
            counter-reset: rules-counter;
        }

        .rules-list li {
            margin-bottom: 20px;
            padding-right: 30px;
            position: relative;
            line-height: 1.8;
        }

        .rules-list li::before {
            counter-increment: rules-counter;
            content: counter(rules-counter);
            position: absolute;
            right: 0;
            top: 0;
            width: 25px;
            height: 25px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .rules-note {
            background: #f8f9fa;
            border-right: 4px solid var(--accent-color);
            padding: 20px;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            margin: 30px 0;
        }

        .rules-note p {
            margin-bottom: 0;
            color: var(--dark-color);
            font-weight: 500;
        }

        .rules-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            box-shadow: var(--shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .rules-table th {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 15px;
            text-align: right;
        }

        .rules-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        .rules-table tr:last-child td {
            border-bottom: none;
        }

        .rules-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .rules-table tr:hover {
            background-color: #f0f4ff;
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

            .rules-hero h1 {
                font-size: 2rem;
            }

            .rules-section h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .rules-hero {
                padding: 150px 0 60px;
            }

            .rules-hero h1 {
                font-size: 1.8rem;
            }

            .rules-hero p {
                font-size: 1rem;
            }

            .rules-list li {
                padding-right: 40px;
            }

            .rules-table {
                display: block;
                overflow-x: auto;
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
                    <li><a href="rules.html" class="active">قوانین</a></li>
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
            <li><a href="about.html">درباره ما</a></li>
            <li><a href="rules.html" class="active">قوانین</a></li>
            <li><a href="contact.html">تماس با ما</a></li>
            <li><a href="{{ route('login') }}" class="cta-button">ورود به سامانه</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="rules-hero">
        <div class="container">
            <h1>قوانین و مقررات سامانه تاک</h1>
            <p>لطفاً قبل از استفاده از سامانه، قوانین و شرایط استفاده را به دقت مطالعه نمایید</p>
        </div>
    </section>

    <!-- Rules Content -->
    <section class="rules-content">
        <div class="container rules-container">
            <div class="rules-section">
                <h2>قوانین عمومی</h2>
                <ul class="rules-list">
                    <li>کاربران موظفند اطلاعات صحیح و کامل در هنگام ثبت‌نام ارائه دهند. ارائه اطلاعات نادرست می‌تواند منجر به مسدود شدن حساب کاربری شود.</li>
                    <li>هر کاربر مسئول حفظ محرمانه بودن اطلاعات حساب کاربری خود می‌باشد و در صورت هرگونه استفاده غیرمجاز، باید بلافاصله به پشتیبانی سامانه اطلاع دهد.</li>
                    <li>استفاده از سامانه برای فعالیت‌های غیرقانونی یا خلاف مقررات جمهوری اسلامی ایران ممنوع است.</li>
                    <li>کاربران نباید محتوایی که شامل موارد توهین‌آمیز، تبعیض‌آمیز یا مغایر با عرف و شئونات اسلامی است را منتشر کنند.</li>
                    <li>هرگونه تلاش برای هک یا نفوذ به سامانه پیگرد قانونی دارد.</li>
                </ul>

                <div class="rules-note">
                    <p><i class="fas fa-exclamation-circle"></i> توجه: عدم رعایت قوانین می‌تواند منجر به مسدود شدن حساب کاربری و پیگرد قانونی شود.</p>
                </div>
            </div>

            <div class="rules-section">
                <h2>مقررات محتوا</h2>
                <ul class="rules-list">
                    <li>کاربران حق انتشار محتوای دارای حق نشر (کپی رایت) بدون اجازه صاحب اثر را ندارند.</li>
                    <li>محتوای تبلیغاتی فقط در بخش‌های مشخص‌شده مجاز است و هرگونه تبلیغ در بخش‌های دیگر حذف خواهد شد.</li>
                    <li>انتشار محتوای غیراخلاقی، سیاسی و مغایر با قوانین ج.ا.ایران ممنوع است.</li>
                    <li>مسئولیت محتوای منتشرشده توسط کاربران بر عهده خود آن‌هاست و سامانه تاک هیچ مسئولیتی در این زمینه ندارد.</li>
                    <li>مدیران سامانه حق حذف یا ویرایش محتوای مغایر با مقررات را بدون اطلاع قبلی دارند.</li>
                </ul>
            </div>

            <div class="rules-section">
                <h2>حریم خصوصی</h2>
                <ul class="rules-list">
                    <li>سامانه تاک متعهد به حفظ حریم خصوصی کاربران است و اطلاعات شخصی آن‌ها را در اختیار اشخاص ثالث قرار نمی‌دهد.</li>
                    <li>در مواردی که به حکم قانون یا مراجع قضایی نیاز به ارائه اطلاعات باشد، سامانه موظف به همکاری است.</li>
                    <li>اطلاعات کاربران در سرورهای امن ذخیره می‌شود، اما سامانه در صورت بروز حملات سایبری پیشرفته مسئولیتی ندارد.</li>
                    <li>کاربران می‌توانند درخواست حذف اطلاعات شخصی خود را از طریق بخش پشتیبانی ارسال نمایند.</li>
                </ul>
            </div>

            <div class="rules-section">
                <h2>محدودیت‌های مسئولیت</h2>
                <ul class="rules-list">
                    <li>سامانه تاک هیچ گونه تضمینی در مورد صحت و دقت اطلاعات ارائه شده توسط کاربران نمی‌دهد.</li>
                    <li>سامانه مسئولیتی در قبال خسارات مستقیم یا غیرمستقیم ناشی از استفاده یا عدم امکان استفاده از خدمات ندارد.</li>
                    <li>در صورت بروز اختلال در سامانه به دلیل عوامل خارج از کنترل (مانند قطعی اینترنت، بلایای طبیعی و ...) سامانه مسئولیتی نخواهد داشت.</li>
                    <li>سامانه این حق را برای خود محفوظ می‌دارد که بدون اطلاع قبلی، تغییراتی در خدمات و شرایط استفاده ایجاد نماید.</li>
                </ul>
            </div>

            <div class="rules-section">
                <h2>جریمه‌های تخلف</h2>
                <table class="rules-table">
                    <thead>
                        <tr>
                            <th>نوع تخلف</th>
                            <th>اقدام اول</th>
                            <th>اقدامات تکراری</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>انتشار محتوای نامناسب</td>
                            <td>اخطار کتبی و حذف محتوا</td>
                            <td>مسدودیت موقت 1 تا 7 روزه</td>
                        </tr>
                        <tr>
                            <td>ارسال اسپم</td>
                            <td>اخطار کتبی</td>
                            <td>مسدودیت دائم</td>
                        </tr>
                        <tr>
                            <td>توهین به کاربران دیگر</td>
                            <td>اخطار کتبی و حذف محتوا</td>
                            <td>مسدودیت 30 روزه یا دائم</td>
                        </tr>
                        <tr>
                            <td>تلاش برای نفوذ به سامانه</td>
                            <td>مسدودیت دائم</td>
                            <td>پیگرد قانونی</td>
                        </tr>
                        <tr>
                            <td>استفاده از حساب دیگران</td>
                            <td>مسدودیت موقت 7 روزه</td>
                            <td>مسدودیت دائم</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="rules-section">
                <h2>قوانین اختصاصی سازمان‌ها</h2>
                <ul class="rules-list">
                    <li>سازمان‌های عضو موظفند نماینده رسمی خود را جهت مدیریت حساب سازمان معرفی نمایند.</li>
                    <li>هر سازمان مسئول مدیریت دسترسی‌های کارکنان خود در سامانه می‌باشد.</li>
                    <li>در صورت تغییر نماینده سازمان، باید بلافاصله به پشتیبانی سامانه اطلاع داده شود.</li>
                    <li>سازمان‌ها می‌توانند قوانین داخلی خود را در چارچوب مقررات سامانه اعمال نمایند.</li>
                </ul>

                <div class="rules-note">
                    <p><i class="fas fa-info-circle"></i> سازمان‌ها می‌توانند برای تنظیم قوانین اختصاصی خود با پشتیبانی سامانه تماس بگیرند.</p>
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
                        <li><a href="rules.html"><i class="fas fa-chevron-left"></i> قوانین</a></li>
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