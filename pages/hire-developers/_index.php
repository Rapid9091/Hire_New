<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker</title>
    <meta name="title" content=" Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker">
    <meta name="description" content="Are you looking for hiring dedicated developers? Hire Co-Worker helps you to hire a developer for your website, app or project on full time, part time and hourly." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker" />
    <meta property="og:description" content="Are you looking for hiring dedicated developers? Hire Co-Worker helps you to hire a developer for your website, app or project on full time, part time and hourly." />
    <meta property="og:url" content="https://hirecoworker.com/services/hire-dedicated-developers" />
    <meta property="og:site_name" content="Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker" />
    <meta name='robots' content='index' />
    <meta name="keywords" content="hire dedicated developers, hire dedicated laravel developers, hire dedicated wordpress developers, hire dedicated php developers, hire dedicated android developers, hire dedicated web developers, hire dedicated wordpress developer">
    <meta property="article:tag" content="hire dedicated developers" />
    <meta property="article:tag" content="hire dedicated laravel developers" />
    <meta property="article:tag" content="hire dedicated wordpress developers" />
    <meta property="article:tag" content="hire dedicated php developers" />
    <meta property="article:tag" content="hire dedicated android developers" />
    <meta property="article:tag" content="hire dedicated web developers" />
    <meta property="article:tag" content="hire dedicated wordpress developer" />
    
    <?php
    include_once head;
    ?>
    


    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_why-choose-us.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_faq.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_pricing.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_landing-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_expert.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_roadmap-2.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_remote-benifit.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_testimonial-slider.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_new-services.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_number-section.css">
    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/hire-developers.css">
    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>coder-bg.jpg");
        }
    </style>
</head>

