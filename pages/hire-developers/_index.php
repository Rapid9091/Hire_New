<?php
include_once '../../init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker</title>
    <meta name="title" content=" Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker">
    <meta name="description" content="Are you looking for hiring dedicated developers? Hire Co-Worker helps you to hire a developer for your website, app or project on full time, part time and hourly." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker" />
    <meta property="og:description" content="Are you looking for hiring dedicated developers? Hire Co-Worker helps you to hire a developer for your website, app or project on full time, part time and hourly." />
    <meta property="og:url" content="https://hirecoworker.com/services/hire-dedicated-developers" />
    <meta property="og:site_name" content="Hire Dedicated Developers | Wordpress, Laravel & PHP | Hire Co-Worker" />
    <meta name='robots' content='index' />
    <meta name="keywords" content="hire dedicated developers, hire dedicated laravel developers, hire dedicated wordpress developers, hire dedicated php developers, hire dedicated android developers, hire dedicated web developers, hire dedicated wordpress developer">
    <meta property="article:tag" content="hire dedicated developers" />
    <meta property="article:tag" content="hire dedicated laravel developers" />
    <meta property="article:tag" content="hire dedicated wordpress developers" />
    <meta property="article:tag" content="hire dedicated php developers" />
    <meta property="article:tag" content="hire dedicated android developers" />
    <meta property="article:tag" content="hire dedicated web developers" />
    <meta property="article:tag" content="hire dedicated wordpress developer" />
    
    <?php
    include_once head;
    ?>
    


    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_why-choose-us.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_faq.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_pricing.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_landing-form.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_expert.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_roadmap-2.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_remote-benifit.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_testimonial-slider.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_new-services.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_number-section.css">
    <link rel="stylesheet" href="<?= get_css() ?>hire-developers/hire-developers.css">
    <style>
        .landing-section-services {
            background-image: url("<?= get_img() ?>coder-bg.jpg");
        }
        svg{
            width:50px;
            height:50px;
            }
    </style>
</head>

