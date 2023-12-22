<?php include 'header2.php'; ?>

<body>
    <div class="error-container">
        <div class="titre-error">
            <div class="side-image left">
                <?php $image_url = wp_get_attachment_url(144); ?>
            <img src="<?=$image_url;?>" class="logonoirfooter"/>
            </div>
    
            <div class="espace-error">
                <h1>ERROR<br>404</h1> 
            </div>
            <div class="side-image right">
                <?php $image_url = wp_get_attachment_url(144); ?>
                <img src="<?=$image_url;?>" class="logonoirfooter"/>
            </div>
        </div>
       
        <p class="error-text">Oups, il semble que cette page soit en méditation… Nous n’avons pas pu trouver la page que vous cherchiez.<br>
        Elle est peut-être en train de faire une pause pour se recentrer, tout comme nous devrions le faire de temps en temps.</p>
    </div>
</body>
</html>

<?php get_footer(); ?>
