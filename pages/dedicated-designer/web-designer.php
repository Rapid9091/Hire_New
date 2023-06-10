<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>HireCoworker | Hire Web Designer</title>

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
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_vedio_test.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_how-may-help.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_hiring-step.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_call-to-action.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_roadmap-2.css">

    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>designer/web-designer.webp");
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
                    Hire Web Designer
                </h2>
                <div class="landing-offer-div">
                    <p>Starts from US $10/Hour - Save 70%</p>
                </div>

                <ul class="landing-ul">
                    <li class="text">
                        Hire highly talented content writers with HireCoworker. Expand your digital footprint with an
                        experienced content writer within your budget.
                    </li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Web Designer
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>

            <?php include_once landing_form; ?>
        </div>
    </div>

    <!-- services start -->
    <section class="full-section" id="full-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">SERVICES</p>
        <h1 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">
            OUR 360 WEB DESIGNING SERVICES
        </h1>
        <div class="container-grid grid grid-3">
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/ecommerce.png" width="100%" height="100%" alt="E-commerce Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">E-commerce Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Make use of eCommerce website designers to bring your physical store online. A template's design can be easily modified later.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/cms.png" width="100%" height="100%" alt="CMS Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">CMS Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Get templates made for CMSs like Joomla, Drupal, and others that are popular. Be at ease; The W3C guidelines will be followed by your design.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/blog.png" width="100%" height="100%" alt="Blog Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Blog Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Are you looking for a website design company in India that can make your blog easier to read? Don't waste any time. We meet the needs.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/parallax.png" width="100%" height="100%" alt="Parallax Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Parallax Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    You can increase the likeability of your website by hiring a web designer online for a design that is appealing to the eye. Engage your audience.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/wordpress.png" width="100%" height="100%" alt="WordPress Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">WordPress Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Is your WordPress website inadequate? Utilizing the appropriate widgets and plugins, a dedicated web designer can save the day.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/website-template.png" width="100%" height="100%" alt="Web Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Web Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Create your own company website. You can incorporate your text and images with little to no editing from your offshore web designers.

                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/responsive.png" width="100%" height="100%" alt="Responsive Website Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Responsive Website Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Employ a responsive web designer to ensure that users of your website have the best possible experience on any device.

                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/landing-page.png" width="100%" height="100%" alt="Landing Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Landing Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Designing offshore landing pages can help you get people to stay, look around, and, even better, start a conversation.

                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/blogger.png" width="100%" height="100%" alt="Blogger Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Blogger Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    You need to outsource the design of your blog and get it up and running because blogging is becoming the new communication tool of the modern era.

                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/tumblr.png" width="100%" height="100%" alt="Tumblr Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">
                                Tumblr Template Design
                            </p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Tumblr is known for covering a wide range of topics and ideas. You can get the most out of this platform by hiring professional design services.

                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/sharepoint.png" width="100%" height="100%" alt="SharePoint Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">SharePoint Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Web design outsourcing is designed specifically to help you improve the performance of your SharePoint site.
                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/drupal.png" width="100%" height="100%" alt="Drupal Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Drupal Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    To stand out, you need a design that is made just for you. As a leading web agency, we are able to make sure that your specific needs are met.

                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/typo.png" width="100%" height="100%" alt="Typo3 Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Typo3 Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    This CMS is a great option due to its modularity and ease of extension installation. Utilize our web design services to get the most out of it.

                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/magento.png" width="100%" height="100%" alt="Magento Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Magento Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Make use of Magento template designers to create a visually appealing Magento store and enhance the user experience.
                </p>
            </div>
            <div class="container-section-boxes more less">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/email.png" width="100%" height="100%" alt="Emailer/ Newsletter Template Design" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <p class="h5">Emailer/ Newsletter Template Design</p>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Inform your customers about the most recent changes and offers. This can be realized with the assistance of your Indian or USA web designer.

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
        <h1 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHY
            OUTSOURCE WEB DESIGNING SERVICES WITH COWORKER</h1>
        <div class="flex content-reason">
            <div class="reason-side">
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Dedicated and Professional Web Designers</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/experience.png" width="40px" height="40px" alt="hire web-designer" loading="lazy">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Detailed Oriented, Imaginative, Focused and Attentive</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/power-content.png" width="40px" height="40px" alt="hire web-designer" loading="lazy">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Expert In Different Designing Tools</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/expert.png" width="40px" height="40px" alt="hire article writer">
                    </div>
                </div>
            </div>
            <div class="reason_center_img" data-aos="zoom-in" data-aos-duration="400">
                <img src="<?= get_img(); ?>designer/web-designing.png" width="100%" height="100%" alt="hire web designer">

            </div>
            <div class="reason-side">
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/free_content.png" width="40px" height="40px" alt="hire web-designer">
                    </div>
                    <div class="reason-dtl">
                        <p>Flexible Approach</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>content-writing/copywriting.png" width="40px" height="40px" alt="hire web-designer" loading="lazy">
                    </div>
                    <div class="reason-dtl">
                        <p>Daily Or Weekly Report</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/refund.png" width="40px" height="40px" alt="hire web-designer">
                    </div>
                    <div class="reason-dtl">
                        <p>No Hidden Cost</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- why outsource us end -->

    <!-- serviec type start -->
    <section class="services-types" style="background-color:#F1F8FB; padding: 5% 8%;">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HOW MAY HELP YOU</p>
        <h1 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">6 REASONS TO HIRE WEB DESIGNER FROM COWORKER</h1>
        <div class="why_about">
            <p class="text text-center">When building your website, the workflows must be such that it attracts more visitors. To optimise your site, you will need the help of a competent web design company. The dedicated website designers at HireCoworker promise amazing visuals that successfully represent your brand's message and individual character.</p>
        </div>

        <div class="services-col-3">
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon_blank_bg">
                    <i class='bx bx-refresh'></i>
                </div>
                <div class="service-dtl">
                    <p class="h4">Free Trial</p>
                    <p>Without a shadow of a doubt, outsource services for web design and development. We offer a risk-free trial with no commitment to purchase. Only after you are absolutely certain of our capability should you proceed.
                    </p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                <div class="icon_blank_bg">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="service-dtl">
                    <p class="h4">Technical Expertise</p>
                    <p>UX and UI design, HTML5, CSS3, JavaScript, Bootstrap, Sketch, Figma, and other technologies Choose your preference; this is the end of your search for technically proficient web designers in India and the United States.
                    </p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <i class='bx bxl-unity'></i>
                </div>
                <div class="service-dtl">
                    <p class="h4">Best Web Service</p>
                    <p>HireCoworker has redefined web design services by offering a strict NDA and a money-back guarantee of 100 percent. Only one web design company in India or the United States offers risk-free services.
                    </p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <i class='bx bx-target-lock'></i>
                </div>
                <div class="service-dtl">
                    <p class="h4">Scope Of Services</p>
                    <p>You can hire web designers from us to address the growing use of mobile devices. Additionally, you can select one of our ecommerce website designers to assist you in online product sales.
                    </p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <ion-icon name="ban-outline"></ion-icon>
                </div>
                <div class="service-dtl">
                    <p class="h4">Zero Overheads</p>
                    <p>You can save money on office rent, software and hardware costs, and infrastructure costs by working with other web design outsourcing companies in India or the United States. You can also save money on recruitment fees with us.
                    </p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <i class='bx bxl-graphql'></i>
                </div>
                <div class="service-dtl">
                    <p class="h4">Diverse Experience</p>
                    <p>Are you looking for a senior? Do you need a web designer with more than ten years of experience? Or is it possible for someone with mid-level experience to do this job? You can opt for either option.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- serviec type end -->

    <!-- vedio start -->
    <section class="vedio-testimonial-section">
        <div class="vedio-test">
            <div class="vedio_test_row">
                <div class="vedio_about why-choose-section-content">
                    <p>Collaborate With Us</p>
                    <p class="h4" class="section-heading">Why Hire <span>Co-Woker</span> ?</p>
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
                <div class="vedio_frame">
                    <a class="fancybox" href="https://youtu.be/010y9jBeM-g"><img src="<?= get_img() ?>coworker-vid.webp" width="100%" height="100%" alt="hire web designer" class="width-100"></a>
                </div>
            </div>

        </div>
    </section>
    <!-- vedio end -->

    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">EXPERTS</p>
        <p class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HIRE OUR
            BEST WEB DESIGNER</p>
        <div class="expert-grid">
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>web_designer.jpg" class="expert-image" alt="hire web designer" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <h2>BRAVO A.</h2>
                    <P class="light-grey">WEB DESIGNER</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">I design brand identities, mobile app UI & UX, design systems, websites and graphic design for advertising. We use various tools to make the work smooth and fast for the clients.
                </p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>HTML</p>
                    </div>
                    <div class="skill">
                        <p>CSS</p>
                    </div>
                    <div class="skill">
                        <p>JAVASCRIPT</p>
                    </div>
                    <div class="skill">
                        <p>PHOTOSHOP</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE XD</p>
                    </div>
                    <div class="skill">
                        <p>FIGMA</p>
                    </div>
                    <div class="skill">
                        <p>3+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>designer/angela.jpg" class="expert-image" alt="hire web designer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">ANGELA M.</h2>
                    <P class="light-grey">WEB DESIGNER</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.7/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">My expertise spans multiple industries and topics, and I
                    am skilled at crafting compelling narratives and engaging readers.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>WEB DESIGN</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE PHOTOSHOP</p>
                    </div>

                    <div class="skill">
                        <p>ADOBE ILLUSTRATOR</p>
                    </div>
                    <div class="skill">
                        <p>UI & UX</p>
                    </div>
                    <div class="skill">
                        <p>CSS</p>
                    </div>

                    <div class="skill">
                        <p>4+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>designer/andrew.jpg" class="expert-image" alt="hire web designer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">ANDREW L.</h2>
                    <P class="light-grey">WEB DESIGNER</P>
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
                        <p>SQURESPACE</p>
                    </div>
                    <div class="skill">
                        <p>REACT JS</p>
                    </div>
                    <div class="skill">
                        <p>FIGMA</p>
                    </div>
                    <div class="skill">
                        <p>CSS</p>
                    </div>
                    <div class="skill">
                        <p>WIREFRAMING</p>
                    </div>
                    <div class="skill">
                        <p>4+</p>
                    </div>


                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
        </div>
    </section>
    <!-- expert section end -->

    <!-- roadmap start -->
    <section class="roadmap-2">
        <p class="p-pink">PROCESS</p>
        <h3 class="section-heading ">OUR DESIGNING PROCESS STEPS</h3>
        <div class="timeline">
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>RESEARCH</h2>
                    <p class="text">
                        Before beginning the design process for a client, it is important to do research to understand
                        their business, target audience, and goals for the project. Some specific areas you may want to
                        research include.
                    </p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>CONCEPTUALISATION</h2>
                    <p class="text">A prototype is a preliminary version of a product or design that is used for testing
                        and evaluation. In the design process, creating a prototype can be an important step before
                        finalizing the design.Overall, creating a prototype can be a useful way to ensure that the final
                        design meets the client's needs and expectations.</p>
                </div>
            </div>
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>PRESENTATION</h2>
                    <p class="text">If the design is approved, the designer may create the final version of the design
                        and prepare it for production or implementation. This may involve creating detailed design
                        assets, such as vector graphics or high-resolution images.</p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>REVISIONS</h2>
                    <p class="text">Before launch it, our testing team test or trial it very carefully, when client
                        approved it then we launch it. And we are always happy to help you if there is any bug/issue.
                    </p>
                </div>
            </div>
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>LAUNCH</h2>
                    <p class="text">If the design is approved, the designer may create the final version of the design
                        and prepare it for production or implementation. This may involve creating detailed design
                        assets, such as vector graphics or high-resolution images.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- roadmap end -->

    <!-- remote benifit 2 start -->
    <section class="remote-benifit-2 ">
        <p class="p-pink">WHY HIRE VIRTUAL STAFF</p>
        <h3 class="dark-section-heading">REMOTE WORK BENIFITS FOR EMPLOYERS</h3>
        <div class="step-row">
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/easy-search.png" width="100%" height="100%" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>1. Easy Requirement</p>
                </div>
                <img class="dotted-img-up" src="<?= get_img() ?>remote-benifit/dotted-white.png" width="100%" height="100%" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/increased-productivity.png" width="100%" height="100%" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>2. Increased Productivity</p>
                </div>
                <img class="dotted-img-down" src="<?= get_img() ?>remote-benifit/dotted-white.png" width="100%" height="100%" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/reduction.png" width="100%" height="100%" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>3. Reduced Cost</p>
                </div>
                <img class="dotted-img-up" src="<?= get_img() ?>remote-benifit/dotted-white.png" width="100%" height="100%" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img() ?>remote-benifit/customer-support.webp" width="100%" height="100%" alt="remote-benfits">
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
    <section class="hiring_step">

        <div class="grid  why-row" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="hiring_step_order-1">
                <div>
                    <h3 class="section-heading">HIRE WEB DESIGNER ONLINE WITH EASY STEP</h3>
                    <p class="text">It's easy to hire offshore web design experts. Web design outsourcing is made simple for businesses of all sizes thanks to our innovative business model.</p>
                    <button class="btn hire-btn">Hire Web Designer</button>
                </div>
            </div>
            <div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/brief.png" alt="hire web designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Talk To Us</h4>
                        <p>Please describe your initial need for web design outsourcing services.
                        </p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/handpick.png" width="64px" height="64px" alt="hire web designer">
                    </div>
                    <div class="step-dtl">
                        <h4>Handpick Best Expert</h4>
                        <p>We are distinct from any other website design company in India or the United States thanks to our triple-vetted resources.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/team.png" alt="hire web designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Build Your Team</h4>
                        <p>Before outsourcing web design, conduct Skype interviews with candidates. You may assign tests to them.
                        </p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/going.png" alt="hire web designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Get Going</h4>
                        <p>Shorten the hiring process. It is now possible to hire offshore website designers in eight hours.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- hiring-step end -->




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
    <?php include_once cta;
    ?>
    <!--end call to action  -->





    <!-- faq section -->
    <section class="faq-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">FAQs</p>
        <h1 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">Do You Have
            Questions?</h1>
        <div class="faqs">
            <div class="faqs-child">
                <details>
                    <summary>For what shift hours can I hire web designer in India or USA?</summary>
                    <div class="faq__content">
                        <p class="text">Your dedicated web designers will work the shift hours that are most appropriate for your company, whether they are Indian or local (in the UK, the US, etc.), or in combination. Our schedules are extremely adaptable.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Can you supervise my offshore web design project?</summary>
                    <div class="faq__content">
                        <p class="text">You can hire a web designer in India or the United States knowing that our HR staff will always keep an eye on them. Install tracking software when you outsource your web design project to us.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Is my offshore website design mine to keep?</summary>
                    <div class="faq__content">
                        <p class="text">Your work will always be completely yours to keep. We do not own your concepts, prototypes, or final designs if you use our web design services. You have them.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How do I communicate with my designer?</summary>
                    <div class="faq__content">
                        <p class="text">When you use HireCoworker to hire a website designer, we keep all communication channels open. You can get in touch with your designer via Skype, email, or phone.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What is the pricing structure of web design services?</summary>
                    <div class="faq__content">
                        <p class="text">Prepayment is required for our expert website design services. You must pay the first month's invoice and the 15-day notice period fee to hire a web designer from HireCoworker.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What happens when my Indian or USA web designer takes leaves?</summary>
                    <div class="faq__content">
                        <p class="text">Sadly, there is no immediate replacement. However, our team model is designed to deal with any such circumstance, allowing you to utilize the expertise of other web design professionals.
                        </p>
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