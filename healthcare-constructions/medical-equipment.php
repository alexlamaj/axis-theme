<?php

/**
 * Template Name: Medical Equipment
*/

get_header(); ?>

<div class="page-layout">

    <section class="page-header">
        <div class="header-text"><?php _e('Alongside construction, Axis Medical supplies selected medical equipment for the operating room and ICU, the emergency department and the hospital pharmacy.', 'axis-theme'); ?></div>
        <div class="header-title"><?php _e('The equipment that goes inside the room.', 'axis-theme'); ?></div>
    </section>

    <section class="equipment-cards">

        <div class="equip-card">

            <div class="equip-image"><?php echo axis_equipment_visual('equip-card-or-icu', 'equip-or-icu'); ?></div>

            <div class="equip-content">

                <div class="equip-title"><?php _e('Operating Room & ICU', 'axis-theme'); ?></div>
                <div class="equip-text"><?php _e('Integration, light, positioning, gases and coagulation testing for the rooms where the most critical care happens.', 'axis-theme'); ?></div>

                <div class="equip-details">

                    <div class="equip-view"><?php _e('View More', 'axis-theme'); ?></div>

                    <div class="equip-links">
                        <a href="<?php echo esc_url(axis_url('medical-equipment/or-digitalization/')); ?>" class="equip-link"><?php _e('OR Digitalization', 'axis-theme'); ?></a>
                        <a href="<?php echo esc_url(axis_url('medical-equipment/surgical-lights/')); ?>" class="equip-link"><?php _e('Surgical Lights', 'axis-theme'); ?></a>
                        <a href="<?php echo esc_url(axis_url('medical-equipment/surgical-tables/')); ?>" class="equip-link"><?php _e('Surgical Tables', 'axis-theme'); ?></a>
                        <a href="<?php echo esc_url(axis_url('medical-equipment/multiclot/')); ?>" class="equip-link"><?php _e('Hemostasis', 'axis-theme'); ?></a>
                        <a href="<?php echo esc_url(axis_url('medical-equipment/anesthesia-and-icu-pendants/')); ?>" class="equip-link"><?php _e('Anesthesia and ICU Pendants', 'axis-theme'); ?></a>
                    </div>

                </div>

            </div>

        </div>

        <div class="equip-card">

            <div class="equip-content">

                <div class="equip-title"><?php _e('Emergency Department', 'axis-theme'); ?></div>
                <div class="equip-text"><?php _e('Rapid, reproducible coagulation results for the bleeding patient, minutes after arrival.', 'axis-theme'); ?></div>

                <div class="equip-details">

                    <div class="equip-view"><?php _e('View More', 'axis-theme'); ?></div>

                    <div class="equip-links">
                        <a href="<?php echo esc_url(axis_url('medical-equipment/multiclot/')); ?>" class="equip-link"><?php _e('Hemostasis', 'axis-theme'); ?></a>
                    </div>

                </div>

            </div>

            <div class="equip-image"><?php echo axis_equipment_visual('equip-card-emergency', 'equip-emergency'); ?></div>

        </div>

        <div class="equip-card">

            <div class="equip-image"><?php echo axis_equipment_visual('equip-card-pharmacy', 'equip-pharmacy'); ?></div>

            <div class="equip-content">

                <div class="equip-title"><?php _e('Hospital Pharmacy', 'axis-theme'); ?></div>
                <div class="equip-text"><?php _e('Robotic storage and dispensing, and automated, traceable preparation of patient-specific chemotherapy.', 'axis-theme'); ?></div>

                <div class="equip-details">

                    <div class="equip-view"><?php _e('View More', 'axis-theme'); ?></div>

                    <div class="equip-links">
                        <a href="<?php echo esc_url(axis_url('medical-equipment/robotic-pharmacy/')); ?>" class="equip-link"><?php _e('Robotic Pharmacy', 'axis-theme'); ?></a>
                        <a href="<?php echo esc_url(axis_url('medical-equipment/chemomaker/')); ?>" class="equip-link"><?php _e('Oncology Drug Compounding', 'axis-theme'); ?></a>
                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

<?php get_footer(); ?>