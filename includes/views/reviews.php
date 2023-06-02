<!-- Set the three reviews and the three username before using the components -->


<!-- -------------------------- -->
<!-- Review section page -->
<!-- -------------------------- -->
<section class="reviews grid grid-3" id="customer_reviews">
    <div class="member-review">
        <img src="<?= get_img() ?>user.jpg" alt="Customer Reviews" class="member-img" />
        <div class="rating-stars">
            <p>⭐⭐⭐⭐⭐</p>
        </div>
        <p>
            <?php
            if (isset($review_text1)) {
                echo
                $review_text1;
            } else {
                echo " Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear. I am in love with the interface and the services they provide";
            }
            ?>
        </p>
        <div class="username">


            <?php
            if (isset($username1)) {
                echo
                $username1;
            } else {
                echo "Harry Jr";
            }
            ?>
        </div>
    </div>
    <div class="member-review">
        <img src="<?= get_img() ?>testimonial/female-user-2.jpg" alt="Customer Reviews" class="member-img" />
        <div class="rating-stars">
            <p>⭐⭐⭐⭐⭐</p>
        </div>
        <p>
            <?php
            if (isset($review_text2)) {
                echo
                $review_text2;
            } else {
                echo " Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear. I am in love with the interface and the services they provide";
            }
            ?>
        </p>
        <div class="username">


            <?php
            if (isset($username2)) {
                echo
                $username2;
            } else {
                echo "Harry Jr";
            }
            ?>
        </div>
    </div>
    <div class="member-review">
        <img src="<?= get_img() ?>mobile-apps/robert.jpg" alt="Customer Reviews" class="member-img" />
        <div class="rating-stars">
            <p>⭐⭐⭐⭐⭐</p>
        </div>
        <p>
            <?php
            if (isset($review_text3)) {
                echo
                $review_text3;
            } else {
                echo " Easy to use, intuitive and fluid interface, support always willing to assist in problems that may appear. I am in love with the interface and the services they provide";
            }
            ?>
        </p>
        <div class="username">
            <?php
            if (isset($username3)) {
                echo
                $username3;
            } else {
                echo "Harry Jr";
            }
            ?>
        </div>
    </div>
</section>