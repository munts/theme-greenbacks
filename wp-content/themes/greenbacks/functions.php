<?php
/**
 * Created by PhpStorm.
 * User: circdominic
 * Date: 12/5/16
 * Time: 10:37 AM
 */

/**
 * Including all required lib files in the theme
 */
require_once(dirname(__FILE__) . '/lib/greenbacks-site-options.php');
require_once(dirname(__FILE__) . '/lib/greenbacks-frontpage-options.php');
require_once(dirname(__FILE__) . '/lib/ourWork-functions.php');
require_once( dirname(__FILE__) . '/lib/aq_resizer.php');
require_once( dirname(__FILE__) . '/lib/widgets.php');
//require_once( dirname(__FILE__) . '/lib/wp_bootstrap_navwalker.php');

    //<script src="assets/js/jquery.min.js"></script>
    //<script src="assets/js/joinable/nivo-lightbox.min.js"></script>

/**
 * Including all required style files in the theme
 */
function berich_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1', 'all' );
    wp_register_style('font-awesome.min', get_template_directory_uri() .'/assets/css/font-awesome.css', array(), null, 'all' );
    wp_register_style('simple-line-icons', get_template_directory_uri() .'/assets/css/simple-line-icons.css', array(), null, 'all' );
    wp_register_style('elegant-icons', get_template_directory_uri() .'/assets/css/elegant-icons.css', array(), null, 'all' );
    wp_register_style('animate',  get_template_directory_uri() .'/assets/css/animate.min.css', array(), null, 'all' );
    wp_register_style('animsition',  get_template_directory_uri() .'/assets/css/animsition.min.css', array(), null, 'all' );
    wp_register_style('nivo', get_template_directory_uri() .'/assets/css/nivo-lightbox.css', array(), null, 'all' );
    wp_register_style('main', get_template_directory_uri() .'/assets/css/main.css', array(), null, 'all' );
    wp_register_style('styles', get_stylesheet_uri(), array(), '2.7.0','all' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'nivo' );
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'font-awesome.min' );
    wp_enqueue_style( 'simple-line-icons' );
    wp_enqueue_style( 'elegant-icons' );
    wp_enqueue_style( 'animsition' );
    wp_enqueue_style( 'main' );
    wp_enqueue_style( 'styles' );
    /*** Google fonts-opensans */
    wp_enqueue_style('one-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300,400italic');
    wp_enqueue_style('one-karla', '//fonts.googleapis.com/css?family=Karla:400,400i,700,700i');
}

add_action('wp_enqueue_scripts', 'berich_styles');
/**
 * Include all required javascript files in the theme
 */
function berich_scripts() {
    //wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('tether', get_template_directory_uri() . '/assets/js/joinable/tether.min.js', array(), '1.0.0', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('animsition', get_template_directory_uri() . '/assets/js/joinable/animsition.min.js', array(), '1.0.0', true );
    wp_enqueue_script('auto-grow', get_template_directory_uri() . '/assets/js/joinable/autogrow.min.js', array(), '1.0.0', true );
    wp_enqueue_script('hover-intent', get_template_directory_uri() . '/assets/js/joinable/hoverIntent.js', array(), '1.0.0', true );
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/joinable/isotope.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script('nice-scroll', get_template_directory_uri() . '/assets/js/joinable/jquery.nicescroll.min.js', array(), '1.0.0', true );
    //wp_enqueue_script('superfish', get_template_directory_uri() . '/assets/js/joinable/superfish.js', array('jquery'));
    //wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/joinable/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/joinable/parallax.js', array(), '1.0.0', true );
    wp_enqueue_script('nivo', get_template_directory_uri() . '/assets/js/joinable/nivo-lightbox.min.js', array(), '1.0.0', true );
    wp_enqueue_script('settings', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
    /*** Easing javascript file */
    wp_enqueue_script('onepage-easing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'berich_scripts');

/**
 * Berich Theme setup
 */
function berich_setup() {
    add_theme_support('post-thumbnails'); // adds thumbnail support for the pages, posts and Projects CPT
    add_image_size('work_cat_thumb', 800, 500, true);
    add_image_size('post_thumbnail', 600, 250, true);
    add_image_size('post_thumbnail_1', 70, 70, true);


// Register menus

    register_nav_menus(array(
            'frontpage-menu' => __('Front Page Menu', 'berich-masonry'),
            'subpage-menu' => __('Sub Page Menu', 'berich-masonry')
        )
    );
    berich_default_menu();
}

add_action('after_setup_theme', 'berich_setup');

/**
 * function to setup default theme menu
 */
function berich_default_menu() {

    $menuname = 'One Front Page Menu';
    $menulocation = 'frontpage-menu';
}

// Add CLASS attributes to the first <ul> occurence in wp_page_menu
function one_add_menuclass($ulclass) {
    return preg_replace('/<ul>/', '<ul class="sf-menu">', $ulclass, 1);
}

add_filter('wp_page_menu', 'one_add_menuclass');

function berich_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'frontpage-menu', 'menu_class' => 'nav navbar-nav navbar-left sf-menu sf-js-enabled sf-shadow', 'menu_id' => 'one_menu', 'container' => '', 'container_class' => '', 'fallback_cb' => 'one_front_nav_fallback'));
    else
        berich_nav_fallback();
}

