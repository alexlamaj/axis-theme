<?php

/** 
 * Template Name: OR Homepage Page
*/

get_header('or');

?>

<!-- Hero Section -->

<!-- Intro Section -->
<section class="intro-section">

    <div class="intro-image">
        <div class="intro-img-heading"><?php _e('From first drawing to first operation', 'axis-theme'); ?></div>
        <div class="intro-img-text"><?php _e('Three stages, one team, one point of responsibility', 'axis-theme'); ?></div>
    </div>

    <div class="intro-content">

        <div class="intro-item">
            <div class="intro-title"><?php _e('1    Plan', 'axis-theme'); ?></div>
            <div class="intro-text"><?php _e('We agree scope, budget and layout with the surgical team who will use the room. Architects and project managers produce the drawings and the financial and technical estimates.', 'axis-theme'); ?></div>
        </div>

        <div class="intro-stroke"></div>

        <div class="intro-item">
            <div class="intro-title"><?php _e('2    Build', 'axis-theme'); ?></div>
            <div class="intro-text"><?php _e('We supply and install every system in the room: walls, ceiling, floor, doors, lights, air, gases and controls. Nothing is left for someone else to coordinate.', 'axis-theme'); ?></div>
        </div>

        <div class="intro-stroke"></div>

        <div class="intro-item">
            <div class="intro-title"><?php _e('3    Certify', 'axis-theme'); ?></div>
            <div class="intro-text"><?php _e('We commission the finished theatre and support certification, then hand it over ready for the first operation.', 'axis-theme'); ?></div>
        </div>

    </div>

</section>

<!-- Certifications & Countries Section -->
<section class="cc-section">

    <div class="cc-content">

        <div class="cc-heading"><?php _e('Certified Management Systems', 'axis-theme'); ?></div>

        <div class="certifications">

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">9001</div>
                    <div class="cert-year">2015</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">13485</div>
                    <div class="cert-year">2016</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">14001</div>
                    <div class="cert-year">2015</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">45001</div>
                    <div class="cert-year">2018</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">37001</div>
                    <div class="cert-year">2016</div>
                </div>
            </div>

        </div>

    </div>

    <div class="cc-content">

        <div class="cc-heading"><?php _e('Projects in Greece and Abroad', 'axis-theme'); ?></div>

        <div class="countries">

            <div class="country"><?php _e('Germany', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Libya', 'axis-theme'); ?></div>
            <div class="country"><?php _e('England', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Norway', 'axis-theme'); ?></div>
            <div class="country"><?php _e('S. Arabia', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Egypt', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Russia', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Indonesia', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Skopje', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Albania', 'axis-theme'); ?></div>

        </div>

    </div>

</section>

<!-- Selected Operating Room Projects -->
<section class="or-layout">

    <div class="or-page-header">
        <div class="or-subheading"><?php _e('New, hybrid and digital theaters for public and private hospitals.', 'axis-theme'); ?></div>
        <div class="or-heading"><?php _e('Recent OR Projects', 'axis-theme'); ?></div>
    </div>

    <?php

    if (!function_exists('axis_render_tk_project_card')) :

        function axis_render_tk_project_card($post_id) {

            $client = get_post_meta($post_id, '_or_client', true) ?: 'Confidential';
            $bg_image = get_the_post_thumbnail_url($post_id, 'large');

            ?>

            <a href="<?php echo esc_url(get_the_permalink($post_id)); ?>" class="tk-project-card" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
                <div class="tk-project-details">
                    <div class="tk-project-title"><?php echo esc_html(get_the_title($post_id)); ?></div>
                    <div class="tk-project-client"><?php echo esc_html($client); ?></div>
                </div>
            </a>

            <?php

        }
    
    endif;

    $latest = new WP_Query(array(
        'post_type' => 'operating-room',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_rows_found' => true,
        'fields' => 'ids',
    ));
    
    $ids = $latest->posts;
    wp_reset_postdata();
    ?>

    <?php if ($ids) : ?>

        <div class="or-latest">

            <div class="latest-main">
                <?php axis_render_tk_project_card($ids[0]); ?>
            </div>

            <?php if (count($ids) > 1) : ?>
                <div class="latest-side">
                    <?php foreach (array_slice($ids, 1) as $id) : ?>
                        <?php axis_render_tk_project_card($id); ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        
        </div>

    <?php endif; ?>

</section>

<?php get_footer('or'); ?>