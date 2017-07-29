<?php
/**
 * The theme option name is set as 'options-theme-customizer' here.
 * In your own project, you should use a different option name.
 * I'd recommend using the name of your theme.
 *
 * This option name will be used later when we set up the options
 * for the front end theme customizer.
 */

function optionsframework_option_name() {

	$optionsframework_settings = get_option("optionsframework");

	// Edit 'options-theme-customizer' and set your own theme name instead
	$optionsframework_settings["id"] = "wp-maintenance";
	update_option("optionsframework", $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 */

function optionsframework_options() {

	$options = array();

	$options[] = array( "name" => "Variables",
		"type" => "heading" );

	$options["icon"] = array(
		"name" => "Fontawesome Icon",
		"id" => "icon",
		"std" => "fa-cogs",
		"type" => "text");

	$options["claim"] = array(
		"name" => "Claim",
		"id" => "claim",
		"std" => "Sorry, we are down for scheduled maintenance. Come back soon!",
		"type" => "text");

	return $options;
}

add_action("customize_register", "options_theme_customizer_register");

function options_theme_customizer_register($wp_customize) {
	$options = optionsframework_options();
}
