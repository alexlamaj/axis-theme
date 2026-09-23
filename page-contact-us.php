<?php get_header(); ?>



<main class="main-layout site-main-content">



    <div class="page-layout">



        <!-- Page Title Banner -->

        <div class="page-banner">



            <div class="page-title"><?php the_title(); ?></div>

            <div class="stroke"></div>



        </div>



        <div class="contact-content">



            <div class="contact-column">



                <!-- Success Message -->

                <?php if (isset($_GET['success']) && $_GET['success'] === 'contact') : ?>

                    <div class="success-message">

                        <?php echo axis_icon('success-icon'); ?>

                        <div class="success-text"><?php _e('Message Sent!', 'axis-theme'); ?></div>

                    </div>

                <?php endif; ?>



                <!-- Contact Form -->

                <form class="form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" enctype="multipart/form-data">



                    <?php wp_nonce_field('submit_contact_form', 'axis_contact_nonce'); ?>

                    <input type="hidden" name="action" value="submit_contact_form">



                    <div class="form-row">



                        <div class="form-group">

                            <label class="label" for="contact_first_name"><?php _e('First Name', 'axis-theme'); ?></label>

                            <input class="input" type="text" id="contact_first_name" name="contact_first_name" required>

                        </div>



                        <div class="form-group">

                            <label class="label" for="contact_last_name"><?php _e('Last Name', 'axis-theme'); ?></label>

                            <input class="input" type="text" id="contact_last_name" name="contact_last_name" required>

                        </div>



                    </div>



                    <div class="form-row">



                        <div class="form-group">

                            <label class="label" for="contact_company"><?php _e('Company Name', 'axis-theme'); ?></label>

                            <input class="input" type="text" id="contact_company" name="contact_company">

                        </div>



                        <div class="form-group">

                            <label class="label" for="contact_subject"><?php _e('Subject', 'axis-theme'); ?></label>

                            <input class="input" type="text" id="contact_subject" name="contact_subject" required>

                        </div>



                    </div>



                    <div class="form-group">

                        <label class="label" for="contact_email"><?php _e('Email Address', 'axis-theme'); ?></label>

                        <input class="input" type="email" id="contact_email" name="contact_email" required>

                    </div>



                    <div class="form-group">

                        <label class="label" for="contact_message"><?php _e('Message', 'axis-theme'); ?></label>

                        <textarea class="input" rows="4" name="contact_message" id="contact_message" required></textarea>

                    </div>



                    <button class="btn-submit" type="submit"><?php _e('Submit', 'axis-theme'); ?></button>



                </form>



            </div>



            <div class="contact-column">



                <!-- Image -->

                <div class="contact-img">

                    <?php echo axis_icon('contact-image'); ?>

                </div>



                <div class="heading-3"><?php _e('Contact Information', 'axis-theme'); ?></div>



                <!-- Contact Information Tabs -->

                <div class="contact-info-tabs">



                    <div class="tab-toggle-buttons" >

                        <button class="btn-secondary toggle-active"><?php _e('Main', 'axis-theme'); ?></button>

                        <button class="btn-secondary"><?php _e('Athens', 'axis-theme'); ?></button>

                        <button class="btn-secondary"><?php _e('Germany', 'axis-theme'); ?></button>

                        <button class="btn-secondary"><?php _e('Singapore', 'axis-theme'); ?></button>

                        <button class="btn-secondary"><?php _e('Kuwait', 'axis-theme'); ?></button>

                    </div>



                    <div class="tabs">



                        <!-- Main -->

                        <div class="tab tab-active">

                            

                            <div class="tab-el">

                                <?php echo axis_icon('location-yellow-icon-2'); ?>

                                <a href="https://share.google/oKI5b7cyB0CKLcJiC" class="tab-link">G. Karavaggeli 4, Kalamaria, Thessaloniki, Greece</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('phone-yellow-icon'); ?>

                                <a href="tel:+302313036458" class="tab-link">+ 30 2313 036 458</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('email-yellow-icon'); ?>

                                <a href="mailto:info@axismedical.gr" class="tab-link">info@axismedical.gr</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('id-yellow-icon'); ?>

                                <div class="tab-link">128456304000</div>

                            </div>



                        </div>



                        <!-- Athens -->

                        <div class="tab">



                            <div class="tab-el">

                                <?php echo axis_icon('location-yellow-icon-2'); ?>

                                <a href="https://share.google/FPg6gkrftfU8GVSqD" class="tab-link">Efkalipton 39, Votanikos, Athens, Greece</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('phone-yellow-icon'); ?>

                                <a href="tel:+302130413685" class="tab-link">+30 2130 413 685</a>

                            </div>



                        </div>



                        <!-- Germany -->

                        <div class="tab">



                            <div class="tab-el">

                                <?php echo axis_icon('location-yellow-icon'); ?>

                                <a href="https://share.google/AvkVFQvxYJWYjl4co" class="tab-link">Arndtstraße 18 60325 Frankfurt am Main Germany</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('phone-yellow-icon'); ?>

                                <a href="tel:+496994948770" class="tab-link">+49 699 494 8770</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('email-yellow-icon'); ?>

                                <a href="mailto:info@axismedical.gr" class="tab-link">info@axismedical.gr</a>

                            </div>



                        </div>



                        <!-- Singapore -->

                        <div class="tab">



                            <div class="tab-el">

                                <?php echo axis_icon('location-yellow-icon'); ?>

                                <a href="https://share.google/WTk1TvTAuBuASPsCP" class="tab-link">96 Jalan Jurong Kechil Singapore 598599</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('phone-yellow-icon'); ?>

                                <a href="tel:+6564683948" class="tab-link">+65 6468 3948, <a href="tel:+6590128120" class="tab-link">+65 9012 8120</a></a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('email-yellow-icon'); ?>

                                <a href="mailto:pohguan@axismedical.com.sg" class="tab-link">pohguan@axismedical.com.sg</a>

                            </div>



                        </div>



                        <!-- Kuwait -->

                        <div class="tab">



                            <div class="tab-el">

                                <?php echo axis_icon('location-yellow-icon-2'); ?>

                                <a href="https://share.google/zdemXtVHgHEpdIsDw" class="tab-link">B8 Ahmad Aljabar Street, KW Kuwait</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('phone-yellow-icon'); ?>

                                <a href="tel:+96597289404" class="tab-link">+965 972 89404</a>

                            </div>



                            <div class="tab-el">

                                <?php echo axis_icon('id-yellow-icon'); ?>

                                <div class="tab-link">MoCI_16498_2018</div>

                            </div>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



</main>



<?php get_footer(); ?>