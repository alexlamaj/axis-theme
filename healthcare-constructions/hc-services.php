<?php
/**
 * Template Name: HC Services
 */

$axis_services = axis_get_services();

get_header();
?>

<div class="page-layout">

    <section class="page-header">
        <div class="header-text"><?php _e('Cleanrooms, IVF units, pharmaceutical cannabis facilities, operating rooms, ICUs and healthcare units', 'axis-theme'); ?></div>
        <div class="header-title"><?php _e('Six kinds of healthcare space, one way of working.', 'axis-theme'); ?></div>
    </section>

    <section class="services-grid">

        <?php foreach ($axis_services as $axis_service) : ?>
            <button type="button" 
                    class="service-card service-card--<?php echo esc_attr($axis_service['key']); ?>" 
                    data-service-popup="<?php echo esc_attr($axis_service['key']); ?>" 
                    aria-haspopup="dialog" 
                    aria-controls="servicePopup">
                <span class="service-img"><?php echo $axis_service['image'] ? axis_icon($axis_service['image']) : ''; ?></span>
                <span class="service-content">
                    <span class="service-title"><?php echo esc_html($axis_service['title']); ?></span>
                    <span class="service-text"><?php echo esc_html($axis_service['text']); ?></span>
                </span>
            </button>
        <?php endforeach; ?>

    </section>

</div>

<?php get_template_part('healthcare-constructions/popup-service-template'); ?>

<?php get_footer(); ?>