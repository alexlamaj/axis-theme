</main>

<footer class="axis-footer">

    <div class="footer-top">

        <div class="footer-column">

            <div class="footer-logo"><?php echo axis_icon('logo-negative-300x147'); ?></div>

            <div class="socials">
                <a href="https://www.facebook.com/axismedical.gr/" aria-label="Facebook" target="_blank" rel="noopener"><?php echo axis_icon('facebook-icon'); ?></a>
                <a href="https://www.instagram.com/axismedical.gr/" aria-label="Instagram" target="_blank" rel="noopener"><?php echo axis_icon('instagram-icon'); ?></a>
                <a href="https://www.linkedin.com/company/axis-medical/" aria-label="LinkedIn" target="_blank" rel="noopener"><?php echo axis_icon('linkedin-icon'); ?></a>
                <a href="https://www.tiktok.com/@axismedical" aria-label="TikTok" target="_blank" rel="noopener"><?php echo axis_icon('tiktok-icon'); ?></a>
            </div>

            <div class="f-contact">
                <a href="https://share.google/oKI5b7cyB0CKLcJiC" class="f-link"><?php _e('G. Karavaggeli 4, Kalamaria, Thessaloniki, Greece', 'axis-theme'); ?></a>
                <a href="tel:+302313036458" class="f-link">+ 30 2313 036 458</a>
                <a href="mailto:info@axismedical.gr" class="f-link">info@axismedical.gr</a>
                <div class="f-link">128456304000</div>
            </div>

        </div>

        <div class="footer-column">

            <div class="f-heading">AXIS Medical</div>

            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer_nav',
                    'container' => false,
                    'menu_class' => 'f-menu',
                    'depth' => 0,
                    'fallback_cb' => false
                )); ?>
            </nav>

        </div>

        <div class="footer-column">

            <div class="f-heading"><?php _e('Operating Rooms', 'axis-theme'); ?></div>

            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'useful_links',
                    'container' => false,
                    'menu_class' => 'f-menu',
                    'depth' => 0,
                    'fallback_cb' => false
                )); ?>
            </nav>

        </div>

        <div class="footer-column">

            <div class="f-heading"><?php _e('Newsletter', 'axis-theme'); ?></div>

            <?php echo do_shortcode('[mc4wp_form id=668]'); ?>

        </div>

    </div>

    <div class="footer-bottom">

        <div class="copyright"><?php echo esc_html(sprintf(__('Copyright, %s, AXIS Medical', 'axis-theme'), date_i18n('Y'))); ?></div>

        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'policies',
                'container' => false,
                'menu_class' => 'policies',
                'depth' => 0,
                'fallback_cb' => false,
            )); ?>
        </nav>

        <div class="designed"><?php _e('Developed by Alessandro Lamaj', 'axis-theme'); ?></div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>