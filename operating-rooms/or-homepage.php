<?php

/** 
 * Template Name: OR Homepage Page
*/

get_header('or');

?>

<!-- Hero Section -->

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
            <div class="intro-text"><?php _e('We commission the finished theatre and support certification, then hand it over ready for the first operation.', 'axis-theme'); ?></div>
        </div>

    </div>

</section>

<!-- Certifications & Countries Section -->
<section class="cc-section">

    <div class="cc-content">

        <div class="cc-heading">Certified Management Systems</div>

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

        <div class="cc-heading">Projects in Greece and Abroad</div>

        <div class="countries">

            <div class="country">Germany</div>
            <div class="country">Libya</div>
            <div class="country">England</div>
            <div class="country">Norway</div>
            <div class="country">S. Arabia</div>
            <div class="country">Egypt</div>
            <div class="country">Russia</div>
            <div class="country">Indonesia</div>
            <div class="country">Skopje</div>
            <div class="country">Albania</div>

        </div>

    </div>

</section>

<!-- Selected Operating Room Projects -->

<?php get_footer('or'); ?>