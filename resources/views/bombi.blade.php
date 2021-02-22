<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bombi.css">
    <title>GY</title>
</head>
<body>
    <video autoplay loop muted class="bgvideo" id="bgvideo">
        <source src="666.mp4" type="video/mp4"></source>
       </video>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-menu"></i>
            </div>

            <div>
                <a href="#" class="nav__logo">Gulzhan</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active" "="">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#study" class="nav__link">Study</a></li>
                    <li class="nav__item"><a href="#works" class="nav__link">Works</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contactme</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <div class="home__img">
                        <img src="02.JPG" alt="">
                    </div>
                    <h1 class="home__title">Gulzhan Yelibayeva</h1>
                    <span class="home__student">Student</span>

                    <div class="home__social">
                        <a href="https://www.instagram.com/yelibayevva/" class="home__social-link"><i class="bx bxl-instagram"></i></a>
                        <a href="" class="home__social-link"><i class="bx bxl-facebook-circle"></i></a>
                        <a href="" class="home__social-link"><i class="bx bxl-linkedin"></i></a>
                        <a href="" class="home__social-link"><i class="bx bxl-github"></i></a>
                    </div>
                    <a class="button home__button" href="javascript:(print());">Download Resume</a>
                </div>
            </div>
        </section>
        
        <section class="about section" id="about">
                <span class="section-subtitle">My intro</span>
                <h2 class="section-title">About Me</h2>
                <div class="about__container bd-grid">
                    <div class="about__data">
                        <p class="about_description">
                            Hi, I'm 2nd year student of SDU University. I was born in Qazakhystan and finished school there. And I love music. During my academic years, I took first places at every concert and last place on the Desk. In short I am a man of humor.Thank you.
                        </p>
                        <img src="01.JPG" alt="" class="about__img">
                    </div>

                    <div class="about__information">
                        <h3 class="about__information-title">Information</h3>

                        <div class="about__information-data">
                            <i class="bx bx-phone about__information-icon"></i>
                            <span>+7-700 088 80 88</span>
                        </div>

                        <div class="about__information-data">
                            <i class="bx bx-user about__information-icon"></i>
                            <span>Yelibayeva Gulzhan</span>
                        </div>

                        <div class="about__information-data">
                            <i class="bx bx-envelope about__information-icon"></i>
                            <span>yelibayevva7@gmail.com</span>
                        </div>
                    </div>
                </div>
            
        </section>

        <section class="skills section" id="skills">
            <span class="section-subtitle">what I do in my free time...?</span>


                    <div class="skills__data">
                        <span class="skills__name">I am at home 24/7 </span>
                        <span class="skills__number">90%</span>
                        <span class="skills__bar skills__html"></span>
                    </div>
                    <div class="skills__data">
                        <span class="skills__name">in the social network</span>
                        <span class="skills__number">70%</span>
                        <span class="skills__bar skills__js"></span>
                    </div>
                    <div class="skills__data">
                        <span class="skills__name">meet friends</span>
                        <span class="skills__number">60%</span>
                        <span class="skills__bar skills__java"></span>
                    </div>
                    <div class="skills__data">
                        <span class="skills__name">I play sports and sleep although this is not the case</span>
                        <span class="skills__number">50%</span>
                        <span class="skills__bar skills__sql"></span>
                    </div>
                
            
        </section>

        <section class="education section" id="study">
            <span class="section-subtitle"></span>
            <h2 class="section-title">My Education</h2>

            <div class="education__container bd-grid">
                <div class="education__content">
                    <div>
                        <h3 class="education__year">2008 - 2019</h3>
                        <span class="education__school">School Auezov</span>
                    </div>
                    <div class="education__time">
                        <span class="education__rounder"></span>
                        <span class="education__line"></span>
                    </div>
                    <div>
                        <h3 class="education__race"></h3>
                        <span class="education__university"></span>
                    </div>

                    <div>
                        <h3 class="education__year">2019 - still</h3>
                        <span class="education__school">SDU University</span>
                    </div>
                    <div class="education__time">
                        <span class="education__rounder"></span>
                        <span class="education__line"></span>
                    </div>
                    <div>
                        <h3 class="education__race">Diploma Engineer</h3>
                        <span class="education__specialty">IS</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="works section" id="works">
            <spam class="section-subtitle">My Portfolio</spam>
            <h2 class="section-title">Reccent Works</h2>

            <div class="works__container bd-grid">
                <div class="works__img">
                    <img src="2.jpg" alt="">
                    <div class="works__data">
                        <a href="" class="works__link"><i class="bx bx-link-alt"></i></a>
                        <span class="works__title">Photographer</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="8.jpg" alt="">
                    <div class="works__data">
                        <a href="fam.html" class="works__link"><i class="bx bx-link-alt"></i></a>
                        <span class="works__title">Mobilagrapher</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="4.jpg" alt="">
                    <div class="works__data">
                        <a href="#" class="works__link"><i class="bx bx-link-alt"></i></a>
                        <span class="works__title">просто няня</span>
                    </div>
                </div>

                <div class="works__img">
                    <img src="7.jpg" alt="">
                    <div class="works__data">
                        <a href="#" class="works__link"><i class="bx bx-link-alt"></i></a>
                        <span class="works__title">Work 4</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact section" id="contact">
            <span class="section-subtitle">Contact Me</span>
            <h2 class="section-title">Get In Touch</h2>

            <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <div class="contact__inputs">
                        <input type="text" placeholder="Name" class="contact__input">
                        <input type="text" placeholder="Email" class="contact__input">
                    </div>

                        <input type="text" placeholder="Project" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" placeholder="Message" class="contact__input"></textarea>
                        <input type="submit" value="Send Message" class="button contact__button">
                </form>

                <div>
                    <div class="contact__info">
                        <h3 class="contact__subtitle">Call me</h3>
                        <span class="contact__text">+7-708-666 76 77</span>
                    </div>
                    <div class="contact__info">
                        <h3 class="contact__subtitle">E-mail</h3>
                        <span class="contact__text">yelibayevva7@gmail.com</span>
                        <span class="contact__text">190103301@stu.sdu.edu.kz</span>
                    </div>
                    <div class="contact__info">
                        <h3 class="contact__subtitle">Location</h3>
                        <span class="contact__text">Al-Farabi // 18-7</span>
                        <span class="contact__text">Taraz - Kazakhstan</span>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer section">
            <div class="footer__container bd-grid">
                <h1 class="footer__title">Okey  so you can subscribe to my intagram</h1>
                <p class="footer__desription"> this website is about me.</p>
                <div class="footer__social">
                    <a href="#" class="footer__link"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/yelibayevva/" class="footer__link"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="footer__link"><i class="bx bxl-skype"></i></a>
                </div>
                <p class="footer__copy">All Rights Reserved by Me;)</p>
                <p class="footer__copy">Thanks.</p>
            </div>
        </footer>
    </main>
    <script src="bombi.js"></script>

</body></html>