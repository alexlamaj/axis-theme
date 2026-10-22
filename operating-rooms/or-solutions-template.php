<?php

/** 
 * Template Name: OR Solutions Template
*/

defined('ABSPATH') || exit;

if (!function_exists('axis_sol_all_data')) {

    function axis_sol_all_data(): array {

        static $cache = null;
        if (null !== $cache) {
            return $cache;
        }

        $file = apply_filters('axis_solution_data_file', get_theme_file_path('data/data.json'));
        $data = is_readable($file) ? wp_json_file_decode($file, array('associative' => true)) : null;
        $cache = is_array($data) ? $data : array();
        return $cache;

    }

}

if (!function_exists('axis_sol_s')) {

    function axis_sol_s($arr, string $key) : string {
        $value = is_array($arr) ? ($arr[$key] ?? '') : '';
        return is_scalar($value) ? trim((string) $value) : '';
    }

}

if (!function_exists('axis_sol_list')) {

    function axis_sol_list($arr, string $key, bool $of_arrays = true) : array {

        $list = (is_array($arr) && isset($arr[$key]) && is_array($arr[$key])) ? $arr[$key] : array();
        $list = array_filter($list, $of_arrays ? 'is_array' : 'is_string');

        if (!$of_arrays) {
            $list = array_filter(array_map('trim', $list), 'strlen');
        }

        return array_values($list);

    }

}

global $wp_query;

$page_id = get_queried_object_id();
$slug = (string) get_post_field('post_name', $page_id);
$all = axis_sol_all_data();
$entry = (isset($all[$slug]) && is_array($all[$slug])) ? $all[$slug] : array();
$lang = (string) pll_current_language();
$content = !empty($entry[$lang]) ? $entry[$lang] : ($entry['en'] ?? array());

// Data Preparation //
$title = axis_sol_s($content, 'title');
$subtitle = axis_sol_s($content, 'sub-title');
$stat1 = axis_sol_s($content['stat'] ?? null, 'stat1');
$stat2 = axis_sol_s($content['stat'] ?? null, 'stat2');

$overview = $content['overview'] ?? array();
$overview_text = axis_sol_s($overview, 'content');
$items = axis_sol_list($overview, 'items', false);

$spec_groups = array();
foreach (axis_sol_list($content, 'specifications') as $group) {
    
    $rows = array();
    
    foreach (axis_sol_list($group, 'elements') as $row) {
        $key = axis_sol_s($row, 'key');
        $value = axis_sol_s($row, 'value');
        if ('' !== $key && '' !== $value) {$rows[] = array($key, $value);}
    }

    if ($rows) {
        $spec_groups[] = array(axis_sol_s($group, 'category'), $rows); 
    }

}

$materials = axis_sol_list($content, 'materials');
$installation = axis_sol_list($content, 'installation');
$contact_url = apply_filters('axis_solution_contact_url', home_url('/contact/'), $slug, $lang);

$has_gallery = false;
$post_content = get_the_content();
if ( class_exists( '\Elementor\Plugin' ) && \Elementor\Plugin::$instance->db->is_built_with_elementor( $page_id ) ) {
    $has_gallery = true;
} elseif ( ! empty( trim( $post_content ) ) ) {
    $has_gallery = true;
}

get_header('or');
?>

