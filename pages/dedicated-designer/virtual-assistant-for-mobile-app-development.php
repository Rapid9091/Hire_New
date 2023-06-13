<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once head_new; ?>

    <title>Virtual Assistant For Mobile App Development</title>


    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">
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
                    Mobile App Development Virtual Assistant
                </h1>

                <ul class="landing-ul">
                    <li class="text">When you engage a virtual assistant for mobile app development services from us, your demands may be met quickly and affordably.</li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Mobile App Specialists
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
                    <img src="<?= get_img(); ?>hire-developer/mobile_developed.png" alt="Hire mobile app developer" loading="lazy">
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
    <section class="hiring_step">

        <div class="grid  why-row" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="hiring_step_order-1">
                <div>
                    <p class="section-heading">HIRE SEO SPECIALISTS ONLINE WITH EASY STEP</p>
                    <p class="text hiring_step_content">You won't have to deal with the hassles of traditional
                        outsourcing thanks to our
                        novel business model, which gives you complete control over who you work with.</p>
                    <button class="btn hire-btn">Get Qoute</button>
                </div>
            </div>
            <div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/brief.png" alt="hire graphic designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <p class="step-dtl-heading">Talk To Us</p>
                        <p>What sort of graphic design position are you seeking?</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/handpick.png" alt="hire legal process outsourcing" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <p class="step-dtl-heading">Handpick Best Expert</p>
                        <p>We provide screened CVs of the Graphic Designing experts we've chosen.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/team.png" alt="hire graphic designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <p class="step-dtl-heading">Build Your Team</p>
                        <p>Phone or video conference interviews of selected candidates are available. You may assign
                            tests to them.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/going.png" alt="hire graphic designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <p class="step-dtl-heading">Get Going</p>
                        <p>If you are pleased with the results, immediately hire them and get to work.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- content section start -->
    <section class="content_section">

        <div class="content_div">
            <!-- <h2 class="content-heading">What Can an SEO Virtual Assistant Provide for Your Company?</h2> -->
            <p class="text_content">Do you want to delight your customers with meticulously designed, feature-rich, expressive, and intuitive native Android/iOS, Progressive Web Apps, or cross-platform apps but find that doing it in-house is too time-consuming and tedious? Are you wanting to engage a virtual assistant for mobile app development services who is knowledgeable about all of the newest app development tools and technologies and can give highly customized services to strict specifications? If this is the case, you should engage a virtual assistant from Hire Coworker for mobile app development services.</p>
            <p class="text_content">Hire Coworker can connect you with a highly skilled and qualified virtual assistant for mobile app developer who will collaborate with you to fully understand your needs. The virtual assistant for mobile app development will then construct a customized strategy that incorporates all of the newest technology and best practices to produce the mobile app quickly and affordably based on your exact specifications.</p>

        </div>
        <div class="content_div">
            <h2 class="content-heading">App Development Services for Mobile Devices Our virtual assistants offer the following services:</h2>
            <div class="ul_div">
                <ul>
                    <li><strong>Services for Android App Development</strong></li>
                    <p class="text-context">When you employ a virtual assistant from us for mobile app development, the VA will bring substantial knowledge in utilizing the newest technologies to aid businesses in establishing their presence on different devices and platforms. Our mobile app development virtual assistant will offer Android Mobile app development, Android TV app development, Android Tablet app development, and Android Wear app development services.</p>

                    <li><strong>Services for iOS App Development</strong></li>
                    <p class="text-context">Our mobile app development virtual assistant will deliver highly competent and specialized iOS app development services. You can use our VA to create feature-rich, scalable, and full-featured iOS apps, including as iPhone apps, iPad apps, Apple Watch apps, Apple TV apps, and Apple Clips apps.</p>

                    <li><strong>Services for Cross-Platform App Development</strong></li>
                    <p class="text-context">You've come to the correct spot if you're searching for a full-featured mobile application that can operate on numerous platforms so that your users may access the app on the OS of their choice. When you hire a virtual assistant from us for mobile app development, the VA will provide hybrid services such as mobile app development, tablet app development, and television app development.</p>

                    <li><strong>Services for Mobile App Design</strong></li>
                    <p class="text-context">We can provide you with a qualified virtual assistant for a mobile app developer who is skilled in mobile UI/UX design. Our mobile app development virtual assistant is skilled at providing a conversion-driven user experience that leads to increased user retention and conversion.</p>

                    <li><strong>Services for Mobile Backend Development</strong></li>
                    <p class="text-context">We have a highly qualified team of mobile app development specialists that can construct robust and secure backends for integration with an app, applications, or any other third-party systems you require.</p>

                    <li><strong>Services for Mobile App Testing</strong></li>
                    <p class="text-context">We have you covered if you need to employ a virtual assistant for a mobile app developer who can give you competent, dependable, and thorough mobile app testing services. Our testing VAs execute a variety of tests to verify that your mobile apps work smoothly and without errors.</p>
                </ul>
            </div>

        </div>
        <div class="content_div">
            <h2 class="content-heading">Our Virtual Assistants Guide Us Through the Mobile App Development Process</h2>
            <p class="text_content">To assign duties to our virtual assistants, we use a tried-and-true method. Our process is as follows:</p>
            <div class="ul_div">
                <ul>
                    <li><strong>Identifying the Work</strong></li>
                    <p class="text_content">We will determine the duties that you want the virtual assistant for mobile app development to complete.</p>

                    <li><strong>Creating a Process Document</strong></li>
                    <p class="text_content">We will capture your needs as well as any current procedures for future reference.</p>

                    <li><strong>When delegating tasks, ensure that the procedure is valid.</strong></li>
                    <p class="text_content">To ensure that the work runs well, we will complete the activities in a simulated environment.</p>

                    <li><strong>Task Delegation</strong></li>
                    <p class="text_content">Based on their project fit, we will give the necessary work to the virtual assistant for mobile app development.</p>

                    <li><strong>Utilizing Additional Tools to Manage VA Tasks</strong></li>
                    <p class="text_content">If there is space for improvement, our virtual assistant for mobile app development will offer new tools and strategies.</p>

                    <li><strong>Documentation of the Procedure</strong></li>
                    <p class="text_content">For effective record-keeping, the virtual assistant for mobile app development's performance and outputs will be tracked.</p>
                </ul>
            </div>

        </div>
        <div class="content_div">
            <h2 class="content-heading">Hiring a Virtual Assistant for Mobile App Development Saves Money!</h2>
            <p class="text_content">Mobile app development necessitates a particular skill set that can only be provided by an experienced and qualified expert. Several organizations and developers, however, impose expensive fees that are out of reach for many businesses and people. Even if you have a brilliant idea for a mobile app, you may be limited by funding.</p>

        </div>
        <div class="content_div">
            <h2 class="content-heading">Hire Virtual Assistant for Mobile App Development is a great way to save money!</h2>
            <p class="text_content">Hire Coworker is a pioneer in delivering virtual assistants for mobile app development, as well as a variety of other software development services to a diversified and global clientele. Our mobile app development virtual assistants have extensive knowledge and skill in leveraging the most recent mobile app development tools and technology to give highly specialized services. With us on your side, you won't have to worry about administrative headaches or infrastructure expenditures, allowing you to focus on bringing your concept to reality.</p>

            <p class="text_content">Call us for a free consultation and to learn more about our mobile app development virtual assistant.</p>
        </div>





    </section>
    <!-- content section end -->

    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">EXPERTS</p>
        <p class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HIRE OUR BEST DIGITAL MARKETING EXPERT</p>
        <div class="expert-grid">
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>dm/dm-experts-1.jpg" class="expert-image" alt="Hire Digital Marketing Expert" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <p class="expert-name">Edward C.</p>
                    <p class="light-grey">Digital Marketer</p>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">A accomplished IT specialist with more than 7 years experience in the banking, fintech, enterprise, etc.</p>
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
                    <img src="<?= get_img() ?>dm/dm-experts-2.jpg" class="expert-image" alt="Hire SEO/SMO Expert" loading="lazy">
                </div>
                <div class="expert-profile">
                    <p class="expert-name">Syed K.</p>
                    <p class="light-grey">Digital Marketer</p>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.7/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">SEO Executive with 10+ years of experience working on projects that were mission-critical.</p>
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
                    <img src="<?= get_img() ?>dm/dm-expert-3.jpg" class="expert-image" alt="Hire Lead Generation expert" loading="lazy">
                </div>
                <div class="expert-profile">
                    <p class="expert-name">Kristine S.</p>
                    <p class="light-grey">Digital Marketer</p>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.5/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">Social Media Manager at the senior level with nearly 6 years of diverse digital marketing expertise.</p>
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
                    Logo Design
                </div>
                <div class="list_data">
                    $8
                </div>
                <div class="list_data">
                    $60
                </div>
                <div class="list_data">
                    $410
                </div>
                <div class="list_data">
                    $1600
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Photoshop
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
                    Multimedia Animation Expert
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
                    Business Card, Podcast, Brochures Expert
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
                    Web Designer
                </div>
                <div class="list_data">
                    $10
                </div>
                <div class="list_data">
                    $70
                </div>
                <div class="list_data">
                    $480
                </div>
                <div class="list_data">
                    $1920
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Graphic Desiner
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
                    UI/UX Designers
                </div>
                <div class="list_data">
                    $10
                </div>
                <div class="list_data">
                    $70
                </div>
                <div class="list_data">
                    $480
                </div>
                <div class="list_data">
                    $1920
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Mobile App Design
                </div>
                <div class="list_data">
                    $10
                </div>
                <div class="list_data">
                    $70
                </div>
                <div class="list_data">
                    $480
                </div>
                <div class="list_data">
                    $1920
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                    Illustration Expert
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
                    InDesign Expert
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
                        <p class="text">An SEO expert or SEO specialister finds methods, tactics, and procedures to boost the number of website visits and seeks to get a high-ranking placement in search engine results such as Google or Bing. Creating more leads for the organization opens up new avenues for profit and growth.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Why would you hire a virtual SEO assistant?</summary>
                    <div class="faq__content">
                        <p class="text">If you lack the ability to develop keyword-rich SEO material, you will not maximize your Google ranks. Use a virtual assistant to avoid monthly retainer fees and the necessity to engage an onsite person, which will cost you extra. Let your virtual assistant to handle your Search Engine Optimization by examining critical data like as page visits, bounce rates, backlinks, link building activities, and other SEO chores such as writing blog articles and other related material. You may utilize the internet and other platforms to reach your target consumers, giving you the opportunity to expand your company faster.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What are the advantages of hiring an SEO Virtual Assistant?</summary>
                    <div class="faq__content">
                        <p class="text">Expert search engine optimization may significantly boost your ranks. Spend less money since hiring a virtual assistant is more cost-effective over time. You may devote more time to your main tasks.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What is the difference between SEO and SEM?</summary>
                    <div class="faq__content">
                        <p class="text">SEO (search engine optimization) is sometimes used as a catch-all word for SEM (Search engine marketing). SEM, on the other hand, refers to sponsored advertising. As a result, the two words should be distinguished. This is because SEM is about delivering bought traffic to a website, but SEO is about bringing organic traffic to a site and monitoring traffic trends.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What factors contribute to effective SEO?</summary>
                    <div class="faq__content">
                        <p class="text">The primary driver of search engine results is high-quality, authoritative content, and there is no alternative for unique and excellent material. This is especially true while performing SEO marketing. Excellent content for your target audience increases site traffic, increasing the relevance and authority of your site.</p>
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