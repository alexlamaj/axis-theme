<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <?php $css_version = filemtime( get_template_directory() . '/css/custom-styles-product.css' ); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-styles-product.css?v=<?php echo $css_version; ?>">

</head>

<body <?php body_class('custom-styles-product'); ?>>

<?php wp_body_open(); ?>



<div class="header-product-drawer">



    <div class="header-drawer-pr-content">



        <div style="display: flex; flex-direction: column; gap: 15px;">

            <button class="close-pr-drawer"><?php echo axis_icon('left-arrow-white'); ?></button>

            <div class="axis-mobile-logo-width-slider"><?php echo axis_icon('axis-logo'); ?></div>

        </div>



        <div class="header-product-navigation">



            <nav>

                <?php wp_nav_menu(array(

                    'theme_location' => 'primary',

                    'container' => false,

                    'menu_class' => 'main-menu-product',

                    'depth' => 0,

                    'fallback_cb' => false

                )); ?>

            </nav>



        </div>



        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-outline"><?php _e('Contact Us', 'axis-theme'); ?></a>



    </div>



</div>



<header class="axis-product-header">



    <div class="header-product-content">



        <div><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('axis-logo'); ?></a></div>



        <div class="header-product-navigation">



            <nav>

                <?php wp_nav_menu(array(

                'theme_location' => 'primary',

                'container' => false,

                'menu_class' => 'main-menu-product',

                'depth' => 0,

                'fallback_cb' => false

                )); ?>

            </nav>



        </div>



        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-outline"><?php _e('Contact Us', 'axis-theme'); ?></a>



    </div>



    <div class="mobile-header-product">



        <div class="mobile-header-pr-logo">

            <button class="mobile-pr-toggle"><?php echo axis_icon('hamburger-icon'); ?></button>

            <a class="axis-mobile-logo-width" href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('axis-logo'); ?></a>

        </div>



    </div>



</header>