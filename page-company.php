<?php get_header(); ?>



<main class="main-layout site-main-content">



    <div class="page-layout">



        <!-- Page Title Banner -->

        <div class="page-banner">



            <div class="page-title"><?php the_title(); ?></div>

            <div class="stroke"></div>



        </div>



        <!-- Tab Buttons -->

        <div class="tab-buttons tab-btn-company">



            <button class="btn-secondary active"><?php _e('About Us', 'axis-theme'); ?></button>

            <button class="btn-secondary"><?php _e('Core Values', 'axis-theme'); ?></button>

            <button class="btn-secondary"><?php _e('Our Team', 'axis-theme'); ?></button>

            <button class="btn-secondary"><?php _e('Brochures', 'axis-theme'); ?></button>

            <button class="btn-secondary"><?php _e('Certifications', 'axis-theme'); ?></button>

        </div>



        <!-- Tab Containers (Rendered from Elementor Templates) -->

        <div class="tab-containers">



            <!-- Company - About Us Template -->

            <div class="elementor-custom-tab custom-tab-active">

                <?php echo axis_get_elementor_templates(483); ?>

            </div>



            <!-- Company - Core Values Template -->

            <div class="elementor-custom-tab">

                <?php echo axis_get_elementor_templates(485); ?>

            </div>



            <!-- Company - Our Team Template -->

            <div class="elementor-custom-tab">

                <?php echo axis_get_elementor_templates(484); ?>

            </div>



            <!-- Company - Brochures Template -->

            <div class="elementor-custom-tab">

                <?php echo axis_get_elementor_templates(486); ?>

            </div>

            <!-- Company - Certifications Template -->
            <div class="elementor-custom-tab">

                <?php echo axis_get_elementor_templates(10127); ?>

            </div>



        </div>



    </div>



</main>



<?php get_footer(); ?>