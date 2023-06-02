<?php
include_once "../../init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 page</title>
    <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>

    <?php include_once head; ?>

    <style>
        body {
            background-color: var(--dark-color);
            color: #ffffff;
        }

        .mainbox {
            background-color: var(--dark-color);
            padding-top: 8%;
        }

        .center {
            gap: 10px;
        }

        .err {
            font-size: 11rem;
            left: 20%;
            top: 8%;
        }

        .far {
            font-size: 8.5rem;
        }

        .err2 {
            color: #ffffff;
            font-size: 11rem;
        }

        .msg {
            text-align: center;
            font-size: 1.6rem;
            width: 75%;
        }

        a {
            text-decoration: none;
            color: vaR(--pink);
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <body>
        <?php include_once header; ?>

        <center>
            <div class="mainbox">
                <div class="center flex-center-center">
                    <div class="err">4</div>
                    <i class="far fa-question-circle fa-spin" title="404 page"></i>
                    <div class="err2">4</div>
                </div>
                <div class="msg">Maybe this page moved? Got deleted? Is hiding out in quarantine? Never existed in the first place?<p>Let's go <a href="<?= home_path() ?>" title="Hire virtual Employee">home</a> and try from there.</p>
                </div>
            </div>
        </center>

        <!-- -------------------------- -->
        <!-- Page bottom includes footer and some global script -->
        <!-- -------------------------- -->
        <?php include_once page_bottom ?>
    </body>

</html>