
<div class="row">

    <div class="col starts-at-full ends-at-full box ">
        <a href="http://www.bymewilliamshakespeare.org" target="_blank" title=""> <div class="bmws-banner ">


        </div></a>
        <div class="float-left starts-at-full ends-at-two-thirds margin-none margin-bottom-small">



            <div class="pad-medium">
                <?php $key="shakespeare";

                if ($key) {
                    echo get_post_meta($post->ID, $key, true);

                }?>
        </div>   </div>
        <div class="float-left starts-at-full ends-at-one-third margin-none margin-bottom-small">
            <div class="pad-medium"><a href="http://www.bymewilliamshakespeare.org" target="_blank" class=" button float-right margin-top-medium" style="background-color:#000;color:#fff">Find out more</a>
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
                min-height: 200px;
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