<?php get_header() ?>

<div class="page-layout">

    <div class="error-title">ERROR 404</div>
    <div class="error-text"><?php _e('That\'s a shame! Guess our dev didn\'t work on what you are searching for...', 'axis-theme'); ?></div>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="error-link"><?php _e('Return to Starting Page', 'axis-theme'); ?></a>

</div>

<?php get_footer() ?>