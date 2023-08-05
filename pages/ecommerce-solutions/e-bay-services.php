<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <?php include_once head_new;?>

    <title>eBay VIRTUAL ASSISTANT SERVICES</title>

    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">
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
                eBay VIRTUAL ASSISTANT SERVICES
                </h1>

                <ul class="landing-ul">
                    <li> Managing Every Part of Your eBay Company as Your Off-Site eBay Expert!
    The services of an eBay virtual assistant have suddenly become almost vital in the current environment, where
    competition is fierce and firms are finding it harder and harder to keep up with the constantly changing marketplace
    rules. You are at the correct area and reading the proper information if you're seeking for a trustworthy and
    knowledgeable eBay specialist who has expertise with all types of eBay processes. We can boost the worth of your
    eBay business right away!<li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire eBay VIRTUAL ASSISTANT Specialists
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
    <section class="hiring_step">

        <div class="grid  why-row" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="hiring_step_order-1">
                <div>
                    <p class="section-heading">HIRE PPC SPECIALISTS ONLINE WITH EASY STEP</p>
                    <p class="text hiring_step_content">You won't have to deal with the hassles of traditional
                        outsourcing thanks to our
                        novel business model, which gives you complete control over who you work with.</p>
                    <button class="btn hire-btn">Get Qoute</button>
                </div>
            </div>
            <div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/brief.png" alt="hire graphic designer"
                            loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <p class="step-dtl-heading">Talk To Us</p>
                        <p>What sort of graphic design position are you seeking?</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/handpick.png"
                            alt="hire legal process outsourcing" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <p class="step-dtl-heading">Handpick Best Expert</p>
                        <p>We provide screened CVs of the Graphic Designing experts we've chosen.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/team.png" alt="hire graphic designer"
                            loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <p class="step-dtl-heading">Build Your Team</p>
                        <p>Phone or video conference interviews of selected candidates are available. You may assign
                            tests to them.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/going.png" alt="hire graphic designer"
                            loading="lazy">
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
     <h2 class="content-heading"> WHAT IS THE PURPOSE OF eBay VIRTUAL ASSISTANT TODAY?</h2>
    <p class="text_content"> We are aware that maintaining your eBay store—and, more importantly, maintaining it
        well—takes time. Even though it might be a little complicated at times, you cannot live without it. The
        administrative, financial, technological, and/or creative components of your company may require your attention
        on a regular day, and they must all be immaculate. Unless you have access to a professionally managed eBay
        listing virtual assistant, managing both the fundamental components of your business and an eBay store is not a
        simple process to do. This enables you to concentrate on your company's main operations while we take care of
        your eBay store.</p><br>

        <p class="text_content">You may need assistance from someone who can manage your eBay business on your behalf whether you are a constantly
    expanding company with a sizable eBay presence or if you are new to the game and want to get off to a flying start.
    The virtual assistant service provided by Hire Coworker is specifically designed to meet these requirements.</p><br>
</div>
</div>
<div class="content_div">
     <h2 class="content-heading"> What services are offered by an eBay virtual assistant?</h2>
    <p class="text_content"> The major responsibility of an eBay assistant is to assist you in running every facet of
        your eBay store. To allocate particular work to different VAs as your firm expands, it might be helpful to
        identify what they can accomplish specifically for your company. At first, you could discover that hiring only
        one virtual assistant to handle everything is simpler and more cost-effective, but any company that is focused
        on expansion will want more staff members in specialized positions.</p><br>

    <p class="text_content">You may engage a virtual assistant to focus on your customer support, data entry, and
        inventory management as your business grows. This virtual assistant can also develop listings exclusively for
        your eBay store. Compared to hiring full-time workers, hiring virtual assistants for these jobs makes it easier
        to grow and modify your staffing solution to meet your current demands.</p><br>

    <p class="text_content">You can delegate the following typical activities to virtual assistants for eBay sellers:
    </p><br>

    <h3> <strong>Inventory and Order Management</strong></h3>

    <p class="text_content">To make sure that your business is always adequately stocked, delegate the maintenance of
        your eBay listings to a virtual assistant. Also, an eBay seller VA may handle order cancellations, inventory
        information, and serve as a point of contact for you and your supplier.</p><br>

    <h3> <strong>Consumer Assistance</strong></h3>

    <p class="text_content">In every organization, customer happiness is essential. Make sure that orders are tracked,
        replacements are made, and refunds are processed properly. To ensure excellent customer service, you may engage
        an eBay virtual assistant to offer chat, phone, text, or email help to your consumers.</p><br>

    <h3> <strong>Reporting and Documentation</strong></h3>

    <p class="text_content">Do you require assistance with creating monthly reports or filing significant documents? You
        may also delegate the duty to an eBay seller virtual assistant.</p><br>

    <h3> <strong>Product Acquisition</strong></h3>

    <p class="text_content">As significant to selling the right items is finding the appropriate ones to sell. Yet, the
        procedure might take a long time. Whether you're dropshipping, performing private label or white label, buying
        wholesale, or engaging in online arbitrage, have your eBay seller VA look over your product possibilities.</p>
    <br>

    <h3> <strong>Listing Enhancement</strong></h3>

    <p class="text_content">By enhancing your product descriptions and adding keywords, an eBay seller may assist you in
        raising your eBay listings' discoverability and allure. You might ask your VA to alter your product images to
        improve their attractiveness to customers.</p><br>

    <h3> <strong>Promotional & Marketing</strong></h3>

    <p class="text_content">In order to reach more clients, marketing is necessary for any business. To assist you with
        this, you might engage a virtual assistant who is skilled in marketing. Your consumers may learn more about your
        items by reading blog posts you produce for your website with the assistance of a VA.</p><br>

    <p class="text_content">Also, you may employ a virtual assistant (VA) to handle your social media marketing and
        contact potential brand-endorsing influencers. A virtual assistant may also assist you with sponsored
        advertisements on Facebook, Instagram, Google, and other platforms, as well as email marketing.</p><br>

    <h3> <strong>Research on products and markets</strong></h3>

    <p class="text_content">You must conduct some market and competitor research in order to expand your eBay business.
        You can also get assistance from a VA for eBay sellers. They might look for more goods for you to market or
        investigate your rivals to make sure your prices are reasonable.</p><br>
