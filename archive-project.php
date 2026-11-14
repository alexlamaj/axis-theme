<?php get_header(); ?>

<div class="page-layout">

    <section class="archive-header">

        <div class="page-header" style="margin-bottom: 0px !important;">
            <div class="header-text"><?php _e('A selection of healthcare projects from Greece and abroad. Filter by the kind of unit.', 'axis-theme'); ?></div>
            <div class="header-title"><?php _e('Hospitals, units and rooms we have built', 'axis-theme'); ?></div>
        </div>

        <div class="arc-categories">
            <?php 
                $post_type          = 'project';
                $taxonomy           = 'project_category';
                $archive_url        = get_post_type_archive_link($post_type);
                $is_tax             = is_tax($taxonomy);
                $current_id         = $is_tax ? get_queried_object_id() : 0;
                $current_term       = $current_id ? get_term($current_id, $taxonomy) : null;
                $archive_parent_id = 0;

                if ($current_term) {
                    $archive_parent_id = ($current_term->parent == 0) ? $current_term->term_id : $current_term->parent;
                }

                $all_active = !$is_tax;
            ?>

            <a href="<?php echo esc_url($archive_url); ?>" class="btn-primary <?php echo $all_active ? 'active' : ''; ?>"><?php _e('All', 'axis-theme'); ?></a>

            <?php
                $parent_terms = get_terms(array(
                    'taxonomy'   => $taxonomy,
                    'parent'     => 0,
                    'hide_empty' => false
                ));

                if (!empty($parent_terms) && !is_wp_error($parent_terms)) : 
                    foreach ($parent_terms as $parent_term) :
                        $is_active = ($archive_parent_id === $parent_term->term_id) ? 'active' : '';
                    ?>
                    <a href="<?php echo esc_url(get_term_link($parent_term)); ?>" class="btn-primary <?php echo $is_active; ?>"><?php echo esc_html($parent_term->name); ?></a>
                    <?php endforeach;
                endif;
            ?>

            <?php
                if ($archive_parent_id) : 
                    $child_terms = get_terms(array(
                        'taxonomy'   => $taxonomy,
                        'parent'     => $archive_parent_id,
                        'hide_empty' => false
                    ));

                    if (!empty($child_terms) && !is_wp_error($child_terms)) :
                        $active_sub_name = ($current_term && $current_term->parent != 0) ? $current_term->name : __('Select Sub-Category', 'axis-theme');
            ?>
                <div class="sub-dropdown">
                    <button type="button" class="btn-dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><?php echo esc_html($active_sub_name); ?></span>
                        <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="dropdown-content" aria-label="Subcategories">
                        <a href="<?php echo esc_url(get_term_link($archive_parent_id)); ?>" class="<?php echo ($current_id === $archive_parent_id) ? 'active' : ''; ?>">
                            <?php _e('All ', 'axis-theme'); echo esc_html(get_term($archive_parent_id)->name); ?>
                        </a>
                        <?php foreach ($child_terms as $child) : 
                            $is_child_active = ($current_id === $child->term_id) ? 'active' : '';
                        ?>
                        <a href="<?php echo esc_url(get_term_link($child)); ?>" class="<?php echo $is_child_active; ?>">
                            <?php echo esc_html($child->name); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php 
                    endif;
                endif; 
            ?>
        </div>

    </section>

    <section class="project-grid">

        <?php if (have_posts()) : while (have_posts()) : the_post();
        
            $project_terms = get_the_terms(get_the_ID(), $taxonomy);
            $sub_terms     = array();
            $bg_image      = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $client_name   = get_post_meta(get_the_ID(), '_project_client', true) ?: get_post_meta(get_the_ID(), '_axis_project_client', true);

            if (!empty($project_terms) && !is_wp_error($project_terms)) {
                $sub_terms = array_filter($project_terms, function ($term) {
                    return $term->parent != 0;
                });
            }
        ?>

        <a href="<?php the_permalink(); ?>" class="project-card" <?php echo $bg_image ? 'style="background-image: url(\'' . esc_url($bg_image) . '\');"' : ''; ?>>

            <div class="project-categories">
                <?php foreach ($sub_terms as $sub) : ?>
                    <span class="cat-pill">
                        <?php echo esc_html($sub->name); ?>
                    </span>
                <?php endforeach; ?>
            </div>

            <div class="project-details">
                <div class="project-title"><?php the_title(); ?></div>
                <?php if ($client_name) : ?>
                    <div class="project-client"><?php echo esc_html($client_name); ?></div>
                <?php endif; ?>
            </div>

        </a>

        <?php endwhile; else: ?>
            <p><?php _e('No Projects found!', 'axis-theme'); ?></p>
        <?php endif; ?>

    </section>

    <?php axis_custom_pagination(); ?>

</div>

<?php get_footer(); ?>

