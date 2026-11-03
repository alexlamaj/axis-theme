<?php

/**
 * Template Name: HC Turn-Key
*/

$systems = [
    [
        'image' => '',
        'title' => __('VAELMA Modular Walls System', 'axis-theme'),
        'text' => __('Hygienic walls that go up fast, sit perfectly flat and can be opened for service without demolition.', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Ceiling', 'axis-theme'),
        'text' => __('A ceiling that matches the wall grid, so every panel lines up and every panel can come out.h', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Floor System', 'axis-theme'),
        'text' => __('Operating rooms have the strictest discharge requirements in a hospital. The floor is how they are met.', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Hermetic Doors', 'axis-theme'),
        'text' => __('Operating rooms and ICUs need doors that seal, so contamination stays out and equipment works safely.', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Surgical Lights', 'axis-theme'),
        'text' => __('Light intensity, field size and colour temperature decide how precisely a surgeon sees, and how tired they get.', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Laminar Flow System', 'axis-theme'),
        'text' => __('Clean air moves straight down over the patient and out, with no turbulence to carry contamination across.', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Medical Gases', 'axis-theme'),
        'text' => __('Every part needed for a full medical gas installation, from the pipeline to the outlet the clinician uses.', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Control Panel & Integration System', 'axis-theme'),
        'text' => __('The OPT Control Panel gives the surgical team a single, familiar source of information. One big screen for the room\'s video, images and patient data.', 'axis-theme') 
    ],
    [
        'image' => '',
        'title' => __('Scrub Units', 'axis-theme'),
        'text' => __('A single-block scrub station designed to be cleaned, with no sharp corners or edges.', 'axis-theme') 
    ]
];

get_header(); ?>

<div class="page-layout">

    <div class="page-header">
        <div class="header-text"><?php _e('A turn-key solution for any healthcare project: we study, supply, build, install and service the systems that make a room work.', 'axis-theme'); ?></div>
        <div class="header-title"><?php _e('Everything inside the room from one supplier', 'axis-theme'); ?></div>
    </div>

    <section class="solution-runs">

        <div class="solution-run">
            <div class="run-num">1</div>
            <div class="run-title"><?php _e('Pre-Study', 'axis-theme'); ?></div>
            <div class="run-text"><?php _e('Concept, architectural diagram, 3D renderings and a preliminary proposal, with the electromechanical pre-study.', 'axis-theme'); ?></div>
        </div>

        <div class="solution-run">
            <div class="run-num">2</div>
            <div class="run-title"><?php _e('Final Study', 'axis-theme'); ?></div>
            <div class="run-text"><?php _e('Architectural, static and mechanical studies finalised and licensed with the urban planning office.', 'axis-theme'); ?></div>
        </div>

        <div class="solution-run">
            <div class="run-num">3</div>
            <div class="run-title"><?php _e('Detailed Design', 'axis-theme'); ?></div>
            <div class="run-text"><?php _e('Construction details, specifications and tender documents for pricing and supervision.', 'axis-theme'); ?></div>
        </div>

        <div class="solution-run">
            <div class="run-num">4</div>
            <div class="run-title"><?php _e('Construction', 'axis-theme'); ?></div>
            <div class="run-text"><?php _e('Turn-key build and installation, coordinated by one project team. EU GMP and ISO 14644 validation, handover, then preventive maintenance.', 'axis-theme'); ?></div>
        </div>

    </section>

    <section class="tks-grid">

        <?php foreach ($systems as $system) : ?>
            <div class="tks-card">
                <div class="tks-img"><?php echo axis_icon(esc_html($system['image'])); ?></div>
                <div class="tks-title"><?php echo esc_html($system['title']); ?></div>
                <div class="tks-text"><?php echo esc_html($system['text']); ?></div>
            </div>
        <?php endforeach; ?>

    </section>

    <section class="or-redirect">

        <div class="redirect-img"></div>

        <div class="redirect-content">

            <div class="redirect-heading"><?php _e('The Same Systems, Explored Room by Room', 'axis-theme'); ?></div>
            <div class="redirect-text"><?php _e('Each system has its own page on the operating theatres site, with specifications, materials and an interactive room.', 'axis-theme'); ?></div>
            <a href="<?php echo esc_url(home_url('/turn-key-solutions/')); ?>" class="redirect-link"><?php _e('View Operating Rooms', 'axis-theme'); ?> &rarr;</a>

        </div>

    </section>

</div>

<?php get_footer(); ?>