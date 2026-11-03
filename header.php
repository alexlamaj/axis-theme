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

    <div class="drawer-content">

        <button class="close-toggle"><?php echo axis_icon('left-arrow'); ?></button>
        <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('logo negative'); ?></a>

        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'main-menu',
                'depth' => 0,
                'fallback' => false
            )); ?>
        </nav>

    </div>

</div>

<header class="axis-header">

    <div class="header-content">

        <div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('logo negative'); ?></a></div>

        <div class="header-nav">
            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'main-menu',
                    'depth' => 0,
                    'fallback' => false
                )); ?>
            </nav>
        </div>

    </div>

    <div class="axis-mobile">
        <button class="mobile-toggle"><?php echo axis_icon('hamburger-icon'); ?></button>
        <a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('logo negative'); ?></a>
    </div>

</header>

<main class="main-content">