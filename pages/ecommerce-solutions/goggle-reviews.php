<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once head_new; ?>

    <title>Google Reviews Services</title>


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
                Google Reviews Services

                </h1>

                <ul class="landing-ul">
                    <li class="text">To stay ahead of the competition, e-commerce businesses must use every strategy available to them.,<br>You can utilize the Google Review Service feature as a helpful marketing tool.</li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Google Reviews Specialists
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
    <h2 class="content-heading"> What are Google Reviews Services?</h2>
    <p class="text_content">Google Customer Reviews is a valuable service that allows businesses to collect reviews
        directly on their website</p><br>

    <p class="text_content">In order to take part in Google Customer Reviews, it is necessary for you to have a Google
        Merchant account.</p><br>

    <p class="text_content">Google assists in gathering customer feedback, relieving you of the burden of doing it all
        yourself. </p><br>

    <p class="text_content">To facilitate this process, Google will email your customers, inquiring if they would like
        to share their feedback regarding their interaction with your brand. After customers decide to take part, they
        will receive a brief survey form to complete</p><br>

    <p class="text_content">You can showcase the feedback and ratings given by customers in surveys on your website and
        other marketing channels. Seller ratings are a feature Google provides to help customers make informed decisions
        when shopping online</p><br>

    <p class="text_content">These ratings are based on various factors, including the average star rating and the number
        of ratings merchants receive. They serve as a helpful tool for customers to gauge the reputation and reliability
        of sellers on Google</p><br>

    <p class="text_content">The rating of a merchant indicates the level of trustworthiness. A higher rating means that
        the merchant is more trusted.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading"> Google Customer Reviews Important ?</h2>
    <p class="text_content"><strong>When you are looking at Google Reviews, it is important to keep in mind</strong>:</p>
    <div class=”ul_div”>
        <ul>
            <li>You can find our reviews by visiting our website and navigating to the "Reviews" section</li>
            <li>Why are they important?</li>
            <li>How can the service improve your website's search engine rankings?</li>
            <li>How can my business obtain this product or service?</li>
            <li>How can the EDGE technology assist you?</li>
        </ul>
    </div>
    <p class="text_content">When potential clients are considering your services, they often look at Google reviews as
        their first source of information.</p><br>

    <p class="text_content">These reviews can significantly influence their decision to reach out and inquire about your
        services.</p><br>

    <p class="text_content">They can also assist in enhancing your website's visibility in local search engine results.
        Your reviews must reflect your business positively and accurately represent its value and merits.</p><br>

    <p class="text_content">If you have a small business, you probably understand the significance of getting positive
        recommendations from customers to attract new clients.</p><br>

    <p class="text_content">Reviews help spread these recommendations to a larger group of people.</p>
</div>
<div class="content_div">
    <h2 class="content-heading">Where Can You Find Your Google Review? </h2>
    <p class="text_content">To view all the previous Google reviews that you have posted for various Google My Business
        listings, please follow these steps.</p>
    <div class=”ul_div”>
        <ul>

            <li>Log in to your Gmail account.</li>
            <li>Access Google Maps by visiting maps.google.com or using the Google Maps app on your phone.</li>
            <li>To access the menu options, locate the icon with three horizontal lines in the upper left corner of your
                screen and click on it.</li>
            <li>Clicking the three lines icon will show options on the left side of the screen.</li>
            <li>Clicking "your contributions" will reveal additional options on the left side of your screen.</li>
            <li>Tap or click the "Reviews" section to see your Google reviews. You will find all the reviews you posted
                using your Gmail account there.</li>
        </ul>
    </div>
</div>
<div class="content_div">
    <h2 class="content-heading">Is EDGE Creative Helpful?</h2>
    <p class="text_content">We have helped clients from various industries manage their reviews as a Google Partner. The
        task is to create a plan for getting good reviews and handling them promptly.</p><br>

    <p class="text_content">We assisted Finance Brokerage Finance 4 Business and Estate Agents Taylor Cole in contacting
        happy customers for wording and strategy advice. This has significantly boosted their reviews.</p><br>

    <p class="text_content">We have worked hard to increase our Google Reviews, and as a result, we are now one of the
        top agencies in Sutton Coldfield for Google Reviews.</p><br>

    <p class="text_content">If you are interested in finding more helpful content, please visit our website.</p><br>
