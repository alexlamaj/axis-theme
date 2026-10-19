<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="or-header-drawer">

    <div class="drawer-content">

        <button class="or-close-toggle"><?php echo axis_icon('left-arrow'); ?></button>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="or-axis-logo"><?php echo axis_icon('AXIS LOGO NO BACKGROUND') ?></a>

        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'or_nav',
                'container' => false,
                'menu_class' => 'or-menu',
                'depth' => 0,
                'fallback' => false
            )); ?>
        </nav>

    </div>

</div>

<header class="axis-header-or">

    <div class="or-header-content">

        <div class="or-header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo axis_icon('AXIS LOGO NO BACKGROUND'); ?></a></div>

        <div class="or-header-nav">

            <nav>
                <?php wp_nav_menu(array(

                    'theme_location' => 'or_nav',
                    'container' => false,
                    'menu_class' => 'or-menu',
                    'depth' => 0,
                    'fallback' => false

                )); ?>
            </nav>

        </div>

    </div>

    <div class="or-mobile-header">

        <button class="or-mobile-toggle"><?php echo axis_icon('hamburger-icon'); ?></button>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="or-axis-logo"><?php echo axis_icon('AXIS LOGO NO BACKGROUND') ?></a>

    </div>

</header>

<main class="main-content">