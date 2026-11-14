<?php

/**
 * Template Name: HC Contact
*/

if (!defined('ABSPATH')) {
    exit;
}

function axis_contact_options() {

    return [
        'services' => [
            'name' => 'contact_units',
            'meta' => '_contact_units',
            'title' => 'Units',
            'label' => __('Which units do you need?', 'axis-theme'),
            'items' => [
                __('Cleanrooms', 'axis-theme'),
                __('Healthcare Units', 'axis-theme'),
                __('Pharma Cannabis', 'axis-theme'),
                __('Intensive Care Units', 'axis-theme'),
                __('In-Vitro Fertilization', 'axis-theme')
            ]
        ],
        'products' => [
            'name' => 'contact_products',
            'meta' => '_contact_products',
            'title' => 'Products',
            'label' => __('Which products do you need?', 'axis-theme'),
            'items' => [
                __('OR Digitalization', 'axis-theme'),
                __('Surgical Lights', 'axis-theme'),
                __('Surgical Tables', 'axis-theme'),
                __('Anesthesia', 'axis-theme'),
                __('ICU Pendants', 'axis-theme'),
                __('Robotic Pharmacy', 'axis-theme'),
                __('MultiClot', 'axis-theme'),
                __('Chemomaker+', 'axis-theme')
            ]
        ]
    ];

}

function axis_contact_selection($group) {

    $options = axis_contact_options();
    if (empty($options[$group])) return;

    $option = $options[$group];

    ?>

    <fieldset class="selection-group selection-<?php echo esc_attr($group); ?>">

        <legend class="selection-label">
            <?php echo esc_html($option['label']); ?>
            <span class="selection-optional"><?php _e('Optional', 'axis-theme'); ?></span>
        </legend>

        <div class="selection-pills">
            <?php foreach ($option['items'] as $item) : ?>
                <label class="selection-pill">
                    <input type="checkbox" name="<?php echo esc_attr($option['name']); ?>[]" value="<?php echo esc_attr($item); ?>">
                    <span><?php echo esc_html($item); ?></span>
                </label>
            <?php endforeach; ?>
        </div>

    </fieldset>

    <?php

}

function axis_contact_posted_selection($group) {

    $option = axis_contact_options()[$group];
    $posted = isset($_POST[$option['name']]) ? array_map('sanitize_text_field', (array) wp_unslash($_POST[$option['name']])) : [];

    return array_values(array_intersect($option['items'], $posted));

}

get_header(); ?>

<div class="page-layout">

    <section class="page-header">
        <div class="header-text"><?php _e('A few details are enough to start. An architect or project manager from our team will come back to you.', 'axis-theme'); ?></div>
        <div class="header-title"><?php _e('Tell Us About Your Project', 'axis-theme'); ?></div>
    </section>

    <section class="contact-section">

        <form id="contactForm" enctype="multipart/form-data">

            <?php wp_nonce_field('submit_contact_form', 'axis_contact_nonce'); ?>
            <input type="hidden" name="action" value="submit_contact_form">

            <?php axis_contact_selection('services'); ?>
            <?php axis_contact_selection('products'); ?>

            <div class="form-item">
                <label for="contact_full_name"><?php _e('Full Name', 'axis-theme'); ?></label>
                <input type="text" id="contact_full_name" name="contact_full_name" required>
            </div>

            <div class="form-item">
                <label for="contact_profession"><?php _e('Profession / Specialty', 'axis-theme'); ?> <span><?php _e('Optional', 'axis-theme'); ?></span></label>
                <input type="text" name="contact_profession" id="contact_profession">
            </div>

            <div class="form-item">
                <label for="contact_company"><?php _e('Company / Hospital', 'axis-theme'); ?> <span><?php _e('Optional', 'axis-theme'); ?></span></label>
                <input type="text" id="contact_company" name="contact_company">
            </div>

            <div class="form-item">
                <label for="contact_email"><?php _e('Email Address', 'axis-theme'); ?></label>
                <input type="email" id="contact_email" name="contact_email" required>
            </div>

            <div class="form-item">
                <label for="contact_phone"><?php _e('Phone Number', 'axis-theme'); ?></label>
                <input type="text" name="contact_phone" id="contact_phone" required>
            </div>

            <div class="form-item">
                <label for="contact_message"><?php _e('Anything Else?', 'axis-theme'); ?> <span><?php _e('Optional', 'axis-theme'); ?></span></label>
                <textarea name="contact_message" id="contact_message" rows="3"></textarea>
            </div>

            <button type="submit" class="btn-primary" style="width: 160px; margin-top: 40px;"><?php _e('Send Message', 'axis-theme'); ?></button>

        </form>

        <div class="contact-column">

            <div class="contact-img"><?php echo axis_icon('contact-image-2048x1371'); ?></div>

            <div class="contact-page-info">

                <div class="tabs">
                    <button type="button" class="tab active"><?php _e('Main', 'axis-theme'); ?></button>
                    <button type="button" class="tab"><?php _e('Athens', 'axis-theme'); ?></button>
                    <button type="button" class="tab"><?php _e('Germany', 'axis-theme'); ?></button>
                    <button type="button" class="tab"><?php _e('Singapore', 'axis-theme'); ?></button>
                    <button type="button" class="tab"><?php _e('Kuwait', 'axis-theme'); ?></button>
                </div>

                <div class="tab-cards">

                    <div class="tab-card active">
                        <a href="https://share.google/oKI5b7cyB0CKLcJiC"><?php _e('G. Karavaggeli 4, Kalamaria, Thessaloniki, Greece', 'axis-theme'); ?></a>
                        <a href="tel:+302313036458">+ 30 2313 036 458</a>
                        <a href="mailto:info@axismedical.gr">info@axismedical.gr</a>
                    </div>

                    <div class="tab-card">
                        <a href="https://share.google/FPg6gkrftfU8GVSqD"><?php _e('Efkalipton 39, Votanikos, Athens, Greece', 'axis-theme'); ?></a>
                        <a href="tel:+302130413685">+30 2130 413 685</a>
                        <a href="mailto:info@axismedical.gr">info@axismedical.gr</a>
                    </div>

                    <div class="tab-card">
                        <a href="https://share.google/AvkVFQvxYJWYjl4co">Arndtstraße 18 60325 Frankfurt am Main Germany</a>
                        <a href="tel:+496994948770">+49 699 494 8770</a>
                        <a href="mailto:info@axismedical.gr">info@axismedical.gr</a>
                    </div>

                    <div class="tab-card">
                        <a href="https://share.google/WTk1TvTAuBuASPsCP">96 Jalan Jurong Kechil Singapore 598599</a>
                        <a href="tel:+6564683948">+65 6468 3948</a>
                        <a href="mailto:pohguan@axismedical.com.sg">pohguan@axismedical.com.sg</a>
                    </div>

                    <div class="tab-card">
                        <a href="https://share.google/zdemXtVHgHEpdIsDw">B8 Ahmad Aljabar Street, KW Kuwait</a>
                        <a href="tel:+96597289404">+965 972 89404</a>
                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

<?php get_footer(); ?>

