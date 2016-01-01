// Activate equal heights
$('#index').fadeIn('slow');

$(window).load(function () {

    equalheight('.index > div');
});


$(window).resize(function () {
    equalheight('.index > div');
});

// Create a tooltip from the title attribute on hover within the SVG
$('.country').tooltipsy({
    alignTo: 'cursor'
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
    }
);

