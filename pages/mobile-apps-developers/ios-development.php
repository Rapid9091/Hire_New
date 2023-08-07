<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once head_new; ?>

    <title>IOS Development</title>


    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">
    <link rel="stylesheet"href="<?= get_css() ?>/logo.css">
    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>dm/seo_specialist.webp");
        }
    </style>
</head>

<body>
    <!-- notification strip line -->
    <div class="notification_strip_line">
        <div class="noti_strip_content">
            <p>"Use Code HIRE to get extra 10% Discount"</p>
        </div>

    </div>


    <div class="landing-section-services">

        <?php
        include_once header;
        ?>


        <div class="landing-section-parent grid grid-2">
            <div class="landing-section-content">
                <h1 class="section-heading animate__fadeInUp animate__animated">
                    IOS Development
                </h1>

                <ul class="landing-ul">
                    <li class="text">The software is created using either the Swift programming language or Objective-C.
                        Once it is developed, it is made available for users to download from the App Store.
                    </li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire IOS Development Specialists
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>


            <?php include_once landing_form; ?>

        </div>


    </div>

    <!-- review section -->
    <?php include_once reviews2; ?>

    <!-- Roadmap Start From here  -->

    <section class="section-roadmap dm-services-roadmap">
        <p class="p-pink">DIGITAL MARKETING PROCESS</p>
        <p class="section-heading">A Simple, Iterative Process</p>
        <ul class="roadmap">
            <li>

                <div class="roadmap-item">
                    <p class="road_heading">RESEARCH</p>
                    <p class="text">
                        We do Keyword research as per the niche of the website. We also do the analysis of competitor
                        websites.
                    </p>
                </div>
            </li>
            <li>
                <div class="roadmap-item">
                    <p class="road_heading">CREATING PLATFORM</p>
                    <p class="text">
                        1. After analysis, we placed the keywords in our website content and website URL'S.
                        <br> 2. We create a strategy, which keywords we focused on more.
                        <br> 3. How we can generate leads.
                    </p>
                </div>
            </li>
            <li>

                <div class="roadmap-item">
                    <p class="road_heading">How we work</p>
                    <p class="text">
                        i. We do only <em style="font-style:normal;">white hat SEO</em>
                        <br> ii. We generate <em style="font-style:normal;">high traffic on website</em> (organic & paid
                        traffic)
                        <br> iii. For keywords ranking improvement, we work on high DA, TA, PA websites.
                        <br> iv. Increase the ranking of keywords & increase traffic on websites.
                    </p>
                </div>
            </li>
            <li>
                <div class="roadmap-item">
                    <p class="road_heading">Tools we use</p>
                    <p class="text">
                        We use <em style="font-style:normal;">Google webmaster</em> (To check the website health)
                        <br> <em style="font-style:normal;">Google analytics</em> (To track the website traffic)
                        <br> <em style="font-style:normal;">Google AdWords</em> (for google ads and Keywords planner
                        tools for keywords research)
                    </p>
                </div>
            </li>
            <div class="v-line"></div>
        </ul>
    </section>

    <!-- Roadmap End From here  -->

    <!-- number section start -->
    <section class="number_section">
        <p class="p-pink">HIRE COWORKER</p>
        <p class="section-heading">The Numbers Do the Talking</p>
        <div class="grid grid-4">
            <div class="number-counter">
                <div class="text-center number-counter-item">
                    <img src="<?= get_img(); ?>hire-developer/app-development.png" alt="Hire developer" loading="lazy">
                </div>
                <p class="text-cente number_p">3500+</p>
                <p class="text-center">Successful Project</p>
            </div>
            <div class="number-counter">
                <div class="text-center number-counter-item">
                    <img src="<?= get_img(); ?>hire-developer/coding.png" alt="Hire android developer" loading="lazy">
                </div>
                <p class="text-center number_p">750+</p>
                <p class="text-center">Certified PHP Developers</p>
            </div>
            <div class="number-counter">
                <div class="text-center number-counter-item">
                    <img src="<?= get_img(); ?>hire-developer/mobile_developed.png" alt="Hire mobile app developer"
                        loading="lazy">
                </div>
                <p class="text-center number_p">8+</p>
                <p class="text-center">Year's Industry Experience</p>
            </div>
            <div class="number-counter">
                <div class="text-center number-counter-item">
                    <img src="<?= get_img(); ?>hire-developer/web_tech.png" alt="Hire web developer" loading="lazy">
                </div>
                <p class="text-center number_p">600+</p>
                <p class="text-center">Satisfied Global Clients</p>
            </div>
        </div>
    </section>
    <!-- number section end -->

    <!-- hiring-step start -->
    <section class="hiring_step1">

