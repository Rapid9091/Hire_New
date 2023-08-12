<?php
include_once "../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hire Best Virtual Assistant in USA - HireCoworker</title>
  <meta name="description" content="HireCoworker provides the Best Virtual Assistant in USA at very affordable price. Call us at +1 (848) 200-0555 for Virtual Assistant." />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Hire Best Virtual Assistant in USA - HireCoworker" />
  <meta property="og:description" content="HireCoworker provides the Best Virtual Assistant in USA at very affordable price. Call us at +1 (848) 200-0555 for Virtual Assistant." />
  <meta name="keywords" content="Hire Coworker, Best Virtual Assistant, Digital marketing Virtual Assistant, SEO Virtual Assistant, web design Virtual Assistant, tech support Virtual Assistant, social media Virtual Assistant, Virtual Assistant, Assistant, coworker, hire VA">
  <meta name="google-site-verification" content="gsGyv-x1W-xePqhZ5c3qChCmf29rLKOSIGIY2qtRmYE" />

  <?php include_once head; ?>



  <!-- -------------------------- -->
  <!-- Page CSS links -->
  <!-- -------------------------- -->

  <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
  <!-- <link rel="stylesheet" href="<?= get_css() ?>view-css/view_reviews.css"> -->
  <link rel="stylesheet" href="<?= get_css() ?>view-css/view_review2.css">
  <link rel="stylesheet" href="<?= get_css() ?>view-css/view_how-it-works.css">
  <link rel="stylesheet" href="<?= get_css() ?>view-css/view_home-about.css">
  <link rel="stylesheet" href="<?= get_css() ?>view-css/view_why-choose-us.css">
  <link rel="stylesheet" href="<?= get_css() ?>home.css" />
  <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css">


  <!-- -------------------------- -->


</head>

