<?php
include_once "../../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog | HireCoworker</title>
    <?php include_once head; ?>

    <!-- -------------------------- -->
    <!-- Page CSS links -->
    <!-- -------------------------- -->
    <link rel="stylesheet" href="<?= get_css() ?>blogs/blog.css">
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
            <h2 class="main-heading">Blog</h2>
            <p>Get the best and the latest Blogs and News for your project at the best. </p>
        </div>
    </article>



    <!-- -------------------------- -->
    <!-- Blog section page -->
    <!-- -------------------------- -->
    <section class="blog-content-section">
        <div class="blog_content_left">
            <div class="blog_image">
                <img src="<?= get_img()?>blog/content-writer.jpg" alt="">
            </div>
            <div class="blog_info">
                <ul class="flex">
                    <li>by <a href="<?= home_path()?>author">John T.</a></li>
                    <li>|</li>
                    <li>Nov 28, 2018</li>
                    <li>|</li>
                    <li>2 comments</li>
                </ul>
            </div>
            <h2 class="blog_title">Virtual Employee Model is safer than Project Outsourcing</h2>
            <p>In today's rapidly changing business world, companies are constantly looking for ways to increase
                efficiency, reduce costs, and stay ahead of the competition. One popular solution for achieving these
                goals is through outsourcing various business functions, such as software development, customer service,
                or marketing. However, with the rise of virtual employee models, many companies are beginning to
                question whether outsourcing is the best option for their needs.</p>
            <p>Data Security: With virtual employees, all data and communications are kept within the company's secure
                network. In contrast, outsourcing projects to external contractors can often result in sensitive
                information being shared outside the company, potentially exposing it to security risks.</p>
            <div class="flex flex_blog">
                <div class="second_blog_image">
                    <img src="<?= get_img()?>blog/blog_img_second.jpg" alt="">
                </div>
                <div class="second_image_content">
                    <h2 class="blog_heading">Virtual Employee Model </h2>
                    <p>Control Over Work: With virtual employees, companies have complete control over the work process
                        and can monitor progress in real-time. This allows for quick corrective action to be taken if
                        necessary. On the other hand, outsourcing projects often results in a lack of control over the
                        work process, which can lead to missed deadlines and quality issues. <br>

                        Cost-Effective: Virtual employees are often more cost-effective than outsourcing projects, as
                        they typically work on a fixed-price contract, eliminating the need for additional expenses such
                        as training, recruitment, and benefits.</p>
                </div>
            </div>
            <p>Flexibility: Virtual employees can be easily scaled up or down based on the company's changing needs,
                providing more flexibility than outsourcing projects. Additionally, virtual employees can work from
                anywhere, allowing companies to access talent from a global pool.</p>
            <h3 class="blog_heading">Conclusion</h3>
            <div class="blog_third_image">
                <img src="<?=get_img()?>blog/blog_image_third.jpg" alt="">
            </div>

            <p>In conclusion, while outsourcing projects may seem like a quick and easy solution, virtual employee
                models offer a safer, more cost-effective, and flexible option for companies looking to expand their
                capabilities and stay ahead of the competition. By choosing a virtual employee model, companies can
                ensure that their data and work processes are secure, while still accessing the talent they need to
                succeed in today's fast-paced business world.</p>
            <p>In today's fast-paced business world, organizations are constantly seeking ways to streamline their
                operations and minimize costs. One popular solution is project outsourcing, where businesses hire
                third-party companies to handle specific tasks or projects. However, outsourcing can come with a number
                of risks, including data security breaches, communication breakdowns, and a lack of control over the
                quality of work.

                Enter the virtual employee model. This model allows businesses to hire dedicated remote workers who work
                exclusively for them, just like in-house employees. Here are some reasons why the virtual employee model
                is a safer alternative to project outsourcing:</p>
            <ul class="social_share">
                <li>Share This Post:</li>
                <li><a href=""><img src="<?= get_img()?>facebook-icon.png" alt=""></a></li>
                <li><a href=""><img src="<?= get_img()?>instagram-icon.png" alt=""></a></li>
                <li><a href=""><img src="<?= get_img()?>twitter-icon.png" alt=""></a></li>
                <li><a href=""><img src="<?= get_img()?>linkedin-icon.png" alt=""></a></li>
                <li></li>
            </ul>
            <br>
            <hr>
        </div>
        <div class="blog_content_right">
            <div class="widget">
                <h3 class="widget-title">Recent Post</h3>
                <ul class="posts-list">
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/content-writer.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 22, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Outsourcing & Solopreneurs</a></h4>
                        </div>
                    </li>
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/digital-marketing.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 19, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Virtual Employee Model .</a></h4>
                        </div>
                    </li>
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/web-dev.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 12, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Data Security</a></h4>
                        </div>
                    </li>
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/content-writer.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 25, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Outsourcing & Solopreneurs</a></h4>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="widget">
                <h3 class="widget-title">Popular Post</h3>
                <ul class="posts-list">
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/content-writer.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 22, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Outsourcing & Solopreneurs</a></h4>
                        </div>
                    </li>
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/digital-marketing.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 19, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Virtual Employee Model</a></h4>
                        </div>
                    </li>
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/web-dev.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 12, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Data Security</a></h4>
                        </div>
                    </li>
                    <li class="flex">
                        <figure>
                            <a href="<?= home_path()?>blog">
                                <img src="<?=get_img() ?>blog/content-writer.jpg" alt="post">
                            </a>
                        </figure>

                        <div>
                            <span>Nov 25, 2018</span>
                            <h4><a href="<?= home_path()?>blog">Outsourcing & Solopreneurs</a></h4>
                        </div>
                    </li>
                </ul>
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