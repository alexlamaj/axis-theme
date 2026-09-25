<?php



// Theme Support //

function axis_theme_setup() {



    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');



    register_nav_menus(array(



        'primary' => __('Main Menu', 'axis-theme'),

        'footer_nav' => __('Footer Nav Menu', 'axis-theme'),

        'useful_links' => __('Useful Links', 'axis-theme')



    ));



}

add_action('after_setup_theme', 'axis_theme_setup');

/////////////////////////////////////////////////////////////////////////



// CSS and JavaScript Implementation //

function axis_enqueue_scripts() {



    wp_enqueue_style('axis-custom-style', get_template_directory_uri().'/css/custom-styles.css', array(), time() , 'all');

    wp_enqueue_script('axis-custom-script', get_template_directory_uri().'/js/custom-script.js', array(), time() , true);



    wp_localize_script('axis-custom-script', 'demo_ajax_obj', array(

        'ajax_url' => admin_url('admin-ajax.php'),

        'nonce' => wp_create_nonce('demo_request_nonce')

    ));



}

add_action('wp_enqueue_scripts', 'axis_enqueue_scripts');

/////////////////////////////////////////////////////////////////////////



// Custom Post Types for Projects Page and News Page //

function axis_register_custom_post_types() {



    register_post_type('project', array(



        'labels' => array(

            'name' => __('Projects', 'axis-theme'),

            'singular_name' => __('Project', 'axis-theme')

        ),



        'public' => true,

        'has_archive' => true,

        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),

        'show_in_rest' => true,

        'menu_icon' => 'dashicons-building'



    ));



    register_taxonomy('project_category', array('project'), array(



        'labels' => array(

            'name' => __('Project Categories', 'axis-theme'),

            'singular_name' => __('Project Category', 'axis-theme'),

            'search_items' => __('Search Project Categories', 'axis-theme'),

            'all_items' => __('All Project Categories', 'axis-theme'),

            'edit_item' => __('Edit Project Category', 'axis-theme'),

            'update_item' => __('Update Project Category', 'axis-theme'),

            'add_new_item' => __('Add New Project Category', 'axis-theme'),

            'new_item_name' => __('New Project Category Name', 'axis-theme'),

            'menu_name' => __('Project Categories', 'axis-theme'),

        ),



        'hierarchical' => true,

        'show_ui' => true,

        'show_admin_column' => true,

        'show_in_rest' => true,

        'rewrite' => array('slug' => 'project-category')



    ));



    register_post_type('news', array(



        'labels' => array(

            'name' => __('News'),

            'singular_name' => __('News Post')

        ),



        'public' => true,

        'has_archive' => true,

        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),

        'show_in_rest' => true,

        'menu_icon' => 'dashicons-megaphone'



    ));



    register_taxonomy('news_category', array('news'), array(



        'labels' => array(

            'name' => __('News Categories', 'axis-theme'),

            'singular_name' => __('News Category', 'axis-theme'),

            'search_items' => __('Search News Categories', 'axis-theme'),

            'all_items' => __('All News Categories', 'axis-theme'),

            'edit_item' => __('Edit News Category', 'axis-theme'),

            'update_item' => __('Update News Category', 'axis-theme'),

            'add_new_item' => __('Add New News Category', 'axis-theme'),

            'new_item_name' => __('New News Category Name', 'axis-theme'),

            'menu_name' => __('News Categories', 'axis-theme')

        ),



        'hierarchical' => true,

        'show_ui' => true,

        'show_admin_column' => true,

        'show_in_rest' => true,

        'rewrite' => array('slug' => 'news-category')



    ));



}

add_action('init', 'axis_register_custom_post_types');



// Custom Meta Box for Projects (Client and Location) //

function axis_projects_meta_boxes() {



    add_meta_box(



        'project_details_box',

        'Project Details',

        'axis_render_project_meta_box',

        'project',

        'side',

        'default'



    );



};

add_action('add_meta_boxes', 'axis_projects_meta_boxes');



// Render the input fields for Client and Location //

