<?php
/**
 *  TABLE OF CONTENTS
 *
 *  1. Custom fields arrays
 *  2. Callback function to show fields in meta box
 *  3. Add custom meta box
 *  4. Save custom fields
 *  5. Adding styling to the custom fields inside dashboard
 *
 */


/**
 * 1. Custom fields arrays
 * -----------------------------------------------------
 * 1.1 Home with external links
 */

$prefix = 'tna_';
$meta_box = array(
    'id' => 'home-external-links',
    'title' => 'Home with external links',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_1',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_1',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_1',
            'type' => 'text',
            'class' => 'image',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_1',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_2',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_2',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_2',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_2',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_3',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_3',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_3',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_3',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_4',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_4',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_4',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_4',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_5',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_5',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_5',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_5',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_6',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_6',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_6',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_6',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_7',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_7',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_7',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_7',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_8',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_8',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_8',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_8',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_9',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_9',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_9',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_9',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_10',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_10',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_10',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_10',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_11',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_11',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_11',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_11',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Title',
            //'desc' => 'Description',
            'id' => $prefix . 'text_12',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'Description',
            //'desc' => 'Enter description here',
            'id' => $prefix . 'textarea_12',
            'type' => 'textarea',
            //'std' => 'Description'
        ),
        array(
            'name' => 'Image',
            //'desc' => 'Image URL',
            'id' => $prefix . 'image_12',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
        array(
            'name' => 'External link',
            //'desc' => 'External link',
            'id' => $prefix . 'link_12',
            'type' => 'text',
            //'std' => 'Some text here'
        ),
    )
);

/**
 * 1.2 About us banner call-to-action
 */
$meta_box_about = array(
    'id' => 'about-us',
    'title' => 'About us banner call-to-action',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        array(
            'name' => 'Title',
            'id' => $prefix . 'banner_title',
            'type' => 'text',
        ),
        array(
            'name' => 'Description',
            'id' => $prefix . 'banner_desc',
            'type' => 'textarea',
        ),
        array(
            'name' => 'Button text',
            'id' => $prefix . 'button_text',
            'type' => 'text',

        ),
        array(
            'name' => 'Button link',
            'id' => $prefix . 'button_link_1',
            'type' => 'text',

        )
    )
);

/**
 * 1.3 About us banner call-to-action
 */
$meta_box_archives = array(
    'id' => 'archives-sector',
    'title' => 'Archives Sector banner call-to-action',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        array(
            'name' => 'Title',
            'id' => $prefix . 'banner_title',
            'type' => 'text',
        ),
        array(
            'name' => 'Description',
            'id' => $prefix . 'banner_desc',
            'type' => 'textarea',
        ),
        array(
            'name' => 'Button text',
            'id' => $prefix . 'button_text',
            'type' => 'text',

        ),
        array(
            'name' => 'Button link',
            'id' => $prefix . 'button_link_1',
            'type' => 'text',

        )
    )
);

/**
 * 1.4 The battle of Agincourt
 */
$meta_box_oex = array(
    'id' => 'online-exhibition',
    'title' => 'Additional content',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        array(
            'name' => 'Left-hand column title',
            'id' => $prefix . 'content1_title',
            'type' => 'text',
        ),
        array(
            'name' => 'Left-hand column content',
            'id' => $prefix . 'content1',
            'type' => 'textarea',
        ),
        array(
            'name' => 'Right-hand column title',
            'id' => $prefix . 'content2_title',
            'type' => 'text',
        ),
        array(
            'name' => 'Right-hand column content',
            'id' => $prefix . 'content2',
            'type' => 'textarea',
        )
    )
);

/**
 * 1.5 Online exhibitions index page
 */
$meta_box_oex_index = array(
    'id' => 'online-exhibitions-index',
    'title' => 'Online exhibition ',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        array(
            'name' => 'URL',
            'id' => 'online-exhibition',
            'type' => 'text',
        )
    )
);

/**
 * 1.2 About us banner call-to-action
 */
