<?php

/** 
 * Template Name: OR Contact
*/

get_header('or');
?>

<div class="or-layout">

    <div class="or-page-header">
        <div class="or-subheading"><?php _e('A few details are enough to start. An architect or project manager from our team will come back to you.', 'axis-theme'); ?></div>
        <div class="or-heading"><?php _e('Tell Us About Your Room', 'axis-theme'); ?></div>
    </div>

    <div class="contact-layout">

        <form id="orContactForm" enctype="multipart/form-data">

            <div class="input-container">
                <div class="input-wrapper">
                    <label for="or_subject"><?php _e('What are you planning?', 'axis-theme'); ?></label>
                    <input type="text" id="or_subject" name="or_subject" autocomplete="off" required>
                </div>
                <ul class="input-dropdown">
                    <li><?php _e('A New Operating Room', 'axis-theme'); ?></li>
                    <li><?php _e('Renovating an Existing OR', 'axis-theme'); ?></li>
                    <li><?php _e('Convert your OR into Hybrid or Digital', 'axis-theme'); ?></li>
                    <li><?php _e('Another Kind of OR', 'axis-theme'); ?></li>
                    <li><?php _e('Other', 'axis-theme'); ?></li>
                </ul>
            </div>

            <div class="input-wrapper">
                <label for="or_full_name"><?php _e('Full Name', 'axis-theme'); ?></label>
                <input type="text" id="or_full_name" name="or_full_name" required>
            </div>

            <div class="input-wrapper">
                <label for="or_company"><?php _e('Company Or Hospital', 'axis-theme') ?><span><?php _e(' Optional', 'axis-theme'); ?></span></label>
                <input type="text" id="or_company" name="or_company">
            </div>

            <div class="input-wrapper">
                <label for="or_email"><?php _e('Email Address', 'axis-theme'); ?></label>
                <input type="email" id="or_email" name="or_email" required>
            </div>

            <div class="input-wrapper">
                <label for="or_phone"><?php _e('Phone Number', 'axis-theme'); ?></label>
                <input type="text" id="or_phone" name="or_phone" required>
            </div>

            <div class="input-wrapper">
                <label for="or_message"><?php _e('Anything Else?', 'axis-theme'); ?><span><?php _e(' Optional', 'axis-theme'); ?></span></label>
                <textarea name="or_message" id="or_message" rows="3"></textarea>
            </div>

            <button type="submit" class="submit-btn"><?php _e('Submit', 'axis-theme'); ?></button>

        </form>

        <div class="or-3d-section"></div>

    </div>

</div>

<?php get_footer('or'); ?>