function axis_render_project_meta_box($post) {



    $client = get_post_meta($post->ID, '_axis_project_client', true);

    $location = get_post_meta($post->ID, '_axis_project_location', true);



    wp_nonce_field('axis_save_project_meta', 'axis_project_meta_nonce');

    ?>



    <p>

        <label for="axis_project_client"><strong>Client Name</strong></label><br>

        <input type="text" id="axis_project_client" name="axis_project_client" value="<?php echo esc_attr($client); ?>" style="width: 100%;">

    </p>



    <p>

        <label for="axis_project_location"><strong>Location</strong></label><br>

        <input type="text" id="axis_project_location" name="axis_project_location" value="<?php echo esc_attr($location); ?>" style="width: 100%;">

    </p>



    <?php



};



// Saving the values of Client and Location //

function axis_save_project_meta($post_id) {



    if (!isset($_POST['axis_project_meta_nonce']) || !wp_verify_nonce($_POST['axis_project_meta_nonce'], 'axis_save_project_meta')) {return;}



    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {return;}



    if (!current_user_can('edit_post', $post_id)) {return;}



    if (isset($_POST['axis_project_client'])) {

        update_post_meta($post_id, '_axis_project_client', sanitize_text_field($_POST['axis_project_client']));

    }



    if (isset($_POST['axis_project_location'])) {

        update_post_meta($post_id, '_axis_project_location', sanitize_text_field($_POST['axis_project_location']));

    }



};

add_action('save_post', 'axis_save_project_meta');

/////////////////////////////////////////////////////////////////////////





// Fetch Media Library //

function axis_icon($slug, $custom_class = '') {



    global $wpdb;

    $clean_slug = sanitize_title($slug);



    $attachement_id = $wpdb->get_var($wpdb->prepare(

        "SELECT ID FROM {$wpdb->posts} WHERE post_type = 'attachment' AND post_name LIKE %s LIMIT 1",

        '%'.$wpdb->esc_like($clean_slug).'%'

    ));



    if (!empty($attachement_id)) {



        $mime_type = get_post_mime_type($attachement_id);



        if ($mime_type === 'image/svg+xml') {

            $file_path = get_attached_file($attachement_id);



            if ($file_path && file_exists($file_path)) {

                return '<span class="axis-svg-icon'.esc_attr(trim($custom_class)).'">'.file_get_contents($file_path).'</span>';

            }

        }



        return wp_get_attachment_image($attachement_id, 'full', false, array(

            'class' => sanitize_html_class($custom_class)

        ));



    }



    return '<!-- Icon/Image Not Found! -->';



};

/////////////////////////////////////////////////////////////////////////

// Identify Post Taxonomies for Custom Post Type pages (News and Projects) //

function axis_post_categories() {

    $post_id   = get_the_ID();
    $post_type = get_post_type($post_id);

    if (!$post_type) return;

    $taxonomies = get_object_taxonomies($post_type);

    $exclude = array('language', 'post_translations', 'term_language', 'term_translations', 'post_format');
    $valid_taxonomies = array_diff($taxonomies, $exclude);

    if (!empty($valid_taxonomies)) {

        $target_taxonomy = in_array('category', $valid_taxonomies) ? 'category' : reset($valid_taxonomies);
        the_terms($post_id, $target_taxonomy, '', ' ');

    }
}

/////////////////////////////////////////////////////////////////////////



// Creating CPTs for Contact Form and Careers Form (Admin Only Viewing) //

function axis_register_forms_cpt() {



    register_post_type('application', array(



        'labels' => array(

            'name' => 'Applications',

            'singular_name' => 'application'

        ),



        'public' => false,

        'show_ui' => true,

        'menu_icon' => 'dashicons-id',

        'supports' => array('title', 'editor')



    ));



    register_post_type('contact', array(



        'labels' => array(

            'name' => 'Contact Messages',

            'singular_name' => 'Contact Message'

        ),



        'public' => false,

        'show_ui' => true,

        'menu_icon' => 'dashicons-email-alt',

        'supports' => array('title', 'editor')



    ));



}

add_action('init', 'axis_register_forms_cpt');



// Handle Careers Form Submission //

