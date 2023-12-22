<?php include 'header2.php'; ?>

<section class="banner banner-article d-flex justify-content-center align-items-center ">
  <!-- Contenu de la section accueil -->
  <div class="container-fluid p-0">
    <?php $image_url = wp_get_attachment_url(57); ?>
    <img 
      src="<?= $image_url; ?>"
      alt="banner-depression | <?= bloginfo('title'); ?>"
      style= "width: 100%;"
      class= "article-cover"
    />
    <div class="titre-article row position-absolute top-50 start-50 translate-middle w-100">
      <div class="col-lg-9">
        <h1>Se Libérer De La Dépression : 2 Méthodes Naturelles à Essayer</h1>
        <h3>Découvrez <span class="text-vert">deux approches</span> simples mais puissantes pour traiter la dépression <br><span class="text-vert">sans médicaments.</h3>
        <?php
        $image_url = wp_get_attachment_image_src(40, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="flèche bas | <?= bloginfo('title'); ?>" class="fleche-bas">
      </div>
    </div>
  </div>
</section>



<section class="texte-article">
    <h2>Pouvoirs des Herbes Adaptogènes contre la Dépression</h2>
    <p><strong>Herbes Adaptogènes pour la Sérénité : </strong> Explorez des herbes adaptogènes telles que l'ashwagandha, la passiflore et le millepertuis. Ces plantes sont reconnues pour leur capacité à équilibrer les neurotransmetteurs et à favoriser une réponse émotionnelle positive, contribuant ainsi à apaiser les sentiments dépressifs.</p>
    <p><strong>Énergie Positive avec l'Exposition au Soleil :</strong>  Profitez de l'exposition régulière au soleil pour stimuler la production de vitamine D,  une carence en vitamine D est liée à la dépression, et passer du temps à l'extérieur peut améliorer l'humeur en augmentant les niveaux de sérotonine.</p>
    <p class="mb-5"><strong>Décorez votre espace avec des objets liés à des souvenirs heureux </strong> : entourant votre quotidien de rappels visuels de la positivité.</p>
    <br>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(69, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="depression1 | <?= bloginfo('title'); ?>">
    </div>
</section>
<section class="texte-article">
    <h2>Réduisez le Stress avec la Méditation et l'Exercice</h2>
    <p><strong>Méditation Facile : </strong>Prenez quelques minutes chaque jour pour méditer. </p>
    <p class="mb-5"><strong>Marchez vers la Bonne Humeur :</strong> Une simple promenade quotidienne libère des endorphines, les hormones du bonheur.</p>
    <div class="img-article mb-5"> 
        <?php
        $image_url = wp_get_attachment_image_src(70, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="depression2 | <?= bloginfo('title'); ?>">
    </div>
</section>

<div class="disclaimer">
    <p>Libérez vous naturellement de la dépression en adoptant de petits changements dans votre vie quotidienne. N'oubliez pas, consultez toujours un professionnel de la santé pour des conseils adaptés.</p>
</div>



    <!--NOS CONSEILS-->
    <section class="py-4">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-8 ">
            <h3>Autres articles qui peuvent vous intéresser</h3>
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


<?php get_footer(); ?>
