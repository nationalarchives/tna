"use strict";
// Toggles the mega menu
$.fn.mega_menu_enhancements = function () {

    $('#mega-menu-pull-down button, #mega-menu-mobile button').each(function () {
        var $this = $(this);
        $this.on('click', function () {
            $('#nav').slideToggle('fast');
        })
    });

    // Establishing toggle behaviour for links with .toggle-sub-menu

    $(document).on('click', '.toggle-sub-menu', function (e) {
        if ($(window).width() < 480) {
            var $this = $(this);
            e.preventDefault();
            $this.toggleClass('expanded').next().slideToggle('fast');
        }
    });

    // Replacing anchor-only links

    $('.mega-menu a[href="#"]').each(function () {
        var $this = $(this),
            text = $this.text();
        $this.replaceWith($('<div>', {
            'text': text,
            'class': 'toggle-sub-menu',
            'id': 'more-link',
            'tabindex': '1'
        }));
    });

    return this.each(function () {
        var $this = $(this),
            $items = $this.next(),
            $link,
            $li;

        $this.addClass('toggle-sub-menu');


        $link = $('<a>', {
            'href': $this.attr('href'),
            'text': $this.text() + ' home'
        });

        $li = $('<li class="mobile-home-link">').append($link);

        $li.prependTo($items);

    })

};

// Displays the promotional image

$.fn.append_promotional_image = function () {
    return this.each(function () {
        var $this = $(this);
        $this.append('<li class="imgContent"><a href="https://nationalarchives.gov.uk/coldwar/" title="Discover our 2019 Cold War season"><img src="//www.nationalarchives.gov.uk/images/home/menu-cold-war.jpg" alt="Discover our 2019 Cold War season" class="tna-img-responsive"></a></li>');
    })
};

$.fn.webtrends_click_handler = function () {
    return this.each(function () {
        var $this = $(this);
        $this.on('click', function (e) {
            if (typeof dcsMultiTrack == 'function') {
                var text = $(e.target).text();
                dcsMultiTrack(
                    'DCS.dcsuri',
                    '/menu/' + text,
                    'WT.ti',
                    'Menu - ' + text
                )
            }
        })
    })
};
