<?php
/*
Template Name: One Page Minisite
*/

get_header(); ?>
<?php 

if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="page_wrap" class="container" role="main">

    <!-- Breadcrumbs // Image descriptor -->

    <div class="row" id="breadcrumb-holder" tabindex="-1">
        <?php include 'breadcrumb.php'; ?>
        <?php if (!is_page("state-secrets")){?>
        <div class="sprite icon-img-desc position-top-right">
            <div class="image-description" style="display: block;">
                <?php the_field('main-banner-image-description'); ?>
            </div>
        </div>
        <?php }?>
        <?php if (is_page("state-secrets")){?>
        <div class="float-right bbc-logo">
            <a href="http://www.bbc.co.uk/programmes/b05p6p2t" target="_blank" title="Opens in new window">
                <img src="<?php bloginfo( 'stylesheet_directory'); ?>/images/state-secrets/tna-state-secrets-bbc-logo.jpg"
                    alt="BBC logo"></a>
        </div>
        <?php }?>
    </div>

    <?php if (is_page("state-secrets")){?>
    <!-- All content goes here -->

    <div id="state-secrets-content" class="row">
        <div class="col starts-at-full ends-at-full intro-margin">
            <div class="breather">
                <h1>
                    <?php the_title();?></h1>
            </div>


        </div>

        <div class="col starts-at-full ends-at-full intro-margin grey-bg dark-grey-bottom-border">

            <div class="col starts-at-full ends-at-half">
                <div class="breather">
                    <h2>Discover the historic documents featured in the BBC Two TV series here</h2>
                    <?php the_content();?>
                </div>
            </div>

            <div class="col starts-at-full ends-at-half">
                <div class="breather">
                    <a href="http://www.bbc.co.uk/programmes/b05p6p2t"
                        title="Watch Portillo's State Secrets on the BBC iPlayer - Link opens in new window"
                        target="_blank"><img
                            src="<?php bloginfo( 'stylesheet_directory'); ?>/images/state-secrets/tna-state-secrets-bbc-promo.jpg"
                            alt="Image of Portillo's State Secrets BBC"></a>
                    <div class="secret-box">
                        <div class="secret-title white">
                            Starts Monday 23 March 18:30<br>
                            <a href="http://www.bbc.co.uk/programmes/b05p6p2t"
                                title="Watch Portillo's State Secrets on the BBC iPlayer - Link opens in new window"
                                target="_blank">
                                Watch on the BBC iPlayer</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>



        <div class="col starts-at-full ends-at-full">


            <div class="breather" id="documents">

                <div class="float-left">


                    <?php

// variables for testing purposes only

$testdate = trim( filter_input( INPUT_GET, "date", FILTER_SANITIZE_FULL_SPECIAL_CHARS ));


if ($testdate){

$this_date = $testdate;

}else{

  $this_date = date('j M');

}


$activedates = array("17 Mar", "18 Mar", "19 Mar","20 Mar","21 Mar","22 Mar", "23 Mar","24 Mar", "25 Mar", "26 Mar", "27 Mar", "28 Mar", "29 Mar");


if (in_array($this_date, $activedates)){


  $ep1 = "active";
   $ep2 = "active";
    $ep3 = "active";
    $ep4 = "active";
$ep5 = "active";


 }else{
$all = "active";
 }


   ?>

                </div>
                <div class="clear-both"></div>
                <div class="float-right"><a href="#documents" onClick="closeDocuments();" id="document-toggle"
                        class="reveal-button dark-grey-bg">Show episodes</a></div>
                <div class="clear-both"></div>
                <!-- document viewer -->

                <div id="document-loader"></div>
                <!--document viewer -->

                <!-- document tiles in a masonry style -->
                <div id="document-container">
                    <div class="dark-grey-border box-big document-box">
                        <div class="secret-box">

                            <?php if ($ep1 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents"
                                    onclick="showDocuments('crime-and-punishment');">
                                    <h2>Episode 1: Crime and punishment</h2>
                                </a>
                                <p>Monday 23 March<br>
                                    Some of the world’s most famous detectives and criminal cases can be found in The
                                    National Archives...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('crime-and-punishment');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-crime-punishment.jpg"
                                    alt="Crime and punishment" border="0" width="656" height="430"></a>
                            <?php }else{?>
                            <div class="secret-label">
                                <div class="secret-date"><b>Crime and punishment</b><br>Monday 23 March</div>
                            </div>
                            <img src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-crime-punishment.jpg"
                                alt="Crime and punishment" border="0" class="disabled">
                            <?php 
}?>




                        </div>
                    </div>



                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">

                            <?php if ($ep2 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents" onclick="showDocuments('tyrants');">
                                    <h2>Episode 2: Tyrants</h2>
                                </a>
                                <p>Tuesday 24 March<br>
                                    Discover the secrets of some of the world's most notorious dictators with official
                                    records held by The National Archives...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('tyrants');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-tyrants.jpg"
                                    alt="Tyrants" border="0"></a>
                            <?php }else{?>

                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 2: Tyrants</b><br>Tuesday 24 March</div>
                            </div>

                            <img src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-tyrants.jpg"
                                alt="Tyrants" class="disabled">

                            <?php 
}?>

                        </div>

                    </div>



                    <div class=" dark-grey-border box-small document-box">
                        <div class="secret-box">


                            <?php if ($ep3 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents"
                                    onclick="showDocuments('celebrity-scandals');">
                                    <h2>Episode 3: Celebrity and scandals</h2>
                                </a>
                                <p>Wednesday 25 March<br>
                                    Whether new or old, the actions of celebrity writers, royals and rock stars will
                                    always be of public interest...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('celebrity-scandals');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-celebrity-scandal.jpg"
                                    alt="Celebrity and scandals" border="0" width="512" height="540"></a>
                            <?php }else{?>
                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 3: Celebrity and scandals</b><br>Wednesday 25 March
                                </div>
                            </div>

                            <img src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-celebrity-scandal.jpg"
                                alt="Celebrity and scandals" class="disabled">
                            <?php 
}?>

                        </div>

                    </div>


                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">

                            <?php if ($ep4 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents" onclick="showDocuments('mysteries');">
                                    <h2>Episode 4: Mysteries</h2>
                                </a>
                                <p>Thursday 26 March<br>
                                    The last letter from Jack the Ripper, thousands of UFO reports, hoax claims of
                                    finding Lord Kitchener’s body...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('mysteries');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-mysteries.jpg"
                                    alt="Mysteries" border="0"></a>
                            <?php }else{?>

                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 4: Mysteries</b><br>Thursday 26 March</div>
                            </div>

                            <img src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-mysteries.jpg"
                                alt="Mysteries" class="disabled">
                            <?php 
}?>
                        </div>
                    </div>



                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">

                            <?php if ($ep5 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents"
                                    onclick="showDocuments('sport-and-politics');">
                                    <h2>Episode 5: Sport and politics</h2>
                                </a>
                                <p>Friday 27 March<br>
                                    Did you know that King Edward III tried to ban football?
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('sport-and-politics');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-sport-politics.jpg"
                                    alt="Sport and politics" border="0"></a>
                            <?php }else{?>


                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 5: Sport and politics</b><br>Friday 27 March</div>
                            </div><img
                                src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-sport-politics.jpg"
                                alt="Sport and politics" class="disabled">

                            <?php 
}?>
                        </div>
                    </div>

                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">
                            <?php if ($ep6 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents"
                                    onclick="showDocuments('traitors-and-spies');">
                                    <h2>Episode 6: Traitors and spies</h2>
                                </a>
                                <p>Monday 30 March<br>
                                    Fake identities and knitting needles have featured in the tactics of espionage from
                                    the First World War to the Cold War...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('traitors-and-spies');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-spies.jpg"
                                    alt="Traitors and spies" border="0"></a>
                            <?php }else{?>



                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 6: Traitors and spies</b><br>Monday 30 March</div>
                            </div><img
                                src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-spies.jpg"
                                alt="Traitors and spies" class="disabled">

                            <?php 
}?>

                        </div>
                    </div>



                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">

                            <?php if ($ep7 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents" onclick="showDocuments('monarchy');">
                                    <h2>Episode 7: Monarchy</h2>
                                </a>
                                <p>Tuesday 31 March<br>
                                    Discover the details of royal treasures, attempted assassinations and speeches
                                    drafted in case of a Third World War...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('monarchy');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-monarchy.jpg"
                                    alt="Monarchy" border="0"></a>
                            <?php }else{?>




                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 7: Monarchy</b><br>Tuesday 31 March</div>
                            </div><img
                                src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-monarchy.jpg"
                                alt="Monarchy" class="disabled">

                            <?php 
}?>
                        </div>
                    </div>






                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">

                            <?php if ($ep8 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents" onclick="showDocuments('banned');">
                                    <h2>Episode 8: Banned</h2>
                                </a>
                                <p>Wednesday 1 April<br>
                                    Censorship is still a major issue but how has it changed over the years?
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('banned');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-banned.jpg"
                                    alt="Banned" border="0"></a>
                            <?php }else{?>
                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 8: Banned</b><br>Wednesday 1 April</div>
                            </div><img
                                src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-banned.jpg"
                                alt="Banned" class="disabled">
                            <?php 
}?>
                        </div>
                    </div>



                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">
                            <?php if ($ep9 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents" onclick="showDocuments('on-trial');">
                                    <h2>Episode 9: On trial</h2>
                                </a>
                                <p>Thursday 2 April<br>
                                    Discover the details of some of the many historic cases and trials ranging from
                                    blasphemy and witchcraft through to slavery...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('on-trial');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-on-trial.jpg"
                                    alt="On trial" border="0"></a>
                            <?php }else{?>


                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 9: On trial</b><br>Thursday 2 April</div>
                            </div><img
                                src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-on-trial.jpg"
                                alt="On trial" class="disabled">
                            <?php 
}?>
                        </div>
                    </div>

                    <div class="dark-grey-border box-small document-box">
                        <div class="secret-box">
                            <?php if ($ep10 == "active" || $all =="active"){?>
                            <div class="secret-title"><a href="#documents"
                                    onclick="showDocuments('national-security');">
                                    <h2>Episode 10: National security</h2>
                                </a>
                                <p>Friday 3 April<br>
                                    Some of the most famous plots and sieges all feature in our vast collection of
                                    records...
                                </p>
                            </div>
                            <a href="#documents" onclick="showDocuments('national-security');"><img
                                    src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-national-security.jpg"
                                    alt="National security" border="0"></a>
                            <?php }else{?>

                            <div class="secret-label">
                                <div class="secret-date"><b>Episode 10: National security</b><br>Friday 3 April</div>
                            </div><img
                                src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-national-security.jpg"
                                alt="National security" class="disabled">
                            <?php 
}?>
                        </div>
                    </div>





                    <!-- container ends-->
                    <div class="clear-both"></div>
                </div>
            </div>
        </div>
        <!-- document tiles in a masonry style -->




    </div>


    <?php }?>


    <!-- end col -->
