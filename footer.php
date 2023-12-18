
<footer>
    <div class="footer-content">
        <!-- logo sections footer -->
        <div class="col-lg-2 col-12 footer-section"> 
            <?php $image_url = wp_get_attachment_url(35); ?>
            <img src="<?=$image_url;?>" class="logonoir"/>
        </div>
        <div class="col-lg-2 col-12 footer-section">
            <h6>info@cheers.be</h6>
            <h6>+324867594</h6>
        </div>
        <div class="col-lg-2 col-12 footer-section">
            <h6>Rue des Lauriers 100</h6>
            <h6>Bruxelles, 1170</h6>
        </div>
        <div class="col-lg-2 col-12 footer-section">
            <h6>Mentions légales</h6>
        </div>
        <div class="col-lg-2 col-12 footer-section">
            <h6>&copy; <?php echo date('Y'); ?> Cheers Tous droits réservés.</h6>
        </div>
        <div class="col-lg-2 col-12 footer-section">
            <a href="https://www.instagram.com">
                <?php $image_url = wp_get_attachment_url(33); ?>
                <img src="<?=$image_url;?>" class="logo-rs"/> 
            </a>
            <a href="https://www.tiktok.com/fr/">
                <?php $image_url = wp_get_attachment_url(34); ?>
                <img src="<?=$image_url;?>" class="logo-rs"/>
            </a>
            <a href="https://www.facebook.com/"> 
                <?php $image_url = wp_get_attachment_url(32); ?>
                <img src="<?=$image_url;?>" class="logo-rs"/>
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>