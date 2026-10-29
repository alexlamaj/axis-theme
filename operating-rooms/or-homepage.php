<?php

/** 
 * Template Name: OR Homepage Page
*/

if (!defined('ABSPATH')) {exit;}

$url = static function ($path) {
    $base = function_exists('pll_home_url') ? pll_home_url() : home_url('/');
    return trailingslashit($base) . ltrim($path, '/');
};

$paths = [
    'walls' => 'services-features/#features-vaelma',
    'ceiling' => 'services-features/#features-ceiling',
    'floor' => 'services-features/#features-floor',
    'doors' => 'services-features/#features-doors',
    'lights' => 'services-features/#features-lights',
    'laminar' => 'services-features/#features-laminar',
    'gases' => 'services-features/#features-gases',
    'control' => 'services-features/#features-control',
    'integration' => 'services-features/#features-integration',
    'scrub' => 'services-features/#features-scrub'
];

$brochure_url = 'https://axismedical.gr/wp-content/uploads/2026/10/Axis42x42_4ply-copy.pdf';

$systems = [
	[
		'id' => 'walls',
		'label' => __('VAELMA Modular Wall System', 'axis-theme'),
		'title' => __('Flush stainless steel, HPL, glass or SMS panels on a steel frame. Sealed against contaminated air and removable one panel at a time.', 'axis-theme'),
		'summary' => __('±25 mm floor levelling, approximately', 'axis-theme')
	],
	[
		'id' => 'ceiling',
		'label' => __('Ceiling', 'axis-theme'),
		'title' => __('Removable panels on the same grid as the walls, sealed and flush, with no exposed edges.', 'axis-theme'),
		'summary' => __('Class 0 or 1 fire reaction of every component', 'axis-theme')
	],
	[
		'id' => 'floor',
		'label' => __('Floor System', 'axis-theme'),
		'title' => __('Antistatic and conductive flooring that carries static charge safely away from the theatre.', 'axis-theme'),
		'summary' => __('5×10⁴ to 10⁶ Ω conductive floor resistance', 'axis-theme')
	],
	[
		'id' => 'doors',
		'label' => __('Hermetic Doors', 'axis-theme'),
		'title' => __('Hermetic sliding doors with an antibacterial surface. They limit air leakage between the theatre and its surroundings.', 'axis-theme'),
		'summary' => __('99.9%of bacteria killed in 24 hours, as stated', 'axis-theme')
	],
	[
		'id' => 'lights',
		'label' => __('Lights', 'axis-theme'),
		'title' => __('Surgical lights with shadow management and variable light fields, plus sealed ceiling luminaires for clean rooms.', 'axis-theme'),
		'summary' => __('600×600 mm recessed grid fits the opal luminaire', 'axis-theme')
	],
	[
		'id' => 'laminar',
		'label' => __('Laminar Flow System', 'axis-theme'),
		'title' => __('Vertical, turbulence-free airflow over the operating field. Axis supplies, installs and builds the full system.', 'axis-theme'),
		'summary' => __('Vertical turbulence-free airflow', 'axis-theme')
	],
	[
		'id' => 'gases',
		'label' => __('Medical Gases', 'axis-theme'),
		'title' => __('Complete medical gas systems, down to the outlets at the final delivery points.', 'axis-theme'),
		'summary' => __('2-part outlets: a base and a finishing part', 'axis-theme')
	],
	[
		'id' => 'control',
		'label' => __('Control Panel', 'axis-theme'),
		'title' => __('One panel for signals, alarms and information. Technical staff reach every subsystem without opening the wall.', 'axis-theme'),
		'summary' => __('1 panel for signals, alarms and information', 'axis-theme')
	],
	[
		'id' => 'integration',
		'label' => __('Integration System', 'axis-theme'),
		'title' => __('One big screen for the theatre\'s video, images and patient systems, with PACS, KIS and RIS in reach and HL7 and DICOM behind it.', 'axis-theme'),
		'summary' => __('4K screen, with video and audio capture', 'axis-theme')
	],
	[
		'id' => 'scrub',
		'label' => __('Scrub Units', 'axis-theme'),
		'title' => __('Electronic hand-wash units in stainless steel or SMS, with a smooth 30° angled panel that stops dirt building up.', 'axis-theme'),
		'summary' => __('30° panel angle, so dirt cannot settle', 'axis-theme')
	]
];

foreach ( $systems as &$system ) {
	$system['href'] = $url( $paths[ $system['id'] ] );
}
unset( $system );

get_header('or');

?>

