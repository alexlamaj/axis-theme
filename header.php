<!DOCTYPE html>

<html <?php language_attributes(); ?>>



<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<?php wp_body_open(); ?>



<div class="header-drawer">



        <div class="header-drawer-content">



            <div style="display:flex; flex-direction:column; gap: 15px;">

                <button class="close-drawer"><?php echo axis_icon('left-arrow-white'); ?></button>

                <div class="axis-mobile-logo-width-slider"><?php echo axis_icon('axis-logo'); ?></div>

            </div>



            <div class="header-navigation">



                <nav>

                    <?php wp_nav_menu(array(

                        'theme_location' => 'primary',

                        'container' => false,

                        'menu_class' => 'main-menu',

                        'depth' => 0,

                        'fallback_cb' => false,

                    )); ?>

                </nav>



            </div>



            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-outline"><?php _e('Contact Us', 'axis-theme'); ?></a>



        </div>



</div>

    

<header class="axis-header">



    <div class="header-content">



        <div>

            <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('axis-logo', 'header-logo-img'); ?></a>

        </div>



        <div class="header-navigation">



            <nav>

                <?php wp_nav_menu(array(

                'theme_location' => 'primary',

                'container' => false,

                'menu_class' => 'main-menu',

                'depth' => 0,

                'fallback_cb' => false

                )); ?>

            </nav>



        </div>



        <a href="<?php 
                if ( function_exists('pll_current_language') && pll_current_language() === 'el' ) {
                    echo esc_url( home_url( '/el/επικοινωνία/' ) );
                } else {
                    echo esc_url( home_url( '/contact-us/' ) );
                }
        ?>" class="btn-outline"><?php _e('Contact Us', 'axis-theme'); ?></a>



    </div>



    <div class="mobile-header">



        <div class="mobile-header-logo">

            <button class="mobile-toggle"><?php echo axis_icon('hamburger-icon'); ?></button>

            <a class="axis-mobile-logo-width" href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('axis-logo') ?></a>

        </div>



    </div>



</header>



<main class="main-content">