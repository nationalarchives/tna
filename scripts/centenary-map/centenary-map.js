// Activate equal heights
$('#index').fadeIn('slow');

$(window).load(function () {

    equalheight('.index > div');
});


$(window).resize(function () {
    equalheight('.index > div');
});


// Scroll to anchor link

$("#countries-link").click(function (e) {
    e.preventDefault();

    // Scroll to step-two container
    $('html, body').animate({
        scrollTop: $('#countries').offset().top
    }, 1200);
});

$("#about-link").click(function (e) {
    e.preventDefault();

    // Scroll to step-two container
    $('html, body').animate({
        scrollTop: $('#about').offset().top
    }, 1200);
});

// Set the on-state of the country
var country = $('main').data('country');

$('.country').each(
    function () {
        $this = $(this);
        var title = $this.attr('id');
        if (title == country) {
            $this.attr('id', 'selected');
        }

        // Temporary fix to avoid broken links for unpublished countries
        if (title == 'Albania' || title == 'Austria-Hungary' || title == 'Belgium' || title == 'Bulgaria' || title == 'Denmark' || title == 'France' || title == 'Germany' || title == 'Greece' || title == 'Italy' || title == 'Liechtenstein' || title == 'Luxembourg' || title == 'Montenegro' || title == 'Netherlands' || title == 'Norway' || title == 'Portugal' || title == 'Roumania' || title == 'Russia' || title == 'Serbia' || title == 'Spain' || title == 'Sweden' || title == 'Switzerland') {
            $this.attr('xlink:href', '');
            $this.attr('xlink:title', title + '<small> (currently unavailable)</small>');
        }
    }
);

// Create a tooltip from the title attribute on hover within the SVG
$('.country').tooltipsy({
    alignTo: 'cursor',
    offset: [5, 5]
});

/*  ----
INTRODUCTION MESSAGE ON FIRST VISIT
 ----- */

// When remove notice is clicked, set a cookie and hide the background and intro map
$(document).on('click', '#removeNotice', function (e) {
    e.preventDefault();
    document.cookie = "dontShowIntro=true; max-age=" + (60 * 60 * 24 * 7 * 4) + ";path=/";
    $('.background, .intro-map').remove();
});

// Check to see if the cookie has been set. If not, append intro message to the container and fade it in

var introContent = $("#intro-content").html();
console.log(introContent);

if (document.cookie.indexOf("dontShowIntro") === -1) {
    $('main').append('<div class="background"><div class="intro-map"><p><a href="#" id="removeNotice" class="button intro-button">Get started</a></p><h3>A global view</h3>' + introContent + '</div></div>');

    setTimeout(function () {
        $('.background, .intro-map').fadeIn("slow");
    }, 1000);
}

/*  ----
 END INTRODUCTION MESSAGE ON FIRST VISIT
 ----- */
