<?php

/**
 * Template Name: Company
*/

$values = [[
    'icon' => '',
    'title' => __('Quality', 'axis-theme'),
    'text' => __('We make sure to have certifications from accredited bodies, both for the products we use and for the procedures we follow during the implementation of the projects assigned to us.', 'axis-theme')
],[
    'icon' => '',
    'title' => __('Safety', 'axis-theme'),
    'text' => __('Safety is a priority for us; we take all the necessary protection measures for our employees, facilities, machines, and the environment in each of our projects, making sure that there is always the appropriate safety notifications.', 'axis-theme')
],[
    'icon' => '',
    'title' => __('Creativity', 'axis-theme'),
    'text' => __('Our team uses all the experience it has gained in the field of healthcare to create and propose new solutions of modern healthcare systems', 'axis-theme')
],[
    'icon' => '',
    'title' => __('Innovation', 'axis-theme'),
    'text' => __('Meeting the modern needs of healthcare, we offer innovative equipment with integrated installation and customization', 'axis-theme')
],[
    'icon' => '',
    'title' => __('Professionalism', 'axis-theme'),
    'text' => __('When creating a project we take into consideration the needs of end user, the layout of the space, the requirements of the medical equipment and the design of the interior', 'axis-theme')
],[
    'icon' => '',
    'title' => __('Technology', 'axis-theme'),
    'text' => __('We offer hi-end Control Panel solutions for surgeries, Modular Wall System for avoiding joints, operating sinks, Laminar Flow systems, automatic operating doors with elbow buttons.', 'axis-theme')
]];

$certs = [[
    'prefix' => 'ISO',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/ISO-9001-ENG-2026.pdf',
    'code' => 9001,
    'year' => 2015,
    'title' => 'ISO 9001:2015',
    'desc' => __('Quality Management System', 'axis-theme')
],[
    'prefix' => 'ISO',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/ISO_13485_2024_ENG.pdf',
    'code' => 13485,
    'year' => 2016,
    'title' => 'ISO 13485:2016',
    'desc' => __('Quality Management System for Medical Devices', 'axis-theme')
],[
    'prefix' => 'ISO',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/Certificate-ISO-14001-EN-IOANNIDIS.pdf',
    'code' => 14001,
    'year' => 2015,
    'title' => 'ISO 14001:2015',
    'desc' => __('Environmental Management System', 'axis-theme')
],[
    'prefix' => 'ISO',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/ISO-45001-EN-IOANNIDIS.pdf',
    'code' => 45001,
    'year' => 2018,
    'title' => 'ISO 45001:2018',
    'desc' => __('Occupational Health and Safety Management System', 'axis-theme')
],[
    'prefix' => 'ISO',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/ISO-37001-EN-IOANNIDIS-AXIS-MEDICAL.pdf',
    'code' => 37001,
    'year' => 2016,
    'title' => 'ISO 37001:2016',
    'desc' => __('Anti-Bribery Management System', 'axis-theme')
],[
    'prefix' => 'YA',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/%CE%A5%CE%91-%CE%943%CE%B14822_2025.pdf',
    'code' => 'Δ3α',
    'year' => 2025,
    'title' => 'YA D3A4822-2025',
    'desc' => __('Good Practice of Distribution of Medical Technological Products', 'axis-theme')
]];

$brocs = [[
    'color' => 'white',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/AxisCatalogue2026_b-1.pdf',
    'title' => __('AXIS Medical Catalogue', 'axis-theme'),
    'sub_title' => 2025
],[
    'color' => 'yellow',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/Vaelma22x21_2026-1.pdf',
    'title' => 'VAELMA',
    'sub_title' => __('Modular Wall Systems', 'axis-theme')
],[
    'color' => 'white',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/18-bed-mICU.pdf',
    'title' => __('18 Bed Mobile ICUs', 'axis-theme'),
    'sub_title' => __('Case Study', 'axis-theme')
],[
    'color' => 'black',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/Cannabis-Catalogue.pdf',
    'title' => __('Pharmaceutical Cannabis Facilities Roadmap', 'axis-theme'),
    'sub_title' => __('Guide', 'axis-theme')
],[
    'color' => 'yellow',
    'file_link' => 'https://axismedical.gr/wp-content/uploads/2026/09/Marketing_material_MultiClot_-2026.pdf',
    'title' => 'MultiClot',
    'sub_title' => __('Product Sheet', 'axis-theme')
]];

get_header(); ?>

