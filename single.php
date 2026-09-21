<?php get_header(); ?>

<main class="main-layout site-main-content">

    <article <?php echo post_class('single-post-wrapper page-layout') ?>>

        <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <!-- Post Header -->
            <div class="post-header">

                <div class="single-post-title"><?php the_title(); ?></div>
                <div class="post-meta">
                    <div class="post-category"><?php axis_post_categories();; ?></div>
                    <time class="post-date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                </div>

            </div>

            <!-- Post Thumbnail -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="single-post-thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="single-post-content"><?php the_content(); ?></div>

        <?php endwhile; endif; ?>

    </article>

</main>

<?php get_footer(); ?>