function axis_careers_form_sub() {



    if (!isset($_POST['axis_career_nonce']) || !wp_verify_nonce($_POST['axis_career_nonce'], 'submit_career_form')) {
        wp_die('Security Check failed!');
    }



    $firstName = sanitize_text_field($_POST['applicant_first_name']);

    $lastName = sanitize_text_field($_POST['applicant_last_name']);

    $email = sanitize_email($_POST['applicant_email']);

    $phone = sanitize_text_field($_POST['applicant_phone']);

    $profession = sanitize_text_field($_POST['applicant_profession']);



    $post_id = wp_insert_post(array(



        'post_title' => 'Application: ' . $lastName,

        'post_type' => 'application',

        'post_status' => 'publish'



    ));



    if ($post_id) {



        update_post_meta($post_id, '_applicant_first_name', $firstName);

        update_post_meta($post_id, '_applicant_email', $email);

        update_post_meta($post_id, '_applicant_phone', $phone);

        update_post_meta($post_id, '_applicant_profession', $profession);



        if (!empty($_FILES['applicant_cv']['name'])) {



            require_once(ABSPATH . 'wp-admin/includes/file.php');

            $movefile = wp_handle_upload($_FILES['applicant_cv'], array('test_form' => false));



            if ($movefile && !isset($movefile['error'])) {



                update_post_meta($post_id, '_applicant_cv_url', $movefile['url']);



            }



        }



        wp_redirect(add_query_arg('success', '1', wp_get_referer()));

        exit;



    }



}

add_action('admin_post_submit_career_form', 'axis_careers_form_sub');

add_action('admin_post_nopriv_submit_career_form', 'axis_careers_form_sub');



// Handle Contact Form Submissions //

function axis_contact_form_sub() {



    if (!isset($_POST['axis_contact_nonce']) || !wp_verify_nonce($_POST['axis_contact_nonce'], 'submit_contact_form')) wp_die('Security Check failed!');



    $firstName = sanitize_text_field($_POST['contact_first_name']);

    $lastName = sanitize_text_field($_POST['contact_last_name']);

    $company = sanitize_text_field($_POST['contact_company']);

    $subject = sanitize_text_field($_POST['contact_subject']);

    $email = sanitize_email($_POST['contact_email']);

    $message = sanitize_textarea_field($_POST['contact_message']);



    $post_id = wp_insert_post(array(



        'post_title' => 'Message: ' . $subject,

        'post_type' => 'contact',

        'post_status' => 'publish'



    ));



    if ($post_id) {



        update_post_meta($post_id, '_contact_first_name', $firstName);

        update_post_meta($post_id, '_contact_last_name', $lastName);

        update_post_meta($post_id, '_contact_company', $company);

        update_post_meta($post_id, '_contact_email', $email);

        update_post_meta($post_id, '_contact_message', $message);



        wp_redirect(add_query_arg('success', 'contact', wp_get_referer()));

        exit;



    }



}

add_action('admin_post_submit_contact_form', 'axis_contact_form_sub');

add_action('admin_post_nopriv_submit_contact_form', 'axis_contact_form_sub');



// Admin Dashboard Meta Boxes for Forms //

function axis_form_meta_boxes() {



    add_meta_box('application-details', 'Application Details', 'axis_render_application_meta', 'application', 'normal', 'high');

    add_meta_box('contact-details', 'Sender Details', 'axis_render_contact_meta', 'contact', 'normal', 'high');



}

add_action('add_meta_boxes', 'axis_form_meta_boxes');



// Render Careers Form Inputs //

function axis_render_application_meta($post) {



    $firstName = get_post_meta($post->ID, '_applicant_first_name', true);

    $lastName = str_replace('Application: ', '', get_the_title($post->ID));

    $email = get_post_meta($post->ID, '_applicant_email', true);

    $phone = get_post_meta($post->ID, '_applicant_phone', true);

    $profession = get_post_meta($post->ID, '_applicant_profession', true);

    $upload_cv = get_post_meta($post->ID, '_applicant_cv_url', true);



    ?>



    <div style="padding: 12px; font-size: 14px; line-height: 1.6;">

        <p><strong>First Name: </strong><?php echo esc_html($firstName); ?></p>

        <p><strong>Last Name: </strong><?php echo esc_html($lastName); ?></p>

        <p><strong>Email: </strong><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email) ?></a></p>

        <p><strong>Phone: </strong><a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a></p>

        <p><strong>Profession: </strong><?php echo esc_html($profession) ?></p>

    </div>



    <?php

    if ($upload_cv) {

        echo '<p>CV: <a href="' . esc_url($upload_cv) . '" target="_blank">View / Download CV</a></p>';

    } else {

        echo '<p>No CV uploaded</p>';

    }



}



