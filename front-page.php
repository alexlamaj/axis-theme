<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- Front Page Container -->
<div class="front-page">

    <!-- Logo -->
    <div class="front-logo"><?php echo axis_icon('axis-logo'); ?></div>

    <!-- Healthcare Construction -->
    <div class="front-health">

        <div class="front-icon"><?php echo axis_icon('svg-construction 1'); ?></div>

        <div class="health-content">

            <div class="health-heading"><?php _e('Healthcare Construction & Medical Devices', 'axis-theme'); ?></div>
            <div class="health-text"><?php _e('Full Turn-Key delivery of hospitals, clinics, ICUs, IFV Units and cleanrooms. From concept and permitting through to handover', 'axis-theme'); ?></div>

            <div class="front-tabs">
                <div class="front-tab"><?php _e('Project Planning', 'axis-theme'); ?></div>
                <div class="front-tab"><?php _e('Construction', 'axis-theme'); ?></div>
                <div class="front-tab"><?php _e('Renovation', 'axis-theme'); ?></div>
                <div class="front-tab"><?php _e('GMP Certification', 'axis-theme'); ?></div>
            </div>

            <a href="<?php echo esc_url(home_url('')); ?>" class="health-btn"><?php _e('Explore Construction', 'axis-theme'); ?></a>

        </div>

    </div>

    <!-- Operating Rooms -->
    <div class="front-or">

        <div class="front-icon-or"><?php echo axis_icon('svg-operating-room 1'); ?></div>

        <div class="front-or-content">

            <div class="front-or-heading"><?php _e('Operating Rooms', 'axis-theme'); ?></div>
            <div class="front-or-text"><?php _e('Expert design and installation of surgical suites: modular walls, laminar flow, hybrid ORs, medical gases, and sterility compliance', 'axis-theme'); ?></div>

            <div class="front-tabs">
                <div class="front-tab" style="background: linear-gradient(135deg, rgba(34, 34, 34, 0.1) 0%, rgba(255, 255, 255, 0.5)); border: 1px solid rgba(34, 34, 34, 0.25); color: #222222 !important; box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 12px 30px rgba(255, 255, 255, 0.4)"><?php _e('VAELMA Walls', 'axis-theme'); ?></div>
                <div class="front-tab" style="background: linear-gradient(135deg, rgba(34, 34, 34, 0.1) 0%, rgba(255, 255, 255, 0.5)); border: 1px solid rgba(34, 34, 34, 0.25); color: #222222 !important; box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 12px 30px rgba(255, 255, 255, 0.4)"><?php _e('Laminar Flow', 'axis-theme'); ?></div>
                <div class="front-tab" style="background: linear-gradient(135deg, rgba(34, 34, 34, 0.1) 0%, rgba(255, 255, 255, 0.5)); border: 1px solid rgba(34, 34, 34, 0.25); color: #222222 !important; box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 12px 30px rgba(255, 255, 255, 0.4)"><?php _e('Hybrid ORs', 'axis-theme'); ?></div>
                <div class="front-tab" style="background: linear-gradient(135deg, rgba(34, 34, 34, 0.1) 0%, rgba(255, 255, 255, 0.5)); border: 1px solid rgba(34, 34, 34, 0.25); color: #222222 !important; box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 12px 30px rgba(255, 255, 255, 0.4)"><?php _e('Medical Gases', 'axis-theme'); ?></div> 
            </div>

            <a href="<?php echo esc_url(home_url('')); ?>" class="front-or-btn"><?php _e('Explore Operating Rooms', 'axis-theme'); ?></a>

        </div>

    </div>

</div>
    
<?php wp_footer(); ?>

</body>
</html>