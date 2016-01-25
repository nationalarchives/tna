<?php 

/* Variables go here */
$rescat = trim($_GET["research-category"]);
$ressubcat = $_GET["sub-category"];
$resonline = trim($_GET["res-online"]);
$resletter = trim($_GET["letter"]);
$ressearch = trim($_GET["search"]);
$reskeyword = trim($_GET["keyword"]);
$resfilter = trim($_GET["filter"]);
$resshow= trim($_GET["show"]);
$reskeyletter = trim($_GET["keyword-letter"]);
$reccategory = "recommended-".$rescat;
$strurl = $_SERVER['SERVER_NAME'];
$resarray = "";
$resparent = "26418";
$nocat = "-2,-877,-3,-1022,-1040";


if ($resonline == "1") {
    $resonline = "online";
}

if ($_GET['sub-category'] != "") {
    $resarray = implode(', ', $_GET['sub-category']);
    $resarray = "'" . str_replace(",", "','", $resarray) . "'";
}

$catname = get_term_by('slug', $rescat, 'guidance');

$cattitle = $catname->name;

if ($cattitle == "") {
    $cattitle = "How to look for records of...";
}

if ($rescat == "") {
    $rescat = "0";
}

if ($ressearch) {
    $cattitle = $ressearch;
}

if ($resletter) {
    $cattitle = strtoupper($resletter);
}

// Wordpress queries

$taxonomy = 'guidance';
$terms = get_terms($taxonomy, '');

// default query

if ($resonline) {

    $args = array(
        'post_type' => 'page',
        'orderby' => "title",
        'order' => 'ASC',
        'posts_per_page' => '500',
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'guidance',
                'field' => 'slug',
                'terms' => m_explode($terms, 'slug'),
            )
        ,
            array(
                'taxonomy' => 'guidance',
                'field' => 'slug',
                'terms' => explode(',', $resonline),
                'operator' => 'IN',
            )
        )
    );

} else {


    $args = array(
        'post_type' => 'page',
         'orderby' => array( 'title' => 'ASC' ) ,
        'posts_per_page' => '500',
        'tax_query' => array(
            array(
                'taxonomy' => 'guidance',
                'field' => 'slug',
                'terms' => m_explode($terms, 'slug'),
            )
        )
    );

}

// Query for Main category
if ($rescat) {

    if ($resonline) {
        $args = array(
            'post_type' => 'page',
            'posts_per_page' => '500',
             'orderby' => array('title' => 'ASC' ) ,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => $rescat,
                    'operator' => 'IN',
                ),
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resonline),
                    'operator' => 'IN',
                ),
            ),
        );

$recargs = array(
            'post_type' => 'page',
            'posts_per_page' => '3',
            'orderby' => array( 'title' => 'ASC' ) ,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => $reccategory,
                    'operator' => 'IN',
                ),
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resonline),
                    'operator' => 'IN',
                ),
             
            ),
        );






    } else {
        $args = array(
            'orderby' => array( 'title' => 'ASC' ) ,
            'post_type' => 'page',
            'posts_per_page' => '500',
            'tax_query' => array(
                array('taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => array($rescat),
                ),
            ),
        );

 $recargs = array(
            'orderby' => array( 'title' => 'ASC' ) ,
            'post_type' => 'page',
            'posts_per_page' => '3',
            'relation' => 'AND',
             'tax_query' => array(
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => $reccategory,
                    'operator' => 'IN',
                ),
                 ),
        );

    }
}
// Query for sub-categories
if ($resarray) {
    if ($resonline) {
        $args = array(
             'orderby' => "title", 
                     'order' => "ASC",
            'post_type' => 'page',
            'posts_per_page' => '500',
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => $rescat,
                    'operator' => 'IN',
                ),
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resarray),
                    'operator' => 'IN',
                ),
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resonline),
                    'operator' => 'IN',
                ),
            ),
        );
    } else {
        //showing all
        $args = array(
 'orderby' => "title", 
                     'order' => "ASC",
            'post_type' => 'page',
            'posts_per_page' => '500',
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => $rescat,
                    'operator' => 'IN',
                ),
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resarray),
                    'operator' => 'IN',
                ),
            ),
        );
    }
}
// Query for A to Z by title
if ($resletter) {
    $resids = $wpdb->get_col($wpdb->prepare("
  SELECT      ID
  FROM        $wpdb->posts
  WHERE       SUBSTR($wpdb->posts.post_title,1,1) = %s
  ORDER BY    $wpdb->posts.post_title", $resletter));
    if ($resonline) {
        $args = array(

            'post__in' => $resids,
            'post_type' => 'page',
                  'orderby' => "title", 
                     'order' => "ASC",
            'posts_per_page' => '500',
        
            'relation' => 'AND',
            'tax_query' => array(
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => m_explode($terms, 'slug'),
                ),
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resonline),
                    'operator' => 'IN',
                ),
            )
        );
    } else {
        $args = array(
            'post__in' => $resids,
            'post_type' => 'page',
             'orderby' => "title", 
                     'order' => "ASC",
            'posts_per_page' => '500',
            'tax_query' => array(
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => m_explode($terms, 'slug'),
                )
            )
        );

    }
}