$meta_boxes_help = array(
    'id' => 'help_with_your_research',
    'title' => 'Help with your research',
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        array(
            'name' => 'Banner button one',
            'id' => 'desc_one',
            'type' => 'text',
        ),
        array(
            'name' => 'Link description',
            'id' => 'link_desc_one',
            'type' => 'text',
        ),
        array(
            'name' => 'Link URL',
            'id' => 'link_desc_one_url',
            'type' => 'text',
        ),
        array(
            'name' => 'Banner button two',
            'id' => 'desc_two',
            'type' => 'text',
        ),
        array(
            'name' => 'Link description',
            'id' => 'link_desc_two',
            'type' => 'text',
        ),
        array(
            'name' => 'Link URL ',
            'id' => 'link_desc_two_url',
            'type' => 'text',
        ),
        array(
            'name' => 'Banner button three',
            'id' => 'desc_three',
            'type' => 'text',
        ),
        array(
            'name' => 'Link description',
            'id' => 'link_desc_three',
            'type' => 'text',
        ),
        array(
            'name' => 'Link URL ',
            'id' => 'link_desc_three_url',
            'type' => 'text',
        ),
    )
);

/**
 * 2. Callback function to show fields in meta box
 * -----------------------------------------------------
 * 2.1 Home with external links
 */

function tna_show_box()
{
    global $meta_box, $post;
    // Use nonce for erification
    echo '<input type="hidden" name="tna_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_box['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
        '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" class="', $field['class'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
        }
        echo '</td><td>',
        '</td></tr>';
    }
    echo '</table>';
}

/**
 * 2.1 About us
 */

function tna_about_us_action()
{
    global $meta_box_about, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="tna_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_box_about['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
        '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" class="', $field['class'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
        }
        echo '</td><td>',
        '</td></tr>';
    }
    echo '</table>';
}


/**
 * 2.2 Archives sector
 */

function tna_archives_action()
{
    global $meta_box_archives, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="tna_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_box_archives['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
        '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];
                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" class="', $field['class'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
        }
        echo '</td><td>',
        '</td></tr>';
    }
    echo '</table>';
}


/**
 * 2.3 The battle of Agincourt
 */
function tna_oex_action()
{
    global $meta_box_oex, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="tna_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_box_oex['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
        '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];

                break;
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];

                break;

        }
        echo '</td><td>',
        '</td></tr>';
    }
    echo '</table>';


}

/**
 * 2.4 Online exhibitions index page
 */
function tna_oex_action_index()
{
    global $meta_box_oex_index, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="tna_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_box_oex_index['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
        '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;

        }
        echo '</td><td>',
        '</td></tr>';
    }
    echo '</table>';


}


/**
 * 2.5 Meeting minutes
 */
function year_of_meeting_html($post)
{
    wp_nonce_field('_year_of_meeting_nonce', 'year_of_meeting_nonce'); ?>

    <p>Please enter the year of the meeting you wish to upload</p>

    <p>
    <label for="year_of_meeting_meeting_year"><?php _e('Meeting year', 'year_of_meeting'); ?></label><br>
    <input type="text" name="year_of_meeting_meeting_year" id="year_of_meeting_meeting_year"
           value="<?php echo year_of_meeting_get_meta('year_of_meeting_meeting_year'); ?>">
    </p><?php
}


/**
 * 2.6 Meeting minutes - Previous minutes
 */
function previous_minutes_get_meta($value)
{
    global $post;

    $field = get_post_meta($post->ID, $value, true);
    if (!empty($field)) {
        return is_array($field) ? stripslashes_deep($field) : stripslashes(wp_kses_decode_entities($field));
    } else {
        return false;
    }
}

/**
 * 2.7 Meeting minutes - Previous minutes HTML
 */
function previous_minutes_html($post)
{
    wp_nonce_field('_previous_minutes_nonce', 'previous_minutes_nonce'); ?>

    <p>Enter the text for the previous minutes</p>

    <p>
    <textarea class="widefat" name="previous_minutes_type_content_here"
              id="previous_minutes_type_content_here"><?php echo previous_minutes_get_meta('previous_minutes_type_content_here'); ?></textarea>

    </p><?php
}

