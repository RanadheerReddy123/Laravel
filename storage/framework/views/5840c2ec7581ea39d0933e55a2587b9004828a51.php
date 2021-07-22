<!DOCTYPE html>
<html lang="en">
<head>
    <!--Important meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--Website Title-->
    <title>Tricube-Web Developers</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon/Icon2.jpg')); ?>">
    <!--Custom Bootstrap CSS-->
    <link rel='stylesheet' href="<?php echo e(asset('assets/css/bootstrap_css/bootstrap.css')); ?>">
    <!--Google fonts-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap'>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!--jQuery Custom-->
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <!--Fontawesome Icons-->
    <link rel='stylesheet' href="<?php echo e(asset('assets/css/fontawesome_css/all.min.css')); ?>">
    <script src="<?php echo e(asset('assets/js/fontawesome_js/all.min.js')); ?>"></script>
    <!--Owl-Carousel-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl-carousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl-carousel/owl.theme.default.min.css')); ?>">
    <!--Responsive tabs-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive-tabs/responsive-tabs.css')); ?>">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup/magnific-popup.css')); ?>">
    <!--CSS Custom-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/mystyle.css')); ?>">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="75">
    <!--Preloader-->
    <div id="preloader">
        <div id="preloader_status"></div>
    </div>
    <!--Preloader Ends-->
    <!--header-->
    <header>
        <nav class="navbar navbar-expand-md fixed-top white-nav-top">
            <!--Logo-->
            <a class="navbar-brand smooth-scroll" href="#home">
                <img src="<?php echo e(asset('assets/images/favicon/Icon2.jpg')); ?>" alt='Logo'>
            </a>
            <!--
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="#portfolio">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="#contact">Contact</a>
                    </li>
<!--
                    <li class="nav-item">
                        <a class="nav-link  smooth-scroll" href="logout.php">Logout</a>
                    </li>
