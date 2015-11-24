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

add_action('widgets_init', 'tna_dev_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tna_dev_scripts()
{
    wp_enqueue_style('tna-dev-style', get_stylesheet_uri());

    wp_enqueue_script('tna-dev-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('tna-dev-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'tna_dev_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function dimox_breadcrumbs()
{

    /* === OPTIONS === */
    $text['home'] = ''; // text for the 'Home' link
    $text['category'] = 'Archive by Category "%s"'; // text for a category page
    $text['search'] = 'Search Results for "%s" Query'; // text for a search results page
    $text['tag'] = 'Posts Tagged "%s"'; // text for a tag page
    $text['author'] = 'Articles Posted by %s'; // text for an author page
    $text['404'] = 'Error 404'; // text for the 404 page

    $show_current = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
    $show_on_home = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $show_home_link = 0; // 1 - show the 'Home' link, 0 - don't show
    $show_title = 1; // 1 - show the title for the links, 0 - don't show
    $delimiter = ''; // delimiter between crumbs
    $before = '<li>'; // tag before the current crumb
    $after = '</li>'; // tag after the current crumb
    /* === END OF OPTIONS === */

    global $post;
    $home_link = home_url('/');
    $link_before = '';
    $link_after = '';
    $link_attr = ' rel="v:url" property="v:title"';
    $link = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $parent_id = $parent_id_2 = $post->post_parent;
    $frontpage_id = get_option('page_on_front');

    if (is_home() || is_front_page()) {

        if ($show_on_home == 1) echo '<a href="' . $home_link . '">' . $text['home'] . '</a>';

    } else {

        echo '';
        if ($show_home_link == 1) {
            echo '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a>';
            if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;
        }

        if (is_category()) {
            $this_cat = get_category(get_query_var('cat'), false);
            if ($this_cat->parent != 0) {
                $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
                if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
            }
            if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

        } elseif (is_search()) {
            echo $before . sprintf($text['search'], get_search_query()) . $after;

        } elseif (is_day()) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F')) . $delimiter;
            echo $before . get_the_time('d') . $after;

        } elseif (is_month()) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo $before . get_the_time('F') . $after;

        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;

        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
                if ($show_current == 1) echo $before . get_the_title() . $after;
            }

        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;

        } elseif (is_attachment()) {
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            $cats = get_category_parents($cat, TRUE, $delimiter);
            $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
            $cats = str_replace('</a>', '</a>' . $link_after, $cats);
            if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
            echo $cats;
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

        } elseif (is_page() && !$parent_id) {
            if ($show_current == 1) echo $before . get_the_title() . $after;

        } elseif (is_page() && $parent_id) {
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $delimiter;
                }
            }
            if ($show_current == 1) {
                if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;
                echo $before . get_the_title() . $after;
            }

        } elseif (is_tag()) {
            echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . sprintf($text['author'], $userdata->display_name) . $after;

        } elseif (is_404()) {
            echo $before . $text['404'] . $after;
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ' (';
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ')';
        }

        echo '';

    }
} // end dimox_breadcrumbs()

// Move Yoast to bottom
function yoasttobottom()
{
    return 'low';
}

add_filter('wpseo_metabox_prio', 'yoasttobottom');


function feed_getFeaturedImage()
{
    global $post;
    if (function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID)) {
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
    }
    return ($thumbnail_url);
}

function first_sentence($content)
{

    $content = strip_tags($content);
    $pos = strpos($content, ".");
    return substr($content, 0, $pos + 1);

}

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

add_action('init', 'education_resource_init');

add_action('init', 'my_add_excerpts_to_pages');
function my_add_excerpts_to_pages()
{
    add_post_type_support('page', 'excerpt');
}

add_action('init', 'create_post_type');
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

add_action('init', 'create_post_type2');
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


function wptp_add_categories_to_attachments()
{
    register_taxonomy_for_object_type('category', 'attachment');
}

add_action('init', 'wptp_add_categories_to_attachments');

function wptp_add_tags_to_attachments()
{
    register_taxonomy_for_object_type('post_tag', 'attachment');
}

add_action('init', 'wptp_add_tags_to_attachments');

/* Change howdy text in admin bar */

add_action('admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11);

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


/* Removes image dimensions form inserted feature and inline images */

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html)
{
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}

add_action('pre_get_posts', 't5_pages_in_feed');


function t5_pages_in_feed(&$query)
{
    if (isset ($_GET['post_type']) && $_GET['post_type'] === 'page' && is_feed()) {
        $query->set('post_type', 'page');
    }
}

