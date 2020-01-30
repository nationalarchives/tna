$(function() {

    if ($("#research-guide-content").length) {

        $('div.wp-caption').each(function(){
            var $image = $(this).find('img'),
                $caption = $(this).find('p.wp-caption-text'),
                image_alt = $image.attr('alt').toLowerCase(),
                caption_text = $caption.text().toLowerCase(),
                alt_words = image_alt.split(" "),
                caption_words = caption_text.split(" "),
                duplicate_word_counter = 0;

            for(var i = 0; i < alt_words.length; i++ ) {
                if(caption_text.indexOf(alt_words[i]) > -1) {
                    duplicate_word_counter++;
                }
            }

            if (duplicate_word_counter > 0) {
                var duplicate_word_percentage = (duplicate_word_counter/caption_words.length)*100;

                if(duplicate_word_percentage > 40) {
                    $image.attr("alt", " ");
                }
            }
        });
    }
});
