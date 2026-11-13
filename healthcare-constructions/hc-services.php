<?php
/**
 * Template Name: HC Services
 */

function axis_get_services() {

    static $services = null;

    if (null !== $services) {
        return $services;
    }

    $services = array();
    $file = get_theme_file_path('data/data-service.json');

    if (!is_readable($file)) {
        return $services;
    }

    $data = json_decode(file_get_contents($file), true);

    if (!is_array($data)) {
        return $services;
    }

    foreach ($data as $key => $entry) {
        if (empty($entry['en']) || !is_array($entry['en'])) {
            continue;
        }

        $service = wp_parse_args($entry['en'], array(
            'id'       => $key,
            'image'    => '',
            'title'    => '',
            'text'     => '',
            'list'     => array(),
            'link'     => '',
            'redirect' => ''
        ));

        $service['key'] = $key;
        $service['projects_url'] = '' !== $service['link'] ? $service['link'] : axis_service_project_url($key);

        $services[$key] = $service;

    }

    return $services;
}

function axis_service_project_url($slug) {

    $link = get_term_link($slug, 'project_category');

    if (!is_wp_error($link)) {
        return $link;
    }

    $archive = get_post_type_archive_link('project');

    return $archive ? $archive : home_url('/');
    
}

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