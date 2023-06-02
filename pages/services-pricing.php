<?php
include_once "../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coworker | Coworker</title>
    <link rel="icon" href="./assets/images/favicon_io/favicon-big.png" type="image/ico">
    <meta name="keywords" content="Assisstant, coworker, virtual assisstant, hire coworker, hire VA">
    

    <?php include_once head; ?>

    <!-- -------------------------- -->
    <!-- Page CSS links -->
    <!-- -------------------------- -->
    <link rel="stylesheet" href="<?= get_css() ?>home.css" />
    <link rel="stylesheet" href="<?= get_css() ?>global.css" />
    <link rel="stylesheet" href="<?= get_css() ?>utility.css" />
    <link rel="stylesheet" href="<?= get_css() ?>services-pricing.css" />


    <!-- -------------------------- -->
    <!-- Google Fonts -->
    <!-- -------------------------- -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <!-- -------------------------- -->
    <!-- Icons Links -->
    <!-- -------------------------- -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!-- -------------------------- -->
    <!-- Header of the page -->
    <!-- -------------------------- -->

    <?php include_once header; ?>


    <!-- -------------------------- -->
    <!-- New Main landing section page -->
    <!-- -------------------------- -->
    <article class="pricing-landing grid-center">
        <div class="pricing-ladning-content">
            <h2 class="main-heading"> Our Latest Pricing </h2>
            <p>Get the best and the latest help for your project at the best. </p>
        </div>
    </article>

    <!-- -------------------------- -->
    <!-- Pricing Box section page -->
    <!-- -------------------------- -->

    <!-- SEO Development -->

    <section class="pricing">

        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">SEO</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">Search Engine Optimization</h3>

        <!-- Administration Support -->
        <div class="pricing-container grid grid-2">
            <div class="pricing-grid-img background-property grid-center">

                <lord-icon src="https://cdn.lordicon.com/gqdnbnwt.json" trigger="loop" colors="primary:#2b2350,secondary:#ed1575" style="width:250px;height:250px">
                </lord-icon>
            </div>
            <div class="pricing-grid">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Junior</th>
                            <th>Intermidiate</th>
                            <th>Expert</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>On Page Seo</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Off Page Seo</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Backlink Creations</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Internal Linking</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Outbound / External Linking</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Web Development -->

    <section class="pricing">

        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">WEB DEV</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400"> Web Development</h3>

        <!-- Administration Support -->
        <div class="pricing-container grid grid-2">
            <div class="pricing-grid-img background-property grid-center">
                <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                <lord-icon src="https://cdn.lordicon.com/nobciafz.json" trigger="loop" colors="primary:#2b2350,secondary:#ed1575" style="width:250px;height:250px">
                </lord-icon>
            </div>
            <div class="pricing-grid">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Junior</th>
                            <th>Intermidiate</th>
                            <th>Expert</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Front End Development</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Back End Development</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Website Maintenance</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Wordpress Development</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Landing Page</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Buisness Websites</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Web Development -->
    </section>

    <!-- Web Development -->

    <section class="pricing">

        <p class="p-pink" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400">OTHERS</p>
        <h3 class="section-heading" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="400"> Other Relatable Works</h3>

        <!-- Administration Support -->
        <div class="pricing-container grid grid-2">
            <div class="pricing-grid-img background-property grid-center">

                <lord-icon src="https://cdn.lordicon.com/qhgmphtg.json" trigger="loop" colors="primary:#2b2350,secondary:#ed1575" style="width:250px;height:250px">
                </lord-icon>
            </div>
            <div class="pricing-grid">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Junior</th>
                            <th>Intermidiate</th>
                            <th>Expert</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Content Writing</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Digital Marketing</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Social Media Handling</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Tech Support</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                        <tr>
                            <td>Call Support</td>
                            <td>$5</td>
                            <td>$6</td>
                            <td>$7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- -------------------------- -->
    <!-- Header JS of the page  -->
    <!-- -------------------------- -->
    <?php include_once page_bottom ?>

</body>

</html>