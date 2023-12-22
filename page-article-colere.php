<?php include 'header2.php'; ?>

<section class="banner banner-articles d-flex justify-content-center align-items-center ">
  <div class="container-fluid p-0">
    <?php $image_url = wp_get_attachment_url(56); ?>
    <img 
      src="<?= $image_url; ?>"
      alt="banner-colere | <?= bloginfo('title'); ?>"
      style= "width: 100%;"
      class= "cover"
    />
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
    <h2>Visez la sérénité instantanée en cas de Colère </h2>
    <p><strong>Formulez des affirmations positives </strong>spécifiques à la situation de colère, telles que "je choisis la paix intérieure" ou "Je contrôle ma réaction".<br>Répétez ces affirmations calmement pour vous-même afin de changer progressivement votre état d'esprit et d'instaurer une attitude plus constructive face à la colère.</p>
    <p class="mb-5"><strong>Évasion Temporaire par l'imaginaire</strong> : Créez un refuge mental en imaginant un endroit sûr et paisible. Lorsque la colère survient, prenez une "pause imaginaire" en vous transportant mentalement vers cet endroit, permettant ainsi un éloignement temporaire émotionnel et la création d'un espace intérieur apaisé.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(61, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="colere1 | <?= bloginfo('title'); ?>">
    </div>
</section>

<section class="texte-article">
    <h2>  Effectuez des routines pour vous aider à atténuer la  colère</h2>
    <p><strong>Établissez une routine</strong>, en effet un sommeil régulière et une routine journalère en définissant des heures fixes pour vous coucher et vous réveiller.</p>
    <p class="mb-5"><strong>Pratique du Journaling</strong> : tenez un journal comme moyen d'explorer et d'exprimer vos émotions, y compris la colère. Prenez le temps chaque jour pour écrire sur vos sentiments :  les déclencheurs potentiels et les solutions envisageables.<br> Cette forme d'auto-réflexion peut vous aider à comprendre et à canaliser la colère de manière constructive, favorisant ainsi un état émotionnel plus équilibré.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(62, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="colere2 | <?= bloginfo('title'); ?>">
    </div>
</section>

<section class="texte-article">
    <h2>Cultivez des Relations Positives pour Apaiser la Furie</h2>
    <p><strong>Partagez vos sentiments de manière ouverte et honnête avec les personnes de confiance autour de vous :</strong> car la communication transparente prévient l’accumulation de la colère et favorise une compréhension mutuelle plus profonde.</p>
    <p class="mb-5"><strong>Engagez vous dans des activités sociales plaisantes et apaisantes pour l’esprit : </strong>car ces interactions positives peuvent contrebalancer la tension émotionnelle en offrant des moments de détente et de connexion avec autrui.</p>
    <div class="img-article mb-5">
        <?php
        $image_url = wp_get_attachment_image_src(63, 'full');
        ?>
        <img src="<?= $image_url[0]; ?>" alt="colere3 | <?= bloginfo('title'); ?>">
    </div>
</section>

<div class="disclaimer">
    <p>Intégrez ces méthodes naturelles dans votre quotidien pour maîtriser la colère, tout en restant attentif à vos besoins émotionnels. Consultez un professionnel de la santé pour un soutien personnalisé. Explorez nos articles pour des informations complémentaires sur la gestion de la colère et le bien-être émotionnel.</p>
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