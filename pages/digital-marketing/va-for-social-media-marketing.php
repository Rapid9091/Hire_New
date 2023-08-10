<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once head_new;?>

    <title>Social Media Advertisement Services</title>

    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">
    <link rel="stylesheet"href="<?= get_css() ?>/logo.css">
    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>dm/google_business.webp");
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
                Social Media Advertisement Services
                </h1>

                <ul class="landing-ul">
                    <p class="text">Having a solid presence on social media is extremely important for businesses to thrive in today's fast-paced digital world. </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Social Media Advertisement Specialists
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
    <p class="text_content">Social media platforms provide a valuable way to engage with the people you want to reach,
        boost brand awareness, and encourage more people to take action, such as purchasing or signing up for your
        services. </p><br>

    <p class="text_content">Many businesses use specialized services to help them create and manage social media
        advertisement campaigns to fully utilize the platforms' capabilities. This document provides information about
        the importance of social media advertising services.</p><br>

    <p class="text_content"> It explains the critical components of these services and offers successful examples. The
        paper specifically focuses on examples of LinkedIn document ads, social media ads in general, and the costs
        associated with advertising on Instagram.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">The Role of Social Media Advertisement Services</h2>
    <p class="text_content">Social media platforms have become incredibly important for marketing in today's digital
        age. These platforms allow businesses to connect with customers and effectively promote their products or
        services. </p><br>

    <p class="text_content">However, effectively using these platforms goes beyond simply posting now and then. It
        requires a thoughtful approach that connects with the people you want to reach. </p><br>
    Social media advertisement services refer to the services that help businesses promote their products or services on
    social media platforms.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">Why Invest in Social Media Advertisement Services?</h2>


    <p class="text_content"><strong>1) Expertise and Creativity:</strong> Our team has the knowledge and skills to
        create engaging content that stands out in the crowded online world. We combine our expertise with creative
        thinking to produce content that captures your audience's attention. Social media advertisement services provide
        a group of experts who are experienced in creating attractive and captivating advertisements that grab
        attention.</p><br>

    <p class="text_content"><strong>2) Targeted Campaigns:</strong> For social media campaigns to be successful, it's
        essential to ensure that the right audience is being reached. These services use data-driven techniques to find
        and focus on the customers who are most likely to be interested in your products or services. This increases the
        chances of turning them into actual customers.</p><br>
    <p class="text_content"><strong>3) Optimization:</strong> Our social media advertisement services constantly monitor
        your campaigns and make adjustments to improve their performance. This involves changing the specific criteria
        used to target your ads, improving the wording of your ads, and adjusting how your budget is allocated to get
        the most return on your investment.</p><br>

    <p class="text_content"><strong>4) Access to Tools:</strong> These services have access to unique tools that can
        analyze and manage your campaigns. These tools provide valuable information about how your campaigns are
        performing. This data is essential because it allows you to make well-informed decisions and improve your
        strategies.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">Components of a Comprehensive Social Media Advertisement Services Document</h2>

    <p class="text_content">A well-structured document for social media advertisement services includes different parts
        that explain the advertising campaign's scope, strategies, and goals. Some critical features include:</p><br>

    <p class="text_content"><strong>1) Campaign Objectives:</strong> Please clearly describe the specific goals you
        intend to accomplish with your campaign. These objectives, such as increasing the number of people visiting your
        website, improving your sales, or making more people aware of your brand, are the main goals that drive the
        entire process.</p><br>

    <p class="text_content"><strong>2) Target Audience:</strong> Identify the particular group of individuals who are
        most likely to have an interest in your product or service. This includes considering their age, gender,
        location, hobbies, and other relevant characteristics. This information helps customize the campaign to connect
        with the specific group of people it is targeting.</p><br>

    <p class="text_content"><strong>3) Platform Selection: </strong>Each social media platform has its unique audience
        that it caters to. Choose the platforms that best match your target audience and goals for your marketing
        campaign. Sure! I can provide you with examples of document ads on LinkedIn and information about social media
        ads and the costs associated with advertising on Instagram. These platforms are popular and effective for
        reaching your target audience.</p><br>

    <p class="text_content"><strong>4) Budget Allocation:</strong> Provide a breakdown of the budget for the campaign,
        including the amount allocated for advertising expenses and any associated service fees. Having a well-defined
        budget means that you have a clear plan for how you will spend your money. This helps you be transparent about
        your financial decisions and ensures you use your resources effectively and efficiently.</p><br>

    <p class="text_content"><strong>5) Ad Formats:</strong> Please provide details about the specific types of
        advertisements you would like to use. This can include options like image ads, video ads, carousel ads, or
        stories. Different formats have their unique strengths and are designed to attract other groups of people.</p><br>
    <p class="text_content"><strong>6) Ad Content:</strong> Please provide a detailed description of the different
        components used in the advertisements, such as the images or videos, the text used in the ads, and any buttons
        or prompts that encourage customers to take action.</p><br>

    <p class="text_content"> Creating compelling and concise content is crucial for capturing the attention and interest
        of your audience. When your content is effective, it grabs the reader's attention and keeps them engaged. </p><br>

    <p class="text_content">You can deliver your message effectively without overwhelming or losing your audience by
        being concise. This combination of compelling and concise content is critical to driving user engagement and
        ensuring your audience stays interested and connected with your brand.</p><br>

    <p class="text_content"><strong>7) Timeline:</strong> Please provide a schedule that outlines the beginning and
        completion dates of the campaign, along with significant milestones and the expected outcomes. Having a
        well-organized schedule helps ensure that tasks and activities are completed on time.</p><br>

    <p class="text_content"><strong>8) Measurement Metrics:</strong> We will use various metrics to assess the success
        of your campaign. These metrics include click-through rates (CTR), which measure the number of times people
        click on your ads, conversion rates, which indicate the percentage of people who take a desired action after
        seeing your ads; engagement metrics, which measure how people interact with your ads and return on ad spend
        (ROAS), which calculates the revenue generated from your ads compared to the amount spent on them.</p><br>

    <p class="text_content"><strong>9) Reporting Frequency:</strong> Please indicate the frequency at which you will
        receive reports on the performance of your campaign. Regular updates are essential because they allow you to
        keep track of your progress and make changes based on the data you have collected.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">LinkedIn Document Ads Examples</h2>

    <p class="text_content">LinkedIn is a popular platform that helps professionals connect. It gives businesses a
        unique chance to connect with influential people who make decisions and professionals in their industry. </p><br>
  

    <p class="text_content">By incorporating document ads on LinkedIn, you can increase your brand's visibility among a
        specific group of people who are interested in your niche. Here are a few examples of LinkedIn document ads that
        demonstrate how practical this approach can be in promoting your business on LinkedIn.</p><br>
    <p class="text_content"><strong>1) Ebook Showcasing Expertise:</strong> A financial consultancy firm has created an
        ebook called "Navigating Tax Reforms for Small Businesses." This ebook provides valuable information and
        guidance on how small businesses can effectively handle tax reforms. Using LinkedIn ads to promote this
        document, they can establish themselves as experts in their industry. At the same time, they provide valuable
        insights and information to other professionals in the field.</p><br>

    <p class="text_content"><strong>2) Case Study Highlighting Success:</strong> Our software company has created a
        detailed case study that showcases how our product successfully improved the efficiency of operations for a
        multinational corporation. Using document ads, they can showcase their success story and build trust with
        potential customers looking for similar solutions.</p><br>

    <p class="text_content"><strong>3) White Paper Addressing Trends:</strong> A marketing agency has created a
        whitepaper document focusing on the latest social media trends for business-to-business marketing purposes. With
        LinkedIn document ads, businesses can connect with other marketers interested in staying informed about the
        latest changes in the industry.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">Social Media Ads: Captivating Diverse Audiences</h2>


    <p class="text_content">Social media ads have much potential on different platforms and LinkedIn. These ads on
        platforms like Facebook, Twitter, and YouTube allow businesses to reach and engage with various people. The
        important thing is to create exciting content that connects with the users of each platform.</p><br>

    <p class="text_content"><strong>1) Facebook Carousel Ads:</strong> An e-commerce store uses carousel ads on Facebook
        to display various of its most popular products. By including multiple items in a single advertisement, they can
        increase the likelihood of customer interaction and sales.</p><br>

    <p class="text_content"><strong>2) Twitter Poll Ads:</strong> A beverage company uses Twitter to ask users to vote
        for their favorite summer drink through a poll. Our interactive approach is designed to involve users and gather
        important information about the market actively.</p><br>

    <p class="text_content"><strong>3) YouTube Video Ads: </strong>An outdoor adventure company has made a captivating
        video advertisement that beautifully showcases their exciting travel experiences. By utilizing YouTube's large
        number of viewers, they can spark a desire for travel and appeal to potential customers.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">Instagram Ad Cost: Navigating Budget Considerations</h2>

    <p class="text_content">Businesses use Instagram as a popular social media platform to connect with younger
        audiences. It has a visually pleasing design that attracts users. Understanding the costs associated with
        advertising on Instagram is essential to manage your budget effectively. </p><br>

    <p class="text_content">The price of Instagram ads can change depending on different factors, like the type of ad
        you choose, the specific audience you want to target, and your goals for your advertising campaign.</p><br>

    <p class="text_content"><strong>1) Feed Ads:</strong> Feed Ads are advertisements that show up in the Instagram
        feeds of users. The cost of these ads can vary between $0.20 to $2 per click. The price depends on factors such
        as who the ads are being shown to and the quality of the ads themselves.</p><br>
    <p class="text_content"><strong>2) Story Ads:</strong> Instagram Story ads are an advertisement you can place on
        Instagram. You will typically be charged between $0.15 and $0.25 when someone clicks on your ad. These ads use
        Stories' engaging format to grab users' attention.</p><br>
    <p class="text_content"><strong>3) Influencer Partnerships: </strong>The cost can vary quite a bit when working with
        influencers for sponsored posts. The price typically depends on how many people the influencer can reach and how
        engaged their audience is. The cost can vary greatly, starting from a few hundred dollars and potentially
        reaching several thousand dollars.</p><br>
    <p class="text_content"><strong>4) Explore Page Ads: </strong>Ads on the Explore page, where users find new content,
        typically cost approximately $0.30 to $0.50 per click.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">Conclusion</h2>

    <p class="text_content">In the constantly changing world of social media, advertisement services help your brand
        connect with people meaningfully and create a strong impact. </p><br>

    <p class="text_content">They act as a guide, helping you navigate through the various platforms and strategies to
        achieve successful engagement. Creating a detailed document for social media advertising services is essential
        for a successful campaign.</p><br>

    <p class="text_content"> It helps in effectively communicating, planning strategically, and achieving measurable
        results. Businesses can use LinkedIn document ads examples to effectively learn how to advertise on the
        platform. They can also explore social media ads to understand how to advertise on various platforms.</p><br>

    <p class="text_content">Additionally, businesses can gain insights into Instagram ad costs to make informed
        decisions about their advertising budget on Instagram. These strategies help companies to make the most of these
        platforms to achieve their marketing goals.</p><br>

    <p class="text_content"> To keep up with the ever-changing digital landscape, utilizing specialized services for
        social media advertising is essential. This will help you stay relevant and thrive in the digital world.</p><br>
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