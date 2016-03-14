<?php
/**
 * tna-dev functions and definitions
 *
 * @package tna-dev
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 640; /* pixels */
}

if (file_exists(get_template_directory() . '/inc/environment-constants.php')) {
    include('inc/environment-constants.php');
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

if (!function_exists('tna_dev_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tna_dev_setup()
    {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on tna-dev, use a find and replace
         * to change 'tna-dev' to the name of your theme in all the template files
         */
        load_theme_textdomain('tna-dev', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'tna-dev'),
        ));

        // Enable support for Post Formats.
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('tna_dev_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif; // tna_dev_setup
add_action('after_setup_theme', 'tna_dev_setup');

/**
 * Register widgetized area and update sidebar with default widgets.
 */

if (!function_exists('tna_dev_widgets_init')) :
    function tna_dev_widgets_init()
    {
        register_sidebar(array(
            'name' => __('Sidebar', 'tna-dev'),
            'id' => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));
    }
endif;
add_action('widgets_init', 'tna_dev_widgets_init');

/**
 * Enqueue scripts and styles.
 */
if (!function_exists('tna_dev_scripts')) :
    function tna_dev_scripts()
    {
        wp_enqueue_style('tna-dev-style', get_stylesheet_uri());

        wp_enqueue_script('tna-dev-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

        wp_enqueue_script('tna-dev-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
endif;
add_action('wp_enqueue_scripts', 'tna_dev_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// Move Yoast to bottom
function yoasttobottom()
{
    return 'low';
}

add_filter('wpseo_metabox_prio', 'yoasttobottom');


if (!function_exists('feed_getFeaturedImage')) :
    function feed_getFeaturedImage()
    {
        global $post;
        if (function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID)) {
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        }
        return ($thumbnail_url);
    }
endif;


if (!function_exists('first_sentence')) :
    function first_sentence($content)
    {
        $content = strip_tags($content);
        $pos = strpos($content, ".");
        return substr($content, 0, $pos + 1);
    }
endif;

if (!function_exists('education_resource_init')) :
    function education_resource_init()
    {
        $labels = array(
            'add_new_item' => __(''),
            'choose_from_most_used' => __('')
        );
        // create a new taxonomy
        register_taxonomy(
            'education resource',
            'page',
            array(
                'label' => __('Education filter tags'),
                'show_ui' => true,
                'show_admin_column' => true,
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'has_archive' => true,
                'rewrite' => false,
                'update_count_callback' => '_update_post_term_count',
                'capabilities' => array(
                    'assign_terms' => 'edit_posts',
                    'edit_terms' => 'publish_guides'
                )
            )
        );
    }
endif;
add_action('init', 'education_resource_init');


if (!function_exists('my_add_excerpts_to_pages')) :
    function my_add_excerpts_to_pages()
    {
        add_post_type_support('page', 'excerpt');
    }
endif;
add_action('init', 'my_add_excerpts_to_pages');

if (!function_exists('create_post_type')) :
    function create_post_type()
    {
        register_post_type('im_guidance_link',

            array(
                'labels' => array(
                    'name' => __('IM guidance links'),
                    'singular_name' => __('IM guidance link')
                ),
                'public' => true,
                'has_archive' => true,
                'taxonomies' => array('category', 'post_tag')
            )
        );
    }
endif;
add_action('init', 'create_post_type');

if (!function_exists('create_post_type2')) :
    function create_post_type2()
    {
        register_post_type('lesson_sources',

            array(
                'labels' => array(
                    'name' => __('Lesson sources'),
                    'singular_name' => __('Lesson source')
                ),
                'public' => true,
                'has_archive' => true,
                'taxonomies' => array('category', 'post_tag')
            )
        );
    }
endif;
add_action('init', 'create_post_type2');


if (!function_exists('tna_add_categories_to_pages')) :
    function tna_add_categories_to_pages()
    {
        register_taxonomy_for_object_type('post_tag', 'page');
        register_taxonomy_for_object_type('category', 'page');
    }
endif;
add_action('init', 'tna_add_categories_to_pages');


if (!function_exists('wptp_add_categories_to_attachments')) :
    function wptp_add_categories_to_attachments()
    {
        register_taxonomy_for_object_type('category', 'attachment');
    }
endif;
add_action('init', 'wptp_add_categories_to_attachments');


if (!function_exists('wptp_add_tags_to_attachments')) :
    function wptp_add_tags_to_attachments()
    {
        register_taxonomy_for_object_type('post_tag', 'attachment');
    }
endif;
add_action('init', 'wptp_add_tags_to_attachments');

/* Change howdy text in admin bar */

if (!function_exists('wp_admin_bar_my_custom_account_menu')) :
    function wp_admin_bar_my_custom_account_menu($wp_admin_bar)
    {
        $user_id = get_current_user_id();
        $current_user = wp_get_current_user();
        $profile_url = get_edit_profile_url($user_id);

        if (0 != $user_id) {
            /* Add the "My Account" menu */
            $avatar = get_avatar($user_id, 28);
            $howdy = sprintf(__('%1$s'), $current_user->display_name);
            $class = empty($avatar) ? '' : 'with-avatar';

            $wp_admin_bar->add_menu(array(
                'id' => 'my-account',
                'parent' => 'top-secondary',
                'title' => $howdy . $avatar,
                'href' => $profile_url,
                'meta' => array(
                    'class' => $class,
                ),
            ));

        }
    }
endif;
add_action('admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11);


if (!function_exists('siblings')) :
    function siblings($link)
    {
        global $post;
        $siblings = get_pages('child_of=' . $post->post_parent . '&parent=' . $post->post_parent);
        foreach ($siblings as $key => $sibling) {
            if ($post->ID == $sibling->ID) {
                $ID = $key;
            }
        }
        $closest = array('before' => get_permalink($siblings[$ID - 1]->ID), 'after' => get_permalink($siblings[$ID + 1]->ID));

        if ($link == 'before' || $link == 'after') {
            echo $closest[$link];
        }
    }
endif;

/* Removes image dimensions form inserted feature and inline images */

if (!function_exists('remove_width_attribute')) :
    function remove_width_attribute($html)
    {
        $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
        return $html;
    }
endif;
add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);


if (!function_exists('t5_pages_in_feed')) :
    function t5_pages_in_feed(&$query)
    {
        if (isset ($_GET['post_type']) && $_GET['post_type'] === 'page' && is_feed()) {
            $query->set('post_type', 'page');
        }
    }
endif;
add_action('pre_get_posts', 't5_pages_in_feed');


if (!function_exists('remove_header_info')) :
    function remove_header_info()
    {
        remove_action('wp_head', 'description');
    }
endif;
add_action('init', 'remove_header_info');

/* Includes the custom editor buttons plugin */
require get_template_directory() . '/tna-editor-buttons/tna-buttons.php';


//Hide editor in centenary-map-entry template
if (!function_exists('hide_editor')) :
    function hide_editor()
    {
        $post_id = (isset($_GET['post'])) ? $_GET['post'] : (isset($_POST['post_ID'])) ? $_POST['post_ID'] : null;
        if (!isset($post_id)) return;
        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        if ($template_file == 'centenary-map-entry.php') { // edit the template name
            remove_post_type_support('page', 'editor');
        }
    }
endif;
add_action('admin_init', 'hide_editor');


if (!function_exists('wpa_cpt_tags')) :
    function wpa_cpt_tags($query)
    {
        if ($query->is_tag() && $query->is_main_query()) {
            $query->set('post_type', array('post', 'im_guidance_link'));
        }
    }
endif;
add_action('pre_get_posts', 'wpa_cpt_tags');

/*  Functions below remove unused site and comment feeds to prevent 404s - DW 27/06/14  */

remove_action('wp_head', 'feed_links_extra', 3); //Extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // General feeds: Post and Comment Feed
/* START OF code which manages forms on the Research guides */


if (!function_exists('render_form')) :
    function render_form($atts)
    {
        $file_name = $atts['form'];
        $local_path = get_template_directory() . '/inc/guided-search-forms/';
        $file_content = (file_exists($local_path . $atts['form'] . '.php')) ? file_get_contents($local_path . $atts['form'] . '.php') : '';
        if (strlen($file_content) > 0) {
            return $file_content;
        } else {
            return 'No such file found: ' . $local_path . $file_name;
        }
    }
endif;
add_shortcode('guided-search', 'render_form');

/* END OF code which manages forms on the Research guides */

/* START OF output_meta_description */

if (!function_exists('output_meta_description')) :
    function output_meta_description()
    {
        /**
         * Summary.
         *
         * Prints a meta description tag is one is not available to Yoast
         *
         * @global object $post The WordPress $post object.
         * @global array $post_words_array representing the first 40 words of content.
         * @global array $post_words_array_without_last all but the last index of $post_words_array
         */
        global $post;

        $yoast_meta_desc = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);

        if ($yoast_meta_desc == "") { // If there is no meta description avaiable to Yoast
            $post_words_array = explode(' ', $post->post_content, 40);
            $post_words_array_without_last = array_slice($post_words_array, 0, -1); // Remove last item (which would be all remaining words as a single index)
            $post_words_shortened = implode(' ', $post_words_array_without_last) . '...'; // Recreate string from shortened array
            $post_words_shortened = strip_tags($post_words_shortened);
            printf('<meta content="%s" name="description">', $post_words_shortened); // Output the meta tag
        }
    }
endif;
/* END OF output_meta_description */

/* START OF output_meta_keywords */

if (!function_exists('output_meta_keywords')) :
    function output_meta_keywords()
    {
        /**
         * Summary.
         *
         * Prints a meta keywords tag
         *
         * @global array $posttags array of tag objects
         */

        $posttags = get_the_tags();
        $keywords = '';
        if ($posttags) {
            foreach ($posttags as $tag) {
                $keywords = $keywords . $tag->name . ',';
            }

            $keywords = trim($keywords, ',');
            printf('<meta content="%s" name="keywords">', $keywords);
        }

    }
endif;
/* END OF output_meta_keywords */

/* START OF code which manages the indicators on the Research guides */


if (!function_exists('get_indicator')) :
    function get_indicator($atts)
    {
        $file_name = $atts['availability'];
        $local_path = 'inc/research-guide-indicator/';
        $file_content = file_get_contents($local_path . $atts['availability'] . '.php', FILE_USE_INCLUDE_PATH);
        if (strlen($file_content) > 0) {
            return $file_content;
        } else {
            return 'No such file found: ' . $local_path . $file_name;
        }
    }
endif;
add_shortcode('indicator', 'get_indicator');

/* END OF code which manages the indidcators on the Research guides */

/* START OF code which manages the glossary on the Research guides */


if (!function_exists('get_glossary')) :
    function get_glossary($atts, $content)
    {
        if (isset($atts['term']) and isset($content)) {

            // The inclusion of research-guide-glossary-data.php provides access to the array $glossaryDefinitions
            $termsLoaded = include('inc/research-guides/research-guide-glossary-data.php');

            if ($termsLoaded != false) {

                $term = $atts['term'];

                if (array_key_exists($term, $glossaryDefinitions)) {

                    $definition = $glossaryDefinitions[$term];

                    $spanFormat = '<span class="research-guide-glossary-term" title="%s">%s</span>';

                    $outputHtml = sprintf($spanFormat, $definition, $content);

                    return $outputHtml;
                } else {
                    return $content;
                }
            }
        }

        return false;

    }
endif;
add_shortcode('glossary', 'get_glossary');

/* END OF code which manages the glossary on the Research guides */


if (!function_exists('guidance_init')) :
    function guidance_init()
    {

        $labels = array(
            'add_new_item' => __(''),
            'choose_from_most_used' => __('')
        );
        // create a new taxonomy
        register_taxonomy(
            'guidance',
            'page',
            array(
                'label' => __('Guidance Categories'),
                'show_ui' => true,
                'show_admin_column' => true,
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'has_archive' => true,
                'rewrite' => false,
                'update_count_callback' => '_update_post_term_count',
                'capabilities' => array(
                    'assign_terms' => 'edit_posts',
                    'edit_terms' => 'publish_guides'
                )
            )
        );
    }
endif;
add_action('init', 'guidance_init');


if (!function_exists('m_explode')) :
    function m_explode(array $array, $key = '')
    {
        if (!is_array($array) or $key == '')
            return;
        $output = array();

        foreach ($array as $v) {
            if (!is_object($v)) {
                return;
            }
            $output[] = $v->$key;

        }

        return $output;

    }
endif;
/* START OF code which outputs the BETA banner */


if (!function_exists('banner_messages')) :
    function banner_messages()
    {
        switch (true) {

            case in_category('beta') :
                $message = 'BETA: This page is in development';
                printf('<div id="banner-message"><span>%s</span></div>', $message);
                break;
            case in_category('survey-2') :
                $message = 'Tell us what you think of our website - <a href="http://www.smartsurvey.co.uk/s/WebSurvey_Spring16/" target="_blank">take our online survey now</a>.';
                printf('<div id="banner-message"><span>%s</span></div>', $message);
                break;
        }
    }
endif;
/* END OF code which outputs the BETA banner */

/* URL rewriting functions */
if (!function_exists('fix_internal_url')) :
function fix_internal_url($url) {
    $arrUrl = parse_url($url);
    $returnUrl  = ( !empty( $GLOBALS['tnatheme']['subsitepath'] ) ) ? $GLOBALS['tnatheme']['subsitepath'] : '';
    $returnUrl .= $arrUrl[ 'path' ];
    $returnUrl .= isset( $arrUrl[ 'query' ] ) ? '?' . $arrUrl[ 'query' ] : '';
    $returnUrl .= isset( $arrUrl[ 'fragment' ] ) ? '#' . $arrUrl[ 'fragment' ] : '';
    return  $returnUrl;
}
endif;
if (!function_exists('make_urls_root_relative')) :
function make_urls_root_relative($url) {
    $pattern = "/http:\/\/(.*?)\.gov.uk/";
    $replace = ( !empty( $GLOBALS['tnatheme']['subsitepath'] ) ) ? $GLOBALS['tnatheme']['subsitepath'] : '';
    $url = preg_replace($pattern, $replace, $url);
    return $url;
}
endif;


/* START OF code which redirects pages found to be 404 */

// Redirection function - called in header.php


if (!function_exists('redirect_if_404')) :
    function redirect_if_404()
    {

        if (is_404()) {


            // temporary redirect of news story URL
            if (0 === strpos($_SERVER["REQUEST_URI"], '/about/news/exhibition-to-reveal-shakespeares-life-in-london')) {
                wp_redirect($_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["HTTP_HOST"] . '/about/news/by-me-william-shakespeare-exhibition/', 301);
                exit();
            }

            // Format string with placeholders for components
            $requested_page = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

            // Sanitizing the URL before use
            $requested_page_safe = filter_var($requested_page, FILTER_SANITIZE_URL);

            // Staging URLs
            $staging_subdomains = array("devlb", "testlb", "livelb");

            $requested_page_safe = str_replace($staging_subdomains, "www", $requested_page_safe);

            // Format string for redirection app URL with single placeholder
            $redirect_app_url_format = "http://www.nationalarchives.gov.uk/PageNotFound/PageNotFound.aspx?url=%s";

            $redirection_url = sprintf($redirect_app_url_format, $requested_page_safe);

            wp_redirect($redirection_url, 301);

            exit;
        }
    }
endif;
add_filter('template_redirect', 'redirect_if_404');

/* END OF code which redirects pages found to be 404 */


/**
 *
 * Shortcode for Findmypast.co.uk and ancestry.co.uk logo links
 *
 */


/**
 * @param $atts
 * @return string
 */
function show_findmypast($atts)
{

    extract(shortcode_atts(
            array(
                'link' => '',
            ), $atts)
    );

    return '<a href="' . $link . '" target="_blank" title="Search and download these records on findmypast.co.uk"><img src="/wp-content/themes/tna/images/records/tna-find-my-past.png" alt="findmypast.co.uk logo" class="provider-btn"></a>';
}

/**
 * @param $atts
 * @return string
 */
function show_ancestry($atts)
{

    extract(shortcode_atts(
            array(
                'link' => '',
            ), $atts)
    );

    return '<a href="' . $link . '" target="_blank" title="Search and download these records on ancestry.co.uk"><img src="/wp-content/themes/tna/images/records/tna-ancestry.png" alt="ancestry.co.uk logo" class="provider-btn"></a>';
}


/**
 * @param $atts
 * @return string
 */
function show_bmd($atts)
{

    extract(shortcode_atts(
            array(
                'link' => '',
            ), $atts)
    );

    return '<a href="' . $link . '" target="_blank" title="Search and download these records on bmdregisters.co.uk"><img src="/wp-content/themes/tna/images/records/tna-bmdregisters.png" alt="Births, marriages and deaths registers logo" class="provider-btn"></a>';
}

/**
 * @param $atts
 * @return string
 */
function show_feature_box($atts)
{

    extract(shortcode_atts(
            array(
                'paratext' => '',
                'buttonlink' => '',
                'buttontext' => '',
            ), $atts)
    );

    return "</div><!-- end col two-thirds --><div class=\"col starts-at-full ends-at-one-third clr feature-box\"><div class=\"breather\"><p class=\"margin-none pad-bottom-medium center-content\">" . $paratext . "</p><p class=\"center-content margin-none\"><a class=\"button\" href=\"" . $buttonlink . "\">" . $buttontext . "</a></p></div><!-- end breather --></div><!-- end col one-third -->";
}


add_shortcode('ancestry', 'show_ancestry');
add_shortcode('findmypast', 'show_findmypast');
add_shortcode('bmd', 'show_bmd');
add_shortcode('featurebox', 'show_feature_box');


include 'inc/custom-fields.php';
include 'inc/post-types.php';
include 'inc/shortcodes.php';
include 'inc/rss-feeds.php';


/* Disable the emoji script */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Remove shortlink URL */
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
remove_action( 'template_redirect', 'wp_shortlink_header', 11 );

/*Remove REST API */
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

/*Remove Yoast's ld+json search handling*/
add_filter( 'disable_wpseo_json_ld_search', '__return_true' );



?>