<body>



    <div class="landing-section-services">

        <?php
        include_once header;
        ?>


        <div class="landing-section-parent grid grid-2">
            <div class="landing-section-content">
                <h2 class="section-heading animate__fadeInUp animate__animated">
                    Hire Dedicated Developers
                </h2>
                <div class="landing-offer-div">
                    <p>Starts from US $10/Hour - Save 70%</p>
                </div>

                <ul class="landing-ul">
                    <li class="text">Get rigorously vetted software developer teams that best match your time zone and work model. Save your hiring time and budget with Remote base.</li>
                </ul>
                <br>
                <a class="basic-button landing-btn" href="#">Hire Dedicated Developers
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>


            <?php include_once landing_form; ?>

        </div>


    </div>

    <!-- number section start -->
    <section class="number_section">
        <p class="p-pink">HIRE COWORKER</p>
        <h3 class="section-heading">The Numbers Do the Talking</h3>
        <div class="grid grid-4">
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>app-development.png" alt="Hire developer" width="100%" height="100%" loading="lazy">
                </div>
                <h4 class="text-center">3500+</h4>
                <p class="text-center">Successful Project</p>
            </div>
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>coding.png" alt="Hire android developer" width="100%" height="100%" loading="lazy">
                </div>
                <h4 class="text-center">750+</h4>
                <p class="text-center">In-House Developers</p>
            </div>
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>mobile_developed.png" alt="Hire mobile app developer" width="100%" height="100%" loading="lazy">
                </div>
                <h4 class="text-center">250+</h4>
                <p class="text-center">Mobile Apps Developed</p>
            </div>
            <div class="number-counter">
                <div class="text-center">
                    <img src="<?= get_img(); ?>web_tech.png" alt="Hire web developer" width="100%" height="100%" loading="lazy">
                </div>
                <h4 class="text-center">100+</h4>
                <p class="text-center">Web Technologies Mastered</p>
            </div>
        </div>
    </section>
    <!-- number section end -->

    <!-- service section of hire developers  -->
    <section class="hire-services w-100">
        <p class="p-pink">HIRE COWORKER</p>
        <h3 class="section-heading text-center">HIRE DEDICATED DEVELOPERS</h3>
        <p class="text text-center">
            Hire your dedicated developer with HireCoworker. We have a track record of satisfactory project delivery, for all kinds of projects. We provides Experienced software developers, Daily/weekly/monthly reporting, complementary development manager, Flexible engagement options & Competitive Pricing Models.
        </p>
        <div class="hire-services-btn-div">
            <button class="dev-type-btn dev-btn-active " id="dev-skill-btn">By-Skill</button>
            <button class="dev-type-btn" id="dev-role-btn">By-Role</button>
        </div>

        <div class="hire-services-container grid grid-3 dev-active" id="By-Skill">
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img width="48" height="48" src="https://img.icons8.com/color/48/golang.png" alt="golang"/>
                </div>
                <div class="tech-info">
                    <h6>Golang</h6>
                    <p>Hire a Golang Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/fluency/48/android-os.png" alt="android-os"/>-->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="android"><path fill="#fff" d="M21.012 91.125c-5.538.003-10.038-4.503-10.039-10.04l-.002-30.739c-.002-5.532 4.497-10.037 10.028-10.038 2.689-.002 5.207 1.041 7.105 2.937s2.942 4.418 2.944 7.099l-.003 30.74c.007 2.679-1.034 5.199-2.931 7.094-1.892 1.9-4.417 2.946-7.102 2.947M21.004 43.005c-4.053-.002-7.338 3.291-7.339 7.341l.005 30.736c.001 4.064 3.292 7.344 7.341 7.348 4.057-.005 7.343-3.285 7.339-7.347v-30.741c-.002-4.049-3.291-7.339-7.346-7.337"></path><path fill="#fff" d="M99.742 44.527l-2.698-.001-66.119.009-2.699.001-.002-2.699c-.006-11.08 6.03-21.385 15.917-27.473l-3.844-7.017c-.47-.822-.588-1.863-.314-2.815.278-.952.935-1.771 1.814-2.239.509-.288 1.131-.448 1.759-.447 1.362 0 2.609.739 3.267 1.933l4.023 7.329c4.163-1.527 8.558-2.306 13.099-2.305 4.606-.002 9.023.777 13.204 2.311l4.017-7.341c.647-1.191 1.903-1.933 3.263-1.932.612-.001 1.223.148 1.761.438.903.495 1.533 1.286 1.81 2.245.276.953.165 1.959-.318 2.832l-3.842 7.013c9.871 6.101 15.9 16.398 15.899 27.459l.003 2.699zM80.196 15.403l5.123-9.355c.273-.489.095-1.115-.399-1.386-.501-.271-1.119-.086-1.384.405l-5.176 9.45c-4.354-1.934-9.229-3.021-14.382-3.016-5.142-.005-10.008 1.078-14.349 3.005l-5.181-9.429c-.267-.497-.891-.679-1.379-.405-.497.266-.68.891-.403 1.379l5.125 9.348c-10.07 5.194-16.874 15.084-16.868 26.439l66.118-.008c.003-11.351-6.789-21.221-16.845-26.427m-31.256 14.457c-1.521-.003-2.763-1.241-2.763-2.771 0-1.523 1.24-2.774 2.766-2.774 1.533-.001 2.773 1.251 2.775 2.774.001 1.528-1.242 2.77-2.778 2.771m30.107-.006c-1.528.002-2.775-1.235-2.772-2.771 0-1.521 1.242-2.772 2.773-2.778 1.521.005 2.768 1.258 2.767 2.779 0 1.531-1.241 2.771-2.768 2.77M51.711 126.159c-5.533-.001-10.036-4.501-10.037-10.038l-.002-13.567-2.638.003c-2.817.001-5.461-1.094-7.448-3.082-1.99-1.986-3.087-4.633-3.083-7.452l-.01-47.627v-2.701h2.699l65.623-.01 2.7-.002v2.699l.007 47.633c.001 5.809-4.725 10.536-10.532 10.535l-2.654.002.003 13.562c0 5.534-4.502 10.039-10.033 10.039-2.681.006-5.197-1.036-7.098-2.937-1.901-1.896-2.948-4.416-2.947-7.096v-13.568h-4.511v13.565c-.002 5.535-4.503 10.043-10.039 10.042"></path><path fill="#fff" d="M31.205 92.022c-.004 4.337 3.497 7.838 7.831 7.837h5.333l.006 16.264c-.001 4.05 3.289 7.341 7.335 7.342 4.056 0 7.342-3.295 7.338-7.348l.001-16.259 9.909-.003-.001 16.263c.004 4.051 3.298 7.346 7.343 7.338 4.056.003 7.344-3.292 7.343-7.344l-.005-16.259 5.353-.001c4.319.001 7.832-3.508 7.832-7.837l-.009-47.635-65.621.012.012 47.63zM106.996 91.112c-5.536.001-10.039-4.498-10.038-10.036l-.008-30.738c.002-5.537 4.498-10.041 10.031-10.041 5.54-.001 10.046 4.502 10.045 10.038l.003 30.736c.001 5.534-4.498 10.042-10.033 10.041M106.986 42.996c-4.053-.004-7.337 3.287-7.337 7.342l.003 30.737c.002 4.059 3.286 7.343 7.342 7.34 4.054-.001 7.335-3.281 7.338-7.343l-.008-30.736c-.001-4.056-3.283-7.342-7.338-7.34"></path><path fill="#A4C439" d="M21.004 43.005c-4.053-.002-7.338 3.291-7.339 7.341l.005 30.736c.001 4.064 3.288 7.344 7.342 7.343 4.056 0 7.342-3.28 7.338-7.342v-30.741c-.002-4.049-3.291-7.339-7.346-7.337m59.192-27.602l5.123-9.355c.273-.489.094-1.111-.401-1.388-.5-.265-1.117-.085-1.382.407l-5.175 9.453c-4.354-1.938-9.227-3.024-14.383-3.019-5.142-.005-10.013 1.078-14.349 3.005l-5.181-9.429c-.269-.497-.889-.677-1.378-.406-.498.269-.681.892-.404 1.38l5.125 9.349c-10.07 5.193-16.874 15.083-16.868 26.438l66.118-.008c.003-11.351-6.789-21.221-16.845-26.427m-31.256 14.457c-1.521-.003-2.763-1.241-2.763-2.771 0-1.523 1.238-2.775 2.766-2.774 1.533-.001 2.773 1.251 2.775 2.774.001 1.528-1.242 2.77-2.778 2.771m30.107-.006c-1.528.002-2.772-1.237-2.772-2.771.006-1.52 1.242-2.772 2.773-2.778 1.521.005 2.768 1.258 2.767 2.779.002 1.531-1.241 2.771-2.768 2.77m-47.854 14.538l.011 47.635c-.003 4.333 3.502 7.831 7.832 7.831l5.333.002.006 16.264c-.001 4.05 3.291 7.342 7.335 7.342 4.056 0 7.342-3.295 7.343-7.347l-.004-16.26 9.909-.003.004 16.263c0 4.047 3.293 7.346 7.338 7.338 4.056.003 7.344-3.292 7.343-7.344l-.005-16.259 5.352-.004c4.32.002 7.834-3.5 7.836-7.834l-.009-47.635-65.624.011zm83.134 5.943c-.001-4.055-3.286-7.341-7.341-7.339-4.053-.004-7.337 3.287-7.337 7.342l.006 30.738c-.001 4.058 3.283 7.338 7.339 7.339 4.054-.001 7.337-3.281 7.338-7.343l-.005-30.737z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Android</h6>
                    <p>Hire a Android Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/angularjs.png" alt="angularjs"/>-->
                      <svg xmlns="http://www.w3.org/2000/svg" width="2370" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 270" id="angular"><path fill="#B3B3B3" d="M127.606.341L.849 44.95 20.88 211.022l106.86 58.732 107.412-59.528L255.175 44.16 127.606.341z"></path><path fill="#A6120D" d="M242.532 53.758L127.31 14.466v241.256l96.561-53.441 18.66-148.523z"></path><path fill="#DD1B16" d="M15.073 54.466l17.165 148.525 95.07 52.731V14.462L15.074 54.465z"></path><path fill="#F2F2F2" d="M159.027 142.898L127.31 157.73H93.881l-15.714 39.305-29.228.54L127.31 23.227l31.717 119.672zm-3.066-7.467l-28.44-56.303-23.329 55.334h23.117l28.652.97z"></path><path fill="#B3B3B3" d="M127.309 23.226l.21 55.902 26.47 55.377h-26.62l-.06 23.189 36.81.035 17.204 39.852 27.967.518-81.981-174.873z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Angular</h6>
                    <p>Hire a Angular Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/fluency/48/arduino.png" alt="arduino"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="1699" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 174" id="arduino"><g fill="#00979C"><path d="M14.044 130.399L.919 173.242h10.328l2.369-7.983h12.803l2.305 7.983h11.231l-13.124-42.843H14.044zm2.166 26.242l3.899-13.325 3.855 13.325H16.21zM64.632 153.696a8.386 8.386 0 0 0-.474-.47c.323-.122.638-.252.946-.394a10.782 10.782 0 0 0 3.255-2.28 10.007 10.007 0 0 0 2.148-3.389c.5-1.287.754-2.766.754-4.393 0-2.243-.405-4.183-1.201-5.768a10.17 10.17 0 0 0-3.461-3.924c-1.447-.97-3.207-1.671-5.232-2.082-1.946-.395-4.138-.597-6.513-.597H41.456v42.843h10.275v-16.74h.305c1.124 0 2.061.247 2.864.757.797.505 1.408 1.25 1.871 2.282l6.21 13.701h11.955l-7.545-15.283c-.914-1.856-1.817-3.249-2.759-4.263zm-4.469-8.219a3.95 3.95 0 0 1-1.26 1.418c-.581.408-1.302.721-2.146.931-.891.223-1.908.335-3.024.335h-2.002v-9.019h2.258c2.352 0 4.1.369 5.195 1.098.954.635 1.418 1.705 1.418 3.273 0 .758-.144 1.401-.439 1.964zM105.04 135.487c-1.73-1.739-3.912-3.041-6.485-3.868-2.508-.809-5.46-1.22-8.773-1.22H76.193v42.843h11.829c3.817 0 7.156-.52 9.923-1.545 2.81-1.039 5.157-2.547 6.974-4.481 1.814-1.93 3.166-4.288 4.016-7.007.834-2.662 1.256-5.656 1.256-8.899 0-3.535-.423-6.636-1.259-9.217-.854-2.644-2.163-4.866-3.892-6.606zm-8.401 26.037c-1.784 1.982-4.372 2.945-7.912 2.945h-2.26v-25.297h2.803c1.981 0 3.644.28 4.941.833 1.258.535 2.231 1.291 2.975 2.309.76 1.044 1.311 2.354 1.637 3.891.343 1.626.518 3.51.518 5.6 0 4.458-.909 7.728-2.702 9.719zM134.942 157.654c0 1.477-.136 2.736-.407 3.742-.252.939-.623 1.706-1.105 2.279a3.893 3.893 0 0 1-1.726 1.189c-.761.272-1.734.409-2.894.409-1.227 0-2.239-.157-3.008-.468a4.505 4.505 0 0 1-1.817-1.31c-.486-.585-.834-1.319-1.035-2.185-.224-.956-.337-2.081-.337-3.347v-27.564h-10.274v28.028c0 2.316.287 4.442.851 6.318.587 1.949 1.555 3.634 2.878 5.005 1.323 1.37 3.055 2.43 5.148 3.147 2.034.701 4.492 1.056 7.305 1.056 2.515 0 4.823-.355 6.857-1.056 2.08-.713 3.873-1.794 5.33-3.214 1.458-1.422 2.589-3.212 3.362-5.32.76-2.07 1.146-4.494 1.146-7.205v-26.759h-10.274v27.255M150.47 139.018h9.22v25.544h-9.22v8.68h28.843v-8.68h-9.22v-25.544h9.22v-8.619H150.47v8.619M207.905 154.811l-11.486-24.412H184.79v42.843h9.569v-24.876l11.547 24.876h11.57v-42.843h-9.571v24.412M250.738 135.468c-3-3.815-7.497-5.749-13.364-5.749-2.51 0-4.904.445-7.116 1.322-2.243.889-4.225 2.273-5.892 4.117-1.652 1.828-2.964 4.179-3.897 6.986-.923 2.771-1.391 6.094-1.391 9.878 0 6.99 1.487 12.428 4.419 16.166 3 3.826 7.497 5.765 13.364 5.765 2.511 0 4.907-.445 7.119-1.322 2.244-.89 4.225-2.275 5.89-4.116 1.65-1.827 2.962-4.177 3.898-6.986.921-2.77 1.389-6.093 1.389-9.879 0-7.01-1.487-12.455-4.419-16.182zm-6.762 22.261c-.294 1.581-.753 2.914-1.364 3.963-.58.999-1.298 1.731-2.193 2.236-.892.503-2.003.758-3.301.758-2.568 0-4.358-.956-5.472-2.921-1.224-2.159-1.845-5.561-1.845-10.115 0-2.138.154-4.059.46-5.706.294-1.578.756-2.909 1.376-3.958.59-1.003 1.31-1.737 2.201-2.244.879-.501 1.982-.755 3.28-.755 2.588 0 4.383.954 5.486 2.916 1.215 2.16 1.831 5.565 1.831 10.119 0 2.144-.154 4.064-.459 5.707zM240.315 5.74h1.823v4.793h1.293V5.74h1.838V4.55h-4.954v1.19M249.768 4.55l-1.247 4.078-1.29-4.078h-1.687v5.983h1.216V6.711l1.206 3.822h1.11l1.144-3.723v3.723h1.21V4.55h-1.662M190.275 120.327c-16.288 0-30.214-5.492-42.47-16.725-7.571-6.937-13.813-15.436-19.556-24.273-5.742 8.837-11.985 17.336-19.555 24.273-13.169 12.069-28.267 17.511-46.149 16.634C28.444 120.088.747 93.176.747 60.118.747 26.969 28.596 0 62.827 0c18.732 0 34.503 6.199 48.21 18.95 6.584 6.125 12.142 13.23 17.212 20.664 5.07-7.434 10.629-14.539 17.212-20.664C159.168 6.199 174.939 0 193.671 0c34.232 0 62.08 26.969 62.08 60.118 0 33.058-27.696 59.97-61.798 60.118a74.818 74.818 0 0 1-3.678.091zM140.72 59.316c6.794 11.023 13.388 21.283 21.42 28.643 9.066 8.309 18.622 11.727 30.975 11.074l.556-.015c22.531 0 40.862-17.45 40.862-38.9 0-21.449-18.331-38.9-40.862-38.9-13.301 0-24.028 4.216-33.758 13.267-7.267 6.761-13.267 15.423-19.193 24.831zM62.827 21.218c-22.531 0-40.862 17.451-40.862 38.9 0 21.45 18.331 38.9 40.862 38.9l.557.015c12.354.653 21.908-2.765 30.974-11.074 8.032-7.36 14.627-17.62 21.42-28.643-5.926-9.408-11.926-18.07-19.192-24.831-9.731-9.051-20.458-13.267-33.759-13.267z"></path><path d="M196.477 52.407V40.901h-11.976v11.506h-11.505v11.918h11.505v11.591h11.976V64.325h11.506V52.407h-11.506M45.599 52.263h37.817v12.292H45.599V52.263z"></path></g></svg>
                </div>
                <div class="tech-info">
                    <h6>Arduino</h6>
                    <p>Hire a Arduino Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/amazon-web-services.png" alt="amazon-web-services"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="amazon-aws"><polygon fill="#FF9800" points="20.189 12.33 20.189 12.33 20.188 12.33"></polygon><path fill="#FF9800" d="M0.106,14.677c3.13,2.855,7.272,4.573,11.87,4.573c3.28,0,7.096-1.039,9.722-2.999c0.431-0.324,0.056-0.816-0.383-0.614c-2.946,1.258-6.146,1.871-9.06,1.871c-4.319,0-8.493-1.202-11.877-3.185C0.082,14.145-0.141,14.452,0.106,14.677L0.106,14.677z"></path><path fill="#DE8400" d="M0.206,14.27c-0.196,0-0.295,0.229-0.1,0.407c3.13,2.855,7.272,4.573,11.87,4.573c0.008,0,0.016,0,0.024,0v-1.743c-4.228-0.046-8.305-1.24-11.622-3.184C0.317,14.286,0.258,14.27,0.206,14.27L0.206,14.27z"></path><path fill="#FF9800" d="M22.424,18.169c1.405-1.193,1.772-3.684,1.485-4.048c-0.287-0.355-2.754-0.661-4.254,0.403c-0.232,0.169-0.192,0.396,0.063,0.364c0.854-0.106,2.738-0.331,3.074,0.104c0.335,0.428-0.375,2.227-0.695,3.025C22.001,18.258,22.209,18.355,22.424,18.169L22.424,18.169z"></path><path fill="#DE8400" d="M23.912,14.124L22.684,14.9c0.045,0.027,0.081,0.057,0.108,0.091c0.335,0.428-0.375,2.227-0.695,3.025c-0.061,0.154,0.001,0.25,0.111,0.25c0.062,0,0.138-0.03,0.216-0.097C23.825,16.979,24.194,14.5,23.912,14.124L23.912,14.124z"></path><path fill="#212121" d="M17.181 5.16c0-.136-.073-.202-.199-.202H16.24l-.034-.001c-.104 0-.2.03-.279.082-.056.048-.112.154-.16.315l-1.381 5.404-1.261-5.404c-.031-.153-.088-.267-.151-.315-.064-.055-.168-.081-.32-.081h-.636l-.035-.001c-.106 0-.205.03-.287.082-.063.048-.111.154-.151.315L10.3 10.692 8.958 5.354C8.911 5.201 8.863 5.087 8.798 5.039c-.055-.055-.159-.081-.31-.081H7.705c-.127 0-.191.073-.191.202l.001.006C7.527 5.28 7.552 5.39 7.586 5.483l1.875 6.235c.048.152.104.266.168.314.064.057.159.081.304.081l.686-.001c.143 0 .255-.024.32-.081.063-.057.11-.161.15-.323l1.23-5.193 1.238 5.201c.031.162.087.267.15.323.065.057.169.08.32.08h.686l.029.001c.102 0 .197-.03.275-.081.064-.049.12-.153.168-.315l1.923-6.233L17.105 5.5l.059-.21L17.181 5.16 17.181 5.16zM21.682 10.202v.022c0 .314-.164.589-.415.744-.271.178-.663.267-1.165.267-.32 0-.631-.033-.95-.097-.312-.065-.607-.161-.878-.282l-.2-.081L17.93 10.75c-.119 0-.183.081-.183.25v.411l.048.226c.032.073.119.154.247.226.208.121.519.226.918.323.398.096.813.144 1.228.144.408 0 .781-.056 1.142-.168.343-.105.638-.249.886-.452.247-.194.439-.435.583-.71.135-.274.207-.589.207-.935 0-.419-.12-.798-.367-1.129-.247-.33-.663-.589-1.237-.775l-1.134-.361c-.423-.138-.718-.291-.877-.445-.16-.152-.24-.347-.24-.573 0-.331.128-.564.375-.717.247-.154.607-.225 1.062-.225h.055c.534 0 1.042.115 1.476.314l-.004-.002c.092.051.194.086.307.099.12 0 .184-.089.184-.259V5.614l.001-.026-.072-.24-.001-.002c-.063-.082-.143-.151-.239-.2C22.216 5.097 22.104 5.048 21.961 5c-.143-.048-.296-.088-.455-.129-.168-.032-.335-.064-.518-.089-.176-.024-.36-.032-.535-.032-.351 0-.686.041-1.006.137-.32.096-.59.234-.83.419-.24.177-.431.403-.575.661-.143.259-.215.557-.215.895.002.444.152.851.4 1.169.263.363.694.637 1.277.822l1.156.364c.391.129.663.267.807.419.134.141.216.332.216.543V10.202L21.682 10.202 21.682 10.202zM4.52 7.944C4.225 7.903 3.946 7.879 3.674 7.879c-.822 0-1.468.21-1.955.63C1.233 8.927.993 9.484.993 10.17c0 .646.199 1.162.59 1.549.391.387.927.58 1.596.58.942 0 1.725-.371 2.347-1.112l.016.037c.076.16.159.315.233.439l.006.01c.083.133.177.257.281.369L6.3 12.154h.001l.207-.073.503-.339c.104-.081.152-.162.152-.242l-.056-.185c-.112-.21-.192-.404-.256-.582-.056-.177-.088-.418-.088-.717l-.016.001V7.404c0-.887-.223-1.548-.661-1.983C5.638 4.986 4.944 4.767 3.994 4.767H3.948c-.426 0-.84.055-1.2.153C2.357 5.017 2.022 5.138 1.743 5.283L1.739 5.284l-.22.167c-.04.057-.056.153-.056.283v.395c0 .169.056.25.168.25h.001l.126-.023.016-.005C1.87 6.321 1.963 6.286 2.038 6.25 2.317 6.137 2.605 6.048 2.9 5.976c.295-.073.583-.104.863-.104.614 0 1.045.12 1.3.371.248.249.375.677.375 1.29v.589C5.12 8.049 4.815 7.984 4.52 7.944L4.52 7.944zM5.455 9.024v.339c0 .274-.033.508-.08.701-.048.194-.143.363-.272.517C4.888 10.823 4.632 11 4.345 11.097c-.288.097-.559.145-.822.145-.368 0-.648-.097-.838-.299-.2-.193-.295-.476-.295-.855 0-.403.127-.709.39-.927.264-.218.655-.323 1.19-.323.265 0 .525.018.75.048l.034.004C5.008 8.925 5.257 8.973 5.455 9.024L5.455 9.024z"></path><path fill="#3E3E3E" d="M8.488 4.958H7.705c-.127 0-.191.073-.191.202l.001.006C7.527 5.28 7.552 5.39 7.586 5.483l.917 3.05h1.254L8.958 5.354C8.911 5.201 8.863 5.087 8.798 5.039 8.743 4.984 8.639 4.958 8.488 4.958L8.488 4.958zM11.983 4.957c-.106 0-.205.03-.287.082-.063.048-.111.154-.151.315l-.741 3.179h1.037l.478-2.018.48 2.018h1.067l-.742-3.179c-.031-.153-.088-.267-.151-.315-.064-.055-.168-.081-.32-.081h-.636L11.983 4.957 11.983 4.957zM16.206 4.957c-.104 0-.2.03-.279.082-.056.048-.112.154-.16.315l-.812 3.179h1.215l.938-3.041L17.105 5.5l.059-.21.017-.129c0-.136-.073-.202-.199-.202H16.24L16.206 4.957 16.206 4.957zM20.452 4.75c-.351 0-.686.041-1.006.137-.32.096-.59.234-.83.419-.24.177-.431.403-.575.661-.143.259-.215.557-.215.895.002.444.152.851.4 1.169.139.192.325.359.556.501h3.422c-.218-.146-.486-.27-.801-.372l-1.134-.361c-.423-.138-.718-.291-.877-.445-.16-.152-.24-.347-.24-.573 0-.331.128-.564.375-.717.247-.154.607-.225 1.062-.225h.055c.533 0 1.041.114 1.474.313.091.051.193.085.305.098.12 0 .184-.089.184-.259V5.614l.001-.026-.072-.24-.001-.002c-.063-.082-.143-.151-.239-.2C22.216 5.097 22.104 5.048 21.961 5c-.143-.048-.296-.088-.455-.129-.168-.032-.335-.064-.518-.089C20.811 4.758 20.627 4.75 20.452 4.75L20.452 4.75zM3.994 4.767H3.948c-.426 0-.84.055-1.2.153C2.357 5.017 2.022 5.138 1.743 5.283L1.739 5.284l-.22.167c-.04.057-.056.153-.056.283v.395c0 .169.056.25.168.25h.001l.126-.023.016-.005C1.87 6.321 1.963 6.286 2.038 6.25 2.317 6.137 2.605 6.048 2.9 5.976c.295-.073.583-.104.863-.104.614 0 1.045.12 1.3.371.248.249.375.677.375 1.29v.589C5.12 8.049 4.815 7.984 4.52 7.944 4.225 7.903 3.946 7.879 3.674 7.879c-.822 0-1.468.21-1.955.63C1.71 8.516 1.701 8.525 1.691 8.533h5.056V7.404c0-.887-.223-1.548-.661-1.983C5.638 4.986 4.944 4.767 3.994 4.767L3.994 4.767z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>AWS</h6>
                    <p>Hire a AWS Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/bootstrap.png" alt="bootstrap"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 256" id="bootstrap"><path fill="#563D7C" d="M0 222.991C0 241.223 14.779 256 33.009 256H222.99C241.223 256 256 241.221 256 222.991V33.01C256 14.777 241.221 0 222.991 0H33.01C14.777 0 0 14.779 0 33.009V222.99z"></path><path fill="#FFF" d="M106.158 113.238V76.985h31.911c3.04 0 5.97.253 8.792.76 2.822.506 5.319 1.41 7.49 2.713 2.17 1.303 3.907 3.112 5.21 5.427 1.302 2.316 1.954 5.283 1.954 8.9 0 6.513-1.954 11.217-5.862 14.111-3.907 2.895-8.9 4.342-14.979 4.342h-34.516zM72.075 50.5v155h75.112c6.947 0 13.713-.868 20.298-2.605 6.585-1.737 12.446-4.414 17.584-8.032 5.137-3.618 9.226-8.286 12.265-14.002 3.04-5.717 4.559-12.483 4.559-20.298 0-9.697-2.352-17.982-7.055-24.856-4.704-6.875-11.832-11.687-21.384-14.437 6.947-3.328 12.194-7.598 15.74-12.808 3.545-5.21 5.318-11.722 5.318-19.538 0-7.236-1.194-13.314-3.582-18.235-2.388-4.92-5.753-8.864-10.095-11.831-4.341-2.967-9.551-5.102-15.63-6.404-6.078-1.303-12.808-1.954-20.189-1.954H72.075zm34.083 128.515v-42.549h37.121c7.381 0 13.315 1.7 17.802 5.102 4.486 3.401 6.73 9.081 6.73 17.041 0 4.053-.688 7.381-2.063 9.986-1.375 2.605-3.22 4.668-5.536 6.187-2.315 1.52-4.993 2.605-8.032 3.257-3.04.65-6.223.976-9.552.976h-36.47z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Bootstrap</h6>
                    <p>Hire a bootstrap Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/c-sharp-logo-2.png" alt="c-sharp-logo-2"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2222" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 288" id="c"><path fill="#5C8DBC" d="M255.569 84.72c-.002-4.83-1.035-9.098-3.124-12.761-2.052-3.602-5.125-6.621-9.247-9.008-34.025-19.619-68.083-39.178-102.097-58.817-9.17-5.294-18.061-5.101-27.163.269C100.395 12.39 32.59 51.237 12.385 62.94 4.064 67.757.015 75.129.013 84.711 0 124.166.013 163.62 0 203.076c.002 4.724.991 8.909 2.988 12.517 2.053 3.711 5.169 6.813 9.386 9.254 20.206 11.703 88.02 50.547 101.56 58.536 9.106 5.373 17.997 5.565 27.17.269 34.015-19.64 68.075-39.198 102.105-58.817 4.217-2.44 7.333-5.544 9.386-9.252 1.994-3.608 2.985-7.793 2.987-12.518 0 0 0-78.889-.013-118.345"></path><path fill="#1A4674" d="M128.182 143.509L2.988 215.593c2.053 3.711 5.169 6.813 9.386 9.254 20.206 11.703 88.02 50.547 101.56 58.536 9.106 5.373 17.997 5.565 27.17.269 34.015-19.64 68.075-39.198 102.105-58.817 4.217-2.44 7.333-5.544 9.386-9.252l-124.413-72.074"></path><path fill="#1A4674" d="M91.101 164.861c7.285 12.718 20.98 21.296 36.69 21.296 15.807 0 29.58-8.687 36.828-21.541l-36.437-21.107-37.081 21.352"></path><path fill="#1B598E" d="M255.569 84.72c-.002-4.83-1.035-9.098-3.124-12.761l-124.263 71.55 124.413 72.074c1.994-3.608 2.985-7.793 2.987-12.518 0 0 0-78.889-.013-118.345"></path><path fill="#FFF" d="M248.728 148.661h-9.722v9.724h-9.724v-9.724h-9.721v-9.721h9.721v-9.722h9.724v9.722h9.722v9.721M213.253 148.661h-9.721v9.724h-9.722v-9.724h-9.722v-9.721h9.722v-9.722h9.722v9.722h9.721v9.721"></path><path fill="#FFF" d="M164.619 164.616c-7.248 12.854-21.021 21.541-36.828 21.541-15.71 0-29.405-8.578-36.69-21.296a42.062 42.062 0 0 1-5.574-20.968c0-23.341 18.923-42.263 42.264-42.263 15.609 0 29.232 8.471 36.553 21.059l36.941-21.272c-14.683-25.346-42.096-42.398-73.494-42.398-46.876 0-84.875 38-84.875 84.874 0 15.378 4.091 29.799 11.241 42.238 14.646 25.48 42.137 42.637 73.634 42.637 31.555 0 59.089-17.226 73.714-42.781l-36.886-21.371"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>C#</h6>
                    <p>Hire a C# Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                   <!-- <img width="48" height="48" src="https://img.icons8.com/fluency/48/chatbot.png" alt="chatbot"/>-->
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" id="chatbot"><path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="20" d="m577.27 804.78-41.85.78-166.87 110.62c-.57.41-1.36 0-1.36-.7V804.34h-81.51c-59 0-106.81-47.82-106.81-106.81V394.45c0-58.99 47.81-106.81 106.81-106.81H738.33c58.99 0 106.81 47.82 106.81 106.81v303.08c0 58.99-47.82 106.81-106.81 106.81l-43.64.44H577.27z"></path><circle cx="389.34" cy="448.2" r="61.34" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="20"></circle><circle cx="635.34" cy="448.2" r="61.34" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="20"></circle><path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="20" d="M847.21 634.45V463.13h46.48c19.39 0 35.11 15.72 35.11 35.11v101.11c0 19.39-15.72 35.11-35.11 35.11h-46.48zM95.2 599.35V498.24c0-19.39 15.72-35.11 35.11-35.11h46.48v171.33h-46.48c-19.39-.01-35.11-15.73-35.11-35.11zm546.66 6.99c-8.57 61.51-64.53 109-132.32 109-67.77 0-123.75-47.49-132.32-109h264.64z"></path><circle cx="509.54" cy="149.59" r="41.94" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="20"></circle><path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="20" d="M509.54 244.21v-52.68"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Chatbot</h6>
                    <p>Hire a Chatbot Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="<?= get_img() ?>logos/clojure.webp" alt="Hire Clojure Developer">-->
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="clojure"><path d="M14.048 18.006c-.015.005-.031.007-.046.012l.001.001.045-.013z"></path><path fill="#8CAFF6" d="M15.273 16.952c.074.036.242.097.475.163a6.353 6.353 0 0 0 2.6-5.114V12h-.002a6.353 6.353 0 0 0-6.345-6.344 6.36 6.36 0 0 0-1.991.325c1.288 1.468 1.907 3.565 2.506 5.86l.001.003c.001.002.192.637.518 1.48.326.842.789 1.885 1.293 2.645.332.51.697.876.945.983z"></path><path d="M9.964 5.993c.015-.005.031-.007.046-.012l-.001-.001-.045.013z"></path><path fill="#60AB31" d="M.072 10.712c-.092.486-.07.854-.07 1.29 0 6.626 5.373 11.999 12 11.999 4.059 0 7.643-2.017 9.815-5.101-1.174.293-2.305.433-3.271.436-.362 0-.702-.02-1.019-.058v-.002c-.84-.105-1.533-.232-2.141-.446-.987.5-2.152.793-3.385.793a7.625 7.625 0 0 1-7.625-7.622v-.006a7.582 7.582 0 0 1 2.591-5.716l.009-.007a5.447 5.447 0 0 0-1.323-.162h-.001c-2.236.02-4.597 1.258-5.58 4.602z"></path><path fill="#8DD646" d="M10.815 10.275c-.406-1.018-.991-2.198-1.513-2.733a4.28 4.28 0 0 0-.926-.718l-.021-.011A6.347 6.347 0 0 0 5.657 12a6.338 6.338 0 0 0 2.607 5.121l.018.013c.39-1.622 1.366-3.107 2.83-6.083-.087-.24-.186-.501-.297-.776zm1.187 8.069a6.423 6.423 0 0 0 2-.327 3.898 3.898 0 0 1-.411-.433l-.006-.007c-.854-1.089-1.329-2.682-2.082-5.362-.119.259-.251.549-.387.858-.482 1.092-1.016 2.42-1.21 3.271a4.808 4.808 0 0 0-.112 1.044v.052c0 .164.009.337.022.514.682.25 1.417.388 2.186.39z"></path><path fill="#567DD2" d="M12.001.001h-.006a11.967 11.967 0 0 0-9.722 4.978l-.024.035c1.134-.71 2.291-.967 3.301-.957 1.394.004 2.491.436 3.017.732.127.073.248.152.366.233A7.503 7.503 0 0 1 12 4.378 7.625 7.625 0 0 1 19.625 12v.007c0 2.12-.868 4.038-2.267 5.417l-.001.001c.344.038.709.063 1.084.061 1.328 0 2.766-.293 3.842-1.198.703-.592 1.291-1.458 1.617-2.757.065-.502.1-1.012.1-1.531C24 5.374 18.629.001 12.001.001z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Clojure</h6>
                    <p>Hire a Clojure Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img  width="48" height="48" src="<?= get_img() ?>logos/django.svg" alt="Hire Django Developer">-->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="django"><path fill="#0D2E1E" d="M21.25 6.06v-.001h-3.897v7.747c0 3.414-.177 4.714-.734 5.835-.531 1.096-1.367 1.81-3.088 2.625L17.15 24c1.721-.866 2.556-1.656 3.189-2.905.683-1.299.911-2.803.911-5.937V6.06z"></path><path fill="#0D2E1E" d="M15.049 18.166V0h-3.897v5.984a6.182 6.182 0 0 0-1.695-.204c-4.075 0-6.707 2.599-6.707 6.6 0 4.154 2.48 6.32 7.238 6.32 1.594.001 3.062-.152 5.061-.534zm-8.326-5.862c0-2.141 1.138-3.364 3.113-3.364h-.004c.028-.002.055-.002.082-.002.443 0 .868.075 1.237.205v6.294a8.933 8.933 0 0 1-1.341.102c-1.998.001-3.087-1.145-3.087-3.235zM17.353.021h3.897v4.026h-3.897z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Django</h6>
                    <p>Hire a Django Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img  width="48" height="48" src="<?= get_img() ?>logos/dotnet.webp" alt="Hire .NET Developer">-->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">  <image id="image0" width="32" height="32" x="0" y="0"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAG
