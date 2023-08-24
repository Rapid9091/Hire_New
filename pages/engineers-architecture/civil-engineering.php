<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once head_new;?>

    <title>Civil Engineeringg</title>

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
                    Civil Engineering
                </h1>

                <ul class="landing-ul">
                    <p class="text">Civil Engineering: a field that bridges imagination and reality, transforming
                        visions into tangible structures that shape our world. From awe-inspiring skyscrapers to
                        intricate transportation networks, the impact of civil engineering is profound and omnipresent.
                        In this comprehensive exploration, we delve into the essence of civil engineering, its various
                        services, the challenges faced in selecting the right solutions, the diverse spectrum of
                        available jobs, and the alluring realm of civil engineering salaries.


                    </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">HireCivil Engineering Specialists
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
            <p class="text_content">The right expertise can make all the difference in construction and infrastructure
                development. "Hire Coworker" emerges as your ultimate solution for all civil engineering services,
                offering many advantages that cater to both your project's success and your peace of mind.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">What is Civil Engineering?</h2>
            <p class="text_content">Civil engineering is about planning, making, and caring for our needs. This includes
                buildings, roads, water systems, and more. Civil engineers do jobs like making structures vital,
                designing routes, and keeping the environment safe. They make our world work better!</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Civil Engineering Services</h2>

            <p class="text_content">Civil engineering services are the building blocks that underpin the physical fabric
                of civilization. These services embrace a vast spectrum of endeavors, such as:</p><br>
            <p class="text_content"><strong> 1)Structural Design:</strong> Creating secure and strong buildings is
                important because they not only look impressive, but they can also withstand harsh weather conditions
                and large crowds.</p><br>
            <p class="text_content"><strong> 2)Transportation Engineering:</strong> Planning roads, bridges, and ways
                for people and things to move quickly.</p><br>
            <p class="text_content"><strong> 3)Environmental Engineering:</strong> Protecting our environment by dealing
                with trash, water, and pollution.</p><br>
            <p class="text_content"><strong> 4)Geotechnical Engineering: </strong> Checking the dirt and rocks to make
                sure buildings won't fall over.</p><br>
            <p class="text_content"><strong> 5)Construction Management:</strong> Making sure building stuff happens
                correctly, from start to finish, without spending too much time or money.</p><br>
            <p class="text_content"><strong> 6)Water Resources Engineering:</strong> Creating systems to manage water
                smartly, like ample water storage and cleaning places.</p><br>
            <p class="text_content"><strong> 7)Urban Planning: </strong> Designing cities so they're good places to
                live, with space used well and life made better.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Challenges in Selecting Civil Engineering Services</h2>


            <p class="text_content">Civil engineering services cover a lot, making picking the right one tough. Figuring
                out the best choice while considering what's needed, how much it costs, how it affects the environment,
                and if it's suitable for the long term isn't easy. Engineers often must decide between making things
                cheap and straightforward or new and good for the planet.</p><br>

            <p class="text_content">This shows up most in designing structures. Architects and engineers have to work
                together to make buildings that look amazing, safe, and strong. This can be hard because they must find
                the balance that makes our cities look great.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Diverse Jobs in Civil Engineering</h2>


            <p class="text_content">Civil engineering is a field that provides many exciting and fulfilling job options.
                A few notable roles include:</p><br>

            <p class="text_content"><strong> 1)Structural Engineer:</strong> Designs and checks structures to ensure
                they stay strong and safe over time.</p><br>
            <p class="text_content"><strong> 2)Transportation Engineer:</strong> Plans, designs, and handles ways for
                people and things to move, like roads and trains.</p><br>
            <p class="text_content"><strong> 3)Environmental Consultant: </strong> Works on projects to keep the
                environment clean and healthy, dealing with trash and pollution.</p><br>
            <p class="text_content"><strong> 4)Geotechnical Engineer:</strong> Studies how soil and rocks behave to help
                make safe foundations for buildings and big holes in the ground.</p><br>
            <p class="text_content"><strong> 5)Construction Manager: </strong> Leads construction projects, handling
                money time, and making sure all the teams work together.</p><br>
            <p class="text_content"><strong> 6)Water Resources Engineer:</strong> Makes systems for water, like keeping
                floods away and cleaning dirty water.</p><br>
            <p class="text_content"><strong> 7)Urban Planner:</strong> Creates and improves cities to make them work
                well and look nice, keeping people happy.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Civil Engineering Salaries</h2>

            <p class="text_content">Civil engineering salaries are influenced by numerous factors, including education,
                experience, specialization, geographic location, and the sector (public or private). On average, civil
                engineers enjoy competitive compensation that reflects the significance of their work.</p><br>

            <p class="text_content">In developed countries, such as the United States and parts of Europe, civil
                engineering salaries are notably higher due to the demand for skilled professionals. Engineers
                specializing in complex areas like structural dynamics, earthquake engineering, and sustainable design
                often command higher salaries due to their expertise being in high demand.</p><br>

        </div>
        <div class="content_div">
            <h2 class="content-heading">Hire Coworker is here to help you</h2>

            <p class="text_content">Regarding construction and infrastructure development, having the right expertise is
                crucial for success. Our "Hire Coworker" service is designed to provide you with a comprehensive range
                of civil engineering services. It offers numerous benefits that ensure the success of your project and
                give you peace of mind.</p><br>
            <h3><strong>Cost-Effective Services & Excellence</strong></h3>
                    <p class="text_content"><strong>"Hire Coworker"</strong> is known for being affordable in civil
                        engineering. We get that it's essential to handle project money smartly while still getting good
                        work. Our system links you with skilled civil engineers who do great work for less money than
                        regular hiring. This helps your project stay on budget all the way.</p><br>
                    <h3><strong>Trustworthy Professionals</strong></h3>
                            <p class="text_content">Trust is the cornerstone of any successful collaboration. With "Hire
                                Coworker," you gain access to a network of highly reliable and reputable civil
                                engineering professionals. Each expert on our platform undergoes a rigorous screening
                                process to ensure their credentials, experience, and track record align with your
                                expectations. You can confidently entrust your project to these experts, knowing they
                                will deliver as promised.</p><br>
                            <h3><strong>Tailored Expertise</strong></h3>
                                    <p class="text_content">Every project has its unique demands, requiring a customized
                                        approach. "Hire Coworker" allows you to select civil engineering professionals
                                        whose expertise perfectly matches your project's requirements. Whether it's
                                        structural design, project management, environmental assessment, or any other
                                        facet of civil engineering, our platform connects you with the right
                                        professionals who possess the specialized skills your project demands.</p><br>
                                    <h3><strong>Diverse Project Scope</strong></h3>
                                            <p class="text_content">Civil engineering encompasses many projects, from
                                                small-scale developments to significant infrastructure endeavors. "Hire
                                                Coworker" caters to projects of all sizes and complexities, making it
                                                your one-stop destination for various civil engineering services.
                                                Whether planning a residential construction project or a commercial
                                                development, our platform has the right professionals.</p><br>
                                            <h3><strong>Seamless Collaboration</strong></h3>
                                                    <p class="text_content">Efficient communication and collaboration
                                                        are vital in the world of civil engineering. "Hire Coworker"
                                                        offers a streamlined platform where you can easily communicate
                                                        with your chosen experts, share project details, and receive
                                                        real-time updates. This ensures that all stakeholders are on the
                                                        same page throughout the project's lifecycle, contributing to
                                                        smoother workflows and timely project completion.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Conclusion</h2>

            <p class="text_content">Civil engineering shows human creativity, new ideas, and not giving up. It makes
                things we think up actually happen, creating stuff that holds up our world. From substantial, tall
                buildings to the small pipes that drain water, everything we use today is because of civil engineering.
            </p><br>

            <p class="text_content">In the 21st century, civil engineering will be super important for making a world
                that lasts and can handle problems. The work it does, the jobs it offers, and the money it pays make
                this field enjoyable. So, whether you're considering building a new bridge or looking at a big city's
                buildings, remember that a team of civil engineers is behind everything, making ideas real.</p><br>

            <p class="text_content">In conclusion, "Hire Coworker" presents a compelling case for why it should be your
                go-to choice for civil engineering services. The platform offers unparalleled benefits with its
                cost-effective approach, trustworthy professionals, tailored expertise, seamless collaboration, diverse
                project scope, and flexibility. Embrace the future of civil engineering services with "Hire Coworker"
                and experience excellence, affordability, and peace of mind like never before.</p><br>
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