-->
                </ul>
            </div>
        </nav>
    </header>
    <!--Header Ends-->
    <!--Home-->
    <section id="home">
        <!--Background video-->
        <video id='home-bg-video' poster="<?php echo e(asset('assets/images/home-poster/poster.jpg')); ?>" autoplay muted loop>
            <source src="<?php echo e(asset('assets/videos/home-video.mp4')); ?>" type='video/mp4'>
            <source src="<?php echo e(asset('assets/videos/home-video.ogv')); ?>" type='video/ogv'>
            <source src="<?php echo e(asset('assets/videos/home-video.webm')); ?>" type='video/webm'>
        </video>
        <!--Overlay-->
        <div id="home-overlay">

        </div>
        <!--Home Content-->
        <div id="home-content">
            <div id="home-content-inner" class='text-center'>
                <div id="home-heading">
                    <h1 id="home-heading-1">Tricube</h1>
                    <h1 id="home-heading-2"><span>Creative</span> Web Developers</h1>
                </div>
                <div id="home-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum.</p>
                </div>
                <div id="home-btn">
                    <a class='btn btn-general btn-home smooth-scroll' role='button' title='start now' href='#about'>Start Now</a>
                </div>
            </div>
        </div>
        <!--Arrow Down-->
        <a href='#about' id='arrow-down' class='smooth-scroll'>
            <i class='fas fa-angle-down'></i>
        </a>
    </section>
    <!--Home Ends-->
    <!--About-->
    <section id="about">
        <!--About 01-->
        <div id="about-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <!--About Left-->
                        <div class="col-md-6">
                            <div id="about-left">
                                <div class="vertical-heading">
                                    <h5>Who we are</h5>
                                    <h2><strong>A Story</strong><br> About Us</h2>
                                </div>
                            </div>
                        </div>
                        <!--About Right-->
                        <div class="col-md-6">
                            <div id="about-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam, quaerat aspernatur repellat veniam repudiandae, assumenda a! Error veritatis, accusantium assumenda? Reprehenderit repellendus repudiandae odit voluptates laudantium similique placeat, est.</p>
                            </div>
                        </div>
                    </div>
                    <!--About Bottom-->
                    <div class="row">
                        <div class="col-md-12">
                            <div id="about-bottom">
                                <img src="<?php echo e(asset('assets/images/about/about-us.png')); ?>" class='img-fluid' alt='About Us'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About 01 ends-->
        <!--About 02-->
        <div id="about-02">
            <div class="content-box-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span><i class="fas fa-rocket"></i></i></span>
                                <h3>Mission</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ratione, voluptatibus odit est eos itaque doloremque eligendi praesentium mollitia minima non quia, accusantium dolore. Nihil incidunt perferendis atque recusandae quaerat.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span><i class="fas fa-eye"></i></span>
                                <h3>Vision</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ratione, voluptatibus odit est eos itaque doloremque eligendi praesentium mollitia minima non quia, accusantium dolore. Nihil incidunt perferendis atque recusandae quaerat.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <span><i class='fas fa-dot-circle'></i></span>
                                <h3>Passion</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ratione, voluptatibus odit est eos itaque doloremque eligendi praesentium mollitia minima non quia, accusantium dolore. Nihil incidunt perferendis atque recusandae quaerat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About 02 ends-->
    </section>
    <!--About ends-->
    <!--Team-->
    <section id="team">
        <div id="team">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <!--Team Left-->
                        <div class="col-md-6">
                            <div id="team-left">
                                <div class="vertical-heading">
                                    <h5>Who we are</h5>
                                    <h2>Meet Our <br> <strong>Talented</strong> Team</h2>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis excepturi magni officia, cumque, expedita esse soluta optio impedit voluptates dolore ratione eveniet corporis ad. Voluptatibus debitis doloribus odit aliquam asperiores.</p>
                            </div>
                        </div>
                        <!--Team Right-->
                        <div class="col-md-6">
                            <div id="team-right" class="owl-carousel owl-theme">
                                <!--Member 01-->
                                <div class="team-member">
                                    <img src="<?php echo e(asset('assets/images/team/member1.jpg')); ?>" alt="Team Member" class='img-fluid'>
                                    <div class="team-member-overlay">
                                        <div class="team-member-info text-center">
                                            <h6>Krishna Kanth</h6>
                                            <p>Web Developer</p>
                                            <ul class="social-list">
                                                <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Member 02-->
                                <div class="team-member">
                                    <img src="<?php echo e(asset('assets/images/team/member2.jpg')); ?>" alt="Team Member" class='img-fluid'>
                                    <div class="team-member-overlay">
                                        <div class="team-member-info text-center">
                                            <h6>Azeem Prem</h6>
                                            <p>Java Developer</p>
                                            <ul class="social-list">
                                                <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Member 03-->
                                <div class="team-member">
                                    <img src="<?php echo e(asset('assets/images/team/member3.jpg')); ?>" alt="Team Member" class='img-fluid'>
                                    <div class="team-member-overlay">
                                        <div class="team-member-info text-center">
                                            <h6>Prem Rathan</h6>
                                            <p>Team Developer</p>
                                            <ul class="social-list">
                                                <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Member 04-->
                                <div class="team-member">
                                    <img src="<?php echo e(asset('assets/images/team/member4.jpg')); ?>" alt="Team Member" class='img-fluid'>
                                    <div class="team-member-overlay">
                                        <div class="team-member-info text-center">
                                            <h6>George</h6>
                                            <p>JS Developer</p>
                                            <ul class="social-list">
                                                <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Member 05-->
                                <div class="team-member">
                                    <img src="<?php echo e(asset('assets/images/team/member5.jpg')); ?>" alt="Team Member" class='img-fluid'>
                                    <div class="team-member-overlay">
                                        <div class="team-member-info text-center">
                                            <h6>Kranthi Kiran</h6>
                                            <p>JQuery Developer</p>
                                            <ul class="social-list">
                                                <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Member 06-->
                                <div class="team-member">
                                    <img src="<?php echo e(asset('assets/images/team/member6.jpg')); ?>" alt="Team Member" class='img-fluid'>
                                    <div class="team-member-overlay">
                                        <div class="team-member-info text-center">
                                            <h6>Tata</h6>
                                            <p>Web Developer</p>
                                            <ul class="social-list">
                                                <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Progress Elements-->
        <div id="progress-elements">
            <div class="row">
                <div class="col-md-6">
                    <!--skill 01-->
                    <div class='skill'>
                        <h4>Web Design</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!--skill 02-->
                    <div class='skill'>
                        <h4>Logo Design</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!--skill 03-->
                    <div class='skill'>
                        <h4>Web Development</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>85%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!--skill 04-->
                    <div class='skill'>
                        <h4>Digital Marketing</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team ends-->
    <!--Statement-->
    <section id="statement">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="tech-statement" class="text-center">
                            <div id="quote-box">
                                <h3><i class="fas fa-quote-left"></i>We design and develop stylish,modern responsive websites.<i class="fas fa-quote-right"></i></h3>
                                <p>- Ranadheer Reddy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Statement Ends-->
    <!--Services-->
    <section id="services">
        <!--Services 01-->
        <div id="services-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="horizontal-heading text-center">
                                <h5>What we do</h5>
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <img src="<?php echo e(asset('assets/images/services/services-01.jpg')); ?>" alt="Services" class='img-fluid'>
                        </div>
                        <div class="col-md-5">
                            <!--Services01-->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-right">
                                            <i class="fas fa-paint-brush"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Services 01</h5>
                                        <h4>Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis laborum, iste totam. Culpa molestias laboriosam architecto corrupti est, dolore ipsum porro a cupiditate veritatis iste provident! Quaerat quae deserunt, commodi.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services02-->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-right">
                                            <i class="fas fa-bullhorn"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Services 02</h5>
                                        <h4>Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis laborum, iste totam. Culpa molestias laboriosam architecto corrupti est, dolore ipsum porro a cupiditate veritatis iste provident! Quaerat quae deserunt, commodi.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services03-->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="icon text-right">
                                            <i class="fas fa-apple-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5>Services 03</h5>
                                        <h4>Digital Marketing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis laborum, iste totam. Culpa molestias laboriosam architecto corrupti est, dolore ipsum porro a cupiditate veritatis iste provident! Quaerat quae deserunt, commodi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Services 01 Ends-->
        <!--Services 02-->
        <div id="services-02">
            <div class="content-box-md">
                <div id="service-tabs">
                    <ul class='text-center'>
                        <li><a href='#services-tab-1'>Creativity</a></li>
                        <li><a href='#services-tab-2'>Strategy</a></li>
                        <li><a href='#services-tab-3'>Design</a></li>
                        <li><a href='#services-tab-4'>Development</a></li>
                    </ul>
                    <!--Services tab 01-->
                    <div id="services-tab-1" class="services-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo e(asset('assets/images/services/service-tab-image-01.jpg')); ?>" alt="Services" class='img-fluid'>
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>01</h2>
                                        <h3>Get more from life with Creativity</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint sed, adipisci nemo laboriosam blanditiis minima aperiam numquam tempora explicabo ipsa non excepturi perspiciatis incidunt recusandae eligendi sapiente, maiores aliquam!</p>
                                        <div id="service-btn">
                                            <a class='btn btn-general btn-yellow' role='button' href="#about">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services tab 02-->
                    <div id="services-tab-2" class="services-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo e(asset('assets/images/services/service-tab-image-02.jpg')); ?>" alt="Services" class='img-fluid'>
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>02</h2>
                                        <h3>Get more from life with Creativity</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint sed, adipisci nemo laboriosam blanditiis minima aperiam numquam tempora explicabo ipsa non excepturi perspiciatis incidunt recusandae eligendi sapiente, maiores aliquam!</p>
                                        <div id="service-btn">
                                            <a class='btn btn-general btn-yellow' role='button' href="#about">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services tab 03-->
                    <div id="services-tab-3" class="services-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo e(asset('assets/images/services/service-tab-image-03.jpg')); ?>" alt="Services" class='img-fluid'>
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>03</h2>
                                        <h3>Get more from life with Creativity</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint sed, adipisci nemo laboriosam blanditiis minima aperiam numquam tempora explicabo ipsa non excepturi perspiciatis incidunt recusandae eligendi sapiente, maiores aliquam!</p>
                                        <div id="service-btn">
                                            <a class='btn btn-general btn-yellow' role='button' href="#about">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services tab 04-->
                    <div id="services-tab-4" class="services-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo e(asset('assets/images/services/service-tab-image-04.jpg')); ?>" alt="Services" class='img-fluid'>
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>04</h2>
                                        <h3>Get more from life with Creativity</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio sint sed, adipisci nemo laboriosam blanditiis minima aperiam numquam tempora explicabo ipsa non excepturi perspiciatis incidunt recusandae eligendi sapiente, maiores aliquam!</p>
                                        <div id="service-btn">
                                            <a class='btn btn-general btn-yellow' role='button' href="#about">Get In Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Ends-->
    <!-- Work -->
    <section id="portfolio">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vertical-heading">
                            <h5>Find Our Work</h5>
                            <h2>Our<br><strong>Amazing</strong> Work</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="portfolio-buttons">
                            <div class="button-group filter-button-group">
                                <button class='btn active' data-filter="*">All</button>
                                <button class='btn' data-filter=".web">Web</button>
                                <button class='btn' data-filter=".logo">Logo</button>
                                <button class='btn' data-filter=".mobile">Mobile</button>
                                <button class='btn' data-filter=".desktop">Desktop</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio Items Wrapper-->
    <section id="portfolio-items-wrapper">
        <div class="container-fluid">
            <div class="row grid">
                <!--Portfolio Items-1-->
                <div class="col-md-3 portfolio-item logo web">
                    <a href="<?php echo e(asset('assets/images/work/work-01.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-01.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Logo</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>Logo,Photography</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Portfolio Items-2-->
                <div class="col-md-3 portfolio-item mobile desktop">
                    <a href="<?php echo e(asset('assets/images/work/work-02.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-02.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Web Design</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>Web,Photography</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Portfolio Items-3-->
                <div class="col-md-3 portfolio-item logo desktop">
                    <a href="<?php echo e(asset('assets/images/work/work-03.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-03.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Web Development</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>Web,Devops</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Portfolio Items-4-->
                <div class="col-md-3 portfolio-item mobile web">
                    <a href="<?php echo e(asset('assets/images/work/work-04.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-04.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Digital Marketing</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>SAP,Photography</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Portfolio Items-5-->
                <div class="col-md-3 portfolio-item web desktop mobile">
                    <a href="<?php echo e(asset('assets/images/work/work-05.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-05.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Web Development</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>Web,Devops</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Portfolio Items-6-->
                <div class="col-md-3 portfolio-item desktop">
                    <a href="<?php echo e(asset('assets/images/work/work-06.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-06.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Digital Marketing</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>SAP,Photography</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Portfolio Items-7-->
                <div class="col-md-3 portfolio-item web">
                    <a href="<?php echo e(asset('assets/images/work/work-07.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-07.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Web Design</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>Web,Photography</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Portfolio Items-8-->
                <div class="col-md-3 portfolio-item logo web">
                    <a href="<?php echo e(asset('assets/images/work/work-08.jpg')); ?>">
                        <img src="<?php echo e(asset('assets/images/work/work-08.jpg')); ?>" alt='Portfolio-Item' class='img-fluid'>
                        <div class="portfolio-item-overlay">
                            <div class="portfolio-item-details">
                                <!--Item Header-->
                                <h3>Logo Design</h3>
                                <!--Item Strips-->
                                <span></span>
                                <!--Item Description-->
                                <p>Logo,Photography</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Work Ends-->
    <!-- Testimonials -->
    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="vertical-heading">
                        <h5>Who we are</h5>
                        <h2>What Our<br><strong>Customers </strong>say</h2>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="testimonial-slider" class='owl-carousel owl-theme'>
                        <!-- Testimonials 01-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="stars text-right">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet iure, velit vitae repellendus aperiam at tempora, placeat, quis mollitia aut beatae ea ratione nostrum expedita tempore reprehenderit et nesciunt repellat!</p>
                            <div class="row author">
                                <div class="col-md-2">
                                    <img src="<?php echo e(asset('assets/images/testimonials/client-01.jpg')); ?>" alt='Customer' class='img-fluid rounded-circle'>
                                </div>
                                <div class="col-md-10">
                                    <div class="author-details">
                                        <p>Full Name</p>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonials 02-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="stars text-right">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque quos, in dicta ea assumenda esse molestias dolores ad aperiam sit illum architecto modi fuga. Vel minima earum corporis provident!</p>
                            <div class="row author">
                                <div class="col-md-2">
                                    <img src="<?php echo e(asset('assets/images/testimonials/client-02.jpg')); ?>" alt='Customer' class='img-fluid rounded-circle'>
                                </div>
                                <div class="col-md-10">
                                    <div class="author-details">
                                        <p>Full Name</p>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonials 03-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6">
                                    <div class="stars text-right">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam ut impedit in odio quibusdam ea esse sed soluta provident, maxime, dolorem mollitia! Ab nam ratione animi eum, esse dolorum facilis.</p>
                            <div class="row author">
                                <div class="col-md-2">
                                    <img src="<?php echo e(asset('assets/images/testimonials/client-03.jpg')); ?>" alt='Customer' class='img-fluid rounded-circle'>
                                </div>
                                <div class="col-md-10">
                                    <div class="author-details">
                                        <p>Full Name</p>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Ends-->
    <!-- Pricing -->
    <section id="pricing">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Super Customers</h3>
                        <h2>Our Prices</h2>
                    </div>
                </div>
                <div class="row prices">
                    <div class="col-md-4">
                        <!-- Basic -->
                        <div class="pricing-box">
                            <div class="type">
                                <h2>Basic</h2>
                            </div>
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3><strong>Rs.500</strong><br>per month</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem asperiores molestiae, accusamus commodi? Perspiciatis incidunt quisquam voluptatibus, impedit, hic aperiam totam, ratione neque quo nobis eum quod maxime unde labore.</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="package">
                                <li><span><i class="fas fa-hand-point-right"></i></span>Full Access</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Admin Panel</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Unlimited Bandwidth</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Email Account</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>24*7</li>
                            </ul>
                            <div class="price-button">
                                <a class='btn btn-general btn-yellow' href='#home'>Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Unlimited -->
                        <div class="pricing-box black">
                            <div class="type">
                                <h2>Unlimited</h2>
                            </div>
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3><strong>Rs.1500</strong><br>per 3month</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem asperiores molestiae, accusamus commodi? Perspiciatis incidunt quisquam voluptatibus, impedit, hic aperiam totam, ratione neque quo nobis eum quod maxime unde labore.</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="package">
                                <li><span><i class="fas fa-hand-point-right"></i></span>Full Access</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Admin Panel</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Unlimited Bandwidth</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Email Account</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>24*7</li>
                            </ul>
                            <div class="price-button">
                                <a class='btn btn-general btn-white' href='#home'>Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Business -->
                        <div class="pricing-box">
                            <div class="type">
                                <h2>Business</h2>
                            </div>
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3><strong>Rs.2500</strong><br>per year</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem asperiores molestiae, accusamus commodi? Perspiciatis incidunt quisquam voluptatibus, impedit, hic aperiam totam, ratione neque quo nobis eum quod maxime unde labore.</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="package">
                                <li><span><i class="fas fa-hand-point-right"></i></span>Full Access</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Admin Panel</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Unlimited Bandwidth</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>Email Account</li>
                                <li><span><i class="fas fa-hand-point-right"></i></span>24*7</li>
                            </ul>
                            <div class="price-button">
                                <a class='btn btn-general btn-yellow' href='#home'>Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing Ends-->
    <!-- Stats -->
    <section id="stats">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vertical-heading">
                            <h5>Fun facts</h5>
                            <h2>We Deliver<strong>Excellent</strong><br>Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <!-- Stats item 01-->
                        <div class="stats-item">
                            <span><i class='fas fa-hourglass-half'></i></span>
                            <h3 class='counter'>20</h3>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Stats item 02-->
                        <div class="stats-item">
                            <span><i class='fas fa-tasks'></i></span>
                            <h3 class='counter'>369</h3>
                            <p>Projects done</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Stats item 03-->
                        <div class="stats-item">
                            <span><i class='fas fa-trophy'></i></span>
                            <h3 class='counter'>99</h3>
                            <p>Awards Recieved</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Stats item 04-->
                        <div class="stats-item">
                            <span><i class='fas fa-users'></i></span>
                            <h3 class='counter'>233</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Stats Ends-->
    <!-- Clients -->
    <section id="clients">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="horizontal-heading text-center">
                            <h5>Satisfied Clients</h5>
                            <h2>Our Happy <strong>Clients</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="clients-list" class='owl-carousel owl-theme'>
                            <!-- Clients 01-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-01.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 02-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-02.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 03-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-03.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 04-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-04.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 05-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-05.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 06-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-06.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 07-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-07.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 08-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-08.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                            <!-- Clients 09-->
                            <div class="client">
                                <img src="<?php echo e(asset('assets/images/clients/client-09.jpg')); ?>" alt='Clients' class='img-fluid'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Clients Ends-->
    <!-- Blog -->
    <section id="blog">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div id="blog-left">
                            <div class="vertical-heading">
                                <h5>Latest News</h5>
                                <h2>Latest<br>from<strong>Blog</strong></h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem totam dolore amet cum earum, a libero ipsa excepturi, consectetur, voluptatibus deleniti quas accusantium. Pariatur nihil accusantium animi, quam deleniti tempore.</p>
                            <div id="blog-btn">
                                <a class='btn btn-general btn-yellow' role="button" title="View All Posts" href='#'>View All Posts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Blog Post 01 -->
                                <div class="blog-post">
                                    <h4>Your Post Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam beatae placeat doloribus, nam id. Fugiat eius eos, cum minima repudiandae deserunt rem architecto, ducimus sequi sint, provident dolorum blanditiis illo!</p>
                                    <a href='#'>Read More></a>
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><img src="<?php echo e(asset('assets/images/blog/author-1.jpg')); ?>" alt='Author'> Author Name</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class='text-right'>June 30,2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Blog Post 02 -->
                                <div class="blog-post">
                                    <h4>Your Post Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam beatae placeat doloribus, nam id. Fugiat eius eos, cum minima repudiandae deserunt rem architecto, ducimus sequi sint, provident dolorum blanditiis illo!</p>
                                    <a href='#'>Read More></a>
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><img src="<?php echo e(asset('assets/images/blog/author-2.jpg')); ?>" alt='Author'> Author Name</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class='text-right'>June 30,2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Ends-->
    <!-- Contact -->
    <section id="contact">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Contact Left-->
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h5>Who we are</h5>
                                <h2>Get<br>In<strong> Touch</strong></h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis maxime voluptates neque non nulla soluta amet a explicabo est consequuntur repellendus voluptatem, repellat impedit rerum odit, sit ullam minima. Voluptas?</p>
                            <div id="office">
                                <h5>Address Title</h5>
                                <ul class='office-details'>
                                    <li><span><i class="fas fa-mobile-alt"></i></span> 9848599401</li>
                                    <li><span><i class="fas fa-envelope"></i></span> support@zigrock.com</li>
                                    <li><span><i class="fas fa-map-marker-alt"></i></span> Uppal,Hyderabad,Telangana,India,Pin Code:500008</li>
                                </ul>
                                <ul class="social-list">
                                    <li><a href='#'><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href='#'><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Contact Right-->
                        <div id="contact-right">
                            <h4>Send Message</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ab tempore consequuntur porro iste soluta odio.</p>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type='text' class='form-control' placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type='email' class='form-control' placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type='number' class='form-control' placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type='text' class='form-control' placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div id="contact-btn">
                                    <a class='btn btn-general btn-yellow' role="button" title="Submit" href='#'>Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Ends-->
    <!-- Map -->
    <section id="map">
       <div class="content-box-md">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.115543714464!2d78.46687141413227!3d17.406241806844275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb975dd124c005%3A0x59439ffad6e0298e!2sBirla%20Mandir!5e0!3m2!1sen!2sin!4v1600749948324!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Map Ends-->
    <!-- Footer -->
    <footer class='text-center'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2020 All Rights Reserved by <span>Tricube Ltd.</span></p>
                </div>
            </div>
        </div>
        <a id='back-to-top' class='btn btn-sm btn-general btn-yellow smooth-scroll' role='button' title='Submit' href='#home'><i class="fas fa-angle-up"></i></a>
    </footer>
    <!--Footer Ends-->
    <!--Custom Bootstrap JS-->
    <script src='<?php echo e(asset('assets/js/bootstrap_js/bootstrap.js')); ?>'></script>
    <!--Owl Carousel-->
    <script src='<?php echo e(asset('assets/js/owl-carousel/owl.carousel.min.js')); ?>'></script>
    <!--Waypoints-->
    <script src='<?php echo e(asset('assets/js/waypoints/jquery.waypoints.min.js')); ?>'></script>
    <!--Counter-->
    <script src='<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>'></script>
    <!--Responsive tabs-->
    <script src='<?php echo e(asset('assets/js/responsive-tabs/jquery.responsiveTabs.min.js')); ?>'></script>
    <!--Isotope-->
    <script src='<?php echo e(asset('assets/js/isotope/isotope.pkgd.min.js')); ?>'></script>
    <!--Magnific Popup-->
    <script src='<?php echo e(asset('assets/js/magnific-popup/jquery.magnific-popup.min.js')); ?>'></script>
    <!--Custom JS-->
    <script src='<?php echo e(asset('assets/js/myscript.js')); ?>'></script>
</body>

</html><?php /**PATH C:\inetpub\wwwroot\laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>