YUlEQVRYw8WXa2wc1RXHf3dnn/Z6vdjO2ia2scGOX2s74MQiaVOS0gcgoKUIqqA+VPWBUNUvlFZF
bSpatUBFP7Vqq1AVJJrWSKmjVqp4RQVTEiAQh4TYCXac+B3b2Puw9+WdmZ3bDzML6/XaCVFp/9LV
zD3n3HP+99x7z50R/A9RcfsTuxVpt+tOt7H5tjtGmuuLYvb1jD29oVrH5NRDUlXv8TgU+46uTUdi
uss9f/qcJzpyQYuXlut6sD3eUB/4mz2efunkXVdF1/Pl/O3ZDsfUxMNiaGivgYFwu/sD1Z7H3T7P
SEECvr9M9dinpx/R0uqtACk1kzkyNC9d5yd1/f2FcgzZ4VpKYJSWvn1ByC83X7PJ3b3/eO/A/du0
fF/uP5yt1w35b/fI8LQlSmTaOpIV5Z7oVNI9ZVvD9pm5YPlyap+WSt+Slfl9jpeK6ku2puoaZLqu
LvxBloYGKzNa5s7I8koVja0dhSajGXKfc2Zm1KbpQQCjLPC2t9T7hl2Tk/17hL6awIGQr9am/Ty0
uNQNCICAz9nf2uxXpJH5vIjr44mtXXaEWALAkHXOmYsnFsOxbill25ro+487hJRfLBo847UkS1pz
W3NzU1n/gV1FcwCrCPgzK79Mh5bLpJTVAG677d37tlcHx1Lar6fvbR8ViJed0bhQqwInP8jY2Liu
6vJmpPRvfUX6c/3Z9eI9nveGB0VGbwEwNlW/43C7Xwx4nUMIIVcRcDw9uz2gZDqXlpJdlmh5b8/V
ftXgmXNf2nIYIOOwv+paWG5PXN9VlR2npOJdNiPjWYylvIqeqM0loMRin3WPjWX9xbTGluA1m0ue
+usufyRr8yEBRf4oNhuRYM5iR4P/lM9j13qnjKeyNtFHro8Kw3jP8PqihtMxBIAUxY6LM+8uLa/U
ZZTMhwSkFN5jx7YDpQBGRWDA6XYduq6z9lguSRuA88BsW5k0roon1W4Ap912+sZr/Tv6FzN9k9VV
w6vWVYjDzoVlLdm6JZoVuSamMmlV71Sk/WqkFABlD/TdY1PVm6xBcb2xtbqpbtMTB9uFuoYAurwr
OR/KIKQXMO7sDNiWNeP5Y5HMEHuEnjtAGuIF90KkK9XS2ooQYQBbItEpVK09nTY8wX8lAo4/TnST
SNyfHWMEqo/7yvyPv3FvYDR/n9p4TrqElNvVlfROgAqv82htmbu+b1YOC5SB/AGRx7a9LgxjRknr
g6mG+kGLVonz/PlTc+FwTWwx8QlF0/uUSKjLXCEx5WhvfSv4uet6KQCbc3H2WpFMpgUUAZnb2irq
ZlLi0Jwqp9WvV51ZO0RIIfhx8fjslnjPDS3SrowAuMYngtrobMPK4dcfdr9zYgwpywHd0dT45127
6x59vkmkCxIAEVTSWgCgosRx1Od1hg9Oq29q8cifskclH6Ff9Byyp/XfFE8sTIduvSWFy/2mzVt2
1jMTaRaGseIIhSSCueKamu998lt3PHZwW1kcuBnYtWY6yoG5213z4VolESu5qb3y3ACVJ2bv9kxw
Gaj44ZES3aaU+yZDNtWnGG7AUJO2tM0rHW0lc9MP7kzlmLswi9vK5fj+vyGY814JVABdV+jLB9x9
KSMlr/8zIAGMAz8FdOt9GWiw+sVACeAANgMRwA94MdPbYtl/DThjPUeAbUAYUDcisAWoAcaAG4Bp
4FNALVAGaMCjwHngPsw60gR8FThnBQsBX8E8VYvATouIG3gfWHUa1lzHFtsHgUM5sgbgn8AwcAqI
AyeAF4FG4GXgRsvfUUBamTttERsEXgOWLrUE5cBzVjpHAcNK2WvAXou9DhwBdgNbgWetWY4CU8Bn
gJNAFLho2ddYujUQeX2vRWqpgG2xRSgF2K19kAtpBS0BnBRGPH8J8tFnBfl0Ad2zmOsP0GMFzG1x
S/ePArps+0a+00J7YAL4PWbh2AialcFsy371fMHyawNeBb6f03/6cgj0Ws5/wpUjO+P1+hsSyADf
BH6Auck+Vqz3X/AW8DtgP+YOzxSwUSx9FgPAkx+VgG0D3T7MY/nAOnoJXMhp8//NDAAkgW8Df8fc
2fkwgF9dSdDLzQDAK8BBzFOhXdrdlRHoxPpyXQcPAd2Yd8LHQuAF4Lsb2ESB7wB1eXIH5u2W2zr4
iBCYl8lFzDWvxEx1uIBtPeY1G8YsUpsL2MywutQGMEt3bD0C/wE9I3yIUB7ffQAAACV0RVh0ZGF0
ZTpjcmVhdGUAMjAyMy0wNi0wN1QxNTo1NDozMCswMDowMCPSYWoAAAAldEVYdGRhdGU6bW9kaWZ5
ADIwMjMtMDYtMDdUMTU6NTQ6MzArMDA6MDBSj9nWAAAAAElFTkSuQmCC" />
</svg>

                </div>
                <div class="tech-info">
                    <h6>.NET</h6>
                    <p>Hire a .NET Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/external-those-icons-flat-those-icons/48/external-Drupal-Logo-social-media-those-icons-flat-those-icons.png" alt="external-Drupal-Logo-social-media-those-icons-flat-those-icons"/>-->
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="drupal"><path fill="#00598E" d="M91.1 24.935c-6.352-3.956-12.345-5.513-18.337-9.469-3.716-2.516-8.869-8.51-13.185-13.663-.838 8.27-3.355 11.625-6.231 14.022-6.112 4.795-9.948 6.232-15.222 9.109-4.435 2.278-28.524 16.661-28.524 47.582 0 30.923 26.008 53.694 54.892 53.694 28.886 0 53.934-20.974 53.934-52.734-.001-31.762-23.491-46.143-27.327-48.541z"></path><path fill="#fff" d="M81.365 99.35c1.917 0 3.955.119 5.394 1.079 1.438.958 2.277 3.116 2.756 4.314.479 1.199 0 1.917-.959 2.396-.838.48-.958.24-1.797-1.317-.839-1.558-1.559-3.117-5.753-3.117-4.195 0-5.514 1.439-7.551 3.117-2.038 1.678-2.757 2.277-3.476 1.317-.719-.958-.479-1.917.839-3.116s3.476-3.116 5.513-3.955c2.038-.838 3.117-.718 5.034-.718zM61.47 113.013c2.397 1.917 5.992 3.475 13.663 3.475s13.063-2.157 15.461-3.954c1.079-.84 1.558-.12 1.678.359.12.479.36 1.199-.479 2.037-.599.6-6.112 4.435-12.584 5.034-6.473.599-15.221.959-20.495-3.835-.839-.839-.599-2.037 0-2.516.6-.479 1.079-.84 1.798-.84s.598-.001.958.24z"></path><path fill="#0073BA" d="M32.106 103.903c9.108-.119 10.786-1.678 18.816-5.273 43.387-19.416 51.416-37.153 52.975-41.229 1.558-4.076 3.835-10.667 1.438-17.979-.463-1.412-.801-2.545-1.045-3.456-5.765-6.447-11.489-9.965-13.218-11.045-6.232-3.955-12.345-5.513-18.338-9.468-3.715-2.397-8.868-8.51-13.183-13.663-.84 8.269-3.236 11.746-6.233 14.022-6.112 4.795-9.947 6.233-15.221 9.109-4.433 2.397-28.523 16.66-28.523 47.581 0 9.873 2.651 18.915 7.201 26.649l1.188-.042c2.517 2.278 6.473 4.914 14.143 4.794z"></path><path fill="#004975" d="M91.073 24.922c-6.232-3.955-12.345-5.513-18.338-9.468-3.715-2.397-8.868-8.51-13.183-13.663-.84 8.269-3.236 11.746-6.233 14.022-6.112 4.795-9.947 6.233-15.221 9.109-4.434 2.396-28.524 16.659-28.524 47.58 0 9.873 2.651 18.915 7.201 26.649 9.7 16.492 28.028 27.044 47.69 27.044 28.885 0 53.934-20.974 53.934-52.735 0-17.441-7.084-29.641-14.108-37.494-5.765-6.446-11.489-9.964-13.218-11.044zm14.569 14.03c7.868 9.838 11.859 21.448 11.859 34.509 0 7.58-1.444 14.739-4.291 21.281-2.7 6.206-6.59 11.703-11.559 16.34-9.823 9.168-23.029 14.216-37.186 14.216-7.003 0-13.875-1.338-20.427-3.977-6.434-2.591-12.232-6.302-17.232-11.029-10.533-9.955-16.334-23.375-16.334-37.789 0-12.837 4.167-24.244 12.386-33.905 6.278-7.379 13.049-11.469 15.668-12.885 1.271-.694 2.465-1.307 3.618-1.898 3.616-1.856 7.032-3.609 11.73-7.295 2.505-1.903 5.174-4.919 6.31-12.576 3.96 4.708 8.554 10 12.064 12.264 3.116 2.058 6.312 3.499 9.403 4.892 2.923 1.319 5.947 2.682 8.938 4.581l.113.07c8.748 5.46 13.407 11.286 14.94 13.201z"></path><path fill="#93C5E4" d="M60.151 4.187c1.678 4.914 1.438 7.431 1.438 8.51s-.6 3.956-2.518 5.393c-.839.6-1.078 1.079-1.078 1.199 0 .479 1.078.839 1.078 1.917 0 1.319-.599 3.956-6.951 10.308-6.353 6.352-15.461 11.985-22.532 15.46-7.071 3.476-10.427 3.237-11.386 1.559-.959-1.678.359-5.393 4.794-10.307 4.435-4.915 18.457-11.986 18.457-11.986l17.499-12.224.958-4.675"></path><path fill="#fff" d="M60.151 4.067c-1.079 7.911-3.476 10.308-6.712 12.824-5.394 4.076-10.667 6.592-11.865 7.191-3.116 1.558-14.382 7.791-20.255 16.78-1.798 2.756 0 3.835.359 4.074.36.24 4.435.719 13.184-4.554 8.75-5.274 12.585-8.39 17.499-13.544 2.637-2.756 2.996-4.314 2.996-5.034 0-.838-.6-1.198-1.558-1.438-.48-.12-.6-.36 0-.719.599-.359 3.115-1.558 3.715-2.037.6-.479 3.476-2.396 3.596-5.513.119-3.116-.12-5.274-.959-8.03zM33.185 91.199c.12-9.349 8.869-18.098 19.896-18.218 14.022-.119 23.73 13.903 30.802 13.783 5.991-.118 17.497-11.864 23.131-11.864 5.992 0 7.671 6.232 7.671 9.948 0 3.715-1.199 10.427-4.076 14.621-2.876 4.196-4.674 5.753-8.029 5.513-4.314-.359-12.944-13.783-18.458-14.022-6.95-.24-22.053 14.501-33.918 14.501-7.19 0-9.348-1.078-11.745-2.637-3.597-2.515-5.394-6.351-5.274-11.625z"></path><path fill="none" d="M105.336 39.423c2.396 7.311.119 13.903-1.438 17.979-1.559 4.075-9.588 21.813-52.975 41.229-8.03 3.595-9.708 5.154-18.816 5.273-7.671.12-11.626-2.516-14.143-4.793l-1.188.042c9.7 16.492 28.028 27.044 47.69 27.044 28.885 0 53.934-20.974 53.934-52.735 0-17.441-7.084-29.641-14.108-37.494.243.91.581 2.044 1.044 3.455z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Drupal</h6>
                    <p>Hire a Drupal Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img src="<?= get_img() ?>logos/firebase.webp" alt="Hire Firebase Developer">-->
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/firebase.png" alt="firebase"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="firebase"><path fill="#FFA000" d="m14.714 8.669-2.4 2.235-2.228-4.496 1.151-2.585c.291-.516.767-.522 1.058 0l2.419 4.846z"></path><path fill="#F57F17" d="m12.314 10.903-8.979 8.351 6.751-12.846 2.228 4.495z"></path><path fill="#FFCA28" d="M17.346 5.251c.43-.41.873-.271.985.31l2.334 13.58-7.742 4.648c-.272.152-.992.211-.992.211s-.655-.08-.906-.218l-7.689-4.528 14.01-14.003z"></path><path fill="#FFA000" d="m10.086 6.408-6.75 12.846L6.344.477c.113-.582.443-.641.74-.126l3.002 6.057z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Firebase</h6>
                    <p>Hire a Firebase Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                   <!-- <img width="48" height="48" src="https://img.icons8.com/color/48/flutter.png" alt="flutter"/>-->
                       <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="flutter"><polygon fill="#0D47A1" points="11.536 21.231 14.305 24 21.695 24 15.232 17.537 11.536 21.231"></polygon><polygon fill="#42A5F5" points="7.849 17.538 11.539 13.848 15.229 17.538 11.539 21.229 7.849 17.538"></polygon><polygon fill="#5A9FD7" points="15.233 17.536 15.231 17.536 15.231 17.536 15.232 17.536 15.232 17.536 15.233 17.536"></polygon><polygon fill="#0B3E8C" points="15.372 17.677 17.02 19.337 13.11 20.688 12.054 21.744 11.54 21.23 11.536 21.231 14.305 24 21.695 24 15.372 17.677"></polygon><polygon fill="#3990D5" points="15.227 17.536 7.852 17.536 7.849 17.538 11.539 21.229 15.229 17.538 15.227 17.536"></polygon><defs><polyline id="a" points="13.11 20.688 11.54 21.23 12.054 21.744 13.11 20.688"></polyline></defs><defs><path id="b" d="M11.539,21.229l-0.003,0.003L11.539,21.229 M15.232,17.536L15.232,17.536l0.14,0.141L15.232,17.536 M15.231,17.536l-3.692,3.692l3.69-3.69l0,0L15.231,17.536L15.231,17.536"></path></defs><defs><polyline id="c" points="15.232 17.536 15.231 17.536 15.232 17.537 15.232 17.536 15.232 17.536"></polyline></defs><defs><path id="d" d="M11.539,21.229l-0.003,0.003l0.004-0.001L11.539,21.229 M15.232,17.537L15.232,17.537l-0.002,0.002l0.515,0.515l-2.634,2.634l3.91-1.35l-1.648-1.661L15.232,17.537"></path></defs><defs><polyline id="e" points="15.229 17.538 11.539 21.229 15.229 17.539 15.229 17.538"></polyline></defs><defs><polyline id="f" points="15.229 17.539 11.539 21.229 11.54 21.23 13.11 20.688 15.744 18.054 15.229 17.539"></polyline></defs><path fill="#68B7F7" d="M21.695,11.073h-7.391l-2.768,2.768l3.694,3.694h0.002L21.695,11.073L21.695,11.073z M21.695,0h-7.391l-12,11.999L6,15.695L21.695,0L21.695,0z"></path><path fill="#5B9FD7" d="M20.844,11.073h-6.539l-2.768,2.768l3.694,3.694h0.002l5.611-5.611V11.073L20.844,11.073z M15.695,6H8.304l-5.999,5.999L6,15.695L15.695,6L15.695,6z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Flutter</h6>
                    <p>Hire a Flutter Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/hadoop-distributed-file-system.png" alt="hadoop-distributed-file-system"/>-->
                </div>
                <div class="tech-info">
                    <h6>Hadoop</h6>
                    <p>Hire a Hadoop Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img width="48" height="48" src="https://img.icons8.com/color/48/swift.png" alt="swift"/>
                </div>
                <div class="tech-info">
                    <h6>IOS</h6>
                    <p>Hire a IOS Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img  width="48" height="48" src="<?= get_img() ?>logos/iot.webp" alt="Hire IoT Developer">-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="iot-cloud"><path d="M40.1 41.4c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2s3.2-1.4 3.2-3.2c0-1.8-1.4-3.2-3.2-3.2zm19.8 0c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2 1.8 0 3.2-1.4 3.2-3.2 0-1.8-1.5-3.2-3.2-3.2z"></path><path d="M80.8 28.9c-2.4 0-4.8.5-7 1.5-3.3-10.2-13-17.3-23.8-17.3-10.9 0-20.5 7-23.9 17.3-2.2-1-4.6-1.5-7-1.5C9.7 28.9 2 36.6 2 46.1s7.7 17.2 17.2 17.2h7.5v6.6c0 .6-.2 1.2-.7 1.7l-6.2 6.2c-.9-.7-2-1.2-3.2-1.2-2.9 0-5.2 2.3-5.2 5.2 0 2.8 2.3 5.2 5.2 5.2 2.8 0 5.2-2.3 5.2-5.2 0-.9-.3-1.7-.7-2.5l6.3-6.3c.8-.8 1.3-1.9 1.3-3.1v-6.6h10.5v11.6c-2.4.5-4.2 2.6-4.2 5.1 0 2.9 2.3 5.2 5.2 5.2 2.9 0 5.2-2.3 5.2-5.2 0-2.5-1.8-4.6-4.2-5.1V63.3H59v11.6c-2.4.5-4.2 2.6-4.2 5.1 0 2.9 2.3 5.2 5.2 5.2 2.9 0 5.2-2.3 5.2-5.2 0-2.5-1.8-4.6-4.2-5.1V63.3h10.5v6.6c0 1.2.5 2.2 1.3 3.1l6.3 6.3c-.4.7-.7 1.6-.7 2.5 0 2.8 2.3 5.2 5.2 5.2 2.9 0 5.2-2.3 5.2-5.2 0-2.9-2.3-5.2-5.2-5.2-1.2 0-2.3.4-3.2 1.2L74 71.5c-.4-.4-.7-1-.7-1.6v-6.6h7.5c9.5 0 17.2-7.7 17.2-17.2s-7.7-17.2-17.2-17.2zM28.6 62.3c0-.6-.4-1-1-1s-1 .4-1 1v-7.6c0-.6-.2-1.2-.7-1.7l-6.2-6.2c-.9.7-2 1.2-3.2 1.2-2.9 0-5.2-2.3-5.2-5.2 0-2.9 2.3-5.2 5.2-5.2s5.2 2.3 5.2 5.2c0 .9-.3 1.7-.7 2.5l6.3 6.3c.8.8 1.3 1.9 1.3 3.1v7.6zm12.5-12.6v12.6c0-.6-.4-1-1-1s-1 .4-1 1V49.7c-2.4-.5-4.2-2.6-4.2-5.1 0-2.9 2.3-5.2 5.2-5.2s5.2 2.3 5.2 5.2c0 2.5-1.8 4.6-4.2 5.1zm19.8 0v12.6c0-.6-.4-1-1-1s-1 .4-1 1V49.7c-2.4-.5-4.2-2.6-4.2-5.1 0-2.9 2.3-5.2 5.2-5.2 2.9 0 5.2 2.3 5.2 5.2 0 2.5-1.8 4.6-4.2 5.1zM83.4 48c-1.2 0-2.3-.4-3.2-1.2L74 53c-.4.4-.7 1-.7 1.7v7.6c0-.6-.4-1-1-1s-1 .4-1 1v-7.6c0-1.2.5-2.2 1.3-3.1l6.3-6.3c-.4-.7-.7-1.6-.7-2.5 0-2.9 2.3-5.2 5.2-5.2s5.2 2.3 5.2 5.2c0 2.8-2.3 5.2-5.2 5.2z"></path><path d="M83.4 39.6c-1.8 0-3.2 1.4-3.2 3.2 0 .7.2 1.4.6 1.9v.1c.6.7 1.5 1.2 2.5 1.2 1.8 0 3.2-1.4 3.2-3.2.1-1.8-1.3-3.2-3.1-3.2zm-66.8 0c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2 1 0 1.9-.5 2.5-1.2v-.1c.4-.5.6-1.2.6-1.9 0-1.8-1.4-3.2-3.1-3.2z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>IoT</h6>
                    <p>Hire a IoT Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/java-coffee-cup-logo--v1.png" alt="java-coffee-cup-logo--v1"/>-->
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="java"><path fill="#0074BD" d="M52.581 67.817s-3.284 1.911 2.341 2.557c6.814.778 10.297.666 17.805-.753 0 0 1.979 1.237 4.735 2.309-16.836 7.213-38.104-.418-24.881-4.113zM50.522 58.402s-3.684 2.729 1.945 3.311c7.28.751 13.027.813 22.979-1.103 0 0 1.373 1.396 3.536 2.157-20.352 5.954-43.021.469-28.46-4.365z"></path><path fill="#EA2D2E" d="M67.865 42.431c4.151 4.778-1.088 9.074-1.088 9.074s10.533-5.437 5.696-12.248c-4.519-6.349-7.982-9.502 10.771-20.378.001 0-29.438 7.35-15.379 23.552z"></path><path fill="#0074BD" d="M90.132 74.781s2.432 2.005-2.678 3.555c-9.716 2.943-40.444 3.831-48.979.117-3.066-1.335 2.687-3.187 4.496-3.576 1.887-.409 2.965-.334 2.965-.334-3.412-2.403-22.055 4.719-9.469 6.762 34.324 5.563 62.567-2.506 53.665-6.524zM54.162 48.647s-15.629 3.713-5.534 5.063c4.264.57 12.758.439 20.676-.225 6.469-.543 12.961-1.704 12.961-1.704s-2.279.978-3.93 2.104c-15.874 4.175-46.533 2.23-37.706-2.038 7.463-3.611 13.533-3.2 13.533-3.2zM82.2 64.317c16.135-8.382 8.674-16.438 3.467-15.353-1.273.266-1.845.496-1.845.496s.475-.744 1.378-1.063c10.302-3.62 18.223 10.681-3.322 16.345 0 0 .247-.224.322-.425z"></path><path fill="#EA2D2E" d="M72.474 1.313s8.935 8.939-8.476 22.682c-13.962 11.027-3.184 17.313-.006 24.498-8.15-7.354-14.128-13.828-10.118-19.852 5.889-8.842 22.204-13.131 18.6-27.328z"></path><path fill="#0074BD" d="M55.749 87.039c15.484.99 39.269-.551 39.832-7.878 0 0-1.082 2.777-12.799 4.981-13.218 2.488-29.523 2.199-39.191.603 0 0 1.98 1.64 12.158 2.294z"></path><path fill="#EA2D2E" d="M94.866 100.181h-.472v-.264h1.27v.264h-.47v1.317h-.329l.001-1.317zm2.535.066h-.006l-.468 1.251h-.216l-.465-1.251h-.005v1.251h-.312v-1.581h.457l.431 1.119.432-1.119h.454v1.581h-.302v-1.251zM53.211 115.037c-1.46 1.266-3.004 1.978-4.391 1.978-1.974 0-3.045-1.186-3.045-3.085 0-2.055 1.146-3.56 5.738-3.56h1.697v4.667h.001zm4.031 4.548v-14.077c0-3.599-2.053-5.973-6.997-5.973-2.886 0-5.416.714-7.473 1.622l.592 2.493c1.62-.595 3.715-1.147 5.771-1.147 2.85 0 4.075 1.147 4.075 3.521v1.779h-1.424c-6.921 0-10.044 2.685-10.044 6.723 0 3.479 2.058 5.456 5.933 5.456 2.49 0 4.351-1.028 6.088-2.533l.316 2.137h3.163v-.001zM70.694 119.585h-5.027l-6.051-19.689h4.391l3.756 12.099.835 3.635c1.896-5.258 3.24-10.596 3.912-15.733h4.271c-1.143 6.481-3.203 13.598-6.087 19.688zM89.982 115.037c-1.465 1.266-3.01 1.978-4.392 1.978-1.976 0-3.046-1.186-3.046-3.085 0-2.055 1.149-3.56 5.736-3.56h1.701v4.667h.001zm4.033 4.548v-14.077c0-3.599-2.059-5.973-6.999-5.973-2.889 0-5.418.714-7.475 1.622l.593 2.493c1.62-.595 3.718-1.147 5.774-1.147 2.846 0 4.074 1.147 4.074 3.521v1.779h-1.424c-6.923 0-10.045 2.685-10.045 6.723 0 3.479 2.056 5.456 5.93 5.456 2.491 0 4.349-1.028 6.091-2.533l.318 2.137h3.163v-.001zM37.322 122.931c-1.147 1.679-3.005 3.008-5.037 3.757l-1.989-2.345c1.547-.794 2.872-2.075 3.489-3.269.532-1.063.753-2.43.753-5.701v-22.482h4.284v22.173c0 4.375-.348 6.144-1.5 7.867z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Java</h6>
                    <p>Hire a Java Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                   <!-- <img width="48" height="48" src="https://img.icons8.com/color/48/javascript--v1.png" alt="javascript--v1"/>-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 256" id="javascript"><path fill="#F7DF1E" d="M0 0h256v256H0V0z"></path><path d="M67.312 213.932l19.59-11.856c3.78 6.701 7.218 12.371 15.465 12.371 7.905 0 12.89-3.092 12.89-15.12v-81.798h24.057v82.138c0 24.917-14.606 36.259-35.916 36.259-19.245 0-30.416-9.967-36.087-21.996M152.381 211.354l19.588-11.341c5.157 8.421 11.859 14.607 23.715 14.607 9.969 0 16.325-4.984 16.325-11.858 0-8.248-6.53-11.17-17.528-15.98l-6.013-2.58c-17.357-7.387-28.87-16.667-28.87-36.257 0-18.044 13.747-31.792 35.228-31.792 15.294 0 26.292 5.328 34.196 19.247L210.29 147.43c-4.125-7.389-8.591-10.31-15.465-10.31-7.046 0-11.514 4.468-11.514 10.31 0 7.217 4.468 10.14 14.778 14.608l6.014 2.577c20.45 8.765 31.963 17.7 31.963 37.804 0 21.654-17.012 33.51-39.867 33.51-22.339 0-36.774-10.654-43.819-24.574"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>JavaScript</h6>
                    <p>Hire a JavaScript Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img  width="48" height="48" src="<?= get_img() ?>logos/laravel.webp" alt="Hire Laravel Developer">-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 256" id="laravel"><g fill="#F35045"><path d="M160.445 208c2 2.889 3.222 2.667 4.777 2 1.555-.667 81.556-27.667 84-28.555 2.444-.889 1.667-1.667.89-2.89-.778-1.222-27.445-37.444-28.779-39.555-1.333-2.111-2-1.667-4.111-1l-84.805 22.067S158.445 205.11 160.445 208zM256 171.115v-42.398c-9.541 2.542-21.609 5.756-26.373 7.023 7.187 9.616 18.423 24.665 26.373 35.375zM229.545 83.521c-1.307.297-30.247 5.527-32.03 5.764-1.782.238-1.188 1.248-.475 2.258l25.467 34.943s31.139-7.725 33.041-8.141c.154-.034.305-.07.452-.107v-4.627c-5.66-7.177-21.08-26.718-22.413-28.544-1.604-2.199-2.734-1.842-4.042-1.546z"></path><path d="M47.456 28.634c6.267-.285 6.839 1.141 9.592 5.224l69.17 115.642 86.974-20.835c-4.819-6.831-26.695-37.846-28.81-40.806-2.376-3.328.06-4.873 3.923-5.526 3.862-.654 37.14-6.24 39.992-6.656 2.853-.416 5.112-1.426 9.746 4.16 2.372 2.858 10.412 12.87 17.957 22.255V48c0-13.222-4.695-24.528-14.083-33.917C232.528 4.695 221.222 0 208 0H48C34.778 0 23.472 4.695 14.083 14.083 8.698 19.47 4.865 25.487 2.57 32.134c15.678-1.288 40.501-3.3 44.887-3.5z"></path><path d="M168.289 223.564c-7.334 2.222-10.623 3.325-15.4-3.342-3.578-4.993-22.927-39.843-32.414-57.023-17.955 4.702-50.814 13.278-60.29 15.555-9.248 2.222-13.198-3.323-14.717-6.74C44.403 169.616 17.289 111.158 0 73.65V208c0 13.223 4.695 24.527 14.083 33.917C23.472 251.305 34.778 256 48 256h160c13.222 0 24.528-4.695 33.917-14.083C251.305 232.527 256 221.223 256 208v-15.781c-19.64 7.184-82.77 29.848-87.711 31.345z"></path><path d="M60.412 165.288c2.6-.595 51.313-12.253 52.353-12.476 1.04-.223 1.708-.817.594-2.747-1.114-1.93-64.934-112.09-64.934-112.09-.589-1.011-.421-1.348-2.022-1.264-1.427.076-37.538 3.298-45.898 3.996a51.038 51.038 0 0 0-.461 5.331c8.487 17.375 57.199 117.837 57.472 118.655.297.892.297 1.189 2.896.595z"></path></g></svg>
                </div>
                <div class="tech-info">
                    <h6>Laravel</h6>
                    <p>Hire a Laravel Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/magento.png" alt="magento"/>-->
                     <svg xmlns="http://www.w3.org/2000/svg" width="45" height="54" id="magento"><path fill="#F37B1F" fill-rule="evenodd" d="M22.486 0 0 13.845v26.308l5.84 3.496v-26.31l16.65-10.29 16.666 10.274.069.04-.008 26.247L45 40.153V13.845L22.486 0zm2.976 46.957-2.976 1.848-2.979-1.858V16.22l-7.713 4.826v26.305L22.486 54l10.782-6.695V21.03l-7.806-4.833v30.76z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Magento</h6>
                    <p>Hire a Magento Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/ios/50/nft.png" alt="nft"/>-->
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110" id="nft-cart"><g data-name="13. Cart"><circle cx="55" cy="59" r="50" fill="#e7efff"></circle><circle cx="9" cy="14" r="3" fill="#ff4d69"></circle><circle cx="101" cy="4" r="3" fill="#00c99f"></circle><circle cx="106" cy="101" r="3" fill="#ffa100"></circle><circle cx="4" cy="99" r="3" fill="#00c99f"></circle><path fill="#ffa100" d="M92.55 13.83c-3 2-3.76 4.39-4.62 6.54a1 1 0 01-1.86 0c-.86-2.15-1.64-4.54-4.62-6.54a1 1 0 010-1.66c3-2 3.76-4.39 4.62-6.54a1 1 0 011.86 0c.86 2.15 1.64 4.54 4.62 6.54A1 1 0 0192.55 13.83zM28.55 44.83c-3 2-3.76 4.39-4.62 6.54a1 1 0 01-1.86 0c-.86-2.15-1.64-4.54-4.62-6.54a1 1 0 010-1.66c3-2 3.76-4.39 4.62-6.54a1 1 0 011.86 0c.86 2.15 1.64 4.54 4.62 6.54A1 1 0 0128.55 44.83z"></path><circle cx="55" cy="31" r="24" fill="#ffa100"></circle><circle cx="55" cy="31" r="19" fill="#323fd4"></circle><path fill="#4e6aff" d="M68,24V38a1,1,0,0,1-.55.89C54.34,45.44,55.33,45,55,45s.62.43-12.45-6.11A1,1,0,0,1,42,38V24a1,1,0,0,1,.55-.89l12-6a1,1,0,0,1,.9,0l12,6A1,1,0,0,1,68,24Z"></path><path fill="#fff" d="M49 27a1 1 0 00-1 1v2.7l-2.17-3.25A1 1 0 0044 28v6a1 1 0 002 0V31.3l2.17 3.25A1 1 0 0050 34V28A1 1 0 0049 27zM57 27H53a1 1 0 00-1 1v6a1 1 0 002 0V33h2a1 1 0 000-2H54V29h3a1 1 0 000-2zM65 27H61a1 1 0 000 2h1v5a1 1 0 002 0V29h1a1 1 0 000-2z"></path><rect width="84" height="10" x="13" y="62" fill="#4e6aff" rx="2"></rect><path fill="#323fd4" d="M91,72,86.58,97.76a50,50,0,0,1-63.16,0L19,72Z"></path><path fill="#4e6aff" d="M39 102a3 3 0 01-3-3V81a3 3 0 016 0V99A3 3 0 0139 102zM55 102a3 3 0 01-3-3V81a3 3 0 016 0V99A3 3 0 0155 102zM71 102a3 3 0 01-3-3V81a3 3 0 016 0V99A3 3 0 0171 102z"></path><path fill="#8fa2ff" d="M51.78 69.42L18.94 93.62A50 50 0 0115 89L48.22 64.58a3 3 0 113.56 4.84zM95 89a50 50 0 01-3.91 4.58L58.22 69.42a3 3 0 013.56-4.84z"></path></g></svg>  
                </div>
                <div class="tech-info">
                    <h6>NFT</h6>
                    <p>Hire a NFT Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                  <!--  <img  width="48" height="48" src="<?= get_img() ?>logos/node.webp" alt="Hire Node Developer">-->
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2500" height="1533" preserveAspectRatio="xMidYMid" viewBox="0 0 512 314" id="nodejs"><defs><linearGradient id="b" x1="68.188%" x2="27.823%" y1="17.487%" y2="89.755%"><stop offset="0%" stop-color="#41873F"></stop><stop offset="32.88%" stop-color="#418B3D"></stop><stop offset="63.52%" stop-color="#419637"></stop><stop offset="93.19%" stop-color="#3FA92D"></stop><stop offset="100%" stop-color="#3FAE2A"></stop></linearGradient><linearGradient id="d" x1="43.277%" x2="159.245%" y1="55.169%" y2="-18.306%"><stop offset="13.76%" stop-color="#41873F"></stop><stop offset="40.32%" stop-color="#54A044"></stop><stop offset="71.36%" stop-color="#66B848"></stop><stop offset="90.81%" stop-color="#6CC04A"></stop></linearGradient><linearGradient id="e" x1="-4413.77%" x2="5327.93%" y1="13.43%" y2="13.43%"><stop offset="9.192%" stop-color="#6CC04A"></stop><stop offset="28.64%" stop-color="#66B848"></stop><stop offset="59.68%" stop-color="#54A044"></stop><stop offset="86.24%" stop-color="#41873F"></stop></linearGradient><linearGradient id="f" x1="-4.389%" x2="101.499%" y1="49.997%" y2="49.997%"><stop offset="9.192%" stop-color="#6CC04A"></stop><stop offset="28.64%" stop-color="#66B848"></stop><stop offset="59.68%" stop-color="#54A044"></stop><stop offset="86.24%" stop-color="#41873F"></stop></linearGradient><linearGradient id="g" x1="-9713.77%" x2="27.93%" y1="36.21%" y2="36.21%"><stop offset="9.192%" stop-color="#6CC04A"></stop><stop offset="28.64%" stop-color="#66B848"></stop><stop offset="59.68%" stop-color="#54A044"></stop><stop offset="86.24%" stop-color="#41873F"></stop></linearGradient><linearGradient id="h" x1="-103.861%" x2="100.797%" y1="50.275%" y2="50.275%"><stop offset="9.192%" stop-color="#6CC04A"></stop><stop offset="28.64%" stop-color="#66B848"></stop><stop offset="59.68%" stop-color="#54A044"></stop><stop offset="86.24%" stop-color="#41873F"></stop></linearGradient><linearGradient id="i" x1="130.613%" x2="4.393%" y1="-211.069%" y2="201.605%"><stop offset="0%" stop-color="#41873F"></stop><stop offset="32.88%" stop-color="#418B3D"></stop><stop offset="63.52%" stop-color="#419637"></stop><stop offset="93.19%" stop-color="#3FA92D"></stop><stop offset="100%" stop-color="#3FAE2A"></stop></linearGradient><path id="a" d="M57.903 1.85a5.957 5.957 0 0 0-5.894 0L3.352 29.933c-1.85 1.04-2.89 3.005-2.89 5.085v56.286c0 2.08 1.156 4.045 2.89 5.085l48.657 28.085a5.957 5.957 0 0 0 5.894 0l48.658-28.085c1.849-1.04 2.89-3.005 2.89-5.085V35.019c0-2.08-1.157-4.045-2.89-5.085L57.903 1.85z"></path></defs><g fill="none"><path fill="#539E43" d="M253.11 313.094c-1.733 0-3.351-.462-4.854-1.271l-15.371-9.13c-2.312-1.272-1.156-1.734-.462-1.965 3.12-1.04 3.698-1.272 6.934-3.12.347-.232.81-.116 1.156.115l11.789 7.05c.462.231 1.04.231 1.386 0l46.115-26.698c.462-.231.694-.694.694-1.271v-53.28c0-.579-.232-1.04-.694-1.272l-46.115-26.582c-.462-.232-1.04-.232-1.386 0l-46.115 26.582c-.462.231-.694.809-.694 1.271v53.28c0 .463.232 1.04.694 1.272l12.598 7.281c6.819 3.467 11.095-.578 11.095-4.623v-52.587c0-.693.578-1.387 1.387-1.387h5.894c.694 0 1.387.578 1.387 1.387v52.587c0 9.13-4.97 14.447-13.638 14.447-2.658 0-4.738 0-10.633-2.89l-12.135-6.934c-3.005-1.733-4.854-4.97-4.854-8.437v-53.28c0-3.467 1.849-6.704 4.854-8.437l46.114-26.698c2.89-1.618 6.82-1.618 9.709 0l46.114 26.698c3.005 1.733 4.855 4.97 4.855 8.437v53.28c0 3.467-1.85 6.704-4.855 8.437l-46.114 26.698c-1.503.694-3.236 1.04-4.854 1.04zm14.216-36.637c-20.225 0-24.386-9.246-24.386-17.105 0-.694.578-1.387 1.387-1.387h6.01c.693 0 1.271.462 1.271 1.156.925 6.125 3.583 9.13 15.834 9.13 9.708 0 13.87-2.196 13.87-7.397 0-3.005-1.157-5.2-16.297-6.703-12.598-1.272-20.457-4.045-20.457-14.1 0-9.362 7.86-14.91 21.035-14.91 14.793 0 22.075 5.086 23 16.18 0 .348-.116.694-.347 1.041-.232.231-.578.462-.925.462h-6.01c-.578 0-1.156-.462-1.271-1.04-1.387-6.356-4.97-8.437-14.447-8.437-10.633 0-11.905 3.699-11.905 6.472 0 3.352 1.503 4.392 15.834 6.241 14.216 1.85 20.92 4.508 20.92 14.447-.116 10.171-8.437 15.95-23.116 15.95z"></path><path fill="#333" d="M110.028 104.712c0-2.08-1.156-4.046-3.005-5.086l-49.004-28.2c-.81-.463-1.734-.694-2.658-.81h-.463c-.924 0-1.849.347-2.658.81l-49.004 28.2c-1.85 1.04-3.005 3.005-3.005 5.086l.116 75.817c0 1.04.578 2.08 1.502 2.543.925.578 2.08.578 2.89 0l29.125-16.643c1.849-1.04 3.005-3.005 3.005-5.085v-35.482c0-2.08 1.155-4.045 3.005-5.085l12.366-7.166c.925-.578 1.965-.81 3.005-.81 1.04 0 2.08.232 2.89.81l12.366 7.166c1.85 1.04 3.005 3.004 3.005 5.085v35.482c0 2.08 1.156 4.045 3.005 5.085l29.125 16.643c.925.578 2.08.578 3.005 0 .925-.463 1.503-1.503 1.503-2.543l-.116-75.817zM345.571.347c-.924-.463-2.08-.463-2.89 0-.924.578-1.502 1.502-1.502 2.542v75.125c0 .693-.346 1.386-1.04 1.849-.693.346-1.387.346-2.08 0l-12.251-7.05a5.957 5.957 0 0 0-5.895 0l-49.004 28.316c-1.849 1.04-3.005 3.005-3.005 5.085v56.516c0 2.08 1.156 4.046 3.005 5.086l49.004 28.316a5.957 5.957 0 0 0 5.895 0l49.004-28.316c1.849-1.04 3.005-3.005 3.005-5.086V21.844c0-2.196-1.156-4.16-3.005-5.201L345.572.347zm-4.507 143.776c0 .578-.231 1.04-.694 1.271l-16.758 9.708a1.714 1.714 0 0 1-1.503 0l-16.758-9.708c-.463-.231-.694-.809-.694-1.271v-19.417c0-.578.231-1.04.694-1.271l16.758-9.709a1.714 1.714 0 0 1 1.503 0l16.758 9.709c.463.23.694.809.694 1.271v19.417zM508.648 124.244c1.85-1.04 2.89-3.005 2.89-5.086v-13.753c0-2.08-1.156-4.045-2.89-5.085l-48.657-28.2a5.957 5.957 0 0 0-5.894 0l-49.004 28.315c-1.85 1.04-3.005 3.005-3.005 5.086v56.516c0 2.08 1.155 4.045 3.005 5.085l48.657 27.738c1.85 1.04 4.045 1.04 5.779 0L489 178.45c.925-.463 1.503-1.503 1.503-2.543 0-1.04-.578-2.08-1.503-2.543l-49.235-28.316c-.924-.577-1.502-1.502-1.502-2.542v-17.683c0-1.04.578-2.08 1.502-2.543l15.372-8.784a2.821 2.821 0 0 1 3.005 0l15.371 8.784c.925.578 1.503 1.502 1.503 2.543v13.869c0 1.04.578 2.08 1.502 2.542.925.578 2.08.578 3.005 0l29.125-16.99z"></path><path fill="#539E43" d="M456.293 121.586a1.05 1.05 0 0 1 1.155 0l9.362 5.432c.347.23.578.577.578 1.04v10.864c0 .462-.231.809-.578 1.04l-9.362 5.432a1.05 1.05 0 0 1-1.155 0l-9.362-5.432c-.347-.231-.578-.578-.578-1.04v-10.864c0-.463.231-.81.578-1.04l9.362-5.432z"></path><g transform="translate(134.068 70.501)"><mask id="c" fill="#fff"><use xlink:href="#a"></use></mask><use fill="url(#b)" xlink:href="#a"></use><g mask="url(#c)"><path d="M51.893 1.85L3.121 29.933C1.27 30.974 0 32.94 0 35.02v56.286c0 1.387.578 2.658 1.502 3.698L56.285 1.156c-1.387-.231-3.005-.116-4.392.693zM56.632 125.053c.462-.116.925-.347 1.387-.578l48.773-28.085c1.85-1.04 3.005-3.005 3.005-5.085V35.019c0-1.502-.694-3.005-1.734-4.045l-51.43 94.079z"></path><path fill="url(#d)" d="M106.676 29.934L57.788 1.85a8.025 8.025 0 0 0-1.503-.578L1.502 95.12a6.082 6.082 0 0 0 1.619 1.387l48.888 28.085c1.387.809 3.005 1.04 4.507.577l51.432-94.078c-.347-.462-.81-.81-1.272-1.156z"></path></g><g mask="url(#c)"><path d="M109.797 91.305V35.019c0-2.08-1.271-4.045-3.12-5.085L57.786 1.85a5.106 5.106 0 0 0-1.848-.693l53.511 91.42c.231-.347.347-.809.347-1.271zM3.12 29.934C1.272 30.974 0 32.94 0 35.02v56.286c0 2.08 1.387 4.045 3.12 5.085l48.889 28.085c1.156.693 2.427.925 3.814.693L3.467 29.818l-.346.116z"></path><path fill="url(#e)" fill-rule="evenodd" d="M50.391.809l-.693.347h.924l-.231-.347z" transform="translate(0 -9.246)"></path><path fill="url(#f)" fill-rule="evenodd" d="M106.792 105.636c1.387-.809 2.427-2.196 2.89-3.698L56.053 10.402c-1.387-.231-2.89-.116-4.16.693L3.351 39.065l52.355 95.465a8.057 8.057 0 0 0 2.196-.693l48.889-28.2z" transform="translate(0 -9.246)"></path><path fill="url(#g)" fill-rule="evenodd" d="M111.3 104.712l-.347-.578v.809l.346-.231z" transform="translate(0 -9.246)"></path><path fill="url(#h)" fill-rule="evenodd" d="M106.792 105.636l-48.773 28.085a6.973 6.973 0 0 1-2.196.693l.925 1.734 54.089-31.32v-.694l-1.387-2.312c-.231 1.618-1.271 3.005-2.658 3.814z" transform="translate(0 -9.246)"></path><path fill="url(#i)" fill-rule="evenodd" d="M106.792 105.636l-48.773 28.085a6.973 6.973 0 0 1-2.196.693l.925 1.734 54.089-31.32v-.694l-1.387-2.312c-.231 1.618-1.271 3.005-2.658 3.814z" transform="translate(0 -9.246)"></path></g></g></g></svg>
                </div>
                <div class="tech-info">
                    <h6>Node</h6>
                    <p>Hire a Node Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img  width="48" height="48" src="<?= get_img() ?>logos/perl.webp" alt="Hire Perl Developer">-->
                       <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" id="perl"><path fill="#444" d="M16 5.036c-6.213 0-11.25 5.037-11.25 11.25S9.787 27.536 16 27.536s11.25-5.037 11.25-11.25S22.213 5.036 16 5.036zm-1.904 19.41c-.116.233-.605.07-1.14-.116s-2.351-.931-3.398-2.118c-1.047-1.187-1.582-2.77-1.536-4.282s.465-2.141 1.164-3.119c.698-.977 2.63-2.42 3.235-2.793s1.42-1.001 1.815-1.513c.396-.512.605-.931.582-1.629s.047-1.327.023-1.559c-.023-.233-.023-.698.186-.605s.233.349.233.605-.07 1.303-.14 2.327-.884 1.885-1.489 2.49-2.351 2.49-3.002 3.421c-.652.931-.976 2.157-.908 3.188.07 1.047.326 2.071 1.303 3.165s1.652 1.606 2.164 1.862c.512.256 1.024.442.908.675zm.857 1.118c-.167.203-.454.326-.489.244s.207-.129.385-.327c.163-.182.12-.522.236-.527.095-.004.035.406-.132.61zm.423-1.7c-.326.419-1.652-1.024-2.351-1.862s-1.396-2.537-1.42-3.863c-.023-1.327.721-2.56 1.257-3.305s1.583-2.025 1.862-2.607.582-1.21.675-2.025c.093-.815 0-3.724 0-3.724s-.023-1.28.186-1.14c.21.14.256.954.256 1.699s.07 3.956-.163 4.817c-.233.861-.768 1.815-1.35 2.653s-1.257 2.607-1.233 3.7c.023 1.094.652 2.886 1.14 3.631.491.747 1.323 1.789 1.14 2.025zm.696 2.173c-.096 0-.06-.29-.06-.648s-.033-.649.06-.649c.085 0 .06.29.06.649s.018.648-.06.648zm1.518-.24c-.035.082-.322-.04-.489-.244s-.227-.613-.132-.61c.116.005.073.345.236.527.178.198.42.245.385.327zm4.764-3.554c-.901 1.048-2.002 1.688-3.274 2.197-.42.168-.686.349-1.041.018-.572-.532-1.113-.587-1.828-.778-.199-.053-.337-.495-.409-.654a9.425 9.425 0 0 1-.56-1.633c-.674-2.694-.137-5.392.545-8.025.291-1.124.479-2.241.488-3.408.005-.611-.08-1.214-.152-1.819-.031-.257-.151-.894.162-.405.126.197.357-.082.377.145.016.175.018.352.024.528.015.448.012.906.083 1.35.171 1.074 1.495 1.739 2.311 2.249 1.869 1.168 4.378 2.718 4.757 5.11.305 1.929-.217 3.653-1.483 5.125z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Perl</h6>
                    <p>Hire a Perl Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                   <!-- <img width="48" height="48" src="https://img.icons8.com/officel/40/php-logo.png" alt="php-logo"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="1309" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 134" id="php"><g fill-rule="evenodd"><ellipse cx="128" cy="66.63" fill="#8993BE" rx="128" ry="66.63"></ellipse><path fill="#232531" d="M35.945 106.082l14.028-71.014H82.41c14.027.877 21.041 7.89 21.041 20.165 0 21.041-16.657 33.315-31.562 32.438H56.11l-3.507 18.411H35.945zm23.671-31.561L64 48.219h11.397c6.137 0 10.52 2.63 10.52 7.89-.876 14.905-7.89 17.535-15.78 18.412h-10.52zM100.192 87.671l14.027-71.013h16.658l-3.507 18.41h15.78c14.028.877 19.288 7.89 17.535 16.658l-6.137 35.945h-17.534l6.137-32.438c.876-4.384.876-7.014-5.26-7.014H124.74l-7.89 39.452h-16.658zM153.425 106.082l14.027-71.014h32.438c14.028.877 21.042 7.89 21.042 20.165 0 21.041-16.658 33.315-31.562 32.438h-15.781l-3.507 18.411h-16.657zm23.67-31.561l4.384-26.302h11.398c6.137 0 10.52 2.63 10.52 7.89-.876 14.905-7.89 17.535-15.78 18.412h-10.521z"></path></g></svg>
                </div>
                <div class="tech-info">
                    <h6>PHP</h6>
                    <p>Hire a PHP Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/python--v1.png" alt="python--v1"/>-->
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="python"><path d="M18.231 7.357h.001v-.004z"></path><path fill="#F2BB30" d="M20.699 17.748c1.666 0 2.282-1.162 2.861-2.904.6-1.794.574-3.52 0-5.818-.413-1.655-1.194-2.904-2.861-2.904h-2.147v2.541c0 1.971-1.672 3.632-3.578 3.632H9.252c-1.565 0-2.861 1.339-2.861 2.909v5.454c0 1.553 1.35 2.464 2.861 2.909 1.81.53 3.552.626 5.721 0 1.441-.418 2.861-1.26 2.861-2.909v-2.181h-5.717v-.728h8.582zm-5.367 2.181c.594 0 1.077.488 1.077 1.088 0 .606-.482 1.093-1.077 1.093a1.09 1.09 0 0 1-1.077-1.093 1.088 1.088 0 0 1 1.077-1.088z"></path><path fill="#35668F" d="M3.444 17.749H5.41v-2.615c0-1.891 1.634-3.558 3.578-3.558h5.721c1.591 0 2.861-1.312 2.861-2.909V3.209c0-1.553-1.307-2.717-2.861-2.978-1.918-.317-4.002-.299-5.721.006l.001-.001c-2.422.428-2.86 1.322-2.86 2.977v2.181h5.727v.729H3.98C2.314 6.123.856 7.125.402 9.027c-.525 2.181-.546 3.541 0 5.818.406 1.693 1.377 2.904 3.042 2.904zM8.63 3.937a1.084 1.084 0 0 1-1.077-1.088A1.089 1.089 0 0 1 8.63 1.756c.59 0 1.077.492 1.077 1.093S9.225 3.937 8.63 3.937z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Python</h6>
                    <p>Hire a Python Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                   <!-- <img width="48" height="48" src="https://img.icons8.com/plasticine/100/react.png" alt="react"/>-->
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128" viewBox="0 0 128 128" id="react"><g fill="#61DAFB"><circle cx="64" cy="64" r="11.4"></circle><path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3.6-2.4 1.1-4.8 1.5-7.1 2.1-13.2-.2-22.5-6.6-26.1-1.9-1.1-4-1.6-6.4-1.6-7 0-15.9 5.2-24.9 13.9-9-8.7-17.9-13.9-24.9-13.9-2.4 0-4.5.5-6.4 1.6-6.4 3.7-8.7 13-6.6 26.1.4 2.3.9 4.7 1.5 7.1-2.4.7-4.7 1.4-6.9 2.3-12.5 4.8-19.3 11.4-19.3 18.8s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3-.6 2.4-1.1 4.8-1.5 7.1-2.1 13.2.2 22.5 6.6 26.1 1.9 1.1 4 1.6 6.4 1.6 7.1 0 16-5.2 24.9-13.9 9 8.7 17.9 13.9 24.9 13.9 2.4 0 4.5-.5 6.4-1.6 6.4-3.7 8.7-13 6.6-26.1-.4-2.3-.9-4.7-1.5-7.1 2.4-.7 4.7-1.4 6.9-2.3 12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8zm-14.8-30.5c4.1 2.4 5.5 9.8 3.8 20.3-.3 2.1-.8 4.3-1.4 6.6-5.2-1.2-10.7-2-16.5-2.5-3.4-4.8-6.9-9.1-10.4-13 7.4-7.3 14.9-12.3 21-12.3 1.3 0 2.5.3 3.5.9zm-11.2 59.3c-1.8 3.2-3.9 6.4-6.1 9.6-3.7.3-7.4.4-11.2.4-3.9 0-7.6-.1-11.2-.4-2.2-3.2-4.2-6.4-6-9.6-1.9-3.3-3.7-6.7-5.3-10 1.6-3.3 3.4-6.7 5.3-10 1.8-3.2 3.9-6.4 6.1-9.6 3.7-.3 7.4-.4 11.2-.4 3.9 0 7.6.1 11.2.4 2.2 3.2 4.2 6.4 6 9.6 1.9 3.3 3.7 6.7 5.3 10-1.7 3.3-3.4 6.6-5.3 10zm8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3-3.4.8-7 1.4-10.8 1.9 1.2-1.9 2.5-3.9 3.6-6 1.2-2.1 2.3-4.2 3.4-6.2zm-25.6 27.1c-2.4-2.6-4.7-5.4-6.9-8.3 2.3.1 4.6.2 6.9.2 2.3 0 4.6-.1 6.9-.2-2.2 2.9-4.5 5.7-6.9 8.3zm-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9 1.1-3.3 2.3-6.8 3.8-10.3 1.1 2 2.2 4.1 3.4 6.1 1.2 2.2 2.4 4.1 3.6 6.1zm-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.8-1.9-1.2 1.9-2.5 3.9-3.6 6-1.2 2.1-2.3 4.2-3.4 6.2zm25.6-27.1c2.4 2.6 4.7 5.4 6.9 8.3-2.3-.1-4.6-.2-6.9-.2-2.3 0-4.6.1-6.9.2 2.2-2.9 4.5-5.7 6.9-8.3zm22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9-1.1 3.3-2.3 6.8-3.8 10.3-1.1-2.1-2.2-4.2-3.4-6.2zm-54.5-16.2c-1.7-10.5-.3-17.9 3.8-20.3 1-.6 2.2-.9 3.5-.9 6 0 13.5 4.9 21 12.3-3.5 3.8-7 8.2-10.4 13-5.8.5-11.3 1.4-16.5 2.5-.6-2.3-1-4.5-1.4-6.6zm-24.7 29c0-4.7 5.7-9.7 15.7-13.4 2-.8 4.2-1.5 6.4-2.1 1.6 5 3.6 10.3 6 15.6-2.4 5.3-4.5 10.5-6 15.5-13.8-4-22.1-10-22.1-15.6zm28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3.3-2.1.8-4.3 1.4-6.6 5.2 1.2 10.7 2 16.5 2.5 3.4 4.8 6.9 9.1 10.4 13-7.4 7.3-14.9 12.3-21 12.3-1.3 0-2.5-.3-3.5-.9zm60.8-20.3c1.7 10.5.3 17.9-3.8 20.3-1 .6-2.2.9-3.5.9-6 0-13.5-4.9-21-12.3 3.5-3.8 7-8.2 10.4-13 5.8-.5 11.3-1.4 16.5-2.5.6 2.3 1 4.5 1.4 6.6zm9-15.6c-2 .8-4.2 1.5-6.4 2.1-1.6-5-3.6-10.3-6-15.6 2.4-5.3 4.5-10.5 6-15.5 13.8 4 22.1 10 22.1 15.6 0 4.7-5.8 9.7-15.7 13.4z"></path></g></svg>  
                </div>
                <div class="tech-info">
                    <h6>React</h6>
                    <p>Hire a React Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="<?= get_img() ?>logos/ror.webp" alt="Hire RoR Developer">-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" id="ror"><path fill="#444" d="M7.113 27.421h11.072s-2.456-5.578-1.832-10.698 4.662-7.451 6.951-7.701c2.289-.25 3.538 1.166 3.538 1.166l.5-.749s-3.288-3.33-7.451-2.955-7.035 3.122-8.824 6.452c-1.79 3.33-2.831 5.661-3.538 9.158s-.416 5.328-.416 5.328zm-2.206-5.578l2.164.167-.375 2.164-2.04-.25.25-2.081zm3.413-4.579l.583-1.623-1.915-.749-.624 1.748 1.956.624zm2.706-5.578l1.124-1.332-1.457-.957-1.165 1.29 1.498.999zm2.955-5.161l.999 1.207 1.374-.791-.999-1.124-1.374.708zm4.87-1.374l.25 1.207 1.707-.042-.167-1.082-1.79-.083zm5.786 1.29l-.042.749 1.166.624.25-.375-1.373-.999zm-.25 3.206v.624l1.124.125v-.5l-1.124-.25zm-3.579.541l.541.999.791-.624-.166-.666-1.165.292zm-1.707 1.29l.832 1.249-.499.874-1.207-1.332.874-.791zm-1.665 3.455l-.541 1.082 1.415 1.207.333-1.374-1.207-.916zm-.583 3.788l-.083 1.457 1.748.749-.083-1.374-1.582-.833zm.5 5.161l.417 1.499 2.206.125-.791-1.623h-1.832z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>ROR</h6>
                    <p>Hire a ROR Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="<?= get_img() ?>logos/rust.webp" alt="Hire Rust Developer">-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="rust"><path d="m.165 12.292 1.008.625c.008.098.018.197.028.294l-.866.808a.347.347 0 0 0 .114.577l.002.001 1.106.414c.027.096.057.191.087.286l-.69.959a.346.346 0 0 0 .226.545h.002l1.166.189c.045.088.092.175.141.262l-.491 1.077a.346.346 0 0 0 .315.49h.014l1.182-.042c.062.077.123.153.187.228l-.27 1.155a.345.345 0 0 0 .419.415h-.002l1.153-.271c.075.064.151.125.228.186l-.041 1.185v.015a.344.344 0 0 0 .492.31l-.002.001 1.076-.49c.087.049.174.095.262.141l.19 1.167a.348.348 0 0 0 .545.226l-.001.001.959-.691c.095.03.189.06.285.087l.414 1.107a.345.345 0 0 0 .578.115l.808-.866c.097.011.195.02.294.029l.624 1.008c.062.101.17.165.294.165a.348.348 0 0 0 .294-.162l.001-.001.624-1.008c.098-.009.196-.018.294-.029l.807.866a.349.349 0 0 0 .578-.114l.001-.002.414-1.107c.096-.027.191-.057.285-.087l.959.691a.346.346 0 0 0 .544-.226v-.002l.19-1.167c.088-.045.175-.093.262-.141l1.076.49a.348.348 0 0 0 .49-.317v-.01l-.042-1.185c.077-.061.153-.123.227-.186l1.153.272a.348.348 0 0 0 .417-.418v.002l-.271-1.155c.063-.075.126-.151.186-.228l1.184.042h.016a.344.344 0 0 0 .311-.492l.001.002-.49-1.077c.048-.087.095-.174.141-.262l1.166-.189a.349.349 0 0 0 .225-.546l.001.001-.69-.959.087-.286 1.106-.414a.347.347 0 0 0 .116-.578l-.866-.808c.01-.097.02-.196.028-.294l1.007-.624a.346.346 0 0 0 .001-.589l-.001-.001-.002.003-1.007-.624a38.61 38.61 0 0 0-.027-.295l.865-.806a.349.349 0 0 0-.114-.578l-.002-.002-1.106-.414a7.679 7.679 0 0 0-.086-.288l.689-.957a.347.347 0 0 0-.224-.544h-.002l-1.166-.189c-.058-.115-.1-.191-.14-.264L22 5.669a.342.342 0 0 0-.027-.336.35.35 0 0 0-.301-.154l-1.184.041a6.64 6.64 0 0 0-.194-.235l.007.008.272-1.154a.347.347 0 0 0-.419-.417h.002l-1.153.272-.201-.167-.026-.02.042-1.185v-.016a.344.344 0 0 0-.492-.311l.002-.001-1.076.491a13.203 13.203 0 0 0-.262-.141l-.19-1.168a.349.349 0 0 0-.546-.225l.001-.001-.96.691a2.907 2.907 0 0 0-.226-.071l-.06-.015-.414-1.107a.35.35 0 0 0-.577-.116l-.807.868a6.621 6.621 0 0 0-.26-.026l-.033-.002-.624-1.008a.349.349 0 0 0-.589-.001l-.001.001-.624 1.008c-.097.008-.196.018-.293.028L9.979.333a.347.347 0 0 0-.577.114l-.001.002-.414 1.107c-.096.027-.19.057-.285.086L7.743.951a.348.348 0 0 0-.544.224v.002l-.19 1.168c-.115.058-.191.1-.264.14L5.67 1.994a.346.346 0 0 0-.49.315v.013l.042 1.185a8.116 8.116 0 0 0-.228.188l-1.153-.273a.348.348 0 0 0-.417.419V3.84l.271 1.154c-.063.074-.126.15-.186.226l-1.185-.041h-.013a.346.346 0 0 0-.314.492l-.001-.002.491 1.077c-.024.04-.071.126-.116.212l-.024.05-1.167.189a.349.349 0 0 0-.225.546v-.001l.69.959c-.03.095-.059.189-.087.286l-1.106.414a.35.35 0 0 0-.116.577l.866.807a6.621 6.621 0 0 0-.026.26l-.002.033-1.007.624a.344.344 0 0 0-.002.59zm6.675 7.736-.005.001a.714.714 0 0 1-.304-1.396l.005-.001a.714.714 0 0 1 .304 1.396zm10.248.034.003.001-.003-.001zm.151.016a.715.715 0 1 1 .152-1.412.715.715 0 0 1-.152 1.412zm1.828-2.96c-.26.352-.526.663-.812.953l-1.507-.324.001.001a.649.649 0 0 0-.771.496l-.001.004-.357 1.669a8.727 8.727 0 0 1-3.619.78h-.013a8.708 8.708 0 0 1-3.683-.815l-.357-1.668a.65.65 0 0 0-.776-.499l.004-.001-1.473.316a8.816 8.816 0 0 1-.745-.875l-.016-.023h7.167c.081 0 .136-.014.136-.088v-2.537c0-.074-.054-.088-.136-.088h-2.097v-1.608h2.268c.206 0 1.106.059 1.394 1.209.09.353.287 1.505.423 1.874.135.413.683 1.239 1.268 1.239h3.572a.754.754 0 0 0 .135-.014l-.005-.001zm-9.052-6.683V8.783h2.96c.153 0 1.079.177 1.079.87 0 .575-.711.782-1.295.782h-2.744zm9.794-1.403a.715.715 0 1 1 1.3.58.715.715 0 0 1-1.3-.58zm-8.337-6.716v.002a.711.711 0 0 1 1.205.515.712.712 0 0 1-.221.516.714.714 0 0 1-.984-1.033zm-1.154.99.056-.009 1.097 1.152a.65.65 0 0 0 .919.022l1.227-1.175a8.802 8.802 0 0 1 5.982 4.236l.022.043-.84 1.899a.652.652 0 0 0 .326.856l.004.002 1.618.719c.028.288.043.577.043.872h.002c0 .219-.008.436-.024.651h-.9c-.09 0-.127.059-.127.148v.413c0 .973-.549 1.185-1.029 1.239-.458.052-.965-.191-1.028-.472-.27-1.519-.72-1.844-1.43-2.404.882-.56 1.799-1.387 1.799-2.493 0-1.194-.819-1.947-1.377-2.316-.783-.517-1.649-.62-1.883-.62H5.467a8.75 8.75 0 0 1 4.851-2.763zM5.145 9.433l.002.004-.316-.714h1.243v5.605H3.566a8.73 8.73 0 0 1-.282-3.35l1.532-.681a.651.651 0 0 0 .329-.864zm-1.672-.841c.281 0 .524.163.641.4l.002.004v.001a.714.714 0 1 1-1.302.583l-.002-.005a.714.714 0 0 1 .661-.983z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Rust</h6>
                    <p>Hire a Rust Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/shopify.png" alt="shopify"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="2192" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 292" id="shopify"><path fill="#95BF46" d="M223.774 57.34c-.201-1.46-1.48-2.268-2.537-2.357-1.055-.088-23.383-1.743-23.383-1.743s-15.507-15.395-17.209-17.099c-1.703-1.703-5.029-1.185-6.32-.805-.19.056-3.388 1.043-8.678 2.68-5.18-14.906-14.322-28.604-30.405-28.604-.444 0-.901.018-1.358.044C129.31 3.407 123.644.779 118.75.779c-37.465 0-55.364 46.835-60.976 70.635-14.558 4.511-24.9 7.718-26.221 8.133-8.126 2.549-8.383 2.805-9.45 10.462C21.3 95.806.038 260.235.038 260.235l165.678 31.042 89.77-19.42S223.973 58.8 223.775 57.34zM156.49 40.848l-14.019 4.339c.005-.988.01-1.96.01-3.023 0-9.264-1.286-16.723-3.349-22.636 8.287 1.04 13.806 10.469 17.358 21.32zm-27.638-19.483c2.304 5.773 3.802 14.058 3.802 25.238 0 .572-.005 1.095-.01 1.624-9.117 2.824-19.024 5.89-28.953 8.966 5.575-21.516 16.025-31.908 25.161-35.828zm-11.131-10.537c1.617 0 3.246.549 4.805 1.622-12.007 5.65-24.877 19.88-30.312 48.297l-22.886 7.088C75.694 46.16 90.81 10.828 117.72 10.828z"></path><path fill="#5E8E3E" d="M221.237 54.983c-1.055-.088-23.383-1.743-23.383-1.743s-15.507-15.395-17.209-17.099c-.637-.634-1.496-.959-2.394-1.099l-12.527 256.233 89.762-19.418S223.972 58.8 223.774 57.34c-.201-1.46-1.48-2.268-2.537-2.357"></path><path fill="#FFF" d="M135.242 104.585l-11.069 32.926s-9.698-5.176-21.586-5.176c-17.428 0-18.305 10.937-18.305 13.693 0 15.038 39.2 20.8 39.2 56.024 0 27.713-17.577 45.558-41.277 45.558-28.44 0-42.984-17.7-42.984-17.7l7.615-25.16s14.95 12.835 27.565 12.835c8.243 0 11.596-6.49 11.596-11.232 0-19.616-32.16-20.491-32.16-52.724 0-27.129 19.472-53.382 58.778-53.382 15.145 0 22.627 4.338 22.627 4.338"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Shopify</h6>
                    <p>Hire a Shopify Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/my-sql.png" alt="my-sql"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" id="sqllite"><path fill="#444" d="M21.576 3.59c-1.115-.994-2.465-.595-3.798.588a9.407 9.407 0 0 0-.591.579c-2.279 2.418-4.395 6.897-5.053 10.318.256.519.456 1.182.588 1.688.034.13.064.252.089.355.058.245.089.405.089.405s-.02-.077-.104-.321l-.055-.158a1.44 1.44 0 0 0-.035-.087c-.149-.346-.56-1.075-.741-1.393-.155.457-.292.884-.406 1.271.523.956.841 2.595.841 2.595s-.028-.106-.159-.477c-.117-.328-.697-1.345-.835-1.583-.235.869-.329 1.455-.244 1.598.164.277.32.754.457 1.282.309 1.189.524 2.637.524 2.637l.019.244c-.043.999-.017 2.034.06 2.97.103 1.239.295 2.303.541 2.873l.167-.091c-.361-1.122-.508-2.593-.444-4.289.097-2.593.694-5.719 1.796-8.978 1.863-4.919 4.447-8.866 6.811-10.751-2.155 1.947-5.073 8.248-5.946 10.581-.978 2.613-1.671 5.065-2.088 7.414.721-2.202 3.05-3.149 3.05-3.149s1.143-1.409 2.478-3.422c-.8.182-2.113.495-2.553.68-.649.272-.824.365-.824.365s2.102-1.28 3.905-1.86c2.48-3.906 5.182-9.456 2.461-11.884z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>SQL</h6>
                    <p>Hire a SQL Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <!--<img width="48" height="48" src="https://img.icons8.com/color/48/swift.png" alt="swift"/>-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="swift"><path fill="#f05138" d="M126.33,34.06a39.32,39.32,0,0,0-.79-7.83,28.78,28.78,0,0,0-2.65-7.58,28.84,28.84,0,0,0-4.76-6.32,23.42,23.42,0,0,0-6.62-4.55,27.27,27.27,0,0,0-7.68-2.53c-2.65-.51-5.56-.51-8.21-.76H30.25A45.46,45.46,0,0,0,24.16,5a21.82,21.82,0,0,0-5.82,1.52c-.53.25-1.32.51-1.85.76a33.82,33.82,0,0,0-5,3.28c-.53.51-1.06.76-1.59,1.26a22.41,22.41,0,0,0-4.76,6.32,23.61,23.61,0,0,0-2.65,7.58,78.5,78.5,0,0,0-.79,7.83V93.94a39.32,39.32,0,0,0,.79,7.83,28.78,28.78,0,0,0,2.65,7.58,28.84,28.84,0,0,0,4.76,6.32,23.42,23.42,0,0,0,6.62,4.55,27.27,27.27,0,0,0,7.68,2.53c2.65.51,5.56.51,8.21.76H95.63a45.08,45.08,0,0,0,8.21-.76,27.27,27.27,0,0,0,7.68-2.53,30.13,30.13,0,0,0,6.62-4.55,22.41,22.41,0,0,0,4.76-6.32,23.61,23.61,0,0,0,2.65-7.58,78.49,78.49,0,0,0,.79-7.83V34.06Z"></path><path fill="#fefefe" d="M85,96.5c-11.11,6.13-26.38,6.76-41.75.47A64.53,64.53,0,0,1,13.84,73a50,50,0,0,0,10.85,6.32c15.87,7.1,31.73,6.61,42.9,0l0,0C51.69,67.66,38.19,52.5,28.13,40.12a43.47,43.47,0,0,1-5.29-6.82C35,43.91,54.34,57.3,61.22,61.09a271.77,271.77,0,0,1-27-32.34A266.8,266.8,0,0,0,78.69,63.62c.71.38,1.26.7,1.7,1a32.7,32.7,0,0,0,1.21-3.51c3.71-12.89-.53-27.54-9.79-39.67C93.25,33.81,106,57.05,100.66,76.51c-.14.53-.29,1-.45,1.55l.19.22c10.59,12.63,7.68,26,6.35,23.5C101,91,90.37,94.33,85,96.5Z"></path></svg>
                </div>
                <div class="tech-info">
                    <h6>Swift</h6>
                    <p>Hire a Swift Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img width="48" height="48" src="https://img.icons8.com/color/48/vue-js.png" alt="vue-js"/>
                </div>
                <div class="tech-info">
                    <h6>Vue</h6>
                    <p>Hire a Vue Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img width="48" height="48" src="https://img.icons8.com/color/48/woocommerce.png" alt="woocommerce"/>
                </div>
                <div class="tech-info">
                    <h6>Woo-Commerce</h6>
                    <p>Hire a Woo-Commerce Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img width="48" height="48" src="https://img.icons8.com/color/48/wordpress.png" alt="wordpress"/>
                </div>
                <div class="tech-info">
                    <h6>WordPress</h6>
                    <p>Hire a WordPress Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img width="48" height="48" src="https://img.icons8.com/color/48/xamarin.png" alt="xamarin"/>
                </div>
                <div class="tech-info">
                    <h6>Xamarin</h6>
                    <p>Hire a Xamarin Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img width="48" height="48" src="https://img.icons8.com/bubbles/50/zapier.png" alt="zapier"/>
                </div>
                <div class="tech-info">
                    <h6>Zapier</h6>
                    <p>Hire a Zapier Developer</p>
                </div>
            </a>
        </div>
        <div class="hire-services-container grid grid-3 " id="By-Role">
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/frontend.png" alt="Hire Front End Developer">
                </div>
                <div class="tech-info">
                    <h6>Front End</h6>
                    <p>Hire a Front End Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/full-stack.png" alt="Hire Full Stack Developer">
                </div>
                <div class="tech-info">
                    <h6>Full Stack</h6>
                    <p>Hire a Full Stack Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/backend.png" alt="Hire Back End Developer">
                </div>
                <div class="tech-info">
                    <h6>Back End</h6>
                    <p>Hire a Back End Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/ui-ux.png" alt="Hire a UI/UX Developer">
                </div>
                <div class="tech-info">
                    <h6>UI/UX</h6>
                    <p>Hire a UI/UX Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/web.png" alt="Hire Web Developer">
                </div>
                <div class="tech-info">
                    <h6>Web Developer</h6>
                    <p>Hire a Web Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/blockchain.png" alt="Hire Blockchain Developer">
                </div>
                <div class="tech-info">
                    <h6>Blockchain</h6>
                    <p>Hire a Blockchain Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/devops.png" alt="Hire DevOps Developer">
                </div>
                <div class="tech-info">
                    <h6>DevOps</h6>
                    <p>Hire a DevOps Developer</p>
                </div>
            </a>
            <a href="#" class="hire-services-box flex-center">
                <div class="tech-logo grid-center">
                    <img src="<?= get_img() ?>logos/node.png" alt="Hire Node Developer">
                </div>
                <div class="tech-info">
                    <h6>Node</h6>
                    <p>Hire a Node Developer</p>
                </div>
            </a>

        </div>
    </section>
    <!-- ----------------------------------- -->
    <!-- why choose section start here -->

    <section class="why-choose-section">
        <div class="grid grid-2 width-100 why-choose-section-container">
            <div class="why-choose-section-content">
                <p>Collabration With Us</p>
                <h4 class="section-heading">Why Hire <span>Co-Woker</span> ?</h4>
                <p class="text">Customers from all over the world depend on our skilled developers to get high-quality, sector-specific web and mobile solutions. Employ our devoted developers to grow your company. They have expertise in a variety of technologies and fields.
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
            <div class="why-choose-section-img grid-center">
                <img width="100%" height="100%" src="<?= get_img() ?>Business decisions-broo.webp" alt="Why hire employee virtually">
            </div>
        </div>
    </section>
    <!-- why choose section end here -->


    <!-- expert section start -->
    <section class="experts-section">
        <p class="p-pink">EXPERTS</p>
        <h3 class="section-heading ">HIRE OUR BEST DEVELOPERS</h3>
        <div class="expert-grid">
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>hire-developer/dev-expert-01.jpeg" class="expert-image" alt="Hire Java Developer" loading="lazy">
                </div>
                <div class="expert-profile text-center">
                    <h2>Robel M.</h2>
                    <P class="light-grey">Sr. Java Developer/Team Lead</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.3/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">A accomplished IT specialist with more than 7 years' experience in the banking, fintech, enterprise, etc.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Java</p>
                    </div>
                    <div class="skill">
                        <p>Spring</p>
                    </div>
                    <div class="skill">
                        <p>MySQL</p>
                    </div>
                    <div class="skill">
                        <p>Hibernate</p>
                    </div>
                    <div class="skill">
                        <p>REST API</p>
                    </div>
                    <div class="skill">
                        <p>Oracle</p>
                    </div>
                    <div class="skill">
                        <p>4+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>hire-developer/dev-expert-02.jpeg" class="expert-image" alt="Hire DevOps Engineer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">Tim M.</h2>
                    <P class="light-grey">DevOps Engineer</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.7/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">Senior DevOps Engineer with 10+ years of experience working on projects that were mission-critical.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Team City</p>
                    </div>
                    <div class="skill">
                        <p>Docker</p>
                    </div>

                    <div class="skill">
                        <p>Kubernetes</p>
                    </div>
                    <div class="skill">
                        <p>Terraform</p>
                    </div>
                    <div class="skill">
                        <p>AWS</p>
                    </div>
                    <div class="skill">
                        <p>5+</p>
                    </div>
                </div>
                <button class="btn hire-btn">Hire Me</button>
            </div>
            <div class="expert-item">
                <div class="expert-image-box">
                    <img src="<?= get_img() ?>hire-developer/dev-expert-03.jpeg" class="expert-image" alt="Hire sr. front end developer" loading="lazy">
                </div>
                <div class="expert-profile">
                    <h2 class="text-center">Akashdeep N.</h2>
                    <P class="light-grey">Sr. Front-End Developer</P>
                    <div class="expert-rating text-center">
                        <i class='bx bxs-star'></i>
                        <span class="rating_number light-grey">4.5/5</span>
                    </div>
                </div>
                <p class="light-grey text-center expert-desc">Front-End engineer at the senior level with nearly 6 years of diverse software development expertise.</p>
                <div class="expert-skill">
                    <div class="skill">
                        <p>Tizen OS</p>
                    </div>
                    <div class="skill">
                        <p>JavaScript</p>
                    </div>
                    <div class="skill">
                        <p>React.js</p>
                    </div>
                    <div class="skill">
                        <p>AWS</p>
                    </div>
                    <div class="skill">
                        <p>TypeScript</p>
                    </div>
                    <div class="skill">
                        <p>3+</p>
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

    <!-- roadmap start -->
    <section class="roadmap-2">
        <p class="p-pink">TIMELINE</p>
        <h3 class="section-heading ">HOW WE WORK</h3>
        <div class="timeline">
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>REQUIREMENT / RESEARCH</h2>
                    <p class="text">We understand the requirement of the client and research on the project. We also do the analysis of some competitor project.
                    </p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>CREATING PLATFORM</h2>
                    <p class="text">1. After getting requirement, we create a layout of project on the platform on which client want their project.<br><br>
                        2. We create a strategy, which things will work great in this project.<br><br>
                        3. Share the layout of project with Client.</p>
                </div>
            </div>
            <div class="container-roadmap left">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>DEVELOPEMENT / TRAIL PHASE</h2>
                    <p class="text">After getting client approval we start working on the project with dedicated platform & dedicated team. And our team create it within given time & Trial Phase.
                    </p>
                </div>
            </div>
            <div class="container-roadmap right">
                <div class="content" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
                    <h2>TEST / LAUNCH</h2>
                    <p class="text">Before launch it, our testing team test or trial it very carefully, when client approved it then we launch it.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- roadmap end -->

    <!-- pricing start-->
    <!-- pricing start-->
    <section class="pricing">
        <?php
        $post_name = 'Dedicated Developers';
        include_once pricing; ?>
    </section>
    <!-- pricing end -->


    <!-- pricing end -->

    <!-- testimonial slider section start here -->



    <?php

    $testimonial1 = "The business assisted us in starting from scratch with the web application concept. The team efficiently managed their Agile projects, communicated, and frequently gave comprehensive explanations in both technical and non-technical language. Their good work ethic consistently involved proactive effort.";
    $test_name1 = "Jeffrey Reyes";
    $test_role1 = "Regional Director";
    $user_img1 = "hire-developer/dev-test-01.jpeg";


    $testimonial2 = "Amazing services are provided by Hire Coworker. The projects have met my every expectation, and I look forward to our further collaboration. I have no hesitation in recommending their services. Their professionals are well-informed and highly responsive. The platform is quite adaptable as well.";
    $test_name2 = "Aaron. G";
    $test_role2 = "Founder & CEO";
    $user_img2 = "hire-developer/dev-test-02.jpeg";


    $testimonial3 = "Despite the fact that we have only recently started working with Hire Co-worker, they have already proven to be a competent and professional business. Projects were successfully managed, of a high calibre, and managed effectively.";
    $test_name3 = "Marcio. M";
    $test_role3 = "Managing Partner";
    $user_img3 = "hire-developer/dev-test-03.jpeg";

    $testimonial4 = "   When dealing with a remote contractor, communication is crucial, and Hire Co-worker excels at it. I wholeheartedly recommend Hire Co-worker as a supplier of top-notch developers that follow specifications and are consistently delivered on time.";
    $test_name4 = "Robert. S";
    $test_role4 = "IT Manager";
    $user_img4 = "hire-developer/dev-test-04.jpeg";

    include_once testimonial_slider; ?>
    <!-- testimonia; slider section end here -->

    <!-- faq section -->
    <section class="full-section">
        <p class="p-pink">8 REASONS TO OUTSOURCE</p>
        <h4 class="section-heading">
            Reasons To Hire Remote Developer
        </h4>
        <div class="container-grid grid grid-3">

            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">01</div>
                        <div class="box-title-heading">
                            <h6>Productivity</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    The fact that remote developers are more productive than in-office developers is the primary reason for hiring them. They benefit from flexible working hours and other activities when they work from home, making them more active and focused on their work.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">02</div>
                        <div class="box-title-heading">
                            <h6>Find The Right Skill</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    In order to avoid long delays or project failures, it is essential to hire the right candidate for the position or work. The remote developers have the skills and you can give them control of the project or work with a deadline, and they will take full responsibility.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">03</div>
                        <div class="box-title-heading">
                            <h6>Low Infrastructure Expense</h6>
                        </div>
                    </div>

                </div>
                <p class="text">Remote developers will only cost you the salary or decided project fees and besides that, they won’t ask for anything. They work from home or their place that saves offices extra cost of equipment, desk, furniture, and stationery.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">04</div>
                        <div class="box-title-heading">
                            <h6>Less Employment Cost</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Employers save a lot of money when remote developers work from home and only work for a set amount of time - weeks, months, or until their project is finished. Since they are not permanent employees, employers are not required to provide them with benefits.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">05</div>
                        <div class="box-title-heading">
                            <h6>No Travel Expenses</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    You can hire developers from other countries without worrying about how much they have to travel. While some nations offer excellent options for work visas, you won't need them if they work from home.
                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">06</div>
                        <div class="box-title-heading">
                            <h6>More Focused & Motivated</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    When compared to in-office developers, remote developers possess a number of qualities. Because they work independently, remote developers are highly skilled and overly focused on their work. They always put in a lot of effort to provide their customers with the best possible service.

                </p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">07</div>
                        <div class="box-title-heading">
                            <h6>Easy Employee Rotation</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    Some skilled employees are hired by businesses who have bad work habits that ruin the workplace as a whole, while others are of no use to the business. Both of these scenarios are prevalent and occur at some point in a person's carrier. However, hiring a remote developer can save you all of this hassle. Because you hire them for a specific amount of time, remote developers are temporary.</p>
            </div>
            <div class="container-section-boxes">
                <div class="services-box-title ">
                    <div class="box-title-number flex-center">
                        <div class="number">08</div>
                        <div class="box-title-heading">
                            <h6>Work Done before Time</h6>
                        </div>
                    </div>

                </div>
                <p class="text">
                    When hiring remote developers, gives you the power to choose the right person for the specific task. If each task will be done by its expert then it will take lesser time. On the other hand, remote developers don’t get hired for days, you hire them for tasks that keep them focused on your work without boundations of working hours.
                </p>
            </div>

        </div>

    </section>

    <section class="faq-section">
        <p class="p-pink">FAQs</p>
        <h5 class="section-heading">Do You Have Questions</h5>
        <div class="faqs">

            <div class="faqs-child">
                <details>
                    <summary>What can a Web Developer do for me?</summary>
                    <div class="faq__content">
                        <p class="text">Web Developers work to design, create, and maintain websites and web applications. The majority of Web Developers work either on the software, database, or the coding part of a website, known as the back-end, or in the design and interface part, known as the front-end. However, Full Stack Developers work on both sides and offer a more complete service.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How are Web Developers different from web designers?</summary>
                    <div class="faq__content">
                        <p class="text">The aesthetic aspect, or the way a website looks, is a primary concern for web designers. This includes things like the colors, typefaces, and buttons. On the other hand, web developers typically concentrate on everything that takes place behind the scenes: performance, bugs, and coding.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>Will my Web Developer be dedicated to me?</summary>
                    <div class="faq__content">
                        <p class="text">Yes, your web developer will be a dedicated employee of your organization and will work the same work schedule each day in your preferred time-zone.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>What happens if my Web Developer is away or sick?</summary>
                    <div class="faq__content">
                        <p class="text">Since they are dedicated to you, there isn't a back-up person to cover while they are away.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How do I communicate with my HireCoworker developer?</summary>
                    <div class="faq__content">
                        <p class="text">At HireCoworker, you can work completely in sync with your programmers and developers by utilizing all internet-based services like Teams, mail, chat, text, audio/video calls, screen sharing, and remote desktop.
                        </p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How is HireCoworker my ideal development partner?</summary>
                    <div class="faq__content">
                        <p class="text">One of the pioneers in the field of remote staffing, HireCoworker can help you find remote workers with the best skill sets. We take care of everything outside of work, like payroll, IT support, hardware and infrastructure, employee insurance, and so on. You simply collaborate closely with your remote developers to achieve cost-effective results.</p>
                    </div>
                </details>
            </div>
            <div class="faqs-child">
                <details>
                    <summary>How safe is outsourcing my development project to you?</summary>
                    <div class="faq__content">
                        <p class="text">Totally safe. Your idea/product/project concept ownership and patents are solely yours and completely safe as we sign the Non-Disclosure agreements with you.</p>
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
    include_once page_bottom;
    ?>

    <script>
        const parent_btn = document.querySelector(".hire-services-btn-div");
        console.log(parent_btn.length);

        /* Adding an event listener to each of the buttons in the parent_btn div. When the button is
        clicked, it removes the class dev-btn-active from all the buttons, and adds it to the button
        that was clicked. It also removes the class dev-active from all the divs, and adds it to the
        div with the id that matches the button that was clicked. */
        for (let i = 0; i < parent_btn.children.length; i++) {
            parent_btn.children[i].addEventListener("click", function() {
                remove_col_btn();
                this.classList.add("dev-btn-active");
                document.getElementById(this.innerHTML).classList.add("dev-active");
            });
        }

        function remove_col_btn() {
            for (let i = 0; i < parent_btn.children.length; i++) {
                parent_btn.children[i].classList.remove("dev-btn-active");
                document.querySelectorAll(".hire-services-container")[i].classList.remove("dev-active")
            }
        }
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
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
                    items: 2
                }
            }
        })
    </script>
</body>

</html>