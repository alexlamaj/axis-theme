<?php 
/**
 * Template Name: MultiClot Landing Page
 */

get_header('product');
?>

<main class="main-layout site-main-content">

    <!-- Hero Banner -->
    <div class="hero-banner">

        <div class="hero-image"><?php echo axis_icon('6926bb4213493757ad30f6e3_1029_apiro'); ?></div>

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <div class="outlined"><?php _e('Exclusive Representator of Greece', 'axis-theme'); ?></div>
            <div class="hero-title">MultiClot®</div>
            <div class="hero-text"><?php _e('Fast, flexible and insightful viscoelastometry with six independent channels, engineered for clinical and research environments.', 'axis-theme'); ?></div>
            <button class="btn-outline-y" id="demo-popup"><?php _e('Request a Demo', 'axis-theme'); ?></button>

        </div>

    </div>

    <!-- Demo Request Modal -->
    <div id="demoModal" class="demo-modal" aria-hidden="true">

        <div class="demo-modal-overlay"></div>

        <div class="demo-modal-card">

            <div class="demo-column">
                <div class="btn-close" id="closeModal"><?php echo axis_icon('left-arrow') ?></div>
                <div class="modal-header"><?php _e('Request a Demo', 'axis-theme'); ?></div>
                <div class="modal-text"><?php _e('Schedule a Live MultiClot® Analyzer Demostration', 'axis-theme'); ?></div>
            </div>

            <form id="demoRequest" class="demo-form">

                <div class="form-row">

                    <div class="form-item">
                        <label class="flabel" for="demo_name"><?php _e('Full Name', 'axis-theme'); ?></label>
                        <input class="finput" type="text" id="demo_name" name="name" required>
                    </div>

                    <div class="form-item">
                        <label class="flabel" for="demo_email"><?php _e('Email Address', 'axis-theme'); ?></label>
                        <input class="finput" type="email" id="demo_email" name="email" required>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-item">
                        <label class="flabel" for="demo_phone"><?php _e('Phone Number', 'axis-theme'); ?></label>
                        <input class="finput" type="tel" id="demo_phone" name="phone" required>
                    </div>

                    <div class="form-item">
                        <label class="flabel" for="demo_company"><?php _e('Company', 'axis-theme'); ?></label>
                        <input class="finput" type="text" id="demo_company" name="company" required>
                    </div>

                </div>

                <button class="btn-submit-modal" type="submit"><?php _e('Submit', 'axis-theme'); ?></button>
                <div class="feedback-msg" id="feedbackMsg"></div>

            </form>

        </div>

    </div>

    <!-- Main Content -->
    <div class="product-layout">

        <!-- What is it -->
        <div class="section-row">

            <div class="section-column">
                
                <div class="section-header-layout" style="margin-bottom: 0px;">
                    <div class="section-title"><?php _e('-- What is it', 'axis-theme'); ?></div>
                    <div class="section-header"><?php _e('Next Generation Viscoelastic Coagulation', 'axis-theme'); ?></div>
                </div>    

                <div class="section-text"><?php _e('6 independent channels, digital workflow and mechanical precision for rapid, reproducible assessments of coagulation, clot formation and fibrinolysis.<br><br><b>Reagent Tip Technology:</b> Integrates the reagents directly into the nozzle — suction blood and the reaction starts automatically.', 'axis-theme'); ?></div>

                <div class="features-grid">

                    <div class="feature">
                        <div class="check-icon">&check;</div>
                        <div class="feature-text"><?php _e('No Reagents Handling', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature">
                        <div class="check-icon">&check;</div>
                        <div class="feature-text"><?php _e('Dry Chemistry - Ready to Use', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature">
                        <div class="check-icon">&check;</div>
                        <div class="feature-text"><?php _e('Same Process of all Assays', 'axis-theme'); ?></div>
                    </div>

                    <div class="feature">
                        <div class="check-icon">&check;</div>
                        <div class="feature-text"><?php _e('Open System - Clinical Research', 'axis-theme'); ?></div>
                    </div>

                </div>

            </div>

            <div class="section-column" style="width: 60%">
                <div class="section-image"><?php echo axis_icon('6926c1528ab49a6d7cfe9602_1029_markorvosi_169_screen_2-p-1600'); ?></div>
            </div>

        </div> 

    </div>

    <!-- Assays -->
    <div class="assays-section-wrapper">

        <svg class="top-wave-svg" viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path fill="#222222" d="M -2 -2 L 1442 -2 L 1442 30 C 1120 70, 960 58, 720 24 C 480 -10, 320 -10, 0 30 Z"></path>
        </svg>

        <div class="assay-wrapper-content">

            <div class="section-header-layout" style="margin-bottom: 30px;">
                <div class="section-title"><?php _e('-- Assay Portfolio', 'axis-theme'); ?></div>
                <div class="section-header" style="color: var(--color-text);"><?php _e('Assays', 'axis-theme'); ?></div>
            </div>

            <div class="assay-image-section" id="assayContainer">

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926cb707bbd8a1782a59957_EX-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">EX - Extrinsic Activation</div>
                        <div class="assay-image-desc"><?php _e('Rapid overview of coagulation activation. Tissue factor + polybrene: Assessment of coagulation activation, clot formation, and fibrinolysis.', 'axis-theme'); ?></div>
                    </div>
                </div>

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926ccc725259108205eaa10_FIB-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">FIB - Functional Fibrinogen</div>
                        <div class="assay-image-desc"><?php _e('Functional assessment of the fibrinogen level Tissue factor + platelet inhibition (cytochalasin D + eptifibatide).', 'axis-theme'); ?></div>
                    </div>
                </div>

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926ccfaff367588a4297eaa_IN-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">IN - Intrinsic + Heparin</div>
                        <div class="assay-image-desc"><?php _e('Intrinsic activation with ellagic acid for the detection of heparin', 'axis-theme'); ?></div>
                    </div>
                </div>

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926ccf25cf56ef6713bd003_AP-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">AP - Fibrinolysis Inhibtion</div>
                        <div class="assay-image-desc"><?php _e('EX + fibrinolysis inhibition (TXA): Assessment of clot formation under conditions of fibrinolysis inhibition', 'axis-theme'); ?></div>
                    </div>
                </div>

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926cd35b610fa3e4d88dbdf_HI-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">HI - Heparin Neutralisation</div>
                        <div class="assay-image-desc"><?php _e('Intrinsic pathway with heparin neutralisation. Ellagic acid + heparin inactivation by heparinese: Used in combination with the IN assay.', 'axis-theme'); ?></div>
                    </div>
                </div>

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926cd3dced885ab45c670d4_TPA-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">TPA - Fibrinolysis Activation</div>
                        <div class="assay-image-desc"><?php _e('EX + fibrinolysis activation by TPA: Detection of tranexamic acid (TXA).', 'axis-theme'); ?></div>
                    </div>
                </div>

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926ce5d49613748043a3cac_RVV-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">RVV - Anti-FXa (DOACs)</div>
                        <div class="assay-image-desc"><?php _e('High sensitivity assay for the detection of FXa antagonists. Russel Viper Venom (FX Activator).', 'axis-theme'); ?></div>
                    </div>
                </div>

                <div class="assay-image-content">
                    <div class="assay-image"><?php echo axis_icon('6926ce6680eb38a07dfe05a4_ECA-p-1600'); ?></div>
                    <div class="assay-image-card">
                        <div class="assay-image-header">ECA - Anti-Ila (Dabigatran)</div>
                        <div class="assay-image-desc"><?php _e('High sensitivity assay for the detection of dabigatran. Ecarin (Prothrombin activator).', 'axis-theme'); ?></div>
                    </div>
                </div>

            </div>

        </div>

        <svg class="bottom-wave-svg" viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path fill="#222222" d="M -2 -2 L 1442 -2 L 1442 30 C 1120 70, 960 58, 720 24 C 480 -10, 320 -10, 0 30 Z"></path>
        </svg>

    </div>

    <!-- Main Content -->
    <div class="product-layout">

        <!-- Technical Specifications -->
        <div class="section-column">

            <div class="section-header-layout">

                <div class="section-title"><?php _e('-- Technical Specifications', 'axis-theme'); ?></div>
                <div class="section-header"><?php _e('Analyzer 3011EU', 'axis-theme'); ?></div>

            </div>

            <div class="technical-data">

                <div class="section-row" style="margin-bottom: 0px !important">

                    <div class="data-box">
                        <div class="data-title"><?php _e('Channels', 'axis-theme'); ?></div>
                        <div class="data-content"><?php _e('6 independently', 'axis-theme'); ?></div>
                    </div>

                    <div class="data-box">
                        <div class="data-title"><?php _e('Assays', 'axis-theme'); ?></div>
                        <div class="data-content">EX, FIB, IN, AP, HI, TPA, RVV, ECA</div>
                    </div>

                    <div class="data-box">
                        <div class="data-title"><?php _e('sample', 'axis-theme'); ?></div>
                        <div class="data-content"><?php _e('340 ml / Test ', 'axis-theme'); ?><span style="font-size: 11px; font-weight: 400;"><?php _e('Blood Citrate: 3.2%', 'axis-theme'); ?></span></div>
                    </div>

                    <div class="data-box">
                        <div class="data-title"><?php _e('result time', 'axis-theme'); ?></div>
                        <div class="data-content"><?php _e('CT: Minutes A5/A10: 6 - 15’', 'axis-theme'); ?></div>
                    </div>

                </div>

                <div class="section-row" style="margin-bottom: 0px !important">

                    <div class="data-box">
                        <div class="data-title"><?php _e('measurement principle', 'axis-theme'); ?></div>
                        <div class="data-content" style="font-size: 13px;"><?php _e('Elastic Motion Thrombelastography', 'axis-theme'); ?></div>
                    </div>

                    <div class="data-box">
                        <div class="data-title"><?php _e('interface', 'axis-theme'); ?></div>
                        <div class="data-content"><?php _e('Touchscreen 21’’', 'axis-theme'); ?></div>
                    </div>

                    <div class="data-box">
                        <div class="data-title"><?php _e('lis connectivity', 'axis-theme'); ?></div>
                        <div class="data-content"><?php _e('Yes', 'axis-theme'); ?></div>
                    </div>

                    <div class="data-box">
                        <div class="data-title"><?php _e('export', 'axis-theme'); ?></div>
                        <div class="data-content">XML, PDF, CSV, PNG</div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Product Catalogue -->
        <div class="section-column">

            <div class="section-header-layout">

                <div class="section-title"><?php _e('-- Full Product Catalogue', 'axis-theme'); ?></div>
                <div class="section-header"><?php _e('Complete Catalogue', 'axis-theme'); ?></div>

            </div>

            <!-- Assays List -->
            <div class="section-row">

                <div class="section-image" style="width: 100% !important;">
                    <?php echo axis_icon('6926c728702f37ccd82b7988_1029_apiro (22 of 44)'); ?>
                </div>

                <div class="section-column">

                    <div class="assays-list"></div>

                </div>

            </div>

            <!-- Cups & Pins -->
            <div class="section-row">

                <div class="section-column">

                    <div class="assay-item">
                        <div class="assay-title">
                            <div class="assay-code">4011EU</div>
                            <div class="assay-name">Cups & Pins</div>
                        </div>
                        <div class="assay-cat-green">Consumable</div>
                    </div>

                    <div class="section-text"><?php _e('Precision consumables with surface treatment for excellent blood compatibility and stable torque transfer.', 'axis-theme'); ?></div>

                    <div class="cp-stats">

                        <div class="cp-item">
                            <div class="cp-cat"><?php _e('Individual', 'axis-theme'); ?></div>
                            <div class="cp-qty"><?php _e('Single Cup&Pin', 'axis-theme'); ?></div>
                        </div>

                        <div class="cp-item">
                            <div class="cp-cat"><?php _e('20x Cup&Pin Shells', 'axis-theme'); ?></div>
                            <div class="cp-qty"><?php _e('Tray 20 pcs', 'axis-theme'); ?></div>
                        </div>

                        <div class="cp-item">
                            <div class="cp-cat"><?php _e('Secure Storage', 'axis-theme'); ?></div>
                            <div class="cp-qty"><?php _e('Box 6x20 pcs', 'axis-theme'); ?></div>
                        </div>

                        <div class="cp-item">
                            <div class="cp-cat"><?php _e('Multi-Drawer', 'axis-theme'); ?></div>
                            <div class="cp-qty"><?php _e('Dispenser', 'axis-theme'); ?></div>
                        </div>

                    </div>

                </div>

                <div class="section-row" style="margin-bottom: 0px; gap: 25px;">

                    <div class="section-column">

                        <div class="section-image-small">
                            <?php echo axis_icon('6926d0aaecac5edcbb6385c4_1029_apiro_white__0000s_0008_cupspins_6-p-1600'); ?>
                        </div>

                        <div class="section-image-small">
                            <?php echo axis_icon('6926d0d34d0153860cd759db_box 120 flat-p-1600'); ?>
                        </div>

                    </div>

                    <div class="section-column">
                        <div class="section-image">
                            <?php echo axis_icon('6926d0542f417decd724903e_Pins 20er-p-1600'); ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Where is it used -->
    <div class="white-background-wrapper">

        <svg class="top-wave-svg" viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path fill="#222222" stroke="#222222" stroke-width="1" d="M -2 -2 L 1442 -2 L 1442 30 C 1120 70, 960 58, 720 24 C 480 -10, 320 -10, 0 30 Z"></path>
        </svg>

        <div class="wrapper-content">

            <div class="section-header-layout">
                <div class="section-title"><?php _e('-- Clinical Applications', 'axis-theme'); ?></div>
                <div class="section-header" style="color: var(--color-text);"><?php _e('Where is it Used', 'axis-theme'); ?></div>
            </div>

            <div class="grid-layout">

                <div class="grid-card">

                    <div class="card-header">
                        <div class="card-icon"><?php echo axis_icon('heart-organ-icon'); ?></div>
                        <div class="card-title"><?php _e('Cardiothoracic Surgery', 'axis-theme'); ?></div>
                    </div>

                    <ul class="card-list">
                        <li><?php _e('Coagulation Monitoring on/off-pump', 'axis-theme'); ?></li>
                        <li><?php _e('Heparin Management', 'axis-theme'); ?></li>
                        <li><?php _e('FFP & Platelet Guidance', 'axis-theme'); ?></li>
                    </ul>

                </div>

                <div class="grid-card">

                    <div class="card-header">
                        <div class="card-icon"><?php echo axis_icon('hospital-building-icon'); ?></div>
                        <div class="card-title"><?php _e('Intensive Care Unit', 'axis-theme'); ?></div>
                    </div>

                    <ul class="card-list">
                        <li><?php _e('DIC & Septic Coagulopathy', 'axis-theme'); ?></li>
                        <li><?php _e('Monitoring of Anticoagulant Treatment', 'axis-theme'); ?></li>
                        <li><?php _e('ECMO Management', 'axis-theme'); ?></li>
                    </ul>

                </div>

                <div class="grid-card">

                    <div class="card-header">
                        <div class="card-icon"><?php echo axis_icon('ambulance-icon'); ?></div>
                        <div class="card-title"><?php _e('Trauma & Emergency', 'axis-theme'); ?></div>
                    </div>

                    <ul class="card-list">
                        <li><?php _e('Traumatic Coagulopathy', 'axis-theme'); ?></li>
                        <li><?php _e('Hemostatic Rejuvenation', 'axis-theme'); ?></li>
                        <li><?php _e('Detection of Hyperfibrinolysis', 'axis-theme'); ?></li>
                    </ul>

                </div>

                <div class="grid-card">

                    <div class="card-header">
                        <div class="card-icon"><?php echo axis_icon('pill-icon'); ?></div>
                        <div class="card-title"><?php _e('DOAC Monitoring', 'axis-theme'); ?></div>
                    </div>

                    <ul class="card-list">
                        <li><?php _e('Rivaroxaban / Apixaban (RVV)', 'axis-theme'); ?></li>
                        <li><?php _e('Dabigatran (ECA Assay)', 'axis-theme'); ?></li>
                        <li><?php _e('Reversal of Treatment', 'axis-theme'); ?></li>
                    </ul>

                </div>

                <div class="grid-card">

                    <div class="card-header">
                        <div class="card-icon"><?php echo axis_icon('pregnant-icon'); ?></div>
                        <div class="card-title"><?php _e('Obstetrics & Hepatology', 'axis-theme'); ?></div>
                    </div>

                    <ul class="card-list">
                        <li><?php _e('Preeclampsia & HELLP', 'axis-theme'); ?></li>
                        <li><?php _e('Labor Bleeding', 'axis-theme'); ?></li>
                        <li><?php _e('Liver Transplant', 'axis-theme'); ?></li>
                    </ul>

                </div>

                <div class="grid-card">

                    <div class="card-header">
                        <div class="card-icon"><?php echo axis_icon('research-icon'); ?></div>
                        <div class="card-title"><?php _e('Research', 'axis-theme'); ?></div>
                    </div>

                    <ul class="card-list">
                        <li><?php _e('Open System - Animal Models', 'axis-theme'); ?></li>
                        <li><?php _e('Drug Development', 'axis-theme'); ?></li>
                        <li><?php _e('Export XML / CSV', 'axis-theme'); ?></li>
                    </ul>

                </div>

            </div>

            <div class="product-footer">AXIS Medical Construction. MultiClot® is a registered trademark of APIRO Diagnostics Kft., Hungary.</div>

        </div>

    </div>

</main>

<?php wp_footer(); ?>