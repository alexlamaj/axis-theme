<?php

/**
 * Template Name: HC Homepage
*/

get_header(); ?>

<?php

$axis_icu_drawing = '';

foreach ([24, 116, 208, 300] as $axis_x) {
    $axis_icu_drawing .= '<rect x="' . ($axis_x + 14) . '" y="49.5" width="48.5" height="8" rx="1"/>';
    $axis_icu_drawing .= '<rect x="' . $axis_x . '" y="61.5" width="76.5" height="30.5" rx="4"/>';
    $axis_icu_drawing .= '<rect x="' . ($axis_x + 5) . '" y="66" width="14" height="21.5" rx="3"/>';
}

foreach ([24, 300] as $axis_x) {
    $axis_icu_drawing .= '<rect x="' . $axis_x . '" y="124" width="76.5" height="30.5" rx="4"/>';
    $axis_icu_drawing .= '<rect x="' . ($axis_x + 5) . '" y="128.5" width="14" height="21.5" rx="3"/>';
    $axis_icu_drawing .= '<rect x="' . ($axis_x + 14) . '" y="158" width="48.5" height="8" rx="1"/>';
}

$axis_icu_drawing .= '<path d="M142 149.5V132a16 16 0 0 1 16-16h84a16 16 0 0 1 16 16v17.5"/>';
$axis_icu_drawing .= '<circle cx="200" cy="135" r="12"/><circle cx="200" cy="135" r="4.5"/>';

$axis_pharma_drawing = '<line class="is-dashed" x1="22" y1="56" x2="318" y2="56"/>';

foreach ([62, 96, 130] as $axis_y) {
    $axis_pharma_drawing .= '<rect x="22" y="' . $axis_y . '" width="296" height="18" rx="4"/>';

    for ($axis_i = 0; $axis_i < 9; $axis_i++) {
        $axis_pharma_drawing .= '<circle cx="' . (40 + $axis_i * 32.5) . '" cy="' . ($axis_y + 9) . '" r="5.5"/>';
    }
}