</div>
<div class="content_div">
     <h2 class="content-heading"> What abilities are required of eBay virtual assistants?</h2>
    <p class="text_content"> The platform, as well as the equipment and programs required to do the work successfully,
        must be understood by a competent eBay seller VA. They must have a fundamental knowledge of these tools, at the
        very least, so that you can get started as soon as possible, even though you can instruct them on the
        intricacies of how you utilize them.</p><br>

    <p class="text_content">A successful eBay virtual assistant also has to possess a variety of soft skills. Depending
        on the precise responsibilities you're employing a VA for, the most critical talents to search for change. You
        want someone with patience and excellent communication skills if you're employing an eBay VA for customer
        service. You want to hire someone who is well organized and meticulous if you need someone to handle your
        inventory.</p><br>

    If you're employing an eBay virtual assistant to do more specific jobs like content writing, graphic design, SEO, or
    social media management, be sure they have the necessary education and expertise in those areas as well.</p><br>
</div>
<div class="content_div">
     <h2 class="content-heading"> Why Should You Hire An eBay Virtual Assistant?</h2>
    <p class="text_content"> Maintaining an online selling firm is a demanding endeavor that entails a slew of chores
        that are difficult to automate and typically take a long time. Updating and uploading things on eBay while also
        managing other day-to-day activities can be difficult for eBay merchants.</p><br>

    <p class="text_content">An eBay online assistant may help you considerably increase your eBay business by doing
        everything from acquiring goods to preparing it, photographing and selling products, shipping, bookkeeping, and
        maintaining the entire catalog.</p><br>

    <p class="text_content">point- By properly including SEO aspects into your store's listing, an eBay virtual
        assistant or listing optimizer can even aid in enhancing listing visibility. More sales would come organically
        as a result of better listing exposure and higher rankings.</p><br>

    <p class="text_content">point- A specialized virtual assistant for eBay can handle your inventory management and aid
        you in avoiding circumstances that might harm your eBay business, such as running out of goods or having too
        much on hand.</p><br>

    <p class="text_content">point- If your workload is beginning to get excessive, think about making an investment in
        an eBay assistant. You may boost the speed of your growth and purchase more time to concentrate on your core
        company operations by hiring an eBay assistant.</p><br>
</div>
<div class="content_div">
     <h2 class="content-heading"> How a Lister on eBay May Benefit You</h2>
    <p class="text_content"> The first stage is just finding great products to sell on eBay. Other important processes
        in the eBay selling process include organizing, listing, taking photos, writing a compelling description, and
        delivering the items safely.</p><br>

    <p class="text_content">For eBay merchants, listing and updating products may be a major nuisance. That is one of
        the most typical difficulties they run across that prevents them from succeeding on the platform.</p><br>
</div>
<div class="content_div">
     <h2 class="content-heading"> Examples of How an eBay Lister Can Help Your Company</h2>
    <p class="text_content">point- You may generate listings for your items that will be offered online with the aid of
        an eBay lister. Also, he could create product descriptions for complete listings in order to optimize the
        language and make your items more search-friendly.</p><br>

    <p class="text_content">point- The eBay virtual assistant might be able to help you optimize your older listings if
        they aren't already optimized to increase sales and ratings.</p><br>

    <p class="text_content">point- Product photographers may also work as professional eBay listers. He would just need
        a fundamental familiarity with the business and its offerings, coupled with relevant employment experience.</p>
    <br>

    <h3> <strong>Free eBay listings</strong></h3>

    <p class="text_content">Private eBay sellers who haven't chosen the monthly membership yet can list up to 1000 goods
        for no charge each month. You would be charged 35p per item if your inventory is more than 1000 items and you
        would like to list more than that. An expert in eBay listing regulations is known as an eBay Lister.</p><br>
