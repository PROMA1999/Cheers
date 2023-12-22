<?php include 'header2.php'; ?>


    <div class="contenu-profil container">
        <div class="row">
            <div class="col-md-4">
            <div class="left-panel">
            <?php
        $image_url = wp_get_attachment_image_src(147, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="Profil | <?= bloginfo('title'); ?>">
                <p><strong>Clara Dupain</strong></p>
                <p>claradup@gmail.com</p>
            <button class="btn btn-order2 btn-outline-dark rounded-pill">Modifier la photo</button>
            </div>
            </div>
            <div class="col-md-8 py-3">
            <h1 class="title-above-right-panel">Dernier résultat</h1>
            <div class="right-panel">
                <h2>Votre évaluation indique un mélange de signes</h2>
                <p>Votre évaluation suggère quelques zones de préoccupation mais aussi des aspects positifs. Bien que ces signaux puissent ne pas indiquer une urgence immédiate, vous pourriez bénéficier d'un soutien supplémentaire. Prendre du temps pour vous-même, discuter avec des proches ou rechercher l'aide d'un professionnel de la santé mentale peuvent contribuer à améliorer votre bien-être.</p>
                <p>N'oubliez pas que prendre soin de sa santé mentale est essentiel. Consultez nos conseils sur la santé mentale et nos remèdes naturels pour découvrir des astuces et des conseils pour cultiver votre bien-être mental au quotidien.</p>
            </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>