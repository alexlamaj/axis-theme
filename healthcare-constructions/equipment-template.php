<?php 

/**
 * Template Name: Single Med Equipment 
*/

if (!defined('ABSPATH')) {
    exit;
}

$axis_equipment_file = get_theme_file_path('data/data-equip.json');
$axis_equipment_all = is_readable($axis_equipment_file) ? json_decode(file_get_contents($axis_equipment_file), true) : array();
$axis_equipment_slug = axis_base_slug(get_queried_object_id());
$axis_equipment_entry = (is_array($axis_equipment_all) && isset($axis_equipment_all[$axis_equipment_slug]) && is_array($axis_equipment_all[$axis_equipment_slug])) ? $axis_equipment_all[$axis_equipment_slug] : array();
$axis_equipment_lang = axis_lang();

$axis_equip = (!empty($axis_equipment_entry[$axis_equipment_lang]) && is_array($axis_equipment_entry[$axis_equipment_lang])) ? $axis_equipment_entry[$axis_equipment_lang] : ((isset($axis_equipment_entry['en']) && is_array($axis_equipment_entry['en'])) ? $axis_equipment_entry['en'] : array());

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
            <a href="<?php echo esc_url(axis_url('contact-us/')); ?>" class="equipment-button"><?php _e('Ask About this Product', 'axis-theme'); ?></a>
        </div>

        <div class="equipment-image">
            <?php echo axis_icon($axis_equip['image']); ?>
        </div>

    </section>

    <section class="equipment-content">

        <div class="equipment-row">

            <div class="equipment-gallery">

                <?php foreach ((array) $axis_equip['images'] as $img) : ?>
                    <?php if (!is_array($img)) continue; ?>
                    <?php if (!empty($img['img1'])) : ?><div class="equipment-img"><?php echo axis_icon($img['img1']); ?></div><?php endif; ?>
                    <div class="equipment-img-row">
                        <?php if (!empty($img['img2'])) : ?><div class="equipment-img"><?php echo axis_icon($img['img2']); ?></div><?php endif; ?>
                        <?php if (!empty($img['img3'])) : ?><div class="equipment-img"><?php echo axis_icon($img['img3']); ?></div><?php endif; ?>
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