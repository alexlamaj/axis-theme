<?php get_header(); ?>

<main class="main-layout site-main-content">

    <article <?php echo post_class('single-post-wrapper page-layout') ?>>

        <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <?php 
                $location = get_post_meta(get_the_ID(), '_axis_project_location', true);
                $client = get_post_meta(get_the_ID(), '_axis_project_client', true);
            ?>

            <!-- Post Header -->
            <div class="post-header">

                <div class="post-header-project">
                    <div class="post-category"><?php axis_post_categories(); ?></div>
                    <div class="single-post-title"><?php the_title(); ?></div>
                </div>

                <div class="post-meta">

                    <div class="post-meta-add">

                        <?php if ($client) : ?>
                            <div class="meta-value"><?php echo esc_html($client); ?></div>
                        <?php endif; ?>

                        <?php if ($location) : ?>
                            <div class="post-location">
                                <?php echo axis_icon('location-yellow-icon'); ?>
                                <div class="meta-value"><?php echo esc_html($location); ?></div>
                            </div>
                        <?php endif; ?>

                    </div>

                    <time class="post-date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>

                </div>

            </div>

            <!-- Post Thumbnail -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="single-post-thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="single-post-content"><?php the_content(); ?></div>

        <?php endwhile; endif; ?>

    </article>

</main>

<?php get_footer(); ?>