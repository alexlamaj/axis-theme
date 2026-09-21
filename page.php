<?php get_header() ?>

<main class="main-layout site-main-content">

    <div class="page-layout">

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

    <?php 
        $turnkey_id = 20;
        $turnkey_page = (wp_get_post_parent_id(get_the_ID()) === $turnkey_id);
    ?>
    
    <!-- Page Title Banner -->
    <?php if (!$turnkey_page) : ?>
    <div class="page-banner">

        <div class="page-title"><?php the_title(); ?></div>
        <div class="stroke"></div>

    </div>
    <?php else : ?>
    <div class="page-banner">

        <div class="page-title"><?php _e('Turn-Key Solutions', 'axis-theme'); ?></div>
        <div class="stroke"></div>

    </div>
    <?php endif; ?>

    <!-- Content Load -->
    <?php the_content(); ?>

    <!-- Error Template if Page doesn't exist! -->
    <?php endwhile; else : ?>

    <?php global $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();
    get_template_part('404');
    exit;
    ?>

    <?php endif; ?>

    </div>

</main>

<?php get_footer() ?>