<body>

  <!-- -------------------------- -->
  <!-- New Main landing section page -->
  <!-- -------------------------- -->

  <section class="landing-section">
    <!-- -------------------------- -->
    <!-- Header of the page -->
    <!-- -------------------------- -->

    <?php include_once header; ?>

    <!-- video in background of landing section -->
    <video autoplay loop="" loading="lazy" muted="" playsinline="" preload="none">
      <source data-src="<?= get_assets() ?>/videos/banner-vedio.mp4" type="video/mp4" src="<?= get_assets() ?>/videos/banner-video.mp4">
      Your browser does not support the video tag.
    </video>

    <div class="landing-overlay"></div>
    <div class="landing-grid grid">
      <div class="landing-grid-left">
        <h1 class="h1-small">Hire Coworker / Virtual Assistant</h1>
        <h2 class="main-h1-heading">
          Life is better with <br />
          a Virtual Assistant
        </h2>
        <p class="text">
          A virtual assistant is an independent contractor that performs administrative support services for clients away from the client's office. Although virtual assistant frequently works from anywhere, they have remote access to the necessary planning resources.
        </p>
        <div class="landing-grid-right-buttons">
          <button class="basic-button landing-btn">
            <a href="#connect-us"><i class='bx bx-user'></i> Request Service</a>
          </button>
          <button class="basic-button landing-btn">
            <a href="tel:+1 (848) 200-0555"><i class='bx bx-phone-call'></i> Call Us</a>
          </button>
        </div>
      </div>
      <div class="landing-grid-right grid-center">
        <div class="landing-grid-right-img">
          <video autoplay="true" controls loop="" loading="lazy" muted="" playsinline="" preload="none">
            <source autostart="false" data-src="<?= home_path() ?>assets/videos/landing-vid.mp4" type="video/mp4" src="<?= home_path() ?>assets/videos/landing-vid.mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>

  </section>

  <?php

  $username1 = "Ethan Jende";
  $review_text1 = " I recently worked with Hire Coworker and their service was outstanding. The team was professional, efficient and always willing to do extra work to ensure my needs were met. Highly recommend them.";

  $username2 = "Emma H.";
  $review_text2 = "The company helped me to find the best developer for my project. Their service was professional and efficient. Actually, I was very satisfied with the outcome. Highly recommend them for anyone looking for top-quality developers.";

  $username3 = "Joshua Beckham";
  $review_text3 = "I recently worked with Hire Coworker to find a financial expert for my business and I am extremely satisfied with the result. The team was professional, knowledgeable and helped me to find the best fit for my company. I highly recommend them for anyone in need of
  ";
  include_once reviews2; ?>

  <!-- -------------------------- -->
  <!-- Service section  -->
  <!-- -------------------------- -->
  <section class="services background-property" id="services">
    <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">SERVICES</p>
    <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHAT WE OFFER
      TO YOU </h3>

    <div class="services-box-container grid grid-3">
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="30">
        <ion-icon name="logo-chrome"></ion-icon>
        <h3>IT Outsourcing Services</h3>
        <p>
          It's important to choose the greatest IT outsourcing company. It
          makes sure that it benefits your company greatly and aids in
          increasing relevant search traffic to websites.
        </p>
        <a href="<?= home_path() ?>it-outsourcing-services">Know More</a>
      </div>
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="60">
        <ion-icon name="crop-sharp"></ion-icon>
        <h3>Hire Dedicated Designers</h3>
        <p>
          Using our graphic design services will help you realize your
          marketing concepts. The only thing left to do is determine whether
          you require such services. An intelligent design is beneficial to
          business. In our decision-making process for choosing goods,
          services, and people, attractiveness plays a big role—from online
          dating services to online shopping.
        </p>
        <a href="<?= home_path() ?>hire-dedicated-designers">Know More</a>
      </div>
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="60">
        <ion-icon name="qr-code-sharp"></ion-icon>
        <h3>Content Writer</h3>
        <p>
          Hire highly talented content writers with HireCoworker. Expand your digital footprint with an experienced
          content writer within your budget.
        </p>
        <a href="<?= home_path() ?>hire-content-writer">Know More</a>
      </div>
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="30">
        <ion-icon name="logo-chrome"></ion-icon>
        <h3>Ecommerce Solutions</h3>
        <p>
          <!-- It's important to choose the greatest IT outsourcing company. It
          makes sure that it benefits your company greatly and aids in
          increasing relevant search traffic to websites. -->
        </p>
        <a href="<?= home_path() ?>it-outsourcing-services">Know More</a>
      </div>
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="90">
        <ion-icon name="share-social-sharp"></ion-icon>
        <h3>Digital Marketing Expert</h3>
        <p>
          We have a group of in-house creative professionals. We are capable
          of handling any size project and having a significant impact on your
          business, whether it involves major overhauls or minor tweaks.
        </p>
        <a href="<?= home_path() ?>hire-digital-marketer">Know More</a>
      </div>
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="30">
        <ion-icon name="business-sharp"></ion-icon>
        <h3>Digital Production Services</h3>
        <p>
          <!-- Engineers and Architects work with clients to design, plan and oversee construction projects, ensuring safety,
          cost-effectiveness, aesthetic appeal and compliance with regulations and codes. -->
        </p>
        <a href="<?= home_path() ?>hire-engineers-architects">Know More</a>
      </div>
      <!-- <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="60">
        <ion-icon name="crop-sharp"></ion-icon>
        <h3>Hire Dedicated Designers</h3>
        <p>
          Using our graphic design services will help you realize your
          marketing concepts. The only thing left to do is determine whether
          you require such services. An intelligent design is beneficial to
          business. In our decision-making process for choosing goods,
          services, and people, attractiveness plays a big role—from online
          dating services to online shopping.
        </p>
        <a href="<?= home_path() ?>hire-dedicated-designers">Know More</a>
      </div> -->
      <!-- <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="90">
        <ion-icon name="code-slash-sharp"></ion-icon>
        <h3>Hire Developers</h3>
        <p>
          Without a technical support system in place, your clients would be
          in total disarray! The majority of clients call technical support
          without first reading the user guide. Someone will call a company
          every minute of the day asking for assistance with using,
          comprehending, or troubleshooting a product. If you are unable to
          resolve issues or reply to inquiries promptly and accurately,
          customers will get more frustrated, and their belief in your brand
          will inevitably decline. Your consumers can quickly resume utilizing
          your product/service with the help of CoWorker's technical support
          services.
        </p>
        <a href="<?= home_path() ?>hire-dedicated-developers">Know More</a>
      </div> -->

      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="30">
        <ion-icon name="card-sharp"></ion-icon>
        <h3>Finance & Accounts Experts</h3>
        <p>
          Finance and Accounts Experts assist clients with financial planning, analysis, and management, by providing
          expertise and guidance in areas such as budgeting, financial reporting, tax compliance and risk management.
        </p>
        <a href=" <?= home_path() ?>hire-finance-accounts-experts">Know More</a>
      </div>
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="60">
        <ion-icon name="phone-portrait-sharp"></ion-icon>
        <h3>Mobile App Developers</h3>
        <p> Mobile App Developers design, develop, test and maintain mobile applications for clients, creating feature-rich, user-friendly and high</p>
        <a href="<?= home_path() ?>hire-professional-mobile-app-developers">Know More</a>
      </div>
      <div class="service-box" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="90">
        <!-- <i class='bx bxs-briefcase-alt'></i> -->
        <h3>Movies Production Services</h3>
        <p>
          <!-- Legal Process Outsourcing Experts provide comprehensive legal support services to clients by handling tasks
          such as legal research, document review, drafting legal documents, and contract management, allowing clients
          to focus on their core business operations. -->
        </p>
        <a href="<?= home_path() ?>legal-outsourcing-services">Know More</a>
      </div>

    </div>
    <p class="text-center view-btn"><button class="view_more_btn"><a href="<?= home_path() ?>services">View More</a></button></p>
  </section>
  <!-- -------------------------- -->

  <!-- -------------------------- -->
  <!-- Pricing section  -->
  <!-- -------------------------- -->
  <section class="pricing " id="pricing">
    <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">PRICING</p>
    <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">Our Pricing
      starts from</h3>

    <div class="pricing-grid-container grid grid-center">
      <div class="pricing-boxes flex-center-center">
        <h4>IT Outsourcing Services</h4>
        <p>Starting just at</p>
        <h4>$6 / Hour</h4>
      </div>

      <div class="pricing-boxes flex-center-center">
        <h4>HIRE DEDICATED DESIGNERS</h4>
        <p>Starting just at</p>
        <h4>$5 / Hour</h4>
      </div>

      <div class="pricing-boxes flex-center-center">
        <h4>CONTENT WRITER</h4>
        <p>Starting just at</p>
        <h4>$5 / Hour</h4>
      </div>

      <div class="pricing-boxes flex-center-center">
        <h4>ECOMMERCE SOLUTIONS</h4>
        <p>Starting just at</p>
        <h4>$3 / Hour</h4>
      </div>

      <div class="pricing-boxes flex-center-center">
        <h4>DIGITAL MARKETING EXPERT</h4>
        <p>Starting just at</p>
        <h4>$3 / Hour</h4>
      </div>

      <div class="pricing-boxes flex-center-center">
        <h4>DIGITAL PRODUCTION SERVICES</h4>
        <p>Starting just at</p>
        <h4>$5 / Hour</h4>
      </div>

      <div class="pricing-boxes flex-center-center">
        <h4>FINANCE & ACCOUNTS EXPERTS</h4>
        <p>Starting just at</p>
        <h4>$6 / Hour</h4>
      </div>

      <div class="pricing-boxes flex-center-center">
        <h4>MOBILE APP DEVELOPERS</h4>
        <p>Starting just at</p>
        <h4>$6 / Hour</h4>
      </div>
    </div>
    <div class="more-pricing-btn flex-center-center">
      <button class="basic-button "><a href="<?= home_path() ?>pricing">More Pricing</a></button>
    </div>
  </section>

  <!-- why hirecoworker start -->

  <section class="why-choose-section">
        <div class="grid grid-2 width-100 why-choose-section-container">
            <div class="why-choose-section-content">
                <p>Collabration With Us</p>
                <h4 class="section-heading">Why Hire <span>Co-Woker</span>?</h4>
                <p class="text">
                    We have offered a variety of services to customers across different industries. SEO, PPC ads, Amazon shop optimization, copywriting, CRO, and other services are all included in our digital marketing offerings.
                </p>
                <ul class="why-choose-ul">
                    <li class=" flex-center"><i class='bx bxs-check-shield'></i> Handling 10 million visitors for various web accounts</li>
                    <li class=" flex-center"><i class='bx bxs-check-shield'></i> 100% money-back guarantee</li>
                    <li class=" flex-center"><i class='bx bxs-check-shield'></i> 350+ certified digital marketing experts</li>
                    <li class=" flex-center"><i class='bx bxs-check-shield'></i> Multi-domain skill support</li>
                    <li class=" flex-center"><i class='bx bxs-check-shield'></i> Continuous training to the team</li>
                    <li class=" flex-center"><i class='bx bxs-check-shield'></i> Google, Bing and SEMrush certified professionals</li>
                    <li class=" flex-center"><i class='bx bxs-check-shield'></i> Professional support by Copywriters</li>
                </ul>
            </div>
            <div class="why-choose-section-img grid-center">
                <img src="<?= get_img() ?>Business decisions-broo.webp" alt="Why Hirecoworker">
            </div>
        </div>
    </section>



  <!-- why hirecoworker end -->

  <!-- about start -->
  <section class="why-choose section-background">
        <p class="p-pink">HIRE COWORKER</p>
        <h3 class="section-heading">ABOUT HIRECOWORKER</h3>
        <div class="why_about">
            <p class="text text-center">Hire Coworker is an entirely managed service experience that provides clients with a dedicated assistant, a customer success manager, a surrounding team for support, and industry-first virtual assistant management software to task management, streamline communication, file sharing, and team collaboration.</p>
        </div>

        <div class="grid  why-row" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div>
                <img src="<?= get_img(); ?>dedicated-designers-1.webp" class="width-100 why-img" alt="hire coworker" loading="lazy">
            </div>
            <div>
                <div class="why-title">
                    <span>Hire Coworker is changing the way of businesses.</span>
                </div>
                <div class="why_gives">
                    <div class="reason">
                        <div>
                            <i class='bx bxs-check-circle'></i>
                            <p>Expertise in innovations</p>
                        </div>

                    </div>
                    <div class="reason">
                        <div>
                            <i class='bx bxs-check-circle'></i>
                            <p>9+ years of rich experience</p>
                        </div>

                    </div>

                    <div class="reason">
                        <div>
                            <i class='bx bxs-check-circle'></i>
                            <p>9/10 client satisfaction score</p>
                        </div>

                    </div>
                    
                    <p class="text">For a low hourly fixed price, you’re getting a dedicated Virtual Assistant (VA) to work on as much as you’d like, just like having an in-office team member who is available to take work for you whenever you need any help. Starting in least of $5/hour, you will get a truly unlimited VA. </p>
                </div>
            </div>
        </div>




    </section>
  <!-- about end -->


  <!-- -------------------------- -->
  <!-- Working section  -->
  <!-- -------------------------- -->
  <section class="working" id="how_we_work">
    <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">PROCESS</p>
    <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">How it works
    </h3>

    <!-- Contact US -->
    <div class="working-container grid grid-2">
      <div class="working-image grid-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <img loading="lazy" src="<?= get_img() ?>contact-us-3.png" alt="hire virtual assistant" />
      </div>
      <div class="working-content" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="60">
        <h2 class="sub-heading">Contact Us</h2>
        <p>
          Your work can be started with a single easiest step just by contacting us through our form or directly by
          calling us at our contact No.
          <a href="tel:+1 (848) 200-0555"><b>+1 (848) 200-0555</b></a>
        </p>
        <button class="basic-button"><a href="#connect-us">Know More</a></button>
      </div>
    </div>

    <!-- Get Started -->
    <div class=" working-container grid grid-2">
      <div class="working-content" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="60">
        <h2 class="sub-heading">Get Started</h2>
        <p>Your work is almost done at the first step itself; you just need to relax. Now your business is our top priority, and we'll take care of everything.</p>
        <button class="basic-button"><a href="#connect-us">Know More</a></button>
      </div>
      <div class="working-image grid-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="10">
        <img loading="lazy" src="<?= get_img() ?>get-started.png" alt="hire virtual employee" />
      </div>
    </div>

    <!-- Provide Feedback -->
    <div class="working-container grid grid-2">
      <div class="working-image grid-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="10">
        <img loading="lazy" src="<?= get_img() ?>feedback.png" alt="hire virtual employee" />
      </div>
      <div class="working-content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="60">
        <h2 class="sub-heading">Provide Feedback</h2>
        <p>Once your work is done from our side, you just need to provide your valuable feedback to us. So that the next time we can provide even better service and help your business grow tenfold.</p>
        <button class="basic-button"><a href="#connect-us">Know More</a></button>
      </div>
    </div>
  </section>

  <!-- -------------------------- -->
  <!-- About us section  -->
  <!-- -------------------------- -->
  <!-- <section class="home-about padding">
    <div class="home-about-grid grid">
      <div class="home-about-left">
        <h3 class="section-heading" style="text-align: left;" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">ABOUT Hire Coworker</h3>
        <p>
          <b>Hire Coworker is changing the way businesses around the world hire virtual assistants.</b>
        </p>
        <p>Hire Coworker is an entirely managed service experience that provides clients with a dedicated assistant, a customer success manager, a surrounding team for support, and industry-first virtual assistant management software to task management, streamline communication, file sharing, and team collaboration.</p>
        <p> For a low hourly fixed price, you’re getting a dedicated Virtual Assistant (VA) to work on as much as you’d like, just like having an in-office team member who is available to take work for you whenever you need any help. Starting in least of $5/hour, you will get a truly unlimited VA.</p>
      </div>
      <div class="home-about-right ">
        <img loading="lazy" src="<?= get_img() ?>about-us.png" alt="Hire Coworker">
      </div>
    </div>

  </section> -->

  <!-- -------------------------- -->
  <!-- Connect with us section  -->
  <!-- -------------------------- -->

  <section class="connect-us" id="connect-us">
    <div class="connect-form" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="10">
      <h2 class="section-heading">Feel free to connect us</h2>
      <form class="contact_form" method="POST" action="">
        <label for="input_name">Name</label><br />
        <input required type="text" id="input_name" name="input_name" placeholder="Please enter your name" />
        <small class="input_error" id="input_name_error"></small>

        <div class="connect-us-form-input grid grid-2">
          <div>
            <label for="input_email">Email</label>
            <input required type="email" id="input_email" name="input_email" placeholder="Please enter your mail" />
            <small class="input_error" id="input_email_error"></small>
          </div>
          <div>
            <label for="input_mobile">Mobile</label>
            <div class="mobile_number">
              <input required type="tel" placeholder="Mobile" name="input_mobile" id="input_mobile" class="country_input" minlength="10" maxlength="15">
            </div>
            <small class="input_error" id="input_mobile_error"></small>
          </div>
        </div>
        <br />
        <label for="input_query">Message</label><br />
        <textarea required id="input_query" name="input_query" placeholder="Please leave your message" style="height: 200px"></textarea>
        <small class="input_error" id="input_query_error"></small> <br>


        <input type="hidden" name="homeFormData" value="homeFormData">
        <button class="basic-button" id="contact_form_button" name="sendUserData">
          Submit
        </button>

      </form>
    </div>
  </section>

  <!-- -------------------------- -->
  <!-- Blog section page -->
  <!-- -------------------------- -->

  <!-- <section class="blog" id="blog">
    <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">BLOGS AND NEWS</p>
    <h2 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400"><?= isset($blog_main_heading) ? $blog_main_heading : "LATEST BLOGS & NEWS" ?></h2>

    <div class="blog-grid grid grid-3">
      <div class="blog-card ">
        <div class="blog-banner-box">
          <img loading="lazy" src="<?= isset($blog_img_1) ? $blog_img_1 : get_img("blog/digital-marketing.jpg") ?>" alt="blog banner" />
        </div>

        <div class="blog-content">
          <h3 class="blog-title">
            <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) :  home_path("blog") ?>">
              <?= isset($blog_title_1) ? $blog_title_1 : "Outsourcing & Solopreneurs: A Match Made in Heaven." ?></a>
          </h3>
          <p>Lot's of experts is ready to work remotely, Hire Coworker help people to get VA in least price. Virtual Assistants are an affordable alternative to hiring specialized employees to perform tasks, handle operations or provide services for the company</p>

          <div class="wrapper flex-center-between">
            <div class="blog-publish-date flex-center">
              <a href="<?= home_path() ?>author"><img loading="lazy" src="<?= get_img() ?>user.jpg" alt="author" /></a>
              <a href="<?= home_path() ?>author">Arjun K.</a>

            </div>
            <div class="blog-link-div">
              <div class="blog-time flex-center">
                <img loading="lazy" src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" />

                <a href="<?= isset($blog_link_2) ? home_path($blog_link_2) : "#" ?>">
                  <?= isset($blog_date_2) ? $blog_date_2 : "04 July, 2022" ?>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="blog-card">
        <div class="blog-banner-box">
          <img loading="lazy" src="<?= isset($blog_img_2) ? $blog_img_2 : get_img("blog/content-writer.jpg") ?>" alt="blog banner" />
        </div>

        <div class="blog-content">
          <h3 class="blog-title">
            <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : "#" ?>">
              <?= isset($blog_title_1) ? $blog_title_1 : "Virtual Employee Model is safer than Project Outsourcing" ?></a>
          </h3>
          <p>Remote workers report best job satisfaction rates and a better work balance. The virtual employee hiring model creates high productivity, low-stress</p>

          <div class="wrapper flex-center-between">
            <div class="blog-publish-date flex-center">
              <a href="<?= home_path() ?>author"><img loading="lazy" src="<?= get_img() ?>user-3.jpg" alt="author" /></a>
              <a href="<?= home_path() ?>author">John T.</a>

            </div>
            <div class="blog-link-div">
              <div class="blog-time flex-center">
                <img loading="lazy" src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" />

                <a href="<?= isset($blog_link_2) ? home_path($blog_link_2) : "#" ?>">
                  <?= isset($blog_date_2) ? $blog_date_2 : "04 July, 2022" ?>
                </a>
              </div>
            </div>

          </div>
        </div>


      </div>

      <div class="blog-card">
        <div class="blog-banner-box">
          <img loading="lazy" src="<?= isset($blog_img_3) ? $blog_img_3 : get_img("blog/web-dev.jpg") ?>" alt="blog banner" />
        </div>
        <div class="blog-content">
          <h3 class="blog-title">
            <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : "#" ?>">
              <?= isset($blog_title_1) ? $blog_title_1 : "Data Security: How We Keep your Sensitive Information Safe" ?></a>
          </h3>
          <p>Protecting company data and avoiding data loss due to illegal access is the process of data security.</p>

          <div class="wrapper flex-center-between">
            <div class="blog-publish-date flex-center">
              <a href="<?= home_path() ?>author"><img loading="lazy" src="<?= get_img() ?>user-3.jpg" alt="author" /></a>
              <a href="<?= home_path() ?>author">John T.</a>

            </div>
            <div class="blog-link-div">
              <div class="blog-time flex-center">
                <img loading="lazy" src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" />

                <a href="<?= isset($blog_link_2) ? home_path($blog_link_2) : "#" ?>">
                  <?= isset($blog_date_2) ? $blog_date_2 : "07 June, 2022" ?>
                </a>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>
    <p class="text-center view-btn"><button class="view_more_btn"><a href="<?= home_path() ?>blogs">View More</a></button></p>
  </section> -->

  <!-- -------------------------- -->
  <!-- Page bottom includes footer and some global script -->
  <!-- -------------------------- -->
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


  <?php include_once page_bottom ?>



 

  <!-- <script src="<?= get_js() ?>form-validation.js"></script> -->
  <script>
    //testimonial
$('.text-tesimonial').owlCarousel({
  loop: true,
  margin: 20,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  responsive: {
      0: {
          items: 1
      },

      800: {
          items: 3
      }
  }
})

//google_review----
$('#google_reviews').owlCarousel({
  loop: true,
  margin:20,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
      0: {
          items: 1
      },

      800: {
          items: 2
      },
      1000:{
        item:3
      }
  }
})

$('button.owl-dot').attr('aria-label', 'owl-dot');
  </script>
</body>


</html>