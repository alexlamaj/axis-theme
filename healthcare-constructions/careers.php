<?php

/**
 * Template Name: HC Careers
 */

get_header();
?>

<div class="page-layout">

    <section class="page-header">
        <div class="header-text"><?php _e('We are always glad to meet engineers, architects and planners who like precise work and real outcomes.', 'axis-theme'); ?></div>
        <div class="header-title"><?php _e('Build the places where care happens', 'axis-theme'); ?></div>
    </section>

    <section class="career-content">

        <form id="careerForm" enctype="multipart/form-data">

            <?php wp_nonce_field('submit_career_form', 'axis_career_form'); ?>
            <input type="hidden" name="action" value="submit_career_form">

            <div class="form-container">
                <div class="form-wrapper">
                    <label for="applicant_profession"><?php _e('Which role interests you?', 'axis-theme'); ?></label>
                    <input type="text" id="applicant_profession" name="applicant_profession" autocomplete="off" required>
                </div>
                <ul class="form-dropdown">
                    <li><?php _e('Project Manager, Civil Engineer', 'axis-theme'); ?></li>
                    <li><?php _e('Architectural Designer and Engineer', 'axis-theme'); ?></li>
                    <li><?php _e('Other', 'axis-theme'); ?></li>
                </ul>
            </div>

            <div class="form-item">
                <label for="applicant_full_name"><?php _e('Full Name', 'axis-theme'); ?></label>
                <input type="text" id="applicant_full_name" name="applicant_full_name" required>
            </div>

            <div class="form-item">
                <label for="applicant_email"><?php _e('Email Address', 'axis-theme'); ?></label>
                <input type="email" id="applicant_email" name="applicant_email" required>
            </div>

            <div class="form-item">
                <label for="applicant_phone"><?php _e('Phone Number', 'axis-theme'); ?></label>
                <input type="text" id="applicant_phone" name="applicant_phone">
            </div>

            <div class="form-item">
                <label for="applicant_cv"><?php _e('Upload CV', 'axis-theme'); ?></label>
                <input type="file" id="applicant_cv" name="applicant_cv" accept=".pdf, .doc, .docx" style="border: none;" required>
            </div>

            <button class="btn-submit" type="submit"><?php _e('Submit', 'axis-theme'); ?></button>

        </form>

        <div class="careers-img"><?php echo axis_icon('career-image'); ?></div>

    </section>

</div>

<?php get_footer(); ?>

