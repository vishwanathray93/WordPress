<?php 
add_action('init', 'menus_setup');
function menus_setup(){
    register_nav_menus([
        'primary_menu_portfolio' => __('Primary Menu Portfolio', 'fortfolio'),
        'footer_menu_portfolio' => __('Footer Menu Portfolio', 'portfolio'),
    ]);
}

function custom_breadcrumb() {
    echo '<div class="banner_content text-center">';
    
    // Set the page title
    if (is_home()) {
        echo '<h2>Home</h2>';
    } elseif (is_category()) {
        echo '<h2>' . single_cat_title('', false) . '</h2>';
    } elseif (is_single()) {
        echo '<h2>' . get_the_title() . '</h2>';
    } elseif (is_page()) {
        echo '<h2>' . get_the_title() . '</h2>';
    } elseif (is_search()) {
        echo '<h2>Search Results</h2>';
    } elseif (is_404()) {
        echo '<h2>Page Not Found</h2>';
    }

    // Breadcrumb links
    echo '<div class="page_link">';
    echo '<a href="' . home_url() . '">Home</a>';

    if (is_category()) {
        echo '<a href="#">' . single_cat_title('', false) . '</a>';
    } elseif (is_single()) {
        $category = get_the_category();
        if ($category) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
        }
        echo '<a href="#">' . get_the_title() . '</a>';
    } elseif (is_page() && !is_front_page()) {
        echo '<a href="#">' . get_the_title() . '</a>';
    }

    echo '</div>';
    echo '</div>';
}
//============================for uploading svg files=========================
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');



