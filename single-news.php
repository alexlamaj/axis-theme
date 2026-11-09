<?php get_header(); ?>

<div class="page-layout">

    <article <?php echo post_class('single-post-wrapper'); ?>>

        <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <div class="single-post-header">

                <div class="single-post-title"><?php the_title(); ?></div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-post-thumbnail"><?php the_post_thumbnail(); ?></div>
                <?php endif; ?>

                <div class="single-post-meta">
                    <div class="single-post-category"><?php axis_post_categories(); ?></div>
                    <time class="single-post-date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                </div>

            </div>

            <section class="single-post-content"><?php the_content(); ?></section>

        <?php endwhile; endif; ?>

    </article>

</div>

<?php get_footer(); ?>