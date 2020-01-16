$(function() {

    if ($("#research-guide-content").length) {

        $('div.wp-caption').each(function(){
            let $image = $(this).find('img');
            let $caption = $(this).find('p.wp-caption-text');

            let image_alt = $image.attr('alt').toLowerCase();
            let caption_text = $caption.text().toLowerCase();

            let alt_words = image_alt.split(" ");
            let caption_words = caption_text.split(" ");
            let duplicate_word_counter = 0;

            for(let i = 0; i < alt_words.length; i++ ) {
                if(caption_text.indexOf(alt_words[i]) > -1) {
                    duplicate_word_counter++;
                }
            }

            if (duplicate_word_counter > 0) {
                let duplicate_word_percentage = (duplicate_word_counter/caption_words.length)*100;

                if(duplicate_word_percentage > 40) {
                    $image.attr("alt", " ");
                }
            }
        });
    }
});
