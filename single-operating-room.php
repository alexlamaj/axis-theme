<?php get_header('or'); ?>

<?php if (have_posts()) : while(have_posts()) : the_post();

    $client = get_post_meta(get_the_ID(), '_or_client', true);
    $location = get_post_meta(get_the_ID(), '_or_location', true);
    $sector = get_post_meta(get_the_ID(), '_or_sector', true);
    $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $systems = get_post_meta(get_the_ID(), '_or_systems', true);

    if (!is_array($systems)) {$systems = array();}

    $gallery_ids = get_post_meta(get_the_ID(), '_or_gallery', true );
    $gallery_arr = !empty( $gallery_ids ) ? explode( ',', $gallery_ids ) : array();

?>

<article <?php post_class('single-post-wrapper'); ?>>

    <div class="single-thumbnail" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
        <div class="single-title"><?php the_title(); ?></div>
    </div>

    <section class="main-post-content">

        <div class="meta-content">

            <div class="meta-el">
                <?php if ($client) : ?>
                    <span class="meta-label"><?php _e('Client', 'axis-theme'); ?></span>
                    <span class="meta-value"><?php echo esc_html($client); ?></span>
                <?php endif; ?>
            </div>

            <div class="meta-el">
                <?php if ($location) : ?>
                    <span class="meta-label"><?php _e('Location', 'axis-theme'); ?></span>
                    <span class="meta-value"><?php echo esc_html($location); ?></span>
                <?php endif; ?>
            </div>

            <div class="meta-el">
                <?php if ($sector) : ?>
                    <span class="meta-label"><?php _e('Sector', 'axis-theme'); ?></span>
                    <span class="meta-value"><?php echo esc_html($sector); ?></span>
                <?php endif; ?>
            </div>

        </div>

        <div class="post-content-column">

            <div class="or-post-content">
                <?php the_content(); ?>
            </div>

            <div class="post-systems">

                <div class="post-systems-text">Systems Used</div>

                <div class="post-systems-container">
                    <?php foreach ($systems as $system) : ?>
                        <span class="post-pill"><?php echo esc_html($system); ?></span>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>

    </section>

    <section class="post-gallery">

        <div class="gallery-heading">Project Gallery</div>

        <div class="gallery-grid">

            <?php foreach ($gallery_arr as $img_id) : 
                $full_url = wp_get_attachment_image_url($img_id, 'full');
                if (!$full_url) continue;    
            ?>
                <a href="<?php echo esc_url($full_url); ?>" class="gallery-item">
                    <?php echo wp_get_attachment_image($img_id, 'large', false, ['loading' => 'lazy']); ?>
                </a>
            <?php endforeach; ?>

        </div>

    </section>

</article>

<?php endwhile; endif; ?>

<?php get_footer('or'); ?>