<div class="or-layout">

    <!-- Hero Section -->
    <section class="sol-hero">

        <div class="sol-left">

            <div class="sol-title"><?php echo esc_html($title); ?></div>
            <div class="sol-sub"><?php echo esc_html($subtitle); ?></div>
            
            <div class="sol-stats">
                <div class="sol1"><?php echo esc_html($stat1); ?></div>
                <div class="sol2"><?php echo esc_html($stat2); ?></div>
            </div>

            <a href="<?php echo esc_url($contact_url); ?>" class="sol-btn"><?php _e('Ask About This System', 'axis-theme'); ?></a>

        </div>

        <div class="sol-image"><?php echo axis_icon(axis_sol_s($content, 'image')); ?></div>

    </section>

    <!-- Section Navigation -->
    <div class="sol-navigation">

        <a href="#sol-overview" class="sol-navlink"><?php _e('Overview', 'axis-theme'); ?></a>
        
        <?php if ($spec_groups) : ?>
            <a href="#sol-specifications" class="sol-navlink"><?php _e('Specifications', 'axis-theme'); ?></a>
        <?php endif; ?>

        <?php if ($materials) : ?>
            <a href="#sol-materials" class="sol-navlink"><?php _e('Materials & Supply', 'axis-theme'); ?></a>
        <?php endif; ?>

        <?php if ($installation) : ?>
            <a href="#sol-installation" class="sol-navlink"><?php _e('Installation & Delivery', 'axis-theme'); ?></a>
        <?php endif; ?>

        <?php if ($has_gallery) : ?>
            <a href="#sol-gallery" class="sol-navlink">Gallery</a>
        <?php endif; ?>

    </div>

    <!-- Overview -->
    <section class="sol-section" style="border: none;" id="sol-overview">
        <div class="section-content">

            <div class="section-title"><?php _e('Overview', 'axis-theme'); ?></div>

            <div class="overview-row">
                <div class="overview-text"><?php echo esc_html($overview_text); ?></div>

                <ul class="sol-list">
                    <?php foreach ($items as $item) : ?>
                        <li><?php echo esc_html($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </section>

    <!-- Specifications -->
    <section class="sol-section" id="sol-specifications">
        <div class="section-content">

            <div class="section-title"><?php _e('Specifications', 'axis-theme'); ?></div>

            <div class="sol-specs">

                <?php foreach ($spec_groups as $group) : ?>
                    <div class="sol-spec">
                        
                        <div class="sol-spec-title"><?php echo esc_html($group[0]); ?></div>

                        <div style="width: 100%;">
                            <?php foreach ($group[1] as $row) : ?>
                                <div class="sol-spec-row">
                                    <div class="sol-spec-row1"><?php echo esc_html($row[0]); ?></div>
                                    <div class="sol-spec-row2"><?php echo esc_html($row[1]); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>

    <!-- Materials -->
    <section class="sol-section" id="sol-materials">
        <div class="section-content">

            <div class="section-title"><?php _e('Materials & Supply', 'axis-theme'); ?></div>

            <div class="materials-items">
                <?php foreach ($materials as $material) : ?>
                    <div class="material-item">
                        <div class="material-image"><?php echo axis_icon(axis_sol_s($material, 'image')) ?></div>
                        <div class="material-heading"><?php echo esc_html(axis_sol_s($material, 'heading')); ?></div>
                        <div class="material-text"><?php echo esc_html(axis_sol_s($material, 'text')); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Installation -->
    <?php if ($installation) : ?>
    <section class="sol-section" id="sol-installation">
        <div class="section-content">

            <div class="section-title"><?php _e('Installation & Delivery', 'axis-theme'); ?></div>

            <div class="instal-items">
                <?php foreach ($installation as $index => $step) : ?>
                    <div class="instal-item">
                        <div class="instal-id"><?php echo esc_html(axis_sol_s($step, 'id')) ?></div>
                        <div class="instal-heading"><?php echo esc_html(axis_sol_s($step, 'heading')); ?></div>
                        <div class="instal-text"><?php echo esc_html(axis_sol_s($step, 'text')); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <?php endif; ?>

    <!-- Gallery -->
    <?php if ($has_gallery) : ?>
    <section class="sol-section" id="sol-gallery">
        <div class="section-content">

            <div class="section-title">Gallery</div>

            <div class="sol-gallery">
                <?php the_content(); ?>
            </div>

        </div>
    </section>
    <?php endif; ?>

</div>

<?php get_footer('or'); ?>