$axis_hero_rooms = [
    [
        'key' => 'ivf-units',
        'number' => '01',
        'name' => __('IVF Units', 'axis-theme'),
        'x' => 0,
        'y' => 0,
        'w' => 340,
        'row' => 'top',
        'drawing' => '<path d="M22 61.5H124V81.5H44V151.5H22Z"/><circle cx="84" cy="72" r="8"/><circle cx="84" cy="72" r="3"/><rect x="60" y="104" width="34" height="29" rx="3"/><circle cx="77" cy="118.5" r="6.5"/><rect x="60" y="140.5" width="34" height="12" rx="3"/><line class="is-dashed" x1="150" y1="56" x2="150" y2="160"/><line x1="144" y1="100" x2="157" y2="100"/><circle class="is-dashed" cx="241.5" cy="103.5" r="33"/><rect x="206" y="90" width="72.5" height="28" rx="10"/><circle cx="241.5" cy="104" r="4.5"/><line x1="241.5" y1="56" x2="241.5" y2="70.5"/><rect x="206" y="135.5" width="72.5" height="14" rx="2"/><rect x="292" y="65.5" width="28.5" height="29" rx="3"/><circle cx="306" cy="80" r="5.5"/>'
    ],
    [
        'key' => 'intensive-care-units',
        'number' => '02',
        'name' => __('Intensive Care Units', 'axis-theme'),
        'x' => 340,
        'y' => 0,
        'w' => 400,
        'row' => 'top',
        'drawing' => $axis_icu_drawing
    ],
    [
        'key' => 'pharmaceutical-cannabis',
        'number' => '03',
        'name' => __('Pharma Cannabis', 'axis-theme'),
        'x' => 740,
        'y' => 0,
        'w' => 340,
        'row' => 'top',
        'drawing' => $axis_pharma_drawing
    ],
    [
        'key' => 'operating-rooms',
        'number' => '04',
        'name' => __('Operating Rooms', 'axis-theme'),
        'x' => 0,
        'y' => 270,
        'w' => 340,
        'row' => 'bottom',
        'drawing' => '<rect x="31.5" y="70" width="35" height="34" rx="4"/><circle cx="49" cy="87" r="8.5"/><line x1="49" y1="104" x2="49" y2="121.5"/><rect x="35.5" y="121.5" width="26.5" height="10.5" rx="3"/><path d="M92 70V58H104"/><path d="M220 58H232V70"/><path d="M92 141V153H104"/><path d="M220 153H232V141"/><circle class="is-dashed" cx="162.5" cy="105.5" r="34"/><rect x="120" y="91.5" width="84" height="27.5" rx="10"/><rect x="124.5" y="98" width="17.5" height="16" rx="4"/><circle cx="162.5" cy="105.5" r="5"/><line x1="162.5" y1="51.5" x2="162.5" y2="71.5"/><rect x="255.5" y="63.5" width="52.5" height="22.5" rx="4"/><line x1="263.5" y1="74.5" x2="300.5" y2="74.5"/><rect x="255.5" y="112" width="52.5" height="32.5" rx="4"/><polyline points="264 128 271.5 120.5 279 132 292 118 300.5 128"/>'
    ],
    [
        'key' => 'cleanrooms',
        'number' => '05',
        'name' => __('Cleanrooms', 'axis-theme'),
        'x' => 340,
        'y' => 270,
        'w' => 400,
        'row' => 'bottom',
        'drawing' => '<rect x="29.5" y="61.5" width="51" height="92.5"/><line x1="29.5" y1="107" x2="80.5" y2="107"/><line class="is-dashed" x1="55" y1="61.5" x2="55" y2="107"/><line class="is-dashed" x1="94" y1="56" x2="94" y2="160"/><line class="is-dashed" x1="236" y1="56" x2="236" y2="160"/><rect class="is-dashed" x="110" y="61.5" width="112.5" height="91.5"/><rect class="is-dashed" x="136" y="82" width="60" height="51.5"/><path d="M166 61.5V82M161.5 77.5L166 82L170.5 77.5"/><path d="M166 153V133.5M161.5 138L166 133.5L170.5 138"/><path d="M110 107.5H136M131.5 103L136 107.5L131.5 112"/><path d="M222.5 107.5H196M200.5 103L196 107.5L200.5 112"/><rect x="250" y="62" width="120" height="18" rx="4"/><circle cx="271.5" cy="71" r="5"/><circle cx="348" cy="71" r="5"/><circle cx="280" cy="105.5" r="7"/><circle cx="340" cy="105.5" r="7"/><rect x="250" y="132" width="120" height="18" rx="4"/><circle cx="310" cy="141" r="5"/>'
    ],
    [
        'key' => 'healthcare-units',
        'number' => '06',
        'name' => __('Healthcare Units', 'axis-theme'),
        'x' => 740,
        'y' => 270,
        'w' => 340,
        'row' => 'bottom',
        'drawing' => '<rect x="19.5" y="60" width="56.5" height="32" rx="5"/><rect x="24" y="64.5" width="14" height="22.5" rx="3"/><rect x="84" y="60" width="56.5" height="32" rx="5"/><rect x="88.5" y="64.5" width="14" height="22.5" rx="3"/><rect x="19.5" y="114" width="56.5" height="32" rx="5"/><rect x="24" y="118.5" width="14" height="22.5" rx="3"/><rect x="84" y="114" width="56.5" height="32" rx="5"/><rect x="88.5" y="118.5" width="14" height="22.5" rx="3"/><line class="is-dashed" x1="151.5" y1="56" x2="151.5" y2="160"/><line class="is-dashed" x1="261.5" y1="56" x2="261.5" y2="160"/><rect x="165.5" y="65.5" width="83" height="41.5"/><path d="M165.5 72H248.5M165.5 100.5H248.5"/><rect class="is-dashed" x="165.5" y="124" width="83" height="25.5" rx="4"/><rect x="274" y="62" width="46" height="32" rx="5"/><circle class="is-dashed" cx="297" cy="78" r="10"/><circle cx="297" cy="78" r="4"/><rect x="274" y="110" width="46" height="14" rx="3"/><circle cx="284.5" cy="140" r="6.5"/><rect x="297.5" y="133.5" width="22.5" height="12.5" rx="3"/>'
    ]
];

