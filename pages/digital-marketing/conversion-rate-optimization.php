<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once head_new;?>

    <title> Conversion Rate Optimization </title>

    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">
    <link rel="stylesheet" href="<?= get_css() ?>/logo.css">
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
                Conversion Rate Optimization 
                </h1>

                <ul class="landing-ul">
                    <p class="text">In today's digital world, websites are critical for businesses to succeed. One strategy that companies use to improve their online performance is called conversion rate optimization. </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire  Conversion Rate Optimization Specialists
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
            <p class="text_content">This strategy helps companies to make their websites more effective at turning
                visitors into customers. </p><br>

            <p class="text_content">Conversion rate optimization, also known as CRO, is a method that uses data to help
                increase the number of people who complete specific actions on a website.</p><br>

            <p class="text_content"> These actions include buying a product, filling out a form, or signing up for a
                newsletter. In this detailed guide, we will explore the concept of conversion rate optimization. </p>
            <br>

            <p class="text_content">We will explain why it is essential for websites and provide information on the
                different methods and best practices that can be used to achieve higher conversion rates.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Understanding Conversion Rate Optimization</h2>
            <p class="text_content">Conversion rate optimization is a systematic approach to improving a website's
                performance. It involves examining and enhancing different aspects of the website to persuade visitors
                to take desired actions that align with the website's objectives.</p><br>

            <p class="text_content"> Our main goal is to ensure you have the best possible experience and get the most
                value every time you visit us. Websites aim to turn people who casually browse into active customers,
                and Conversion Rate Optimisation (CRO) is the process that helps make this transformation happen.</p>
            <br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Why Conversion Rate Optimization Matters</h2>
            <p class="text_content">Concentrating on conversion rate optimization is critical in today's highly
                competitive online landscape. </p><br>

            <p class="text_content">This means improving your website's or online platform's effectiveness in turning
                visitors into customers.</p><br>

            <p class="text_content"> A high conversion rate means a website convinces its visitors to take a desired
                action, such as purchasing or signing up for a service.</p><br>

            <p class="text_content"> This is important because it directly affects the website's overall success and
                profitability. Now, let's examine why Conversion Rate Optimisation (CRO) is essential for your business.
            </p><br>
            <p class="text_content"><strong>1)Increased Revenue: </strong>A higher conversion rate means that more
                people who visit your website or interact with your business are taking the desired action, such as
                making a purchase or signing up for a service. This ultimately leads to an increase in revenue for your
                business. By adjusting the factors that affect how users behave on websites, companies can encourage
                more visitors to take specific actions, ultimately resulting in increased sales and profits.</p><br>

            <p class="text_content"><strong>2)Cost-efficiency:</strong> Cost-efficiency refers to the ability of a
                website to maximize its existing traffic without spending a lot on marketing. Conversion rate
                optimization helps websites achieve this by making the most out of their visitors. Instead of spending
                money on attracting new visitors, CRO (Conversion Rate Optimisation) focuses on improving the process of
                turning existing visitors into customers.</p><br>

            <p class="text_content"><strong>3)Enhanced User Experience:</strong> CRO, or Conversion Rate Optimisation,
                focuses on improving how users navigate a website or app. This involves analyzing user journeys to
                ensure visitors have a smooth and enjoyable experience while interacting with the platform. This helps
                customers make purchases right away but also helps build a strong relationship with them over time.</p>
            <br>

            <p class="text_content"><strong>4)Informed Decision-Making:</strong> CRO (Conversion Rate Optimisation)
                helps businesses make better decisions by analyzing data and conducting experiments. This process helps
                us understand what users like and how they behave. This approach uses data to help websites make better
                decisions about how they look, what they say, and how they work.</p><br>

            <p class="text_content"><strong>5)Competitive Advantage:</strong> Having a competitive advantage means that
                websites that focus on conversion rate optimization can outperform their competitors. They establish
                themselves as industry leaders by consistently providing a better user experience and achieving higher
                conversion rates.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Key Elements of Conversion Rate Optimization</h2>
            <p class="text_content">To improve a website's conversion rate, several essential factors need to be
                considered. Let's examine these components and understand how they help increase the number of customers
                who complete a desired action, such as purchasing or signing up.</p><br>

            <p class="text_content"><strong>1)Compelling Call-to-Actions (CTAs): </strong>CTAs that work effectively
                direct users to the required actions. Websites can urge users to take the next step by employing
                compelling text, strategic placement, and visually appealing design.</p><br>

            <p class="text_content"><strong>2)Engaging Landing Pages: </strong> Landing pages are critical for
                attracting visitors' interest and converting them. Landing pages that have been optimized have relevant
                content, a clear value proposition, and a smooth navigation flow.</p><br>

            <p class="text_content"><strong>3)User-Friendly Navigation:</strong> Visitors can locate what they're
                seeking thanks to intuitive website navigation. A well-organized menu layout and user-friendly search
                capability enhance the overall user experience.</p><br>

            <p class="text_content"><strong>4)Clear and Concise Messaging:</strong> It is critical for conversion to
                communicate the value of products or services clearly and straightforwardly. Websites should have catchy
                headlines, concise product descriptions, and persuasive copywriting.</p><br>

            <p class="text_content"><strong>5)Trust Signals:</strong> Conversion requires the development of trust. For
                example, customer testimonials, security badges, and guarantees to instill confidence in visitors and
                alleviate anxieties.</p><br>

            <p class="text_content"><strong>6)Optimized Forms:</strong>Long or complicated forms may discourage users
                from completing conversions. Streamlining states by reducing fields and utilizing autofill capabilities
                can significantly enhance completion rates.</p><br>

            <p class="text_content"><strong>7)Mobile Responsiveness: </strong> With the increased use of mobile devices,
                websites must provide a consistent experience across all screen sizes. Mobile-responsive design is vital
                for converting mobile users.</p><br>

            <p class="text_content"><strong>8)Page Load Speed: </strong>Pages that take too long to load can result in
                high bounce rates and abandoned conversions. Page load speed optimization strategies like image
                compression and browser caching are critical for retaining visitors.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Conversion Rate Optimization Methodologies</h2>
            <p class="text_content">To improve your conversion rate, following a step-by-step process that includes
                ongoing testing, analysis, and making adjustments based on the results is essential. </p><br>

            <p class="text_content">This systematic approach helps you optimize your website or marketing strategies for
                better conversion rates. Two commonly used methods for testing and comparing different versions of a
                website or app are A/B testing and multivariate testing.</p><br>

            <p class="text_content"><strong>1)A/B Testing:</strong> A/B testing is a method for creating two webpage
                versions. We make a small change to one element, like the color of a button or the headline. Then, we
                compare the performance of both versions to see which one performs better. </p><br>

            When visitors visit our website, they are randomly divided into two groups. We then track how they interact
            with the different versions of our website. This method helps determine which version of a product or
            service is more effective in generating customer conversions or desired actions.</p><br>

            <p class="text_content"><strong>2)Multivariate Testing:</strong> Multivariate testing is a method used to
                test different variations of various elements on a webpage at the same time. It is a more advanced
                approach compared to other testing methods. This method helps us understand how different combinations
                of elements affect the overall number of conversions.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Best Practices for Conversion Rate Optimization</h2>
            <p class="text_content">To maximize the effectiveness of your conversion rate optimization efforts, it is
                recommended that websites adhere to the following best practices:</p><br>

            <p class="text_content"><strong>1)Set Clear Goals:</strong> Please provide clear and quantifiable objectives
                for improving your conversion rate through optimization efforts. Having clear goals is essential because
                it helps you know what you want to achieve. If you wish to sell more products, get more people
                interested in your business, or have more people sign up for something, having clear objectives helps
                you stay focused on what you need to do to reach those goals.</p><br>

            <p class="text_content"><strong>2)Understand Your Audience: </strong>By deeply understanding your target
                audience's preferences, behaviors, and pain points, you will better understand what they like, how they
                act, and what challenges they face. Customize your Conversion Rate Optimisation (CRO) strategies to
                match your customers' specific needs and motivations.</p><br>

            <p class="text_content"><strong>3)Prioritize Testing:</strong>We recommend regularly conducting A/B or
                multivariate tests to help identify areas for improvement. These tests involve comparing different
                webpage or marketing campaign versions to see which performs better. By doing this, you can gather
                valuable data and insights that can guide you in improving your business. To accurately measure the
                impact of changes, it is recommended to test one element at a time. This means changing a single piece
                and observing the resulting impact rather than making multiple changes simultaneously. By isolating each
                aspect, you can better understand its effect on the overall outcome.</p><br>

            <p class="text_content"><strong>4)Analyze Data:</strong>Use analytics tools to track how users behave on
                your website or app. This will help you gather valuable information and understand their preferences and
                actions. Analyze the data to find recurring patterns, trends, and points where users tend to leave the
                conversion process.</p><br>

            <p class="text_content"><strong>5)Iterative Approach:</strong> Conversion rate optimization is a continuous
                process that involves improving your website or online platform to increase the percentage of visitors
                who take a desired action, such as purchasing or filling out a form. Continuously enhance your
                strategies by using data and testing to make informed decisions.</p><br>

            <p class="text_content"><strong>6)Consistent Branding: </strong>To establish trust and strengthen your
                identity, it is essential to keep your branding consistent throughout your website. This means using the
                same colors, fonts, and design elements across all pages. Doing so creates a cohesive and recognizable
                brand that customers can quickly identify and trust. Consistency in design, messaging, and tone means
                that everything looks and feels the same across different product or service parts. This helps create a
                smooth and unified experience for the user.</p><br>

            <p class="text_content"><strong>7)Mobile-Friendly Design:</strong> To cater to the growing number of people
                using mobile devices, ensuring your website is designed and adjusted to work well on mobile phones and
                tablets is essential. This will provide a better user experience for your customers who access your
                website through their mobile devices. Having a smooth and uninterrupted experience on your mobile device
                can help increase the number of people who complete a desired action, such as making a purchase or
                signing up for a service.</p><br>

            <p class="text_content"><strong>8)Personalization:</strong> Create customized experiences for users by
                analyzing their behavior and preferences. Customizing the content and suggestions can significantly
                improve how users interact with your website or app and increase the likelihood of them making a
                purchase or taking a desired action.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Conclusion</h2>
            <p class="text_content">Conversion rate optimization emerges as a vital technique to achieve success in the
                dynamic world of online companies. Websites can dramatically improve their conversion rates and achieve
                their goals by methodically analyzing user behavior, testing various aspects, and continuously improving
                techniques. Conversion rate optimization is more than just a measure; it is a comprehensive methodology
                that enables websites to provide excellent user experiences, create trust, and achieve long-term
                success. As the digital world evolves, websites that want to compete in a competitive market must
                embrace conversion rate optimization.</p><br>

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