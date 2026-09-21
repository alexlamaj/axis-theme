</main>

<footer class="axis-footer">

    <!-- Newsletter -->
    <div class="newsletter">

        <div class="newsletter-content">

            <div class="newsletter-heading"><?php _e('Join Our Newsletter', 'axis-theme'); ?></div>
            <div class="newsletter-text"><?php _e('And keep up with our latest news and projects!', 'axis-theme'); ?></div>

        </div>

        <?php echo do_shortcode('[mc4wp_form id=668]'); ?>

    </div>

    <!-- Footer -->
    <div class="footer">

        <div class="footer-content">

            <div class="footer-el">

                <!-- Logo and Socials -->
                <div class="f-column" style="align-items: center;">

                    <a href="<?php echo esc_url(home_url('/')) ?> ">
                        <?php echo axis_icon('axis-logo'); ?>
                    </a>
                
                    <div class="socials">

                        <a href="#"><?php echo axis_icon('facebook-icon'); ?></a>
                        <a href="#"><?php echo axis_icon('instagram-icon'); ?></a>
                        <a href="#"><?php echo axis_icon('linkedin-icon'); ?></a>
                        <a href="#"><?php echo axis_icon('tiktok-icon'); ?></a>

                    </div>

                </div>

                <!-- Footer Menu -->
                <div class="f-column">

                    <div class="f-heading"><?php _e('Navigation', 'axis-theme'); ?></div>

                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer_nav',
                            'container' => false,
                            'menu_class' => 'footer-menu',
                            'fallback_cb' => false
                        )); ?>
                    </nav>

                </div>

                <!-- Useful Links -->
                <div class="f-column">

                    <div class="f-heading"><?php _e('Useful Links', 'axis-theme'); ?></div>

                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'useful_links',
                            'container' => false,
                            'menu_class' => 'useful-menu',
                            'fallback_cb' => false
                        )); ?>
                    </nav>

                </div>

                <!-- Contact Info -->
                <div class="f-column">

                    <div class="f-heading"><?php _e('Contact Info', 'axis-theme'); ?></div>

                    <div class="contact-info">

                        <div class="contact-el">
                            <?php echo axis_icon('location-white-icon', 'white-icon'); ?>
                            <a href="https://share.google/oKI5b7cyB0CKLcJiC" class="contact-text">G. Karavaggeli 4, Kalamaria, Thessaloniki, Greece</a>
                        </div>

                        <div class="contact-el">
                            <?php echo axis_icon('phone-white-icon', 'white-icon'); ?>
                            <a href="tel:+302313036458" class="contact-text">+ 30 2313 036 458</a>
                        </div>

                        <div class="contact-el">
                            <?php echo axis_icon('email-white-icon', 'white-icon'); ?>
                            <a href="mailto:info@axismedical.gr" class="contact-text">info@axismedical.gr</a>
                        </div>

                        <div class="contact-el">
                            <?php echo axis_icon('id-white-icon', 'white-icon'); ?>
                            <div class="contact-text">128456304000</div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Copyrights -->
            <div class="copyrights">

                <div class="copy-text">Copyright | AXIS Medical | 2026</div>
                <div class="copy-text">Designed and Developed by Alessandro Lamaj</div>

            </div>

        </div>

    </div>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>