<!-- Hero Section -->
<section class="ot-hero" data-ot-hero aria-labelledby="ot-hero-title" style="margin-top: 100px;">

	<div class="ot-hero__wrap">

		<div class="ot-hero__top">
			<h1 id="ot-hero-title"><?php _e('Operating Theaters, Built in Turn-Key', 'axis-theme'); ?></h1>
			<p class="ot-hero__lead"><?php _e('One team plans, builds, equips and certifies the whole room.', 'axis-theme'); ?></p>
		</div>

		<div class="stage"
			data-systems="<?php echo esc_attr(wp_json_encode($systems)); ?>"
			data-more="<?php esc_attr_e('View More', 'axis-theme'); ?>"
			data-model="<?php echo esc_url($model_url); ?>">

			<div class="stage__canvas">
				<svg class="ot" role="img" aria-label="Drawing of an operating theatre with its ten systems labelled" viewBox="0 0 1200 640"></svg>
				<div class="stage__labels"></div>
			</div>

			<div class="stage__foot">
				<div class="ot-hero__cta">
					<a class="btn btn--solid" href="<?php echo esc_url($url('operating-rooms/')); ?>"><?php _e('View Our Projects', 'axis-theme'); ?></a>
					<a class="btn" href="<?php echo esc_url($brochure_url); ?>"><?php _e('Download Brochure', 'axis-theme'); ?></a>
				</div>
				<div class="stage__detail" aria-live="polite"></div>
			</div>

		</div>

	</div>

</section>

<!-- Intro Section -->
<section class="intro-section">

    <div class="intro-image">
        <div class="intro-img-heading"><?php _e('From first drawing to first operation', 'axis-theme'); ?></div>
        <div class="intro-img-text"><?php _e('Three stages, one team, one point of responsibility', 'axis-theme'); ?></div>
    </div>

    <div class="intro-content">

        <div class="intro-item">
            <div class="intro-title"><?php _e('1    Plan', 'axis-theme'); ?></div>
            <div class="intro-text"><?php _e('We agree scope, budget and layout with the surgical team who will use the room. Architects and project managers produce the drawings and the financial and technical estimates.', 'axis-theme'); ?></div>
        </div>

        <div class="intro-stroke"></div>

        <div class="intro-item">
            <div class="intro-title"><?php _e('2    Build', 'axis-theme'); ?></div>
            <div class="intro-text"><?php _e('We supply and install every system in the room: walls, ceiling, floor, doors, lights, air, gases and controls. Nothing is left for someone else to coordinate.', 'axis-theme'); ?></div>
        </div>

        <div class="intro-stroke"></div>

        <div class="intro-item">
            <div class="intro-title"><?php _e('3    Certify', 'axis-theme'); ?></div>
            <div class="intro-text"><?php _e('We commission the finished room and support certification, then hand it over ready for the first operation.', 'axis-theme'); ?></div>
        </div>

    </div>

</section>

<!-- Certifications & Countries Section -->
<section class="cc-section">

    <div class="cc-content">

        <div class="cc-heading"><?php _e('Certified Management Systems', 'axis-theme'); ?></div>

        <div class="certifications">

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">9001</div>
                    <div class="cert-year">2015</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">13485</div>
                    <div class="cert-year">2016</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">14001</div>
                    <div class="cert-year">2015</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">45001</div>
                    <div class="cert-year">2018</div>
                </div>
            </div>

            <div class="circle">
                <div class="inner-circle">
                    <div class="cert-iso">ISO</div>
                    <div class="cert-number">37001</div>
                    <div class="cert-year">2016</div>
                </div>
            </div>

        </div>

    </div>

    <div class="cc-content">

        <div class="cc-heading"><?php _e('Projects in Greece and Abroad', 'axis-theme'); ?></div>

        <div class="countries">

            <div class="country"><?php _e('Germany', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Libya', 'axis-theme'); ?></div>
            <div class="country"><?php _e('England', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Norway', 'axis-theme'); ?></div>
            <div class="country"><?php _e('S. Arabia', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Egypt', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Russia', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Indonesia', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Skopje', 'axis-theme'); ?></div>
            <div class="country"><?php _e('Albania', 'axis-theme'); ?></div>

        </div>

    </div>

</section>

<!-- Selected Operating Room Projects -->
<section class="or-layout">

    <div class="or-page-header">
        <div class="or-subheading"><?php _e('New, hybrid and digital rooms for public and private hospitals.', 'axis-theme'); ?></div>
        <div class="or-heading"><?php _e('Recent OR Projects', 'axis-theme'); ?></div>
    </div>

    <?php

    if (!function_exists('axis_render_tk_project_card')) :

        function axis_render_tk_project_card($post_id) {

            $client = get_post_meta($post_id, '_or_client', true) ?: 'Confidential';
            $bg_image = get_the_post_thumbnail_url($post_id, 'large');

            ?>

            <a href="<?php echo esc_url(get_the_permalink($post_id)); ?>" class="tk-project-card" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
                <div class="tk-project-details">
                    <div class="tk-project-title"><?php echo esc_html(get_the_title($post_id)); ?></div>
                    <div class="tk-project-client"><?php echo esc_html($client); ?></div>
                </div>
            </a>

            <?php

        }
    
    endif;

    $latest = new WP_Query(array(
        'post_type' => 'operating-room',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_rows_found' => true,
        'fields' => 'ids',
    ));
    
    $ids = $latest->posts;
    wp_reset_postdata();
    ?>

    <?php if ($ids) : ?>

        <div class="or-latest">

            <div class="latest-main">
                <?php axis_render_tk_project_card($ids[0]); ?>
            </div>

            <?php if (count($ids) > 1) : ?>
                <div class="latest-side">
                    <?php foreach (array_slice($ids, 1) as $id) : ?>
                        <?php axis_render_tk_project_card($id); ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        
        </div>

    <?php endif; ?>

</section>

<?php get_footer('or'); ?>