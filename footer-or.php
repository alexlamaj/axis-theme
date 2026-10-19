</main>

<footer class="axis-footer-or">

    <div class="top-footer-content">

        <div class="footer-column">

            <div class="or-footer-logo"><?php echo axis_icon('axis-logo'); ?></div>

            <div class="socials">

                <a href="https://www.facebook.com/axismedical.gr/"><?php echo axis_icon('facebook-icon'); ?></a>
                <a href="https://www.instagram.com/axismedical.gr/"><?php echo axis_icon('instagram-icon'); ?></a>
                <a href="https://www.linkedin.com/company/axis-medical/"><?php echo axis_icon('linkedin-icon'); ?></a>
                <a href="https://www.tiktok.com/@axismedical"><?php echo axis_icon('tiktok-icon'); ?></a>

            </div>

        </div>

        <div class="footer-column">

            <div class="fheading">Operation Rooms</div>

            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'or_footer',
                    'container' => false,
                    'menu_class' => 'or-fmenu',
                    'depth' => 0,
                    'fallback' => false
                )); ?>
            </nav>

        </div>

        <div class="footer-column">

            <div class="fheading">AXIS Medical</div>

            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'axis_nav',
                    'container' => false,
                    'menu_class' => 'or-fmenu',
                    'depth' => 0,
                    'fallback' => false
                )); ?>
            </nav>

        </div>

        <div class="footer-column">

            <div class="fheading">Contact Information</div>

            <div class="or-contact">
                <a href="https://share.google/oKI5b7cyB0CKLcJiC" class="or-link">G. Karavaggeli 4, Kalamaria, Thessaloniki, Greece</a>
                <a href="tel:+302313036458" class="or-link">+ 30 2313 036 458</a>
                <a href="mailto:info@axismedical.gr" class="or-link">info@axismedical.gr</a>
                <div class="or-link">128456304000</div>
            </div>

        </div>

    </div>

    <div class="bottom-footer-content">

        <div class="copyright">Copyright, 2026, AXIS Medical</div>

        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'policies',
                'container' => false,
                'menu_class' => 'policies',
                'depth' => 0,
                'fallback' => false
            )); ?>
        </nav>

        <div class="designed">Developed by Alessandro Lamaj</div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>