/**
 * 2.8 Meeting minutes - URL html
 */
function pdf_meetings_url_html($post)
{
    wp_nonce_field('_pdf_meetings_url_nonce', 'pdf_meetings_url_nonce'); ?>

    <p>Please enter the URL and year of the meeting minutes in the respective fields.</p>

    <p>
        <label for="pdf_meetings_url_meeting_url"><?php _e('Meeting Url', 'pdf_meetings_url'); ?></label><br>
        <input class="widefat" type="text" name="pdf_meetings_url_meeting_url" id="pdf_meetings_url_meeting_url"
               value="<?php echo pdf_meetings_url_get_meta('pdf_meetings_url_meeting_url'); ?>">
    </p>    <p>
    <label for="pdf_meetings_url_meeting_year"><?php _e('Meeting year', 'pdf_meetings_url'); ?></label><br>
    <input type="text" name="pdf_meetings_url_meeting_year" id="pdf_meetings_url_meeting_year"
           value="<?php echo pdf_meetings_url_get_meta('pdf_meetings_url_meeting_year'); ?>">
    </p><?php
}

/**
 * 2.9 Meeting minutes - PDF file size HTML
 */
function pdf_file_size_html($post)
{
    wp_nonce_field('_pdf_file_size_nonce', 'pdf_file_size_nonce'); ?>

    <p>Please enter the file size for the pdf's you wish to upload.</p>

    <p>
    <label for="pdf_file_size_pdf_file_size"><?php _e('Pdf file size', 'pdf_file_size'); ?></label><br>
    <input type="text" name="pdf_file_size_pdf_file_size" id="pdf_file_size_pdf_file_size"
           value="<?php echo pdf_file_size_get_meta('pdf_file_size_pdf_file_size'); ?>">
    </p><?php
}

/**
 * 2.9.1 Help with your research
 */
function help_with_your_research()
{
    global $meta_boxes_help, $post;
    // Use nonce for verification
    echo '<input type="hidden" name="tna_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';
    foreach ($meta_boxes_help['fields'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);
        echo '<tr>',
        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
        '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
                break;
            case 'textarea':
                echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];

        }
        echo '</td><td>',
        '</td></tr>';
    }
    echo '</table>';


}

/**
 * 3. Add custom meta box
 * -----------------------------------------------------
 * 3.1 TNA Custom meta box
 */
