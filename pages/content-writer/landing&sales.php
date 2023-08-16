<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once head_new;?>

    <title>Landing & Sales Pages</title>

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
                    Landing & Sales Pages
                </h1>

                <ul class="landing-ul">
                    <p class="text">In the vast and competitive world of the internet, where people's attention is
                        easily diverted, Landing & Sales Pages play a crucial role in capturing and retaining customers.
                        These pages are like a virtual introduction - the initial interaction between a business and its
                        potential customers. These pages are designed with great skill to turn someone browsing into a
                        genuine buyer quickly.
                    </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Landing & Sales Pages Specialists
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
            <h2 class="content-heading">The Dynamics of Landing & Sales Pages</h2>
            <p class="text_content">Landing & Sales Pages are like a middleman between a marketing campaign and getting
                the results you want. They help connect the two by providing a platform where potential customers can
                take action and purchase or complete a desired action. The "landing sales" journey starts when a user
                clicks on an advertisement or search result. It ends with a transaction or a specific activity, such as
                signing up for a newsletter or downloading an ebook. These pages can make a lasting impression on users.
                They can influence their actions and choices when it comes to making purchases.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Key Components of High-Impact Landing & Sales Pages</h2>

            <p class="text_content">A compelling Landing & Sales Page is like a well-coordinated performance where
                different elements gather your attention, provide information, and convince you to take action. The
                combination of eye-catching headlines, short but persuasive text, captivating images, well-placed
                buttons to take action, and evidence from other customers all work together to create an engaging
                experience that motivates users to act.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Mastering the Art of Persuasion</h2>
            <p class="text_content">The key to creating effective Landing & Sales Pages is using persuasion techniques.
                Every aspect of the website, including the words, images, and design elements, is carefully chosen to
                help users understand what they must do next. By understanding what the user wants and emphasizing how
                our product or service can help them, these pages appeal to the user's thought process, making them feel
                more confident and eager to make a decision.</p><br>

        </div>
        <div class="content_div">
            <h2 class="content-heading">Visual Appeal: A Catalyst for Conversion</h2>

            <p class="text_content">The saying "a picture is worth a thousand words" is particularly relevant regarding
                Landing & Sales Pages. Using visually appealing elements such as high-quality images and videos,
                carefully chosen color schemes, and typography can instantly create an emotional connection with the
                viewer. How things look should match the brand's personality and customers' expectations, making the
                brand more trustworthy and exciting.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Mobile Optimization: Meeting Users at Their Fingertips</h2>
            <p class="text_content">In today's world, where smartphones and tablets are widely used, optimizing Landing
                & Sales Pages for mobile devices is essential. A responsive design allows users to easily access
                websites and pages on different devices, ensuring a smooth and consistent experience. When thinking
                about "sales landing page examples," it's essential to consider every aspect of the mobile experience.
                This includes factors like how quickly the page loads and how easy it is to navigate.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Driving Sales: Call to Action (CTA) Unleashed</h2>
            <p class="text_content">The CTA, or Call-to-Action, is essential to a well-designed Landing & Sales Page. It
                serves as the climax or highlight of the page, prompting customers to take a specific action. This is
                the point where potential customers are encouraged to make a decision or do something specific. The
                language, placement, and design of the CTA (Call-to-Action) should be carefully created to help users
                understand what to do without feeling confused or overwhelmed. Using action verbs and creating a sense
                of urgency can help motivate hesitant visitors to make a purchase or take action.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Strategies for Crafting Effective Landing & Sales Pages</h2>
            <p class="text_content"><strong>Segmentation and Personalization:</strong> Customize your landing and sales pages to
                    cater to specific groups of people with different interests and needs. Personalized content is
                    designed to cater specifically to visitors' needs and preferences. This means that the content is
                    tailored to match what each visitor is looking for, which can help increase the chances of them
                    taking action, such as making a purchase or signing up for a service.</p><br>

            <p class="text_content"><strong>A/B Testing:</strong> Using A/B testing, you can continuously try out different
                    elements like headlines, call-to-action buttons, visuals, and layouts. This allows you to compare
                    and analyze the performance of these elements to see which ones work best for your website or
                    marketing campaigns. This method uses data to help you find the best combinations that yield the
                    most effective results.</p><br>

            <p class="text_content"><strong>Minimalist Design:</strong> A clutter-free design means there is little going on
                    visually, which can help you focus on the critical content and call-to-action (CTA). Ample white
                    space refers to having enough space around the range, which can also help draw your attention to
                    what's essential. It is crucial to avoid any distractions that are not necessary.</p><br>

            <p class="text_content"><strong>Emotional Appeals:</strong> Engage with your audience by appealing to their emotions.
                    To effectively engage your audience and inspire them to take action, it's essential to use relatable
                    stories, captivating visuals, and persuasive language. By sharing stories people can connect with,
                    you create an emotional connection that motivates them to act. </p><br>

            <p class="text_content">Additionally, compelling visuals help capture their attention and make your message
                more memorable. Lastly, persuasive language helps to influence their decision-making process and
                encourages them to take the desired action. Combining these elements allows you to create a powerful and
                impactful message that drives action.</p><br>

            <p class="text_content"><strong>Progressive Disclosure:</strong> When creating longer sales pages, it can be helpful
                    to use a technique called progressive disclosure. This means gradually revealing information to the
                    customer instead of overwhelming them with everything at once.

                    <p class="text_content">The website design follows a strategic approach by providing visitors with a
                        concise summary at the beginning and gradually presenting more detailed information as they
                        scroll down. This allows for a smooth and engaging user experience, ensuring visitors can
                        quickly grasp the main points before delving into the specifics.</p><br>

        </div>
        <div class="content_div">
            <h2 class="content-heading">Harnessing the Power of Social Proof</h2>
            <p class="text_content">Humans naturally have a strong desire to connect with others, which can be used to
                our advantage when designing Landing & Sales Pages. By incorporating social proof, evidence that other
                people have had positive experiences with a product or service, we can effectively tap into this social
                aspect and increase trust and credibility among potential customers. Customer reviews, testimonials,
                case studies, and trust badges are essential tools that help build trust and confirm a potential buyer's
                choice.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">SEO and Landing & Sales Pages: A Symbiotic Relationship</h2>
            <p class="text_content">A Landing & Sales Page that is beautifully designed may only serve its purpose
                effectively if customers can easily find it. Search engine optimization (SEO) is an essential strategy
                that helps improve the visibility and ranking of a website on search engine results pages. By
                integrating relevant keywords, optimizing meta tags, and ensuring fast load times, your website will
                rank higher in search results and provide a better experience for your visitors.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">A/B Testing: Refining for Excellence</h2>
            <p class="text_content">A/B testing is a method that helps Landing & Sales Pages improve over time by
                allowing them to make changes and see what works best. It recognizes that perfection constantly changes
                and aims to keep up with it. Businesses can learn much about what works best for their website by making
                different page versions and testing them with real users. This helps them understand what elements of
                the page are most effective and appealing to their customers. This iterative process allows marketers to
                use data to make informed decisions and optimize each element for the best possible results.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Sales Page Examples That Set the Bar</h2>
            <h3><strong>Example 1:InnovateTech's Ultimate Productivity Bundle.</strong></h3>
            <p class="text_content">Learn about InnovateTech's Landing & Sales Page, which combines attractive visuals,
                compelling text, and a clear call-to-action to create a seamless and practical user experience. This
                page is designed to help customers understand how our product can solve their problems and provide
                examples of how it can be used in real-life situations. It aims to convince visitors to become loyal
                customers.</p><br>
            <h3><strong>Example 2: "EcoLife: Sustainable Living Made Simple"</strong></h3>
            <p class="text_content">EcoLife's Landing & Sales Page demonstrates how a brand that cares about the
                environment can effectively use social proof to build trust and credibility. The page uses customer
                testimonials, before-and-after visuals, and a compelling story to encourage visitors to buy a product
                and become part of a sustainable lifestyle movement.</p><br>

        </div>
        <div class="content_div">
            <h2 class="content-heading"> Conclusion</h2>
            <p class="text_content">Landing & Sales Pages are essential tools in the digital world that help businesses
                succeed online. They play a crucial role in shaping a brand's success by attracting customers and
                driving sales. </p><br>
            <p class="text_content">By using techniques from psychology to influence people's decisions, creating
                visually appealing designs, making sure the website works well on mobile devices, and showcasing
                positive feedback from customers, businesses can create web pages that connect with users and encourage
                them to take action, such as making a purchase or signing up. </p><br>

            <p class="text_content">A Landing & Sales Page is more than just a website. It is a carefully crafted page
                designed to convince potential customers to become loyal supporters of your brand.
            </p><br>
        </div>
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