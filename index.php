<?php get_header(); ?>

<div class="page-layout">

    <section class="archive-header">

        <div class="page-header" style="margin-bottom: 0px !important">
            <div class="header-text"><?php _e('Practical articles on designing and building healthcare spaces.', 'axis-theme'); ?></div>
            <div class="header-title"><?php _e('Blog', 'axis-theme'); ?></div>
        </div>

        <div class="arc-categories">

            <?php
                $post_type = 'post';
                $taxonomy = 'category';
                $current_id = is_category() ? get_queried_object_id() : 0;
                $archive_url = get_post_type_archive_link($post_type) ?: get_permalink(get_option('page_for_posts'));
                $all_active = !is_category() && (is_home() || is_post_type_archive('post'));
                $default_cat_id = get_option('default_category');
            ?>

            <a href="<?php echo esc_url($archive_url); ?>" class="btn-primary <?php echo $all_active ? 'active' : ''; ?>"><?php _e('All', 'axis-theme'); ?></a>

            <?php
                $parent_terms = get_terms(array(
                    'taxonomy' => $taxonomy,
                    'parent' => 0,
                    'hide_empty' => false,
                    'exclude'    => array($default_cat_id),
                ));

                if (!empty($parent_terms) && !is_wp_error($parent_terms)) :
                    
                    foreach ($parent_terms as $term) :

                        $is_active = ($current_id === $term->term_id) ? 'active' : ''; ?>
                        <a href="<?php echo esc_url(get_term_link($term)); ?>" class="btn-primary <?php echo $is_active ?>"><?php echo esc_html($term->name); ?></a>

                    <?php endforeach; ?>

                <?php endif;
            ?>

        </div>

    </section>

    <section class="post-grid">

        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        
        $post_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $post_date = get_the_date('F j Y');
            
        ?>

            <article class="post-card">
            
                <a href="<?php the_permalink(); ?>">

                    <div class="post-thumbnail" style="background-image: url('<?php echo esc_url($post_thumbnail); ?>')">
                        <div class="post-date"><?php echo esc_html($post_date); ?></div>
                    </div>

                    <div class="post-title"><?php the_title(); ?></div>
                    <div class="post-excerpt"><?php the_excerpt(); ?></div>

                </a>

            </article>

        <?php endwhile; endif; ?>

    </section>

    <?php axis_custom_pagination(); ?>

</div>

<?php get_footer(); ?>