<div class="grid12  why-row" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="hiring_step1_order-1">
        <div>
            <p class="section-heading1">HIRE SEO SPECIALISTS ONLINE WITH EASY STEP</p>
            <!-- <p class="text hiring_step1_content">You won't have to deal with the hassles of traditional
                outsourcing thanks to our
                novel business model, which gives you complete control over who you work with.</p> -->
            <!-- <button class="btn hire-btn-new">Get Qoute</button> -->
        </div>
    </div>
    <div class="main">
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/brief.png" alt="hire graphic designer"
                    loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Talk To Us</p>
                <p>What sort of graphic design position are you seeking?</p>
            </div>
        </div>
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/handpick.png"
                    alt="hire legal process outsourcing" loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Handpick Best Expert</p>
                <p>We provide screened CVs of the Graphic Designing experts we've chosen.</p>
            </div>
        </div>
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/team.png" alt="hire graphic designer"
                    loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Build Your Team</p>
                <p>Phone or video conference interviews of selected candidates are available. You may assign
                    tests to them.</p>
            </div>
        </div>
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/going.png" alt="hire graphic designer"
                    loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Get Going</p>
                <p>If you are pleased with the results, immediately hire them and get to work.</p>
            </div>
        </div>
        
    </div>
    <button class="btn hire-btn">Get Qoute</button>
</div>

