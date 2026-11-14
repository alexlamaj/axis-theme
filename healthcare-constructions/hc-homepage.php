<?php

/**
 * Template Name: HC Homepage
*/

get_header(); ?>

<section class="first-section">

    <div class="first-section-img"><?php echo axis_icon('Refined digital operating theatre at dusk'); ?></div>

    <div class="first-section-content">
        <div class="first-title"><?php _e('A planning, construction and trading company that only thinks in hospitals.', 'axis-theme'); ?></div>
        <div class="first-text"><?php _e('Axis Medical has many years of experience in the construction market. Our expertise is the healthcare sector: operating theatres, intensive care units, cleanrooms and aseptic areas in general.', 'axis-theme') ?></div>
        <a href="<?php echo esc_url(home_url('/company/')); ?>" class="btn-primary" style="max-width: 160px;"><?php _e('About the Company', 'axis-theme'); ?></a>
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
            <a href="<?php echo esc_url(home_url('/project/')); ?>" class="btn-primary"><?php _e('View Projects', 'axis-theme'); ?></a>
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
                'order_by' => 'date',
                'order' => 'DESC',
                'no_rows_found' => true,
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
            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn-primary"><?php _e('View All Articles', 'axis-theme'); ?></a>
        </div>

        <?php

            if (!function_exists('axis_recent_posts')) :

                function axis_recent_posts($post_id) {
                    $post_thumbnail = get_the_post_thumbnail_url($post_id, 'large');
                    $post_date = get_the_date('F j Y');
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
            'order_by' => 'date',
            'order' => 'DESC',
            'no_rows_found' => true,
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