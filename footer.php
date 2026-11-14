</main>

<footer class="axis-footer">

    <div class="footer-top">

        <div class="footer-column">

            <div class="footer-logo"><?php echo axis_icon('logo-negative-300x147'); ?></div>

            <div class="socials">
                <a href="https://www.facebook.com/axismedical.gr/"><?php echo axis_icon('facebook-icon'); ?></a>
                <a href="https://www.instagram.com/axismedical.gr/"><?php echo axis_icon('instagram-icon'); ?></a>
                <a href="https://www.linkedin.com/company/axis-medical/"><?php echo axis_icon('linkedin-icon'); ?></a>
                <a href="https://www.tiktok.com/@axismedical"><?php echo axis_icon('tiktok-icon'); ?></a>
            </div>

            <div class="f-contact">
                <a href="https://share.google/oKI5b7cyB0CKLcJiC" class="f-link">G. Karavaggeli 4, Kalamaria, Thessaloniki, Greece</a>
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
                    'fallback' => false
                )); ?>
            </nav>

        </div>

        <div class="footer-column">

            <div class="f-heading">Operating Rooms</div>

            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'useful_links',
                    'container' => false,
                    'menu_class' => 'f-menu',
                    'depth' => 0,
                    'fallback' => false
                )); ?>
            </nav>

        </div>

        <div class="footer-column">

            <div class="f-heading">Newsletter</div>

            <?php echo do_shortcode('[mc4wp_form id=668]'); ?>

        </div>

    </div>

    <div class="footer-bottom">

        <div class="copyright">Copyright, 2026, AXIS Medical</div>

        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'policies',
                'container' => false,
                'menu_class' => 'policies',
                'depth' => 0,
                'fallback' => false,
            )); ?>
        </nav>

        <div class="designed">Developed by Alessandro Lamaj</div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>

