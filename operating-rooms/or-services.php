<?php
/**
 * Template Name: OR Services
*/

get_header('or');
?>

<div class="or-layout">

    <section class="or-page-header">

        <div class="or-subheading">What we do for the project, and what goes into the room.</div>
        <div class="or-heading"><?php the_title(); ?></div>

    </section>

    <!-- Services -->
    <section class="services">

        <div class="scard">

            <div class="scard-title">Project Planning</div>
            <div class="scard-text">We settle scope, budget and expectations before anything is built.</div>

            <ul class="scard-list">
                <li>Financial and technical estimates from our project managers</li>
                <li>Layouts and drawings by architects and interior designers, to international or local standards</li>
                <li>Close work with the hospital staff who will use the rooms</li>
            </ul>

        </div>

        <div class="scard">

            <div class="scard-title">Construction & Renovation</div>
            <div class="scard-text">New theatres, and existing ones converted into hybrid or digital rooms.</div>

            <ul class="scard-list">
                <li>All nine systems supplied and installed by one team</li>
                <li>Turn-key delivery, from the shell to a working room</li>
                <li>The same approach for ICUs, recovery units, X-ray rooms, clean rooms and one-day clinics</li>
            </ul>

        </div>

        <div class="scard">

            <div class="scard-title">Commissioning & Certification</div>
            <div class="scard-text">We test the finished room and support certification before handover.</div>

            <ul class="scard-list">
                <li>Commissioning of the completed theatre</li>
                <li>GMP and GACP certification support where the project requires it</li>
            </ul>

        </div>

    </section>

    <!-- Features -->
    <section class="or-features">

        <div class="features-scroll-wrapper">

            <nav class="features-nav">

                <ul class="features-list">
                    <li><a href="#features-vaelma" class="features-link" data-target="features-vaelma"><?php _e('Modular Walls', 'axis-theme'); ?></a></li>
                    <li><a href="#features-ceiling" class="features-link" data-target="features-ceiling"><?php _e('Ceiling', 'axis-theme'); ?></a></li>
                    <li><a href="#features-floor" class="features-link" data-target="features-floor"><?php _e('Floor System', 'axis-theme'); ?></a></li>
                    <li><a href="#features-doors" class="features-link" data-target="features-doors"><?php _e('Hermetic Doors', 'axis-theme'); ?></a></li>
                    <li><a href="#features-lights" class="features-link" data-target="features-lights"><?php _e('Lights', 'axis-theme'); ?></a></li>
                    <li><a href="#features-laminar" class="features-link" data-target="features-laminar"><?php _e('Laminar Flow', 'axis-theme'); ?></a></li>
                    <li><a href="#features-gases" class="features-link" data-target="features-gases"><?php _e('Medical Gases', 'axis-theme'); ?></a></li>
                    <li><a href="#features-control" class="features-link" data-target="features-control"><?php _e('Control Panel', 'axis-theme'); ?></a></li>
                    <li><a href="#features-integration" class="features-link" data-target="features-integration"><?php _e('Integration System', 'axis-theme'); ?></a></li>
                    <li><a href="#features-scrub" class="features-link" data-target="features-scrub"><?php _e('Scrub Units', 'axis-theme'); ?></a></li>
                </ul>

            </nav>

        </div>

        <div class="features-card-container">

            <!-- VAELMA Modular Walls System -->
            <article id="features-vaelma" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-01-walls'); ?></div>
                        <div class="feature-title"><?php _e('VAELMA Modular Walls System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('±25 mm', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('floor levelling, approximately', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Hygienic walls that go up fast, sit perfectly flat and can be opened for service without demolition.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Steel frame with stainless steel finishing panels that stay secure but can be partly removed', 'axis-theme'); ?></li>
                        <li><?php _e('Flush surfaces with no live edges, using sealing and angular joints', 'axis-theme'); ?></li>
                        <li><?php _e('Height adjustment absorbs floor irregularities of up to about 25 mm', 'axis-theme'); ?></li>
                        <li><?php _e('Elastic gaskets stop contaminated air entering from wall voids', 'axis-theme'); ?></li>
                        <li><?php _e('Rockwool in the frame for sound and thermal insulation', 'axis-theme'); ?></li>
                        <li><?php _e('Fire reaction classification 0 or 1', 'axis-theme'); ?></li>
                        <li><?php _e('Every vertical panel can be taken out on its own', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Antibacterial HPL', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Stainless Steel', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Glass up to 4,000 mm', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Solid Material Surface (SMS)', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Ceiling -->
            <article id="features-ceiling" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-02-ceiling'); ?></div>
                        <div class="feature-title"><?php _e('Ceiling', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('Class 0 or 1', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('fire reaction of every component', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('A ceiling that matches the wall grid, so every panel lines up and every panel can come out.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Panels match the wall grid; adapter and fitting panels complete the range', 'axis-theme'); ?></li>
                        <li><?php _e('Rigid grid of support and cross profiles', 'axis-theme'); ?></li>
                        <li><?php _e('Standard ceiling fittings supplied and installed', 'axis-theme'); ?></li>
                        <li><?php _e('Rounded special parts, so surfaces and fittings sit flush', 'axis-theme'); ?></li>
                        <li><?php _e('Elastic gaskets block contaminated air from the voids above', 'axis-theme'); ?></li>
                        <li><?php _e('Rockwool for thermal and sound insulation', 'axis-theme'); ?></li>
                        <li><?php _e('Fire reaction classification 0 or 1', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('HPL', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Stainless Steel 304 or 316', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Painted or Powder-Coated Steel', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Galvanized Steel', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Floor System -->
            <article id="features-floor" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-03-floor'); ?></div>
                        <div class="feature-title"><?php _e('Floor System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('5×10⁴ to 10⁶ Ω', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('conductive floor resistance', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Operating theatres have the strictest discharge requirements in a hospital. The floor is how they are met.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Antistatic floors: dissipative, homogeneous flexible flooring in sheets or tiles', 'axis-theme'); ?></li>
                        <li><?php _e('Antistatic charge limited to under 2 kV; resistance 10⁶ to 10⁸ Ω (EN 1081); complies with EN 649', 'axis-theme'); ?></li>
                        <li><?php _e('Conductive floors: bronze grid and grounding dissipate electrostatic charge', 'axis-theme'); ?></li>
                        <li><?php _e('Conductive resistance 5×10⁴ to 10⁶ Ω (EN 1081); complies with EN 649', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Antistatic', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Conductive', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Hermetic Doors -->
            <article id="features-doors" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-04-doors'); ?></div>
                        <div class="feature-title"><?php _e('Hermetic Doors', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('99.9%', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('of bacteria killed in 24 hours, as stated', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Operating theatres and ICUs need doors that seal, so contamination stays out and equipment works safely.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Antibacterial nanolaminate leaf, stated to kill 99.9% of bacteria within 24 hours', 'axis-theme'); ?></li>
                        <li><?php _e('Canopy design keeps dust and moisture out', 'axis-theme'); ?></li>
                        <li><?php _e('Compact automation unit saves space', 'axis-theme'); ?></li>
                        <li><?php _e('Dual-motor lifting for heavy doors', 'axis-theme'); ?></li>
                        <li><?php _e('Lightweight leaf: faster opening and closing, less energy, longer life', 'axis-theme'); ?></li>
                        <li><?php _e('Self-repairing, easy-to-clean surface', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Hermetic Sliding', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Lights -->
            <article id="features-lights" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-05-lights'); ?></div>
                        <div class="feature-title"><?php _e('Lights', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('600×600 mm', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('recessed grid fits the opal luminaire', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Light intensity, field size and colour temperature decide how precisely a surgeon sees, and how tired they get.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Surgery lights: light field matrix, shadow management and variable field geometry, with intuitive displays and handgrips', 'axis-theme'); ?></li>
                        <li><?php _e('Ceiling lights: clean-room series with higher IP protection, LED with micro-prismatic or opal diffusers', 'axis-theme'); ?></li>
                        <li><?php _e('Opal version fits recessed 600×600 grid ceilings', 'axis-theme'); ?></li>
                        <li><?php _e('Configurable light sources, controls, emergency lighting and power supplies', 'axis-theme'); ?></li>
                        <li><?php _e('Gynaecology lights: colour-neutral, bright, energy-saving LED', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Surgery Lights', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Ceiling Lights', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Gynaecology Lights', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Laminar Flow System -->
            <article id="features-laminar" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-06-laminar'); ?></div>
                        <div class="feature-title"><?php _e('Laminar Flow System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('Vertical', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('turbulence-free airflow', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Clean air moves straight down over the patient and out, with no turbulence to carry contamination across.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Vertical displacement airflow, built to the requirements of the working area', 'axis-theme'); ?></li>
                        <li><?php _e('Basic mechanical equipment supplied and installed: EU-manufactured units sold by Axis, or units from other manufacturers as each project requires', 'axis-theme'); ?></li>
                        <li><?php _e('Secondary equipment and materials supplied', 'axis-theme'); ?></li>
                        <li><?php _e('Complete construction by the same team', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Medical Gases -->
            <article id="features-gases" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-07-gases'); ?></div>
                        <div class="feature-title"><?php _e('Medical Gases', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('2 - Part', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('outlets: a base and a finishing part', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Every part needed for a full medical gas installation, from the pipeline to the outlet the clinician uses.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('All parts for a complete medical gas system', 'axis-theme'); ?></li>
                        <li><?php _e('Terminal units and outlets at the final delivery points of the pipeline', 'axis-theme'); ?></li>
                        <li><?php _e('Two-part outlets: a base part and a finishing part', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Control Panel -->
            <article id="features-control" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-08-control'); ?></div>
                        <div class="feature-title"><?php _e('Control Panel', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('1 Panel', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('for signals, alarms and information', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('The OPT Control Panel gives the surgical team a single, familiar source of information.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Central device for control signals, alarms and information in the theatre', 'axis-theme'); ?></li>
                        <li><?php _e('One familiar interface for medical staff', 'axis-theme'); ?></li>
                        <li><?php _e('Technical staff can inspect and maintain several subsystems without breaking the integrity of the wall', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Integration System -->
            <article id="features-integration" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-09-integration'); ?></div>
                        <div class="feature-title"><?php _e('Integration System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('4Κ', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('screen, with video and audio capture', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('One big screen for the theatre\'s video, images and patient data.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Captures, stores and shares video and audio', 'axis-theme'); ?></li>
                        <li><?php _e('Gives access to PACS, KIS and RIS from the theatre', 'axis-theme'); ?></li>
                        <li><?php _e('Two-way conferencing to a remote station', 'axis-theme'); ?></li>
                        <li><?php _e('Complex routing set up as scenarios, each started with one button', 'axis-theme'); ?></li>
                        <li><?php _e('HL7 CONNECT to the hospital information system; DICOM CONNECT stores video and images in PACS', 'axis-theme'); ?></li>
                        <li><?php _e('Universal wall monitors as image targets for video endoscopy or PACS', 'axis-theme'); ?></li>
                        <li><?php _e('Monitors from 19 to 75 inches, up to 4K, as certified medical devices', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Scrub Units -->
            <article id="features-scrub" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('feature-10-scrub'); ?></div>
                        <div class="feature-title"><?php _e('Scrub Units', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('30°', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('panel angle, so dirt cannot settle', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('A single-block scrub station designed to be cleaned, with no sharp corners or edges.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Stainless steel or SMS, one block with integrated sink and upper panelling', 'axis-theme'); ?></li>
                        <li><?php _e('Panelling angled at 30° so dirt cannot settle; shot-peened exterior is smoother, harder and easier to clean', 'axis-theme'); ?></li>
                        <li><?php _e('Electronic taps, with or without automatic shut-off', 'axis-theme'); ?></li>
                        <li><?php _e('Soap or disinfectant dispensers with electronically adjustable dosing and an anti-drip system', 'axis-theme'); ?></li>
                        <li><?php _e('Thermostatic mixers; a hold button must be pressed to exceed 38°C', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

        </div>

    </section>

</div>

<?php get_footer('or'); ?>