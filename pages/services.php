<?php
include_once '../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <?php include_once head; ?>
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_landing-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_call-to-action.css">
    <link rel="stylesheet" href="<?= get_css() ?>main-services.css">
    <link rel="stylesheet" href="<?= get_css() ?>main-services.css?v=1">

</head>

<body>

    <div class="landing-section-services">

        <?php include_once header; ?>

        <div class="landing-section-parent grid grid-2">
            <div class="landing-section-content">
                <h2 style="text-align:left;" class="section-heading animate__fadeInUp animate__animated ">Best On-Demand Global Remote Staffing Services Provider
                </h2>
                <div class="landing-offer-div ">
                    <p>Save 72% with Virtual Assistant Outsourcing Services</p>
                </div>

                <ul class="landing-ul">
                    <li class="flex-center">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                        <p class="text">Hire Staff in ANY Domain or Profession</p>
                    </li>
                    <li class="flex-center">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                        <p class="text">Your whole remote team works together for effortless collaboration.</p>
                    </li>
                    <li class="flex-center">
                        <ion-icon name="checkmark-done-outline"></ion-icon>
                        <p class="text">Bespoke Recruitment - Get your perfect Virtual Assistant</p>
                    </li>
                </ul>
                <a class="basic-button landing-btn" href="tel:+1 (833) 233-4447">Hire Expert virtual employees
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>

            <?php include_once landing_form; ?>
        </div>


    </div>
    <div class="links-div section-background">

        <div>
            <a href="<?= home_path() ?>it-outsourcing-services" class="links-div-child text">
                IT Outsourcing
            </a>
        </div>


        <div>
            <a href="<?= home_path() ?>hire-digital-marketer" class="links-div-child text">
                Digital Marketing
            </a>
        </div>


        <div>
            <a href="<?= home_path() ?>hire-developers" class="links-div-child text">
                Hire Developers
            </a>
        </div>
        <div>
            <a href="<?= home_path() ?>ecommerce-solutions-service" class="links-div-child text">
            Ecommerce Solutions
            </a>
        </div>


        <div>
            <a href="<?= home_path() ?>hire-dedicated-designers" class="links-div-child text">
                Hire Dedicated Designers
            </a>
        </div>


        <div>
            <a href="<?= home_path() ?>hire-content-writer" class="links-div-child text">
                Content Writer
            </a>
        </div>


        <div>
            <a href="<?= home_path() ?>hire-engineers-architects" class="links-div-child text">
                Engineers And Architects
            </a>
        </div>


        <div>
            <a href="<?= home_path() ?>hire-professional-mobile-app-developers" class="links-div-child text">
                Mobile Apps Developers
            </a>
        </div>


        <div>
            <a href="#" class="links-div-child text">
                Finance & Accounts Experts
            </a>
        </div>


        <div>
            <a href="<?= home_path() ?>medical-process-outsourcing" class="links-div-child text">
                Remote Medical Professionals
            </a>
        </div>


        <div>
            <a href="#" class="links-div-child text">
                Legal Process Outsourcing
            </a>
        </div>
        <div>
            <a href="<?= home_path() ?>virtual-assistant" class="links-div-child text">
                Hire Virtual Assistant
            </a>
        </div>
        <div>
            <a href="<?= home_path() ?>digital-production-services" class="links-div-child text">
            Digital Production Services
            </a>
        </div>
       
        <div>
            <a href="#" class="links-div-child text">
            Movies Production Services
            </a>
        </div>

    </div>
    <!-- main services types section start here-->
    <section class="main-service-types">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">SERVICES</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">More
            Services We offer</h3>
        <p class="text">Hire Coworker is a  completely managed service experience that provides clients with a dedicated assistant, a customer success manager, a surrounding support team, and industry-first virtual assistant management platform for efficient task management, streamlined communication, team collaboration, and file sharing.</p>


        <div class="main-services-types-child main-services-types-child-content-odd-grid grid" id="it-outsourcing">
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    IT Outsourcing
                </h3>
                <p class="text">It's important to choose the best IT outsourcing company. It makes sure that it benefits your company greatly and aids in increasing relevant search traffic to websites.</p>

                <a href="<?= home_path() ?>it-outsourcing-services">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon></a>
            </div>
            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/it-outsourcing.jpg" alt="IT outsourcing">
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-even-grid grid" id="digital-marketing">

            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/digital_marketing.jpg"
                    alt="hire digital marketing Expert">
            </div>
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Digital Marketing
                </h3>
                <p class="text">We have offered a variety of services to customers across different industries. SEO, PPC ads, Amazon shop optimization, copywriting, CRO, and other services are included in our digital marketing offerings.</p>

                <a href="<?= home_path() ?>hire-digital-marketer">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-odd-grid grid" id="hire-developer">
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Hire Developers
                </h3>
                <p class="text">Hire coworker helping you to find a dedicated developer. We have a track record of satisfactorily completing projects of all sizes. We provide skilled software developers on a daily, weekly, and monthly basis.You will get a development manager on call and flexible engagement options</p>

                <a href="<?= home_path() ?>hire-developers">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon></a>
            </div>
            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/developer.jpg" alt="Hire Dedicated Developers">

            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-even-grid grid"
            id="hire-dedicated-designer">

            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/designer.jpg" alt="Hire Dedicated Designers">
            </div>
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Hire Dedicated Designers
                </h3>
                <p class="text">Hire expert and dedicated graphics designers for responsive, agile, and custom design solutions. Hire experienced web designers to build your project on a full-time, part-time, hourly, or monthly basis.</p>

                <a href="<?= home_path() ?>hire-dedicated-designers">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-odd-grid grid" id="content-writer">
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Content Writer
                </h3>
                <p class="text">Hire content writers and get your project done remotely online. Find top-tier talent online with guaranteed results on an hourly, daily, weekly, and monthly basis. Expand your digital footprint with an experienced content writer within your budget.</p>

                <a href="<?= home_path() ?>hire-content-writer">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon></a>
            </div>
            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/embedded_devloper.jpg" alt="Hire Content Writer">
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-even-grid grid" id="engineers">

            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/engineer_architecture.jpg"
                    alt="Hire Engineers and Architects">
            </div>
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Engineers and Architects
                </h3>
                <p class="text">Our Engineers and Architects work with clients to design, plan and oversee construction projects, ensuring safety, cost-effectiveness, aesthetic appeal and compliance with regulations and codes.</p>

                <a href="<?= home_path() ?>hire-engineers-architects">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-odd-grid grid" id="app-developer">
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Mobile App Developers
                </h3>
                <p class="text">Hire Coworker’s Mobile App Developers is the best option to design, develop, test, and maintain mobile applications for clients, creating feature-rich, user-friendly, less expensive, and high-performance software that meets the client's specific needs and requirements. Remote hiring is the best of all the hiring options. You hire app developers who are employed only on a contractual basis.</p>

                <a href="<?= home_path() ?>hire-professional-mobile-app-developers">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon></a>
            </div>
            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/mobile_app_devlopement.jpg"
                    alt="Hire Mobile App Developers">
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-even-grid grid" id="finance">

            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/finance.jpg" alt="Hire Finance & Account Experts">
            </div>
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Finance & Accounts Experts
                </h3>
                <p class="text">Finance and Accounting experts assist clients with financial planning, analysis, and management by providing expertise and guidance in areas such as budgeting, financial reporting, tax compliance, and risk management.</p>

                <a href="<?= home_path() ?>hire-finance-accounts-experts">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-odd-grid grid" id="remote-medical">
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Medical Process Outsourcing
                </h3>
                <p class="text">To deliver value-added medical process outsourcing services to our global clients, which
                    include medical practitioners, hospitals, and insurance payers, among others, our dedicated medical
                    process experts bring sound knowledge of healthcare IT, a sharp business focus, and awareness of
                    healthcare regulations. </p>

                <a href="<?= home_path() ?>medical-process-outsourcing">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon></a>
            </div>
            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/remote-medical.jpg"
                    alt="Hire Remote Medical Professionals">
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-even-grid grid"
            id="legal-process-outsourcing">

            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/legal_process.jpg"
                    alt="Hire Legal Process Outsourcing">
            </div>
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Legal Process Outsourcing
                </h3>
                <p class="text">Legal Process Outsourcing is the best and most affordable way to provide comprehensive legal support services to clients by handling tasks such as legal research, document review, the drafting of legal documents, and contract management, allowing clients to focus on their core business operations.</p>

                <a href="<?= home_path() ?>legal-outsourcing-services">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-odd-grid grid" id="virtual-assistant">
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Hire Virtual Assistant
                </h3>
                <p class="text">A virtual assistant (VA) is a professional who provides administrative, technical, or creative assistance to clients remotely and who can help with a variety of tasks such as email and calendar management, data entry and research, social media management, and more to help increase productivity.</p>

                <a href="<?= home_path() ?>virtual-assistant">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon></a>
            </div>
            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/virtual-assistance.jpg"
                    alt="Hire Virtual Assistant">
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-even-grid grid"
            id="outsource-to-india">

            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/outsource_india.jpg"
                    alt="Outsourcing to india">
            </div>
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                    Outsource To India
                </h3>
                <p class="text">Outsourcing to India refers to the practice of hiring an external company or individual based in India to handle business operations or tasks that are typically performed by a company's internal employees. This can include services such as customer support, data entry, software.</p>

                <a href="<?= home_path() ?>outsource-to-india">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>

        <div class="main-services-types-child main-services-types-child-content-odd-grid grid" id="it-outsourcing">
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                Ecommerce Solutions
                </h3>
                <p class="text">An Ecommerce solution is a product or group of tools that will assist an online store in achieving its objectives, scaling, and advancing its brand. The less of these tools you employ, the more scalable and leaner your business will be.</p>

                <a href="<?= home_path() ?>ecommerce-solutions-service">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon></a>
            </div>
            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>ecommerce_solution/Ecommerce-Solution.jpg" alt=" Ecommerce Solutions">
            </div>
        </div>
        <div class="main-services-types-child main-services-types-child-content-even-grid grid"
            id="digital-production-services">

            <div class="main-services-types-child-img wh-100">
                <img class="wh-100" src="<?= get_img() ?>service_img/outsource_india.jpg"
                    alt="Outsourcing to india">
            </div>
            <div class="main-services-types-child-content ">
                <h3 class="sub-heading">
                Digital Production Services
                </h3>
                <p class="text">"Digital production services" is a wide category that can include a variety of tasks connected to the production and administration of digital material. These services are frequently offered by businesses, organizations, or people with knowledge of many facets of digital media and content development. The following are some typical categories that encompass digital production services</p>

                <a href="<?= home_path() ?>digital-production-services">Learn More <ion-icon
                        name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>

        

    </section>
    <!-- main services types section end here -->

    <!-- Our Values start here-->
    <section class="main-service-types our-values">
        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHY US</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHY DO OUR
            CLIENTS VALUE US?</h3>

        <p class="text"> We have a dedicated and well-experienced employee team that provides projects within a given timeline and at an affordable budget. We work as per industry standards.</p>
        <div class="our-values-container">
            <div class="our-values-box wh-100">
                <img class="wh-100" src="<?= get_img() ?>values/1-24.png" alt="Hire virtual assistant">
            </div>
            <div class="our-values-box our-values-box-padding">
                <h6 style="text-align:left;" class="section-heading">Free Estimation</h6>
                <p class="text">We tell our clients about our services at free of cost, but we charge as per work done.
                </p>
            </div>
            <div class="our-values-box our-values-box-padding">
                <h6 style="text-align:left;" class="section-heading">On budget, on-time</h6>
                <p class="text">We work within an affordable budget and deliver work within a given timeline. We always try to deliver the project quickly.</p>
            </div>
            <div class="our-values-box our-values-box-padding">
                <h6 style="text-align:left;" class="section-heading">Great portfolio</h6>
                <p class="text">We have a very strong portfolio. We have a well-experienced employee. We also have category-specific experts.</p>
            </div>
            <div class="our-values-box wh-100"><img class="wh-100" src="<?= get_img() ?>values/3-11.png"
                    alt="Hire virtual employee"></div>
            <div class="our-values-box our-values-box-padding">
                <h6 style="text-align:left;" class="section-heading">dedicated team</h6>
                <p class="text">We have a dedicated employee team. Hire Coworker can provide a single person based on the client's needs.
                </p>
            </div>
            <div class="our-values-box our-values-box-padding">
                <h6 style="text-align:left;" class="section-heading">Transparency</h6>
                <p class="text">We share everything related to a project with our clients. At the end of the day, we provide every single file or full piece of information about a project to the client.</p>
            </div>
            <div class="our-values-box our-values-box-padding">
                <h6 style="text-align:left;" class="section-heading">Passionate People</h6>
                <p class="text">We have a highly skilled and committed virtual assistant. Our team provides quality work as per industry standards</p>
            </div>
            <div class="our-values-box wh-100"><img class="wh-100" src="<?= get_img() ?>values/2-17.png"
                    alt="Hire dedicated assistant"></div>
        </div>

    </section>
    <!-- Our Values end here -->

    <!-- call strip start -->
    <?php include_once cta; ?>
    <!-- call strip end  -->
    <!-- -------------------------- -->

    <!-- Blog section page -->
    <!-- -------------------------- -->


    <?php include_once blog_news; ?>

    <!-- blog test end -->

    <?php

    include_once page_bottom;
    ?>
</body>

</html>