</section>

    <!-- content section start -->
    <section class="content_section">

        <div class="content_div">
            <h2 class="content-heading">What is IOS Development?</h2>
            <p class="text_content">iOS application development is the process of creating android applications that are
                designed for wor on Apple devices such as the iPhone, iPad, and iPod Touch. </p><br>

            <p class="text_content">The software is produced using either the Swift programming language or Objective-C.
                Once it
                is developed, it is made available for users to download from the App Store. </p><br>

            <p class="text_content">If you create mobile apps, you might have had concerns about developing apps for iOS
                devices. For instance, every developer requires a Mac computer, which tends to have a higher price
                compared to
                Windows-based computers. </p><br>

            <p class="text_content">Once you finish developing your app, it goes through a thorough quality review
                process
                before it can be available on the App Store. </p><br>

            <p class="text_content">If your organization has employees, customers, or partners who use Apple iPhones and
                iPads,
                consider developing apps specifically for iOS. </p><br>

            <p class="text_content">Developing an iOS app can be just as easy, if not easier, than developing for
                Android, even
                though there may be some initial challenges. </p><br>

            <p class="text_content">By carefully organizing your tasks and accessing the necessary tools, you can become
                part of
                the community of developers creating iOS device applications. </p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">IOS Developer Requirements </h2>
            <p class="text_content">To create iOS apps, it is necessary to have a Mac computer that has the most
                up-to-date
                version of Xcode installed. </p><br>

            <p class="text_content">Xcode is a software tool developed by Apple that helps developers create and manage
                applications for Mac computers and iOS devices like iPhones and iPads. </p><br>

            <p class="text_content"> It provides a user-friendly interface and tools to write, test, and debug code,
                making the
                app development process easier and more efficient. Xcode is a software tool </p><br>

            <p class="text_content">that allows you to create applications for iOS devices, such as iPhones and iPads.
                It
                provides a user-friendly interface for writing code and designing the visual elements of your app. </p>
            <br>

            <p class="text_content"> Xcode is a software package that includes everything you need to create and work on
                an app
                for iOS devices like iPhones and iPads. </p><br>

            <p class="text_content">It contains tools, compilers, and frameworks that allow you to design, develop,
                write code,
                and fix any issues in your app. Apple recommends using the Swift programming language for creating
                native mobile
                apps on iOS. </p><br>

            <p class="text_content">Please be aware that Xcode, the software used for developing iOS apps, is
                exclusively
                compatible with Mac OS X. This means that to develop iOS apps, you will need to use a Mac computer. </p>
            <br>
        </div>
        <div class="content_div">
            <h2 class="content-heading"> What is an IOS SDK?</h2>
            <p class="text_content">The iOS SDK is a set of tools software developers use to create applications
                specifically
                for Apple's iOS devices, like iPhones and iPads. It provides everything they need to build these apps
                and make
                them work well on Apple's operating system. </p><br>

            <p class="text_content">A software development kit (SDK) is a set of tools developers use to build
                applications for
                a particular platform. </p><br>

            <p class="text_content">An SDK, which stands for Software Development Kit, is like a toolbox for software
                developers. It includes many helpful tools and resources that make it easier for developers to create
                applications for a specific platform. </p><br>

            <p class="text_content"> It includes an API, like a bridge, that allows different software applications to
                communicate with and work on the platform they are designed for. </p><br>

            <p class="text_content"> APIs, or Application Programming Interfaces, are tools that developers use to build
                software applications. </p><br>

            <p class="text_content"> They provide a way for different software systems to communicate and interact with
                each
                other. APIs can be created using various methods. </p><br>

            <p class="text_content">They often come with programming libraries and additional tools that make it easier
                for
                developers to use them effectively. </p><br>

            <p class="text_content">These tools help streamline the process of building and integrating APIs into
                software
                applications. </p><br>

            <p class="text_content">The software provider may require a license for the software development kits. These
                tools
                are usually created to help develop specific to a particular platform. However, they are done by
                developers, not
                part of the company. For example, individual developers create applications or tools for a specific
                forum. </p>
            <br>
        </div>
   
          
                <div class="content_div">
                    <h2 class="content-heading">Types of IOS Programing Languages</h2>
                  
                        <h3><strong>1)Objective-C</strong></h3><br>
                        <p class="text_content">Objective-C is a programming language that was created in the early
                            1980s. It
                            has been the primary language for developing software for Apple products for many years.
                        </p><br>

                        <p class="text_content"> Objective-C is a programming language that is based on the C language.
                            It
                            focuses on communicating messages between different program parts instead of the more
                            traditional
                            way of calling functions in C programming. </p><br>

                        <p class="text_content">Some developers prefer using their older applications written in
                            Objective-C
                            instead of updating them to work with the newer Swift framework released in 2014. </p><br>
                        <h3><strong>2)Swift</strong></h3>

                        <p class="text_content">The Swift programming language has been designated as the primary
                            language for
                            developing iOS applications. </p><br>

                        <p class="text_content"> Swift is similar to Objective-C. However, it has a simpler syntax and
                            emphasizes security more. </p><br>

                        <p class="text_content">You can easily include existing code from older apps into updated apps
                            because
                            it shares a run time with Objective-C. </p><br>

                        <p class="text_content">Swift is a programming language designed to be beginner-friendly, making
                            it easy
                            for people new to programming to learn. Swift is a programming language known for being
                            faster, more
                            secure, and easier to use than Objective-C. </p><br>

                        <p class="text_content"> If you are developing an iOS app, it is generally recommended to use
                            Swift
                            unless you have a specific reason to continue using Objective-C. </p><br>
                </div>
                <div class="content_div">
                    <h2 class="content-heading">Get your code-writing setup ready</h2>
                    <div class=”ul_div”>
                        <ul>

                            <li>Download Xcode.</li>
                            <li>Launch Xcode, and create a new project from scratch.</li>
                            <li>Educate yourself on how to utilize Xcode.
                            <li>When building and testing your app in Xcode, use the iOS Simulator software. You can
                                preview
                                your app and interact with it as if it were running on an actual device using the iOS
                                Simulator.
                                You can test your application on a variety of devices and iOS versions.</li>
                        </ul>
                    </div>
                </div>
                <div class="content_div">
                    <h2 class="content-heading">Apple developer Program </h2>
                    <p class="text_content">The Apple Developer Programme is a service provided by Apple that helps
                        developers
                        create and distribute their apps to customers. </p><br>

                    <p class="text_content">It acts as a pipeline, allowing developers to write their code and then
                        deliver it
                        to customers through Apple's platform. </p><br>

                    <p class="text_content">The Apple Developer Programme is a membership that provides developers with
                        all the
                        necessary tools and resources to create, test, and release applications for Apple's operating
                        systems.
                    </p><br>

                    <p class="text_content">The Apple Developer Programme membership offers a wide range of benefits and
                        features. Some of these include: </p><br>
                    <div class=”ul_div”>
                        <ul>

                            <li>You can try out early versions of iOS, iPadOS, macOS, watchOS, and tvOS before they are
                                officially released. These are called beta builds, allowing you to test new features and
                                provide
                                feedback to help improve the software.</li>
                            <li>TestFlight is a feature that allows developers to release their apps to a select group
                                of users
                                for testing before making them available to the general public. This means that you can
                                try out
                                new apps and provide feedback to the developers to help them improve the app before it
                                is
                                officially released.</li>
                            <li>You will have access to various app extensions Apple provides, such as CloudKit, Game
                                Centre,
                                Apple Pay, Maps, and many others. These extensions enhance the functionality and
                                features of
                                your apps.</li>
                            <li>Code-level support is a service that provides developers with assistance from an Apple
                                developer. This support is specifically designed to help troubleshoot and improve the
                                efficiency
                                of your code.</li>
                            <li>the capability to make your apps available for download and use on the Apple App Store
                            </li>
                            <li>A developer requests permission to distribute their macOS app outside the official App
                                Store.
                            </li>
                            <li>With ad hoc app distribution, you can distribute your app to up to 100 devices of each
                                type per
                                year. This allows you to test your app on different devices before releasing it to the
                                public.
                                Additionally, you will have access to Apple Store Connect's App Analytics </li>
                        </ul>
                    </div>
                    <p class="text_content">program, which provides valuable insights into how your app is performing.
                        You will
                        also have access to other App Store management features to help you effectively manage and
                        promote your
                        app.

                </div>



    </section>
    <!-- content section end -->

    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">EXPERTS</p>
        <p class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HIRE OUR
            BEST DIGITAL MARKETING EXPERT</p>
        <div class="expert-grid">
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>dm/dm-experts-1.jpg" class="expert-image"
                        alt="Hire Digital Marketing Expert" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <p class="expert-name">Edward C.</p>
                    <p class="light-grey">Digital Marketer</p>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">A accomplished IT specialist with more than 7 years
                    experience in the banking, fintech, enterprise, etc.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Linkedin</p>
                    </div>
                    <div class="skill">
                        <p>B2B</p>
                    </div>
                    <div class="skill">
                        <p>Marketing Strategy</p>
                    </div>
                    <div class="skill">
                        <p>Lead Generation</p>
                    </div>
                    <div class="skill">
                        <p>Technical SEO</p>
                    </div>

                    <div class="skill">
                        <p>6+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>dm/dm-experts-2.jpg" class="expert-image" alt="Hire SEO/SMO Expert"
                        loading="lazy">
                </div>
                <div class="expert-profile">
                    <p class="expert-name">Syed K.</p>
                    <p class="light-grey">Digital Marketer</p>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.7/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">SEO Executive with 10+ years of experience working on
                    projects that were mission-critical.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Google Data Studio</p>
                    </div>
                    <div class="skill">
                        <p>Web Analytics</p>
                    </div>

                    <div class="skill">
                        <p>Google Ads</p>
                    </div>
                    <div class="skill">
                        <p>eCommerce</p>
                    </div>
                    <div class="skill">
                        <p>SEO Writing</p>
                    </div>
                    <div class="skill">
                        <p>10+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>dm/dm-expert-3.jpg" class="expert-image" alt="Hire Lead Generation expert"
                        loading="lazy">
                </div>
                <div class="expert-profile">
                    <p class="expert-name">Kristine S.</p>
                    <p class="light-grey">Digital Marketer</p>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.5/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">Social Media Manager at the senior level with nearly 6
                    years of diverse digital marketing expertise.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Social Media Marketing</p>
                    </div>
                    <div class="skill">
                        <p>Facebook Marketing</p>
                    </div>
                    <div class="skill">
                        <p>Email Marketing</p>
                    </div>
                    <div class="skill">
                        <p>WordPress</p>
                    </div>
                    <div class="skill">
                        <p>Strategic Plan</p>
                    </div>
                    <div class="skill">
                        <p>7+</p>
                    </div>

                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
        </div>
    </section>
    <!-- expert section end -->


    <!-- pricing start-->
    <section class="pricing">
        <p class="section-heading">Pricing Table</p>
        <div class="list_header">
            <div class="service_name list_head">Services</div>
            <div class="hourly list_head">Hourly</div>
            <div class="daily list_head">Daily</div>
            <div class="weekly list_head">Weekly</div>
            <div class="monthly list_head">Monthly</div>
        </div>

        <div class="panel">
            <div class="list_row">
                <div class="list_data">
                    Ecommerce Web Development
                </div>
                <div class="list_data">
                    $4
                </div>
                <div class="list_data">
                    $30
                </div>
                <div class="list_data">
                    $200
                </div>
                <div class="list_data">
                    $800
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Customer Mail Handling
                </div>
                <div class="list_data">
                    $4
                </div>
                <div class="list_data">
                    $30
                </div>
                <div class="list_data">
                    $200
                </div>
                <div class="list_data">
                    $800
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Chargebacks Handling
                </div>
                <div class="list_data">
                    $10
                </div>
                <div class="list_data">
                    $70
                </div>
                <div class="list_data">
                    $470
                </div>
                <div class="list_data">
                    $1850
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Amazon Account Handling
                </div>
                <div class="list_data">
                    $5
                </div>
                <div class="list_data">
                    $35
                </div>
                <div class="list_data">
                    $230
                </div>
                <div class="list_data">
                    $920
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Ebay Account Handling
                </div>
                <div class="list_data">
                    $5
                </div>
                <div class="list_data">
                    $35
                </div>
                <div class="list_data">
                    $230
                </div>
                <div class="list_data">
                    $920
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Walmart Account Handling
                </div>
                <div class="list_data">
                    $5
                </div>
                <div class="list_data">
                    $35
                </div>
                <div class="list_data">
                    $230
                </div>
                <div class="list_data">
                    $920
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Dropshipping Virtual Assistant
                </div>
                <div class="list_data">
                    $3
                </div>
                <div class="list_data">
                    $22
                </div>
                <div class="list_data">
                    $150
                </div>
                <div class="list_data">
                    $550
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Sales Funnel Development + Support
                </div>
                <div class="list_data">
                    $10
                </div>
                <div class="list_data">
                    $70
                </div>
                <div class="list_data">
                    $450
                </div>
                <div class="list_data">
                    $1800
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Google Reviews Services
                </div>
                <div class="list_data">
                    $1.5 per review
                </div>
            </div>
        </div>
    </section>

    <!-- pricing end -->


    <div class="links-div section-background">

        <div>
            <a href="#it-outsourcing" class="links-div-child text">
                IT Outsourcing
            </a>
        </div>


        <div>
            <a href="#digital-marketing" class="links-div-child text">
                Digital Marketing
            </a>
        </div>


        <div>
            <a href="#hire-developer" class="links-div-child text">
                Hire Developers
            </a>
        </div>


        <div>
            <a href="#hire-dedicated-designer" class="links-div-child text">
                Hire Dedicated Designers
            </a>
        </div>


        <div>
            <a href="#content-writer" class="links-div-child text">
                Content Writer
            </a>
        </div>


        <div>
            <a href="#engineers" class="links-div-child text">
                Engineers And Architects
            </a>
        </div>


        <div>
            <a href="#app-developer" class="links-div-child text">
                Mobile Apps Developers
            </a>
        </div>


        <div>
            <a href="#finance" class="links-div-child text">
                Finance & Accounts Experts
            </a>
        </div>


        <div>
            <a href="#remote-medical" class="links-div-child text">
                Remote Medical Professionals
            </a>
        </div>


        <div>
            <a href="#legal-process-outsourcing" class="links-div-child text">
                Legal Process Outsourcing
            </a>
        </div>
        <div>
            <a href="#virtual-assistant" class="links-div-child text">
                Hire Virtual Assistant
            </a>
        </div>
        <div>
            <a href="#outsource-to-india" class="links-div-child text">
                Outsource To India
            </a>
        </div>

    </div>

    <!-- testimonia; slider section end here -->

    <?php

    $testimonial1 = "With the help of SEO and PPC, Hirecoworker's was able to boost online leads by more than +260% and boost overall traffic to the new  website by +364%.";
    $test_name1 = "Jeffrey Reyes";
    $test_role1 = "Regional Director";


    $testimonial2 = "These men are amazing. They have assisted us in expanding our firm, and now the biggest issue we are experiencing is having too much business, which is the ideal situation.";
    $test_name2 = "Aaron. G";
    $test_role2 = "Founder & CEO";



    $testimonial3 = "Hirecoworker is a much-needed blessing that has far surpassed our expectations. They are trustworthy, up front, and quick to attend to all of your demands. You can rely on them, and most importantly, they deliver on their promises with no holds barred";
    $test_name3 = "Marcio. M";
    $test_role3 = "Managing Partner";


    $testimonial4 = "Hirecoworker is a much-needed blessing that has far surpassed our expectations. They are trustworthy, up front, and quick to attend to all of your demands. You can rely on them, and most importantly, they deliver on their promises with no holds barred.";
    $test_name4 = "Robert. S";
    $test_role4 = "IT Manager";


    include_once testimonial_slider; ?>


    <!-- --------------------- -->
    <!-- faq section -->
    <section class="faq-section">
        <p class="p-pink">FAQs</p>
        <p class="section-heading">Do You Have Questions</p>
        <div class="faqs">

            <div class="faqs-child">
                <details>
                    <summary>What is an SEO expert?</summary>
                    <div class="faq__content">
                        <p class="text">An SEO expert or SEO specialister finds methods, tactics, and procedures to
                            boost the number of website visits and seeks to get a high-ranking placement in search
                            engine results such as Google or Bing. Creating more leads for the organization opens up new
                            avenues for profit and growth.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Why would you hire a virtual SEO assistant?</summary>
                    <div class="faq__content">
                        <p class="text">If you lack the ability to develop keyword-rich SEO material, you will not
                            maximize your Google ranks. Use a virtual assistant to avoid monthly retainer fees and the
                            necessity to engage an onsite person, which will cost you extra. Let your virtual assistant
                            to handle your Search Engine Optimization by examining critical data like as page visits,
                            bounce rates, backlinks, link building activities, and other SEO chores such as writing blog
                            articles and other related material. You may utilize the internet and other platforms to
                            reach your target consumers, giving you the opportunity to expand your company faster.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What are the advantages of hiring an SEO Virtual Assistant?</summary>
                    <div class="faq__content">
                        <p class="text">Expert search engine optimization may significantly boost your ranks. Spend less
                            money since hiring a virtual assistant is more cost-effective over time. You may devote more
                            time to your main tasks.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What is the difference between SEO and SEM?</summary>
                    <div class="faq__content">
                        <p class="text">SEO (search engine optimization) is sometimes used as a catch-all word for SEM
                            (Search engine marketing). SEM, on the other hand, refers to sponsored advertising. As a
                            result, the two words should be distinguished. This is because SEM is about delivering
                            bought traffic to a website, but SEO is about bringing organic traffic to a site and
                            monitoring traffic trends.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What factors contribute to effective SEO?</summary>
                    <div class="faq__content">
                        <p class="text">The primary driver of search engine results is high-quality, authoritative
                            content, and there is no alternative for unique and excellent material. This is especially
                            true while performing SEO marketing. Excellent content for your target audience increases
                            site traffic, increasing the relevance and authority of your site.</p>
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
    // include_once page_bottom;
    include_once modal_form;
    include_once footer;
    ?>

    <!-- scripts -->
    <!-- -------------------------- -->
    <?php include_once script_new; ?>


</body>

</html>