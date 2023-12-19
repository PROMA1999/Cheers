<?php include 'header2.php'; ?>

<section class="banner d-flex justify-content-center align-items-center ">

<!-- Contenu de la section accueil -->
<div class="container-fluid p-0">
    <?php $image_url = wp_get_attachment_url(22); ?>
    <img 
        src="<?= $image_url; ?>"
        alt="banner-colere | <?= bloginfo('title'); ?>"
        style="margin-top: 0px; width: 100%; height: auto;"
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

<section>

    <h2>Viser la sérénité instantanée en cas de Colère </h2>
    <p class="text-left m-3">Formulez des affirmations positives spécifiques à la situation de colère, telles que "je choisis la paix intérieure" ou "Je contrôle ma réaction".<br>Répétez ces affirmations calmement pour vous-même afin de changer progressivement votre état d'esprit et d'instaurer une attitude plus constructive face à la colère.
</p>
    <p class="text-left m-3">Évasion Temporaire par l'Imaginaire : Créez un refuge mental en imaginant un endroit sûr et paisible. Lorsque la colère survient, prenez une "pause imaginaire" en vous transportant mentalement vers cet endroit, permettant ainsi un éloignement temporaire émotionnel et la création d'un espace intérieur apa</p>
    <div class="text-center my-3">
        <?php
        $image_url = wp_get_attachment_image_src(23, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="colere1 | <?= bloginfo('title'); ?>">
    </div>

</section>