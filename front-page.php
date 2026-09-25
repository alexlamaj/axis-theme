<?php get_header(); ?>



<main class="main-layout site-main-content">



    <!-- Slider -->

    <div class="hero-slider" id="hero-slider">



        <div class="slider-wrapper">



            <!-- Slide 1 -->

            <div class="slide slide-active" data-index="0">



                <div class="slide-background">

                    

                    <?php echo axis_icon('OT_WHITE'); ?>



                    <div class="slide-content">



                        <div class="slide-heading"><?php _e('Turn-Key Solutions in Healthcare Units', 'axis-theme'); ?></div>

                        <div class="slide-heading-sub"><?php _e('Architecture & Building', 'axis-theme'); ?></div>

                        <a href="<?php
                            if (function_exists('pll_current_language') && pll_current_language() === 'el') {
                                echo esc_url(home_url('/el/ολιστική-λύση'));
                            } else {
                                echo esc_url(home_url('/turn-key-solutions/'));
                            }
                        ?>" class="btn-outline"><?php _e('Learn More', 'axis-theme'); ?></a>



                    </div>



                </div>



            </div>

        

        </div>



    </div>



    <div class="page-layout">



        <!-- Header Text -->

        <div class="home-header-text" style="margin-top: -40px;">



            <div class="heading-1" style="text-align: center;"><?php _e('We Remain True to our Principles', 'axis-theme'); ?></div>

            <div class="text-20" style="text-align: center;"><?php _e('Providing superior service to our clients, putting safety first, creating opportunities for our people, delivering exceptional work on time', 'axis-theme'); ?></div>



            <div class="home-header-categories">



                <div class="home-header-icon-content">



                    <div class="home-icon"><?php echo axis_icon('005-crane'); ?></div>



                    <div class="home-header-icon-text">

                        <div class="heading-2"><?php _e('Construction', 'axis-theme'); ?></div>

                        <div class="text-18"><?php _e('Project Planning', 'axis-theme'); ?></div>

                    </div>



                </div>



                <div class="home-header-icon-content">



                    <div class="home-icon"><?php echo axis_icon('001-renovation'); ?></div>



                    <div class="home-header-icon-text">

                        <div class="heading-2"><?php _e('Renovation', 'axis-theme'); ?></div>

                        <div class="text-18"><?php _e('Medical Devices', 'axis-theme'); ?></div>

                    </div>



                </div>



                <div class="home-header-icon-content">



                    <div class="home-icon"><?php echo axis_icon('008-award'); ?></div>



                    <div class="home-header-icon-text">

                        <div class="heading-2">GMP</div>

                        <div class="text-18"><?php _e('GMP Certification', 'axis-theme'); ?></div>

                    </div>



                </div>



            </div>



        </div>



        <!-- Company Section -->

        <div class="section">



            <div class="page-banner">



                <div class="page-title"><?php _e('Company', 'axis-theme'); ?></div>

                <div class="stroke"></div>



            </div>



            <div class="section-content">



                <div class="section-row">



                    <div class="section-column">

                        <div class="text-20"><?php _e('Axis Medical is a planning, construction, and trading company with many years of experience in the construction market. Our General Commercial Register Number is 128456304000. We specialize in healthcare sector such as Healthcare Facilities, Operating Theatres, Intensive Care Units (ICU), IVF Units, and more', 'axis-theme'); ?></div>

                        <a href="<?php
                            if (function_exists('pll_current_language') && pll_current_language() === 'el') {
                                echo esc_url(home_url('/el/εταιρία/'));
                            } else {
                                echo esc_url(home_url('/company/'));
                            }
                        ?>" class="btn-submit"><?php _e('View More', 'axis-theme'); ?></a>

                    </div>



                    <div class="section-column">

                        <div class="section-image"><?php echo axis_icon('IATREIO_54_alogo'); ?></div>

                    </div>



                </div>



            </div>



            <div class="building-section">



                <div class="building-background">



                    <div class="building-image">

                        <?php echo axis_icon('DSCN3493'); ?>

                    </div>



                    <div class="background-overlay"></div>



                    <div class="building-content">



                        <div><?php echo axis_icon('logo-negative-1 1'); ?></div>

                        <div class="building-text"><?php _e('Axis Building has many years of experience in building and interior renovations, as well as specialized partners in the construction sector, in order to offer the best result.', 'axis-theme'); ?></div>

                        <a href="#" class="btn-outline"><?php _e('Learn More', 'axis-theme'); ?></a>



                    </div>



                </div>



            </div>



        </div>



        <!-- Services Section -->

        <div class="section">



            <div class="page-banner">



                <div class="page-title"><?php _e('Services', 'axis-theme'); ?></div>

                <div class="stroke"></div>



            </div>



            <div class="section-content">



                <div class="section-row">



                    <div class="section-column">



                        <div class="service-box">



                            <div class="section-image">

                                <?php echo axis_icon('G-xGpCQE'); ?>

                            </div>



                            <div class="heading-2"><?php _e('Project Planning', 'axis-theme'); ?></div>



                            <a href="<?php
                                if (function_exists('pll_current_language') && pll_current_language() === 'el') {
                                    echo esc_url(home_url('/el/υπηρεσίες/'));
                                } else {
                                    echo esc_url(home_url('/services/'));
                                }
                            ?>" class="post-link"><?php _e('Learn More', 'axis-theme'); ?></a>



                        </div>



                    </div>



                    <div class="section-column">



                        <div class="service-box">



                            <div class="section-image">

                                <?php echo axis_icon('10.drone-axis-medical-kataskeyh-kiniti-meth-nosokomeio-papanikolaou-thessaloniki-greece-overview-street-final'); ?>

                            </div>



                            <div class="heading-2"><?php _e('Commissioning - GMP & GACP Certifications', 'axis-theme'); ?></div>



                            <a href="<?php
                                if (function_exists('pll_current_language') && pll_current_language() === 'el') {
                                    echo esc_url(home_url('/el/υπηρεσίες/'));
                                } else {
                                    echo esc_url(home_url('/services/'));
                                }
                            ?>" class="post-link"><?php _e('Learn More', 'axis-theme'); ?></a>



                        </div>



                    </div>



                    <div class="section-column">



                        <div class="service-box">



                            <div class="section-image">

                                <?php echo axis_icon('ΚΑΤΑΣΚΕΥΗ-ΚΑΙ-ΑΝΑΚΑΙΝΙΣΗ-scaled'); ?>

                            </div>



                            <div class="heading-2"><?php _e('Construction and Renovations', 'axis-theme'); ?></div>



                            <a href="<?php
                                if (function_exists('pll_current_language') && pll_current_language() === 'el') {
                                    echo esc_url(home_url('/el/υπηρεσίες/'));
                                } else {
                                    echo esc_url(home_url('/services/'));
                                }
                            ?>" class="post-link"><?php _e('Learn More', 'axis-theme'); ?></a>



                        </div>



                    </div>



                </div>



            </div>



        </div>



        <!-- Projects Section -->

        <div class="section">



            <div class="page-banner">



                <div class="page-title"><?php _e('Projects', 'axis-theme'); ?></div>

                <div class="stroke"></div>



            </div>



            <div class="section-content">



                <div class="section-row">



                    <div class="section-column">



                       <iframe src="https://www.youtube.com/embed/8ISRuDEU-p0?si=FVGu1Bd3kqjWOtAJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>



                    </div>



                    <div class="section-column">



                        <div class="text-20"><?php _e('As we carry out all stages of design and implementation, our team organizes and manages the entire project, ensuring quality and cost-effectiveness.', 'axis-theme'); ?></div>



                        <div class="text-20"><strong><?php _e('Core Project:', 'axis-theme'); ?></strong><?php _e(' Committee “Greece 2021”, in the framework of its donation to the Greek State, commissioned us to design and build an 18-bed mobile intensive care unit with its accompanying medical equipment. The innovative project was completed and delivered in just 59 days and is fully operational and can be transported to any part of Greece, if necessary.', 'axis-theme'); ?></div>



                        <a href="<?php
                                if (function_exists('pll_current_language') && pll_current_language() === 'el') {
                                    echo esc_url(home_url('/el/project/'));
                                } else {
                                    echo esc_url(home_url('/project/'));
                                }
                            ?>" class="btn-submit"><?php _e('View All', 'axis-theme'); ?></a>



                    </div>



                </div>



            </div>



        </div>



        <!-- Latest News Section -->

        <div class="section">



            <div class="page-banner">



                <div class="page-title"><?php _e('Blog', 'axis-theme'); ?></div>

                <div class="stroke"></div>



            </div>



            <div class="section-content">



                <div class="section-row-posts">



                        <?php



                            $latestPosts = new WP_Query(array(

                                'post_type' => 'post',

                                'posts_per_page' => 3,

                                'orderby' => 'date',

                                'order' => 'DESC'

                            ));



                            if ($latestPosts->have_posts()) {



                                while ($latestPosts->have_posts()) : $latestPosts->the_post(); ?>



                                    <article class="post-card">



                                        <?php if (has_post_thumbnail()) : ?>

                                            <a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php echo the_post_thumbnail(); ?></a>

                                        <?php endif; ?>



                                        <div class="post-content">



                                            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>

                                            <div class="post-excerpt"><?php the_excerpt(); ?></div>

                                            <a href="<?php the_permalink(); ?>" class="post-link"><?php _e('Read More', 'axis-theme'); ?></a>



                                        </div>



                                    </article>



                                <?php endwhile;

                            

                            }



                        ?>



                </div>



                <div style="display: flex; justify-content: center; align-items: center;"><a href="<?php
                                if (function_exists('pll_current_language') && pll_current_language() === 'el') {
                                    echo esc_url(home_url('/el/blog-2/'));
                                } else {
                                    echo esc_url(home_url('/blog/'));
                                }
                            ?>" class="btn-submit"><?php _e('View All', 'axis-theme'); ?></a></div>



            </div>



        </div>

        

    </div>



    <!-- Our Clients -->

    <div class="clients-carousel">



        <div class="page-banner">



            <div class="page-title"><?php _e('Our Clients', 'axis-theme'); ?></div>

            <div class="stroke"></div>



        </div>



        <div class="carousel">



            <?php

            

                $carousel_icons = array(

                    'agiosloukas',

                    'aeh-logo',

                    'ahepa-logo-hospital',

                    'Arogi-logo-768x480',

                    'assisting-nature-logo',

                    'bioiatriki',

                    'celixir-logo',

                    'elpida_logo_ankas-1',

                    'embryolab-768x504',

                    'Gen_logo2',

                    'gpap-logo-new',

                    'laser-opthalmos',

                    'logo_thessalias_10_gr',

                    'newepimed_logo',

                    'new-life-logo',

                    'Theagenio_logo',

                    'αγιοσ-δημητριος-logo-768x98',

                    'ΕΥΡΩΚΛΙΝΙΚΗ',

                    'ωκκ'

                );



                foreach ($carousel_icons as $icons) {

                    echo '<div class="carousel-icon">' . axis_icon($icons) . '</div>';

                }



                foreach ($carousel_icons as $icons) {

                    echo '<div class="carousel-icon" aria-hidden="true">' . axis_icon($icons) . '</div>';

                }

            

            ?>



        </div>



    </div>



</main>



<?php get_footer(); ?>