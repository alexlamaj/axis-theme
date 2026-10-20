<?php get_header('or'); ?>

<div class="or-layout">

    <section class="or-page-header">
        <div class="or-subheading"><?php _e('All projects across the world, planned, built and equipped by Axis Medical.', 'axis-theme'); ?></div>
        <div class="or-heading"><?php _e('Operating Room Projects', 'axis-theme'); ?></div>
    </section>

    <section class="or-grid">

        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        
            $systems = get_post_meta(get_the_ID(), '_or_systems', true);

            if (!is_array($systems)) {$systems = array();}

            $client_name = get_post_meta(get_the_ID(), '_or_client', true) ?: 'Confidential';
            $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large');

        ?>

        <a href="<?php the_permalink(); ?>" class="project-card" style="background-image: url('<?php echo esc_url($bg_image); ?>');">

            <div class="systems">
                <?php foreach ($systems as $system): ?>
                    <span class="system-pill">
                        <?php echo esc_html($system); ?>
                    </span>
                <?php endforeach; ?>
            </div>

            <div class="project-details">
                <div class="project-title"><?php the_title(); ?></div>
                <div class="project-client"><?php echo esc_html($client_name); ?></div>
            </div>

        </a>

        <?php endwhile; else : ?>
            <p>No Projects Found!</p>
        <?php endif; ?>

    </section>

</div>

<?php get_footer('or'); ?>