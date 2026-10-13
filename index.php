<?php
require_once __DIR__ . '/session_config.php';

// Use absolute path for reliable file inclusion
require_once __DIR__ . '/dbstud.php'; 

$schoolName = "Eugenio Cabezas National High School";

// Check if student is logged in
$is_student_logged_in = isset($_SESSION['student']);
$student_data = null;
$student_photo = 'default.png';

if ($is_student_logged_in) {
    $student_data = $_SESSION['student'];
    $student_photo = !empty($student_data['photo']) ? $student_data['photo'] : 'default.png';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $schoolName; ?> Portal</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body>

    <section class="header">
        <nav class="navbar">
            <h1 style="font-size: 14px; font-family: Poppins, sans-serif; color: #fff;">
                <a href="index.php" class="logo"><img src="images/logo.png" alt="Logo">ECNHS</a>
            </h1>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="admission.php">Admission</a></li>
                    <li><a href="announcement.php">Announcement</a></li>
                    <?php if (!$is_student_logged_in): ?>
                    <li><a href="login.php" class="nav-login-button"></i> Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="navbar-right">
                <?php if ($is_student_logged_in): ?>
                <a class="user-icon-link" href="studentside/profile_new.php" title="Open profile" aria-label="Open profile">
                    <i class="fas fa-user"></i>
                </a>
                <?php endif; ?>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1><?php echo $schoolName; ?></h1>
            <p>This high school offers strong academics, supportive teachers, and diverse activities<br>
                to help students grow, succeed, and prepare for the future in a caring and encouraging
                environment.</p>
            <a href="about.php" class="hero-btn">Visit Us to Know More</a>
        </div>
    </section>

    <section class="course">
        <h2>Our Grade Levels</h2>
        <p>Our comprehensive curriculum is designed for students in Junior High School.</p>
        <div class="row">
            <div class="course-col">
                <h3>Grade 7 & 8</h3>
                <p>Our curriculum for Grades 7 and 8 focuses on foundational subjects, critical thinking,
                    and social development to prepare students for the demands of high school.</p>
            </div>
            <div class="course-col">
                <h3>Grade 9</h3>
                <p>Grade 9 coursework deepens understanding across core subjects while introducing more
                    complex concepts and encouraging greater academic independence.</p>
            </div>
            <div class="course-col">
                <h3>Grade 10</h3>
                <p>In Grade 10, students refine their skills and knowledge, with a focus on preparing them
                    for the transition to senior high school and future academic pursuits.</p>
            </div>
        </div>
    </section>

    <section class="campus">
        <h1>Our Campus</h1>
        <p>Another day, another campus adventure.</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/enroll.jpg" alt="Enroll">
                <div class="layer">
                    <h3>ENROLL</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/nutri.jpg" alt="Nutrition">
                <div class="layer">
                    <h3>NUTRITION</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/tutor.jpg" alt="Volunteers">
                <div class="layer">
                    <h3>TUTOR</h3>
                </div>
            </div>
        </div>
    </section>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style-type: none;
            text-decoration: none;
        }

        :root {
            --primary: #ec994b;
            --white: #ffffff;
            --bg: #f5f5f5;
        }

        html {
            font-size: 62.5%;
            font-family: "Montserrat", sans-serif;
            scroll-behavior: smooth;
        }

        @media (min-width: 1440px) {
            html {
                font-size: 70%;
            }
        }

        @media (min-width: 2560px) {
            html {
                font-size: 80%;
            }
        }

        @media (min-width: 3860px) {
            html {
                font-size: 100%;
            }
        }

        ::-webkit-scrollbar {
            width: 1.3rem;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background: #797979;
            transition: all 0.5s ease-in-out;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #222224;
        }

        ::-webkit-scrollbar-track {
            background: #f9f9f9;
        }

        body {
            font-size: 1.6rem;
            background: var(--bg);
        }

        .container {
            max-width: 124rem;
            padding: 0 1rem;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        .section-heading {
            font-size: 3rem;
            color: black;
            padding: 2rem 0;
        }

        .section-subtext {
            font-size: 1.6rem;
            color: #555;
            line-height: 1.8;
            max-width: 90rem;
            margin: 0 auto;
            padding: 0 2rem;
        }

        #tranding {
            padding: 4rem 0;
        }

        @media (max-width: 768px) {
            .text-box {
                width: 95%;
            }

            .text-box h1 {
                font-size: 42px;
            }

            .text-box p {
                font-size: 13px;
                margin: 8px 0 30px;
            }

            .hero-btn {
                padding: 10px 28px;
                font-size: 12px;
            }

            .section-heading {
                font-size: 2.4rem;
                padding: 1.5rem 1rem;
            }

            .section-subtext {
                font-size: 1.4rem;
                padding: 0 1.5rem;
            }

            .container {
                padding: 0 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .text-box h1 {
                font-size: 32px;
            }

            .text-box p {
                font-size: 12px;
                margin: 6px 0 25px;
            }

            .hero-btn {
                padding: 10px 24px;
                font-size: 11px;
            }

            .section-heading {
                font-size: 2rem;
                padding: 1rem;
            }

            .section-subtext {
                font-size: 1.3rem;
                padding: 0 1rem;
            }

            #tranding {
                padding: 2rem 0;
            }
        }

        @media (max-width:1440px) {
            #tranding {
                padding: 7rem 0;
            }
        }

        #tranding .tranding-slider {
            height: 52rem;
            padding: 2rem 0;
            position: relative;
        }

        @media (max-width:500px) {
            #tranding .tranding-slider {
                height: 45rem;
            }
        }

        .tranding-slide {
            width: 37rem;
            height: 42rem;
            position: relative;
            cursor: pointer;
        }

        @media (max-width:500px) {
            .tranding-slide {
                width: 28rem !important;
                height: 36rem !important;
            }

            .tranding-slide .tranding-slide-img img {
                width: 28rem !important;
                height: 36rem !important;
            }
        }

        .tranding-slide .tranding-slide-img img {
            width: 37rem;
            height: 42rem;
            border-radius: 2rem;
            object-fit: cover;
        }

        .tranding-slide .tranding-slide-content {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
        }

        .tranding-slide-content .tranding-slide-content-bottom {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            color: var(--white);
        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
            display: none;
        }

        .tranding-slider-control {
            position: relative;
            bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .tranding-slider-control .swiper-button-prev,
        .tranding-slider-control .swiper-button-next {
            position: static !important;
            left: auto !important;
            right: auto !important;
            top: auto;
            margin-top: 0;
            transform: none !important;
        }

        .tranding-slider-control .swiper-button-prev {
            order: 1;
        }

        .tranding-slider-control .swiper-pagination {
            order: 2;
        }

        .tranding-slider-control .swiper-button-next {
            order: 3;
        }

        .tranding-slider-control .slider-arrow {
            background: var(--white);
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            left: auto;
            transform: none;
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .tranding-slider-control .slider-arrow ion-icon {
            font-size: 2rem;
            color: #222224;
        }

        .tranding-slider-control .slider-arrow::after {
            content: '';
        }

        .tranding-slider-control .swiper-pagination {
            position: relative;
            width: auto;
            bottom: 0;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
            margin: 0 !important;
            opacity: 0.35;
            transition: opacity 0.2s ease, background-color 0.2s ease;
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet:hover,
        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active,
        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet.cycle-active {
            background: var(--primary);
            opacity: 1;
        }

        /* Lightbox styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 5rem;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background: rgba(0, 0, 0, 0.9);
        }

        .lightbox-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 80vh;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        }

        #lightbox-caption {
            margin: 1rem auto;
            text-align: center;
            color: #fff;
            font-size: 1.6rem;
        }

        .close-lightbox {
            position: absolute;
            top: 1rem;
            right: 2rem;
            color: #fff;
            font-size: 3rem;
            font-weight: bold;
            cursor: pointer;
        }
    </style>

    <section id="tranding">
        <div class="container text-center">
            <h1 class="section-heading">Our Facilities</h1>
            <p class="section-subtext">
                Take a virtual tour of our campus and explore the facilities that make learning more exciting and
                meaningful.
            </p>
        </div>
        <div class="trading-container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/gate.jpg" alt="Gate">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">School Gate</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/school.png" alt="School">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Campus</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/faculty.jpg" alt="Faculty">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Faculty Office</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/court.jpg" alt="Court">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Basketball Court</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/ictlab.jpg" alt="Lab">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">ICT Laboratory</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/library.jpg" alt="Library">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Library</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/room.jpg" alt="Room">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Room</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/garden1.jpg" alt="Garden">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Garden</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/garden3.jpg" alt="Another Garden">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Another Garden</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/garden2.jpg" alt="Shade Net Greenhouse">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Shade Net Greenhouse</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/fishpond.jpg" alt="Fish Pond">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Fish Pond</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/poultry.jpg" alt="Poultry">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Poultry</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="images/ecnhslove.jpg" alt="ecnhslove">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">I❤️ECNHS</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img id="lightbox-img" src="" alt="Preview">
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
        // Swiper init
        const fixedDotCount = 4;
        const swiper = new Swiper(".tranding-slider", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function(index, className) {
                    if (index >= fixedDotCount) {
                        return "";
                    }
                    return '<span class="' + className + '"></span>';
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        if (swiper.pagination && swiper.pagination.bullets) {
            const bullets = Array.from(swiper.pagination.bullets);
            const visibleCount = Math.min(fixedDotCount, bullets.length);

            const updateDots = () => {
                if (visibleCount === 0) {
                    return;
                }

                const activeDot = swiper.realIndex % visibleCount;
                bullets.forEach((bullet, index) => {
                    bullet.classList.toggle("cycle-active", index === activeDot);
                });
            };

            updateDots();
            swiper.on("slideChange", updateDots);
        }

        // Lightbox functionality
        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.getElementById("lightbox-img");
        const closeBtn = document.querySelector(".lightbox-close");

        document.querySelectorAll(".tranding-slide-img img").forEach(img => {
            img.addEventListener("click", () => {
                lightbox.style.display = "block";
                lightboxImg.src = img.src;
            });
        });

        closeBtn.onclick = () => {
            lightbox.style.display = "none";
        };

        window.onclick = (e) => {
            if (e.target === lightbox) {
                lightbox.style.display = "none";
            }
        };
    </script>

    <section class="cta">
        <h1>Enroll in our school to access quality education,<br>supportive teachers, and a community that helps you
            grow and succeed.</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>
    </section>

    <?php include __DIR__ . '/includes/site-footer.php'; ?>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script>
        var navLinks = document.getElementById("navLinks");
        
        function showMenu() {
            navLinks.classList.add('nav-active');
            document.body.style.overflow = 'hidden';
            
            // Create and show backdrop
            if (!document.querySelector('.nav-backdrop')) {
                const backdrop = document.createElement('div');
                backdrop.className = 'nav-backdrop';
                backdrop.onclick = hideMenu;
                document.body.appendChild(backdrop);
                setTimeout(() => backdrop.classList.add('show'), 10);
            }
        }
        
        function hideMenu() {
            navLinks.classList.remove('nav-active');
            document.body.style.overflow = 'auto';
            
            // Remove backdrop
            const backdrop = document.querySelector('.nav-backdrop');
            if (backdrop) {
                backdrop.classList.remove('show');
                setTimeout(() => backdrop.remove(), 400);
            }
        }
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links ul li a').forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 900) {
                    hideMenu();
                }
            });
        });
        
        // Close mobile menu when clicking outside (handled by backdrop now)
        // Prevent hamburger icon from being affected by other clicks
        document.querySelector('.navbar > .fa-bars')?.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 900) {
                navLinks.classList.remove('nav-active');
                document.body.style.overflow = 'auto';
                const backdrop = document.querySelector('.nav-backdrop');
                if (backdrop) backdrop.remove();
            }
        });
    </script>
    
    <style>
        /* Navbar Right Container */
        .navbar-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-icon-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 22px;
            line-height: 1;
            text-decoration: none;
            transition: color 0.2s ease, transform 0.2s ease;
        }

        .user-icon-link:hover {
            color: #e8ae30;
            transform: scale(1.08);
        }

        /* Responsive */
        @media (max-width: 900px) {
            .navbar-right {
                gap: 8px;
                margin-right: 45px;
            }
        }
        
        @media (max-width: 768px) {
            .navbar-right {
                gap: 8px;
                margin-right: 40px;
            }

            .user-icon-link {
                font-size: 15px;
            }

        }

        @media (max-width: 700px) {
            .navbar-right {
                margin-right: 40px;
            }
        }
        
        /* iPhone 12 Pro, iPhone XR, and similar devices */
        @media (max-width: 430px) {
            .navbar-right {
                margin-right: 38px;
            }
            
            .user-icon-link {
                font-size: 14px;
            }

        }

        /* iPhone SE and smaller devices */
        @media (max-width: 375px) {
            .navbar-right {
                margin-right: 35px;
            }
            
        }
    </style>
</body>
</html>