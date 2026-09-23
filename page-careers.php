<?php get_header(); ?>



<main class="main-layout site-main-content">



    <div class="page-layout">



        <!-- Page Title Banner -->

        <div class="page-banner">



            <div class="page-title"><?php the_title(); ?></div>

            <div class="stroke"></div>



        </div>



        <div class="careers-content">



            <div class="careers-column">



                <div id="text-20"><?php _e('Our firm is growing rapidly and we are always looking out for talented new colleagues to join our team If you are interested to build a career with prospects and working alongside highly trained professionals, send your cv by filling the contact form below and attaching your CV.', 'axis-theme'); ?></div>



                <!-- Success Message -->

                <?php if (isset($_GET['success']) && $_GET['success'] === '1') : ?>

                    <div class="success-message">

                        <?php echo axis_icon('success-icon'); ?>

                        <div class="success-text"><?php _e('Success', 'axis-theme'); ?></div>

                    </div>

                <?php endif; ?>



                <!-- Application Form -->

                <form class="form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" enctype="multipart/form-data">



                    <!-- Security Check & Action -->

                    <?php wp_nonce_field('submit_career_form', 'axis_career_nonce'); ?>

                    <input type="hidden" name="action" value="submit_career_form">



                    <div class="form-row">



                        <div class="form-group">

                            <label class="label" for="applicant_first_name"><?php _e('First Name', 'axis-theme'); ?></label>

                            <input class="input" type="text" id="applicant_first_name" name="applicant_first_name" required>

                        </div>



                        <div class="form-group">

                            <label class="label" for="applicant_last_name"><?php _e('Last Name', 'axis-theme'); ?></label>

                            <input class="input" type="text" id="applicant_last_name" name="applicant_last_name" required>

                        </div>



                    </div>



                    <div class="form-row">



                        <div class="form-group">

                            <label class="label" for="applicant_email"><?php _e('Email Address', 'axis-theme'); ?></label>

                            <input class="input" type="email" id="applicant_email" name="applicant_email" required>

                        </div>



                        <div class="form-group">

                            <label class="label" for="applicant_phone"><?php _e('Phone Number', 'axis-theme'); ?></label>

                            <input class="input" type="text" id="applicant_phone" name="applicant_phone" required>

                        </div>



                    </div>



                    <div class="form-group">

                        <label class="label" for="applicant_profession"><?php _e('Profession', 'axis-theme'); ?></label>

                        <input class="input" type="text" id="applicant_profession" name="applicant_profession" required>

                    </div>



                    <div class="form-group">

                        <label class="label" for="applicant_cv"><?php _e('Upload CV', 'axis-theme'); ?></label>

                        <input type="file" id="applicant_cv" name="applicant_cv" accept=".pdf, .doc, .docx" required>

                    </div>



                    <button class="btn-submit" type="submit"><?php _e('Submit', 'axis-theme'); ?></button>



                </form>



            </div>



            <div class="careers-column">



                <div class="careers-img">

                    <?php echo axis_icon('career-image'); ?>

                </div>

            

            </div>



        </div>



    </div>



</main>



<?php get_footer(); ?>