// Render Contact Form Inputs //

function axis_render_contact_meta($post) {



    $firstName = get_post_meta($post->ID, '_contact_first_name', true);

    $lastName = get_post_meta($post->ID, '_contact_last_name', true);

    $company = get_post_meta($post->ID, '_contact_company', true);

    $subject= str_replace('Message: ', '', get_the_title($post->ID));

    $email = get_post_meta($post->ID, '_contact_email', true);

    $message = get_post_meta($post->ID, '_contact_message', true);



    ?>



    <div style="padding: 12px; font-size: 14px; line-height: 1.6;">

        <p><strong>First Name: </strong><?php echo esc_html($firstName); ?></p>

        <p><strong>Last Name: </strong><?php echo esc_html($lastName); ?></p>

        <p><strong>Company Name: </strong><?php echo esc_html($company); ?></p>

        <p><strong>Subject: </strong><?php echo esc_html($subject); ?></p>

        <p><strong>Email Address: </strong><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></p>

        <p><strong>Message: </strong><?php echo esc_html($message); ?></p>

    </div>



    <?php



}



// Application Submission Email Alert using AJAX //
function handle_career_form_submission() {

    if (!isset($_POST['axis_career_nonce']) || !wp_verify_nonce($_POST['axis_career_nonce'], 'submit_career_form')) {
        wp_send_json_error('Security check failed!');
    }

    $first_name = isset($_POST['applicant_first_name']) ? sanitize_text_field($_POST['applicant_first_name']) : '';
    $last_name = isset($_POST['applicant_last_name']) ? sanitize_text_field($_POST['applicant_last_name']) : '';
    $email = isset($_POST['applicant_email']) ? sanitize_email($_POST['applicant_email']) : '';
    $phone = isset($_POST['applicant_phone']) ? sanitize_text_field($_POST['applicant_phone']) : '';
    $profession = isset($_POST['applicant_profession']) ? sanitize_text_field($_POST['applicant_profession']) : '';

    if (empty($first_name) || empty($last_name) || empty($email) || !is_email($email)) {
        wp_send_json_error('Please fill in all required fields!');
    }

    $attachments = array();
    $file_url = 'No files uploaded!';

    if (!empty($_FILES['applicant_cv']['name'])) {

        require_once(ABSPATH . 'wp-admin/includes/file.php');

        $uploaded_file = $_FILES['applicant_cv'];
        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($uploaded_file, $upload_overrides);

        if ($movefile && !isset($movefile['error'])) {

            $file_path = $movefile['file'];
            $file_url = $movefile['url'];
            $attachments = array($file_path);

        } else {

            wp_send_json_error('Error uploading the CV: ' . $movefile['error']);

        }

    } else {

        wp_send_json_error('Please upload a CV!');

    }

    $post_id = wp_insert_post(array(
        'post_type' => 'application',
        'post_title' => $first_name . ' ' . $last_name,
        'post_status' => 'publish'
    ));

    if ($post_id) {

        update_post_meta($post_id, '_applicant_first_name', $first_name);
        update_post_meta($post_id, '_applicant_last_name', $last_name);
        update_post_meta($post_id, '_applicant_email', $email);
        update_post_meta($post_id, '_applicant_phone', $phone);
        update_post_meta($post_id, '_applicant_profession', $profession);
        update_post_meta($post_id, '_applicant_cv', $file_url);

    }

    $to = 'info@axismedical.gr';
    $subject = 'New Career Application: ' . $first_name . ' ' . $last_name;

    $message = "First Name: " . $first_name . "\n";
    $message .= "Last Name: " . $last_name . "\n";
    $message .= "Email Address: " . $email . "\n";
    $message .= "Phone Number: " . $phone . "\n";
    $message .= "Profession: " . $profession . "\n";
    $message .= "CV Attachment: " . $file_url . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>'
    );

    $sent = wp_mail($to, $subject, $message, $headers, $attachments);

    if (!$sent) {

        error_log('wp_mail failed to send career application for ' . $email);
        wp_send_json_error('Application saved, but email notification failed!');

    }

    wp_send_json_success('Your application has been submitted successfully!');

}
add_action('wp_ajax_submit_career_form', 'handle_career_form_submission');
add_action('wp_ajax_nopriv_submit_career_form', 'handle_career_form_submission');
/////////////////////////////////////////////////////////////////////////

