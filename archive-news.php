<?php get_header(); ?>

<main class="main-layout site-main-content">

    <div class="blog-layout">

        <div class="page-banner">

            <div class="page-title"><?php _e('News', 'axis-theme'); ?></div>
            <div class="stroke"></div>

        </div>

        <!-- Filters -->
        <div class="tab-buttons">

            <?php 
                $post_type = 'news';
                $taxonomy = 'news_category';
                $archive_url = get_post_type_archive_link($post_type);
                $current_id = is_tax($taxonomy) ? get_queried_object_id() : 0;
                $all_active = !is_tax($taxonomy);
            ?>

            <!-- All News -->
            <a href="<?php echo esc_url($archive_url); ?>" class="btn-secondary <?php echo $all_active ? 'active' : '' ?>"><?php _e('All', 'axis-theme'); ?></a>

            <!-- Categories -->
            <?php
            
                $terms = get_terms(array(
                    'taxonomy' => $taxonomy,
                    'hide_empty' => false
                ));

                if (!empty($terms) && !is_wp_error($terms)) :

                    foreach($terms as $term) :

                        $is_active = ($current_id === $term->term_id) ? 'active' : ''; ?>

                        <a href="<?php echo esc_url(get_term_link($term)) ?>" class="btn-secondary <?php echo $is_active ?>"><?php echo esc_html($term->name); ?></a>

                    <?php endforeach;

                endif;

            ?>

        </div>

        <!-- News Posts -->
        <div class="grid-layout">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class="post-card">

                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
                    <?php endif; ?>

                    <div class="post-content">

                        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                        <div class="post-excerpt"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="post-link"><?php _e('Read More', 'axis-theme'); ?></a>

                    </div>

                </article>

                <?php endwhile; endif; ?>

        </div>

        <!-- Pagination -->
        <?php axis_custom_pagination(); ?>

    </div>

</main>

<?php get_footer(); ?>