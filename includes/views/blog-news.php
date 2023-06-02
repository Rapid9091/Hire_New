<!-- Blog section page -->
<!-- -------------------------- -->
<!-- blog heading -->

<!-- blog
blog_link
blog_title
blog_img
blog_date(01 Aug, 2022)
-->

<section class="blog" id="blog">
    <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">BLOGS AND NEWS</p>
    <p class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400"><?= isset($blog_main_heading) ? $blog_main_heading : "LATEST BLOGS & NEWS" ?></p>

    <div class="blog-grid grid grid-3">
        <div class="blog-card ">
            <div class="blog-banner-box">
                <img src="<?= isset($blog_img_1) ? $blog_img_1 : get_img("blog/digital-marketing.webp") ?>" alt="blog banner" loading="lazy" />
            </div>

            <div class="blog-content">
                <p class="blog-title">
                    <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : "#" ?>">
                        <?= isset($blog_title_1) ? $blog_title_1 : "Outsourcing & Solopreneurs: A Match Made in Heaven." ?></a>
                </p>
                <p>Lot's of experts is ready to work remotely, Hire Coworker help people to get VA in least price. Virtual Assistants are an affordable alternative to hiring specialized employees to perform tasks, handle operations or provide services for the company...</p>

                <div class="wrapper flex-center-between">
                    <div class="blog-publish-date flex-center">
                        <a href="<?= home_path() ?>author"><img src="<?= get_img() ?>user.jpg" alt="author" loading="lazy" /></a>
                        <a href="<?= home_path() ?>author">Arjun K.</a>

                    </div>
                    <div class="blog-link-div">
                        <div class="blog-time flex-center">
                            <img src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" loading="lazy"/>

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
                <img src="<?= isset($blog_img_2) ? $blog_img_2 : get_img("blog/content-writer.webp") ?>" alt="blog banner" loading="lazy" />
            </div>

            <div class="blog-content">
                <p class="blog-title">
                    <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : "#" ?>">
                        <?= isset($blog_title_1) ? $blog_title_1 : "Virtual Employee Model is safer than Project Outsourcing" ?></a>
                </p>
                <p>Virtual Assistants report higher job satisfaction rates and a better work-life balance. The virtual employee model creates a low-stress, high-productivity work environment.</p>

                <div class="wrapper flex-center-between">
                    <div class="blog-publish-date flex-center">
                        <a href="<?= home_path() ?>author"><img src="<?= get_img() ?>user-3.jpg" alt="author" loading="lazy" /></a>
                        <a href="<?= home_path() ?>author">John T.</a>

                    </div>
                    <div class="blog-link-div">
                        <div class="blog-time flex-center">
                            <img src="<?= get_img() ?>icons8-calendar-64.png" alt="calendar icon" loading="lazy" />

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
                <img src="<?= isset($blog_img_3) ? $blog_img_3 : get_img("blog/web-dev.webp") ?>" alt="blog banner" />
            </div>
            <div class="blog-content">
                <p class="blog-title">
                    <a href="<?= isset($blog_link_1) ? home_path($blog_link_1) : "#" ?>">
                        <?= isset($blog_title_1) ? $blog_title_1 : "Data Security: How We Keep your Sensitive Information Safe" ?></a>
                </p>
                <p>Data security is the process of safeguarding company data and preventing data loss caused by unauthorized access..</p>

                <div class="wrapper flex-center-between">
                    <div class="blog-publish-date flex-center">
                        <a href="<?= home_path() ?>author"><img src="<?= get_img() ?>user-3.jpg" alt="author" /></a>
                        <a href="<?= home_path() ?>author">John T.</a>

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
    <p class="text-center view-btn"><button class="view_more_btn"><a href="<?= home_path() ?>blogs">View More</a></button></p>
</section>
<!-- blog  end -->