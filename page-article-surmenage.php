<?php include 'header2.php'; ?>

<section class="banner banner-article d-flex justify-content-center align-items-center ">
  <!-- Contenu de la section accueil -->
  <div class="container-fluid p-0">
    <?php $image_url = wp_get_attachment_url(58); ?>
    <img 
      src="<?= $image_url; ?>"
      alt="banner-colere | <?= bloginfo('title'); ?>"
      style= "width: 100%;"
      class= "article-cover"
    />
    <div class="titre-article row position-absolute top-50 start-50 translate-middle w-100">
      <div class="col-lg-9">
        <h1>Boostez votre Vitalité Et Evitez le Surmenage </h1>
        <h3>Un Guide Complet de<span class="text-vert">Médecine Naturelle</span> pour Éradiquer la Fatigue et Dompter le Surmenage </h3><br>
        <?php
        $image_url = wp_get_attachment_image_src(40, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="flèche bas | <?= bloginfo('title'); ?>" class="fleche-bas">
      </div>  
    </div>
  </div>
</section>    

<section class="texte-article">
    <h2>Rééquilibrage Émotionnel par l'Énergie Vitale de la Nature</h2>
    <p><strong>Passez du temps en plein air :</strong>entourez vous de verdure et profitez du soleil, la nature stimule la production d'endorphines, qui est l'hormone du bonheur.</p>
    <p class="mb-5"><strong>Profitez d'une balade dans le parc :</strong>un pique-nique en forêt, ou simplement respirez l'air frais pour nourrir votre bien-être émotionnel et transformer la fatigue en vitalité positive.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(71, 'full');?>
        <img src="<?= $image_url[0]; ?>" alt="fatigue1 | <?= bloginfo('title'); ?>">
    </div>
</section>

<section class="texte-article">
    <h2>Renforcement Émotionnel avec des Plantes Adaptogènes</h2>
    <p><strong>Les herbes naturelles telles que le ginseng :</strong>la rhodiole et l'ashwagandha renforcent la résilience émotionnelle en aidant le corps à mieux faire face au stress et atténuent les effets néfastes du suraménagèrent.</p>
    <p class="mb-5"><strong>Intégrez lès dans votre routine sous forme de tisanes: </strong> de suppléments, ou en cuisine, pour soutenir votre énergie émotionnelle.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(65, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="fatigue2 | <?= bloginfo('title'); ?>">
    </div>
</section>





<section class="texte-article">
    <h2>Harmonisation Émotionnelle avec la Créativité </h2>
    <p><strong>Immergez vous dans des activités créatives telles que la peinture :</strong>l'écriture ou la pratique musicale, offrant ainsi des voies d'expression qui ont un effet apaisant sur l'esprit.</p>
    <p><strong>La libération émotionnelle </strong>à travers ces formes d'expression créative crée un équilibre mental: offrant un moyen unique de transcender la fatigue émotionnelle en transformant les sentiments négatifs en une source d'inspiration positive.</p>
    <p class="mb-5"><strong>Intégrez consciemment ces moments dans votre quotidien :</strong>l'acte créatif devient une source régénérante, nourrissant votre bien-être intérieur et contribuant à une perception plus lumineuse de la vie.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(72, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="fatigue3 | <?= bloginfo('title'); ?>">
    </div>
</section>



<div class="disclaimer">
    <p>Incorporez ces approches naturelles à votre routine quotidienne pour apaiser la fatigue tout en restant attentif à vos besoins émotionnels. N'hésitez pas à solliciter l'avis d'un professionnel de la santé pour un soutien personnalisé. Consultez nos articles pour des conseils supplémentaires sur la gestion de la fatigue et le maintien d'un bien-être émotionnel.</p>
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