//============================ tech stack =post type =========================
function create_tech_stack_post_type() {
    register_post_type('tech_stack',
        array(
            'labels' => array(
                'name' => __('Tech Stack'),
                'singular_name' => __('Tech Item'),
                'add_new' => __('Add Tech Item'),
                'add_new_item' => __('Add New Tech Item'),
                'edit_item' => __('Edit Tech Item'),
                'new_item' => __('New Tech Item'),
                'view_item' => __('View Tech Item'),
                'search_items' => __('Search Tech Items'),
                'not_found' => __('No items found'),
                'not_found_in_trash' => __('No items found in Trash')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-screenoptions',
            'supports' => array('title', 'thumbnail'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'tech-stack'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_tech_stack_post_type');
//============================ custom post type for Services =========================
function create_services_post_type() {
    $labels = array(
        'name'                  => __('Services'),
        'singular_name'         => __('Service'),
        'add_new'               => __('Add Service'),
        'add_new_item'          => __('Add New Service'),
        'edit_item'             => __('Edit Service'),
        'new_item'              => __('New Service'),
        'view_item'             => __('View Service'),
        'search_items'          => __('Search Services'),
        'not_found'             => __('No services found'),
        'not_found_in_trash'    => __('No services found in Trash'),
        'all_items'             => __('All Services'),
        'menu_name'             => __('Services'),
        'name_admin_bar'        => __('Service')
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'menu_icon'             => 'dashicons-screenoptions',
        'supports'              => array('title', 'editor', 'thumbnail'),
        'has_archive'           => false,
        'rewrite'               => array('slug' => 'services'),
        'show_in_rest'          => true,
        'rest_base'             => 'services',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    );

    register_post_type('services', $args);
}
add_action('init', 'create_services_post_type');
//============================ custom post type for Testimonials =========================
function create_custom_testimonial_post_type(){
    $labels = [
        'name' =>__('Testimonials'),
        'singular_name' =>__('Testimonial'),
        'add_new' =>__('Add New Testimonial'),
        'edit' =>__('Edit Testimal'),
        'new_item' =>__('Add New Testimonial'),
        'view_item' =>__('View Testimonial'),
        'search_items' =>__('Search Testimonials'),
        'not_found'  =>__('No Server Found Testimonials'),
        'not_found_in_trash' =>__('No, Testimonials' ),
        'all_items' =>__('All Testimonials'),
        'menu_name' =>__('Testimonials'),
        'name' =>__('Testimonials'),
        'name_admin_bar' => __('Testimonials')

    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => false,
        'rewrite' => ['slug' => 'testimonials'],
        'show_in_rest' => true,
        'rest_base' => 'testimonials',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ];
    register_post_type('testimonials', $args);
}
add_action('init', 'create_custom_testimonial_post_type');
//============================ custom post type for Blogs =========================
function custom_post_blog(){
    $label = [
        'name' => __('Blogs'),
        'singular_name' => __('Blog'),
        'add_new' => __('Add New Blog'),
        'edit' => __('Edit Blog'),
        'new_item' => __('== Add New Blog'),
        'view_item' => __('View Blog'),
    ];
    $args = [
        'labels' => $label,
        'public' => true,
        'menu_icon' => 'dashboards-format-aside',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => false,
        'rewrite' => ['slug' => 'blogs'],
        'show_in_rest' => true,
        'rest_base' => 'blogs'
    ];
    register_post_type('blogs', $args);
}
add_action('init', 'custom_post_blog');
//============================ custom post type for Portfolio =========================
function create_portfolio_post_type() {
    $labels = array(
        'name'               => __('Portfolios'),
        'singular_name'      => __('Portfolio'),
        'add_new'            => __('Add Portfolio'),
        'add_new_item'       => __('Add New Portfolio'),
        'edit_item'          => __('Edit Portfolio'),
        'new_item'           => __('New Portfolio'),
        'view_item'          => __('View Portfolio'),
        'search_items'       => __('Search Portfolios'),
        'not_found'          => __('No portfolios found'),
        'not_found_in_trash' => __('No portfolios found in Trash'),
        'all_items'          => __('All Portfolios'),
        'menu_name'          => __('Portfolio'),
        'name_admin_bar'     => __('Portfolio')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'has_archive'        => false,
        'rewrite'            => array('slug' => 'portfolio'),
        'show_in_rest'       => true,
        'rest_base'          => 'portfolio',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'taxonomies'         => array('category') 
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_post_type');


//============================ ajax admin url =========================
function custom_ajax_url() {
    ?>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var siteurl = "<?php echo site_url(); ?>";
    </script>
    <?php
}
add_action('wp_head', 'custom_ajax_url');

//============================ ajax for contact form =========================
    function contact_form() {
        // Sanitize and get form values
        $name    = sanitize_text_field($_POST['name']);
        $email   = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
    
        $to = get_option('admin_email'); // Receiver (usually site admin)
        $subject = 'Contact Form Submission: ' . $subject;
        $headers  = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
        $headers .= 'Reply-To: ' . $email . "\r\n";
        $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    
        // Email body
        $body  = '<h2>Contact Form Submission</h2>';
        $body .= '<p><strong>Name:</strong> ' . $name . '</p>';
        $body .= '<p><strong>Email:</strong> ' . $email . '</p>';
        $body .= '<p><strong>Subject:</strong> ' . $subject . '</p>';
        $body .= '<p><strong>Message:</strong></p>';
        $body .= '<p>' . nl2br($message) . '</p>';
        $body .= '<hr>';
        $body .= '<p>IP Address: ' . $_SERVER['REMOTE_ADDR'] . '</p>';
        $body .= '<p>User Agent: ' . $_SERVER['HTTP_USER_AGENT'] . '</p>';
        $body .= '<p>This is a system-generated email. Please do not reply.</p>';
        $sent = wp_mail($to, $subject, $body, $headers);
    
        if ($sent) {
            echo json_encode(['success' => true, 'message' => 'Email sent successfully!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to send email.']);
        }
    
        wp_die();
    }
    
    add_action('wp_ajax_contact_form', 'contact_form');
    add_action('wp_ajax_nopriv_contact_form', 'contact_form');
    


