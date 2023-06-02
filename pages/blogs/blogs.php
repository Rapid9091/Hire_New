<?php
include_once "../../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs | HireCoworker</title>
    <?php include_once head; ?>

    <!-- -------------------------- -->
    <!-- Page CSS links -->
    <!-- -------------------------- -->
    <link rel="stylesheet" href="<?= get_css() ?>blogs/blogs.css">
    <link rel="stylesheet" href="<?= get_css() ?>view-css/view_blog.css">
</head>

<body>

    <!-- -------------------------- -->
    <!-- Header of the page -->
    <!-- -------------------------- -->

    <?php include_once header; ?>

    <!-- -------------------------- -->
    <!-- First Contact Section  -->
    <!-- -------------------------- -->
    <article class="pricing-landing grid-center">
        <div class="pricing-ladning-content">
            <h2 class="main-heading">Blogs And News</h2>
            <p>Get the best and the latest Blogs and News for your project at the best. </p>
        </div>
    </article>


   
    <!-- -------------------------- -->
    <!-- Blog section page -->
    <!-- -------------------------- -->
    <section class="blog" id="blog">

    <div class="blog-grid grid grid-3">
        <div class="blog-card ">
            <div class="blog-banner-box">
                <img src="<?= isset($blog_img_1) ? $blog_img_1 : get_img("blog/digital-marketing.jpg") ?>" alt="blog banner" />
            </div>

            <div class="blog-content">
                <h3 class="blog-title">
                    <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : home_path('blog') ?>">
                        <?= isset($blog_title_1) ? $blog_title_1 : "Outsourcing & Solopreneurs: A Match Made in Heaven." ?></a>
                </h3>
                <p>Outsourcing is a business practice in which a company hires a third-party to perform tasks, handle operations or provide services for the company...</p>

                <div class="wrapper flex-center-between">
                    <div class="blog-publish-date flex-center">
                        <a href="<?= home_path()?>author"><img src="<?= get_img() ?>user.jpg" alt="author" /></a>
                        <a href="<?= home_path()?>author">Arjun K.</a>
                        
                    </div>
                    <div class="blog-link-div">
                    <div class="blog-time flex-center">
                        <img src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" />

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
                <img src="<?= isset($blog_img_2) ? $blog_img_2 : get_img("blog/content-writer.jpg") ?>" alt="blog banner" />
            </div>

            <div class="blog-content">
                <h3 class="blog-title">
                    <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : home_path('blog') ?>">
                        <?= isset($blog_title_1) ? $blog_title_1 : "Virtual Employee Model is safer than Project Outsourcing" ?></a>
                </h3>
                <p>Remote workers report higher job satisfaction rates and a better work-life balance. The virtual employee model creates a low-stress, high productivity work environment...</p>

                <div class="wrapper flex-center-between">
                    <div class="blog-publish-date flex-center">
                        <a href="<?= home_path()?>author"><img src="<?= get_img() ?>user-3.jpg" alt="author" /></a>
                        <a href="<?= home_path()?>author">John T.</a>
                        
                    </div>
                    <div class="blog-link-div">
                    <div class="blog-time flex-center">
                        <img src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" />

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
                <img src="<?= isset($blog_img_3) ? $blog_img_3 : get_img("blog/web-dev.jpg") ?>" alt="blog banner" />
            </div>
            <div class="blog-content">
                <h3 class="blog-title">
                    <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : home_path('blog') ?>">
                        <?= isset($blog_title_1) ? $blog_title_1 : "Data Security: How We Keep your Sensitive Information Safe" ?></a>
                </h3>
                <p>Data security is the process of protecting corporate data and preventing data loss through unauthorized access...</p>

                <div class="wrapper flex-center-between">
                    <div class="blog-publish-date flex-center">
                        <a href="<?= home_path()?>author"><img src="<?= get_img() ?>user-3.jpg" alt="author" /></a>
                        <a href="<?= home_path()?>author">John T.</a>
                        
                    </div>
                    <div class="blog-link-div">
                    <div class="blog-time flex-center">
                        <img src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" />

                        <a href="<?= isset($blog_link_2) ? home_path($blog_link_2) : "#" ?>">
                            <?= isset($blog_date_2) ? $blog_date_2 : "07 June, 2022" ?>
                        </a>
                    </div>
                    </div>

                </div>
            </div>

            
        </div>
    </div>
    
</section>


    <!-- -------------------------- -->
    <!-- Page bottom includes footer and some global script -->
    <!-- -------------------------- -->
    <?php include_once page_bottom ?>

    <!-- -------------------------- -->

</body>

</html>