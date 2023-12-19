<?php include 'header2.php'; ?>

<section class="banner banner-article d-flex justify-content-center align-items-center ">

    <!-- Contenu de la section accueil -->
    <div class="container-fluid p-0">
        <?php $image_url = wp_get_attachment_url(22); ?>
        <img 
            src="<?= $image_url; ?>"
            alt="banner-colere | <?= bloginfo('title'); ?>"
            style= "width: 100%;"
        />
        <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)"></div>

        <div class="titre-article row position-absolute top-50 start-50 translate-middle w-100">
            <div class="col-lg-9">
                <h1>Apprivoisez la Colère Naturellement pour Retrouver l’Harmonie</h1>
                <h3>Découvrez <span class="text-vert">trois approches</span> simples mais puissantes pour apprivoisez votre colère. <br>Libérez-vous de votre colère et vivez une vie plus sereine dès maintenant !</h3>
                <?php
                $image_url = wp_get_attachment_image_src(40, 'full');
                ?>
                <img src="<?= $image_url[0]; ?>" alt="flèche bas | <?= bloginfo('title'); ?>" class="fleche-bas">
            </div>
            
        </div>
    </div>
</section>


<section class="texte-article">
    <h2>Viser la sérénité instantanée en cas de Colère </h2>
    <p>Formulez des affirmations positives spécifiques à la situation de colère, telles que "je choisis la paix intérieure" ou "Je contrôle ma réaction".<br>Répétez ces affirmations calmement pour vous-même afin de changer progressivement votre état d'esprit et d'instaurer une attitude plus constructive face à la colère.</p>
    <p class="mb-5">Évasion Temporaire par l'Imaginaire : Créez un refuge mental en imaginant un endroit sûr et paisible. Lorsque la colère survient, prenez une "pause imaginaire" en vous transportant mentalement vers cet endroit, permettant ainsi un éloignement temporaire émotionnel et la création d'un espace intérieur apaisé.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(23, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="colere1 | <?= bloginfo('title'); ?>">
    </div>
</section>