// Contact Sumbission Email Alert //
function handle_contact_form_submission() {

    if (!isset($_POST['axis_contact_nonce']) || !wp_verify_nonce($_POST['axis_contact_nonce'], 'submit_contact_form')) {
        wp_send_json_error('Security Check Failed!');
    }

    $first_name = isset($_POST['contact_first_name']) ? sanitize_text_field($_POST['contact_first_name']) : '';
    $last_name = isset($_POST['contact_last_name']) ? sanitize_text_field($_POST['contact_last_name']) : '';
    $company = isset($_POST['contact_company']) ? sanitize_text_field($_POST['contact_company']) : '';
    $subject = isset($_POST['contact_subject']) ? sanitize_text_field($_POST['contact_subject']) : '';
    $email = isset($_POST['contact_email']) ? sanitize_email($_POST['contact_email']) : '';
    $message_txt = isset($_POST['contact_message']) ? sanitize_textarea_field($_POST['contact_message']) : '';

    if (empty($first_name) || empty($last_name) || empty($email) || !is_email($email)) {
        wp_send_json_error('Please fill in all required fields!');
    }

    $post_id = wp_insert_post(array(
        'post_type' => 'contact',
        'post_title' => $first_name . ' ' . $last_name,
        'post_status' => 'publish'
    ));

    if ($post_id) {

        update_post_meta($post_id, '_contact_first_name', $first_name);
        update_post_meta($post_id, '_contact_last_name', $last_name);
        update_post_meta($post_id, '_contact_company', $company);
        update_post_meta($post_id, '_contact_subject', $subject);
        update_post_meta($post_id, '_contact_email', $email);
        update_post_meta($post_id, '_contact_message', $message_txt);

    }

    $to = 'info@axismedical.gr';
    $subject_email = 'New Contact Message: ' . $subject;

    $message = "First Name: " . $first_name . "\n";
    $message .= "Last Name: " . $last_name . "\n";
    $message .= "Company: " . (($company) ? $company : 'No Company Provided!') . "\n";
    $message .= "Email Address: " . $email . "\n";
    $message .= "Message: " . $message_txt . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>'
    );

    $sent = wp_mail($to, $subject_email, $message, $headers);

    if (!$sent) {

        error_log('wp_mail failed to send contact message for ' . $email);
        wp_send_json_error('Contact Message saved, but email verification failed!');

    }

    wp_send_json_success('Your contact message has been submitted successfully!');

}
add_action('wp_ajax_submit_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form_submission');
/////////////////////////////////////////////////////////////////////////

// Load Elementor Templates //

function axis_get_elementor_templates($template_id) {



    if (!class_exists('\Elementor\Plugin')) {

        return '';

    }



    if (empty(\Elementor\Plugin::$instance->frontend)) {



        if (class_exists('\Elementor\Frontend')) {



            \Elementor\Plugin::$instance->frontend = new \Elementor\Frontend();



        } else {



            return '';



        }



    }



    return \Elementor\Plugin::$instance->frontend->get_builder_content_for_display($template_id, true);



}

/////////////////////////////////////////////////////////////////////////



// Creating CPT for Team Members //

function axis_register_team_cpt() {



    register_post_type('team_member', array(

        

        'labels' => array(

            'name' => 'Team Members',

            'singlular_name' => 'Team Member',

            'add_new_item' => 'Add New Team Member',

            'edit_item' => 'Edit Team Member'

        ),



        'public' => true,

        'has_archive' => false,

        'menu_icon' => 'dashicons-groups',

        'supports' => array('title', 'thumbnail', 'page-attributes'),



    ));



}

add_action('init', 'axis_register_team_cpt');



// Add Meta Boxes for Profession and Studies //

function axis_team_meta_boxes() {

    add_meta_box('team_details', 'Team Member Details', 'axis_team_meta_box_html', 'team_member', 'normal', 'default');

}

add_action('add_meta_boxes', 'axis_team_meta_boxes');



// HTML for Team Member Meta Boxes //

