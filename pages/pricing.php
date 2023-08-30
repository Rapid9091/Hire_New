<?php
include_once "../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coworker</title>
  <link rel="icon" href="./assets/images/favicon_io/favicon-big.png" type="image/ico">
  <meta name="keywords" content="Assisstant, coworker, virtual assisstant, hire coworker, hire VA">
<style>
.pricing_link{
  color: black;
}

</style>

  <?php include_once head; ?>

  <!-- -------------------------- -->
  <!-- Page CSS links -->
  <!-- -------------------------- -->
  <link rel="stylesheet" href="<?= get_css() ?>home.css" />
  <link rel="stylesheet" href="<?= get_css() ?>global.css" />
  <link rel="stylesheet" href="<?= get_css() ?>utility.css" />
  <link rel="stylesheet" href="<?= get_css() ?>view-css/view_pricing2.css" />


  <!-- -------------------------- -->
  <!-- Google Fonts -->
  <!-- -------------------------- -->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;500;700;900&display=swap"
    rel="stylesheet" />
  <!-- -------------------------- -->
  <!-- Icons Links -->
  <!-- -------------------------- -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script async src="https://cdn.lordicon.com/fudrjiwc.js"></script>
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

  <section class="pricing">
    <h2 class="section-heading">Pricing Table</h2>
    <div class="list_header">
      <div class="service_name list_head">Services</div>
      <div class="hourly list_head">Hourly</div>
      <div class="daily list_head">Daily</div>
      <div class="weekly list_head">Weekly</div>
      <div class="monthly list_head">Monthly</div>
    </div>
    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
          It Outsourcing    <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        $35 onwards
        </div>
        <div class="list_data">
        $230 onwards
        </div>
        <div class="list_data">
        $900 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>va-web-development" class="pricing_link" >Web Development Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>cms-development" class="pricing_link" > CMS Development Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>software-development-va" class="pricing_link" >Software Development Services</a>
        </div>
        <div class="list_data">
        $6
        </div>
        <div class="list_data">
        $45
        </div>
        <div class="list_data">
        $300
        </div>
        <div class="list_data">
        $1,100
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>database-development-services" class="pricing_link" > DataBase Development Services</a>
        </div>
        <div class="list_data">
        $15
        </div>
        <div class="list_data">
        $100
        </div>
        <div class="list_data">
        $650
        </div>
        <div class="list_data">
        $2,500
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>it-security-services" class="pricing_link" >  IT security Services</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $450
        </div>
        <div class="list_data">
        $1,700
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>machinelearning-service" class="pricing_link" > Machine Learning Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>network-installation" class="pricing_link" > Network Installation Services</a>
        </div>
        <div class="list_data">
        $15
        </div>
        <div class="list_data">
        $100
        </div>
        <div class="list_data">
        $650
        </div>
        <div class="list_data">
        $2,500
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>frontend-development-services" class="pricing_link" > Frontened Development Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>backend-development-services" class="pricing_link" >  Backened Development Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>full-stack-development-services" class="pricing_link" >FullStack Development Services</a>
        </div>
        <div class="list_data">
        $6
        </div>
        <div class="list_data">
        $45
        </div>
        <div class="list_data">
        $300
        </div>
        <div class="list_data">
        $1,100
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Ecommerce Solutions   <span>▼</span>
        </div>
        <div class="list_data">
        $3 onwards
        </div>
        <div class="list_data">
        $22 onwards
        </div>
        <div class="list_data">
        $150 onwards
        </div>
        <div class="list_data">
        $550 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>ecommerce-web-development" class="pricing_link" > Ecommerce Web Development</a>
        </div>
        <div class="list_data">
        $4
        </div>
        <div class="list_data">
        $30
        </div>
        <div class="list_data">
        $200
        </div>
        <div class="list_data">
        $800
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>customer-mail-handling" class="pricing_link" > Customer Mail Handling</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>chargebacks-handling" class="pricing_link" > Chargebacks Handling</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $470
        </div>
        <div class="list_data">
        $1,850
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>hire-amazon-virtual-assistant" class="pricing_link" > Amazon Account Handling</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>e-bay-services" class="pricing_link" >  Ebay Account Handling</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>walmart-virtual-assistant" class="pricing_link" >   Walmart Account Handling</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $900
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>dropshipping-virtual-assistant" class="pricing_link" > Dropshipping Store Handling</a>
        </div>
        <div class="list_data">
        $3
        </div>
        <div class="list_data">
        $22
        </div>
        <div class="list_data">
        $150
        </div>
        <div class="list_data">
        $550
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>sales-funnel-development" class="pricing_link" >  Sales Funnel Development + Support</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $450
        </div>
        <div class="list_data">
        $1,800
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>goggle-reviews" class="pricing_link" > Google Reviews Services</a>
        </div>
        <div class="list_data">
        $1.5 per review
        </div>
        <div class="list_data">
        
        </div>
        <div class="list_data">
        
        </div>
        <div class="list_data">
        
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
         Digital Marketing Services   <span>▼</span>
        </div>
        <div class="list_data">
        $3 onwards
        </div>
        <div class="list_data">
        $22 onwards
        </div>
        <div class="list_data">
        $150 onwards
        </div>
        <div class="list_data">
        $550 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>hire-seo-virtual-assistant-specialist" class="pricing_link" >  Search Engine Optimization (SEO)</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>va-for-social-media-marketing" class="pricing_link" > Social Media Handler</a>
        </div>
        <div class="list_data">
        $3
        </div>
        <div class="list_data">
        $22
        </div>
        <div class="list_data">
        $150
        </div>
        <div class="list_data">
        $550
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>email-marketing-virtual-assistant" class="pricing_link" >  Email Marketing Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>google-business-profile-virtual-assistant" class="pricing_link" >   Google Business</a>
        </div>
        <div class="list_data">
        $4
        </div>
        <div class="list_data">
        $30
        </div>
        <div class="list_data">
        $200
        </div>
        <div class="list_data">
        $800
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>franchise-seo-services" class="pricing_link" >  Franchise SEO</a>
        </div>
        <div class="list_data">
        $4
        </div>
        <div class="list_data">
        $30
        </div>
        <div class="list_data">
        $200
        </div>
        <div class="list_data">
        $800
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>content-marketing-services" class="pricing_link" >   Content Marketing Services</a>
        </div>
        <div class="list_data">
        $4
        </div>
        <div class="list_data">
        $30
        </div>
        <div class="list_data">
        $200
        </div>
        <div class="list_data">
        $800
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>backlink-building-virtual-assistant" class="pricing_link" > Link Building</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>reputation-management-services" class="pricing_link" >  Online Reputation Management (ORM)</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>conversion-rate-optimization" class="pricing_link" >  Conversion Rate Optimization (CRO) </a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>amazon-marketing-services" class="pricing_link" > Amazon Marketing Services (AMS)</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>best-ppc-virtual-assistant" class="pricing_link" >  PPC Advertisement Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
     
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
         Digital Production Services   <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        $35 onwards
        </div>
        <div class="list_data">
        $230 onwards
        </div>
        <div class="list_data">
        $920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>video-production-services" class="pricing_link" > Video Production Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>best-ppc-virtual-assistant" class="pricing_link" >  Content Writing Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>video-topic-strategist" class="pricing_link" >  Video Topic Strategist</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>cameramans-services" class="pricing_link" > Camera Man Services</a>
        </div>
        <div class="list_data">
        $20
        </div>
        <div class="list_data">
        $130
        </div>
        <div class="list_data">
        $900
        </div>
        <div class="list_data">
        $3,600
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>wedding-video-shooting-services" class="pricing_link" > Wedding Video Shooting Services</a>
        </div>
        <div class="list_data">
        $20
        </div>
        <div class="list_data">
        $130
        </div>
        <div class="list_data">
        $900
        </div>
        <div class="list_data">
        $2,500
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
         Movies Production Services  <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        $35 onwards
        </div>
        <div class="list_data">
        $230 onwards
        </div>
        <div class="list_data">
        $920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>movie-director-services" class="pricing_link" >  Movie Director Services</a>
        </div>
        <div class="list_data">
        $20
        </div>
        <div class="list_data">
        $130
        </div>
        <div class="list_data">
        $900
        </div>
        <div class="list_data">
        $3,600
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>movie-script-services" class="pricing_link" > Movie Script Writer Services</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>movie-cameraman-services" class="pricing_link" >  Movie Camera Man Services</a>
        </div>
        <div class="list_data">
        $30
        </div>
        <div class="list_data">
        $260
        </div>
        <div class="list_data">
        $1,800
        </div>
        <div class="list_data">
        $7,200
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>hire-actor-actrees" class="pricing_link" >  Hire Actor/Actress</a>
        </div>
        <div class="list_data">
        $55
        </div>
        <div class="list_data">
        $400
        </div>
        <div class="list_data">
        $2,800
        </div>
        <div class="list_data">
        $11,000
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>short-movies" class="pricing_link" > Short Movie </a>
        </div>
        <div class="list_data">
        $1000 (Indian)
        </div>
        <div class="list_data">
        $3000 (US Citizen)
        </div>
        <div class="list_data">
        
        </div>
        <div class="list_data">
        
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Hire Dedicated Designer  <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        $35 onwards
        </div>
        <div class="list_data">
        $230 onwards
        </div>
        <div class="list_data">
        $920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        Logo Designer
        </div>
        <div class="list_data">
        $8
        </div>
        <div class="list_data">
        $60
        </div>
        <div class="list_data">
        $410
        </div>
        <div class="list_data">
        $1,600
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Photoshop Expert
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Multimedia Animation Expert
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Business Card, Podcast, Brochures Expert
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Web Designer
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
         Graphic Desiner
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        UI/UX Designers
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Mobile App Design
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Illustration Expert 
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        InDesign Expert
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Dedicated Content Writer  <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        $35 onwards
        </div>
        <div class="list_data">
        $230 onwards
        </div>
        <div class="list_data">
        $920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>article-writer" class="pricing_link" >Articles & Blogs</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>landing&sales" class="pricing_link" > Landing & Sales Pages</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>technical-medical" class="pricing_link" >Technical & Medical</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>website-&-seo-content" class="pricing_link" >WEBSITE & SEO CONTENT</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>social-media-content" class="pricing_link" >Social Media Content</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>ebook&brochur" class="pricing_link" >Ebook & Brochure</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>speeches-&-reviews" class="pricing_link" >Speeches & Reviews</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>travel-&-lifestyle" class="pricing_link" >Travel & Lifestyle</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>whitepaper-in-marketing" class="pricing_link" > White Papers</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>press-release-&-newsletters" class="pricing_link" >PRESS RELEASE & NEWSLETTERS </a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>academic-&-curriculum" class="pricing_link" >ACADEMIC & CURRICULUM</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>movie-script-services" class="pricing_link" >Movie Script </a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>product-&-services-descriptions" class="pricing_link" > Product & Services Descriptions</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>editing-&-proofreading" class="pricing_link" >Editing & Proofreading</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>book-writing-services" class="pricing_link" > Books WRITING</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>game-script-writing-services" class="pricing_link" > GAME SCRIPT WRITING</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>magazines-writing-service" class="pricing_link" >MAGAZINES WRITING</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>legal-content" class="pricing_link" >  Legal Content</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>cv-&-cover-letter" class="pricing_link" > CVs & Cover Letter</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        <a href="<?=home_path() ?>fiction" class="pricing_link" >  Mad Fiction Writer (Magic,Horror etc.)</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Engineers and Architects  <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        $70 onwards
        </div>
        <div class="list_data">
        $480 onwards
        </div>
        <div class="list_data">
        $1,920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>autocad" class="pricing_link" >  Autocadd</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>mechanical-engineering" class="pricing_link" >  Mechanical Engineering</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>mep-engineering" class="pricing_link" >   MEP Engineering</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>civil-engineering" class="pricing_link" >  Civil Engineering</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>electronics-engineering" class="pricing_link" >  Electronic Engineering</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>/electrical-engineering" class="pricing_link" >  Electrical Engineering</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>architectural-drafting" class="pricing_link" >  Architectural Drafting</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>construction-drawing" class="pricing_link" >  Construction Drawing</a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>" class="pricing_link" >  Architectural Visualisation </a>
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Mobile Developers   <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        $35 onwards
        </div>
        <div class="list_data">
        $230 onwards
        </div>
        <div class="list_data">
        $920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>ios-development" class="pricing_link" >  IOS Development</a>
        </div>
        <div class="list_data">
        $8
        </div>
        <div class="list_data">
        $60
        </div>
        <div class="list_data">
        $400
        </div>
        <div class="list_data">
        $1,600
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>android-app-development" class="pricing_link" > Android App Development</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>windows-application-development" class="pricing_link" > Windows App Development</a>
        </div>
        <div class="list_data">
        $8
        </div>
        <div class="list_data">
        $60
        </div>
        <div class="list_data">
        $400
        </div>
        <div class="list_data">
        $1,600
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>hybrid-app-development" class="pricing_link" >  Hybrid App Development</a>
        </div>
        <div class="list_data">
        $8
        </div>
        <div class="list_data">
        $60
        </div>
        <div class="list_data">
        $400
        </div>
        <div class="list_data">
        $1,600
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>native-app-developers" class="pricing_link" >  Native App Development</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>wearable-mobile-developers" class="pricing_link" > WEARABLE APP DEVELOPMENT</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>custom-app-development" class="pricing_link" >  CUSTOM APP DEVELOPMENT</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>app-maintanance-sevices" class="pricing_link" >  APP MAINTENANCE & SUPPORT</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>migration-app-porting" class="pricing_link" > MIGRATION & APP PORTING </a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>xamarin-app-development" class="pricing_link" >  XAMARIN APP DEVELOPMENT </a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>mobile-game-development" class="pricing_link" >  MOBILE GAME DEVELOPMENT </a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
          <a href="<?=home_path() ?>augmented-reality-development" class="pricing_link" >  AUGMENTED REALITY DEVELOPMENT</a>
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $230
        </div>
        <div class="list_data">
        $920
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Finance & Accounts Experts  <span>▼</span>
        </div>
        <div class="list_data">
        $10 onwards
        </div>
        <div class="list_data">
        $70 onwards
        </div>
        <div class="list_data">
        $480 onwards
        </div>
        <div class="list_data">
        $1,920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        PAYROLL Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Tax Preparation Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Accounting Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Book keeping Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Financial Analysis Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Financial Management Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
         Medical Process Outsourcing    <span>▼</span>
        </div>
        <div class="list_data">
        $10 onwards
        </div>
        <div class="list_data">
        $70 onwards
        </div>
        <div class="list_data">
        $480 onwards
        </div>
        <div class="list_data">
        $1,920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        Medical Billing Service
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical coding Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical Data Entry Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical Record Indexing Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical Image Enhancement Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Teleradiology Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical Transcription Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Insurance Verification Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical Account Recievable Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Healthcare Revenue Cycle Management
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical Claim Processing Services
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Medical Illustration and Animation Services
        </div>
        <div class="list_data">
        $15
        </div>
        <div class="list_data">
        $100
        </div>
        <div class="list_data">
        $60
        </div>
        <div class="list_data">
        $2,600
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Legal Process Outsourcing  <span>▼</span>
        </div>
        <div class="list_data">
        $10 onwards
        </div>
        <div class="list_data">
        $70 onwards
        </div>
        <div class="list_data">
        $480 onwards
        </div>
        <div class="list_data">
        $1,920 onwards
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        Legal Assistance
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Paralegal Specialist
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        LEGAL SUPPORT SERVICES
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        PATENT ATORNEYS
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
         LEGAL RESEARCH
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        LEGAL ANALYSIS
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        IP Contract Drafting
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
         Litigation Support
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Legal Transcription
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
    </div>


    <div class="accordion">
      <div class="list_row">
        <div class="list_data">
        Hire Virtual Assistant (VA)   <span>▼</span>
        </div>
        <div class="list_data">
        $5 onwards
        </div>
        <div class="list_data">
        
        </div>
        <div class="list_data">
    
        </div>
        <div class="list_data">
        
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        Personal Assistant
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Administrative Assistant
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Book Keeping & Accounting
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Customer Support
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
         Social Media Management
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Excel Management
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Customer Email Managemnt
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Transcript Management
        </div>
        <div class="list_data">
        $5
        </div>
        <div class="list_data">
        $35
        </div>
        <div class="list_data">
        $240
        </div>
        <div class="list_data">
        $720
        </div>
      </div>
      <div class="list_row">
        <div class="list_data">
        Legal Transcription
        </div>
        <div class="list_data">
        $10
        </div>
        <div class="list_data">
        $70
        </div>
        <div class="list_data">
        $480
        </div>
        <div class="list_data">
        $1,920
        </div>
      </div>
    </div>


     <div class="accordion">
      <div class="list_row">
        <div class="list_data">
         Outsource To India <span>▼</span>
        </div>
        <div class="list_data">
        
        </div>
        <div class="list_data">
        
        </div>
        <div class="list_data">
    
        </div>
        <div class="list_data">
        
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="list_row">
        <div class="list_data">
        All Services Main Heading
        </div>
        <div class="list_data">
      
        </div>
        <div class="list_data">
      
        </div>
        <div class="list_data">
        
        </div>
        <div class="list_data">
        
        </div>
      </div>


    

    


    

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
    </script>
  </section>






  <!-- -------------------------- -->
  <!-- Header JS of the page  -->
  <!-- -------------------------- -->
  <?php include_once page_bottom ?>

  <script>

  </script>
</body>


</html>