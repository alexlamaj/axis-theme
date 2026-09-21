<?php get_header() ?>

<main class="error-layout">

    <?php echo axis_icon('error-icon'); ?>

    <div class="error-heading">ERROR 404</div>

    <div class="error-text"><?php _e('The page you are searching for cannot be found', 'axis-theme'); ?></div>

    <a href="<?php echo esc_url(home_url('/')) ?>" class="go-back"><?php _e('Return to Homepage', 'axis-theme'); ?></a>

</main>

<?php get_footer() ?>