function axis_team_meta_box_html($post) {



    $profession = get_post_meta($post->ID, '_team_profession', true);

    $studies = get_post_meta($post->ID, '_team_studies', true);



    wp_nonce_field('save_team_data', 'team_meta_nonce') ?>



    <p>

        <label for="team_profession"><strong>Profession</strong></label>

        <input type="text" id="team_profession" name="team_profession" value="<?php echo esc_attr($profession); ?>" style="width: 100%; margin-top: 5px;">

    </p>



    <p>

        <label for="team_studies">Studies</label>

        <input type="text" id="team_studies" name="team_studies" value="<?php echo esc_attr($studies); ?>" style="width: 100%; margin-top: 5px;">

    </p>



    <?php



}



// Render Team Member Meta Boxes //

function axis_team_save_meta($post_id) {



    if (!isset($_POST['team_meta_nonce']) || !wp_verify_nonce($_POST['team_meta_nonce'], 'save_team_data')) return;

    if (defined('DOING_AUTOSAVE') && 'DOING_AUTOSAVE') return;

    if(!current_user_can('edit_post', $post_id)) return;



    if (isset($_POST['team_profession'])) {

        update_post_meta($post_id, '_team_profession', sanitize_text_field($_POST['team_profession']));

    }



    if (isset($_POST['team_studies'])) {

        update_post_meta($post_id, '_team_studies', sanitize_text_field($_POST['team_studies']));

    }



}

add_action('save_post_team_member', 'axis_team_save_meta');



// Team Member Shortcode //

function axis_team_shortcode() {



    $query = new WP_Query(array(



        'post_type' => 'team_member',

        'posts_per_page' => -1,

        'orderby' => 'menu_order',

        'order' => 'ASC'



    ));



    if (!$query->have_posts()) {

        return '<p>No team members found!</p>';

    }



    ob_start(); ?>



    <div class="container">



        <div class="team-content">



            <?php while ($query->have_posts()) : $query->the_post();



                $profession = get_post_meta(get_the_ID(), '_team_profession', true);

                $studies = get_post_meta(get_the_ID(), '_team_studies', true);



                if ($query->current_post === 0) : ?>



                    <div class="team-card">



                        <div class="team-image">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail(); ?>

                            <?php else : ?>

                                <?php echo axis_icon('empty-member'); ?>

                            <?php endif; ?>

                        </div>



                        <div class="team-name">

                            <?php the_title(); ?>

                        </div>



                        <div class="team-profession">

                            <?php echo esc_html($profession); ?>

                        </div>



                        <div class="team-studies">

                            <?php echo esc_html($studies); ?>

                        </div>



                    </div>



            <div class="grid-layout">



                <?php else : ?>



                        <div class="team-card">



                            <div class="team-image">

                                <?php if (has_post_thumbnail()) : ?>

                                    <?php the_post_thumbnail(); ?>

                                <?php else : ?>

                                    <?php echo axis_icon('empty-member'); ?>

                                <?php endif; ?>

                            </div>



                            <div class="team-name">

                                <?php the_title(); ?>

                            </div>



                            <div class="team-profession">

                                <?php echo esc_html($profession); ?>

                            </div>



                            <div class="team-studies">

                                <?php echo esc_html($studies); ?>

                            </div>



                        </div>



                <?php endif; ?>



            <?php endwhile; ?>



            </div>



        </div>



    </div>



    <?php wp_reset_postdata(); return ob_get_clean();



}

add_shortcode('axis_team_cards', 'axis_team_shortcode');

/////////////////////////////////////////////////////////////////////////



// Custom Pagination //