// Query for A to Z by keyword
// Currently not working as expected -- needs reviewing!
// if ($resfilter == "keyword") {


//     $resids = $wpdb->get_col($wpdb->prepare("
//         SELECT $wpdb->postmeta.post_id
//     LEFT JOIN $wpdb->postmeta ON($wpdb->posts.ID = $wpdb->postmeta.post_id)
//     WHERE  $wpdb->posts.post_type = 'page'
//     AND $wpdb->postmeta.meta_key = 'tag' 
//     AND $wpdb->postmeta.meta_value LIKE '%$s'", $resletter)) ;


//     if ($resonline) {
//         $args = array(

//         );
//     } else {

//   $args = array(
//             'post__in' => $resids,
//             'orderby' => 'title',
//             'order' => 'ASC',
//             'post_type' => 'page',
//             'posts_per_page' => '500',
//             'post_parent'=> $post->ID,
//         );

//     }
// }





// Query for search results
if ($ressearch) {
    if ($resonline) {
        $args = array(
             'orderby' => 'title', 
                     'order' => "ASC",
            'post_type' => 'page',
            'posts_per_page' => '500',
            's' => '"'.$ressearch.'"', 
            'relation' => 'AND',
            'tax_query' => array(
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => m_explode($terms, 'slug'),
                ),
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resonline),
                    'operator' => 'IN',
                ),
            )
        );
    } else {
        $args = array(
               'orderby' => 'title',   
                     'order' => "ASC",
            'post_type' => 'page',
            'posts_per_page' => '500',
            's' => '"'.$ressearch.'"', 
            'relation' => 'AND',
            'tax_query' => array(
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => m_explode($terms, 'slug'),
                ),
            )
        );
    }
}

// Query for tags/keywords
if ($reskeyword) {
    if ($resonline) {
        $args = array(
             'orderby' => "title", 
                     'order' => "ASC",
            'post_type' => 'page',
            'posts_per_page' => '500',
            'tag' => $reskeyword,
             'post_parent'=> $resparent,
            'relation' => 'AND',
            'tax_query' => array(
                array(
                    'taxonomy' => 'guidance',
                    'field' => 'slug',
                    'terms' => explode(',', $resonline),
                    'operator' => 'IN',
                ),
            )
        );
    } else {
        $args = array(
             'orderby' => "title", 
                     'order' => "ASC",
            'post_type' => 'page',
            'posts_per_page' => '500',
            'tag' => $reskeyword,
            'post_parent'=> $resparent,

        );
    }
}




//print_r(array_values($args));



$the_query = new WP_Query($args);
$loopcount = $the_query->found_posts;

