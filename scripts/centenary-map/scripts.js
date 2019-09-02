function doSelected(id, id2) {
    $("#" + id + "").removeClass('selected');
    $("#" + id2 + "").addClass('selected');
}

function doExpand(id1) {
    $("#" + id1 + "").slideToggle("slow");
}

function doFadeIn(id1) {
    $("#" + id1 + "").fadeIn("slow");
}

function doFadeOut(id1) {
    $("#" + id1 + "").fadeOut("slow");
}

function doSlide_in(id1) {
    $("#map-toggle").fadeOut("slow");
    if (navigator.appVersion.indexOf("MSIE 8.") != -1 || navigator.appVersion.indexOf("MSIE 7.") != -1) {
        $("#" + id1 + "").show();
    } else {
        $("#" + id1 + "").show('slide', {
            direction: 'left'
        }, 500);
    }
}

function doSlide_out(id1) {
    if (navigator.appVersion.indexOf("MSIE 8.") != -1 || navigator.appVersion.indexOf("MSIE 7.") != -1) {
        location.reload();
    } else {
        $("#map-toggle").fadeIn("slow");
        $("#" + id1 + "").hide('slide', {
            direction: 'left'
        }, 500);

        $('.zoomContainer').zoomTo({
            targetsize: 1.0,
            root: $(".zoomContainer")
        });

        $().removeClass('pulsate');
    }
}

function doSlide_up(id1) {
    $("#" + id1 + "").slideToggle("slow", function () { });

}

function doVisibility(id1) {
    $("#" + id1 + "").slideToggle("slow", function () { });
}

function doHide(id1) {
    $("#" + id1 + "").hide();
}

function toggle_off(id) {
    var e = document.getElementById(id);
    e.style.display = 'none';
}

function toggle_on(id) {
    var e = document.getElementById(id);
    e.style.display = 'block';
}