<div class="page-layout">

    <section class="page-header">
        <div class="header-text"><?php _e('Axis Medical is a planning, construction and trading company for the healthcare sector, based in Thessaloniki, Greece.', 'axis-theme'); ?></div>
        <div class="header-title"><?php _e('The team behind healthcare spaces that work.', 'axis-theme'); ?></div>
    </section>

    <section class="company-content">

        <div class="comp-nav">
            <a href="#about-us" class="comp-link"><?php _e('About Us', 'axis-theme'); ?></a>
            <a href="#core-values" class="comp-link"><?php _e('Core Values', 'axis-theme'); ?></a>
            <a href="#our-team" class="comp-link"><?php _e('Our Team', 'axis-theme'); ?></a>
            <a href="#certifications" class="comp-link"><?php _e('Certifications', 'axis-theme'); ?></a>
            <a href="#brochures" class="comp-link"><?php _e('Brochures', 'axis-theme'); ?></a>
        </div>

        <section class="about-us" id="about-us">

            <div class="about-row">
                <div class="row-content">
                    <div class="row-title"><?php _e('Planning, construction and trading, with one focus.', 'axis-theme'); ?></div>
                    <div class="row-text"><?php _e('Our expertise is the healthcare sector, especially operating theatres, intensive care units, cleanrooms and aseptic areas. Experienced, specially educated hospital-design staff keep quality high at each stage, from design to construction.', 'axis-theme'); ?></div>
                </div>
                <div class="row-img-1"><?php echo axis_icon('IATREIO_54_alogo-2048x1366'); ?></div>
            </div>

            <div class="about-row">
                <div class="row-img-2"><?php echo axis_icon('ΚΑΤΑΣΚΕΥΗ-ΚΑΙ-ΑΝΑΚΑΙΝΙΣΗ-scaled-1-2048x1366'); ?></div>
                <div class="row-content">
                    <div class="row-title"><?php _e('Our Mission', 'axis-theme'); ?></div>
                    <div class="row-text"><?php _e('Is to give clients superior service, put safety first, create opportunities for our people and deliver exceptional work on time. Axis Medical, General Commercial Register No. 128456304000.', 'axis-theme'); ?></div>
                    <a href="<?php echo esc_url(home_url('/project/')); ?>"><?php _e('What we build', 'axis-theme'); ?> &rarr;</a>
                </div>
            </div>

        </section>

        <section class="core-values" id="core-values">
            <div class="comp-section-title"><?php _e('Six Values We Build By', 'axis-theme'); ?></div>
            <div class="value-grid">
                <?php foreach ($values as $value) : ?>
                    <div class="value-card">
                        <div class="value-header">
                            <div class="value-icon"><?php echo axis_icon(esc_html($value['icon'])); ?></div>
                            <div class="value-title"><?php echo esc_html($value['title']); ?></div>
                        </div>
                        <div class="value-text"><?php echo esc_html($value['text']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="our-team" id="our-team">
            <div class="our-team-header">
                <div class="comp-section-title"><?php _e('Engineers, Architects and Planners', 'axis-theme'); ?></div>
                <a href="<?php echo esc_url(home_url('/careers/')); ?>" class="btn-primary"><?php _e('Join the Team', 'axis-theme'); ?> &rarr;</a>
            </div>
            <?php echo do_shortcode('[axis_team_cards]'); ?>
        </section>

        <section class="certs" id="certifications">
            <div class="comp-section-title"><?php _e('Certified, Audited and Accountable', 'axis-theme'); ?></div>
            <div class="cert-grid">
                <?php foreach ($certs as $cert) : ?>
                    <a href="<?php echo esc_url($cert['file_link']); ?>" class="cert-card">
                        <div class="circle">
                            <div class="iso"><?php echo esc_html($cert['prefix']); ?></div>
                            <div class="code"><?php echo esc_html($cert['code']); ?></div>
                            <div class="year"><?php echo esc_html($cert['year']); ?></div>
                        </div>
                        <div class="cert-title"><?php echo esc_html($cert['title']); ?></div>
                        <div class="cert-text"><?php echo esc_html($cert['desc']); ?></div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="brochures" id="brochures">
            <div class="comp-section-title"><?php _e('Take the Details With You', 'axis-theme'); ?></div>
            <div class="broc-grid">
                <?php foreach ($brocs as $broc) : ?>
                    <a href="<?php echo esc_url($broc['file_link']); ?>" target="_blank" class="broc-card <?php echo esc_attr($broc['color']); ?>">
                        <div class="broc-sub"><?php echo esc_html($broc['sub_title']); ?></div>
                        <div class="broc-title"><?php echo esc_html($broc['title']); ?></div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

    </section>

</div>

<?php get_footer(); ?>