<body>



    <div class="landing-section-services">

        <?php
        include_once header;
        ?>


        <div class="landing-section-parent grid grid-2">
            <div class="landing-section-content">
                <h2 class="section-heading animate__fadeInUp animate__animated">
                    Hire Dedicated Developers
                </h2>
                <div class="landing-offer-div">
                    <p>Starts from US $10/Hour - Save 70%</p>
                </div>

                <ul class="landing-ul">
                    <p class="text">Get rigorously vetted software developer teams that best match your time zone and work model. Save your hiring time and budget with Remote base.</p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Dedicated Developers
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>


            <?php include_once landing_form; ?>

        </div>


    </div>

    <!-- number section start -->
    <section class="number_section">
        <p class="p-pink">HIRE COWORKER</p>
        <h3 class="section-heading">The Numbers Do the Talking</h3>
        <div class="grid grid-4">
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>app-development.png" alt="Hire developer" loading="lazy">
                </div>
                <h4 class="text-center">3500+</h4>
                <p class="text-center">Successful Project</p>
            </div>
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>coding.png" alt="Hire android developer" loading="lazy">
                </div>
                <h4 class="text-center">750+</h4>
                <p class="text-center">In-House Developers</p>
            </div>
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>mobile_developed.png" alt="Hire mobile app developer" loading="lazy">
                </div>
                <h4 class="text-center">250+</h4>
                <p class="text-center">Mobile Apps Developed</p>
            </div>
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>web_tech.png" alt="Hire web developer" loading="lazy">
                </div>
                <h4 class="text-center">100+</h4>
                <p class="text-center">Web Technologies Mastered</p>
            </div>
        </div>
    </section>
    <!-- number section end -->

    <!-- service section of hire developers  -->
    <section class="hire-services w-100">
        <p class="p-pink">HIRE COWORKER</p>
        <h3 class="section-heading text-center">HIRE DEDICATED DEVELOPERS</h3>
        <p class="text text-center">
            Hire your dedicated developer with HireCoworker. We have a track record of satisfactory project delivery, for all kinds of projects. We provides Experienced software developers, Daily/weekly/monthly reporting, complementary development manager, Flexible engagement options & Competitive Pricing Models.
        </p>
        <div class="hire-services-btn-div">
            <button class="dev-type-btn dev-btn-active " id="dev-skill-btn">By-Skill</button>
            <button class="dev-type-btn" id="dev-role-btn">By-Role</button>
        </div>

        <div class="hire-services-container grid grid-3 dev-active" id="By-Skill">
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/golang.png" alt="Hire Golang Developer">
                </div>
                <div class="tech-info">
                    <h6>Golang</h6>
                    <p>Hire a Golang Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/android.png" alt="Hire Android Developer">
                </div>
                <div class="tech-info">
                    <h6>Android</h6>
                    <p>Hire a Android Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/angular.png" alt="Hire Angular Developer">
                </div>
                <div class="tech-info">
                    <h6>Angular</h6>
                    <p>Hire a Angular Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/arduino.png" alt="Hire Arduino Developer">
                </div>
                <div class="tech-info">
                    <h6>Arduino</h6>
                    <p>Hire a Arduino Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/aws.png" alt="Hire aws Developer">
                </div>
                <div class="tech-info">
                    <h6>AWS</h6>
                    <p>Hire a AWS Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/bootsrap.png" alt="Hire bootstrap Developer">
                </div>
                <div class="tech-info">
                    <h6>Bootstrap</h6>
                    <p>Hire a bootstrap Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/c-hash.png" alt="Hire C# Developer">
                </div>
                <div class="tech-info">
                    <h6>C#</h6>
                    <p>Hire a C# Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/chatbox.png" alt="Hire Chatbot Developer">
                </div>
                <div class="tech-info">
                    <h6>Chatbot</h6>
                    <p>Hire a Chatbot Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/clojure.png" alt="Hire Clojure Developer">
                </div>
                <div class="tech-info">
                    <h6>Clojure</h6>
                    <p>Hire a Clojure Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/django.png" alt="Hire Django Developer">
                </div>
                <div class="tech-info">
                    <h6>Django</h6>
                    <p>Hire a Django Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/dotnet.png" alt="Hire .NET Developer">
                </div>
                <div class="tech-info">
                    <h6>.NET</h6>
                    <p>Hire a .NET Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/drupal.png" alt="Hire Drupal Developer">
                </div>
                <div class="tech-info">
                    <h6>Drupal</h6>
                    <p>Hire a Drupal Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/firebase.png" alt="Hire Firebase Developer">
                </div>
                <div class="tech-info">
                    <h6>Firebase</h6>
                    <p>Hire a Firebase Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/flutter.png" alt="Hire Flutter Developer">
                </div>
                <div class="tech-info">
                    <h6>Flutter</h6>
                    <p>Hire a Flutter Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/hadoop.png" alt="Hire Hadoop Developer">
                </div>
                <div class="tech-info">
                    <h6>Hadoop</h6>
                    <p>Hire a Hadoop Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/ios.png" alt="Hire IOS Developer">
                </div>
                <div class="tech-info">
                    <h6>IOS</h6>
                    <p>Hire a IOS Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/iot.png" alt="Hire IoT Developer">
                </div>
                <div class="tech-info">
                    <h6>IoT</h6>
                    <p>Hire a IoT Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/java.png" alt="Hire Java Developer">
                </div>
                <div class="tech-info">
                    <h6>Java</h6>
                    <p>Hire a Java Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/javascript.png" alt="Hire Javascript Developer">
                </div>
                <div class="tech-info">
                    <h6>JavaScript</h6>
                    <p>Hire a JavaScript Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/laravel.png" alt="Hire Laravel Developer">
                </div>
                <div class="tech-info">
                    <h6>Laravel</h6>
                    <p>Hire a Laravel Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/magento.png" alt="Hire Magento Developer">
                </div>
                <div class="tech-info">
                    <h6>Magento</h6>
                    <p>Hire a Magento Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/NFT.png" alt="Hire NFT Developer">
                </div>
                <div class="tech-info">
                    <h6>NFT</h6>
                    <p>Hire a NFT Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/node.png" alt="Hire Node Developer">
                </div>
                <div class="tech-info">
                    <h6>Node</h6>
                    <p>Hire a Node Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/perl.png" alt="Hire Perl Developer">
                </div>
                <div class="tech-info">
                    <h6>Perl</h6>
                    <p>Hire a Perl Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/php.png" alt="Hire PHP Developer">
                </div>
                <div class="tech-info">
                    <h6>PHP</h6>
                    <p>Hire a PHP Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/python.png" alt="Hire Python Developer">
                </div>
                <div class="tech-info">
                    <h6>Python</h6>
                    <p>Hire a Python Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/react.png" alt="Hire React Developer">
                </div>
                <div class="tech-info">
                    <h6>React</h6>
                    <p>Hire a React Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/ror.png" alt="Hire RoR Developer">
                </div>
                <div class="tech-info">
                    <h6>ROR</h6>
                    <p>Hire a ROR Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/rust.png" alt="Hire Rust Developer">
                </div>
                <div class="tech-info">
                    <h6>Rust</h6>
                    <p>Hire a Rust Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/shopify.png" alt="Hire Shopify Developer">
                </div>
                <div class="tech-info">
                    <h6>Shopify</h6>
                    <p>Hire a Shopify Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/sql.png" alt="Hire Sql Developer">
                </div>
                <div class="tech-info">
                    <h6>SQL</h6>
                    <p>Hire a SQL Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/swift.png" alt="Hire Swift Developer">
                </div>
                <div class="tech-info">
                    <h6>Swift</h6>
                    <p>Hire a Swift Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/vue.png" alt="Hire Vue Developer">
                </div>
                <div class="tech-info">
                    <h6>Vue</h6>
                    <p>Hire a Vue Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/woo-commerce.png" alt="Hire Woo-Commerce Developer">
                </div>
                <div class="tech-info">
                    <h6>Woo-Commerce</h6>
                    <p>Hire a Woo-Commerce Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/wordpress.png" alt="Hire Wordpress Developer">
                </div>
                <div class="tech-info">
                    <h6>WordPress</h6>
                    <p>Hire a WordPress Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/xamarin.png" alt="Hire Xamarin Developer">
                </div>
                <div class="tech-info">
                    <h6>Xamarin</h6>
                    <p>Hire a Xamarin Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/zapier.png" alt="Hire Zapier Developer">
                </div>
                <div class="tech-info">
                    <h6>Zapier</h6>
                    <p>Hire a Zapier Developer</p>
                </div>
            </a>
        </div>
        <div class="hire-services-container grid grid-3 " id="By-Role">
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/frontend.png" alt="Hire Front End Developer">
                </div>
                <div class="tech-info">
                    <h6>Front End</h6>
                    <p>Hire a Front End Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/full-stack.png" alt="Hire Full Stack Developer">
                </div>
                <div class="tech-info">
                    <h6>Full Stack</h6>
                    <p>Hire a Full Stack Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/backend.png" alt="Hire Back End Developer">
                </div>
                <div class="tech-info">
                    <h6>Back End</h6>
                    <p>Hire a Back End Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/ui-ux.png" alt="Hire a UI/UX Developer">
                </div>
                <div class="tech-info">
                    <h6>UI/UX</h6>
                    <p>Hire a UI/UX Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/web.png" alt="Hire Web Developer">
                </div>
                <div class="tech-info">
                    <h6>Web Developer</h6>
                    <p>Hire a Web Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/blockchain.png" alt="Hire Blockchain Developer">
                </div>
                <div class="tech-info">
                    <h6>Blockchain</h6>
                    <p>Hire a Blockchain Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/devops.png" alt="Hire DevOps Developer">
                </div>
                <div class="tech-info">
                    <h6>DevOps</h6>
                    <p>Hire a DevOps Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/node.png" alt="Hire Node Developer">
                </div>
                <div class="tech-info">
                    <h6>Node</h6>
                    <p>Hire a Node Developer</p>
                </div>
            </a>

        </div>
    </section>
    <!-- ----------------------------------- -->
    <!-- why choose section start here -->

    <section class="why-choose-section">
        <div class="grid grid-2 width-100 why-choose-section-container">
            <div class="why-choose-section-content">
                <p>Collabration With Us</p>
                <h4 class="section-heading">Why Hire <span>Co-Woker</span> ?</h4>
                <p class="text">Customers from all over the world depend on our skilled developers to get high-quality, sector-specific web and mobile solutions. Employ our devoted developers to grow your company. They have expertise in a variety of technologies and fields.
                </p>
                <ul class="why-choose-ul">
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> Expertise in innovations</li>
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> 9+ years of rich experience</li>
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> 9/10 client satisfaction score</li>
                    <li class="text flex-center">
                        <i class='bx bxs-check-shield'></i> 100% money-back guarantee
                    </li>
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> Transparency is Guaranteed</li>
                </ul>
            </div>
            <div class="why-choose-section-img grid-center">
                <img src="<?= get_img() ?>Business decisions-broo.png" alt="Why hire employee virtually">
            </div>
        </div>
    </section>
    <!-- why choose section end here -->


    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink">EXPERTS</p>
        <h3 class="section-heading ">HIRE OUR BEST DEVELOPERS</h3>
        <div class="expert-grid">
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>hire-developer/dev-expert-01.jpeg" class="expert-image" alt="Hire Java Developer" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <h2>Robel M.</h2>
                    <P class="light-grey">Sr. Java Developer/Team Lead</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">A accomplished IT specialist with more than 7 years' experience in the banking, fintech, enterprise, etc.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Java</p>
                    </div>
                    <div class="skill">
                        <p>Spring</p>
                    </div>
                    <div class="skill">
                        <p>MySQL</p>
                    </div>
                    <div class="skill">
                        <p>Hibernate</p>
                    </div>
                    <div class="skill">
                        <p>REST API</p>
                    </div>
                    <div class="skill">
                        <p>Oracle</p>
                    </div>
                    <div class="skill">
                        <p>4+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>hire-developer/dev-expert-02.jpeg" class="expert-image" alt="Hire DevOps Engineer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">Tim M.</h2>
                    <P class="light-grey">DevOps Engineer</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.7/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">Senior DevOps Engineer with 10+ years of experience working on projects that were mission-critical.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Team City</p>
                    </div>
                    <div class="skill">
                        <p>Docker</p>
                    </div>

                    <div class="skill">
                        <p>Kubernetes</p>
                    </div>
                    <div class="skill">
                        <p>Terraform</p>
                    </div>
                    <div class="skill">
                        <p>AWS</p>
                    </div>
                    <div class="skill">
                        <p>5+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>hire-developer/dev-expert-03.jpeg" class="expert-image" alt="Hire sr. front end developer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">Akashdeep N.</h2>
                    <P class="light-grey">Sr. Front-End Developer</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.5/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">Front-End engineer at the senior level with nearly 6 years of diverse software development expertise.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Tizen OS</p>
                    </div>
                    <div class="skill">
                        <p>JavaScript</p>
                    </div>
                    <div class="skill">
                        <p>React.js</p>
                    </div>
                    <div class="skill">
                        <p>AWS</p>
                    </div>
                    <div class="skill">
                        <p>TypeScript</p>
                    </div>
                    <div class="skill">
                        <p>3+</p>
                    </div>

                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
        </div>
    </section>
    <!-- expert section end -->


    <!-- why remote section start -->
    <?php include_once why_remote; ?>
    <!-- why remote section end -->

    <!-- roadmap start -->
    <section class="roadmap-2">
        <p class="p-pink">TIMELINE</p>
        <h3 class="section-heading ">HOW WE WORK</h3>
        <div class="timeline">
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>REQUIREMENT / RESEARCH</h2>
                    <p class="text">We understand the requirement of the client and research on the project. We also do the analysis of some competitor project.
                    </p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>CREATING PLATFORM</h2>
                    <p class="text">1. After getting requirement, we create a layout of project on the platform on which client want their project.<br><br>
                        2. We create a strategy, which things will work great in this project.<br><br>
                        3. Share the layout of project with Client.</p>
                </div>
            </div>
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>DEVELOPEMENT / TRAIL PHASE</h2>
                    <p class="text">After getting client approval we start working on the project with dedicated platform & dedicated team. And our team create it within given time & Trial Phase.
                    </p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>TEST / LAUNCH</h2>
                    <p class="text">Before launch it, our testing team test or trial it very carefully, when client approved it then we launch it.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- roadmap end -->

    <!-- pricing start-->
    <!-- pricing start-->
    <section class="pricing">
        <?php
        $post_name = 'Dedicated Developers';
        include_once pricing; ?>
    </section>
    <!-- pricing end -->


    <!-- pricing end -->

    <!-- testimonial slider section start here -->



    <?php

    $testimonial1 = "The business assisted us in starting from scratch with the web application concept. The team efficiently managed their Agile projects, communicated, and frequently gave comprehensive explanations in both technical and non-technical language. Their good work ethic consistently involved proactive effort.";
    $test_name1 = "Jeffrey Reyes";
    $test_role1 = "Regional Director";
    $user_img1 = "hire-developer/dev-test-01.jpeg";


    $testimonial2 = "Amazing services are provided by Hire Coworker. The projects have met my every expectation, and I look forward to our further collaboration. I have no hesitation in recommending their services. Their professionals are well-informed and highly responsive. The platform is quite adaptable as well.";
    $test_name2 = "Aaron. G";
    $test_role2 = "Founder & CEO";
    $user_img2 = "hire-developer/dev-test-02.jpeg";


    $testimonial3 = "Despite the fact that we have only recently started working with Hire Co-worker, they have already proven to be a competent and professional business. Projects were successfully managed, of a high calibre, and managed effectively.";
    $test_name3 = "Marcio. M";
    $test_role3 = "Managing Partner";
    $user_img3 = "hire-developer/dev-test-03.jpeg";

    $testimonial4 = "   When dealing with a remote contractor, communication is crucial, and Hire Co-worker excels at it. I wholeheartedly recommend Hire Co-worker as a supplier of top-notch developers that follow specifications and are consistently delivered on time.";
    $test_name4 = "Robert. S";
    $test_role4 = "IT Manager";
    $user_img4 = "hire-developer/dev-test-04.jpeg";

    include_once testimonial_slider; ?>
    <!-- testimonia; slider section end here -->

    <!-- faq section -->
    <section class="full-section">
        <p class="p-pink">8 REASONS TO OUTSOURCE</p>
        <h4 class="section-heading">
            Reasons To Hire Remote Developer
        </h4>
        <div class="container-grid grid grid-3">

            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">01</div>
                        <div class="box-title-heading">
                            <h6>Productivity</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    The fact that remote developers are more productive than in-office developers is the primary reason for hiring them. They benefit from flexible working hours and other activities when they work from home, making them more active and focused on their work.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">02</div>
                        <div class="box-title-heading">
                            <h6>Find The Right Skill</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    In order to avoid long delays or project failures, it is essential to hire the right candidate for the position or work. The remote developers have the skills and you can give them control of the project or work with a deadline, and they will take full responsibility.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">03</div>
                        <div class="box-title-heading">
                            <h6>Low Infrastructure Expense</h6>
                        </div>
                    </div>

                </div>
                <p class="text">Remote developers will only cost you the salary or decided project fees and besides that, they won’t ask for anything. They work from home or their place that saves offices extra cost of equipment, desk, furniture, and stationery.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">04</div>
                        <div class="box-title-heading">
                            <h6>Less Employment Cost</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Employers save a lot of money when remote developers work from home and only work for a set amount of time - weeks, months, or until their project is finished. Since they are not permanent employees, employers are not required to provide them with benefits.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">05</div>
                        <div class="box-title-heading">
                            <h6>No Travel Expenses</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    You can hire developers from other countries without worrying about how much they have to travel. While some nations offer excellent options for work visas, you won't need them if they work from home.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">06</div>
                        <div class="box-title-heading">
                            <h6>More Focused & Motivated</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    When compared to in-office developers, remote developers possess a number of qualities. Because they work independently, remote developers are highly skilled and overly focused on their work. They always put in a lot of effort to provide their customers with the best possible service.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">07</div>
                        <div class="box-title-heading">
                            <h6>Easy Employee Rotation</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Some skilled employees are hired by businesses who have bad work habits that ruin the workplace as a whole, while others are of no use to the business. Both of these scenarios are prevalent and occur at some point in a person's carrier. However, hiring a remote developer can save you all of this hassle. Because you hire them for a specific amount of time, remote developers are temporary.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">08</div>
                        <div class="box-title-heading">
                            <h6>Work Done before Time</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    When hiring remote developers, gives you the power to choose the right person for the specific task. If each task will be done by its expert then it will take lesser time. On the other hand, remote developers don’t get hired for days, you hire them for tasks that keep them focused on your work without boundations of working hours.
                </p>
            </div>

        </div>

    </section>

    <section class="faq-section">
        <p class="p-pink">FAQs</p>
        <h5 class="section-heading">Do You Have Questions</h5>
        <div class="faqs">

            <div class="faqs-child">
                <details>
                    <summary>What can a Web Developer do for me?</summary>
                    <div class="faq__content">
                        <p class="text">Web Developers work to design, create, and maintain websites and web applications. The majority of Web Developers work either on the software, database, or the coding part of a website, known as the back-end, or in the design and interface part, known as the front-end. However, Full Stack Developers work on both sides and offer a more complete service.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How are Web Developers different from web designers?</summary>
                    <div class="faq__content">
                        <p class="text">The aesthetic aspect, or the way a website looks, is a primary concern for web designers. This includes things like the colors, typefaces, and buttons. On the other hand, web developers typically concentrate on everything that takes place behind the scenes: performance, bugs, and coding.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Will my Web Developer be dedicated to me?</summary>
                    <div class="faq__content">
                        <p class="text">Yes, your web developer will be a dedicated employee of your organization and will work the same work schedule each day in your preferred time-zone.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What happens if my Web Developer is away or sick?</summary>
                    <div class="faq__content">
                        <p class="text">Since they are dedicated to you, there isn't a back-up person to cover while they are away.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How do I communicate with my HireCoworker developer?</summary>
                    <div class="faq__content">
                        <p class="text">At HireCoworker, you can work completely in sync with your programmers and developers by utilizing all internet-based services like Teams, mail, chat, text, audio/video calls, screen sharing, and remote desktop.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How is HireCoworker my ideal development partner?</summary>
                    <div class="faq__content">
                        <p class="text">One of the pioneers in the field of remote staffing, HireCoworker can help you find remote workers with the best skill sets. We take care of everything outside of work, like payroll, IT support, hardware and infrastructure, employee insurance, and so on. You simply collaborate closely with your remote developers to achieve cost-effective results.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How safe is outsourcing my development project to you?</summary>
                    <div class="faq__content">
                        <p class="text">Totally safe. Your idea/product/project concept ownership and patents are solely yours and completely safe as we sign the Non-Disclosure agreements with you.</p>
                    </div>
                </details>
            </div>

        </div>

    </section>

    <!--faq end -->

    <?php
    include_once blog_news;
    ?>

    <!-- footer and script added here -->
    <?php
    include_once page_bottom;
    ?>

    <script>
        const parent_btn = document.querySelector(".hire-services-btn-div");
        console.log(parent_btn.length);

        /* Adding an event listener to each of the buttons in the parent_btn div. When the button is
        clicked, it removes the class dev-btn-active from all the buttons, and adds it to the button
        that was clicked. It also removes the class dev-active from all the divs, and adds it to the
        div with the id that matches the button that was clicked. */
        for (let i = 0; i < parent_btn.children.length; i++) {
            parent_btn.children[i].addEventListener("click", function() {
                remove_col_btn();
                this.classList.add("dev-btn-active");
                document.getElementById(this.innerHTML).classList.add("dev-active");
            });
        }

        function remove_col_btn() {
            for (let i = 0; i < parent_btn.children.length; i++) {
                parent_btn.children[i].classList.remove("dev-btn-active");
                document.querySelectorAll(".hire-services-container")[i].classList.remove("dev-active")
            }
        }
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },

                800: {
                    items: 2
                }
            }
        })
    </script>
</body>

</html>