<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheers</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <section class="banner d-flex justify-content-center align-items-center" style="position: relative; height: 100vh; overflow: hidden;">
        <header style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('<?php echo wp_get_attachment_image_url(9, 'full'); ?>'); z-index: -1;"></div>
                <nav id="navBar">
                    <?php $image_url = wp_get_attachment_url(19); ?>
                    <img src="<?=$image_url;?>" class="logo">
                    <ul id="buttonNavBar">
                        <li><button type="button" class="button-custom button-navBar"><a href="quiz.php">Quiz</a></button></li>
                        <li><button type="button" class="button-custom button-navBar"><a href="">Nos conseil</a></button></li>
                        <li><button type="button" class="button-custom button-navBar"><a href="">Profil</a></button></li>
                    </ul>
                </nav>
            </div>
        </header>