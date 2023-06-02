<!-- testimonial start -->
<section class="testimonial-section">
    <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">TESTIMONIAL</p>
    <p class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WHAT CLIENTS SAYS ABOUT US</p>
    <div class="owl-carousel text-tesimonial owl-theme" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="50">
        <div class="item">
            <div class="test-item">
                <p class="qoute"><i class='bx bxs-quote-alt-left'></i></p>
                <div class="test-dtl">
                    <p class="text"><?= isset($testimonial1) ? $testimonial1 : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor deleniti consectetur
                        animi. Culpa dignissimos architecto asperiores quaerat? Repellat, minus!'; ?></p>

                </div>
                <div class="test-user flex-center">
                    <div class="user-img">
                        <img src="<?= isset($user_img1) ? get_img($user_img1) : get_img("testimonial/female-user.png"); ?>" alt="" loading="lazy">
                    </div>
                    <div class="test-user-dtl">
                        <p class="test_name_designation"><?= isset($test_role1) ? $test_role1 : "Graphic Designer"; ?></p>
                        <p><?= isset($test_name1) ? $test_name1 : "John Doe"; ?></p>
                    </div>
                </div>


            </div>
        </div>
        <div class="item">
            <div class="test-item">
                <p class="qoute"><i class='bx bxs-quote-alt-left'></i></p>
                <div class="test-dtl">
                    <p class="text"><?= isset($testimonial2) ? $testimonial2 : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor deleniti consectetur
                        animi. Culpa dignissimos architecto asperiores quaerat? Repellat, minus!'; ?></p>
                </div>
                <div class="test-user flex-center">
                    <div class="user-img">
                        <img src="<?= isset($user_img2) ? get_img($user_img2) : get_img("testimonial/male-user.png"); ?>" alt="" loading="lazy">
                    </div>
                    <div class="test-user-dtl">
                        <p class="test_name_designation"><?= isset($test_role2) ? $test_role2 : "Graphic Designer"; ?></p>
                        <p><?= isset($test_name2) ? $test_name2 : "John Doe"; ?></p>
                    </div>
                </div>


            </div>
        </div>
        <div class="item">
            <div class="test-item">
                <p class="qoute"><i class='bx bxs-quote-alt-left'></i></p>
                <div class="test-dtl">
                    <p class="text"><?= isset($testimonial3) ? $testimonial3 : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor deleniti consectetur
                        animi. Culpa dignissimos architecto asperiores quaerat? Repellat, minus!'; ?></p>
                </div>

                <div class="test-user flex-center">
                    <div class="user-img">
                        <img src="<?= isset($user_img3) ? get_img($user_img3) : get_img("testimonial/girl-user.jpg"); ?>" alt="" loading="lazy">
                    </div>
                    <div class="test-user-dtl">
                        <p class="test_name_designation"><?= isset($test_role3) ? $test_role3 : "Graphic Designer"; ?></p>
                        <p><?= isset($test_name3) ? $test_name3 : "John Doe"; ?></p>
                    </div>
                </div>


            </div>
        </div>
        <div class="item">
            <div class="test-item">
                <p class="qoute"><i class='bx bxs-quote-alt-left'></i></p>
                <div class="test-dtl">
                    <p class="text"><?= isset($testimonial4) ? $testimonial4 : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor deleniti consectetur
                        animi. Culpa dignissimos architecto asperiores quaerat? Repellat, minus!'; ?></p>
                </div>
                <div class="test-user flex-center">
                    <div class="user-img">
                        <img src="<?= isset($user_img4) ? get_img($user_img4) : get_img("testimonial/boy-user.jpg"); ?>" alt="" loading="lazy">
                    </div>
                    <div class="test-user-dtl">
                        <p class="test_name_designation"><?= isset($test_role4) ? $test_role4 : "Graphic Designer"; ?></p>
                        <p><?= isset($test_name4) ? $test_name4 : "John Doe"; ?></p>
                    </div>
                </div>


            </div>
        </div>


    </div>

</section>
<!-- testimonial end -->

<!--  -->