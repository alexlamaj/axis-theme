<?php get_header(); ?>

<main class="main-layout site-main-content">

    <div class="blog-layout">

        <div class="page-banner">

            <div class="page-title">Blog</div>
            <div class="stroke"></div>

        </div>

        <!-- Filters -->
        <div class="tab-buttons">

            <?php
                $current_id = is_category() ? get_queried_object_id() : 0;
                $all_active = !is_category();
            ?>

            <!-- All Posts -->
            <a href="<?php echo esc_url(home_url('/blog/')) ?>" class="btn-secondary <?php echo $all_active ? 'active' : '' ?>">All</a>

            <!-- Categories -->
            <?php

                $categories = get_categories(array(
                    'exclude' => array(get_option('default_category')),
                    'hide_empty' => false
                ));

                if (!empty($categories)) :

                    foreach($categories as $category)  :

                        $is_active = ($current_id === $category->term_id) ? 'active' : ''; ?>

                        <a href="<?php echo esc_url(get_category_link($category->term_id)) ?>" class="btn-secondary <?php echo $is_active ?>"><?php echo esc_html($category->name) ?></a>

                        <?php

                    endforeach;

                endif;

            ?>

        </div>

        <!-- Posts -->
        <div class="grid-layout">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post-card">

                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
                <?php endif; ?>

                <div class="post-content">

                    <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                    <div class="post-excerpt"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="post-link">Read More</a>

                </div>

            </article>

            <?php endwhile; endif; ?>

        </div>

        <!-- Pagination -->
        <?php axis_custom_pagination(); ?>

    </div>

</main>

<?php get_footer(); ?>