</div>




<!-- All content goes here -->
</div>



<div class="container tna-bg">
    <div id="tna-content" class="row ">


        <div class="col starts-at-full ends-at-full">
            <div class="breather">
                <h2>Discover 1,000 years of history at The National Archives</h2>
                <span><a href="http://www.nationalarchives.gov.uk/records/" title="View our records">&gt; View our
                        records</a></span>
            </div>

        </div>


    </div>
</div>



<div class="container margin-top-medium">
    <div class="row">

        <div class="col starts-at-full ends-at-half ">
            <div class="breather margin-top-medium outline">
                <h2>@UkNatArchives</h2>
                <a href="https://twitter.com/UkNatArchives">Tweets by @UkNatArchives</a>

            </div>



        </div>


        <div class="col starts-at-full ends-at-half">
            <div class="breather margin-top-medium outline">
                <h2>The Keeper's Gallery</h2>

                <p><img src="<?php bloginfo("stylesheet_directory");?>/images/state-secrets/tna-state-secrets-keepers-gallery.jpg"
                        alt="Photograph of The Keeper's Gallery at The National Archives"></p>
                <p>
                    Visit us to see a selection of Portillo's State Secrets, including the Cato street conspiracy spikes
                    and Adolf Hitler's fake passport, on display in the <a
                        href="https://www.nationalarchives.gov.uk/visit/keepers-gallery.htm"
                        title="Find out more about the Keeper's Gallery">Keeper's Gallery</a>.

                    <p><a href="/visit/default.htm" title="Find out more about visiting us">Find out more </a>about
                        visiting us.</p>
                </p>

            </div>



        </div>
    </div>
</div>





<?php endwhile; ?>
<?php endif; ?>

<!-- Custom stylesheets -->

<?php if (is_page("state-secrets")){?>
<link rel="stylesheet" type="text/css"
    href="<?php bloginfo('template_directory'); ?>/css/minisite-state-secrets.css?=timestamp=<?php echo(time());?>">

<script type="text/javascript">
WebFontConfig = {
    google: {
        families: ['Cutive+Mono::latin']
    }
};
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();
</script>

<?php }?>
<?php get_footer(); ?>
<?php if (is_page("state-secrets")){?>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/state-secrets/scripts.js"></script>

<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/minisite-state-secrets-ie.css">
<![endif]-->
<?php }?>