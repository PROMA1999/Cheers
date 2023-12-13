<?php get_header(); ?>
<body>
<nav class="navbar navbar-expand-lg" style="position: relative; overflow: hidden;">
    <div class="navbar-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('<?php echo wp_get_attachment_url(9); ?>'); z-index: -1;"></div>
        <div class= "container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item pe-4">
                        <a class="btn btn-order rounded-pill" id="boutonnav" href="#">Quiz</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="btn btn-order rounded-pill" id="boutonnav" href="#">Nos conseils</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="btn btn-order rounded-pill" id="boutonnav" href="#">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--ACCUEIL QUIZ-->
    <section class="banner d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container-fluid p-0">
            <?php $image_url = wp_get_attachment_url(9); ?>
            <img 
                src="<?= $image_url; ?>"
                alt="plage | <?= bloginfo('title'); ?>"
                style="margin-top: 100px; width: 100%; height: auto;"
                id="banner-image"
            />
            <!-- Contenu centré au milieu de l'image -->
            <div class="row position-absolute top-50 start-50 translate-middle text-center w-100">
                <div class="col-12" id="titre">
                    <h1 class="py-3">Ressentez, évaluez,<br> Santé !</h1>
                    <h3 class="py-5">Évaluez votre santé mentale grâce à notre questionnaire  et trouvez les solutions qui vous correspondent le mieux !</h3>
                    <a href="#" class="btn rounded-50" id="bouton">Commencer le test</a>
                </div>
            </div>
        </div>
    </section>




    <!--A PROPOS-->
    <section class="py-5 text-sand-background fill-height-screen">
        <div class="container px-0 h-100 position-relative">
            <div class="row h-100">
                <div class="col-md-4 px-0 position-relative">
                    <?php
                    $image_url = wp_get_attachment_image_src(10, 'full');
                    ?>
                    <img src="<?= $image_url[0]; ?>" alt="plage | <?= bloginfo('title'); ?>" class="fill-height-left" />
                </div>
                <div class="col-md-8">
                    <div class="card-body text-sand-background">
                            
                        <h2 class="card-title mb-4">Bienvenue sur Cheers !</h2>
                        <h3 class="card-title mb-5">Votre compagnon dédié à la santé mentale et au bien-être émotionnel.</h3>
                        <div class="extra-space">
                        </div> <!-- Espacement supplémentaire -->
                        <div class="row">
                            <div class="col-md-5">
                                <h3 class="card-subtitle mb-4">Notre Mission</h3>
                                <p class="card-text mb-5">Fournir des conseils, des informations et des solutions personnalisées pour naviguer à travers les défis émotionnels de la vie.</p>
                                <h3 class="card-subtitle mb-4">Quiz interactif personnalisé</h3>
                                <p class="card-text mb-5">Comprenez vos besoins individuels avec notre quiz interactif. Recevez des recommandations spécifiques pour gérer le stress, améliorer le sommeil et bien plus encore.</p>
                            </div>
                            <div class="col-md-5">
                                <h3 class="card-subtitle mb-4">Ressources Naturelles et Approches Holistiques</h3>
                                <p class="card-text mb-5">Cheers vous guide avec des ressources naturelles et des approches holistiques pour votre bien-être émotionnel.</p>
                                <h3 class="card-subtitle mb-4">Rejoignez la Communauté Cheers</h3>
                                <p class="card-text mb-5">Embarquez avec nous dans ce voyage vers une vie émotionnelle épanouissante. Prendre soin de soi devrait être aussi naturel que de dire "Cheers" à la vie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

    <!--NOS CONSEILS-->
    <section>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-8 custom-margin-left" id="nosconseils">
                    <h2 class="mb-4">Découvrez nos conseils</h2>
                    <h3 class="mb-5">Parcourez ici nos différents conseils sur la santé mentale et trouvez des remèdes naturels.</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="well"> 
                        <div id="myCarousel" class="carousel slide">
                        
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            
                        <div class="item active">
                            <div class="row-fluid">
                            <div class="col-md-4">
                                <a href="#x" class="thumbnail"><img 
                                    src="<?= wp_get_attachment_image_url(6); ?>"
                                    alt="plage | <?= bloginfo('title'); ?>"
                                    style="margin-top: 100px;"
                                    id="anxiete-image"
                                    style="max-width:100%;" />
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#x" class="thumbnail"><img 
                                    src="<?= wp_get_attachment_image_url(7); ?>"
                                    alt="plage | <?= bloginfo('title'); ?>"
                                    style="margin-top: 100px;"
                                    id="depression-image"
                                    style="max-width:100%;" />
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#x" class="thumbnail">
                                    <img 
                                    src="<?= wp_get_attachment_image_url(11); ?>"
                                    alt="plage | <?= bloginfo('title'); ?>"
                                    style="margin-top: 100px;"
                                    id="depression-image"
                                    style="max-width:100%;" />
                                </a>
                            </div>
                            <div class="col-md-4"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            </div><!--/row-fluid-->
                        </div><!--/item-->
                        
                        <div class="item">
                            <div class="row-fluid">
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            </div><!--/row-fluid-->
                        </div><!--/item-->
                        
                        <div class="item">
                            <div class="row-fluid">
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            </div><!--/row-fluid-->
                        </div><!--/item-->
                        
                        </div><!--/carousel-inner-->
                        
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                        </div><!--/myCarousel-->
                        
                    </div><!--/well-->   
                </div>
            </div>
        </div>
    </section>

    <!--NEWSLETTER-->

    <section class="subscription-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="subscription-box">
                        <h2 class="subscription-title">Abonnez-vous pour être au courant de nos prochains articles !</h2>
                        <form class="subscription-form">
                            <input type="email" class="form-control" placeholder="Entrez votre adresse e-mail" required>
                            <button type="submit" class="btn-submit">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

















   
    
</body>

<?php get_footer(); ?>