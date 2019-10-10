<?php
/**
 * Plugin Name: Notification
 *
 * @package Notification
 */

/**
 * Add sub menu page to the Settings menu.
 */
function my_admin_menu() {

	// add_options_page => page_title:string, menu_title:string, capability:string, menu_slug:string, function:callable.
	add_options_page( __( 'My Plugin Options', 'textdomain' ), __( 'My Plugin Options', 'textdomain' ), 'manage_options', 'my-plugin', 'my_options_page' );
	// also can use => add_submenu_page( parent_slug, page_title, menu_title, capability, menu_slug, function).
}
add_action( 'admin_menu', 'my_admin_menu' );

/**
 * Triggered before any other hook when a user accesses the admin area.
 */
function my_admin_init() {
	/*
	 * Register a setting and its data.
	 *
	 * With input validation:
	 * register_setting( 'my-settings-group', 'my-plugin-settings', 'my_settings_validate_and_sanitize' );
	 */
	register_setting( 'my-settings-group', 'my-plugin-settings' );

	/*
	 * Add a new section to a settings page.
	 * add_settings_section( $id, $title, $callback, $page );
	 */
	add_settings_section( 'section-1', __( 'Section One', 'textdomain' ), 'section_1_callback', 'my-plugin' );
	add_settings_section( 'section-2', __( 'Section Two', 'textdomain' ), 'section_2_callback', 'my-plugin' );

	/*
	 * Add a new field to a section of a settings page.
	 * add_settings_field( $id, $title, $callback, $page, $section, $args );
	 */
	add_settings_field( 'field-1-1', __( 'Field One', 'textdomain' ), 'field_1_1_callback', 'my-plugin', 'section-1' );
	add_settings_field( 'field-1-2', __( 'Field Two', 'textdomain' ), 'field_1_2_callback', 'my-plugin', 'section-1' );
	// Nesting.
	add_settings_field( 'field-2-1', __( 'Field One', 'textdomain' ), 'field_2_1_callback', 'my-plugin', 'section-2' );
	add_settings_field( 'field-2-2', __( 'Field Two', 'textdomain' ), 'field_2_2_callback', 'my-plugin', 'section-2' );

}
add_action( 'admin_init', 'my_admin_init' );

/**
 * THE ACTUAL PAGE DISPLAY.
 */
function my_options_page() {
	?>
	<div class="wrap">
		<h2><?php _e( 'My Plugin Options', 'textdomain' ); ?></h2>
		<form action="options.php" method="POST">
		<?php settings_fields( 'my-settings-group' ); ?>
		<?php do_settings_sections( 'my-plugin' ); ?>
		<?php submit_button(); ?>
		</form>
	</div>
		<?php
}

/**
 * THE SECTIONS
 * Hint: You can omit using add_settings_field() and instead
 * directly put the input fields into the sections.
 */
function section_1_callback() {
	_e( 'Some help text regarding Section One goes here.', 'textdomain' );
}
function section_2_callback() {
	_e( 'Some help text regarding Section Two goes here.', 'textdomain' );
}

/**
 * THE FIELDS
 */
function field_1_1_callback() {

	$settings = (array) get_option( 'my-plugin-settings' );
	$field    = 'field_1_1';
	$value    = esc_attr( $settings[ $field ] );

	echo '<input type="text" name="my-plugin-settings[' . esc_attr( $field ) . ']" value="' . esc_attr( $value ) . '" />';
}
function field_1_2_callback() {

	$settings = (array) get_option( 'my-plugin-settings' );
	$field    = 'field_1_2';
	$value    = esc_attr( $settings[ $field ] );

	echo '<input type="checkbox" name="my-plugin-settings[' . esc_attr( $field ) . ']" value="1" ' . checked( 1, $settings['field_1_2'], false ) . ' />';
	// checked( ( in_array( $settings['field_1_2'], get_option( 'my-plugin-settings' ) ) ), true, false );

}
function field_2_1_callback() {

	$settings = (array) get_option( 'my-plugin-settings' );
	$field    = 'field_2_1';
	$value    = esc_attr( $settings[ $field ] );

	echo "<input type='text' name='my-plugin-settings[$field]' value='$value' />";
}
function field_2_2_callback() {

	$settings = (array) get_option( 'my-plugin-settings' );
	$field    = 'field_2_2';
	$value    = esc_attr( $settings[ $field ] );

	echo "<input type='text' name='my-plugin-settings[$field]' value='$value' />";
}

/**
 * The notification.
 * If checkbox checked notification will be show.
 */
$settings = (array) get_option( 'my-plugin-settings' );
if( ! isset( $settings['field_1_2'] ) ) $settings['field_1_2'] = 0;
if ( 1 == $settings['field_1_2'] ) {
	/**
	 * Simple Admin Notification.
	 */
	function sample_admin_notice__success() {
		$settings = (array) get_option( 'my-plugin-settings' );
		?>
		<div class="notice notice-success is-dismissible">
			<p><?php _e( $settings['field_1_1'], 'sample-text-domain' ); ?></p>
		</div>
			<?php
	}
	add_action( 'admin_notices', 'sample_admin_notice__success' );
}

/**
 * INPUT VALIDATION:
 *
 * @param [mix] $input It seems the data is passed through the sanitize function twice.
 */
function my_settings_validate_and_sanitize( $input ) {

	$settings = (array) get_option( 'my-plugin-settings' );

	if ( $some_condition == $input['field_1_1'] ) {
		$output['field_1_1'] = $input['field_1_1'];
	} else {
		add_settings_error( 'my-plugin-settings', 'invalid-field_1_1', 'You have entered an invalid value into Field One.' );
	}

	if ( $some_condition == $input['field_1_2'] ) {
		$output['field_1_2'] = $input['field_1_2'];
	} else {
		add_settings_error( 'my-plugin-settings', 'invalid-field_1_2', 'You have entered an invalid value into Field One.' );
	}

	// and so on for each field.
	return $output;
}
/**
 * Reference→ https://gist.github.com/annalinneajohansson/5290405
 * https://code.tutsplus.com/tutorials/the-wordpress-settings-api-part-8-validation-sanitisation-and-input-i--wp-25361
 *
 * Hot example: https://hotexamples.com/examples/-/-/add_settings_field/php-add_settings_field-function-examples.html
 * https://gist.github.com/DavidWells/4653358
 * https://gist.github.com/annalinneajohansson/5290405
 */
