<?php

/** 
 * Template Name: OR Contact
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$systems = [
	'walls'       => __( 'Modular Walls', 'axis-theme' ),
	'ceiling'     => __( 'Ceiling', 'axis-theme' ),
	'floor'       => __( 'Floor System', 'axis-theme' ),
	'doors'       => __( 'Hermetic Doors', 'axis-theme' ),
	'lights'      => __( 'Lights', 'axis-theme' ),
	'laminar'     => __( 'Laminar Flow System', 'axis-theme' ),
	'gases'       => __( 'Medical Gases', 'axis-theme' ),
	'control'     => __( 'Control Panel', 'axis-theme' ),
	'integration' => __( 'Integration System', 'axis-theme' ),
	'scrub'       => __( 'Scrub Units', 'axis-theme' ),
];

get_header('or');
?>

<div class="or-layout">

    <div class="or-page-header">
        <div class="or-subheading"><?php _e('A few details are enough to start. An architect or project manager from our team will come back to you.', 'axis-theme'); ?></div>
        <div class="or-heading"><?php _e('Tell Us About Your Room', 'axis-theme'); ?></div>
    </div>

    <section class="contact-layout">

        <form id="orContactForm" enctype="multipart/form-data">

            <div class="ot-field">
	            <span class="ot-field__label" id="or_systems_label"><?php _e( 'Which systems do you need?', 'axis-theme' ); ?><span><?php _e( ' Optional', 'axis-theme' ); ?></span></span>
	            <div class="ot-pills" role="group" aria-labelledby="or_systems_label" data-ot-systems>
		            <?php foreach ( $systems as $id => $label ) : ?>
			            <label class="ot-pill"><input type="checkbox" name="systems[]" value="<?php echo esc_attr( $id ); ?>"><span><?php echo esc_html( $label ); ?></span></label>
		            <?php endforeach; ?>
	            </div>
            </div>

            <div class="input-container">
                <div class="input-wrapper">
                    <label for="or_subject"><?php _e('What are you planning?', 'axis-theme'); ?></label>
                    <input type="text" id="or_subject" name="or_subject" autocomplete="off" required>
                </div>
                <ul class="input-dropdown">
                    <li><?php _e('A New Operating Room', 'axis-theme'); ?></li>
                    <li><?php _e('Renovating an Existing OR', 'axis-theme'); ?></li>
                    <li><?php _e('Convert your OR into Hybrid or Digital', 'axis-theme'); ?></li>
                    <li><?php _e('Another Kind of OR', 'axis-theme'); ?></li>
                    <li><?php _e('Other', 'axis-theme'); ?></li>
                </ul>
            </div>

            <div class="input-wrapper">
                <label for="or_full_name"><?php _e('Full Name', 'axis-theme'); ?></label>
                <input type="text" id="or_full_name" name="or_full_name" required>
            </div>

            <div class="input-wrapper">
                <label for="or_company"><?php _e('Company Or Hospital', 'axis-theme') ?><span><?php _e(' Optional', 'axis-theme'); ?></span></label>
                <input type="text" id="or_company" name="or_company">
            </div>

            <div class="input-wrapper">
                <label for="or_email"><?php _e('Email Address', 'axis-theme'); ?></label>
                <input type="email" id="or_email" name="or_email" required>
            </div>

            <div class="input-wrapper">
                <label for="or_phone"><?php _e('Phone Number', 'axis-theme'); ?></label>
                <input type="text" id="or_phone" name="or_phone" required>
            </div>

            <div class="input-wrapper">
                <label for="or_message"><?php _e('Anything Else?', 'axis-theme'); ?><span><?php _e(' Optional', 'axis-theme'); ?></span></label>
                <textarea name="or_message" id="or_message" rows="3"></textarea>
            </div>

            <button type="submit" class="submit-btn"><?php _e('Submit', 'axis-theme'); ?></button>

        </form>

        <div class="or-3d-section">

            <figure class="ot-room" data-ot-room
	            data-empty="<?php echo esc_attr__( 'Choose systems and they light up in the room.', 'axis-theme' ); ?>"
	            data-one="<?php echo esc_attr__( '1 system selected.', 'axis-theme' ); ?>"
	            data-many="<?php echo esc_attr__( '{n} systems selected.', 'axis-theme' ); ?>">
	            <svg class="ot" role="img" aria-label="<?php esc_attr_e( 'The operating theatre, with the systems you choose highlighted', 'axis-theme' ); ?>" viewBox="160 10 780 600"></svg>
	            <figcaption class="ot-room__cap" aria-live="polite"><?php esc_html_e( 'Choose systems and they light up in the room.', 'axis-theme' ); ?></figcaption>
            </figure>

            <div class="next-steps">

                <div class="next-title"><?php _e('What Happens Next', 'axis-theme'); ?></div>

                <div class="next-items">

                    <div class="next-item">
                        <div class="next-num">1</div>
                        <div class="next-head"><?php _e('We read your brief', 'axis-theme'); ?></div>
                        <div class="next-text"><?php _e('Room type, timing and the systems you need', 'axis-theme'); ?></div>
                    </div>

                    <div class="next-item">
                        <div class="next-num">2</div>
                        <div class="next-head"><?php _e('We review it with the team', 'axis-theme'); ?></div>
                        <div class="next-text"><?php _e('Room type, timing and the systems you need', 'axis-theme'); ?></div>
                    </div>

                    <div class="next-item">
                        <div class="next-num">3</div>
                        <div class="next-head"><?php _e('You get a first proposal', 'axis-theme'); ?></div>
                        <div class="next-text"><?php _e('Room type, timing and the systems you need', 'axis-theme'); ?></div>
                    </div>
                    
                </div>

            </div>

        </div>

    </section>

</div>

<?php get_footer('or'); ?>