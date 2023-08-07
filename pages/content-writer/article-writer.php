<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>HireCoworker | Hire Articles Writer</title>

    <?php include_once head; ?>

    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_faq.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_testimonial-slider.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_landing-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_new-services.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_expert.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_remote-benifit2.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_pricing.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_why-outsource-us.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_why-coworker.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_how_may_help2.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_industries.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_hiring-step.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_call-to-action.css">
    <link rel="stylesheet"href="<?= get_css() ?>/logo.css">

    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>content-writing/article-writer.jpg");
        }
    </style>
</head>

<body>
    <div class="landing-section-services" id="hire">

        <?php
        include_once header;
        ?>

        <div class="landing-section-parent grid grid-2">
            <div class="landing-section-content">
                <h2 class="main-heading ">
                    Hire Article writer
                </h2>
                <div class="landing-offer-div">
                    <p>Starts from US $10/Hour - Save 70%</p>
                </div>

                <ul class="landing-ul">
                    <p class="text">
                        Hire highly talented content writers with HireCoworker. Expand your digital footprint with an
                        experienced content writer within your budget.
                    </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Articles Writer
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>

            <?php include_once landing_form; ?>
        </div>
    </div>

    <!-- services start -->
    <section class="full-section" id="full-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">SERVICES</p>
        <h4 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">
            COMPELETE ARTICLE WRITING SERVICES
        </h4>
        <div class="container-grid grid grid-3">
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/seo-white.png" alt="seo optimized articles">
                        </div>
                        <div class="box-title-heading">
                            <h5>SEO OPTIMIZED ARTICLES</h5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Articles optimized for keywords, content optimized for anchor text, skyscraper posts, and other strategies can help you improve your SEO rankings. In India or USA, HireCoworker's article writers also write guest posts to build links and improve search visibility.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/domain_white.png" alt="hire domain specific content writer">
                        </div>
                        <div class="box-title-heading">
                            <h5>DOMAIN SPECIFIC ARTICLES</h5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Professional writers from HireCoworker are a boon for businesses with limited time. You will receive well-researched, well-structured, and informative articles on topics pertaining to your domain and industry thanks to their extensive writing experience across a wide range of subjects.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/social-media.png" alt="hire social media content writer">
                        </div>
                        <div class="box-title-heading">
                            <h5>SOCIAL MEDIA ARTICLES</h5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Make a splash on popular social media platforms by hanging out where your audience is! A powerful strategy for establishing your brand's authority among your target audience is to write long-form articles for popular social media platforms like LinkedIn and Facebook.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/lifestyle.png" alt="hire lifestyle articles writer">
                        </div>
                        <div class="box-title-heading">
                            <H5>LIFESTYLE ARTICLES</H5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    There's a good reason why the lifestyle market is big business. Nowadays, people are more aware than ever. Get lifestyle articles written for travel, health, hospitality, beauty, and fashion. These articles will make your website's content more interesting to readers and will also keep them interested.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/education.png" alt="hire educatuion writer">
                        </div>
                        <div class="box-title-heading">
                            <H5>EDUCATIONAL ARTICLES</H5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    In the field of education? Do you require extensive content that is based on training? HireCoworker has expert article writers who can assist you in creating informative, well-researched articles for your subject as well as course curriculums.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/ghost_posting.png" alt="hire ghost posting articles writer">
                        </div>
                        <div class="box-title-heading">
                            <H5>GHOST POSTING ARTICLES</H5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    No time to write your own articles? You can still create a rich vault of articles for your content marketing campaigns, thanks to HireCoworker’s expert ghost writers who can do everything from writing to editing to formatting.
                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/research.png" alt="hire research articles writer">
                        </div>
                        <div class="box-title-heading">
                            <H5>RESEARCH ARTICLES</H5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Our content ninjas don't find research to be tedious! A long-form, well-researched article screams authority like nothing else. With the help of our dedicated Indian or American article writers, you can create robust cluster pages.
                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/news.png" alt="hire news articles writer">
                        </div>
                        <div class="box-title-heading">
                            <H5>NEWS ARTICLES</H5>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Many of the article writers for HireCoworker are former journalists who have worked for major media outlets. As a result, they are naturally good at writing news articles due to their "news nose." Give your readers a deeper understanding of the happenings around them.
                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number pink-bg flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>content-writing/personality.png" alt="hire personility profile articles writer">
                        </div>
                        <div class="box-title-heading">
                            <H5> PERSONILITY PROFILE ARTICLES</H5>
                        </div>
                    </div>
                </div>
                <p class="text">
                    To create a realistic persona of popular personalities, personality-based articles necessitate smart research and careful fact-sifting. To do just that, HireCoworker's writers from India or the United States combine wit with creative flair.
                </p>
            </div>

        </div>
        <p style="text-align:center;">
            <button class="view_more_btn" id="view_more_btn" value="#full-section">View More</button>
        </p>
    </section>
    <!-- services end -->

    <!-- why outsource us start -->
    <section class="why_content_writing">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHY CHOOSE US</p>
        <h4 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHY
            OUTSOURCE ARTICLES WRITING SERVICES WITH COWORKER</h4>
        <div class="flex content-reason">
            <div class="reason-side">
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Steady, Reliable Content Stream</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/copywriting.png" alt="hire articles writer" loading="lazy">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Power Your Content Marketing</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/power-content.png" alt="hire articles writer" loading="lazy">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Improve Your SEO Rankings, Get More Traffic</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/seo-rank.png" alt="hire article writer">
                    </div>
                </div>
            </div>
            <div class="reason_center_img" data-aos="zoom-in" data-aos-duration="400">
                <img src="<?= get_img(); ?>content-writing/article-writer.png" width="100%" alt="hire article writer">

            </div>
            <div class="reason-side">
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/free_content.png" alt="hire articles writer">
                    </div>
                    <div class="reason-dtl">
                        <p>Easily Scale Your Content Requirements</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/idea.png" alt="hire articles writer">
                    </div>
                    <div class="reason-dtl">
                        <p>Stop Worrying About New Content Ideas</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/subscribe.png" alt="hire articles writer">
                    </div>
                    <div class="reason-dtl">
                        <p>Get More Subscriber And Conversation</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- why outsource us end -->

    <!-- how may help  you start -->
    <section class="how_may_help">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HOW MAY HELP YOU</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">6 REASONS
            TO HIRE ARTICLE WRITER FROM COWORKER</h3>
        <div class="why_about">
            <p class="text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis delectus
                dignissimos sed maiores. Aliquid cupiditate est nesciunt, corrupti consectetur ipsam. </p>
        </div>
        <div class="design-services-2">
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <img src="<?= get_img() ?>content-writing/free-sample.png" alt="hire article writer" loading="lazy">
                </div>
                <div class="service-dtl">
                    <h4>Free Sample</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil corrupti commodi laudantium?</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <img src="<?= get_img() ?>content-writing/alarm.png" alt="hire article writer" loading="lazy">
                </div>
                <div class="service-dtl">
                    <h4>Fast turnaournd time</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum explicabo vitae delectus.</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <img src="<?= get_img() ?>content-writing/eye.png" alt="hire article writer" loading="lazy">
                </div>
                <div class="service-dtl">
                    <h4>Hawk eyed editing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima aperiam tempora?</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <img src="<?= get_img() ?>content-writing/online-research.png" alt="hire article writer" loading="lazy">
                </div>
                <div class="service-dtl">
                    <h4>Intelligent Online Research</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas velit nostrum adipisci!</p>
                </div>
            </div>

            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <img src="<?= get_img() ?>content-writing/revision.png" alt="hire article writer" loading="lazy">
                </div>
                <div class="service-dtl">
                    <h4>unlimited revision</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dignissimos quis aperiam.</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <img src="<?= get_img() ?>content-writing/experience-64.png" alt="hire article writer" loading="lazy">
                </div>
                <div class="service-dtl">
                    <h4>Arverage 7+ experience</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dolorum perspiciatis vel!
                </div>
            </div>

        </div>
    </section>
    <!-- how may help  you end -->

    <!-- why choose section start here -->

    <section class="why-choose-section">
        <div class="grid grid-2 width-100 why-choose-section-container">
            <div class="why-choose-section-content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="400" data-aos-delay="100">
                <p>Collaborate With Us</p>
                <h4 class="section-heading">Why Hire <span>Co-Woker</span> ?</h4>
                <p class="text">Customers from all over the world depend on our skilled developers to get high-quality,
                    sector-specific web and mobile solutions. Employ our devoted developers to grow your company. They
                    have expertise in a variety of technologies and fields.
                </p>
                <ul class="why-choose-ul">
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> Expertise in innovations</li>
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> 9+ years of rich experience</li>
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> 9/10 client satisfaction score</li>
                    <li class="text flex-center">
                        <i class='bx bxs-check-shield'></i> 100% money-back guarantee
                    </li>
                    <li class="text flex-center"><i class='bx bxs-check-shield'></i> Transparency is Guaranteed</li>
                </ul>
            </div>
            <div class="why-choose-section-img grid-center" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="400" data-aos-delay="100">
                <img src="<?= get_img() ?>Business decisions-broo.png" alt="Hire coworker">

            </div>
        </div>
    </section>
    <!-- why choose section end here -->

    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">EXPERTS</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HIRE OUR
            BEST CONTENT WRITER</h3>
        <div class="expert-grid">
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>content-writing/content-expert.jpg" class="expert-image" alt="hire content writer" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <h2>MARRY L.</h2>
                    <P class="light-grey">Content Writer</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">As a blog writer since 8 years, I specialize in creating
                    informative, engaging, and well-written content for a variety of audiences.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>BLOGS</p>
                    </div>
                    <div class="skill">
                        <p>WEB PAGES</p>
                    </div>
                    <div class="skill">
                        <p>SOCIAL MEDIA POST</p>
                    </div>
                    <div class="skill">
                        <p>PRESS RELEASE</p>
                    </div>
                    <div class="skill">
                        <p>3+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>content-writing/content-expert2.jpg" class="expert-image" alt="hire content writer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">JAMES M.</h2>
                    <P class="light-grey">Sr. Content Writer</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.7/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">My expertise spans multiple industries and topics, and I
                    am skilled at crafting compelling narratives and engaging readers.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>ARTICLES</p>
                    </div>
                    <div class="skill">
                        <p>SEO CONTENT</p>
                    </div>

                    <div class="skill">
                        <p>BROUCHURES</p>
                    </div>
                    <div class="skill">
                        <p>NEWSLETTERS</p>
                    </div>

                    <div class="skill">
                        <p>4+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>content-writing/content-expert3.jpg" class="expert-image" alt="hire content writer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">ASAD A.</h2>
                    <P class="light-grey">Sr. Content Writer</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.5/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">As a senior blog writer, I have extensive experience
                    creating high-quality, thought-provoking content and have a industry exposure of more than 10 years
                    .</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>EBOOKS</p>
                    </div>
                    <div class="skill">
                        <p>PRODUCT DESCRIPTIONS</p>
                    </div>
                    <div class="skill">
                        <p>LANDING PAGES</p>
                    </div>
                    <div class="skill">
                        <p>EDITING</p>
                    </div>


                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
        </div>
    </section>
    <!-- expert section end -->

    <!-- remote benifit 2 start -->
    <section class="remote-benifit-2 ">
        <p class="p-pink">WHY HIRE VIRTUAL STAFF</p>
        <h3 class="dark-section-heading">REMOTE WORK BENIFITS FOR EMPLOYERS</h3>
        <div class="step-row">
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/easy-search.png" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>1. Easy Requirement</p>
                </div>
                <img class="dotted-img-up" src="<?= get_img() ?>remote-benifit/dotted-white.png" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/increased-productivity.png" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>2. Increased Productivity</p>
                </div>
                <img class="dotted-img-down" src="<?= get_img() ?>remote-benifit/dotted-white.png" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/reduction.png" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>3. Reduced Cost</p>
                </div>
                <img class="dotted-img-up" src="<?= get_img() ?>remote-benifit/dotted-white.png" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/customer-support.png" alt="remote-benfits">
                </div>
                <div class="step-row-item-number">
                    <p>4. 24X7</p>
                </div>
            </div>
        </div>

    </section>

    <!-- benfit section end -->


    <?php
    $post_name = "Sr. Content Writer";
    include_once pricing; ?>

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
    <!-- hiring-step end -->

    <!-- Industris we Cover start -->
    <!-- -------------------------- -->
    <section class="industries-section section-padding">
        <div class="container">
            <div class="section_title">
                <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">INDUSTRIES
                </p>
                <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">
                    Industries We Cover</h3>
                <h2 class="section-heading"></h2>

            </div>
            <div class="row">
                <div class="col-3 ">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="business-sharp"></ion-icon>
                            </div>
                            <h4>Real Estate <br />Property</h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                Providing services in the field of Real Estate.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="cart-sharp"></ion-icon>
                            </div>
                            <h4>
                                Ecommerce<br />
                                Retail & B2B
                            </h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                We are providing services in the field of Ecommerce Retail & B2B.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="fast-food-sharp"></ion-icon>
                            </div>
                            <h4>Food & <br />Restaurant</h4>
                        </div>
                        <div class="content">
                            <p class="text">
                                Covered Hotel & Restaurant industries</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="trail-sign-sharp"></ion-icon>
                            </div>
                            <h4>Tour & <br />Travel</h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                We have a nice client base in Tour & Travel industries
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="heart-sharp"></ion-icon>
                            </div>
                            <h4>Healthcare and <br />diagnosis</h4>
                        </div>
                        <div class="content">
                            <p class="text">
                                Great experience in the Healthcare industries</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="wallet-sharp"></ion-icon>
                            </div>
                            <h4>Banking, Finance <br />& Insurance</h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                Providing mobile and web app services in Banking, Finance &
                                Insurance
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="stop-circle-sharp"></ion-icon>
                            </div>
                            <h4>Blockchain</h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                We Covered the blockchain field with our web designing services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="car-sharp"></ion-icon>
                            </div>
                            <h4>Automotive</h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                Covered Automotive field with our mobile app services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="tv-sharp"></ion-icon>
                            </div>
                            <h4>Entertainment</h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                We Covered Entertainment industries with our web designing
                                services
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="stop-circle-sharp"></ion-icon>
                            </div>
                            <h4>News</h4>
                        </div>
                        <div class="content">
                            <p class="text">

                                Covered all news industries with our digital marketing services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="pencil-sharp"></ion-icon>
                            </div>
                            <h4>Legal</h4>
                        </div>
                        <div class="content">
                            <p class="text">
                                Covered Legal field with our services.</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon">
                                <ion-icon name="home-sharp"></ion-icon>
                            </div>
                            <h4>Home Services</h4>
                        </div>
                        <div class="content">
                            <p class="text">
                                Providing web designing & mobile app for Home Services field.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------- -->


    <!-- testimonial slider section start here -->
    <?php

    $testimonial1 = "I was extremely impressed with the content that was written for my blog. The writer did an excellent job of understanding my target audience and crafting engaging, informative content that resonated with them. The writing was of a high quality and the piece was well-researched and well-organized. I would highly recommend this writer to anyone in need of top-notch content.";
    $test_name1 = "Gritch Hales";
    $test_role1 = "Blogger";
    $user_img1 = "hire-developer/dev-test-01.jpeg";


    $testimonial2 = "The writer did an excellent job of capturing the essence of my topic and presenting it in a clear, concise, and engaging manner. The writing was of a high quality and the piece was well-researched and well-organized. I would highly recommend this writer to anyone in need of top-notch content. I just loved their work for me they helped me alot. ";
    $test_name2 = "Cant thre";
    $test_role2 = "Article Writter";
    $user_img2 = "hire-developer/dev-test-02.jpeg";


    $testimonial3 = "I was blown away by the content that was written for my biography book. The writer did an excellent job of capturing the essence of my life story and presenting it in a way that was both engaging and informative. The writing was of a high quality and the piece was well-researched and well-organized. I would highly recommend this writer to anyone in need of top-notch content.";
    $test_name3 = "Greta Nike";
    $test_role3 = "Enterpeneur";
    $user_img3 = "hire-developer/dev-test-03.jpeg";

    $testimonial4 = "I am extremely satisfied with the content that was written for my landing page. The writer did an excellent job of understanding my business and crafting compelling, persuasive copy that effectively conveys my value proposition. The writing was of a high quality and the piece was well-organized and easy to read. I would highly recommend this writer to anyone in need of top-notch content for their landing page.";
    $test_name4 = "Robert Michael";
    $test_role4 = "MD & CEO";
    $user_img4 = "hire-developer/dev-test-04.jpeg";

    include_once testimonial_slider; ?>
    <!-- testimonial; slider section end here -->

    <!-- call to action -->
    <?php include_once cta; ?>
    <!--end call to action  -->



    <!-- faq section -->
    <section class="faq-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">FAQs</p>
        <h5 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">Do You Have
            Questions?</h5>
        <div class="faqs">
            <div class="faqs-child">
                <details>
                    <summary>How can I hire an article writer from HireCoworker?
                    </summary>
                    <div class="faq__content">
                        <p class="text">At HireCoworker, you can start working with an article writer in as little as 48 hours. Simply fill out our form with the specifics of your request. Receive CVs that have been checked by our triple-checked article writers. Conduct phone or video conference interviews with selected candidates, or assign tests. Are you happy with the outcome? Hire them right away and get started right away.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How good are your writers?</summary>
                    <div class="faq__content">
                        <p class="text">When it comes to hiring article writers from India or the United States, HireCoworker has one of the most stringent recruitment processes in place. Before being shortlisted, each candidate goes through multiple rounds of in-depth written tests for grammar and language proficiency as well as multiple rounds of interviews. HireCoworker's professional article writers are the best in the business, and they will write content for you.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How quickly can I get content?
                    </summary>
                    <div class="faq__content">
                        <p class="text">This typically varies based on the type of content, the subject's complexity, and the amount of time required for research. A 500-word, high-quality, well-researched article takes three to four hours to write, including editing.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What are your writer's qualifications?</summary>
                    <div class="faq__content">
                        <p class="text">Our writers are all graduates, most with English or Mass Communication and Journalism degrees from universities.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Are your articles search engine optimized (SEO)?</summary>
                    <div class="faq__content">
                        <p class="text">Yes! Our skilled SEO article writers from India or the United States are aware of the most recent SEO writing best practices. You will always get content that is authoritative, which is so important for SEO success.</p>
                    </div>
                </details>
            </div>
            
        </div>
    </section>
    <!--faq end -->

    <!-- Blog section page -->
    <!-- -------------------------- -->

    <?php include_once blog_news; ?>
    <!-- blog test end -->

    <!-- footer and script added here -->
    <?php
    include_once page_bottom;
    ?>



</body>

</html>