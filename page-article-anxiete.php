<?php include 'header2.php'; ?>

<section class="banner banner-articles d-flex justify-content-center align-items-center ">
  <div class="container-fluid p-0">
    <?php $image_url = wp_get_attachment_url(55); ?>
    <img 
      src="<?= $image_url; ?>"
      alt="banner-anxiete | <?= bloginfo('title'); ?>"
      style= "width: 100%;"
      class= "cover"
    />
    <div class="titre-article row position-absolute top-50 start-50 translate-middle w-100">
      <div class="col-lg-9">
        <h1>Apaisez l’Anxiété en Nourrissant Votre Esprit </h1>
        <h3>Découvrez <span class="text-vert">deux approches</span> simples mais puissantes pour appaiser votre èsprit. <br><span class="text-vert">sans médicaments.</h3>
        <h3> Libérez-vous de l’anxiété et vivez une vie plus sereine dès maintenant !</h3>
        <?php
        $image_url = wp_get_attachment_image_src(40, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="flèche bas | <?= bloginfo('title'); ?>" class="fleche-bas">
      </div>
    </div>
  </div>
</section>

<section class="texte-article">
    <h2>Boostez votre Bien-Être : Les Secrets des Oméga-3 pour Apaiser l’Anxiété</h2>
    <p><strong>Équilibrez votre alimentation : </strong>pour contrer l’anxiété, car ce que  vous mangez peut réellement faire la différence.</p>
    <p><strong>Boostez avec des Nutriments Clés :</strong>  Intégrez des aliments riches en Oméga-3 tels que le poisson, les noix et les graines de lin pour favoriser une meilleure humeur.</p>
    <p class="mb-5"><strong>Favorisez le Tryptophane : </strong> Optez pour des sources de tryptophane comme les œufs, le poulet, les produits laitiers et les légumineuses pour stimuler la production de sérotonine, améliorant ainsi votre bien-être mental.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(67, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="anxiete1 | <?= bloginfo('title'); ?>">
    </div>
</section>




<section class="texte-article">
    <h2>Libérez vous du Stress avec des Pratiques Bien-Être </h2>
    <p><strong>Méditation Apaisante :</strong>Accordez vous quelques minutes chaque jour pour méditer, une pratique simple mais efficace pour alléger le fardeau de l’anxiété.</p>
    <p class="mb-5"><strong>Marche Salvatrice :</strong>Une promenade quotidienne peut libérer des endorphines, les hormones du bonheur, apportant un soulagement naturel à l’anxiété.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(68, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="anxiete2 | <?= bloginfo('title'); ?>">
    </div>
</section>


<div class="disclaimer">
  <p>Trouvez le soulagement naturel de l’anxiété en adoptant de petits changements dans votre routine quotidienne. N’oubliez pas, il est crucial de consulter un professionnel de la santé pour des conseils adaptés à votre situation individuelle. Votre bien-être mental est une priorité.</p>
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

