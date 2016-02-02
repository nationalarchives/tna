
<div class="row">

    <div class="col starts-at-full ends-at-full box ">
       <?php if (is_page("whats-on")){?>

        <a href="http://www.bymewilliamshakespeare.org/?utm_source=TNAWhatsOn&utm_medium=BannerAd& utm_content=TNAWhatsOn&utm_campaign=Shakespeare-promo" target="_blank" title="Visit the By me William Shakespeare website">

            <?php }else{?>

            <a href="http://www.bymewilliamshakespeare.org/?utm_source=TNAHompage&utm_medium=BannerAd& utm_content=TNAHompage&utm_campaign=Shakespeare-promo" target="_blank" title="Visit the By me William Shakespeare website">

            <?php } ?>
            <div class="bmws-banner ">


        </div></a>
        <div class="float-left starts-at-full ends-at-two-thirds margin-none margin-bottom-small">



            <div class="pad-medium">
                <?php $key="0.shakespeare";

                if ($key) {
                    echo get_post_meta($post->ID, $key, true);

                }?>
        </div>   </div>
        <div class="float-left starts-at-full ends-at-one-third margin-none margin-bottom-small">
            <div class="pad-medium">

                <?php if (is_page("whats-on")){?>

                <a href="http://www.bymewilliamshakespeare.org/?utm_source=TNAWhatsOn&utm_medium=BannerAd& utm_content=TNAWhatsOn&utm_campaign=Shakespeare-promo" title="Visit the By me William Shakespeare website" target="_blank" class=" button float-right margin-top-medium margin-bottom-medium" style="background-color:#000;color:#fff">

                    <?php }else{?>

                    <a href="http://www.bymewilliamshakespeare.org/?utm_source=TNAHompage&utm_medium=BannerAd& utm_content=TNAHompage&utm_campaign=Shakespeare-promo" target="_blank" title="Visit the By me William Shakespeare website" class=" button float-right margin-top-medium margin-bottom-medium" style="background-color:#000;color:#fff">

                        <?php } ?>






                    Find out more</a>
            </div>


        </div>
    </div>
</div>

    <style>
        .bmws-banner{
            width:100%;
            min-height:250px;
            height:auto;
            background-image: url("/wp-content/themes/tna/images/backgrounds/tna-bmws-banner-desktop.jpg");
            background-repeat: no-repeat;
            background-size: 100% auto;
        }

        @media only screen and (min-width:320px) {

            .bmws-banner{
                min-height: 220px;
                height:auto;
                background-image: url("/wp-content/themes/tna/images/backgrounds/tna-bmws-banner-mobile.jpg");

            }
        }

        @media only screen and (min-width: 480px) {

            .bmws-banner{
                min-height: 145px;
            height:auto;

                background-image: url("/wp-content/themes/tna/images/backgrounds/tna-bmws-banner-tablet.jpg");

            }
                            }


        @media only screen and (min-width: 768px) {

            .bmws-banner{

                background-image: url("/wp-content/themes/tna/images/backgrounds/tna-bmws-banner-desktop.jpg");

                min-height:125px;
            }
        }

        @media only screen and (min-width: 1024px) {

            .bmws-banner{

                background-image: url("/wp-content/themes/tna/images/backgrounds/tna-bmws-banner-desktop.jpg");

                min-height:175px;
            }
        }

    </style>