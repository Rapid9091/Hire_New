<?php
include_once "../../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Author | HireCoworker</title>
    <?php include_once head; ?>

    <!-- -------------------------- -->
    <!-- Page CSS links -->
    <!-- -------------------------- -->
    <link rel="stylesheet" href="<?= get_css() ?>blogs/author_profile.css">
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
            <h2 class="main-heading">Author Profile</h2>
            <p>Our best Blogs Wrriter </p>
        </div>
    </article>

    <section class="author_profile">
    <div class="why-outsourcing-grid grid">
            <div class="why-outsourcing-grid-left flex-center-center">
                <div class="author_profile_img">
                    <img loading="lazy" src="<?= get_img() ?>user-3.jpg" alt="author_image">
                </div>
               
            </div>
            <div class="why-outsourcing-grid-right">
                <h3 class="sub-heading">John Taren</h3>
                <p class="author_role">Blogger | Content Writer</p>
                <p>Our expertise lies in attending to the little things, streamlining procedures, and increasing effectiveness. We enjoy interacting and working together with our clients in a way that fosters our mutual development and enables us to jointly accomplish significant objectives. We just want to assist you in moving your business in the direction you desire.</p>
                <ul class="why-choose-ul">
                    <li class="flex-center"><i class='bx bxs-check-shield'></i> We have served more than 1000 clients</li>

                    <li class="flex-center"><i class='bx bxs-check-shield'></i> We have 9+ years of experience </li>

                    <li class="flex-center"><i class='bx bxs-check-shield'></i> We offer service at less $5 per hour</li>

                </ul>
            </div>
        </div>
    </section>
   
   


    <!-- -------------------------- -->
    <!-- Page bottom includes footer and some global script -->
    <!-- -------------------------- -->
    <?php include_once page_bottom ?>

   

</body>

</html>