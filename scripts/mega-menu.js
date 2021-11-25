"use strict";
// Toggles the mega menu
$.fn.mega_menu_enhancements = function () {

    $('#mega-menu-pull-down button, #mega-menu-mobile button').each(function () {
        var $this = $(this);
        $this.on('click', function () {
            $('#nav').slideToggle('fast');
            $this.toggleClass('expanded');
        })
    });

    // Establishing toggle behaviour for links with .toggle-sub-menu

    $(document).on('click keydown keyup', '.toggle-sub-menu', function (e) {
        if(e.type ==="keyup") {
            return;
        }

        if(e.type === "keydown" && e.key !== "Enter") {
            return;
        }

        if (window.innerWidth <= 480) {
            var $this = $(this);
            e.preventDefault();
            $this.toggleClass('expanded').next().slideToggle('fast');
        }
    });
};

// Displays the promotional image

$.fn.append_promotional_image = function () {
    return this.each(function () {
        var $this = $(this);
        $this.append('<li class="imgContent"><a href="https://www.nationalarchives.gov.uk/20s-people/" title="20s People"><img src="https://cdn.nationalarchives.gov.uk/images/20s-people-mega-menu-image.jpg" alt="20s People" class="img-responsive tna-img-responsive"></a></li>');
        })
};