function axis_custom_pagination($custom_query = null) {



    global $wp_query;

    $query = $custom_query ? $custom_query : $wp_query;



    $total_pages = $query->max_num_pages;

    if ($total_pages <= 1) return;



    $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);



    $big = 999999999999;

    $page_links = paginate_links(array(



        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),

        'format' => '?paged=%#%',

        'current' => max(1, $paged),

        'total' => $total_pages,

        'prev_next' => false,

        'type' => 'array',

        'mid_size' => 1,

        'end_size' => 1



    ));



    $prev_url = get_pagenum_link($paged - 1);

    $next_url = get_pagenum_link($paged + 1);

    ?>



    <div class="custom-pagination">



        <!-- Previous Button -->

        <?php if ($paged > 1) : ?>

            <a href="<?php echo esc_url($prev_url) ?>" class="pagination-button prev-arrow">

                <?php echo axis_icon('left-arrow'); ?>

            </a>

        <?php else : ?>

            <span class="pagination-button prev-arrow disabled">

                <?php echo axis_icon('left-arrow'); ?>

            </span>

        <?php endif; ?>



        <!-- Pagination Links -->

        <div class="pagination-links">



            <?php if (is_array($page_links)) {



                foreach ($page_links as $link) {



                    if (strpos($link, 'current') !== false) {

                        echo '<a class="num-link num-active">' . strip_tags($link) . '</a>';

                    } else {

                        echo str_replace('page-numbers', 'num-link', $link);

                    }



                }



            } ?>



        </div>



        <!-- Next Button -->

        <?php if ($paged < $total_pages) : ?>

            <a href="<?php echo esc_url($next_url); ?>" class="pagination-button next-arrow">

                <?php echo axis_icon('right-arrow'); ?>

            </a>

        <?php else : ?>

            <span class="pagination-button next-arrow disabled">

                <?php echo axis_icon('right-arrow'); ?>

            </span>

        <?php endif; ?>



    </div>



    <?php



}

/////////////////////////////////////////////////////////////////////////



// AJAX Demo Request Submission //

function demo_request_submission() {



    check_ajax_referer('demo_request_nonce', 'security');



    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';

    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';

    $company = isset($_POST['company']) ? sanitize_text_field($_POST['company']) : '';

    $product = isset($_POST['product_name']) ? sanitize_text_field($_POST['product_name']) : 'MultiClot';

    $message_text = isset($_POST['message_text']) ? sanitize_text_field($_POST['message_text']) : '';



    if (empty($name) || empty($email)) {

        wp_send_json_error('Please fill in all required fields.');

    }



    if (!is_email($email)) {

        wp_send_json_error('Please enter a valid email address');

    }



    $to = 'info@axismedical.gr';

    $subject = 'New Demo Request [' . $product . ']: ' . $name;

    $message = "You have received a new demo request:\n\n";

    $message .= "Product: " . $product . "\n";

    $message .= "Name: " . $name . "\n";

    $message .= "Email: " . $email . "\n";

    $message .= "Phone: " . ($phone ? $phone : 'Not Provided') . "\n";

    $message .= "Company: " . ($company ? $company : 'Not Provided') . "\n";

    $message .= "Message: " . ($message_text ? $message_text : 'Not Provided') . "\n";



    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: Axis Medical <info@axismedical.gr>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );



    $sent = wp_mail($to, $subject, $message, $headers);



    if ($sent) {

        wp_send_json_success('Thank you! Your request was submitted successfully!');

    } else {

        wp_send_json_error('Server email delivery failed! Please try again later.');

    }



}

add_action('wp_ajax_submit_demo_request', 'demo_request_submission');

add_action('wp_ajax_nopriv_submit_demo_request', 'demo_request_submission');

/////////////////////////////////////////////////////////////////////////



// Multilingual Website //

function axis_load_theme_textdomain() {

    load_theme_textdomain('axis-theme', get_template_directory() . '/languages');

}

add_action('after_setup_theme', 'axis_load_theme_textdomain');



// Language Switcher Template //
function axis_language_switcher() {

    $languages = apply_filters('wpml_active_languages', NULL, array(
        'skip_missing' => 0,
        'orderby'      => 'code'
    ));

    if (!empty($languages)) : ?>

        <div class="floating-lang">

            <div class="lang-card">

                <?php foreach($languages as $lang) :

                    $code = ($lang['language_code'] === 'el') ? 'GR' : strtoupper($lang['language_code']);
                    $active_class = $lang['active'] ? 'lang-active' : '';

                ?>

                    <a href="<?php echo esc_url($lang['url']); ?>" class="lang-item <?php echo esc_attr($active_class); ?>">
                        <img src="<?php echo esc_url($lang['country_flag_url']); ?>" alt="<?php echo esc_attr($code); ?>" class="lang-flag">
                        <span class="lang-code"><?php echo esc_html($code); ?></span>
                    </a>

                <?php endforeach; ?>

            </div>

        </div>

    <?php endif;

}
add_action('wp_footer', 'axis_language_switcher');
/////////////////////////////////////////////////////////////////////////