function berich_nav_fallback() {
    ?><ul class="nav navbar-nav navbar-right sf-menu" id="one_menu">
    <li class="page-scroll">
        <a href="#passion"><?php _e('Home', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#art"><?php _e('Art', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#science"><?php _e('Science', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#creative"><?php _e('Creative', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#team"><?php _e('Team', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#solutions"><?php _e('Solutions', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#contact"><?php _e('Contact', 'one-confluence'); ?></a>
    </li>
    </ul>
    <?php
}

//Creating Custom Post types for Team
function setup_team_cpt(){
    $labels = array(
        'name' => _x('team', 'post type general name'),
        'singular_name' => _x('team', 'post type singular name'),
        'add_new' => _x('Add New', 'Team'),
        'add_new_item' => __('Add New Team'),
        'edit_item' => __('Edit Team'),
        'new_item' => __('New Team'),
        'all_items' => __('All Team'),
        'view_item' => __('View Team'),
        'search_items' => __('Search Team'),
        'not_found' => __('No Team Found'),
        'not_found_in_trash' => __('No Team found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Team'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'The BMI Team',
        'rewrite' => array('slug' => 'team'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
        'has_archive' => true,
        'taxonomies' => array(''),
        'menu_icon' => 'dashicons-welcome-write-blog',
    );
    register_post_type('team', $args);
}
add_action('init', 'setup_team_cpt');

//Creating Custom Post types for Projects
function setup_project_cpt(){
    $labels = array(
        'name' => _x('project', 'post type general name'),
        'singular_name' => _x('project', 'post type singular name'),
        'add_new' => _x('Add New', 'Project'),
        'add_new_item' => __('Add New Project'),
        'edit_item' => __('Edit Project'),
        'new_item' => __('New Project'),
        'all_items' => __('All Project'),
        'view_item' => __('View Project'),
        'search_items' => __('Search Project'),
        'not_found' => __('No Project Found'),
        'not_found_in_trash' => __('No Project found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Projects'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Projects',
        'rewrite' => array('slug' => 'project'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes'),
        'has_archive' => true,
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-welcome-write-blog',

    );
    register_post_type('project', $args);
}
add_action('init', 'setup_project_cpt');

//Creating Custom Post types for work
function setup_work_cpt(){
    $labels = array(
        'name' => _x('work', 'post type general name'),
        'singular_name' => _x('work', 'post type singular name'),
        'add_new' => _x('Add New', 'work'),
        'add_new_item' => __('Add New work'),
        'edit_item' => __('Edit work'),
        'new_item' => __('New work'),
        'all_items' => __('All work'),
        'view_item' => __('View work'),
        'search_items' => __('Search work'),
        'not_found' => __('No work Found'),
        'not_found_in_trash' => __('No work found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'work'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'The BMD work types',
        'rewrite' => array('slug' => 'work'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes'),
        'has_archive' => true,
        'taxonomies' => array(''),
        'menu_icon' => 'dashicons-welcome-write-blog',
    );
    register_post_type('work', $args);
}
add_action('init', 'setup_work_cpt');


//Trm excerpt
function berich_trim_excerpt($length) {
    global $post;
    $explicit_excerpt = $post->post_excerpt;
    if ('' == $explicit_excerpt) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
    } else {
        $text = apply_filters('the_content', $explicit_excerpt);
    }
    $text = strip_shortcodes($text); // optional
    $text = strip_tags($text);
    $excerpt_length = $length;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
        array_pop($words);
        array_push($words, '...');
        $text = implode(' ', $words);
        $text = apply_filters('the_excerpt', $text);
    }
    return $text;
}

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

function disable_wp_emojicons() {

    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

/**
 * Media - set default image link location to 'None'
 */

update_option('image_default_link_type','none');

/**
 * Always Show Kitchen Sink in WYSIWYG Editor
 */

function unhide_kitchensink( $args ) {
    $args['wordpress_adv_hidden'] = false;
    return $args;
}

add_filter( 'tiny_mce_before_init', 'unhide_kitchensink' );


