<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once head_new; ?>

    <title>UI/UX Design Virtual Assistant</title>


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
                    UI/UX Design Virtual Assistant
                </h1>

                <!-- <ul class="landing-ul">
                    <li class="text">Hiring our SEO virtual assistant can help you rank better in search engines and keep
                        you ahead of your competitors.</li>
                </ul> -->
                <br>
                <a class="basic-button landing-btn" href="#">Hire UI/UX Design Specialists
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
            <p class="text_content">Nowadays, practically every business employs technology, whether it is social media pages, a corporate website, or mobile applications, to reach its target audience and increase sales. Only top businesses spend money on developing websites and applications that are specifically made to enhance interpersonal relationships.</p>
            <p class="text_content">You need someone who can listen to your target audience, see things from their viewpoint, and find exciting methods to elevate your product design to persuade people to keep visiting your website, app, or online shop if you want them to do so again. A virtual assistant who is a UI/UX designer can help you with that.</p>

        </div>
        <div class="content_div">
            <h2 class="content-heading">UI/UX Design: What is it?</h2>
            <p class="text_content">In order to increase total customer happiness and experience, user experience (UX) design is a process that involves analyzing user behavior and creating user interfaces appropriately.</p>
            <p class="text_content">The components that your end user, client, or customer interacts with on their devices are all included in a user interface (UI), on the other hand. Graphical components like pictures and videos as well as text components like headers, footers, and subtitles are examples of these. With the use of color, typography, layout, and visual communication, UI design aims to increase brand recognition and accessibility.</p>
            <p class="text_content">UX designers may aid in improving a company's interface design and streamlining the user experience, which will increase the number of repeat customers, by researching how consumers interact with your website or app on indirect and direct interfaces, obtaining data, and studying their behavior.</p>

        </div>
        <div class="content_div">
            <h2 class="content-heading">A virtual assistant for UI/UX design: what is it?</h2>
            <p class="text_content">The same services of an internal UI/UX designer are offered remotely by a UI/UX virtual assistant (VA). They may assist in enhancing the usability of your website or app by working with your web or app designer to develop a captivating, user-friendly app or website that will let each user to concentrate on the activity or activities that you want them to take.</p>
            <p class="text_content">Although there may be some overlap in their skill sets, UI design and UX design virtual assistants are not identical. A UX designer's job is to enhance the user experience and make it more conducive to interpersonal interactions. Conversely, UI designers place a greater emphasis on the design itself. Some UI designers are also capable of working on UX projects, and vice versa, while others</p>


        </div>
        <div class="content_div">
            <h2 class="content-heading">UI/UX: Why Is It Important?</h2>
            <p class="text_content">Why, therefore, should you start investing in product design or graphical user interface (GUI) design? Consider that you wish to grow your brick-and-mortar business to a much larger market despite it being quite successful locally. You are aware that thanks to technology, you can begin selling to the rest of the nation or possibly the entire world.</p>
            <p class="text_content">With such a large target audience, it can be challenging to determine how to use digital media effectively. You invested thousands of dollars to establish a website and mobile app, but while receiving a lot of internet traffic, you aren't making many sales. Between building a website that is merely functional and building an effective website, there is a delicate line. Maybe one of the causes of your app's failure.</p>

        </div>
        <div class="content_div">
            <h2 class="content-heading">What Tasks Can a Virtual Assistant Do in UI/UX?</h2>
            <p class="text_content">What sort of tasks may UX/UI virtual assistants perform? Here are some illustrations.</p>
            <div class="ul_div">
                <ul>
                    <li><strong>RECORD USER INFORMATION AND ANALYZE IT.</strong></li>
                    <p class="text-context">Your virtual assistant may do data analysis and create a plan for boosting conversions on your website or mobile application. A competent virtual assistant should tell you of the needs of your visitors and assist in identifying the reasons why they aren't converting. They can create fresh concepts with the use of this information that will appeal to a wider audience.</p>

                    <li><strong>PERFORM UX RESEARCH.</strong></li>
                    <p class="text-context">UX research involves conducting surveys, speaking with potential customers to learn about their problems and how they would address them, looking at competing websites or apps, and knowing your target audience more broadly.</p>

                    <li><strong>WIREFRAME BASED DESIGN ELEMENTS.</strong></li>
                    <p class="text-context">Every features of the product, including buttons, tabs, drop-down menus, forms, pictures, video backdrops, and other visual or text elements, will be designed by UI designers. On the basis of suggestions from your project manager or web designer, they need to be able to produce the final user interfaces.</p>

                    <li><strong> FOR USER INTERFACES, DEVELOP WIREFRAMES.</strong></li>
                    <p class="text-context">To illustrate how users see, read, or navigate around product displays, wireframes are graphic representations of the interfaces. A fantastic user experience should be balanced out by wireframes that imitate human behavior, and a skilled UX VA should be able to do both while offering a high-level overview of the UI design.</p>

                    <li><strong>USABILITY TESTING WILL HELP YOU IMPROVE YOUR DESIGN.</strong></li>
                    <p class="text-context">In order to assess how well various features function and whether there is potential for improvement, this may entail asking users to perform activities, guiding them through the app or website screens with them, and observing their behavior as they use certain features.</p>
                    <p class="text-context">IA virtual assistant (VA) may assist with these duties, but before employing one, make sure they have experience in both UX and UI design. Moreover, bear in mind that depending on the intricacy and degree of detail required, each work will require a varied length of time to accomplish.</p>

                    <li><strong>CONSTRUCT USER ACCEPTANCE CRITERIA.</strong></li>
                    <p class="text-context">In order to guarantee that every screen is prepared to be tested in an end-to-end product delivery system, your VA should be able to compile a list of requirements after the design phase. Your tester or the UI/UX VA will next apply the user acceptance criteria once again to confirm that everything is correct.</p>

                </ul>
            </div>

        </div>
        <div class="content_div">
            <h2 class="content-heading">Which abilities Are Required of UI/UX Virtual Assistants?</h2>
            <p class="text_content">Creating a fantastic user experience is crucial to the success of any website or app. When selecting a virtual assistant for this job, make sure they have experience in all design disciplines and can provide examples of their UX and UI work</p>
            <p class="text_content">While employing a virtual assistant, you should look for the following skills:</p>
            <div class="ul_div">
                <ul>
                    <li><strong> AWESOME UNDERSTANDING OF UX METHODS AND APPLICATIONS</strong></li>
                    <p class="text_context">Your VA must to be knowledgeable with a range of UX technologies and methods. This involves doing user interviews, conducting ethnographic research, using rapid prototyping to test early ideas, card sorting, A/B testing, and other techniques to comprehend your consumers' interactions and information architecture. They should also be familiar with design heuristics so they can develop features that are user-friendly.</p>

                    <li><strong>TEAMWORK SUITABLE PERSONNALITY</strong></li>
                    <p class="text_context">Make sure your virtual assistant has strong communication skills because they will be interacting with your project manager and other designers at your organization frequently. Also, they should be able to receive criticism without becoming upset and should have a good attitude toward input.</p>

                    <li><strong>EXCELLENT DESIGN SENSE</strong></li>
                    <p class="text_context">Make sure your virtual assistant has a keen eye for design before engaging them to create your app or website. You may anticipate them to have excellent taste in GUI components like menus and forms, as well as color schemes, artwork, typography, and animation effects. They must to be able to provide advice on how to build your website or app so that it is well-received by your target market.</p>

                    <li><strong> KNOWLEDGE OF GRAPHIC DESIGN TOOLS</strong></li>
                    <p class="text_context">Even though you might not believe it, having experience with a visual design program is important when looking for a virtual assistant. Many screen components are changed by UX virtual assistants to reflect the brand while also catering to the realities of client preferences. To make the process simpler, your virtual helper should utilize the same design software as your UI virtual helper.</p>

                    <li><strong> ACTIVITY AND INQUISITION</strong></li>
                    <p class="text_context">Your virtual assistant has to be up to speed on the most recent design trends because UX is an area that is continually growing. Is your website or mobile application, for instance, voice command-ready? Nowadays, a lot of people use voice assistants to play music, operate their smart home, search Wikipedia, and other things. Voice commands should work effectively with your website or app.</p>

                </ul>
            </div>
        </div>
        <div class="content_div">
            <h2 class="content-heading">How Can I Hire a UI/UX VA?</h2>
            <p class="text_content">Make some inquiries before selecting a virtual assistant. Seek for individuals that have some solid examples of UI and UX design in their resumes. Also, you may request their assistance with a project related to your company. For instance, if you run an eCommerce business, ask them to make a basic wireframe of the front page of your website. Have them create a straightforward wireframe for a feature in your mobile app if you're a developer.</p>
            <p class="text_content">It is possible to have one individual handle both tasks even if there are some distinctions between UX and UI designers. You'll only need to hire one virtual assistant in this scenario, making it perfect for businesses with tight budgets.</p>
            <p class="text_content">Working with Hire Coworker is the finest choice if you don't know how to recruit virtual assistants. As a reputable virtual assistant staffing firm, we assist small-to-medium organizations in finding the ideal virtual assistant for every role, including UI and UX employment.</p>
            <p class="text_content">Are you prepared to look for virtual help for your business's UI or UX design and research projects? Book a Business Development Call with us right now to receive a free quote!</p>
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