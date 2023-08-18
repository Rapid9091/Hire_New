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
         Web Development Services
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
         CMS Development Services
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
         Software Development Services
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
         DataBase Development Services
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
         IT security Services
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
         Machine Learning Services
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
         Network Installation Services
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
         Frontened Development Services
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
         Backened Development Services
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
         FullStack Development Services
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
         Ecommerce Web Development
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
         Customer Mail Handling
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
        Chargebacks Handling
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
         Amazon Account Handling
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
         Ebay Account Handling
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
         Walmart Account Handling
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
       Dropshipping Store Handling
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
        Sales Funnel Development + Support
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
         Google Reviews Services
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
         Search Engine Optimization (SEO)
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
         Social Media Handler
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
         Email Marketing Services
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
         Local SEO
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
         Franchise SEO
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
         Content Marketing Services
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
         Link Building
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
         Online Reputation Management (ORM)
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
         Conversion Rate Optimization (CRO) 
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
        Amazon Marketing Services (AMS)
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
         PPC Advertisement Services
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
         Social Media Advertisement Services
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
        Video Production Services
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
         Content Writing Services
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
         Video Topic Strategist
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
         Camera Man Services
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
         Wedding Video Shooting Services
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
        Movie Director Services
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
        Movie Script Writer Services
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
        Movie Camera Man Services
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
         Hire Actor/Actress
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
        Short Movie - Complete - 43 minutes
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
        Articles & Blogs
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
        Landing & Sales Pages
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
        Technical & Medical
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
        Social Media Content
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
        Ebook & Brochure
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
         Speeches & Reviews
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
        Travel & Lifestyle
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
        White Papers
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
        Gaming/ Movie Script 
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
        Product & Services Descriptions
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
        Editing & Proofreading
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
        Books & Magazines
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
        Legal Content
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
        CVs & Cover Letter
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
         Mad Fiction Writer (Magic,Horror etc.)
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
         Autocadd
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
         Mechanical Engineering
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
        MEP Engineering
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
        Civil Engineering
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
        Electronic Engineering
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
        Electrical Engineering
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
        Architectural Drafting
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
        Construction Drawing
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
         Architectural Visualisation 
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
        IOS Development
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
        Android App Development
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
        Windows App Development
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
         Hybrid App Development
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
        Native App Development
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
        WEARABLE APP DEVELOPMENT
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
        CUSTOM APP DEVELOPMENT
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
        APP MAINTENANCE & SUPPORT
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
        MIGRATION & APP PORTING 
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
        XAMARIN APP DEVELOPMENT 
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
        MOBILE GAME DEVELOPMENT 
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
        AUGMENTED REALITY DEVELOPMENT
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