<?php get_header(); ?>

<div class="page-layout">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

        <div class="page-title"><?php the_title(); ?></div>

        <section class="page-content"><?php the_content(); ?></section>

    <?php endwhile; else : ?>
        
        <?php global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
        get_template_part('404');
        exit; ?>

    <?php endif; ?>

</div>

<?php get_footer(); ?>