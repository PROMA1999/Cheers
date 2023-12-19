<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg w-100" style="position:absolute; z-index:1">
        <div class= "container-fluid">
            <a href="<?= home_url('/index'); ?>">
                <?php $image_url = wp_get_attachment_url(35); ?>
                <img src="<?=$image_url;?>" class="logonoir"/>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item pe-4">
                        <a class="btn btn-order2 btn-outline-dark rounded-pill" href="<?= home_url('/quiz'); ?>">Quiz</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a href="https://cheers.emu.isfsc.be/index#nos-conseils" class="btn btn-order2 btn-outline-dark rounded-pill">Nos conseils</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="btn btn-order2 btn-outline-dark rounded-pill" href="#">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
