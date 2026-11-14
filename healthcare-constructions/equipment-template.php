<?php 

/**
 * Template Name: Single Med Equipment 
*/

if (!defined('ABSPATH')) {
    exit;
}

$axis_equipment_file = get_theme_file_path('data/data-equip.json');
$axis_equipment_all = is_readable($axis_equipment_file) ? json_decode(file_get_contents($axis_equipment_file), true) : array();
$axis_equipment_slug = get_post_field('post_name', get_queried_object_id());

$axis_equip = isset($axis_equipment_all[$axis_equipment_slug]['en']) && is_array($axis_equipment_all[$axis_equipment_slug]['en']) ? $axis_equipment_all[$axis_equipment_slug]['en'] : array();

$axis_equip = wp_parse_args($axis_equip, array(
    'up-title' => '',
    'title' => get_the_title(),
    'sub-title' => '',
    'image' => '',
    'images' => array(),
    'specs' => array(),
    'features' => array()
));

get_header(); ?>

<div class="page-layout">

    <section class="equipment-header">

        <div class="equipment-header-content">
            <div class="equipment-up-title"><?php echo esc_html($axis_equip['up-title']); ?></div>
            <div class="equipment-title"><?php echo esc_html($axis_equip['title']); ?></div>
            <div class="equipment-text"><?php echo esc_html($axis_equip['sub-title']); ?></div>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="equipment-button"><?php _e('Ask About this Product', 'axis-theme'); ?></a>
        </div>

        <div class="equipment-image">
            <?php echo axis_icon($axis_equip['image']); ?>
        </div>

    </section>

    <section class="equipment-content">

        <div class="equipment-row">

            <div class="equipment-gallery">

                <?php foreach ($axis_equip['image'] as $img) : ?>
                    <div class="equipment-img"><?php echo axis_icon($img['img1']); ?></div>
                    <div class="equipment-img-row">
                        <div class="equipment-img"><?php echo axis_icon($img['img2']); ?></div>
                        <div class="equipment-img"><?php echo axis_icon($img['img3']); ?></div>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="equipment-specs-list">

                <div class="equipment-section-title"><?php _e('Typical Specifications', 'axis-theme'); ?></div>

                <ul class="equipment-list">
                    <?php foreach ($axis_equip['specs'] as $spec) : ?>
                        <li>
                            <span class="spec-title"><?php echo esc_html($spec['spec-title']); ?></span>
                            <span class="spec-desc"><?php echo esc_html($spec['spec-desc']); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
            </div>

        </div>

        <div class="equipment-features-grid">

            <?php foreach ($axis_equip['features'] as $feat) : ?>
                <div class="feat-card">
                    <div class="feat-title"><?php echo esc_html($feat['feat-title']); ?></div>
                    <div class="feat-text"><?php echo esc_html($feat['feat-text']); ?></div>
                </div>
            <?php endforeach; ?>

        </div>

    </section>

</div>

<?php get_footer(); ?>