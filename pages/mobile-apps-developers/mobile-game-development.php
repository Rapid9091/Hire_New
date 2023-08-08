<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once head_new;?>

    <title>Mobile Game Development</title>

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
                    Mobile Game Development
                </h1>

                <ul class="landing-ul">
                    <p class="text">Mobile game development has become a significant force in the gaming industry, revolutionizing how people engage with digital entertainmentws </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Mobile Game Development Specialists
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
            <p class="text_content">Mobile gaming has become extremely popular in recent years due to the rapid
                development of
                technology and the widespread use of smartphones. It is now a common and widely accepted form of
                entertainment
                in our modern society. </p><br>

                <p class="text_content">This article explores the process of creating mobile games, including the creative
                steps and
                the critical contributions of companies like Supercell. In this exploration, we will discover the
                details of
                creating exciting experiences that attract players worldwide.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">The Rise of Mobile Gaming</h2>
            <p class="text_content">Over the past decade, mobile gaming has experienced significant changes and
                improvements.
                The world of video games has evolved significantly over time. </p><br>

                <p class="text_content">What used to be limited to basic games like Snake and Tetris has now expanded into a
                wide
                range of diverse and complex experiences.</p><br>

                <p class="text_content">Mobile games today have awe-inspiring graphics, captivating storylines, and fun
                gameplay
                that can compete with console and PC games. </p><br>

                <p class="text_content">The changes in technology for mobile devices have made it possible for developers to
                create
                more advanced and visually attractive experiences.</p><br>

            <p class="text_content">As smartphones advanced, game developers saw the chance to create innovative and
                imaginative
                games.</p><br>

                <p class="text_content"> This change led to a new phase in the development of mobile games. It brought about
                more
                advanced gameplay features, the ability to incorporate augmented reality, and the ability to connect
                with others
                socially. </p><br>

                <p class="text_content">Mobile devices have made gaming more accessible to people all over the world. With
                the
                convenience of app stores, anyone can easily download games and join the fun. This has allowed gaming to
                become
                a popular activity for many people.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Building a Mobile Game: From Concept to Reality</h2>
            <p class="text_content">Creating a mobile game involves a well-coordinated effort combining creativity,
                technology,
                and teamwork. The process starts with a concept, a burst of creativity that sets the development process
                in
                motion. After that, a group of skilled individuals, including designers, artists, programmers, and sound
                engineers, work together to make the idea a reality. The journey consists of several essential steps:
            </p><br>

            <p class="text_content"><strong>1 )Conceptualization: </strong>During the initial phase, our team will come
                together
                to generate ideas, develop concepts, and imagine the fundamental elements that will make up the game.
                Developers
                create a plan for how the game will be played, what it will look like, and who it is intended for. This
                plan
                serves as the basis for the entire project.</p><br>
            <p class="text_content"><strong>2 )Design and Prototyping:</strong> After the initial idea is developed,
                designers
                create detailed drawings, visual storyboards, and models to help customers understand how the game will
                work and
                what it will look like. This step allows the team to identify potential problems and improve the design
                before
                starting the development process.</p><br>
            <p class="text_content"><strong>3 )Development:</strong> Programmers are responsible for creating the
                instructions,
                called codes, that make the game work. They combine visual elements, sound effects, and game rules to
                create an
                enjoyable player experience. During this phase, we must be cautious and pay close attention to every
                detail.
                Even the tiniest mistake in the code can significantly impact how the game runs and how enjoyable it is
                for the
                players.</p><br>
            <p class="text_content"><strong>4 )Art and Audio Creation:</strong> Artists and sound engineers work
                together to
                create visual and sound effects in the game. The different aspects of the game, such as how the
                characters look
                and their environments, along with the sounds and music, all work together to create a realistic and
                engaging
                experience for players.</p><br>
            <p class="text_content"><strong>5 )Testing and QA: </strong>Rigorous testing is done to ensure the game
                works
                properly and has no issues or errors. QA teams are responsible for playing the game from different
                viewpoints to
                find any problems that need to be fixed before the game is released.</p><br>
            <p class="text_content"><strong>6 )Optimization: </strong>Rigorous testing is done to ensure the game works
                properly
                and has no issues or errors. QA teams are responsible for playing the game from different viewpoints to
                find any
                problems that need to be fixed before the game is released.</p><br>
            <p class="text_content"><strong>7 )Release and Post-launch Support:</strong> After the game has been refined
                and
                made more efficient, it is available for download on app stores. This allows players to find and enjoy
                the game
                on their devices easily. The developers will keep working on the game to bring you updates,
                improvements, and
                new content so that you can stay engaged and satisfied while playing.</p><br>
        </div>
        <div class="content_div">
            <h2 class="content-heading">The Innovations of Supercell</h2>
            <p class="text_content">When talking about the development of mobile games and their influence, we can't
                overlook
                the critical role played by Supercell.</p><br>

            <p class="text_content"> Supercell is a game development company from Finland that is well-known for
                creating
                innovative and highly successful games.</p><br>

            <p class="text_content"> Supercell has wholly changed how mobile games are made by introducing new and
                creative
                ideas for game design, how the games work, and how they make money. </p><br>

            <p class="text_content">Let's take a closer look at how Supercell's philosophy has influenced the gaming
                industry:
            </p><br>
            <p class="text_content"><strong>1 ) Player-Centric Design:</strong> Supercell prioritizes players and
                involves them
                in the game development process. The company values the opinions and ideas of players, actively seeking
                feedback
                from the community and incorporating their suggestions into the games. This method encourages players to
                feel a
                sense of ownership and makes the experience more enjoyable and immersive.</p>
            <p class="text_content"><strong>2 )Engaging Gameplay Mechanics: </strong>Supercell's games are known for
                their
                easy-to-understand and enjoyable gameplay features. Games such as "Clash of Clans," "Clash Royale," and
                "Brawl
                Stars" are designed to be user-friendly and pleasant from the start. However, they also provide a rich
                and
                complex strategic experience that keeps players engaged and interested over a long period.</p>
            <p class="text_content"><strong>3 )Live Operations and Updates: </strong>Supercell's strategy revolves around
                the
                "games as a service" model, which means that they focus on providing ongoing support and updates for
                their games
                to enhance the overall gaming experience for their customers. Instead of just releasing a game and
                stopping
                there, the company goes above and beyond by regularly providing updates, organizing events, and creating
                new
                content. This ensures that players stay interested and enthusiastic about the game for a long time.</p>
            <p class="text_content"><strong>4 )Monetization with Integrity:</strong> Supercell has significantly
                increased
                revenue in its games by prioritizing players' enjoyment and implementing ethical strategies. Our company
                has
                designed the game to allow players to fully enjoy the experience without feeling any pressure to make
                in-game
                purchases.</p>
            <p class="text_content"><strong>5 ) Cultivating Communities:</strong> Supercell recognizes the significance
                of
                creating and nurturing active and helpful player communities. The company wants players to connect and
                engage
                with each other while playing the game. They have added clans and social features to make the gaming
                experience
                more enjoyable.</p>
        </div>
        <div class="content_div">
            <h2 class="content-heading">The Future of Mobile Game Development</h2>
            <p class="text_content">The future of mobile game development is inspiring because technology is constantly
                improving, and players are expecting more from their games. This means that game developers have a lot
                ofpotential to create unique and innovative mobile games. Here are some current trends and areas of growththat
                are expected to have a significant impact on the industry:</p><br>
            <p class="text_content"><strong>1 )Augmented Reality (AR) and Virtual Reality (VR):</strong>  The use of augmented reality (AR) and virtual reality (VR) technologies
                    inmobile games is increasing in popularity. These technologies enhance your gaming experience by making it
                    more immersive and interactive. They allow you to engage with virtual worlds in exciting and
                    creative ways
                    fully.</p>
            <p class="text_content"><strong>2 )Cross-Platform Play:</strong> Developers are now working on enabling players to enjoy games on
                    differentdevices without interruptions. This means you can play games on one device and continue playing onanother
                    without any issues. This trend makes it easier for players to access games and helps create a gaming
                    community that includes everyone.</p>
            <p class="text_content"><strong>3 )Artificial Intelligence (AI) and Machine Learning:</strong> We are using AI and machine learning to enhance the gameplay by making it more
                    interactive and adaptable. These technologies can adjust to how players behave, offering challenges and
                    experiences tailored specifically to each player.</p>
            <p class="text_content"><strong>4 )Sustainability and Ethical Monetization:</strong> gaming industry has a growing focus on sustainable and ethical ways
                    of making money from players. This means that companies prioritize players' well-being and ensure that their
                    monetization practices are fair and responsible. Successful companies like Supercell have influenced
                    this
                    trend.</p>
            <p class="text_content"><strong>5 )Narrative Depth and Storytelling:</strong> Mobile games now include more complex stories and narratives, making
                    them more than just games with basic rules. This helps players feel more connected to the game and emotionally
                    engaged.</p>
        </div>
        <div class="content_div">
            <h2 class="content-heading">Conclusion</h2>
            <p class="text_content">Mobile game Development is substantial. It is now a flourishing industry that offers
                exciting and creative experiences for people to enjoy on their smartphones and tablets. </p><br>

            <p class="text_content">Building a mobile game involves a series of steps that showcase human creativity and
                teamwork.</p><br>

            <p class="text_content"> It starts with brainstorming ideas and then moves on to coding and creating the
                game's visual elements. This process highlights the innovative and collaborative efforts of the people involved.
                Supercell is a company that has made significant advancements in the gaming industry. They are known for
                creating incredibly engaging and enjoyable games for players worldwide.</p><br>

            <p class="text_content">Looking ahead, the potential for creating mobile games is limitless. The gaming industry
                constantly evolves with new technology, fair ways to make money and a focus on players' needs.</p><br>

            <p class="text_content">This means that matches will keep getting better and more exciting, pushing the limits of
                what can be done in interactive entertainment. </p><br>

            <p class="text_content">Mobile gaming is a fascinating and growing world where you can do all sorts of cool
                things.
            </p><br>

            <p class="text_content">You can use augmented reality to explore virtual worlds, play games with people on different
                devices, and get lost in exciting stories. </p><br>

            <p class="text_content">It's an excellent place for players and game creators to have fun and discover new
                possibilities.</p><br>
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