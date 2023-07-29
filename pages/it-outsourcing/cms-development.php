<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once head_new; ?>

    <title>CMS Development Services</title>


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
                CMS Development Services
                </h1>

                <ul class="landing-ul">
                    <li class="text">Hire Coworker is an expert in providing CMS Development Services to clients in the USA and worldwide in various industries. As the top CMS creation company in the US, our top-notch CMS solutions solve your business's problems and give your customers a unique web experience. Our CMS solutions are reliable and full of features, making it easy to control, update, and change published web content. Virtual Assistant provides a sizable pool of skilled CMS developers knowledgeable about the newest technologies, trends, platforms, and applications.</li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire CMS 
                    Development Specialists
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
            <!-- <h2 class="content-heading">CMS Development Services</h2>
            <p class="text_content">Hire Coworker is an expert in providing CMS Development Services to clients in the USA and worldwide in various industries. As the top CMS creation company in the US, our top-notch CMS solutions solve your business's problems and give your customers a unique web experience. Our CMS solutions are reliable and full of features, making it easy to control, update, and change published web content. Virtual Assistant provides a sizable pool of skilled CMS developers knowledgeable about the newest technologies, trends, platforms, and applications.</p> -->

        </div>
        <div class="content_div">
            <h2 class="content-heading">Advantages of taking our cms development services </h2><br>
            <p class="text_content">The next real question is when you need a virtual assistant service for custom CMS creation. </p><br>
            <p class="text_content"> Every business needs to do a realistic assessment of when and what kind of CMS they need to use.</p><br>
            <p class="text_content">Some businesses are forward-thinking and need a proactive CMS solution with extended functionalities, features, and CMS plugins that meet their operational needs, how they handle clients, and how their products and services are constantly changing. For this, they would need a CMS product that is flexible and easy to extend.  </p><br>
            <p class="text_content">A CMS website is a good choice for businesses that want to get more leads and give their customers the best service possible.   Decide what kind of business website you have, choose how you want your website to work, and then get custom CMS options that fit your needs.</p>
        </div>
        <div class="content_div">
            <h2 class="content-heading">How does a content management system work?</h2><br>
            <div class="ul_div">
                <ul>
                    <li><strong>Inquire.</strong></li>
                    <p class="text_content">Contact our consultant to discuss your requirements. List out points to see if we suit your needs. If so, we'll send you a contract and designate you as a client consultant. Please do not rush into a contractual relationship with us. After being satisfied with our services, you should commit to a partnership to outsource content management services</p>
                    <li><strong>Evaluate.</strong></li>
                    <p class="text_content">Please consult with our client consultant to weigh all the pros and cons. Consider your responsibilities, resources, and needs, and rest assured that we will assist in your development. We provide:</p>
                    <li>The finest content.</li>
                    <li>A comprehensive report of merits.</li>
                    <li>A timetable for the induction of assistants.</li>
                    <p class="text_content">We value openness, and there are no concealed fees or false promises.</p>
                    
                    <li><strong>Placement.</strong></li>
                    <p class="text_content">Meet the placement team and select the best website designer candidates from our pool of qualified applicants. Based on your needs, the consultant of our client will conduct interviews and assist you in selecting the ideal candidate.</p>
                    <li><strong>Kickoff.</strong></li>
                    <p class="text_content">In tIn the presence of a client consultant, engage in a kickoff call with our assistant. You can set initial objectives, communicate your strategies, and anticipate achieving success. It regards as the beginning of our partnership.</p>
                    <li><strong>Onboarding.</strong></li>
                    <p class="text_content">Our client-consultant maintains contact to guide you through our failsafe onboarding process by providing an invaluable relationship service. We are the most proficient data managers in operations and administrative software products.</p>
                    <li><strong>Continue the conversation.</strong></li>
                    <p class="text_content">To support your framework, we will conduct recurring checks. Through our collaboration, we promote a win-win environment for our clients. The consultants of Hire Coworker's content management services will continue to provide expert guidance until you are satisfied with our services.</p>
                </ul>
            <!-- </div>
            <p class="text_content">A reputable web development business in the USA is Perception System. We have provided clients all around the world with custom web development services for more than 20 years. We have a track record of effectively delivering complex web app solutions, from planning to delivery, as a web development service provider.</p>
            <!-- <p class="text_content">Virtual SEO helpers handle all of your search engine optimization chores. These duties are divided into two categories: onsite SEO and offsite SEO.</p> -->


        </div>
        <div class="content_div">
            <h2 class="content-heading">What CMS is used on sites?</h2>
            <p class="text_content">Ever wonder how something constructs after seeing it? If you work in online marketing, web development, SEO, web design, or any of the fields mentioned above, you must ask yourself this question frequently. With Hire Coworker, you can type the URL of the questioned site, and we will answer your "What CMS is this?" question. We employ a sophisticated algorithm when deciding which CMS or framework to use for a site..</p>
            
            <!-- <div class="ul_div">
                <ul>
                    <li><strong>Strategy for Digital Marketing</strong></li>
                    <p class="text_content">Hire coworker provides a complete range of web development, software, and technology-related services. Do you require assistance in developing a plan for your digital needs? Our skilled consultants will advise and coach you in all of your technology initiatives.</p>
                    <p class="text_content">Our consultants will assess your existing position and give recommendations on how to develop and maintain a strong digital presence, with the ultimate goal of making your company and its services stand out. Hire worker consultants will, in a nutshell, assist you in making your business sparkle both online and offline.</p>
                    <li><strong>Custom Web Application Development</strong></li>
                    <p class="text_content">A web application is a program that can be accessed via the internet using a web browser. These applications, unlike mobile apps, are saved on a distant server rather than on the device itself. Web apps have the advantage of not needing to be downloaded in order to be accessed or used, albeit they do require an internet connection to be used. Our web developers at Hire coworker can assist you in creating web applications to solidify your brand and reputation, showcase your business, and provide the excellent services your users expect. Because web apps are so popular, this is a crucial aspect of your digital presence.</p>
                    <li><strong>eCommerce Development</strong></li>
                    <p class="text_content">If your business sells products and services online, you'll need a strong digital shop as well as vendor services. Hire coworker who can design and build an eCommerce website that will display your company and allow you to sell your products easily, all while appealing to your user base and attracting new clients. Our eCommerce solutions cover a wide range of industries and niches, and we can help you design a retail experience that works for you and your company.</p>
                    <li><strong>Front-End Design and Development</strong></li>
                    <p class="text_content">The front end of your website or web application is what users view and interact with. It is, of course, a key part of your website and must interact seamlessly with the back end. As a result, we recruit expert front-end engineers and user experience (UX) designers to create an appealing interface, design, and overall quality experience for your users.</p>
                    <li><strong>Back-End Web Development</strong></li>
                    <p class="text_content">Back-end developers design the server side of your website or web app, which users cannot see or edit. Our back-end developers will create a robust foundation while collaborating closely with the front-end development team to guarantee that the two sides operate together and function well.</p>
                </ul>
            </div> -->
        </div>
        <div class="content_div">
            <h3 class="content-heading">Our Content Management System (CMS) Development Services</h3>
            <p class="text_content">Hire Coworker accomplish its tech and business objectives with the aid of our custom CMS developers.</p>
            <div class="ul_div">
                <ul style="list-style: decimal;">
                    <li><strong> Content creation</strong></li>
                    <p class="text_content">We at Hire Coworker are dedicated to providing the best content-writing solutions and have thousands of happy customers and top-ranking articles on the SERP. Using specialized blog services, we have created content for various industries. We have a group of excellent content producers from many markets.</p>
                
                    <li><strong>Graphic Designing</strong></li>
                    <p class="text_content">We at Hire Coworker offer complete UI/UX services for online platforms and websites. Personalized presentations, digital marketing, and graphic motion images can boost your creative quotient. Put the best face on your brand to increase competition and leave a lasting impression.</p>
                    <li><strong>Consulting for Business</strong></li>
                    <p class="text_content">In the United States and on four key continents worldwide, we are assisting firms in expanding. We take great pride in offering the greatest business consulting to our clients, who rave about our offerings. You may get the most significant business advice and advice in critical business models by Hire Coworker.</p>
                    <li><strong>Digital marketing</strong></li>
                    <p class="text_content">Businesses can reach a variety of media outlets thanks to the performance services provided by Hire Coworker's digital marketing services. Our clients receive high results in the SERP because of our extensive digital marketing experience. In addition to social media marketing, we also deliver the top SEO and Google ad results.</p>
                    <li><strong>Website and technology</strong></li>
                    <p class="text_content">The most excellent website and IT services are available from Hire Coworker. We aim to make it easier for SMEs to utilize cutting-edge digital technologies. We will create specialized websites for you regardless of the type of site design you require, wherever you are in the world, and whether you are a freelancer or a business owner.</p>
                    <li><strong>Keeping the books</strong></li>
                    <p class="text_content">Identifying, categorizing, documenting, and summarizing significant transactions are all part of bookkeeping. Outsourcing accounts with Hire Coworker keeps you on course and legally safe in the cutthroat business environment. Beyond ensuring that financial transactions are legal, we provide insightful analyses and support businesses in planning, making, and documenting their transactions.</p>
                    <li><strong>Assistance to Business</strong></li>
                    <p class="text_content">You may obtain the greatest telemarketing, business delivery schedule, and logistics analysis with Hire Coworker's business support services. With our business help, your company may establish an online presence and improve client connections.</p>
                    <li><strong> Virtual Assistant</strong></li>
                    <p class="text_content">Hire Coworker's virtual assistant to handle the tiresome jobs so you can rest well. The virtual assistants at Hire Coworker are educated experts who make calls, schedule appointments, and manage accounts. In addition, our virtual assistants can handle all the everyday chores.</p>

                </ul>
            </div>
        </div>

        <div class="content_div">
            <h3 class="content-heading">Why Hire Coworker for the Best CMS Development Services?</h3>
            <p class="text_content">Hire Coworker has a proven track record of providing high-performance, reliable, and scalable CMS to start-ups, small businesses, entrepreneurs, and enterprises. The top CMS development services will provide you with the following additional advantages.</p>
            <div class="ul_div">
                <ul>
                    <li>Upkeep of coding standards</li>
                    <li>Infrastructure for deployment that is secure</li>
                    <li>Guarantee of prompt delivery</li>
                    <li>The agile development process</li>
                    <li>Economical rates</li>
                    <li>Modular hiring strategy</li>
                </ul>
            </div>
        </div>
        <div class="content_div">
            <h3 class="content-heading">Costs of CMS Development</h3>
            <p class="text_content">Lots of company charges from $20,000 to $50,000 for a simple solution but we charge a very minimal price for the same cms service.</p><br>
            <p class="text_content">The costs vary depending on some variables, including the complexity of the CMS features, the variety of content categories, the overall volume of information, the quantity and complexity of processes and integrations for content management, and more. When you enter the information below, a representative from our company will contact you within 30 minutes to review your options.</p>
        </div>
        <div class="content_div">
            <h3 class="content-heading">Why do you require CMS development services?</h3>

            <div class="ul_div">
                <ul>
                    <li>Do your present CMS's revamping capabilities need to be improved?</li>
                    <li>Due to the limits in your current CMS, obtain complete bespoke CMS development services.</li>
                    <li>Consider the price of your present CMS.</li>
                    <li>If your current CMS needs to be more responsive, use our solutions.</li>
                    <li>Would you like to switch from hosting to self-hosting your current CMS?</li>
                </ul>
                
            </div>
        </div>
        <div class="content_div">
            <h3 class="content-heading">How can a CMS developer working remotely?</h3>
            <p class="text_content">We investigated the prerequisites for working remotely as a CMS developer. In real life, giving it your all is the most important thing. New technological developments transform industries every day. As the field becomes more popular, more people will enter it, increasing your competition. Enhancing your career will be easy if you stay current with industry trends.</p><br>
            <p class="text_content">Turing has the best working remotely CMS developer ready to assist you in achieving your CMS development objectives. Find a full-time, long-term working remotely CMS developer with higher pay and professional advancement by joining a global network of the best CMS developers. You'll also be able to refine your skills by working on complex technical problems with other bright engineers.</p>
        </div>
        <div class="content_div">
            <h3 class="content-heading">Why do I need a way to manage the information on my website?</h3>
            <p class="text_content">A content management system (CMS) has many benefits, including easy content production and editing, green content agencies, user-friendly interfaces, team collaboration, and website personalization. It enables companies and website owners to manage their content efficiently, often update it, and maintain a credible online presence.</p>
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
                Web Development Services
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
                    $900
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                CMS Development Services
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
                    $900
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                Software Development Services
                </div>
                <div class="list_data">
                    $6
                </div>
                <div class="list_data">
                    $45
                </div>
                <div class="list_data">
                    $300
                </div>
                <div class="list_data">
                    $1100
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                DataBase Development Services
                </div>
                <div class="list_data">
                    $15
                </div>
                <div class="list_data">
                    $100
                </div>
                <div class="list_data">
                    $650
                </div>
                <div class="list_data">
                    $2500
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                IT security Services
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
                    $1700
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                Machine Learning Services
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
                    $900
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                Network Installation Services
                </div>
                <div class="list_data">
                    $15
                </div>
                <div class="list_data">
                    $100
                </div>
                <div class="list_data">
                    $650
                </div>
                <div class="list_data">
                    $2500
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                Frontened Development Services
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
                    $900
                </div>
            </div>
            <div class="list_row">
                <div class="list_data">
                Backened Development Services
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
                FullStack Development Services
                </div>
                <div class="list_data">
                    $6
                </div>
                <div class="list_data">
                    $45
                </div>
                <div class="list_data">
                    $300
                </div>
                <div class="list_data">
                    $1100
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
                    <summary>What exactly are web development services?</summary>
                    <div class="faq__content">
                        <p class="text">Website development services are a set of options for anyone who wants to build, redesign, or increase the performance/capabilities of their website. These services are critical for developing and maintaining a website that achieves its intended goal, whether that goal is to generate leads, generate revenue, disseminate information, or assist your customer base.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Can I hire a web developer full-time?</summary>
                    <div class="faq__content">
                        <p class="text">Web developers can be hired full-time. Your needs will determine whether or not that is the best option for you. Some businesses may choose to hire a specialized web development agency, while others may prefer on-staff, full-time developers, while still others may prefer part-time, freelance, or outsourced web developers. In either case, you should carefully analyze the advantages and disadvantages of each model to choose which option is best for you.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What types of web development companies?</summary>
                    <div class="faq__content">
                        <p class="text">Leading web development firms to come in a variety of shapes and sizes. Some may be solely committed to web development, while others, like BairesDev, may also focus on software development and other technical disciplines. Some specialize in specific sorts of websites or online applications, such as custom solutions, enterprise goods, CMS development, eCommerce, and others. They can also provide maintenance and upgrades.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What areas of expertise does a web development company have?</summary>
                    <div class="faq__content">
                        <p class="text">A web development agency that specializes in building, designing, deploying, updating, and maintaining websites and web applications. They typically employ front-end and back-end developers, as well as professionals like UX or UI designers, QA testers, and project managers to create web products that are attractive, functional, and high-performance. They may specialize in particular services or kinds of web technologies, web products, and digital marketing</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How do you find a web development company?</summary>
                    <div class="faq__content">
                        <p class="text">You can find web development businesses by browsing Google, connecting with a friend, or contacting a company whose website you like and asking for comments. Do your homework on organizations by reading reviews on Google and company directories like UpCity, as well as analyzing case studies of completed projects.</p>
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