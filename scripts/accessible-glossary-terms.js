/*
* This script firstly converts plain text (£) in research guides into glossary terms.
* The script will then loop through every instance of the glossary terms, and make them accessible.
* It does it in this order as some (£) are already glossary terms and some are not, so it ensures all are the same
* before making them accessible.
*/

$(function() {

    let make_plain_text_into_glossary_terms = function() {

        let $research_guide_text = $('#research-guide-content p');

        $($research_guide_text).each(function () {
            let $el = $(this);

            if($el.html().indexOf('(£)') > -1) {

                let p_html = $el.html();

                let glossary_span =
                    '(<span class="research-guide-glossary-term" title="There will be a charge to view these records. Searching indexes is free. Viewing and downloading are free on site at The National Archives.">£</span>)'

                p_html = p_html.replace(/\(£\)/gi, glossary_span);

                $el.html(p_html);

            }
        });
    };

    let make_glossary_terms_accessible = function () {

        let $research_guide_glossary_terms = $('.research-guide-glossary-term');

        if($research_guide_glossary_terms.length > 0) {

            $research_guide_glossary_terms.each(function() {

                let $term = $(this);

                if($term.text() === '£') {

                    $term.addClass('glossary-expand');
                    $term.text('charges apply');
                    $term.attr('aria-label', $term.attr('title'));

                    $term.on('click', function() {

                        alert($(this).attr('title'));
                    });
                }
            });
        }
    };

    make_plain_text_into_glossary_terms();
    make_glossary_terms_accessible();
});
