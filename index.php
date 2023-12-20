  <?php get_header(); ?>


   <!--SECTION ACCUEIL-->
  <section class="banner d-flex justify-content-center align-items-center">
    <div class="container-fluid p-0">
        <?php $image_url = wp_get_attachment_url(60); ?>
        <img 
            src="<?= $image_url; ?>"
            alt="plage | <?= bloginfo('title'); ?>"
            class="img-fluid" style="margin-top: 100px;"
        />
        <div class="row position-absolute top-50 start-50 translate-middle text-center w-100">
            <div class="col-12">
                <h1 id="titre-blanc" class="text-responsive">RESSENTEZ, ÉVALUEZ,<br> SANTÉ !</h1>
                <h3 id="titre-blanc" class="mb-5 text-responsive">Évaluez votre santé mentale grâce à notre questionnaire<br> et trouvez les solutions qui vous correspondent le mieux !</h3>
                <a href="<?= home_url('/quiz'); ?>" class="btn btn-order btn-outline-light rounded-pill btn-responsive">Commencer le test</a>
            </div>
        </div>
    </div>
  </section>




  <!--A PROPOS-->
  <section class="fill-height-screen-apropos">
    <div class="px-0 position-relative">
      <div class="row row-apropos">
        <div class="col-md-4 px-0 position-relative">
          <?php
          $image_url = wp_get_attachment_image_src(10, 'full');
          ?>
          <img src="<?= $image_url[0]; ?>" alt="a-propos-cheers | <?= bloginfo('title'); ?>" class="fill-height-left"/>
        </div>
        <div class="col-md-8" >
          <div class="card-body p-5">
            <div>     
              <h2>Bienvenue sur Cheers !</h2>
              <h3>Votre compagnon dédié à la santé mentale et au bien-être émotionnel.</h3>
            </div>
            <div class="row row-paragraphes">
              <div class="col-md-5">
                <h3 id="titre-orange">Notre Mission</h3>
                <p>Fournir des conseils, des informations et des solutions personnalisées pour naviguer à travers les défis émotionnels de la vie.</p>
                    
                    
                <h3 id="titre-orange">Quiz interactif personnalisé</h3>
                <p>Comprenez vos besoins individuels avec notre quiz interactif. Recevez des recommandations spécifiques pour gérer le stress, améliorer le sommeil et bien plus encore.</p>
              </div>
                
              <div class="col-md-5" id="colonne2-apropos">
                    
                <h3 id="titre-orange">Rejoignez Cheers</h3>
                <p>Embarquez avec nous dans ce voyage vers une vie émotionnelle épanouissante. Prendre soin de soi devrait être aussi naturel que de dire "Cheers" à la vie.</p>
                    
                    
                <h3 id="titre-orange">Ressources Naturelles et Approches Holistiques</h3>
                <p>Cheers vous guide avec des ressources naturelles et des approches holistiques pour votre bien-être émotionnel a travers nos différents rubriques.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--NOS CONSEILS-->
  <section  id="nos-conseils" class="py-4">
    <div class="container">
      <div class="row justify-content-start">
        <div class="col-md-8 ">
          <h2>Découvrez nos conseils</h2>
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
                    <a href="<?= home_url('/article-anxiete'); ?>"> 
                      <div class="card hop">
                        <?php
                        $image_url = wp_get_attachment_image_src(29, 'full');
                        ?>
                        <img src="<?= $image_url[0]; ?>" alt="anxiete | <?= bloginfo('title'); ?>">
                        <div class="card-body" >
                          <h4 class="card-title">Anxiété</h4>
                          <p>Plongez dans notre article pour mieux comprendre et apprendre des stratégies pour apaiser l'anxiété au quotidien.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4 mb-3">
                    <a href="<?= home_url('/article-depression'); ?>">  
                      <div class="card hop">
                        <?php
                        $image_url = wp_get_attachment_image_src(27, 'full');
                        ?>
                        <img src="<?= $image_url[0]; ?>" alt="depression | <?= bloginfo('title'); ?>" >
                        <div class="card-body">
                          <h4 class="card-title" id="depression-titre">Dépression</h4>
                          <p>Explorez notre article pour naviguer à travers les moments sombres vers la lumière de l'espoir.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4 mb-3">
                    <a href="<?= home_url('/article-colere'); ?>">
                      <div class="card hop">
                        <?php
                        $image_url = wp_get_attachment_image_src(26, 'full');
                        ?>
                        <img src="<?= $image_url[0]; ?>" alt="colere | <?= bloginfo('title'); ?>">
                        <div class="card-body">
                          <h4 class="card-title" id="colere-titre">Colère</h4>
                          <p>Découvrez des astuces naturelles pour apprendre à canaliser la colère et en faire une force positive dans votre vie.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <a href="<?= home_url('/article-surmenage'); ?>">
                      <div class="card hop">
                        <?php
                        $image_url = wp_get_attachment_image_src(28, 'full');
                        ?>
                        <img src="<?= $image_url[0]; ?>" alt="fatigue | <?= bloginfo('title'); ?>">
                        <div class="card-body">
                          <h4 class="card-title">Fatigue</h4>
                          <p>Besoin de recharger vos batteries ? Nous vous offrons des conseils pratiques pour retrouver votre énergie et vitalité.</p>
                        </div>
                      </div>
                    </a>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <a class="btn mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
            <?php
              $image_url = wp_get_attachment_image_src(25, 'full');
            ?>
            <img src="<?= $image_url[0]; ?>" alt="fatigue | <?= bloginfo('title'); ?>">   
          </a>
          <a class="btn  mb-3" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
            <?php
              $image_url = wp_get_attachment_image_src(30, 'full');
            ?>
            <img src="<?= $image_url[0]; ?>" alt="fatigue | <?= bloginfo('title'); ?>"> 
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
              <div class="col-md-8 text-center">
                  <div class="subscription-box">
                      <h2 id="titre-blanc" class="mb-5">Abonnez-vous pour être au courant de nos prochains articles !</h2>
                      <form class="subscription-form">
                          <input type="email" class="form-control rounded-pill" placeholder="Introduisez votre e-mail" required>
                          <button type="submit" class="btn btn-order btn-outline-light rounded-pill">Valider</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</body>

<?php get_footer(); ?>