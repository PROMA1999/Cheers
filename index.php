<?php get_header(); ?>
<body>
    <nav class="navbar navbar-expand-lg w-100">
        <div class= "container-fluid">
            <img src="img/logocheers.png" style="height:50%; width: 10%;"/>
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
    <section class="banner d-flex justify-content-center align-items-center">
        <div class="container">
            <!-- Contenu centré au milieu de l'image -->
            <div class="row position-absolute top-50 start-50 translate-middle text-center">
                <div class="col-12" id="titre">
                    <h1 class="py-3">Ressentez, évaluez,<br> Santé !</h1>
                    <h3 class="py-5">Évaluez votre santé mentale grâce à notre questionnaire  et trouvez les solutions qui vous correspondent le mieux !</h3>
                    <a href="#" class="btn rounded-50" id="bouton">Commencer le test</a>
                </div>
            </div>
        </div>
    </section>

    <!--A PROPOS-->
    <section class="py-5">
    <div class="card mb-3 align-items-center" style="width: 1300px;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="img/apropos.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Bienvenue sur Cheers
                <br>
                Votre compagnon dédié à la santé mentale et au bien-être émotionnel.
                <br>
                Notre Mission
                <br>
                Fournir des conseils, des informations et des solutions personnalisées pour naviguer à travers les défis émotionnels de la vie.
                <br>
                Quiz interactif personnalisé
                <br>
                Comprenez vos besoins individuels avec notre quiz interactif. Recevez des recommandations spécifiques pour gérer le stress, améliorer le sommeil et bien plus encore.
                <br>
                Ressources Naturelles et Approches Holistiques
                <br>
                Cheers vous guide avec des ressources naturelles et des approches holistiques pour votre bien-être émotionnel.
                <br>
                Explorez notre Collection
                <br>
                Découvrez des articles sur une variété de sujets et des remèdes naturels pour favoriser la santé mentale et émotionnelle.
                <br>
                Rejoignez la Communauté Cheers
                <br>
                Embarquez avec nous dans ce voyage vers une vie émotionnelle épanouissante. Prendre soin de soi devrait être aussi naturel que de dire "Cheers" à la vie</p>
            </div>
        </div>
        </div>
    </div>
    </section>
   
    
</body>

<?php get_footer(); ?>