?>

<section class="hc-hero">

    <script>
        (function (hero) {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
            hero.classList.add('is-animated');
            setTimeout(function () { hero.classList.add('is-loaded'); }, 4000);
        })(document.currentScript.parentElement);
    </script>

    <h1 class="hc-hero-title"><?php _e('Healthcare Spaces, Planned and Built to Work', 'axis-theme'); ?></h1>

    <div class="hc-hero-drawing">

        <div class="hc-hero-frame">

            <div class="hc-hero-dimension is-width" aria-hidden="true">
                <span class="hc-hero-dimension-label"><span class="is-landscape">54.0 m</span><span class="is-portrait">24.0 m</span></span>
            </div>

            <div class="hc-hero-dimension is-height" aria-hidden="true">
                <span class="hc-hero-dimension-label"><span class="is-landscape">24.0 m</span><span class="is-portrait">54.0 m</span></span>
            </div>

            <div class="hc-hero-north" aria-hidden="true">
                <span>N</span>
                <svg viewBox="0 0 24 50" focusable="false"><path d="M12 1L23 30H1Z"/><path d="M12 40V50"/></svg>
            </div>

            <div class="hc-hero-plan">

                <svg class="hc-hero-walls" viewBox="0 0 1080 480" aria-hidden="true" focusable="false">
                    <rect x="0" y="0" width="1080" height="480"/>
                    <path d="M340 0V210M740 0V210M340 270V480M740 270V480"/>
                    <path d="M0 210H26M72 210H366M412 210H766M812 210H1080"/>
                    <path d="M0 270H26M72 270H366M412 270H766M812 270H1080"/>
                    <path d="M26 210V164A46 46 0 0 1 72 210"/>
                    <path d="M366 210V164A46 46 0 0 1 412 210"/>
                    <path d="M766 210V164A46 46 0 0 1 812 210"/>
                    <path d="M26 270V316A46 46 0 0 0 72 270"/>
                    <path d="M366 270V316A46 46 0 0 0 412 270"/>
                    <path d="M766 270V316A46 46 0 0 0 812 270"/>
                    <path class="hc-hero-corridor" d="M42 240H1038M56 232L42 240L56 248M1024 232L1038 240L1024 248"/>
                </svg>

                <?php foreach ($axis_hero_rooms as $axis_index => $axis_room) : ?>
                    <button type="button"
                            class="hc-hero-room is-<?php echo esc_attr($axis_room['row']); ?>"
                            style="--x: <?php echo (int) $axis_room['x']; ?>; --y: <?php echo (int) $axis_room['y']; ?>; --w: <?php echo (int) $axis_room['w']; ?>; --h: 210; --i: <?php echo (int) $axis_index; ?>;"
                            data-service-popup="<?php echo esc_attr($axis_room['key']); ?>"
                            aria-haspopup="dialog"
                            aria-controls="service-popup-<?php echo esc_attr($axis_room['key']); ?>"
                            aria-label="<?php echo esc_attr($axis_room['number'] . ' ' . $axis_room['name']); ?>">
                        <svg class="hc-hero-room-drawing" viewBox="0 0 <?php echo (int) $axis_room['w']; ?> 210" aria-hidden="true" focusable="false"><?php echo $axis_room['drawing']; ?></svg>
                        <span class="hc-hero-room-label">
                            <span class="hc-hero-room-number"><?php echo esc_html($axis_room['number']); ?></span>
                            <span class="hc-hero-room-name"><?php echo esc_html($axis_room['name']); ?></span>
                        </span>
                    </button>
                <?php endforeach; ?>

            </div>

        </div>

        <div class="hc-hero-footer" aria-hidden="true">
            <span class="hc-hero-caption"><?php _e('Typical healthcare wing, schematic', 'axis-theme'); ?></span>
            <span class="hc-hero-scale">
                <span class="hc-hero-scale-bar"></span>
                <span class="hc-hero-scale-label">10 m</span>
            </span>
        </div>

    </div>

    <ul class="hc-hero-legend">
        <?php foreach ($axis_hero_rooms as $axis_room) : ?>
            <li>
                <button type="button" data-service-popup="<?php echo esc_attr($axis_room['key']); ?>" aria-haspopup="dialog">
                    <span class="hc-hero-legend-number"><?php echo esc_html($axis_room['number']); ?></span>
                    <?php echo esc_html($axis_room['name']); ?>
                </button>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="hc-hero-actions">
        <a href="<?php echo esc_url(get_post_type_archive_link('project')); ?>" class="hc-hero-button"><?php _e('View Projects', 'axis-theme'); ?></a>
        <a href="<?php echo esc_url(axis_url('services/')); ?>" class="hc-hero-button secondary"><?php _e('Explore Our Services', 'axis-theme'); ?></a>
    </div>

