<?php
include_once '../init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>.

    <!-- <link rel="stylesheet" href="<?= get_css() ?>hire-developers/software_development.css"> -->
    <style>
        .hiring_step1{
            border-top: 2px solid rgba(26, 26, 26, 0.5);
            
        }
        .section-heading1{
            display: grid!important;
            align-items: center!important;
            justify-content: center!important;
            font-size: 40px!important;
            color: #2b2350;
            margin: 0!important;
            
    padding-top: 1%;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    font-weight: 700;

        }
        .main{
            display: flex!important;
            justify-content: center!important;
           
            margin: 20px auto!important;
            padding: 3%!important;
        }
        .flexs{
            text-align: center!important;
            width: 30%!important;
        }
        .step-dtll-heading2{
            font-weight: bolder!important;
            font-size: larger!important;
        }
        .step-dtll p {
            font-size: large!important;
        }
        .btn {
            background-color: #ed1575;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  /* margin: 4px 2px; */
  cursor: pointer;
  border-radius: 100px;
  justify-content: center;
  margin: auto;

        }
        .grid12{
            text-align: center;
        }
        .step_iconns{width: 100px;margin: auto;}
    </style>
    
</head>
<body>

<section class="hiring_step1">

<div class="grid12  why-row" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="hiring_step1_order-1">
        <div>
            <p class="section-heading">HIRE SEO SPECIALISTS ONLINE WITH EASY STEP</p>
            <!-- <p class="text hiring_step1_content">You won't have to deal with the hassles of traditional
                outsourcing thanks to our
                novel business model, which gives you complete control over who you work with.</p> -->
            <!-- <button class="btn hire-btn-new">Get Qoute</button> -->
        </div>
    </div>
    <div class="main">
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/brief.png" alt="hire graphic designer"
                    loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Talk To Us</p>
                <p>What sort of graphic design position are you seeking?</p>
            </div>
        </div>
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/handpick.png"
                    alt="hire legal process outsourcing" loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Handpick Best Expert</p>
                <p>We provide screened CVs of the Graphic Designing experts we've chosen.</p>
            </div>
        </div>
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/team.png" alt="hire graphic designer"
                    loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Build Your Team</p>
                <p>Phone or video conference interviews of selected candidates are available. You may assign
                    tests to them.</p>
            </div>
        </div>
        <div class="steps2 flexs">
            <div class="step_iconns">
                <img src="<?= get_img() ?>engineer-architecture/going.png" alt="hire graphic designer"
                    loading="lazy">
            </div>
            <div class="step-dtll">
                <p class="step-dtll-heading2">Get Going</p>
                <p>If you are pleased with the results, immediately hire them and get to work.</p>
            </div>
        </div>
        
    </div>
    <button class="btn hire-btn">Get Qoute</button>
</div>

</section>
</body>
</html>