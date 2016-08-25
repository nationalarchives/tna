<?php
// Notification banner
// When enabled, via dashboard banner settings page, displays a notification banner at the top of the page before <header>
// Utilising WP Settings API (https://codex.wordpress.org/Settings_API)
if ( ! function_exists( 'tna_notification_banner' ) ) :
	function tna_notification_banner() {
		$enable = get_option('enable_banner');
		$notice_title = get_option('banner_title');
		$notice_text = get_option('banner_text');
		if ( $enable && $notice_title && is_front_page() ) {
			?>
			<div class="tna-notification-banner">
				<div class="container">
					<div class="notice">
						<strong class="title"><?php echo $notice_title; ?></strong>
						<?php echo $notice_text; ?>
					</div>
				</div>
			</div>
			<?php
		}
		else {
			// do nothing
		}
	}
endif;

// Populates the option page
function tna_notification_banner_settings_page() {
	?>
	<div class="wrap">
		<h1>Notification banner</h1>
		<form method="post" action="options.php">
			<?php
			settings_fields('section');
			do_settings_sections('banner-settings');
			submit_button();
			?>
		</form>
	</div>
	<?php
}

// Creates menu item in the Dashboard
function add_tna_notification_banner_menu_item() {
	add_options_page('Notification banner settings', 'Notification banner', 'manage_options', 'my-setting-admin', 'tna_notification_banner_settings_page', null, 99);
}
add_action('admin_menu', 'add_tna_notification_banner_menu_item');

// Callback functions for form
function tna_notification_banner_enable() {
	if (get_option('enable_banner')) {
		$checked = 'checked="checked"';
	} else {
		$checked = '';
	}
	?>
	<input type="checkbox" name="enable_banner" value="1" <?php echo $checked; ?> />
	<?php
}

function tna_notification_banner_title() {
	?>
	<input type="text" name="banner_title" id="banner_title" value="<?php echo get_option('banner_title'); ?>" />
	<p>Field required to enable banner</p>
	<?php
}

function tna_notification_banner_text() {
	wp_editor( get_option('banner_text'), 'banner_text',
		array(
			'media_buttons' => false,
			'textarea_rows' => 4,
			'tinymce' => array( 'toolbar1'=> 'bold,link,unlink' ),
			'quicktags' => false,
			'wpautop' => false
		)
	);
}

// Adds section, fields and settings to options page in Dashboard > Settings > Notification banner
function display_tna_notification_banner_panel_fields() {
	add_settings_section('section', 'Banner settings', null, 'banner-settings');

	add_settings_field('enable_banner', 'Enable banner on home page', 'tna_notification_banner_enable', 'banner-settings', 'section');
	add_settings_field('banner_title', 'Banner title', 'tna_notification_banner_title', 'banner-settings', 'section');
	add_settings_field('banner_text', 'Banner text', 'tna_notification_banner_text', 'banner-settings', 'section');

	register_setting('section', 'enable_banner');
	register_setting('section', 'banner_title');
	register_setting('section', 'banner_text');
}
add_action('admin_init', 'display_tna_notification_banner_panel_fields');