</div>
<div class="content_div">
     <h2 class="content-heading"> Why Use Our Virtual Assistant For eBay Service?</h2>
    <p class="text_content"> Our eBay virtual assistant service has aided clients from a range of business backgrounds,
        including fashion shops offering trendy clothing as well as suppliers of healthcare and medical equipment,
        exercise equipment, jewelry, and books, among others.

    <p class="text_content">A standard eBay virtual assistant service can help you fulfill your immediate business
        demands and lighten your workload, but our eBay virtual assistant service can not only help you lighten your
        workload but also help you grow large and achieve better results with dramatically improved sales. We provide
        whole eBay solutions, including listing creation, inventory control, SEO enhancement, and everything in between.
    </p>
    <p class="text_content">Choosing eBay virtual assistants who aren't sufficiently enthusiastic about eBay isn't
        pleasant. In addition to having a strong enthusiasm for eBay, all of our eBay listing helpers are accomplished
        researchers who have undergone a rigorous screening process and possess practical understanding of the eBay
        marketplace, regulations, and policies. We make sure to give them training on Magento, Amazon, and eBay
        listings.</p>
</div>
<div class="content_div">
     <h2 class="content-heading"> Start Your eBay Selling Company Today</h2>
    <p class="text_content"> Moreover, we employ and educate customer service agents to assist with effective and smooth
        email handling. We begin training your representative as soon as you provide us all the paperwork we need for
        your business. Following training, he would be an expert at responding to consumer inquiries without our or the
        client's assistance.</p><br>

    <p class="text_content">Our helpful staff will actively assess your eBay business needs and assist you in expanding
        your eBay business. To start an eBay selling business and hire eBay sellers, get in touch with us.</p><br>

    <p class="text_content">Want to reduce your labor costs by up to 70%? Hire a professional eBay employee to handle
        only your online company. Our dedicated staff member package includes an adept and trustworthy eBay assistant
        who will help you establish yourself as a successful eBay merchant and improve your online business using
        cutting-edge SEO concepts.</p><br>
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
                        <p class="text">You could log in and manage almost anything. A virtual assistant cannot physically be present in your workplace, but they can log into your numerous social media networks, automate postings, do research, recognize trends, and much more. Ask a VA which hashtags are suitable for your next post. Ask a VA to put up an automatic system for scheduling postings. When you use a VA's experience, there is no limit to what you may do.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Is it difficult to train a virtual assistant for my particular accounts?</summary>
                    <div class="faq__content">
                        <p class="text">No, it shouldn't be hard. There may be a transition phase during which you will want to onboard your VA as precisely as feasible. Tell them exactly what you want. Inform them of the duties you anticipate them to complete. Respond to their inquiries. As time passes, the VA will have more autonomy and you will not have to check in as frequently.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Will my assistant be treated similarly to a full-time employee?</summary>
                    <div class="faq__content">
                        <p class="text">Yes, in some ways. No, in different ways. A virtual assistant might work as a part-time employee or as a full-time employee. They will not be physically present in your firm, but they have the potential to become crucial. Many VAs, on the other hand, discover that they prefer this structure to typical employment since it gives them more authority and influence over their own professional life. And for you, the business, better productivity, and a more prudent budget will help your company succeed.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How effective are virtual assistants at handling social media?</summary>
                    <div class="faq__content">
                        <p class="text">It is conditional. If you hire a general office assistant, you may have to train them. But, if you hire someone with a lot of expertise dealing with numerous social media outlets, you'll see that it might be quite different. Many high-quality VAs originate from the realm of social media and may even have a large presence themselves. In certain circumstances, a VA may be able to give advice and advise you on the best technique. You don't have to restrict yourself to automating the most basic chores like scheduling posts or researching in the background. A social media VA may be much more—if you employ the proper one.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Who is a virtual assistant for?</summary>
                    <div class="faq__content">
                        <p class="text">There is no one solution here, yet many people would benefit from having a VA. Executives, freelancers, entrepreneurs, C-level executives, social media managers, and others are all welcome. Everyone who has a lot of social media chores on their plate and wants to make sure they get more done during the day would benefit from the experience.
                           But we don't want you to believe that you are constrained by these definitions. The reality is that anyone who may profit from having more time in their working days as a result of being able to outsource some of their work to a social media virtual assistant will quickly recognize the benefit.</p>
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