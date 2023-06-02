<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>


    <title>Hire Graphic-Designer</title>

    <?php include_once head; ?>


    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_faq.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_pricing.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_landing-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_expert.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_remote-benifit.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_testimonial-slider.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_vedio_test.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_roadmap-2.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_how-may-help.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_hiring-step.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_why-outsource-us.css">
    <link rel="stylesheet" href="<?= get_css() ?>dedicated-designer/dedicated-designer.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_industries.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_tools_used.css">


    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>designer/graphic-designer.jpg");
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
                    Hire Graphic Designer
                </h2>
                <div class="landing-offer-div">
                    <p>Starts from US $10/Hour - Save 70%</p>
                </div>

                <ul class="landing-ul">
                    <p class="text">
                        Get rigorously vetted designer teams that best match your timezone and
                        work model. Save your hiring time and budget with Remotebase.
                    </p>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Graphic Designer Experts
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>

            <?php include_once landing_form; ?>
        </div>
    </div>


    <section class="design-services-section" style="background-color:#F1F8FB; padding:5% 8%;">
        <p class="p-pink">SERVICES</p>
        <h3 class="section-heading">OUR GRAPHIC DESIGNING SERVICES</h3>
        <div class="services-col-3">
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <i class='bx bx-briefcase'></i>
                </div>
                <div class="service-dtl">
                    <h3>Carporate & Business identity</h3>
                    <p>With attractive logos, company stationery, business cards, letter heads, envelopes, and other items, you can create an engaging corporate identity.</p>
                </div>
            </div>
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                <div class="icon">
                    <i class='bx bx-file'></i>
                </div>
                <div class="service-dtl">
                    <h3>Blog Graphics</h3>
                    <p>With creatively designed brochures, flyers, billboards, book covers, and blog graphics, you can attract more customers and grow your following.
                    </p>
                </div>
            </div>
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon">
                    <i class='bx bx-color'></i>
                </div>
                <div class="service-dtl">
                    <h3>Marketing Materials</h3>
                    <p>With some robust and responsive ads for your marketing campaigns, you can dramatically increase both your conversion rate and your market base.
                    </p>
                </div>
            </div>
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="150">
                <div class="icon">
                    <i class='bx bx-printer'></i>
                </div>
                <div class="service-dtl">
                    <h3>Printing & Publishing</h3>
                    <p>Use these clever book covers, jacket designs, magazine designs, newspaper templates, and more to make your printed work irresistible.
                    </p>
                </div>
            </div>
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <ion-icon name="globe-outline"></ion-icon>
                </div>
                <div class="service-dtl">
                    <h3>Website Design</h3>
                    <p>Using graphics that are just as effective as the written word, you can make your landing pages, squeeze pages, and web pages more appealing.
                    </p>
                </div>
            </div>

            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                <div class="icon">
                    <ion-icon name="game-controller-outline"></ion-icon>
                </div>
                <div class="service-dtl">
                    <h3>Game Designing</h3>
                    <p>Any online game needs good design that goes with the story. Integrate your design with the story of the game.</p>
                </div>
            </div>
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon">
                    <ion-icon name="image-outline"></ion-icon>
                </div>
                <div class="service-dtl">
                    <h3>Photo and Image Editing</h3>
                    <p>Correct flaws in photos and images and add new, creative elements to make them more appealing. Digital content is greatly enhanced by visuals. </p>
                </div>
            </div>
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="150">
                <div class="icon">
                    <i class='bx bxs-color-fill'></i>
                </div>
                <div class="service-dtl">
                    <h3>Custom Illustrations</h3>
                    <p>Our graphic designers are experts in the creative processes, from gaming characters to art sketches, graphic illustrations, comic illustrations, contemporary food illustrations, website illustrations, and book illustrations.
                    </p>
                </div>
            </div>
            <div class="services-item" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <i class='bx bx-vector'></i>
                </div>
                <div class="service-dtl">
                    <h3>Animated Graphics</h3>
                    <p>In order to enhance your brand's identity, our graphic design professionals are skilled at creating stunning, highly imaginative vector graphics in vibrant colors.</p>
                </div>
            </div>

        </div>


    </section>

    <!-- why choose us start -->
    <section class="why_content_writing">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHY CHOOSE US</p>
        <h4 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHY
            OUTSOURCE GRAPHIC DESIGNER WITH COWORKER</h4>
        <div class="flex content-reason">
            <div class="reason-side">
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Establishment in 2013</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/establishment.png" alt="hire graphic designer" loading="lazy">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>9/10 client satisfaction score</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/rating.png" alt="hire graphic designer">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>7 Global offices (including the US and UK)</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/global.png" alt="hire graphic designer">
                    </div>
                </div>
            </div>
            <div class="reason_center_img" data-aos="zoom-in" data-aos-duration="400">
                <img src="<?= get_img(); ?>designer/designer.png" width="100%" alt="hire graphic designer">

            </div>
            <div class="reason-side">
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/ipr.png" alt="hire graphic designer">
                    </div>
                    <div class="reason-dtl">
                        <p>Complete Intellectual Property Ownership</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/innovations.png" alt="hire graphic designer">
                    </div>
                    <div class="reason-dtl">
                        <p>Expertise In Innovations</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/refund.png" alt="hire graphic designer">
                    </div>
                    <div class="reason-dtl">
                        <p>100% Money Back Gaurantee</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- why choose us end -->

    <!-- serviec type start -->
    <section class="services-types" style="background-color:#F1F8FB; padding: 5% 8%;">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HOW MAY HELP YOU</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">6 BENIFITS OF OUTSOURCING GRAPHIC DESIGNER FROM COWORKER</h3>
        <div class="why_about">
            <p class="text text-center">One of the best graphic design outsourcing companies in India or the United States is HireCoworker. HireCoworker's dedicated graphic designers promise stunning images that effectively convey your brand's message and distinctive identity. There are six significant advantages to using HireCoworker to hire graphic designers in India:</p>
        </div>

        <div class="services-col-3">
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
                <div class="icon">
                    <i class='bx bx-refresh'></i>
                </div>
                <div class="service-dtl">
                    <h4>Free Trial</h4>
                    <p>Try us out to see how good a graphic designer we are before you hire us. If you are completely satisfied, only use our graphic design services.</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                <div class="icon">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="service-dtl">
                    <h4>Team collaboration</h4>
                    <p>You have complete control because you can hire dedicated online graphic designers to work on your projects only for you.</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon">
                    <i class='bx bxl-graphql'></i>
                </div>
                <div class="service-dtl">
                    <h4>Customized Designs</h4>
                    <p>Benefit from designs that are made just for you and made to meet your specific needs, as well as deliveries that are quick, accurate, and on time.</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon">
                    <i class="bx bx-dollar"></i>
                </div>
                <div class="service-dtl">
                    <h4>Value For Money</h4>
                    <p>Instead of paying for a single graphic designer, use the expertise of our entire team.</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon">
                    <ion-icon name="ban-outline"></ion-icon>
                </div>
                <div class="service-dtl">
                    <h4>Zero Overheads</h4>
                    <p>HireCoworker, not you, is responsible for office rent, software, hardware, and infrastructure expenses.</p>
                </div>
            </div>
            <div class="services-item-2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="100">
                <div class="icon">
                    <i class='bx bx-collapse-alt'></i>
                </div>
                <div class="service-dtl">
                    <h4>Diverse Experience</h4>
                    <p>You can now employ a variety of graphic designers at the Junior, Mid, and Manager levels.
                    </p>
                </div>
            </div>

        </div>



    </section>
    <!-- serviec type end -->

    <!-- tools we used start -->
    <section class="tool_used">
        <p class="p-pink">TOOLS</p>
        <h5 class="section-heading">TOOLS & TECHNOLOGIES WE USED</h5>
        <div class="tools-group-3">
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?= get_img() ?>designer/photoshop.png" alt="adobe photoshop">
                </div>
                <div class="tool-name">
                    <h3>Adobe Photoshop</h3>
                </div>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?= get_img() ?>designer/illustrator.png" alt="adobe illustrator">
                </div>
                <div class="tool-name">
                    <h3>Adobe Illustrator</h3>
                </div>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?= get_img() ?>designer/flash.png" alt="adobe flash">
                </div>
                <div class="tool-name">
                    <h3>Adobe Flash</h3>
                </div>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?= get_img() ?>designer/indesign.png" alt="adobe indesign">
                </div>
                <div class="tool-name">
                    <h3>Adobe InDesign</h3>
                </div>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?= get_img() ?>designer/lightroom.png" alt="adobe lightroom">
                </div>
                <div class="tool-name">
                    <h3>Adobe Lightroom</h3>
                </div>
            </div>
            <div class="tool-item">
                <div class="tool-icon">
                    <img src="<?= get_img() ?>designer/coreldraw.png" alt=" coreldraw">
                </div>
                <div class="tool-name">
                    <h3>CorelDraw</h3>
                </div>
            </div>


        </div>

    </section>
    <!-- tools we used end -->

    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink">EXPERTS</p>
        <h3 class="section-heading ">HIRE OUR BEST GRAPHIC DESIGNERS</h3>
        <div class="expert-grid">
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>designer/justus.jpg" class="expert-image" alt="hire graphic designer" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <h2>JUSTUS A.</h2>
                    <P class="light-grey">GRAPHIC DESIGNER</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">HireCoworker did an excellent job designing a logo, website, and other promotional materials for me, and they did it swiftly! I will use HireCoworker whenever I have a need.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>PHOTOSHOP</p>
                    </div>
                    <div class="skill">
                        <p>FREEPIK</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE XD</p>
                    </div>
                    <div class="skill">
                        <p>CANVA</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE XD</p>
                    </div>
                    <div class="skill">
                        <p>ILLUSTRATOR</p>
                    </div>
                    <div class="skill">
                        <p>3+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>graphic_designer.jpg" class="expert-image" alt="hire graphic designer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">WILLIAM M.</h2>
                    <P class="light-grey">GRAPHIC DESIGNER</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.7/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">As technology advances, it becomes increasingly important
                    for designers to create engaging and meaningful interactions between people and products.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>PHOTOSHOP</p>
                    </div>
                    <div class="skill">
                        <p>ILLUSTRATOR</p>
                    </div>

                    <div class="skill">
                        <p>InDesign</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE XD</p>
                    </div>
                    <div class="skill">
                        <p>PICSART</p>
                    </div>
                    <div class="skill">
                        <p>FREEPIK</p>
                    </div>
                    <div class="skill">
                        <p>4+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>logo_designer.jpg" class="expert-image" alt="hire graphic designer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">MICHAEL L.</h2>
                    <P class="light-grey">LOGO DESIGNER</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.5/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">I am a specialist logo designer, offering my identity
                    design services to businesses and entrepreneurs from around the globe, working with them to take
                    their business identity to the next level.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>PHOTOSHOP</p>
                    </div>
                    <div class="skill">
                        <p>ILLUSTRATOR</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE XD</p>
                    </div>
                    <div class="skill">
                        <p>CANVA</p>
                    </div>
                    <div class="skill">
                        <p>INKSCAPE</p>
                    </div>

                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
        </div>
    </section>
    <!-- expert section end -->

    <!-- why remote section start -->

    <?php include_once why_remote; ?>
    <!-- why remote section end -->

    <!-- vedio start -->
    <section class="vedio-testimonial-section">
        <div class="vedio-test">
            <div class="vedio_test_row">
                <div class="vedio_about why-choose-section-content">
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
                <div class="vedio_frame">
                    <a class="fancybox" href="https://youtu.be/lDfEo3r_KeU"><img src="<?= get_img() ?>coworker_vid.jpeg" alt="hire coworker" class="width-100"></a>
                </div>
            </div>

        </div>
    </section>
    <!-- vedio end -->


    <!-- pricing start-->

    <?php
    $post_name = "Dedicated Designer";
    include_once pricing; ?>

    <!-- pricing end -->
    <!-- roadmap start -->
    <section class="roadmap-2">
        <p class="p-pink">PROCESS</p>
        <h3 class="section-heading ">PROCESS STEPS</h3>
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
                    <h2>SKETCHING</h2>
                    <p class="text">A prototype is a preliminary version of a product or design that is used for testing
                        and evaluation. In the design process, creating a prototype can be an important step before
                        finalizing the design.Overall, creating a prototype can be a useful way to ensure that the final
                        design meets the client's needs and expectations.</p>
                </div>
            </div>
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>FEEDBACK</h2>
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
                    <h2>DELIVERY</h2>
                    <p class="text">If the design is approved, the designer may create the final version of the design
                        and prepare it for production or implementation. This may involve creating detailed design
                        assets, such as vector graphics or high-resolution images.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- roadmap end -->
    <!-- -------------------------- -->
    <section class="industries-section section-padding">
        <div class="container">
            <div class="section_title">
                <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">INDUSTRIES
                </p>
                <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">
                    SERVICES ACROOSS ALL INDUSTRIES & DOMAINS</h3>
                <h2 class="section-heading"></h2>

            </div>
            <div class="row">
                <div class="col-3 ">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/manufacturing.png" alt="manufacturing industry">
                            </div>
                            <h4>Manufacturing</h4>
                        </div>
                        <div class="content-box">
                            <p class="text">

                                Providing services in the field of Real Estate.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/public.png" alt="public realtions">
                            </div>
                            <h4>
                                Pubilc Relations
                            </h4>
                        </div>
                        <div class="content-box">
                            <p class="text">

                                We are providing services in the field of Ecommerce Retail & B2B.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/advertising.png" alt="advertising">
                            </div>
                            <h4>Advertising</h4>
                        </div>
                        <div class="content-box">
                            <p class="text">
                                Covered Hotel & Restaurant industries</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/web-development.png" alt="website development">
                            </div>
                            <h4>Website Development</h4>
                        </div>
                        <div class="content-box">
                            <p class="text">

                                We have a nice client base in Tour & Travel industries
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/institution.png" alt="educational institutions">
                            </div>
                            <h4>Educational Institutions</h4>
                        </div>
                        <div class="content-box">
                            <p class="text">
                                Great experience in the Healthcare industries</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/architect.png" alt="architecture">
                            </div>
                            <h4>Architecture</h4>
                        </div>
                        <div class="content-box">
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
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/game-development.png" alt="game development">
                            </div>
                            <h4>Game Development</h4>
                        </div>
                        <div class="content-box">
                            <p class="text">

                                We Covered the blockchain field with our web designing services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/healthcare.png" alt="healthcare">
                            </div>
                            <h4>Healthcare</h4>
                        </div>
                        <div class="content-box">
                            <p class="text">

                                Covered Automotive field with our mobile app services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box">
                        <div class="icon-head">
                            <div class="icon-box">
                                <img src="<?= get_img() ?>designer/travel.png" alt="travel and hospitality">
                            </div>
                            <h4>Travel & <br>Hospitality</h4>
                        </div>
                        <div class="content-box">
                            <p class="text">

                                We Covered Entertainment industries with our web designing
                                services
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- -------------------------- -->

    <!-- testimonial slider section start here -->
    <!-- -------------------------- -->
    <!-- Reviews with the user -->
    <!-- -------------------------- -->
    <?php

    $testimonial1 = "I have no problem recommending HireCoworker and his group to assist you in developing your company, managing your staff, and steering your decisions towards financial success. dependable, a close friend, and a caring individual.";
    $test_name1 = "Hissle Chase";
    $test_role1 = "Enterpeneur";
    $user_img1 = "hire-developer/dev-test-01.jpeg";


    $testimonial2 = "Coworker at the Marketing Company came across with a unexpected approach, which we liked. His company has guided us as we have grown from 3 restaurants to 9.";
    $test_name2 = "Hilley billie";
    $test_role2 = "Founder & CEO";
    $user_img2 = "hire-developer/dev-test-02.jpeg";


    $testimonial3 = "Expand My Business offered me with the unbelievable designs which helped me in growing my buisness 10x and helped me in impressing my clients. I'm overjoyed with the service.";
    $test_name3 = "Gowtham G";
    $test_role3 = "Managing Director";
    $user_img3 = "hire-developer/dev-test-03.jpeg";

    $testimonial4 = "HireCoworker has one of the best graphic and web designers I have ever worked with till date. They consistently demonstrate excellent time and task management skills, high quality work, and exceptional attention to detail. Their attitude is always positive towards the work given to them.";
    $test_name4 = "Mike Rossvelt";
    $test_role4 = "IT Manager";
    $user_img4 = "hire-developer/dev-test-04.jpeg";

    include_once testimonial_slider; ?>
    <!-- testimonia; slider section end here -->


    <!-- hiring-step start -->
    <section class="hiring_step">

        <div class="grid  why-row" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="hiring_step_order-1">
                <div>
                    <h3 class="section-heading">HIRE GRAPHIC DESIGNERS ONLINE WITH EASY STEP</h3>
                    <p class="text">You won't have to deal with the hassles of traditional outsourcing thanks to our novel business model, which gives you complete control over who you work with.</p>
                    <button class="btn hire-btn">Hire Graphic Designer</button>
                </div>
            </div>
            <div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/brief.png" alt="hire graphic designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Talk To Us</h4>
                        <p>What sort of graphic design position are you seeking?</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/handpick.png" alt="hire legal process outsourcing" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Handpick Best Expert</h4>
                        <p>We provide screened CVs of the Graphic Designing experts we've chosen.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/team.png" alt="hire graphic designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Build Your Team</h4>
                        <p>Phone or video conference interviews of selected candidates are available. You may assign tests to them.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img() ?>engineer-architecture/going.png" alt="hire graphic designer" loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Get Going</h4>
                        <p>If you are pleased with the results, immediately hire them and get to work.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Industris we Cover start -->





    <!-- faq section -->
    <section class="faq-section">
        <p class="p-pink">FAQs</p>
        <h5 class="section-heading">Do You Have Questions?</h5>
        <div class="faqs">
            <div class="faqs-child">
                <details>
                    <summary>Why hire Graphic Designers from HireCoworker?</summary>
                    <div class="faq__content">
                        <p class="text">More than 50 professionals make up our extensive internal team. The offshore Graphic Designers at HireCoworker are well-versed in all types of graphic design and come equipped with impressive credentials and certifications.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Is hiring Graphic Designers from India safe?</summary>
                    <div class="faq__content">
                        <p class="text">Yes. Outsourcing companies for graphic design in India are safer than those in Europe, too. India is a very stable location for outsourcing due to its stringent cyber laws and pro-outsourcing government policies.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Will my hired Graphic Designer work in my business hours?
                    </summary>
                    <div class="faq__content">
                        <p class="text">We operate in all time zones, yes. Your dedicated graphic designers are able to function: a) your shift hours, b) shift hours that overlap, or c) Indian shift hours, whichever works best for you.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How do I communicate with my hired graphic designer?</summary>
                    <div class="faq__content">
                        <p class="text">Your hired graphic designer can get a phone with a local number from your country from HireCoworker. Skype, email, phone calls, and video conferencing are all methods of communication.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Can I hire more than one Graphic Designer?</summary>
                    <div class="faq__content">
                        <p class="text">Of course, yes. As many graphic designers as you need can be hired. One of our service's best features is its simple, painless, and quick scalability.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Do you offer a Free Trial?</summary>
                    <div class="faq__content">
                        <p class="text">Yes, you can get a one-week free trial with the Indian or American graphic designer you selected. There will be a fee if you want to go over this time limit.
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
    <script src="<?= get_js() ?>pricing.js"></script>

</body>

</html>