function tna_custom_metabox($post)
{
    //Home with external links
    $template = get_post_meta($post->ID, '_wp_page_template', true);
    if ('home-with-external-links.php' == $template) {
        global $meta_box;
        add_meta_box($meta_box['id'], $meta_box['title'], 'tna_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
    }

    //About us
    if ('about-us.php' == $template) {
        global $meta_box_about;
        add_meta_box($meta_box_about['id'], $meta_box_about['title'], 'tna_about_us_action', $meta_box_about['page'], $meta_box_about['context'], $meta_box_about['priority']);
    }

    //Archives sector
    if ('archives-sector.php' == $template) {
        global $meta_box_archives;
        add_meta_box($meta_box_archives['id'], $meta_box_archives['title'], 'tna_archives_action', $meta_box_about['page'], $meta_box_archives['context'], $meta_box_archives['priority']);
    }

    //The battle of Agincourt
    if ('online-exhibition.php' == $template) {
        global $meta_box_oex;
        add_meta_box($meta_box_oex['id'], $meta_box_oex['title'], 'tna_oex_action', $meta_box_oex['page'], $meta_box_oex['context'], $meta_box_oex['priority']);
    }

    // Online exhibitions
    if ('online-exhibitions' == get_post_type()) {
        //Online exhibitions index page
        global $meta_box_oex_index;
        add_meta_box($meta_box_oex_index['id'], $meta_box_oex_index['title'], 'tna_oex_action_index', $meta_box_oex_index['online-exhibition'], $meta_box_oex_index['context'], $meta_box_oex_index['priority']);
    }

    //Help with your research
    if ('help-with-your-research.php' == $template) {
        global $meta_boxes_help;
        add_meta_box($meta_boxes_help['id'], $meta_boxes_help['title'], 'help_with_your_research', $meta_boxes_help['page'], $meta_boxes_help['context'], $meta_boxes_help['priority']);
    }
}

add_action('add_meta_boxes_page', 'tna_custom_metabox');


/**
 * 3.2 Meeting minutes
 */
function year_of_meeting_metabox()
{
    global $post;

    $page_template = get_post_meta($post->ID, '_wp_page_template', true);

    if ($page_template == 'archive-minutes.php') {
        add_meta_box(
            'year_of_meeting-year-of-meeting',
            __('Year of meeting', 'year_of_meeting'),
            'year_of_meeting_html',
            'post',
            'normal',
            'default'
        );
    }

}

add_action('add_meta_boxes', 'year_of_meeting_metabox');

/**
 * 3.3 Meeting minutes - Previous minutes
 */
function meeting_box_previous()
{
    global $post;

    $page_template = get_post_meta($post->ID, '_wp_page_template', true);

    if ($page_template == 'meeting-landing.php') {
        add_meta_box(
            'previous_minutes-previous-minutes',
            __('Previous Minutes', 'previous_minutes'),
            'previous_minutes_html',
            'page',
            'side',
            'high'
        );
        remove_post_type_support(
            'page',
            'revisions',
            'custom-fields'
        );
    }

}

add_action('add_meta_boxes', 'meeting_box_previous');

/**
 * 3.4 Meeting minutes - Box URL
 */
function meeting_box_url()
{
    global $post;

    $page_template = get_post_meta($post->ID, '_wp_page_template', true);

    if ($page_template == 'archive-minutes.php') {
        add_meta_box(
            'pdf_meetings_url-pdf-meetings-url',
            __('PDF Meetings Url', 'pdf_meetings_url'),
            'pdf_meetings_url_html',
            'page',
            'normal',
            'high'
        );
        remove_post_type_support(
            'page',
            'editor',
            'revisions',
            'custom-fields'
        );
    }

}

add_action('add_meta_boxes', 'meeting_box_url');

/**
 * 3.5 Meeting minutes - Prints the box content
 */
function myfield_meta_box($post)
{
    $field_value = get_post_meta($post->ID, '_myfield_editor', false);
    wp_editor($field_value[0], '_myfield_editor',
        array(
            'media_buttons' => false,
            'textarea_rows' => 4,
            'tinymce' => array(
                // Items for the Visual Tab
                'toolbar1' => 'bold,italic,link,unlink,undo,redo,',
            ),
            'quicktags' => array(
                // Items for the Text Tab
                'buttons' => 'strong,em,underline'
            )
        )
    );
}

/**
 * 3.6 Meeting minutes - URL get meta
 */
function pdf_meetings_url_get_meta($value)
{
    global $post;

    $field = get_post_meta($post->ID, $value, true);
    if (!empty($field)) {
        return is_array($field) ? stripslashes_deep($field) : stripslashes(wp_kses_decode_entities($field));
    } else {
        return false;
    }
}

/**
 * 3.7 Meeting minutes - PDF file size
 */
function meeting_box_size()
{
    global $post;

    $page_template = get_post_meta($post->ID, '_wp_page_template', true);

    if ($page_template == 'archive-minutes.php') {
        add_meta_box(
            'pdf_file_size-pdf-file-size',
            __('PDF File Size', 'pdf_file_size'),
            'pdf_file_size_html',
            'page',
            'normal',
            'default'
        );
    }

}

add_action('add_meta_boxes', 'meeting_box_size');


/**
 * 3.8 Meeting minutes - PDF file size get meta
 */
function pdf_file_size_get_meta($value)
{
    global $post;

    $field = get_post_meta($post->ID, $value, true);
    if (!empty($field)) {
        return is_array($field) ? stripslashes_deep($field) : stripslashes(wp_kses_decode_entities($field));
    } else {
        return false;
    }
}

/**
 * 3.9 Keepers Gallery
 */
add_action('add_meta_boxes', 'myfield_add_custom_box');
// Do something with the data entered
add_action('save_post', 'myfield_save_postdata');
// Adds a box to the main column on the Post and Page edit screens
function myfield_add_custom_box()
{
    global $post;
    $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
    if ($pageTemplate == 'keepers-gallery-template.php') {
        add_meta_box('wp_editor_test_1_box', 'Textfield for advance info', 'myfield_meta_box');
    }
}

/**
 * 4. Save custom fields
 * -----------------------------------------------------
 * 4.1 TNA custpm meta box
 */

add_action('save_post', 'tna_save_data');
// Save data from meta box
function tna_save_data($post_id)
{
    // Add the global variables
    global $meta_box;
    global $meta_box_about;
    global $meta_box_archives;
    global $meta_boxes_help;
    global $meta_box_oex;
    global $meta_box_oex_index;

    // Verify nonce
    if (!wp_verify_nonce($_POST['tna_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // Check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    foreach ($meta_box['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }

    //About us
    foreach ($meta_box_about['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }

    //Archives Sector
    foreach ($meta_box_archives['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }

    //The battle of Agincourt
    foreach ($meta_box_oex['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }

    //Online exhibitions index page
    foreach ($meta_box_oex_index['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }

    //Help with your research
    foreach ($meta_boxes_help['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }


}

// check autosave
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post_id;
}

/**
 * 4.2 Meeting minutes
 */
function year_of_meeting_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['year_of_meeting_nonce']) || !wp_verify_nonce($_POST['year_of_meeting_nonce'], '_year_of_meeting_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['year_of_meeting_meeting_year']))
        update_post_meta($post_id, 'year_of_meeting_meeting_year', esc_attr($_POST['year_of_meeting_meeting_year']));
}

add_action('save_post', 'year_of_meeting_save');

/**
 * 4.3 Meeting minutes - Previous minutes
 */
function previous_minutes_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['previous_minutes_nonce']) || !wp_verify_nonce($_POST['previous_minutes_nonce'], '_previous_minutes_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['previous_minutes_type_content_here']))
        update_post_meta($post_id, 'previous_minutes_type_content_here', esc_attr($_POST['previous_minutes_type_content_here']));
}

add_action('save_post', 'previous_minutes_save');

/**
 * 4.4 Meeting minutes - PDF file size
 */
function pdf_file_size_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['pdf_file_size_nonce']) || !wp_verify_nonce($_POST['pdf_file_size_nonce'], '_pdf_file_size_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['pdf_file_size_pdf_file_size']))
        update_post_meta($post_id, 'pdf_file_size_pdf_file_size', esc_attr($_POST['pdf_file_size_pdf_file_size']));
}

add_action('save_post', 'pdf_file_size_save');

/**
 * 4.5 Meeting minutes - PDF URL size
 */
function pdf_meetings_url_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['pdf_meetings_url_nonce']) || !wp_verify_nonce($_POST['pdf_meetings_url_nonce'], '_pdf_meetings_url_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['pdf_meetings_url_meeting_url']))
        update_post_meta($post_id, 'pdf_meetings_url_meeting_url', esc_attr($_POST['pdf_meetings_url_meeting_url']));
    if (isset($_POST['pdf_meetings_url_meeting_year']))
        update_post_meta($post_id, 'pdf_meetings_url_meeting_year', esc_attr($_POST['pdf_meetings_url_meeting_year']));
}

add_action('save_post', 'pdf_meetings_url_save');

/**
 * 4.6 Meeting minutes myField
 */
function myfield_save_postdata($post_id)
{
    // verify if this is an auto save routine.
    // If it is our form has not been submitted, so we dont want to do anything
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    // Check permissions
    if ((isset ($_POST['post_type'])) && ('page' == $_POST['post_type'])) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }
    // OK, we're authenticated: we need to find and save the data
    if (isset ($_POST['_myfield_editor'])) {
        update_post_meta($post_id, '_myfield_editor', $_POST['_myfield_editor']);
    }
}

/**
 * 5. Adding styling to the custom fields inside dashboard
 * -----------------------------------------------------
 * 5.1 Home with external links
 */

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts()
{
    echo '<style>
		.form-table {
			padding:10px;
		}
		.form-table tr:nth-child(4n) {
			background:#eee;

		}
	  </style>';
}


/* Help with your research meta boxes */
/*function help_with_your_research_meta_boxes() {
    $meta_boxes_help = array(
            'id' => 'help_with_your_research',
            'title' => 'Help with your research',
            'page' => 'page',
            'context' => 'normal',
            'priority' => 'high',

            'fields' => array(
                array(
                    'name' => 'Description',
                    'id' => 'textarea_desc_one',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Link description',
                    'id' => 'link_desc_one',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Link URL',
                    'id' => 'link_desc_one_url',
                    'type' => 'text',
                )
            )
        );

    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
    } else {
        if (isset($_POST['post_ID'])) {
            $post_id = $_POST['post_ID'];
        } else {
            $post_id = '';
        }
    }

    // Adds meta boxes to Level 1 Landing page template
    $template_file = get_post_meta($post_id,'_wp_page_template',TRUE);
    if ($template_file == 'help-with-your-research.php') {
        foreach ( $meta_boxes_help as $meta_box ) {
            $help_with_research = new CreateMetaBox( $meta_box );
        }
    }


}
add_action( 'init', 'help_with_your_research_meta_boxes' );*/

/**
 * -----------------------------------------------------
 * 6. Lesson At A Glance Custom Metabox
 * -----------------------------------------------------
 */

function add_lesson_at_a_glance_metabox () {
	global $post;
	$page_template = get_post_meta($post->ID, '_wp_page_template', true);
	if ($page_template == 'education-lessons.php') {
		add_meta_box(
			"lesson-at-a-glance-metabox",
			"Lesson at a glance",
			"callback_lesson_at_a_glance_metabox",
			"page",
			"normal",
			"high"
		);
	}
}
add_action( 'add_meta_boxes', 'add_lesson_at_a_glance_metabox');

function callback_lesson_at_a_glance_metabox ($post) {
	wp_nonce_field("save_lesson_at_a_glance_metabox", "lesson_at_a_glance_nonce", true, true);

	$suggested_inquiry_questions_value = get_post_meta($post->ID, "suggested-inquiry-questions", true);
	$potential_activities_value = get_post_meta($post->ID, "potential-activities", true);

	echo "   <label for='suggested-inquiry-questions'>Suggested inquiry questions:</label>
                 <input type='text' id='suggested-inquiry-questions' name='suggested-inquiry-questions' value='" .esc_attr($suggested_inquiry_questions_value). "' class='widefat' />
                 <br><br>
                 <label for='potential-activities'>Potential activities:</label>
                 <input type='text' id='potential-activities' name='potential-activities' value='" .esc_attr($potential_activities_value). "' class='widefat'/>";
}

function save_lesson_at_a_glance_metabox ($post_id) {
	if(!isset($_POST['lesson_at_a_glance_nonce'])){ return; }
	if(!wp_verify_nonce( $_POST['lesson_at_a_glance_nonce'], 'save_lesson_at_a_glance_metabox' )){ return; }
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ return; }
	if( !current_user_can( 'edit_post', $post_id ) ){ return; }

	if(isset( $_POST["suggested-inquiry-questions"] )){
		$suggested_inquiry_questions_data = sanitize_text_field( $_POST["suggested-inquiry-questions"]);
		update_post_meta($post_id, "suggested-inquiry-questions", $suggested_inquiry_questions_data);
	}
	if(isset( $_POST["potential-activities"] )){
		$potential_activities_data = sanitize_text_field( $_POST["potential-activities"]);
		update_post_meta($post_id, "potential-activities", $potential_activities_data);
	}
}

add_action('save_post', 'save_lesson_at_a_glance_metabox');