<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>HireCoworker | Hire Logo Designer</title>

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
            background-image: url("<?= get_img() ?>designer/logo-designer.jpg");
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
                    Hire PROFESSIONAL LOGO DESIGNER
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
                <a class="basic-button landing-btn" href="#">Hire DEDICATED LOGO DESIGNER
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
            OUR COMPLETE RANGE OF LOGO DESIGN SERVICES
        </h4>
        <div class="container-grid grid grid-3">
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/logo.png" alt="custom logo design"
                                loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <h5>Custom Logo Design</h5>
                        </div>
                    </div>

                </div>
                <p class="text">Describe your brand's values and vision. The professionals in remote logo design are skilled at making your vision a reality.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/business-card.png" alt="business card and logo"
                                loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <h5>Business Card & Logos</h5>
                        </div>
                    </div>

                </div>
                <p class="text">Get stunning, high-impact CYMK color business cards that best serve your company's needs and portray it professionally.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/brand.png" alt="brand identity"
                                loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <h5>Brand Identity</h5>
                        </div>
                    </div>

                </div>
                <p class="text">For a distinctive brand identity, hire logo designers from India or the United States. We do everything, from business stationary to logo design services.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/illustration.png" alt="vector graphics"
                                loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <h5>Vector Graphics</h5>
                        </div>
                    </div>

                </div>
                <p class="text">Adobe Illustrator is used by professionals in business logo design. This brings vividly colored, highly imaginative vector graphics to life. Give your brand's colors and shades the real respect they deserve.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/2d.png" alt="2d animation" loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <h5>2D Animation</h5>
                        </div>
                    </div>

                </div>
                <p class="text">For amazing two-dimensional designs and a great brand identity, outsource logo design. For exceptional designs, professional logo designers in India or the United States are experts in Autodesk Maya and Adobe Flash.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="service-img">
                            <img src="<?= get_img() ?>designer/banner.png" alt="custom banner design"
                                loading="lazy">
                        </div>
                        <div class="box-title-heading">
                            <h5>Custom Banner Design</h5>
                        </div>
                    </div>

                </div>
                <p class="text">India's logo designers use Adobe Photoshop and Corel Draw to create eye-catching banner designs that can be used for flex printing and brand awareness campaigns.</p>
            </div>
           

        </div>

    </section>
    <!-- services end -->

    <!-- why outsource us start -->
    <section class="why_content_writing">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">INDUSTRIES</p>
        <h4 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">OUR LOGO DESIGNING SERVICES ACROSS ALL INDUSTRIES & DOMAINS</h4>
        <div class="flex content-reason">
            <div class="reason-side">
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Entertainment & Media</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/cinema.png" alt="Entertainment & Media" loading="lazy">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Transportation & Logistics</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/cargo.png" alt="Transportation & Logistics" loading="lazy">
                    </div>
                </div>
                <div class="reason-side-item left-item">
                    <div class="reason-dtl">
                        <p>Travel & Tourism</p>
                    </div>
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/transportation.png" alt="Travel & Tourism">
                    </div>
                </div>
            </div>
            <div class="reason_center_img" data-aos="zoom-in" data-aos-duration="400">
                <img src="<?= get_img(); ?>designer/logo-design.png" width="100%" alt="hire logo designer">

            </div>
            <div class="reason-side">
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/healthcare.png" alt="Pharmaceutical & Healthcare" width="32px">
                    </div>
                    <div class="reason-dtl">
                        <p>Pharmaceutical & Healthcare</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/online-shop.png" alt="E-commerce & Retail" loading="lazy">
                    </div>
                    <div class="reason-dtl">
                        <p>E-commerce & Retail</p>
                    </div>

                </div>
                <div class="reason-side-item right-item">
                    <div class="reason-side-icon">
                        <img src="<?= get_img(); ?>designer/bank.png" alt="Finance & Banking">
                    </div>
                    <div class="reason-dtl">
                        <p>Finance & Banking</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- why outsource us end -->

    <!-- serviec type start -->
    <section class="services-types" style="background-color:#F1F8FB; padding: 5% 8%;">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HOW MAY HELP YOU</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500"
            data-aos-delay="100">INCREDIBLE REASONS OF HIRING LOGO DESIGNER FROM COWORKER</h3>
        <div class="why_about">
            <p class="text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi porro
                exercitationem id vitae
                deleniti suscipit expedita veritatis neque ad numquam. Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="services-col-3">
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="500" data-aos-delay="0">
                <div class="icon_blank_bg">
                <lord-icon src="https://cdn.lordicon.com/cmrzxpzz.json" trigger="loop"  stroke="80"    delay="1500"  scale="65" colors="primary:#ed1575,secondary:#2b2350"style="width:64px;height:64px"></lord-icon>

                </div>
                <div class="service-dtl">
                    <h4>Free Trial</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="500" data-aos-delay="50">
                <div class="icon_blank_bg">
                <i class='bx bx-user-circle'></i>
                </div>
                <div class="service-dtl">
                    <h4>Software Experts</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <i class='bx bxl-unity'></i>
                </div>
                <div class="service-dtl">
                    <h4>Recruit One, Get Team</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <i class='bx bx-dollar'></i>
                </div>
                <div class="service-dtl">
                    <h4>Value For Money</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <ion-icon name="ban-outline"></ion-icon>
                </div>
                <div class="service-dtl">
                    <h4>Zero Overheads</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="services-item-2 box-shadow" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="500" data-aos-delay="100">
                <div class="icon_blank_bg">
                    <i class='bx bxl-graphql'></i>
                </div>
                <div class="service-dtl">
                    <h4>Diverse Experience</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat Lorem ipsum dolor sit amet.</p>
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
                    <h4 class="section-heading">Why Hire <span>Co-Woker</span> ?</h4>
                    <p class="text">Customers from all over the world depend on our skilled developers to get
                        high-quality,
                        sector-specific web and mobile solutions. Employ our devoted developers to grow your company.
                        They
                        have expertise in a variety of technologies and fields.
                    </p>
                    <ul class="why-choose-ul">
                        <li class="text flex-center"><i class='bx bxs-check-shield'></i> Expertise in innovations</li>
                        <li class="text flex-center"><i class='bx bxs-check-shield'></i> 9+ years of rich experience
                        </li>
                        <li class="text flex-center"><i class='bx bxs-check-shield'></i> 9/10 client satisfaction score
                        </li>
                        <li class="text flex-center">
                            <i class='bx bxs-check-shield'></i> 100% money-back guarantee
                        </li>
                        <li class="text flex-center"><i class='bx bxs-check-shield'></i> Transparency is Guaranteed</li>
                    </ul>
                </div>
                <div class="vedio_frame">
                    <a class="fancybox" href="https://youtube.com/watch?v=h8tjQDpaE-c&feature=shares"><img
                            src="<?= get_img()?>coworker_vid.jpeg" alt="hire logo designer" class="width-100"></a>
                </div>
            </div>

        </div>
    </section>
    <!-- vedio end -->

    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">EXPERTS</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">HIRE OUR
            BEST LOGO DESIGNER</h3>
        <div class="expert-grid">
        <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>designer/steven.jpg" class="expert-image" alt="hire photoshop expert" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <h2>STEVEN H.</h2>
                    <P class="light-grey">PHOTOSHOP EXPERT</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">I design brand identities, mobile app UI & UX, design systems, websites and graphic design for advertising. We use various tools to make the work smooth and fast for the clients.
                </p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>ADOBE PHOTOSHOP</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE ANIMATE</p>
                    </div>
                    <div class="skill">
                        <p>DRAWING</p>
                    </div>
                    <div class="skill">
                        <p>LAYOUT DESIGN</p>
                    </div>
                    <div class="skill">
                        <p>ADOBE XD</p>
                    </div>
                    <div class="skill">
                        <p>PHOTO MANIPULATION</p>
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
                <p class="light-grey text-center expert-desc">As technology advances, it becomes increasingly important for designers to create engaging and meaningful interactions between people and products.</p>
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
                        <p>ADOBE CREATIVE SUITE</p>
                    </div>
                   
                    <div class="skill">
                        <p>4+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>logo_designer.jpg" class="expert-image" alt="hire logo designer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">MICHAEL L.</h2>
                    <P class="light-grey">LOGO DESIGNER</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.5/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">I am a specialist logo designer, offering my identity design services to businesses and entrepreneurs from around the globe, working with them to take their business identity to the next level.</p>
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
                    <div class="skill">
                        <p>VECTORE WORKS</p>
                    </div>
                    <div class="skill">
                        <p>BRANDING</p>
                    </div>
                    <div class="skill">
                        <p>2+</p>
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
        <h3 class="section-heading ">OUR APPROACH TO PRODCUE THE FINEST RESULTS</h3>
        <div class="timeline">
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500"
                    data-aos-delay="50">
                    <h2>ANALYSIS</h2>
                    <p class="text">
                        Before beginning the design process for a client, it is important to do research to understand
                        their business, target audience, and goals for the project. Some specific areas you may want to
                        research include.
                    </p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500"
                    data-aos-delay="50">
                    <h2>PLANNING</h2>
                    <p class="text">A prototype is a preliminary version of a product or design that is used for testing
                        and evaluation. In the design process, creating a prototype can be an important step before
                        finalizing the design.Overall, creating a prototype can be a useful way to ensure that the final
                        design meets the client's needs and expectations.</p>
                </div>
            </div>
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500"
                    data-aos-delay="50">
                    <h2>APPROVAL</h2>
                    <p class="text">If the design is approved, the designer may create the final version of the design
                        and prepare it for production or implementation. This may involve creating detailed design
                        assets, such as vector graphics or high-resolution images.</p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500"
                    data-aos-delay="50">
                    <h2>DESIGNING</h2>
                    <p class="text">Before launch it, our testing team test or trial it very carefully, when client
                        approved it then we launch it. And we are always happy to help you if there is any bug/issue.
                    </p>
                </div>
            </div>
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500"
                    data-aos-delay="50">
                    <h2>TESTING</h2>
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
                    <img src="<?= get_img()?>remote-benifit/easy-search.png" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>1. Easy Requirement</p>
                </div>
                <img class="dotted-img-up" src="<?= get_img()?>remote-benifit/dotted-white.png" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img()?>remote-benifit/increased-productivity.png" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>2. Increased Productivity</p>
                </div>
                <img class="dotted-img-down" src="<?= get_img()?>remote-benifit/dotted-white.png" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img()?>remote-benifit/reduction.png" alt="remote-benfits">

                </div>
                <div class="step-row-item-number">
                    <p>3. Reduced Cost</p>
                </div>
                <img class="dotted-img-up" src="<?= get_img()?>remote-benifit/dotted-white.png" alt="remote-benfits">
            </div>
            <div class="step-row-item">
                <div class="step-row-item-icon">
                    <img src="<?= get_img()?>remote-benifit/customer-support.png" alt="remote-benfits">
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
                    <h3 class="section-heading">HIRE LOGO DESIGNERS ONLINE WITH EASY STEP</h3>
                    <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A perspiciatis similique
                        assumenda laboriosam laborum dolore saepe aut culpa, id animi?</p>
                    <button class="btn hire-btn">Hire Logo Designer</button>
                </div>
            </div>
            <div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img()?>engineer-architecture/brief.png" alt="hire legal process outsourcing"
                            loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Talk To Us</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat totam similique natus, sunt
                            quos aliquid laudantium a incidunt odit tempora.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img()?>engineer-architecture/handpick.png"
                            alt="hire logo designer">
                    </div>
                    <div class="step-dtl">
                        <h4>Handpick Best Expert</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat totam similique natus, sunt
                            quos aliquid laudantium a incidunt odit tempora.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img()?>engineer-architecture/team.png" alt="hire logo designer"
                            loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Build Your Team</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat totam similique natus, sunt
                            quos aliquid laudantium a incidunt odit tempora.</p>
                    </div>
                </div>
                <div class="steps flex">
                    <div class="step_icon">
                        <img src="<?= get_img()?>engineer-architecture/going.png" alt="hire logo designer"
                            loading="lazy">
                    </div>
                    <div class="step-dtl">
                        <h4>Get Going</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat totam similique natus, sunt
                            quos aliquid laudantium a incidunt odit tempora.</p>
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
        <h5 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">Do You Have
            Questions?</h5>
        <div class="faqs">
            <div class="faqs-child">
                <details>
                    <summary>Can I hire part-time logo designers on a monthly model?</summary>
                    <div class="faq__content">
                        <p class="text">You can, of course. "Choice" is always yours, as we said. Nevertheless, for additional information, you should speak with your client account manager (CAM). The resource's availability will be determined by their monthly work schedule.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How transparent is the assessment test?</summary>
                    <div class="faq__content">
                        <p class="text">When you hire logo designers from HireCoworker, they are put through a rigorous evaluation process to make sure you get the best possible resource. Regarding transparency, the test can always be viewed in real time. Our job is to make sure you're happy.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What’s your payment model?</summary>
                    <div class="faq__content">
                        <p class="text">We cater to every kind of business, from a small start-up to a large corporation, and we guarantee it. Our pricing strategy is entirely pre-paid and resource-based. Take a trial of the resource you want, and only after you are satisfied do we charge!</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Can I retain Intellectual Property (IP) rights on the designs?</summary>
                    <div class="faq__content">
                        <p class="text">Absolutly not! HireCoworker serves as merely a link between you and skilled logo designers. You are free to claim any and all designs created by HireCoworker's expert logo designers. It is your property, your resource, and your vision.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What do you mean by Free Trial?</summary>
                    <div class="faq__content">
                        <p class="text">You can test the resource out before you hire the verified professional logo designers from HireCoworker. This means that you can evaluate their work and determine whether it meets your requirements. All of this is completely free!</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What happens if my logo designer is on leave?</summary>
                    <div class="faq__content">
                        <p class="text">You are completely covered if you have chosen team-model hiring. One takes time off; Your entire team is behind you. However, in the case of a stand-alone hire, there is no room for substitution.</p>
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