<?php get_header(); ?>

    <section class="banner d-flex justify-content-center align-items-center " style="position: relative; height: 100vh; overflow: hidden;">

        <!-- Contenu de la section accueil -->
        <div class="container-fluid p-0">
            <?php $image_url = wp_get_attachment_url(9); ?>
            <img 
                src="<?= $image_url; ?>"
                alt="plage | <?= bloginfo('title'); ?>"
                style="margin-top: 100px; width: 100%; height: auto;"
                id="banner-image"
            />
            <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)"></div>
            <!-- Contenu centré au milieu de l'image -->
            <div class="row position-absolute top-50 start-50 translate-middle text-center w-100">
                <div class="col-12" >
                    <h1 id="titre">Ressentez,évaluez,<br> Santé !</h1>
                    <h3 class="py-5 white-color">Évaluez votre santé mentale grâce à notre questionnaire<br>  et trouvez les solutions qui vous correspondent le mieux !</h3>
                    <a href="<?= home_url('/quiz'); ?>" class="btn btn-order btn-outline-light rounded-pill">Commencer le test</a>
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
                <div class="col-md-8" >
                    <div class="card-body text-sand-background">
                            
                        <h2 class="card-title mb-4 vert-a-propos">Bienvenue sur Cheers !</h2>
                        <h3 class="card-title mb-5">Votre compagnon dédié à la santé mentale et au bien-être émotionnel.</h3>
                        <div class="extra-space">
                        </div> <!-- Espacement supplémentaire -->
                        <div class="row">
                            <div class="col-md-5">
                              
                                <h3 class="card-subtitle mb-4 orange-a-propos">Notre Mission</h3>
                                <p class="card-text mb-5">Fournir des conseils, des informations et des solutions personnalisées pour naviguer à travers les défis émotionnels de la vie.</p>
                             
                              
                                <h3 class="card-subtitle mb-4 orange-a-propos">Quiz interactif personnalisé</h3>
                                <p class="card-text mb-5">Comprenez vos besoins individuels avec notre quiz interactif. Recevez des recommandations spécifiques pour gérer le stress, améliorer le sommeil et bien plus encore.</p>
                            
                            </div>
                          
                            <div class="col-md-5">
                              
                                <h3 class="card-subtitle mb-4 orange-a-propos">Rejoignez Cheers</h3>
                                <p class="card-text mb-5">Embarquez avec nous dans ce voyage vers une vie émotionnelle épanouissante. Prendre soin de soi devrait être aussi naturel que de dire "Cheers" à la vie.</p>
                              
                              
                                <h3 class="card-subtitle mb-4 orange-a-propos">Ressources Naturelles et Approches Holistiques</h3>
                                <p class="card-text mb-5">Cheers vous guide avec des ressources naturelles et des approches holistiques pour votre bien-être émotionnel a travers nos différents rubriques.</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--NOS CONSEILS-->
    <section class="py-5 fill-height-screen">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-8 ">
            <h2 class="mb-4 vert-a-propos">Découvrez nos conseils</h2>
            <h3>Parcourez ici nos différents conseils sur la santé mentale et trouvez des remèdes naturels.</h3>
          </div>
        </div>
      </div>
      
      <div class="container pt-5 pb-5">
        <div class="row">      
          <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="Image 1" src="https://via.placeholder.com/300x200" width="300" height="200">
                        <div class="card-body">
                          <h4 class="card-title">Titre de l'article 1</h4>
                          <p class="card-text">Description de l'article 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="Image 2" src="https://via.placeholder.com/300x200" width="300" height="200">
                        <div class="card-body">
                          <h4 class="card-title">Titre de l'article 2</h4>
                          <p class="card-text">Description de l'article 2. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="Image 3" src="https://via.placeholder.com/300x200" width="300" height="200">
                        <div class="card-body">
                          <h4 class="card-title">Titre de l'article 3</h4>
                          <p class="card-text">Description de l'article 3. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="Image 4" src="https://via.placeholder.com/300x200" width="300" height="200">
                        <div class="card-body">
                          <h4 class="card-title">Titre de l'article 4</h4>
                          <p class="card-text">Description de l'article 4. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>


    <script>
      // Script pour défilement continu du carousel
      $('#carouselExampleIndicators2').on('slide.bs.carousel', function (e) {
        const $e = $(e.relatedTarget);
        const idx = $e.index();
        const itemsPerSlide = 1; // Nombre de cartes à afficher à la fois

        const totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
          const it = itemsPerSlide - (totalItems - idx);
          for (let i = 0; i < it; i++) {
            // Ajoute les cartes nécessaires au début si on est à la fin
            if (e.direction === 'left') {
              $('.carousel-item').eq(i).appendTo('.carousel-inner');
            } else {
              $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
          }
        }
      });
    </script>



    <!--NEWSLETTER-->

    <section class="subscription-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="subscription-box">
                        <h2 class="subscription-title">Abonnez-vous pour être au courant de nos prochains articles !</h2>
                        <form class="subscription-form">
                            <input type="email" class="form-control" placeholder="Entrez votre adresse e-mail" required>
                            <button type="submit" class="btn btn-outline-light">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  </body>

<?php get_footer(); ?>