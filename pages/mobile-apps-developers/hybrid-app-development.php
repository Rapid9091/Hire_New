<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once head_new;?>

    <title>Hybrid App Development</title>

    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">
    <link rel="stylesheet" href="<?= get_css() ?>/logo.css">
    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>dm/ppc.webp");
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
                    Hybrid App Development
                </h1>

                <ul class="landing-ul">
                    <p class="text">Mobile applications have become essential to our daily lives in today's fast-paced digital world. 
                    </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire PPC Specialists
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
        <p class="text_content">Developers are always looking for ways to make apps that are easy to use and have new
            features because more and more people want them.</p><br>

        <p class="text_content">Hybrid app development is a popular solution that combines the benefits of both native
            and web app development.</p><br>

        <p class="text_content"> Mixed app development is a method that combines the benefits of both native and web
            applications. </p><br>

        <p class="text_content">It allows for the creation of mobile experiences that are engaging, versatile, and
            cost-effective. This article provides a detailed explanation of hybrid app development, including its
            benefits, difficulties, and the current state of mobile app platform development.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Understanding Hybrid Apps</h2>
            <p class="text_content">Native apps and web apps are both parts of a hybrid app. They use technologies like
                HTML5, CSS, and JavaScript to create a versatile and flexible app. With this unique blend, developers
                can create one set of code that can be used on different platforms like iOS and Android. This means they
                don't have to write separate code for each forum, making the development process more efficient. Hybrid
                apps are different from traditional native apps because they can work on multiple operating systems.
                This means they are compatible with other devices, making them more versatile.</p><br>

            <p class="text_content">Hybrid apps are great because they can easily use your device's features and
                functions, ensuring you have a smooth and enjoyable experience. Using native APIs, hybrid apps can
                access and utilize features on your devices, such as the camera, GPS, and sensors. This allows the app
                to perform similarly to native applications in terms of functionality and performance. Hybrid apps use
                the web and native technologies to create a user interface that can adjust to different screen sizes and
                orientations. This is achieved by placing web views inside a native container, ensuring the user's
                smooth and responsive experience.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Advantages of Hybrid App Development</h2>
            <p class="text_content"><strong>1) Cost effective:</strong> Creating individual apps for different
                platforms, such as iOS and Android, requires significant resources.
                Hybrid app development is a cost-effective approach that helps developers save money. It involves using
                a single codebase to create apps for different platforms, which makes the development process more
                efficient and reduces expenses.</p><br>
            <p class="text_content"><strong>2) Faster Development:</strong> Hybrid apps are a type of application that
                allows developers to create it once and then use it on multiple platforms. </p><br>

            <p class="text_content">This saves time because they don't have to build separate versions for each
                platform. This approach helps speed up developing and launching apps, allowing for faster updates than
                traditional methods.</p><br>
            <p class="text_content"><strong>3) Cross Platform Compatibility: </strong>One of the main benefits of hybrid
                app development is that it can be used on various platforms without needing significant changes. The
                app's universal compatibility means it can be used by many people, making it available to more users.
            </p><br>
            <p class="text_content"><strong>4) Access to Device Features:</strong>Hybrid apps can use the features of
                your device, like the camera or GPS, by using special tools. This helps to create a more interactive and
                enjoyable experience for you as a user. This integration enables developers to use the unique features
                of different devices easily.</p><br>
            <p class="text_content"><strong>5) Seamless Update:</strong> Hybrid apps have the advantage of updating
                automatically without requiring users to correct them, unlike native apps manually. This convenience
                means you will always have access to the newest features and improvements without trouble.</p><br>
            <p class="text_content"><strong>6) Reduce Time To Market: </strong>Hybrid apps' efficient development
                process means they can be created and launched in less time. This is particularly advantageous for
                businesses that want to quickly introduce their products or services to gain an advantage over their
                competitors.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading"> Challenges in Hybrid App Development:</h2>
            <p class="text_content"> Although hybrid app development has many advantages, it also has some difficulties.
                It is essential to address and overcome these challenges to ensure that your hybrid app is successfully
                deployed and of high quality.</p><br>

            <p class="text_content"><strong>1) Performance:</strong> Hybrid apps, which can imitate the performance of
                native apps quite well, may still encounter performance issues, particularly when it comes to
                applications that heavily rely on graphics. Finding the right balance between improving performance and
                ensuring that your product works well on different platforms is essential.</p>
            <p class="text_content"><strong>2) User Experience:</strong> Hybrid apps are a type of mobile application
                that can imitate the performance of native apps quite well. However, they may still experience
                performance issues, especially for apps heavily relying on graphics. It is essential to balance making
                your product perform better and ensuring it functions well on various platforms.</p>
            <p class="text_content"><strong>3) Limited Native Functionality:</strong> Hybrid apps can use certain
                features of your device through plugins. However, it's important to note that they may not have access
                to all the functionalities that native apps can provide. In certain situations, this can affect what the
                app can do.</p>
            <p class="text_content"><strong>4) Dubbing And Testing:</strong> Debugging hybrid apps across various
                platforms can be challenging because problems can occur differently on different devices. Comprehensive
                testing strategies are essential because they help us find and fix any issues with compatibility or
                performance.</p>
            <p class="text_content"><strong>5) Dependency on Third Party Tools:</strong> Hybrid app development
                typically involves using external frameworks and tools from third-party sources. While these tools can
                speed up the development process, it's important to note that they might also bring in some risks, such
                as vulnerabilities or compatibility issues.</p>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Mobile App Platform Development and Hybrid Apps:</h2>
            <p class="text_content">Developing a mobile app platform is crucial for the success of hybrid apps. These
                platforms are designed to help developers build, launch, and handle hybrid applications by providing the
                necessary infrastructure, tools, and resources. The continuous improvement of mobile app platforms has
                led to the increased popularity of mixed app development.</p><br>

            <p class="text_content">In recent years, solid mobile app platforms have been developed to support the
                creation of hybrid apps.</p><br>

            <p class="text_content"><strong>1) Ionic:</strong> Ionic is a widely used software framework with various
                user interface components and tools. It is designed explicitly for creating hybrid mobile applications.
                By using Angular or React, developers can build applications that are not only visually attractive but
                also packed with a wide range of features.</p>
            <p class="text_content"><strong>2) React Native:</strong> React Native is a popular tool that developers use to create mobile
                    applications. While it is commonly used for building native apps, it also can build hybrid apps.
                    Hybrid apps can run on multiple platforms, such as iOS and Android, using a single codebase. The
                    software's component-based architecture and pre-built user interface components make the development
                    process more efficient and organized.
            </p>
            <p class="text_content"><strong>3) Flutter:</strong> Google's Flutter framework allows developers to create
                apps that work on multiple platforms, such as Android and iOS while ensuring the user interface looks
                and feels the same across all devices. Flutter's "hot reload" feature allows developers to change their
                code and see the updates in real-time without restarting the application. This helps to improve the
                development process by making it faster and more efficient.</p>
            <p class="text_content"><strong>4) PhoneGap/Cordova:</strong> PhoneGap, or Apache Cordova, is a popular
                framework developers use to create hybrid apps. Hybrid apps can work on multiple platforms, such as iOS
                and Android. PhoneGap makes it easier for developers to build these apps by providing tools and
                resources. Our platform allows you to easily connect and use the features of your device, such as a
                camera or GPS, by using plugins. This means you can seamlessly integrate these features into your
                applications.</p>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Conclusion</h2>
            <p class="text_content"> Hybrid app development is a popular choice for businesses and developers because it
                balances affordability and user satisfaction. Hybrid apps combine the best features of both native and
                web applications. They can work on different platforms, access device features, and save money during
                development. Although there may be difficulties, they can be reduced by implementing thoughtful
                planning, improving efficiency, and conducting thorough testing.</p><br>

            <p class="text_content"> Hybrid app development is influenced by various mobile apps platforms like Ionic,
                React Native, Flutter, and PhoneGap/Cordova. These platforms play a significant role in shaping hybrid
                app creation. These platforms allow developers to create advanced hybrid apps that many different types
                of users and devices can use. Mixed app development is becoming more and more critical in mobile
                applications as technology advances. Whether you're a developer wanting to create a flexible app or a
                business looking to save money, hybrid app development is a great option.</p><br>
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
                    Search Engine Optimization (SEO)
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
                    Social Media Handler
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
                    Email Marketing Services
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
                    Local SEO
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
                    Franchise SEO
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
                    Content Marketing Services
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
                    Link Building
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
                    Online Reputation Management (ORM)
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
                    Conversion Rate Optimization (CRO)
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
                    Amazon Marketing Services (AMS)
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
                    PPC Advertisement Services
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
                    Social Media Advertisement Services
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
                    <summary>What can my virtual assistant do for me on social media?</summary>
                    <div class="faq__content">
                        <p class="text">You could log in and manage almost anything. A virtual assistant cannot
                            physically be present in your workplace, but they can log into your numerous social media
                            networks, automate postings, do research, recognize trends, and much more. Ask a VA which
                            hashtags are suitable for your next post. Ask a VA to put up an automatic system for
                            scheduling postings. When you use a VA's experience, there is no limit to what you may do.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Is it difficult to train a virtual assistant for my particular accounts?</summary>
                    <div class="faq__content">
                        <p class="text">No, it shouldn't be hard. There may be a transition phase during which you will
                            want to onboard your VA as precisely as feasible. Tell them exactly what you want. Inform
                            them of the duties you anticipate them to complete. Respond to their inquiries. As time
                            passes, the VA will have more autonomy and you will not have to check in as frequently.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Will my assistant be treated similarly to a full-time employee?</summary>
                    <div class="faq__content">
                        <p class="text">Yes, in some ways. No, in different ways. A virtual assistant might work as a
                            part-time employee or as a full-time employee. They will not be physically present in your
                            firm, but they have the potential to become crucial. Many VAs, on the other hand, discover
                            that they prefer this structure to typical employment since it gives them more authority and
                            influence over their own professional life. And for you, the business, better productivity,
                            and a more prudent budget will help your company succeed.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How effective are virtual assistants at handling social media?</summary>
                    <div class="faq__content">
                        <p class="text">It is conditional. If you hire a general office assistant, you may have to train
                            them. But, if you hire someone with a lot of expertise dealing with numerous social media
                            outlets, you'll see that it might be quite different. Many high-quality VAs originate from
                            the realm of social media and may even have a large presence themselves. In certain
                            circumstances, a VA may be able to give advice and advise you on the best technique. You
                            don't have to restrict yourself to automating the most basic chores like scheduling posts or
                            researching in the background. A social media VA may be much more—if you employ the proper
                            one.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Who is a virtual assistant for?</summary>
                    <div class="faq__content">
                        <p class="text">There is no one solution here, yet many people would benefit from having a VA.
                            Executives, freelancers, entrepreneurs, C-level executives, social media managers, and
                            others are all welcome. Everyone who has a lot of social media chores on their plate and
                            wants to make sure they get more done during the day would benefit from the experience.
                            But we don't want you to believe that you are constrained by these definitions. The reality
                            is that anyone who may profit from having more time in their working days as a result of
                            being able to outsource some of their work to a social media virtual assistant will quickly
                            recognize the benefit.</p>
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
    <?php include_once script_new;?>
</body>

</html>