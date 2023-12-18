<?php get_header(); ?>

<section class="banner d-flex justify-content-center align-items-center " style="position: relative; height: 100vh; overflow: hidden;">

<!-- Contenu de la section accueil -->
<div class="container-fluid p-0">
    <?php $image_url = wp_get_attachment_url(22); ?>
    <img 
        src="<?= $image_url; ?>"
        alt="banner-colere | <?= bloginfo('title'); ?>"
        style="margin-top: 0%; width: 100%; height: auto;"
        id="banner-image"
    />
    <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)"></div>
    <!-- Contenu centré au milieu de l'image -->
    <div class="row position-absolute top-50 start-50 translate-middle text-center w-100">
        <div class="col-12" >
            <h1 id="titre">Apprivoisez la Colère Naturellement pour Retrouver l’Harmonie </h1>
            <h3 class="py-5 white-color">Découvrez trois approches simples mais puissantes pour apprivoisez votre colère. Libérez-vous de votre colère et vivez une vie plus sereine dès maintenant !</h3>
            <!-- <a href="quiz.php" class="btn rounded-50" id="bouton">Commencer le test</a> -->
            <a href="<?= home_url('/quiz'); ?>" class="btn btn-order btn-outline-light rounded-pill ">Commencer le test</a>
          </div>
    </div>
</div>
</section>