</div>
<div class="content_div">

    <h2 class="content-heading">Paying For Google Reviews is a No-Go?</h2>
    <p class="text_content">Purchasing Google reviews is not allowed by Google's guidelines and is also considered
        illegal by the Federal Trade Commission (FTC).</p><br>

    <p class="text_content">According to Google Support, business owners are not recommended to provide incentives to
        customers in exchange for leaving reviews.</p><br>

    <p class="text_content">This means that businesses cannot force or manipulate customers into writing positive
        reviews by offering them money, free products, or services in exchange.</p><br>

    <p class="text_content"> If Google discovers that you have undisclosed, paid reviews, it will promptly remove them.
    </p><br>

    <p class="text_content">In addition, the FTC (Federal Trade Commission) has established strict rules regarding
        reviews that are not genuine or have been paid for. If you give someone something for free or offer them special
        deals in exchange for a review, they must let others know about it.</p><br>

    <p class="text_content">Some businesses choose to outsource their review management to third-party companies.</p><br>

    <p class="text_content">It is essential to be cautious when selecting such companies and ensure they do not pay for
        reviews. If you don't take action, you may face adverse outcomes.</p><br>
</div>
<div class="content_div">
    <h2 class="content-heading">What happens if you pay for Google reviews?</h2>
    <p class="text_content">The Federal Trade Commission (FTC) recently took action against businesses that were found
        to be paying for Google reviews without disclosing this information.</p><br>

    <p class="text_content">As a result, the FTC sent Notices of Penalty Offences to hundreds of these businesses. These
        notices informed companies that if they don't disclose that they have paid for reviews, they could be fined up
        to $43,792 for each violation.</p><br>

    <p class="text_content">Google has a system in place to identify and remove fake reviews, which helps ensure the
        credibility of online reviews.</p><br>

    <p class="text_content"> However, suppose a business is found to be involved in fake or paid reviews. In that case,
        Google's algorithm may lower its ranking in search results. This is because Google has policies to discourage
        such practices and promote fair and honest reviews.</p><br>

    <p class="text_content">This means that your website may experience a decrease in the number of visitors over a long
        period because your search engine optimization (SEO) will be negatively affected.</p><br>

    <p class="text_content">Another issue that has persisted for a significant amount of time is your company's
        reputation.</p><br>

    <p class="text_content">Customers may be concerned about a business that pays for positive online reviews instead of
        earning them naturally.</p><br>

    <p class="text_content">Identifying fake reviews can be challenging, but observant customers may start to have
        doubts.</p><br>

    <p class="text_content">This is particularly relevant for new businesses that receive multiple positive reviews on
        Google before they officially begin operating.</p><br>
</div>
<div class="content_div">

    <h2 class="content-heading">Not all misleading reviews are compensated</h2>
    <p class="text_content">Google and the Federal Trade Commission (FTC) have provided some essential guidelines, even
        if you intend to avoid paying for reviews. Please refrain from providing free products, services, or promotions
        in exchange for undisclosed reviews.</p><br>

    <p class="text_content">You may have experienced your friends or family members speaking highly of your business to
        people they know in person.</p><br>

    <p class="text_content">However, the Federal Trade Commission (FTC) advises against requesting your loved ones or
        even your staff to write positive reviews online for your business without clearly mentioning their relationship
        with you.</p><br>

    <p class="text_content">The FTC (Federal Trade Commission) has established guidelines for online reviews. These
        guidelines provide rules and recommendations for individuals who write online reviews.</p>
    <div class=”ul_div”>
        <ul>


            <li>It is essential only to request reviews from individuals who have used or experienced the product or
            service.</li>
            <li>It is essential only to request your employees to write reviews for your business if you mention in their
            study that they work for you and were asked to write them.</li>
            <li>Gathering reviews from all customers, regardless of whether we anticipate positive or negative feedback, is
            essential.</li>
            <li> Requiring reviews from your family and friends is only recommended if they mention their connection in the
            studies.</li>
            <li> If you provide a reward for a review, please ensure that you do not require or suggest that the study be
            positive. Even if the condition is absent, the assessment must mention the incentive. This is because
            offering an incentive can introduce bias or affect how readers perceive the review's credibility and
            importance. </li>
        </ul>
    </div>

    <p class="text_content">Before you request your marketing manager or great-aunt to review your business on Google,
        you must ensure they openly disclose any relationships with you or your business. Additionally, creating a
        strategy that promotes genuine and natural feedback from your customers would be beneficial.</p>
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