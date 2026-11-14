<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

    $client = get_post_meta(get_the_ID(), '_axis_project_client', true);
    $location = get_post_meta(get_the_ID(), '_axis_project_location', true);
    $categories = get_the_term_list(get_the_ID(), 'project_category', '', ', ');
    $bg_image = get_the_post_thumbnail_url(get_the_ID(), '2048x2048');
    $gallery_ids = get_post_meta(get_the_ID(), '_axis_project_gallery', true);
    $gallery_arr = !empty($gallery_ids) ? explode(',', $gallery_ids) : array();

?>

<article <?php post_class('single-project-wrapper'); ?>>

    <div class="single-project-thumbnail"<?php if ($bg_image) : ?> style="background-image: url('<?php echo esc_url($bg_image); ?>');"<?php endif; ?>>
        <h1 class="single-project-title"><?php the_title(); ?></h1>
    </div>

    <section class="main-post-content">

        <div class="meta-content">

            <?php if ($client) : ?>
                <div class="meta-element">
                    <span class="meta-label"><?php _e('Client', 'axis-theme'); ?></span>
                    <span class="meta-value"><?php echo esc_html($client); ?></span>
                </div>
            <?php endif; ?>

            <?php if ($location) : ?>
                <div class="meta-element">
                    <span class="meta-label"><?php _e('Location', 'axis-theme'); ?></span>
                    <span class="meta-value"><?php echo esc_html($location); ?></span>
                </div>
            <?php endif; ?>

            <?php if ($categories && !is_wp_error($categories)) : ?>
                <div class="meta-element">
                    <span class="meta-label"><?php _e('Project Category', 'axis-theme'); ?></span>
                    <span class="meta-value"><?php echo $categories; ?></span>
                </div>
            <?php endif; ?>

        </div>

        <div class="single-project-column">
            <div class="single-project-content">
                <?php the_content(); ?>
            </div>
        </div>

    </section>

    <?php if (!empty($gallery_arr)) : ?>

        <section class="single-project-gallery">

            <div class="gallery-heading"><?php _e('Project Gallery', 'axis-theme'); ?></div>

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

    <?php endif; ?>

</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

