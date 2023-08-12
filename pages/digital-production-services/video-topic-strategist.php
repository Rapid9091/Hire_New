<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once head_new; ?>

    <title>Video Topic Strategist</title>


    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">
    <link rel="stylesheet" href="<?= get_css() ?>/logo.css">
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
                    Video Topic Strategist
                </h1>

                <ul class="landing-ul">
                    <li class="text">Video is critical in today's fast-paced digital world. It has much influence and
                        can make a significant impact.

                    </li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Video Topic Strategist Specialists
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



        <p class="text_content">Businesses are using video production services to make interesting videos that grab people's
            attention, provide helpful information, and convince them to take action.</p><br>
        
        <p class="text_content"> This is because people's attention spans are getting shorter, and there is much competition
            online. A video production house is a company that helps turn creative ideas into visually appealing and powerful
            videos. </p><br>
        
        <p class="text_content">These videos are designed to make your brand more recognizable and help build customer loyalty.
            This article will discuss the importance of video production services and how they can benefit your brand in the
            competitive business world.</p><br>
        
        <p class="text_content"> We will also explore the role of a video production house as a valuable partner for your brand.
        </p><br>
        <h2 class="content-heading">Understanding Video Production Services</h2>
        <p class="text_content">Video production services refer to various professional services focused on creating top-notch
            video content for multiple purposes. A video production house is a company that specializes in creating videos. </p>
        <br>
        
        <p class="text_content">They have the knowledge and tools to handle all stages of video production, including coming up
            with ideas, filming, editing, and adding finishing touches.Our services are created to cater to a diverse range of
            customers and their specific needs. </p><br>
        
        <p class="text_content">This includes businesses of all sizes, marketing agencies looking to enhance their campaigns,
            filmmakers seeking professional assistance, and YouTubers looking to improve their content. We strive to provide
            solutions that cater to each customer's unique requirements.</p><br>
        <h2 class="content-heading">The Process of Video Production</h2>
        
        <p class="text_content">Creating an engaging video requires a careful and detailed process to ensure the result achieves
            the intended goals. The typical process includes the following steps:</p>
        
        <p class="text_content"><strong>1)Pre-Production: </strong>This is the initial stage of the project, where all the
            necessary groundwork is done to set the project in motion. Our process begins with generating creative ideas and
            then developing a script or storyboard to outline the project. We also plan the shoot's logistics, including finding
            suitable locations and casting talented individuals. Additionally, we organize all the necessary equipment for a
            successful production.</p><br>
        
        <p class="text_content"><strong>2)Production: </strong>During the production phase, the filming or shooting of the
            project occurs. The video production crew records the footage planned for the project. This can include different
            types of content such as scenes, interviews, product demonstrations, or anything significant for the project.</p>
        <br>
        
        <p class="text_content"><strong>3)Post-Production: </strong>Post-production is the stage where the captured footage is
            edited, improved, and polished to create the final product. In this stage, we take your video footage and make it
            look its best. We adjust the colors, edit the sound, and add special effects to enhance the overall quality. We also
            include music or voiceovers to make your video more engaging and professional.</p><br>
        
        <p class="text_content"><strong>4)Finalization:</strong> After all the editing, the video is processed to create the
            final version. After the video is created, it goes through a review process where any needed changes are made. Once
            these revisions are completed, the video will be shared or distributed.</p><br>
        <h2 class="content-heading">Choosing the Right Video Production Services</h2>
        
        
        <p class="text_content">When choosing a video production company to bring your ideas to reality, there are a few
            important factors to keep in mind:</p>
        
        <p class="text_content"><strong>1)Experience and Expertise:</strong> When searching for a company, it's essential to
            consider their knowledge and expertise. Look for a company with a history of success and a wide range of projects
            they have worked on. Experience means someone has gained the necessary skills and knowledge to manage projects and
            overcome challenges.</p><br>
        
        <p class="text_content"><strong>2)Quality: </strong>Quality is essential and cannot be compromised or negotiated. The
            production house needs top-quality equipment and a talented team to create high-quality content.</p><br>
        
        <p class="text_content"><strong>3)Creativity:</strong> Our team of creative professionals can help bring your ideas to
            life and elevate them to new heights. Select a production company that can offer innovative solutions and distinct
            storytelling methods.</p><br>
        
        <p class="text_content"><strong>4)Communication:</strong> It is essential to have effective communication at every stage
            of the production process. The production house should listen to your ideas, inform you about progress, and include
            your feedback.</p><br>
        
        
        
        
        
        
        <h2 class="content-heading">Pre-Production: Laying the Foundation</h2>
        
        
        <p class="text_content">The pre-production phase is an important step that helps ensure a smooth and successful video
            shoot. Video production includes several essential steps to bring your ideas to life:</p>
        <div class=”ul_div”>
            <ul>
        
                <li>We conceptualize your ideas and create a plan for the video.</li>
                <li>We develop scripts and storyboards to outline the content and structure.</li>
                <li>We search for suitable locations to film and carefully plan the logistics of the shoot, such as scheduling
                    and equipment needs.</li>
            </ul>
        </div>
        
        <p class="text_content">These steps ensure a smooth and successful video production process. During this critical stage,
            we ensure that every aspect of the video is consistent with the brand's identity and communicates its intended
            message. Video production services are experts in managing all the necessary tasks to create a video. They pay close
            attention to detail and carefully plan everything to ensure the shooting process is well-organized and smooth.</p>
        <br>
        <h2 class="content-heading">Production: Bringing Ideas to Life</h2>
        
        <p class="text_content">Production is the stage where all the amazing things come together to create the final product.
            This is the exciting stage where the filming begins, with cameras capturing the action, lights creating the perfect
            atmosphere, and talented actors bringing the story to life. </p><br>
        
        
        <p class="text_content">Professional video production services have advanced equipment and an expert team that can
            create videos with excellent visuals and sound quality. During the production phase, whether for a live-action shoot
            or an animation project, our primary goal is to bring creative ideas to life. We work on turning these concepts into
            tangible and visual experiences for you to enjoy.</p><br>
        
        <h2 class="content-heading">Post-Production: Crafting the Final Product</h2>
        
        
        <p class="text_content">Once the filming is complete, the next step is to assemble all the footage in post-production.
            In this stage, we will work on editing your video, adding special effects to make it more engaging, improving the
            audio quality, and ensuring the overall look of the video is visually appealing. Our talented video editors put much
            effort into creating a polished and captivating video that meets your specific goals and requirements.</p><br>
        
        <h2 class="content-heading">The Role of a Video Production House</h2>
        
        
        <p class="text_content">A video production house is a specialized company that helps turn your video ideas into reality.
            Our company is a highly skilled and technologically advanced team that specializes in creating visually impressive
            and impactful videos. </p><br>
        
        
        <p class="text_content">We bring together talented individuals, cutting-edge technology, and extensive expertise to
            produce exceptional video content. These houses typically have a group of skilled individuals, such as directors,
            cinematographers, editors, animators, and sound engineers, who work together to produce videos that connect with the
            intended viewers.</p><br>
        
        <h2 class="content-heading">Why Invest in Professional Video Production Services?</h2>
        
        
        <p class="text_content"><strong>1)Enhanced Brand Identity: </strong>Our expertly produced videos help showcase your
            brand's values and identity in a way that leaves a lasting impression on viewers.
        </p><br>
        
        
        <p class="text_content"><strong>2)Enhanced Brand Identity: </strong>Engagement and Conversion: When you have
            high-quality videos, they grab people's attention and keep them interested. This makes them more likely to buy a
            product or sign up for a subscription.
        </p><br>
        
        <p class="text_content"><strong>3)Access to Talent and Resources:</strong> Video production houses have a network of
            highly skilled professionals and state-of-the-art equipment, which allows them to deliver exceptional results.
        </p><br>
        
        
        <p class="text_content"><strong>4)Storytelling Power:</strong> Professional videos can tell engaging stories that make
            people feel emotions and create strong connections with the audience.
        </p><br>
        
        
        <p class="text_content"><strong>5)Versatility:</strong> Our video production services are designed to meet various
            needs. Whether you're looking to create educational videos or entertaining commercials, we can help you achieve your
            marketing goals.
        </p><br>
        
        <h2 class="content-heading">Conclusion</h2>
        
        <p class="text_content">Video production services play a crucial role in the ever-changing field of digital marketing by
            helping businesses effectively communicate their messages through engaging videos. </p><br>
        
        
        <p class="text_content">A video production house is a company that works closely with businesses to turn their ideas
            into visually captivating stories that connect with viewers. Investing in professional video production services
            means improving your brand, increasing customer engagement, and, ultimately, growing your business. </p><br>
        
        
        <p class="text_content">As technology progresses, it has become easier and more effective to use video as a powerful
            tool. Whether you're a new business trying to make a significant impact or an existing brand wanting to stay
            current, using video production services can help you create a more visually appealing future for your business.</p>
        <br>
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
                    Video Topic Strategist
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