function remove_header_info()
{
    remove_action('wp_head', 'description');
}

add_action('init', 'remove_header_info');

/* Includes the custom editor buttons plugin */
require('tna-editor-buttons/tna-buttons.php');


//Hide editor in centenary-map-entry template
add_action('admin_init', 'hide_editor');
function hide_editor()
{
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
    if (!isset($post_id)) return;
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    if ($template_file == 'centenary-map-entry.php') { // edit the template name
        remove_post_type_support('page', 'editor');
    }
}

function wpa_cpt_tags($query)
{
    if ($query->is_tag() && $query->is_main_query()) {
        $query->set('post_type', array('post', 'im_guidance_link'));
    }
}

add_action('pre_get_posts', 'wpa_cpt_tags');

/*  Functions below remove unused site and comment feeds to prevent 404s - DW 27/06/14  */

remove_action('wp_head', 'feed_links_extra', 3); //Extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // General feeds: Post and Comment Feed
/* START OF code which manages forms on the Research guides */

add_shortcode('guided-search', 'render_form');

function render_form($atts)
{
    $file_name = $atts['form'];
    $local_path = 'inc/guided-search-forms/';
    $file_content = file_get_contents($local_path . $atts['form'] . '.php', FILE_USE_INCLUDE_PATH);
    if (strlen($file_content) > 0) {
        return $file_content;
    } else {
        return 'No such file found: ' . $local_path . $file_name;
    }
}

/* END OF code which manages forms on the Research guides */

/* START OF output_meta_description */

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

/* END OF output_meta_description */

/* START OF output_meta_keywords */

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
    if ($posttags) {
        foreach ($posttags as $tag) {
            $keywords = $keywords . $tag->name . ',';
        }

        $keywords = trim($keywords, ',');
        printf('<meta content="%s" name="keywords">', $keywords);
    }

}

/* END OF output_meta_keywords */

/* START OF code which manages the indicators on the Research guides */

add_shortcode('indicator', 'get_indicator');

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

/* END OF code which manages the indidcators on the Research guides */

/* START OF code which manages the glossary on the Research guides */

add_shortcode('glossary', 'get_glossary');

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

/* END OF code which manages the glossary on the Research guides */


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

add_action('init', 'guidance_init');

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

/* START OF code which outputs the BETA banner */

function banner_messages()
{
    switch (true) {

        case in_category('beta') :
            $message = 'BETA: This page is in development';
            printf('<div id="banner-message"><span>%s</span></div>', $message);
            break;
    }
}

/* END OF code which outputs the BETA banner */


/* START OF code which redirects pages found to be 404 */

// Redirection function - called in header.php
function redirect_if_404()
{

    if (is_404()) {

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

add_filter('redirect_canonical', 'redirect_if_404');

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
function show_feature_box($atts) {

    extract( shortcode_atts(
            array(
                'paratext' => '',
                'buttonlink' => '',
                'buttontext' => '',
            ), $atts )
    );

    return "</div><!-- end col two-thirds --><div class=\"col starts-at-full ends-at-one-third clr feature-box\"><div class=\"breather\"><p class=\"margin-none pad-bottom-medium center-content\">".$paratext."</p><p class=\"center-content margin-none\"><a class=\"button\" href=\"".$buttonlink ."\">".$buttontext."</a></p></div><!-- end breather --></div><!-- end col one-third -->";
}


add_shortcode('ancestry', 'show_ancestry');
add_shortcode('findmypast', 'show_findmypast');
add_shortcode('bmd', 'show_bmd');
add_shortcode('featurebox', 'show_feature_box');




include 'inc/custom-fields.php';
include 'inc/post-types.php';
include 'inc/shortcodes.php';



/* adds a class style to the first paragraph*/
function first_paragraph($content){
    global $post;
    $page_title = get_page_by_title("Current displays");
    $page_title2 = get_page_by_title("Events");
    $parent = $page_title->ID;
    $parent2 = $page_title2->ID;
    if ( $post->post_parent==$parent || $post->post_parent==$parent2 ) {
        return preg_replace('/<p([^>]+)?>/', '<p$1 class="margin-bottom-medium">', $content, 1);
    } else {
        return preg_replace('/<p([^>]+)?>/', '<p$1 >', $content, 1);
    }
}
add_filter('the_content', 'first_paragraph');
/* adds a class style to the first paragraph*/


?>