$(document).ready(function () {




    $strhashcheck = location.hash;


    if ($strhashcheck == "#Glossary") {

        window.location = "/first-world-war/a-global-view";

        return false;

    }


    if ($strhashcheck) {


        if ($strhashcheck == "#Aden") {
            $hashurl = "/first-world-war/a-global-view/aden/";

        }
        if ($strhashcheck == "#Anglo-Egyptian Sudan") {
            $hashurl = "/first-world-war/a-global-view/anglo-egyptian-sudan/";

        }

        if ($strhashcheck == "#Ascension Island") {
            $hashurl = "/first-world-war/a-global-view/ascension-island/";

        }
        if ($strhashcheck == "#Australia") {
            $hashurl = "/first-world-war/a-global-view/australia/";

        }

        if ($strhashcheck == "#Australia") {
            $hashurl = "/first-world-war/a-global-view/australia/";

        }
        if ($strhashcheck == "#Barbados") {
            $hashurl = "/first-world-war/a-global-view/barbados/";

        }

        if ($strhashcheck == "#Bermuda") {
            $hashurl = "/first-world-war/a-global-view/bermuda/";

        }

        if ($strhashcheck == "#British East Africa") {
            $hashurl = "/first-world-war/a-global-view/british-east-africa/";

        }

        if ($strhashcheck == "#British Gold Coast") {
            $hashurl = "/first-world-war/a-global-view/british-gold-coast/";

        }
        if ($strhashcheck == "#British Guiana") {
            $hashurl = "/first-world-war/a-global-view/british-guiana/";

        }
        if ($strhashcheck == "#British Honduras") {
            $hashurl = "/first-world-war/a-global-view/british-honduras/";

        }

        if ($strhashcheck == "#British New Guinea and German New Guinea") {
            $hashurl = "/first-world-war/a-global-view/british-new-guinea-and-german-new-guinea/";

        }
        if ($strhashcheck == "#British New Guinea and German New Guinea") {
            $hashurl = "/first-world-war/a-global-view/british-new-guinea-and-german-new-guinea/";

        }

        if ($strhashcheck == "#British North Borneo and Sarawak") {
            $hashurl = "/first-world-war/a-global-view/british-north-borneo-and-sarawak/";

        }

        if ($strhashcheck == "#British Somaliland") {
            $hashurl = "/first-world-war/a-global-view/british-somaliland/";

        }


        if ($strhashcheck == "#Burma") {
            $hashurl = "/first-world-war/a-global-view/burma/";

        }

        if ($strhashcheck == "#Canada") {
            $hashurl = "/first-world-war/a-global-view/canada/";

        }


        if ($strhashcheck == "#Ceylon") {
            $hashurl = "/first-world-war/a-global-view/ceylon/";

        }




        if ($strhashcheck == "#Cocos (Keeling) Islands") {
            $hashurl = "/first-world-war/a-global-view/cocos-keeling-islands/";

        }



        if ($strhashcheck == "#Cyprus") {
            $hashurl = "/first-world-war/a-global-view/cyprus/";

        }



        if ($strhashcheck == "#Egypt") {
            $hashurl = "/first-world-war/a-global-view/egypt/";

        }


        if ($strhashcheck == "#Falkland Islands") {
            $hashurl = "/first-world-war/a-global-view/falkland-islands/";

        }
        if ($strhashcheck == "#Gibraltar") {
            $hashurl = "/first-world-war/a-global-view/gibraltar/";

        }
        if ($strhashcheck == "#Hong Kong and Wei-Hai-Wei") {
            $hashurl = "/first-world-war/a-global-view/hong-kong-and-weihaiwei/";

        }


        if ($strhashcheck == "#India") {
            $hashurl = "/first-world-war/a-global-view/india/";

        }


        if ($strhashcheck == "#Jamaica") {
            $hashurl = "/first-world-war/a-global-view/jamaica/";

        }


        if ($strhashcheck == "#Leeward Islands") {
            $hashurl = "/first-world-war/a-global-view/leeward-islands/";

        }
        if ($strhashcheck == "#Malaya") {
            $hashurl = "/first-world-war/a-global-view/malaya/";

        }

        if ($strhashcheck == "#Maldives") {
            $hashurl = "/first-world-war/a-global-view/maldives/";

        }

        if ($strhashcheck == "#Malta") {
            $hashurl = "/first-world-war/a-global-view/malta/";

        }


        if ($strhashcheck == "#Mauritius") {
            $hashurl = "/first-world-war/a-global-view/mauritius/";

        }

        if ($strhashcheck == "#New Zealand") {
            $hashurl = "/first-world-war/a-global-view/new-zealand/";

        }
        if ($strhashcheck == "#Newfoundland") {
            $hashurl = "/first-world-war/a-global-view/newfoundland/";

        }

        if ($strhashcheck == "#Nigeria") {
            $hashurl = "/first-world-war/a-global-view/nigeria/";

        }
        if ($strhashcheck == "#Northern Rhodesia") {
            $hashurl = "/first-world-war/a-global-view/northern-rhodesia/";

        }
        if ($strhashcheck == "#Nyasaland") {
            $hashurl = "/first-world-war/a-global-view/nyasaland/";

        }

        if ($strhashcheck == "#Pacific Islands") {
            $hashurl = "/first-world-war/a-global-view/pacific-islands/";

        }

        if ($strhashcheck == "#Seychelles") {
            $hashurl = "/first-world-war/a-global-view/seychelles/";

        }


        if ($strhashcheck == "#Sierra Leone") {
            $hashurl = "/first-world-war/a-global-view/sierra-leone/";

        }


        if ($strhashcheck == "#Straits Settlements") {
            $hashurl = "/first-world-war/a-global-view/straits-settlements/";

        }


        if ($strhashcheck == "#South Africa") {
            $hashurl = "/first-world-war/a-global-view/south-africa/";

        }

        if ($strhashcheck == "#South African High Commission Territories") {
            $hashurl = "/first-world-war/a-global-view/south-african-high-commission-territories/";

        }


        if ($strhashcheck == "#Southern Rhodesia") {
            $hashurl = "/first-world-war/a-global-view/southern-rhodesia/";

        }


        if ($strhashcheck == "#St Helena") {
            $hashurl = "/first-world-war/a-global-view/st-helena/";

        }
        if ($strhashcheck == "#The Bahamas") {
            $hashurl = "/first-world-war/a-global-view/the-bahamas/";

        }

        if ($strhashcheck == "#The Gambia") {
            $hashurl = "/first-world-war/a-global-view/the-gambia/";

        }

        if ($strhashcheck == "#Trinidad and Tobago") {
            $hashurl = "/first-world-war/a-global-view/trinidad-and-tobago/";

        }

        if ($strhashcheck == "#Uganda") {
            $hashurl = "/first-world-war/a-global-view/uganda/";

        }

        if ($strhashcheck == "#Windward Islands") {
            $hashurl = "/first-world-war/a-global-view/windward-islands/";

        }

        if ($strhashcheck == "#Zanzibar") {
            $hashurl = "/first-world-war/a-global-view/zanzibar/";

        }

        if ($strhashcheck != "#") {

            doSlide_in('map-content');
            var post_url = $hashurl;
            $("#map-content").html("<p style=\"margin-top: 0; padding-top: 3em;\">Loading map data<br><img src=/wp-content/themes/tna/images/centenary-map/ajax-loader.gif></p>");
            $("#map-content").load(post_url);

        }

        // automatically slide country based on hashtag	
    }

    /* 	---
    2 MAP TOGGLE BUTTONS
    Replace innerHTML of <picture> tag when 1914 and 2014 buttons are clicked. 
    Change selected button and associated style for different maps
    	---- */


    $('#btn-1914').click(function () {
        $('#map').fadeOut(function () {
            $(this).html("<source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg\" media=\"(min-width: 1024px)\"><source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg\" media=\"(min-width: 768px)\"><source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg\" media=\"(min-width: 321px)\"><source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05-320.jpg\" media=\"(max-width: 320px)\"><!--[if IE 9]></video><![endif]--><img srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg\" alt=\"Map of the world\" src=\"/wp-content/themes/tna/images/centenary-map/centenary-map-1914-final-05.jpg\">");
            $(this).fadeIn();
        });
        $('#btn-1914').addClass('btn-on');
        $('#btn-modern').removeClass('btn-on');



        //Reset attributes to default

        $('#aden').removeClass('map-modern-attr');
        $('#anglo-egyptian-sudan').removeClass('map-modern-attr');
        $('#british-east-africa').removeClass('map-modern-attr');
        $('#british-guiana').removeClass('map-modern-attr');
        $('#british-honduras').removeClass('map-modern-attr');
        $('#british-gold-coast').removeClass('map-modern-attr');
        $('#british-new-guinea-and-german-new-guinea').removeClass('map-modern-attr');
        $('#british-north-borneo-and-sarawak').removeClass('map-modern-attr');
        $('#british-somaliland').removeClass('map-modern-attr');
        $('#ceylon').removeClass('map-modern-attr');
        $('#hong-kong-and-weihaiwei').removeClass('map-modern-attr');
        $('#leeward-islands').removeClass('map-modern-attr');
        $('#malaya').removeClass('map-modern-attr');
        $('#northern-rhodesia').removeClass('map-modern-attr');
        $('#nyasaland').removeClass('map-modern-attr');
        $('#southern-rhodesia').removeClass('map-modern-attr');
        $('#straits-settlements').removeClass('map-modern-attr');
        $('#windward-islands').removeClass('map-modern-attr');
        $('#united-kingdom').removeClass('map-modern-attr');
        $('#zanzibar').removeClass('map-modern-attr');
        $('#newfoundland').removeClass('map-modern-attr');
        $('#pacific-islands').removeClass('map-modern-attr');


        $('#aden-button').text('Aden');
        $('#anglo-egyptian-sudan-button').text('Anglo-Egyptian Sudan');
        $('#british-east-africa-button').text('British East Africa');
        $('#british-guiana-button').text('British Guiana');
        $('#british-honduras-button').text('British Honduras');
        $('#british-gold-coast-button').text('British Gold Coast');
        $('#british-new-guinea-and-german-new-guinea-button').text('British New Guinea and German New Guinea');
        $('#british-north-borneo-and-sarawak-button').text('British North Borneo and Sarawak');
        $('#british-somaliland-button').text('British Somaliland');
        $('#burma-button').text('Burma');
        $('#ceylon-button').text('Ceylon');
        $('#hong-kong-and-weihaiwei-button').text('Hong Kong and Wei-Hai-Wei');
        $('#leeward-islands-button').text('Leeward Islands');
        $('#malaya-button').text('Malaya');
        $('#northern-rhodesia-button').text('Northern Rhodesia');
        $('#nyasaland-button').text('Nyasaland');
        $('#southern-rhodesia-button').text('Southern Rhodesia');
        $('#straits-settlements-button').text('Straits Settlements');
        $('#windward-islands-button').text('Windward Islands');
        $('#newfoundland-button').text('Newfoundland');
        $('#zanzibar-button').text('Zanzibar');
        $('#britain-button').text('Britain');
        $('#pacific-islands-button').text('Pacific Islands');

        $('#aden-menu').text('Aden');
        $('#anglo-egyptian-sudan-menu').text('Anglo-Egyptian Sudan');
        $('#british-east-africa-menu').text('British East Africa');
        $('#british-guiana-menu').text('British Guiana');
        $('#british-honduras-menu').text('British Honduras');
        $('#british-gold-coast-menu').text('British Gold Coast');
        $('#british-new-guinea-and-german-new-guinea-menu').text('British New Guinea and German New Guinea');
        $('#british-north-borneo-and-sarawak-menu').text('British North Borneo and Sarawak');
        $('#british-somaliland-menu').text('British Somaliland');
        $('#burma-menu').text('Burma');
        $('#ceylon-menu').text('Ceylon');
        $('#hong-kong-and-weihaiwei-menu').text('Hong Kong and Wei-Hai-Wei');
        $('#leeward-islands-menu').text('Leeward Islands');
        $('#malaya-menu').text('Malaya');
        $('#northern-rhodesia-menu').text('Northern Rhodesia');
        $('#nyasaland-menu').text('Nyasaland');
        $('#southern-rhodesia-menu').text('Southern Rhodesia');
        $('#straits-settlements-menu').text('Straits Settlements');
        $('#windward-islands-menu').text('Windward Islands');
        $('#newfoundland-menu').text('Newfoundland');
        $('#zanzibar-menu').text('Zanzibar');
        $('#britain-menu').text('Britain');
        $('#pacific-islands-menu').text('Pacific Islands');

        $('#key-title').text('Key to empires in the First World War');
        $('#key-copy').text('This map is designed to provide an outline of countries and borders during wartime rather than a precise location of places, borders or features.');

        $('.marker-container span').text('Countries and territories marked with a pin were part of the British Empire in 1914.');
        $('#usa').show();
        $('#independent').show();
        $('#key-li').show();
        $('#austria').html('<span class="austro-hungarian"></span>Austria-Hungary');
        $('#britain').html('<span class="british"></span>Britain');
        $('#ottoman').html('<span class="ottoman"></span>Ottoman Empire');
        $('.shown').toggle();
        $('#bangladesh').toggle();
        $('#pakistan').toggle();
        $('#botswana').attr("rel", "South African High Commission Territories", "title", "South African High Commission Territories");
        $('#lesotho').attr("rel", "South African High Commission Territories", "title", "South African High Commission Territories");
        $('#swaziland').attr("rel", "South African High Commission Territories", "title", "South African High Commission Territories");
        $('.hidden').css("display", "none");
        $('#country-menu').find('#bangladesh-menu').remove();
        $('#country-menu').find('#pakistan-menu').remove();
        $('#country-menu').find('#botswana-menu').remove();
        $('#country-menu').find('#lesotho-menu').remove();
        $('#country-menu').find('#swaziland-menu').remove();
        $('#country-menu').append('<option id="south-african-high-commission-territories-menu" value="south african high commission territories">South African High Commission Territories</option>');
        $("#country-menu").html($('#country-menu option').sort(function (x, y) {
            return $(x).text() < $(y).text() ? -1 : 1;
        }))
        $("#country-menu").get(0).selectedIndex = 0;

    });

    $('#btn-modern').click(function () {
        $('#map').fadeOut(function () {
            $(this).html("<source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-modern-final-05.jpg\" media=\"(min-width: 1024px)\"><source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-modern-final-05.jpg\" media=\"(min-width: 768px)\"><source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-modern-final-05.jpg\" media=\"(min-width: 321px)\"><source srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-modern-final-05-320.jpg\" media=\"(max-width: 320px)\"><!--[if IE 9]></video><![endif]--><img srcset=\"/wp-content/themes/tna/images/centenary-map/centenary-map-modern-final-05.jpg\" alt=\"Map of the world\" src=\"/wp-content/themes/tna/images/centenary-map/centenary-map-modern-final-05.jpg\">");
            $(this).fadeIn();
        });
        $('#btn-1914').removeClass('btn-on');
        $('#btn-modern').addClass('btn-on');

        $('#aden-button').text('Adan, Yemen');
        $('#anglo-egyptian-sudan-button').text('Sudan/South Sudan');
        $('#british-east-africa-button').text('Kenya');
        $('#british-guiana-button').text('Guyana');
        $('#british-honduras-button').text('Belize');
        $('#british-gold-coast-button').text('Ghana');
        $('#british-new-guinea-and-german-new-guinea-button').text('Papua New Guinea');
        $('#british-north-borneo-and-sarawak-button').text('Sabah and Sarawak, Malaysia');
        $('#british-somaliland-button').text('Somalia');
        $('#ceylon-button').text('Sri Lanka');
        $('#hong-kong-and-weihaiwei-button').text('Hong Kong and Weihai, People\'s Republic of China');
        $('#leeward-islands-button').text('Anguilla, Antigua and Barbuda, St Kitts and Nevis, Montserrat, Dominica and the British Virgin Islands');
        $('#malaya-button').text('Malaysia');
        $('#northern-rhodesia-button').text('Zambia');
        $('#nyasaland-button').text('Malawi');
        $('#southern-rhodesia-button').text('Zimbabwe');
        $('#straits-settlements-button').text('Singapore and parts of Malaysia');
        $('#windward-islands-button').text('Grenada, St Vincent and the Grenadines and St Lucia');
        $('#newfoundland-button').text('Newfoundland, Canada');
        $('#zanzibar-button').text('Zanzibar, Tanzania');
        $('#britain-button').text('United Kingdom');
        $('#pacific-islands-button').text('Fiji, Tonga, Vanuata, Kiribati, Tuvalu and Solomon Islands');

        // switch attributes for modern countries

        $('#aden').addClass('map-modern-attr');
        $('#anglo-egyptian-sudan').addClass('map-modern-attr');
        $('#british-east-africa').addClass('map-modern-attr');
        $('#british-guiana').addClass('map-modern-attr');
        $('#british-honduras').addClass('map-modern-attr');
        $('#british-gold-coast').addClass('map-modern-attr');
        $('#british-new-guinea-and-german-new-guinea').addClass('map-modern-attr');
        $('#british-north-borneo-and-sarawak').addClass('map-modern-attr');
        $('#british-somaliland').addClass('map-modern-attr');
        $('#ceylon').addClass('map-modern-attr');
        $('#hong-kong-and-weihaiwei').addClass('map-modern-attr');
        $('#leeward-islands').addClass('map-modern-attr');
        $('#malaya').addClass('map-modern-attr');
        $('#northern-rhodesia').addClass('map-modern-attr');
        $('#nyasaland').addClass('map-modern-attr');
        $('#southern-rhodesia').addClass('map-modern-attr');
        $('#straits-settlements').addClass('map-modern-attr');
        $('#windward-islands').addClass('map-modern-attr');
        $('#united-kingdom').addClass('map-modern-attr');
        $('#zanzibar').addClass('map-modern-attr');
        $('#newfoundland').addClass('map-modern-attr');
        $('#pacific-islands').addClass('map-modern-attr');


        $('#aden-menu').text('Adan, Yemen');
        $('#anglo-egyptian-sudan-menu').text('Sudan/South Sudan');
        $('#british-east-africa-menu').text('Kenya');
        $('#british-guiana-menu').text('Guyana');
        $('#british-honduras-menu').text('Belize');
        $('#british-gold-coast-menu').text('Ghana');
        $('#british-new-guinea-and-german-new-guinea-menu').text('Papua New Guinea');
        $('#british-north-borneo-and-sarawak-menu').text('Sabah and Sarawak, Malaysia');
        $('#british-somaliland-menu').text('Somalia');
        $('#ceylon-menu').text('Sri Lanka');
        $('#hong-kong-and-weihaiwei-menu').text('Hong Kong and Weihai, People\'s Republic of China');
        $('#leeward-islands-menu').text('Antigua, St Kitts and Nevis, Montserrat, Dominica and the Virgin Islands');
        $('#malaya-menu').text('Malaysia');
        $('#northern-rhodesia-menu').text('Zambia');
        $('#nyasaland-menu').text('Malawi');
        $('#southern-rhodesia-menu').text('Zimbabwe');
        $('#straits-settlements-menu').text('Singapore and parts of Malaysia');
        $('#windward-islands-menu').text('Grenada, St Vincent and the Grenadines and St Lucia');
        $('#britain-menu').text('United Kingdom');
        $('#newfoundland-menu').text('Newfoundland, Canada');
        $('#zanzibar-menu').text('Zanzibar, Tanzania');
        $('#pacific-islands-menu').text('Fiji, Tonga, Vanuata, Kiribati, Tuvalu and Solomon Islands');

        $('#key-title').text('Key');
        $('#key-copy').text('This map is designed to provide an outline of modern day countries and borders for comparison alongside the wartime map rather than a precise location of places, borders or features.');
        $('.marker-container span').text('Countries or territories marked with a pin are the modern-day countries or territories that formed part of the British Empire in 1914.');
        $('#usa').hide();
        $('#independent').hide();
        $('#key-li').hide();
        $('#austria').html('<span class="austro-hungarian"></span>Austria');
        $('#britain').html('<span class="british"></span>UK');
        $('#ottoman').html('<span class="ottoman"></span>Turkey');

        $('.shown').toggle();

        $('#bangladesh').toggle();
        $('#pakistan').toggle();
        $('#botswana').attr("rel", "Botswana", "title", "Botswana");
        $('#lesotho').attr("rel", "Lesotho", "title", "Lesotho");
        $('#swaziland').attr("rel", "Swaziland", "title", "Swaziland");
        $('.hidden').css("display", "inline-block");
        $('#country-menu').find('#south-african-high-commission-territories-menu').remove();
        $('#country-menu').append('<option id="botswana-menu" value="botswana">Botswana</option>');
        $('#country-menu').append('<option id="lesotho-menu" value="lesotho">Lesotho</option>');
        $('#country-menu').append('<option id="swaziland-menu" value="swaziland">Swaziland</option>');
        $('#country-menu').append('<option id="bangladesh-menu" value="bangladesh">Bangladesh</option>');
        $('#country-menu').append('<option id="pakistan-menu" value="pakistan">Pakistan</option>');
        $("#country-menu").html($('#country-menu option').sort(function (x, y) {
            return $(x).text() < $(y).text() ? -1 : 1;
        }))
        $("#country-menu").get(0).selectedIndex = 0;
    });
    /*	---- 
    END MAP TOGGLE 
    	----- */

    /*	---- 
    3 COUNTRY SLIDE TABS 
    Toggle the selected state of tabs when clicked
    	----- */

    $('#nav a').click(function () {
        $('#nav a').removeClass('selected');
        $(this).addClass('selected');
    });

    $('#nav2 a').click(function () {
        $('#nav2 a').removeClass('selected');
        $(this).addClass('selected');
    });
    $('#link-1a').click(function () {
        $(this).addClass('selected');
        alert("clicked");
        $('#link-2a, #link-3a, #link-4a, #link-5a, #link-6a').removeClass('selected');
    });
    $('#link-2a').click(function () {
        console.log('this worked');
        $(this).addClass('selected');
        alert("clicked");
        $('#link-1a, #link-3a, #link-4a, #link-5a, #link-6a').removeClass('selected');
    });
    $('#link-3a').click(function () {
        console.log('this worked');
        $(this).addClass('selected');
        $('#link-1a, #link-2a, #link-4a, #link-5a, #link-6a').removeClass('selected');
    });
    $('#link-4a').click(function () {
        $(this).addClass('selected');
        $('#link-1a, #link-2a, #link-3a, #link-5a, #link-6a').removeClass('selected');
    });
    $('#link-5a').click(function () {
        $(this).addClass('selected');
        $('#link-1a, #link-2a, #link-3a, #link4-a, #link-6a').removeClass('selected');
    });
    $('#link-6a').click(function () {
        $(this).addClass('selected');
        $('#link-1a, #link-2a, #link-3a, #link4-a, #link-5a').removeClass('selected');
    });

    /*	---- 
    END COUNTRY SLIDE TABS
    	----- */

    /*	---- 
    4 COUNTRY LIST SHOW/HIDE BUTTONS
    Country list slides in/out on click and 'show/hide' text in buttons are changed.
    	----- */

    $('#country-toggle').click(function () {
        $('.country-list').toggle();
        $("#zv").toggleClass('full');
        $(this).text($(this).text() == 'Show' ? 'Hide' : 'Show');


    });

    /*	---- 
    END COUNTRY LIST SHOW/HIDE BUTTONS
    	----- */

    /*	---- 
    5 COUNTRY LIST DISPLAY CONDITIONS
    Conditions to determine when the country list should show
    	----- */

    //Hide the country list if window is greater than 1024px
    if (jQuery(window).width() > 1024) {
        $(".country-list").hide();
        $("#zv").addClass('full');
    }

    if (jQuery(window).width() < 1024) {
        // $(".country-list").hide();
        // $("#zv").addClass('full');
    }

    //Add 'Hide' button text if the window is greater than 650px but less than 1040px
    if (jQuery(window).width() > 650 && jQuery(window).width() < 1040) {
        $("#country-toggle").text("Hide");
    }

    //If the window is resized below 650px, hide the country list and country toggle (not needed on mobile)
    //Otherwise if the window is resized above 650px, hide the country list but show the country toggle
    jQuery(window).resize(function () {
        if (jQuery(window).width() < 650) {
            jQuery(".country-list, #country-toggle").hide();
        } else if (jQuery(window).width() > 650) {
            jQuery(".country-list").hide();
            jQuery("#country-toggle").show();
            $("#zv").addClass('full');
            $("#country-toggle").text("Show");

        }
    });


    /*	---- 
    ENDCOUNTRY LIST DISPLAY CONDITIONS
    Conditions to determine when the country list should show
    	----- */

    /*	---- 
    6 INTRODUCTION MESSAGE ON FIRST VISIT
    	----- */

    // When remove notice is clicked, set a cookie and hide the background and intro map
    $(document).on('click', '#removeNotice', function (e) {
        e.preventDefault();
        document.cookie = "dontShowIntro=true; max-age=" + (60 * 60 * 24 * 7 * 4) + ";path=/";
        $('.background, .intro-map').remove();
    });

    // Check to see if the cookie has been set. If not, append intro message to the container and fade it in
    if (document.cookie.indexOf("dontShowIntro") === -1) {
        $('.container').append('<div class="background"><div class="intro-map"><h2>A global view</h2><p>Explore the global impact of the First World War through our interactive map, which highlights key events and figures in countries from Aden to Zanzibar. Drawn directly from our records at The National Archives, the map aims to go beyond the trenches of the Western Front and shows how the war affected different parts of the world.</p><p>The First World War: A global view is part of our <a href="https://www.nationalarchives.gov.uk/first-world-war/centenary-programme.htm" title="Visit the First World War 100 website" target="_blank">First World War 100</a> programme. It currently focuses on the contributions of countries and territories from the British Empire in 1914. We will continue to develop the map over the next four years, to show more countries and territories across Europe, the Middle East, the Americas, Africa and Asia.</p><h2>About this map</h2><p>To get started, select a country or territory by clicking on a marker <img src="/wp-content/themes/tna/images/centenary-map/map-marker-small.png" alt="Map maker icon"> on the map, or select a name from the list on the left. Navigate through the tabs to read about battles, life on the Home Front and much more. Each country or territory is illustrated with images, maps and other documents from our collections. Click on the references to find key documents in <a href="https://discovery.nationalarchives.gov.uk/SearchUI/" title="Visit Discovery" target="_blank">Discovery</a>, our catalogue, or images in our <a href="https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewHome" title="Visit the Image library" target="_blank">image library</a>.</p><p>To reflect changing borders and names since 1914, we have provided two map views. Switch between the global map as it was during wartime, and as it is today, by using the buttons at the top of the map.</p><p><a href="#" id="removeNotice" class="button">Get started</a></p><div class="clear10px"></div></div></div>');

        setTimeout(function () {
            $('.background, .intro-map').fadeIn("slow");
        }, 1000);
    }

    /*	---- 
    END INTRODUCTION MESSAGE ON FIRST VISIT
    	----- */
    $('#howtouse').on('click', function (e) {
        document.cookie = "dontShowIntro=true; max-age=" + (60 * 60 * 24 * 7 * 4) + ";path=/";
        setTimeout(function () {
            $('.intro-map').fadeOut("slow");
        }, 300);
        e.preventDefault();
        setTimeout(function () {
            $('.intro-map').html('<h2>A global view</h2><p>Explore the global impact of the First World War through our interactive map, which highlights key events and figures in countries from Aden to Zanzibar. Drawn directly from our records at The National Archives, the map aims to go beyond the trenches of the Western Front and shows how the war affected different parts of the world.</p><p>The First World War: A global view is part of our <a href="https://www.nationalarchives.gov.uk/first-world-war/centenary-programme.htm" title="Visit the First World War 100 website" target="_blank">First World War 100</a> programme. It currently focuses on the contributions of countries and territories from the British Empire in 1914. We will continue to develop the map over the next four years, to show more countries across Europe, the Middle East, the Americas, Africa and Asia.</p><h2>About this map</h2><p>To get started, select a country or territory by clicking on a marker <img src="/wp-content/themes/tna/images/centenary-map/map-marker-small.png" alt="Map maker icon"> on the map, or select a name from the list on the left. Navigate through the tabs to read about battles, life on the Home Front and much more. Each country or territory is illustrated with images, maps and other documents from our collections. Click on the references to find key documents in <a href="https://discovery.nationalarchives.gov.uk/SearchUI/" title="Visit Discovery" target="_blank">Discovery</a>, our catalogue, or images in our <a href="https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewHome" title="Visit the Image library" target="_blank">image library</a>.</p><p>To reflect changing borders and country names since 1914, we have provided two map views. Switch between the global map as it was during wartime, and as it is today, by using the buttons at the top of the map.</p><p><a href="#" id="removeNotice" class="button">Get started</a></p><div class="clear10px"></div>');
        }, 800);

        setTimeout(function () {
            $('.intro-map').fadeIn("slow");
        }, 300);
    });

    $('#help').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#top").offset().top - 100
        }, 1000);
        $('.container').append('<div class="background"><div class="intro-map"><h2>A global view</h2><p>Explore the global impact of the First World War through our interactive map, which highlights key events and figures in countries from Aden to Zanzibar. Drawn directly from our records at The National Archives, the map aims to go beyond the trenches of the Western Front and shows how the war affected different parts of the world.</p><p>The First World War: A global view is part of our <a href="https://www.nationalarchives.gov.uk/first-world-war/centenary-programme.htm" title="Visit the First World War 100 website" target="_blank" >First World War 100</a> programme. It currently focuses on the contributions of countries and territories from the British Empire in 1914. We will continue to develop the map over the next four years, to show more countries and territories across Europe, the Middle East, the Americas, Africa and Asia.</p><h2>About this map</h2><p>To get started, select a country or territory by clicking on a marker <img src="/wp-content/themes/tna/images/centenary-map/map-marker-small.png" alt="Map maker icon"> on the map, or select a name from the list on the left. Navigate through the tabs to read about battles, life on the Home Front and much more. Each country or territory is illustrated with images, maps and other documents from our collections. Click on the references to find key documents in <a href="https://discovery.nationalarchives.gov.uk/SearchUI/" title="Visit Discovery" target="_blank">Discovery</a>, our catalogue, or images in our <a href="https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewHome"  title="Visit the Image library" target="_blank">image library</a>.</p><p>To reflect changing borders and country names since 1914, we have provided two map views. Switch between the global map as it was during wartime, and as it is today, by using the buttons at the top of the map.</p><p>To find out more about the map, please read our <a href="https://blog.nationalarchives.gov.uk/blog/first-world-war-global-view/" target="_blank" title="Find out more about the map on our blog">blog post</a>. </p><p><a href="#" id="close" class="button">Close</a></p><div class="clear10px"></div></div></div>');

        setTimeout(function () {
            $('.background, .intro-map').fadeIn("slow");
        }, 300);
    });

    $(document).on('click', '#close', function (e) {
        e.preventDefault();
        $('.background, .intro-map').hide();
        $('.background').remove();
    });

    //Disable the cache for all AJAX functions
    $.ajaxSetup({
        cache: false
    });

    //When a map marker is clicked, create the content for the tooltip
    $('.map-marker').on('click', function (e) {
        var href = $(this).attr('href');
        var country = $(this).attr('rel');
        if (country == 'Bangladesh') {
            var country = 'India';
        }
        if (country == 'Pakistan') {
            var country = 'India';
        }
        if (country == 'Botswana') {
            var country = 'South African High Commission Territories';
        }
        if (country == 'Lesotho') {
            var country = 'South African High Commission Territories';
        }
        if (country == 'Swaziland') {
            var country = 'South African High Commission Territories';
        }
        var countryName = $(this).data('modern');
        var targetURL = href + '#' + country;



        $.get(targetURL, function (data) {
            $countryIntro = $(data).find('#country-intro p:eq(0)');
            $countryIntroText = $countryIntro.text();
            if ($('#btn-modern').hasClass('btn-on')) {
                if (countryName == null) {
                    $('#map-intro h2').html(country);
                } else {
                    $('#map-intro h2').html(countryName);
                }
            } else {
                $('#map-intro h2').html(country);
            }
            $('#map-intro p').html($countryIntroText);
            if ($('#btn-modern').hasClass('btn-on')) {




                if (countryName == null) {
                    $('#map-intro a').html('Read more about ' + country);
                } else {
                    $('#map-intro a').html('Read more about ' + countryName);
                }
            } else {
                $('#map-intro a').html('Read more about ' + country);
            }
            $('#map-intro a').attr('href', href);
            $('#map-intro a').attr('rel', country);

        });
        var $this = $(this);
        $this.addClass('pulsate');
        e.preventDefault();
    });

    //Activate tooltpister plugin for all elements that have the class 


    $('.hasTooltip').tooltipster({
        trigger: 'click',
        content: $('<div id="map-intro"><h2></h2><p></p><a class="button" id="map-click" href="" rel=""></a></div>'),
        onlyOne: true,
        maxWidth: 500,
        interactive: true,
        contentAsHTML: true,
        position: 'right',
        offsetX: -250,
        offsetY: 150,
        positionTracker: true,
        functionReady: function () {

            //When the 'Read more' button is clicked, load the country slide content and hide the tooltip 
            $("#map-click").click(function () {
                $('html, body').animate({
                    scrollTop: $("#top").offset().top - 100
                }, 1000);
                doSlide_in('map-content');
                var post_url = $(this).attr("href");
                var post_title = $(this).attr("rel");
                if (post_title == 'Bangladesh') {
                    var post_title = 'India';
                }
                if (post_title == 'Pakistan') {
                    var post_title = 'India';
                }
                if (post_title == 'Botswana') {
                    var post_title = 'South African High Commission Territories';
                }
                if (post_title == 'Lesotho') {
                    var post_title = 'South African High Commission Territories';
                }
                if (post_title == 'Swaziland') {
                    var post_title = 'South African High Commission Territories';
                }
                if (history.pushState) {
                    history.pushState(null, null, '#' + post_title);
                } else {
                    location.hash = '#' + post_title;


                }


                $("#map-content").html("<p style=\"margin-top: 0; padding-top: 3em;\">Loading map data<br><img src=/wp-content/themes/tna/images/centenary-map/ajax-loader.gif></p>");
                $("#map-content").load(post_url);
                $('.hasTooltip').tooltipster('hide');
                $('a').removeClass('pulsate');

                return false;
            });


        }
    });


    $('.hasTooltip-no-link').tooltipster({
        trigger: 'click',
        content: $('<div id="map-intro"><h2></h2><p></p></div>'),
        onlyOne: true,
        maxWidth: 500,
        interactive: true,
        contentAsHTML: true,
        position: 'right',
        offsetX: -250,
        offsetY: 150,
        positionTracker: true
    });


    //When the country list buttons are clicked, load the country slide content 
    $('#aden-button, #anglo-egyptian-sudan-button, #ascension-island-button, #australia-button, #bangladesh-button, #barbados-button, #bermuda-button, #botswana-button, #british-north-borneo-and-sarawak-button, #british-somaliland-button, #british-east-africa-button, #british-guiana-button, #british-honduras-button, #burma-button, #canada-button, #ceylon-button, #cocos-keeling-islands-button, #cyprus-button, #egypt-button, #falkland-islands-button, #gibraltar-button, #british-gold-coast-button, #hong-kong-and-weihaiwei-button, #india-button, #jamaica-button, #leeward-islands-button, #lesotho-button, #malaya-button, #maldives-button, #malta-button, #mauritius-button, #british-new-guinea-and-german-new-guinea-button, #new-zealand-button, #newfoundland-button, #nigeria-button, #northern-rhodesia-button, #nyasaland-button, #pacific-islands-button, #pakistan-button, #seychelles-button, #sierra-leone-button, #straits-settlements-button, #south-africa-button, #south-african-high-commission-territories-button, #southern-rhodesia-button, #st-helena-button, #swaziland-button, #the-bahamas-button, #the-gambia-button, #trinidad-and-tobago-button, #uganda-button, #windward-islands-button, #zanzibar-button').click(function (e) {
        doSlide_in('map-content');
        var post_url = $(this).attr("href");
        var post_title = $(this).attr("rel");
        if (post_title == 'Bangladesh') {
            var post_title = 'India';
        }
        if (post_title == 'Pakistan') {
            var post_title = 'India';
        }
        if (post_title == 'Botswana') {
            var post_title = 'South African High Commission Territories';
        }
        if (post_title == 'Lesotho') {
            var post_title = 'South African High Commission Territories';
        }
        if (post_title == 'Swaziland') {
            var post_title = 'South African High Commission Territories';
        }
        if (history.pushState) {
            history.pushState(null, null, '#' + post_title);
        } else {
            location.hash = '#' + post_title;
        }
        $("#map-content").html("<p style=\"margin-top: 0; padding-top: 3em;\">Loading map data<br><img src=/wp-content/themes/tna/images/centenary-map/ajax-loader.gif></p>");
        $("#map-content").load(post_url);

        return false;

    });



    //When the location icon is clicked for the country, highlight the marker on the map with custom classes 
    $('#aden-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#aden').toggleClass('pulsate');
        $('#aden').toggleClass('animated');
        $('#aden').toggleClass('pulse');
        return false;
    });
    $('#anglo-egyptian-sudan-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#anglo-egyptian-sudan').toggleClass('pulsate');
        $('#anglo-egyptian-sudan').toggleClass('animated');
        $('#anglo-egyptian-sudan').toggleClass('pulse');
        return false;
    });
    $('#ascension-island-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#ascension-island').toggleClass('pulsate');
        $('#ascension-island').toggleClass('animated');
        $('#ascension-island').toggleClass('pulse');
        return false;
    });
    $('#australia-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#australia').toggleClass('pulsate');
        $('#australia').toggleClass('animated');
        $('#australia').toggleClass('pulse');
        return false;
    });
    $('#bangladesh-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#bangladesh').toggleClass('pulsate');
        $('#bangladesh').toggleClass('animated');
        $('#bangladesh').toggleClass('pulse');
        return false;
    });
    $('#barbados-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#barbados').toggleClass('pulsate');
        $('#barbados').toggleClass('animated');
        $('#barbados').toggleClass('pulse');
        return false;
    });
    $('#bermuda-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#bermuda').toggleClass('pulsate');
        $('#bermuda').toggleClass('animated');
        $('#bermuda').toggleClass('pulse');
        return false;
    });
    $('#botswana-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#botswana').toggleClass('pulsate');
        $('#botswana').toggleClass('animated');
        $('#botswana').toggleClass('pulse');
        return false;
    });
    $('#britain-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#united-kingdom').toggleClass('pulsate');
        $('#united-kingdom').toggleClass('animated');
        $('#united-kingdom').toggleClass('pulse');
        return false;
    });
    $('#british-north-borneo-and-sarawak-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#british-north-borneo-and-sarawak').toggleClass('pulsate');
        $('#british-north-borneo-and-sarawak').toggleClass('animated');
        $('#british-north-borneo-and-sarawak').toggleClass('pulse');
        return false;
    });
    $('#british-somaliland-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#british-somaliland').toggleClass('pulsate');
        $('#british-somaliland').toggleClass('animated');
        $('#british-somaliland').toggleClass('pulse');
        return false;
    });
    $('#british-east-africa-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#british-east-africa').toggleClass('pulsate');
        $('#british-east-africa').toggleClass('animated');
        $('#british-east-africa').toggleClass('pulse');
        return false;
    });
    $('#british-gold-coast-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#british-gold-coast').toggleClass('pulsate');
        $('#british-gold-coast').toggleClass('animated');
        $('#british-gold-coast').toggleClass('pulse');
        return false;
    });
    $('#british-guiana-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#british-guiana').toggleClass('pulsate');
        $('#british-guiana').toggleClass('animated');
        $('#british-guiana').toggleClass('pulse');
        return false;
    });
    $('#british-honduras-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#british-honduras').toggleClass('pulsate');
        $('#british-honduras').toggleClass('animated');
        $('#british-honduras').toggleClass('pulse');
        return false;
    });
    $('#burma-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#burma').toggleClass('pulsate');
        $('#burma').toggleClass('animated');
        $('#burma').toggleClass('pulse');
        return false;
    });
    $('#canada-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#canada').toggleClass('pulsate');
        $('#canada').toggleClass('animated');
        $('#canada').toggleClass('pulse');
        return false;
    });
    $('#ceylon-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#ceylon').toggleClass('pulsate');
        $('#ceylon').toggleClass('animated');
        $('#ceylon').toggleClass('pulse');
        return false;
    });
    $('#cocos-keeling-islands-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#cocos-keeling-islands').toggleClass('pulsate');
        $('#cocos-keeling-islands').toggleClass('animated');
        $('#cocos-keeling-islands').toggleClass('pulse');
        return false;
    });
    $('#cyprus-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#cyprus').toggleClass('pulsate');
        $('#cyprus').toggleClass('animated');
        $('#cyprus').toggleClass('pulse');
        return false;
    });
    $('#egypt-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#egypt').toggleClass('pulsate');
        $('#egypt').toggleClass('animated');
        $('#egypt').toggleClass('pulse');
        return false;
    });
    $('#falkland-islands-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#falkland-islands').toggleClass('pulsate');
        $('#falkland-islands').toggleClass('animated');
        $('#falkland-islands').toggleClass('pulse');
        return false;
    });
    $('#gibraltar-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#gibraltar').toggleClass('pulsate');
        $('#gibraltar').toggleClass('animated');
        $('#gibraltar').toggleClass('pulse');
        return false;
    });
    $('#hong-kong-and-weihaiwei-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#hong-kong-and-weihaiwei').toggleClass('pulsate');
        $('#hong-kong-and-weihaiwei').toggleClass('animated');
        $('#hong-kong-and-weihaiwei').toggleClass('pulse');
        return false;
    });
    $('#india-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#india').toggleClass('pulsate');
        $('#india').toggleClass('animated');
        $('#india').toggleClass('pulse');
        return false;
    });
    $('#jamaica-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#jamaica').toggleClass('pulsate');
        $('#jamaica').toggleClass('animated');
        $('#jamaica').toggleClass('pulse');
        return false;
    });
    $('#leeward-islands-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#leeward-islands').toggleClass('pulsate');
        $('#leeward-islands').toggleClass('animated');
        $('#leeward-islands').toggleClass('pulse');
        return false;
    });
    $('#lesotho-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#lesotho').toggleClass('pulsate');
        $('#lesotho').toggleClass('animated');
        $('#lesotho').toggleClass('pulse');
        return false;
    });
    $('#malaya-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#malaya').toggleClass('pulsate');
        $('#malaya').toggleClass('animated');
        $('#malaya').toggleClass('pulse');
        return false;
    });
    $('#maldives-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#maldives').toggleClass('pulsate');
        $('#maldives').toggleClass('animated');
        $('#maldives').toggleClass('pulse');
        return false;
    });
    $('#malta-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#malta').toggleClass('pulsate');
        $('#malta').toggleClass('animated');
        $('#malta').toggleClass('pulse');
        return false;
    });
    $('#mauritius-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#mauritius').toggleClass('pulsate');
        $('#mauritius').toggleClass('animated');
        $('#mauritius').toggleClass('pulse');
        return false;
    });
    $('#british-new-guinea-and-german-new-guinea-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#british-new-guinea-and-german-new-guinea').toggleClass('pulsate');
        $('#british-new-guinea-and-german-new-guinea').toggleClass('animated');
        $('#british-new-guinea-and-german-new-guinea').toggleClass('pulse');
        return false;
    });
    $('#new-zealand-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#new-zealand').toggleClass('pulsate');
        $('#new-zealand').toggleClass('animated');
        $('#new-zealand').toggleClass('pulse');
        return false;
    });
    $('#newfoundland-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#newfoundland').toggleClass('pulsate');
        $('#newfoundland').toggleClass('animated');
        $('#newfoundland').toggleClass('pulse');
        return false;
    });
    $('#nigeria-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#nigeria').toggleClass('pulsate');
        $('#nigeria').toggleClass('animated');
        $('#nigeria').toggleClass('pulse');
        return false;
    });
    $('#northern-rhodesia-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#northern-rhodesia').toggleClass('pulsate');
        $('#northern-rhodesia').toggleClass('animated');
        $('#northern-rhodesia').toggleClass('pulse');
        return false;
    });
    $('#nyasaland-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#nyasaland').toggleClass('pulsate');
        $('#nyasaland').toggleClass('animated');
        $('#nyasaland').toggleClass('pulse');
        return false;
    });
    $('#seychelles-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#seychelles').toggleClass('pulsate');
        $('#seychelles').toggleClass('animated');
        $('#seychelles').toggleClass('pulse');
        return false;
    });
    $('#sierra-leone-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#sierra-leone').toggleClass('pulsate');
        $('#sierra-leone').toggleClass('animated');
        $('#sierra-leone').toggleClass('pulse');
        return false;
    });
    $('#straits-settlements-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#straits-settlements').toggleClass('pulsate');
        $('#straits-settlements').toggleClass('animated');
        $('#straits-settlements').toggleClass('pulse');
        return false;
    });
    $('#south-africa-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#south-africa').toggleClass('pulsate');
        $('#south-africa').toggleClass('animated');
        $('#south-africa').toggleClass('pulse');
        return false;
    });
    $('#south-african-high-commission-territories-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#botswana, #lesotho, #swaziland').toggleClass('pulsate');
        $('#botswana, #lesotho, #swaziland').toggleClass('animated');
        $('#botswana, #lesotho, #swaziland').toggleClass('pulse');
        return false;
    });
    $('#southern-rhodesia-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#southern-rhodesia').toggleClass('pulsate');
        $('#southern-rhodesia').toggleClass('animated');
        $('#southern-rhodesia').toggleClass('pulse');
        return false;
    });
    $('#st-helena-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#st-helena').toggleClass('pulsate');
        $('#st-helena').toggleClass('animated');
        $('#st-helena').toggleClass('pulse');
        return false;
    });
    $('#swaziland-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#swaziland').toggleClass('pulsate');
        $('#swaziland').toggleClass('animated');
        $('#swaziland').toggleClass('pulse');
        return false;
    });
    $('#pacific-islands-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#pacific-islands').toggleClass('pulsate');
        $('#pacific-islands').toggleClass('animated');
        $('#pacific-islands').toggleClass('pulse');
        return false;
    });
    $('#pakistan-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#pakistan').toggleClass('pulsate');
        $('#pakistan').toggleClass('animated');
        $('#pakistan').toggleClass('pulse');
        return false;
    });
    $('#the-bahamas-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#the-bahamas').toggleClass('pulsate');
        $('#the-bahamas').toggleClass('animated');
        $('#the-bahamas').toggleClass('pulse');
        return false;
    });
    $('#the-gambia-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#the-gambia').toggleClass('pulsate');
        $('#the-gambia').toggleClass('animated');
        $('#the-gambia').toggleClass('pulse');
        return false;
    });
    $('#trinidad-and-tobago-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#trinidad-and-tobago').toggleClass('pulsate');
        $('#trinidad-and-tobago').toggleClass('animated');
        $('#trinidad-and-tobago').toggleClass('pulse');
        return false;
    });
    $('#uganda-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#uganda').toggleClass('pulsate');
        $('#uganda').toggleClass('animated');
        $('#uganda').toggleClass('pulse');
        return false;
    });
    $('#windward-islands-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#windward-islands').toggleClass('pulsate');
        $('#windward-islands').toggleClass('animated');
        $('#windward-islands').toggleClass('pulse');
        return false;
    });
    $('#zanzibar-identifier').click(function () {
        $(this).toggleClass('marker-selected');
        $('#zanzibar').toggleClass('pulsate');
        $('#zanzibar').toggleClass('animated');
        $('#zanzibar').toggleClass('pulse');
        return false;
    });

    //When you click the map area, remove any highlighted markers 
    $('.positioner').click(function () {
        $('.hasTooltip').tooltipster('hide');
        $('.hasTooltip-no-link').tooltipster('hide');
        $('a').removeClass('pulsate');
        $('a').removeClass('animated');
        $('a').removeClass('pulse');
        $('li').removeClass('marker-selected');

    });

    //Remove all highlighted markers that do not have the zoom class
    if (!$('#').hasClass(".selectedZoomTarget")) {
        $('a').removeClass('pulsate');
    }

    //When the value of the selected menu is changed, load the relevant country slide content (select menu only displayed at mobile view)
    $('#country-menu').change(function () {

        doSlide_in('map-content');
        var country = $(this).val()
        if (country == 'bangladesh') {
            var country = 'India';
        }
        if (country == 'pakistan') {
            var country = 'India';
        }
        if (country == 'botswana') {
            var country = 'south-african-high-commission-territories';
        }
        if (country == 'lesotho') {
            var country = 'south-african-high-commission-territories';
        }
        if (country == 'swaziland') {
            var country = 'south-african-high-commission-territories';
        }
        var href = '/first-world-war/a-global-view/' + country + '/',
            title = $(this).find("option:selected").text();
        if (history.pushState) {
            history.pushState(null, null, '#' + country);
        } else {
            location.hash = '#' + country;
        }
        $("#map-content").html("<p style=\"margin-top: 0; padding-top: 3em;\">Loading map data<br><img src=/wp-content/themes/tna/images/centenary-map/ajax-loader.gif></p>");
        $("#map-content").load(href);

    });

    $('#glossary-button').click(function (e) {
        doSlide_in('glossary-content');
        var destination = $(this).attr("rel"),
            href = '/first-world-war/a-global-view/' + destination + '/',
            title = $(this).text();

        if (history.pushState) {
            history.pushState(null, null, '#' + title);
        } else {
            location.hash = '#' + destination;
        }
        $("#glossary-content").html("<p style=\"margin-top: 0; padding-top: 3em;\">Loading map data<br><img src=/wp-content/themes/tna/images/centenary-map/ajax-loader.gif></p>");
        $("#glossary-content").load(href);

        return false;

    });

    //check for IE8
    if (navigator.appVersion.indexOf("MSIE 8.") != -1 || navigator.appVersion.indexOf("MSIE 7.") != -1) {
        $("#scrollbar").removeClass("mCustomScrollbar")
    }




});
