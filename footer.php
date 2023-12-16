
<footer>
    <div class="footer-content">
            <!-- logo sections footer -->
            <?php $image_url = wp_get_attachment_url(56); ?>
            <img src="<?=$image_url;?>" class="logo"/>

            <div class="footer-section">
                <h6>info@cheers.be</h6>
                <h6>+324867594</h6>
            </div>
            <div class="footer-section">
                <h6>Rue des Lauriers 100</h6>
                <h6>Bruxelles, 1170</h6>
            </div>
            <div class="footer-section">
                <h6>Mentions légales</h6>
            </div>
            <div class="footer-section">
                <h6>&copy; <?php echo date('Y'); ?> Cheers Tous droits réservés.</h6>
            </div>
            <div class="footer-section">
                <p>Instagram | Facebook</p>
            </div>
        </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>