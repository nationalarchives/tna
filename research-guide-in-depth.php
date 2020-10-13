<?php
/*
Template Name: Reseach guide in depth
*/
get_header(); ?>

<?php if ( is_singular() && has_post_thumbnail( $post->ID )) :
   $thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
   $thumb_url = make_relative_path_from_url(wp_get_attachment_url($thumb_id)); ?>
<?php endif;?>

<div id="page_wrap" class="container research-guide-indepth" role="main">
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php if ( have_posts() ) :  ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <!-- PRIMARY CONTENT -->
  <div class="row">
    <div class="col starts-at-full ends-at-two-thirds box clr content-area">
      <h1 class="margin-none"><span><span>
<?php
$alttitle = '2-title-prefix';
$thealttitle = get_post_meta($post->ID, $alttitle, TRUE);
if($thealttitle != '') {
echo ($thealttitle);
}else{
echo('How to look for records of...');
}?>


      </span></span> <span class="heading-constant pad-large"><?php the_title(); ?></span></h1>

      <!-- include research guide availability indicator section -->
      <?php require_once('inc/online-availability.php') ?>

      <div class="breather" id="research-guide-content">

        <?php
        $getdata = get_the_content();

        //libxml_use_internal_errors(true);
        $h2Tag= array();
        $h2TagID= array();
        $xmlDoc = new DOMDocument();
        $xmlDoc->loadHTML($getdata);

        $hcount = $xmlDoc->getElementsByTagName("h2")->length;

        if ($hcount !=0){
            $searchNode = $xmlDoc->getElementsByTagName("h2");
        ?>

        <div class="starts-at-full ends-at-half margin-bottom-large margin-left-large float-right">


          <div class="breather hue-grey-lightest" id="records-content">
            <div id="toc">
            <?php
            echo ("<h2 class='margin-none text-small pad-bottom-small'>Contents</h2><ul class='no-bullet text-small' id='toc-list'>");
            foreach($searchNode as $d){
              $h2Tag =  $d->textContent;
              $h2TagID =  $d->getAttribute('id');
              echo "<li><a href='#".sanitize_title_with_dashes($h2Tag,'','save')."'>".$h2Tag."</a></li>";
            }
            echo("</ul>");
            ?>
            </div><!-- end #toc -->
          </div><!-- end .breather -->
        </div><!-- end div for contents box -->
        <?php }?>
        <?php
        $content = mb_convert_encoding(get_the_content(), 'HTML-ENTITIES', "UTF-8");
        $content = apply_filters( 'the_content', $content  );
        $content = str_replace( ']]>', ']]&gt;', $content );

//remove this when we go LIVE!
//Prepend all relative urls with /beta/
        $text= preg_replace('@((https?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.]*(\?\S+)?)?)*)@', '<a href="$1">$1</a>', $content);

// $content = str_replace("href=\"/","href=\"/beta/",$content);

$content = apply_filters( 'the_content', $content );

        $dom = new DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->loadHTML(utf8_decode($content));

        foreach ($dom->getElementsByTagName('h2') as $item) {
          $h2ID =  $item->textContent;
          $item->setAttribute('id', sanitize_title_with_dashes($h2ID, '', 'save'));
        }

        //strip doctype and html headers
        echo preg_replace('/^<!DOCTYPE.+?>/', '', str_replace( array('<html>', '</html>', '<body>', '</body>'), array('', '', '', ''), $dom->saveHTML()));
        ?>
      </div><!-- end .breather -->
    </div><!-- end .col -->

<!-- SECONDARY CONTENT -->
  <div class="col starts-at-full ends-at-one-third clr box" role="complementary">

    <?php
      $parent = get_the_title( $post->post_parent );
      if ($parent == 'Discovery help') : ?>
        <!-- include discovery link section -->
        <?php require_once('inc/research-guide-discovery.php') ?>
      <?php endif; ?>

        <!-- include research guide contact us section -->

        <?php require_once('inc/research-guide-contact.php'); ?>

        <!-- include research guide related guides section -->
        <?php require_once('inc/research-guide-related-guides.php') ?>

        <!-- include research guide video guides section -->
        <?php require_once('inc/research-guide-video-guides.php') ?>

        <?php if ($parent !== 'Discovery help') : ?>
          <!-- include discovery link section -->
          <?php require_once('inc/research-guide-discovery.php') ?>
        <?php endif; ?>


    </div><!-- end col -->
  </div><!-- end row -->
  <?php endwhile; ?>
  <?php endif; ?>
</div><!-- end page-wrap -->

<?php get_footer(); ?>