</section>

<?php get_template_part('healthcare-constructions/popup-service-template'); ?>

<section class="first-section">

    <div class="first-section-img"><?php echo axis_icon('Refined digital operating theatre at dusk'); ?></div>

    <div class="first-section-content">
        <div class="first-title"><?php _e('A planning, construction and trading company that only thinks in hospitals.', 'axis-theme'); ?></div>
        <div class="first-text"><?php _e('Axis Medical has many years of experience in the construction market. Our expertise is the healthcare sector: operating theatres, intensive care units, cleanrooms and aseptic areas in general.', 'axis-theme') ?></div>
        <a href="<?php echo esc_url(axis_url('company/')); ?>" class="btn-primary" style="max-width: 160px;"><?php _e('About the Company', 'axis-theme'); ?></a>
    </div>

</section>

<div class="page-layout">

    <section class="home-section">

        <div class="comp-section-title"><?php _e('From the first drawing to the first patient', 'axis-theme'); ?></div>
    
        <div class="solution-runs" style="margin-bottom: 0px;">

            <div class="solution-run">
                <div class="run-num">1</div>
                <div class="run-title"><?php _e('Pre-Study', 'axis-theme'); ?></div>
                <div class="run-text"><?php _e('Concept, architectural diagram, 3D renderings and a preliminary proposal, with the electromechanical pre-study.', 'axis-theme'); ?></div>
            </div>

            <div class="solution-run">
                <div class="run-num">2</div>
                <div class="run-title"><?php _e('Final Study', 'axis-theme'); ?></div>
                <div class="run-text"><?php _e('Architectural, static and mechanical studies finalised and licensed with the urban planning office.', 'axis-theme'); ?></div>
            </div>

            <div class="solution-run">
                <div class="run-num">3</div>
                <div class="run-title"><?php _e('Detailed Design', 'axis-theme'); ?></div>
                <div class="run-text"><?php _e('Construction details, specifications and tender documents for pricing and supervision.', 'axis-theme'); ?></div>
            </div>

            <div class="solution-run">
                <div class="run-num">4</div>
                <div class="run-title"><?php _e('Construction', 'axis-theme'); ?></div>
                <div class="run-text"><?php _e('Turn-key build and installation, coordinated by one project team. EU GMP and ISO 14644 validation, handover, then preventive maintenance.', 'axis-theme'); ?></div>
            </div>

        </div>
    
    </section>

    <section class="home-section">

        <div class="our-team-header">
            <div class="comp-section-title"><?php _e('Recent Healthcare Projects', 'axis-theme'); ?></div>
            <a href="<?php echo esc_url(get_post_type_archive_link('project')); ?>" class="btn-primary"><?php _e('View Projects', 'axis-theme'); ?></a>
        </div>

        <?php 

            if (!function_exists('axis_render_hc_project_card')) :
                
                function axis_render_hc_project_card($post_id) {
                    $client = get_post_meta($post_id, '_axis_project_client', true) ?: 'Confidential';
                    $bg_image = get_the_post_thumbnail_url($post_id, 'large');
                
                ?>
                
                <a href="<?php echo esc_url(get_the_permalink($post_id)); ?>" class="hc-project-card" style="background-image: url('<?php echo esc_url($bg_image); ?>')">
                    <div class="hc-project-details">
                        <div class="hc-project-title"><?php echo esc_html(get_the_title($post_id)); ?></div>
                        <div class="hc-project-client"><?php echo esc_html($client) ?></div>
                    </div>
                </a>

                <?php }

            endif;

            $latest = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'no_found_rows' => true,
                'fields' => 'ids'
            ));

            $ids = $latest->posts;
            wp_reset_postdata();

        ?>

        <?php if ($ids) : ?>

            <div class="hc-latest">

                <div class="latest-main">
                    <?php axis_render_hc_project_card($ids[0]); ?>
                </div>

                <?php if (count($ids) > 1) : ?>
                    <div class="latest-side">
                        <?php foreach(array_slice($ids, 1) as $id) : ?>
                            <?php axis_render_hc_project_card($id); ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>

        <?php endif; ?>

    </section>

    <section class="home-section">

        <div class="our-team-header">
            <div class="comp-section-title"><?php _e('Recent News and Articles', 'axis-theme'); ?></div>
            <a href="<?php echo esc_url(axis_url('blog/')); ?>" class="btn-primary"><?php _e('View All Articles', 'axis-theme'); ?></a>
        </div>

        <?php

            if (!function_exists('axis_recent_posts')) :

                function axis_recent_posts($post_id) {
                    $post_thumbnail = get_the_post_thumbnail_url($post_id, 'large');
                    $post_date = get_the_date('F j Y', $post_id);
                ?>

                <article class="post-card">
                    <a href="<?php echo esc_url(get_the_permalink($post_id)); ?>">
                        <div class="post-thumbnail" style="background-image: url('<?php echo esc_url($post_thumbnail); ?>')">
                            <div class="post-date"><?php echo esc_html($post_date); ?></div>
                        </div>
                        <div class="post-title"><?php echo esc_html(get_the_title($post_id)); ?></div>
                        <div class="post-excerpt"><?php echo esc_html(get_the_excerpt($post_id)); ?></div>
                    </a>
                </article>

        <?php }
            endif;

        $latest_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
            'no_found_rows' => true,
            'fields' => 'ids'
        ));

        $ids = $latest_posts->posts;
        wp_reset_postdata();

        ?>

        <?php if ($ids) : ?>
            <div class="post-grid">
                <?php foreach ($ids as $id) : ?>
                    <?php axis_recent_posts($id); ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </section>

    <section class="clients">
        
        <?php
            $logos = ['agiosloukas-white', 'aeh-logo-white', 'Gen_logo2-white', 'celixir-logo-white', 'agios-dimitrios-logo-768x98-1-white', 'onassio-white', 'newepimed_logo-white', 'bioiatriki-white', 'euroclinic-athens-white',
            'embryolab-768x504-1-white', 'elpida_logo_ankas-1-white', 'gpap-logo-new-white', 'logo_thessalias_10_gr-white', 'Theagenio_logo-white', 'laser-opthalmos-white', 'Arogi-logo-768x480-1-white'];
        ?>

        <div class="clients-grid">
            <?php foreach ($logos as $logo) : ?>
                <div class="client-logo"><?php echo axis_icon(esc_html($logo)); ?></div>
            <?php endforeach; ?>
        </div>

    </section>

</div>

<?php get_footer(); ?>