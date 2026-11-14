<?php
/**
 * Template Name: OR Services
*/

if (!defined('ABSPATH')) {exit;}


get_header('or');
?>

<div class="or-layout">

    <section class="or-page-header">

        <div class="or-subheading"><?php _e('Our services and the systems that make up your operating room.', 'axis-theme'); ?></div>
        <div class="or-heading"><?php the_title(); ?></div>

    </section>

    <!-- Services -->
    <section class="services">

        <div class="scard">

            <div class="scard-title"><?php _e('Project Planning', 'axis-theme'); ?></div>
            <div class="scard-text"><?php _e('We settle scope, budget and expectations before anything is built.', 'axis-theme'); ?></div>

            <ul class="scard-list">
                <li><?php _e('Financial and technical estimates from our project managers', 'axis-theme'); ?></li>
                <li><?php _e('Layouts and drawings by architects and interior designers, to international or local standards', 'axis-theme'); ?></li>
                <li><?php _e('Close work with the hospital staff who will use the rooms', 'axis-theme'); ?></li>
            </ul>

        </div>

        <div class="scard">

            <div class="scard-title"><?php _e('Construction & Renovation', 'axis-theme'); ?></div>
            <div class="scard-text"><?php _e('New rooms, and existing ones converted into hybrid or digital rooms.', 'axis-theme'); ?></div>

            <ul class="scard-list">
                <li><?php _e('All nine systems supplied and installed by one team', 'axis-theme'); ?></li>
                <li><?php _e('Turn-key delivery, from the shell to a working room', 'axis-theme'); ?></li>
                <li><?php _e('The same approach for ICUs, recovery units, X-ray rooms, clean rooms and one-day clinics', 'axis-theme'); ?></li>
            </ul>

        </div>

        <div class="scard">

            <div class="scard-title"><?php _e('Commissioning & Certification', 'axis-theme'); ?></div>
            <div class="scard-text"><?php _e('We test the finished room and support certification before handover.', 'axis-theme'); ?></div>

            <ul class="scard-list">
                <li><?php _e('Commissioning of the completed room', 'axis-theme'); ?></li>
                <li><?php _e('GMP and GACP certification support where the project requires it', 'axis-theme'); ?></li>
            </ul>

        </div>

    </section>

    <!-- Features -->
    <section class="or-features">

        <div class="features-scroll-wrapper">

            <nav class="features-nav">

                <ul class="features-list">
                    <li><a href="#features-vaelma" class="features-link" data-target="features-vaelma"><?php _e('VAELMA Modular Walls', 'axis-theme'); ?></a></li>
                    <li><a href="#features-ceiling" class="features-link" data-target="features-ceiling"><?php _e('Ceiling', 'axis-theme'); ?></a></li>
                    <li><a href="#features-floor" class="features-link" data-target="features-floor"><?php _e('Floor System', 'axis-theme'); ?></a></li>
                    <li><a href="#features-doors" class="features-link" data-target="features-doors"><?php _e('Hermetic Doors', 'axis-theme'); ?></a></li>
                    <li><a href="#features-lights" class="features-link" data-target="features-lights"><?php _e('Surgical Lights', 'axis-theme'); ?></a></li>
                    <li><a href="#features-led" class="features-link" data-target="features-led"><?php _e('Recessed LED Lighting', 'axis-theme'); ?></a></li>
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
                        <div class="feature-img"><?php echo axis_icon('system-01-vaelma-modular-walls'); ?></div>
                        <div class="feature-title"><?php _e('VAELMA Modular Walls System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('Modularity', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('Individual access for maintenance', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Hygienic walls that go up fast, sit perfectly flat and can be opened for service without demolition.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Antibact. HPL / Glass / Stainless steel (P.C.) / SMS / Galvanized steel P.C. ', 'axis-theme'); ?></li>
                        <li><?php _e('Galvanized steel substructure customized, self standing and securely installed, open to modifications', 'axis-theme'); ?></li>
                        <li><?php _e('Flush surfaces with no live edges, using sealing joints and angular profiles', 'axis-theme'); ?></li>
                        <li><?php _e('Height adjustment absorbs floor irregularities of up to about ±25 mm', 'axis-theme'); ?></li>
                        <li><?php _e('Elastic gaskets ensures the containment hermeticity ', 'axis-theme'); ?></li>
                        <li><?php _e('Rockwool in the frame for sound and thermal insulation (optional)', 'axis-theme'); ?></li>
                        <li><?php _e('Modularity - every panel can be individually removed', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Antibacterial HPL', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Stainless / Galvanized Steel', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Glass', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Solid Material Surface (SMS)', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('u-PVC antibacterial cladding', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('vaelma-modular-wall-system/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Ceiling -->
            <article id="features-ceiling" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-02-ceiling'); ?></div>
                        <div class="feature-title"><?php _e('Airtight Ceiling System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('Airtight Design', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('Gasketed panels and integrated lighting', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Metal ceilings with integrated lighting for operating rooms and cleanrooms. Gasketed panels limit air exchange with the ceiling void, while removable modules provide access for maintenance.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Concealed support grid with removable metal panels', 'axis-theme'); ?></li>
                        <li><?php _e('Perimeter gaskets and spring seals for enhanced airtightness', 'axis-theme'); ?></li>
                        <li><?php _e('Integrated recessed LED lighting', 'axis-theme'); ?></li>
                        <li><?php _e('Steel or aluminium panels with a choice of finishes', 'axis-theme'); ?></li>
                        <li><?php _e('Antimicrobial coating available', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Galvanized Steel', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Stainless Steel', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Painted or Powder-Coated Steel', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Antimicrobial Finish', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('ceiling/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Floor System -->
            <article id="features-floor" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-03-floor-system'); ?></div>
                        <div class="feature-title"><?php _e('Conductive Flooring System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('Conductivity', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('Conductive floor - Static control', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Permanently conductive vinyl flooring for operating rooms, combining static control with durable, easy-to-clean surfaces. Welded joints and coved edges support hygiene and simplify daily maintenance.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Homogeneous vinyl with permanent conductive properties', 'axis-theme'); ?></li>
                        <li><?php _e('Copper grounding strips installed to manufacturer specifications', 'axis-theme'); ?></li>
                        <li><?php _e('High resistance to wear, stains, and abrasion', 'axis-theme'); ?></li>
                        <li><?php _e('Available in sheets and tiles', 'axis-theme'); ?></li>
                        <li><?php _e('Electrical resistance · EN 1081.', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Antistatic', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Conductive', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Homogenous Vinyl', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('floor-system/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Hermetic Doors -->
            <article id="features-doors" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-04-hermetic-doors'); ?></div>
                        <div class="feature-title"><?php _e('Hermetic Sliding Doors', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('4-Sided Seal', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('Supports room pressure control', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Automatic hermetic sliding doors for operating rooms and controlled environments. Seals on all four sides help maintain room pressure differentials, while flush surfaces allow easy cleaning.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Controlled closing movement compresses seals on all four sides', 'axis-theme'); ?></li>
                        <li><?php _e('Flush panel surfaces and profiles for easy cleaning', 'axis-theme'); ?></li>
                        <li><?php _e('Single or double leaf configurations', 'axis-theme'); ?></li>
                        <li><?php _e('HPL, stainless steel, or glass panel options', 'axis-theme'); ?></li>
                        <li><?php _e('Optional vision panels, interlocks, and activation devices', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Hermetic Sliding', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Automatic  Sliding', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Easy  Cleaning', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('hermetic-doors/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Lights -->
            <article id="features-lights" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-05-surgical-lights'); ?></div>
                        <div class="feature-title"><?php _e('Surgical Lights', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('Ra ≥96', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('High colour rendering', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Precision LED surgical lighting with adjustable intensity, field size, and colour temperature. Uniform illumination and high colour rendering support clear visibility, with intuitive controls for easy adjustment.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Lens technology for uniform light distribution and depth illumination', 'axis-theme'); ?></li>
                        <li><?php _e('Adjustable colour temperature from 3,500 to 5,500 K', 'axis-theme'); ?></li>
                        <li><?php _e('High colour rendering with Ra ≥96', 'axis-theme'); ?></li>
                        <li><?php _e('Sterilizable handle for adjusting light intensity and field size', 'axis-theme'); ?></li>
                        <li><?php _e('Slim, easy-to-clean housing compatible with laminar airflow', 'axis-theme'); ?></li>
                        <li><?php _e('Optional camera systems and remote wall controls', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('LED Surgical Lighting', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Sterilizable Handle', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Adjustable Light Field', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('lights/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Recessed Lights -->
            <article id="features-led" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-06-recessed-led-lighting'); ?></div>
                        <div class="feature-title"><?php _e('Recessed LED Lighting', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('IP65', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e(' Dust and water jet protection - impermeability', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Integrated LED ceiling lighting for operating rooms and cleanrooms, with sealed construction and a choice of optics, colour temperatures, and controls to suit each space.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Recessed installation in compatible modular ceiling systems', 'axis-theme'); ?></li>
                        <li><?php _e('Opal or microprismatic optics', 'axis-theme'); ?></li>
                        <li><?php _e('High colour rendering options', 'axis-theme'); ?></li>
                        <li><?php _e('DALI dimming and emergency lighting options', 'axis-theme'); ?></li>
                        <li><?php _e('Tunable white and RGB available in selected configurations', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Recessed LED', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Opal / Microprismatic', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('DALI Control', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('recessed-led-lighting/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Laminar Flow System -->
            <article id="features-laminar" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-07-laminar-flow'); ?></div>
                        <div class="feature-title"><?php _e('Laminar Flow System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('H14 HEPA', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('turbulence-free airflow', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('HEPA-filtered air delivered in a controlled downward flow over the operating zone. Ceiling systems combine high-efficiency filtration with a choice of diffuser surfaces, sized to suit the room layout and ventilation requirements.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('H14 HEPA filtration to EN 1822', 'axis-theme'); ?></li>
                        <li><?php _e('Fabric mesh or perforated metal diffuser panels', 'axis-theme'); ?></li>
                        <li><?php _e('Vertical airflow with low turbulence across the protected zone', 'axis-theme'); ?></li>
                        <li><?php _e('Custom ceiling dimensions to suit the operating area', 'axis-theme'); ?></li>
                        <li><?php _e('Central air supply or supplementary recirculation modules', 'axis-theme'); ?></li>
                        <li><?php _e('Installation, airflow balancing, and commissioning to project specifications', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('H14 HEPA', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Fabric Mesh ', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Perforated Metal', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Vertical Airflow', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('laminar-flow-system/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Medical Gases -->
            <article id="features-gases" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-08-medical-gases'); ?></div>
                        <div class="feature-title"><?php _e('Medical Gas Systems', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('Integrated Supply', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('Pipelines, outlets, and pendants', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('We supply and install medical gas pipelines, terminal outlets, and ceiling pendants, in accordance with applicable regulations and project specifications.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Medical gas and vacuum pipeline networks', 'axis-theme'); ?></li>
                        <li><?php _e('Gas-specific terminal outlets', 'axis-theme'); ?></li>
                        <li><?php _e('Ceiling pendants for surgical and anaesthesia workstations', 'axis-theme'); ?></li>
                        <li><?php _e('System testing and commissioning', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Pipeline Networks', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Terminal Outlets', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Ceiling Pendants', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('EN ISO 7396', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('EN ISO 9170', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('medical-gases/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Control Panel -->
            <article id="features-control" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-09-control-panel'); ?></div>
                        <div class="feature-title"><?php _e('Operating Room Control Panel', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('One Touchscreen', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('Room controls, live readings, and alarms', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('A wall-mounted touchscreen gives surgical teams one place to adjust room settings, check live readings, and view alarms.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('22″ or 32″ glass touchscreen with a separate PLC enclosure', 'axis-theme'); ?></li>
                        <li><?php _e('Configurable digital and analogue I/O for connected room systems', 'axis-theme'); ?></li>
                        <li><?php _e('Lighting presets and ventilation controls', 'axis-theme'); ?></li>
                        <li><?php _e('Live temperature, humidity, and differential pressure readings', 'axis-theme'); ?></li>
                        <li><?php _e('Medical gas and power supply alarms with event history', 'axis-theme'); ?></li>
                        <li><?php _e('Clock, stopwatch, and room status display', 'axis-theme'); ?></li>
                        <li><?php _e('Optional door and blind controls, DALI or DMX lighting control, and BMS integration', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Touchscreen', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('PLC & I/O', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Alarm Monitoring', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('control-panel/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Integration System -->
            <article id="features-integration" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-10-integration-system'); ?></div>
                        <div class="feature-title"><?php _e('Operating Room Integration System', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('4Κ', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('screen, with video and audio capture', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('A wall-integrated workstation brings live surgical video, clinical images, and patient information into one interface. The surgical team can send feeds to the right screens and capture images, video, and audio for procedure documentation.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('Wall-integrated medical displays from 21.5″ to 65″, with 4K UHD on selected models', 'axis-theme'); ?></li>
                        <li><?php _e('One-touch presets for routing feeds from endoscopes, surgical cameras, and other connected sources', 'axis-theme'); ?></li>
                        <li><?php _e('Side-by-side viewing or optional four-source display', 'axis-theme'); ?></li>
                        <li><?php _e('Image capture, video and audio recording, and live streaming', 'axis-theme'); ?></li>
                        <li><?php _e('Optional two-way conferencing with remote teams', 'axis-theme'); ?></li>
                        <li><?php _e('HL7 connectivity to hospital systems and optional DICOM archiving to PACS', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('4K UHD', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Video Routing', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Procedure Recording', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('HL7 / DICOM', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('integration-system/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

            <!-- Scrub Units -->
            <article id="features-scrub" class="feature-card">
                
                <div class="feature-header">

                    <div class="feature-intro">
                        <div class="feature-img"><?php echo axis_icon('system-11-scrub-units'); ?></div>
                        <div class="feature-title"><?php _e('Scrub Units', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature-spec">
                        <div class="feature-spec-head"><?php _e('AISI 304 / 316 - SMS', 'axis-theme'); ?></div>
                        <div class="feature-spec-text"><?php _e('Material options', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="feature-content">
                    <div class="feature-text"><?php _e('Stainless steel stations for surgical hand and forearm washing. Deep basins help contain splashes, and smooth surfaces make cleaning easier.', 'axis-theme'); ?></div>
                    <ul class="feature-list">
                        <li><?php _e('One-piece basin in AISI 304 or AISI 316 stainless steel, depending on the model', 'axis-theme'); ?></li>
                        <li><?php _e('Single, double, or triple washing stations', 'axis-theme'); ?></li>
                        <li><?php _e('Hands-free sensor taps with automatic shut-off on selected models', 'axis-theme'); ?></li>
                        <li><?php _e('Optional soap or antiseptic dispensers and thermostatic mixers', 'axis-theme'); ?></li>
                    </ul>
                </div>

                <div class="feature-tabs">
                    <div class="ftab"><?php _e('Stainless Steel', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('Solid Material Surface (SMS)', 'axis-theme'); ?></div>
                    <div class="ftab"><?php _e('1–3 Stations', 'axis-theme'); ?></div>
                </div>

                <a href="<?php echo esc_url(axis_url('scrub-units/')); ?>" class="feature-btn"><?php _e('See Full Specification', 'axis-theme'); ?></a>

            </article>

        </div>

    </section>

</div>

<?php get_footer('or'); ?>