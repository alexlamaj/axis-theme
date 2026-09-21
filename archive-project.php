<?php get_header(); ?>

<main class="main-layout site-main-content">

    <div class="blog-layout">

        <div class="page-banner">

            <div class="page-title"><?php _e('Projects', 'axis-theme'); ?></div>
            <div class="stroke"></div>

        </div>

        <!-- Filters -->
        <div class="tab-buttons">

            <?php
                $post_type = 'project';
                $taxonomy = 'project_category';
                
                $current_id= is_tax($taxonomy) ? get_queried_object_id() : 0;
                $current_term = $current_id ? get_term($current_id, $taxonomy) : null;

                $parent_id = ($current_term && !is_wp_error($current_term) && isset($current_term->parent)) ? $current_term->parent : 0;
                $parent_active = $parent_id ? $parent_id : $current_id;

                $archive_url = get_post_type_archive_link($post_type);
                $all_active = !is_tax($taxonomy);
            ?>

            <!-- All -->
            <a href="<?php echo esc_url($archive_url); ?>" class="btn-secondary <?php echo $all_active ? 'active' : '' ?>"><?php _e('All', 'axis-theme'); ?></a>

            <!-- Categories -->
            <?php
            
                $parent_terms = get_terms(array(
                    'taxonomy' => $taxonomy,
                    'parent' => 0,
                    'hide_empty' => false,
                ));

                if (!empty($parent_terms) && !is_wp_error($parent_terms)) :

                    foreach ($parent_terms as $term) :

                        $is_active = ($parent_active === $term->term_id) ? 'active' : ''; ?>
                        
                        <a href="<?php echo esc_url(get_term_link($term)) ?>" class="btn-secondary <?php echo $is_active ?>"><?php echo esc_html($term->name); ?></a>

                    <?php endforeach;

                endif;

            ?>

        </div>

        <!-- Sub - Categories -->
        <?php 

            if ($parent_active) :

                $sub_terms = get_terms(array(
                    'taxonomy' => $taxonomy,
                    'parent' => $parent_active,
                    'hide_empty' => false
                ));

                if (!empty($sub_terms) && !is_wp_error($sub_terms)) :

                    $parent_obj = get_term($parent_active, $taxonomy);
                    $selected_label = ($current_term && $current_term->term_id !== $parent_obj->term_id) ? $current_term->name : 'All'; ?>
                    
                    <div class="subcat-dropdown">

                        <button class="btn-drop drop-toggle">
                            <?php echo axis_icon('yellow-dropdown', 'arrow-icon'); ?>
                            <div class="drop-cat"><?php echo esc_html($selected_label) ?></div>
                        </button>

                        <ul class="dropdown-menu">
                        
                            <?php foreach ($sub_terms as $sub) : ?>

                                <li>
                                    <a href="<?php echo esc_url(get_term_link($sub)); ?>" class="<?php echo ($current_id === $sub->term_id) ? 'active' : ''; ?>">
                                        <?php echo esc_html($sub->name); ?>
                                    </a>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endif;

            endif;

        ?>

        <!-- Project Posts -->
        <div class="grid-layout">

            <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <article class="post-card">

                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
                <?php endif; ?>

                <div class="post-content">

                    <div class="project-category"><?php axis_post_categories(); ?></div>
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