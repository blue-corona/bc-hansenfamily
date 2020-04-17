<?php
/**
 * Meetze Plumbing: Color Filter for overriding the colors schemes in a child theme
 *
 * @package WordPress
 * @subpackage meetzeplumbing
 * @since 1.0
 */

/**
 * Define default color filters.
 */

define( 'meetzeplumbing_DEFAULT_HUE', 199 );        // H
define( 'meetzeplumbing_DEFAULT_SATURATION', 100 ); // S
define( 'meetzeplumbing_DEFAULT_LIGHTNESS', 33 );   // L

define( 'meetzeplumbing_DEFAULT_SATURATION_SELECTION', 50 );
define( 'meetzeplumbing_DEFAULT_LIGHTNESS_SELECTION', 90 );
define( 'meetzeplumbing_DEFAULT_LIGHTNESS_HOVER', 23 );

/**
 * The default hue (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default hue
 */
function meetzeplumbing_get_default_hue() {
	return apply_filters( 'meetzeplumbing_default_hue', meetzeplumbing_DEFAULT_HUE );
}

/**
 * The default saturation (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default saturation
 */
function meetzeplumbing_get_default_saturation() {
	return apply_filters( 'meetzeplumbing_default_saturation', meetzeplumbing_DEFAULT_SATURATION );
}

/**
 * The default lightness (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default lightness
 */
function meetzeplumbing_get_default_lightness() {
	return apply_filters( 'meetzeplumbing_default_lightness', meetzeplumbing_DEFAULT_LIGHTNESS );
}

/**
 * The default saturation (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default saturation selection
 */
function meetzeplumbing_get_default_saturation_selection() {
	return apply_filters( 'meetzeplumbing_default_saturation_selection', meetzeplumbing_DEFAULT_SATURATION_SELECTION );
}

/**
 * The default lightness (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default lightness selection
 */
function meetzeplumbing_get_default_lightness_selection() {
	return apply_filters( 'meetzeplumbing_default_lightness_selection', meetzeplumbing_DEFAULT_LIGHTNESS_SELECTION );
}

/**
 * The default lightness hover (as in hsl) used when hovering over links throughout this theme
 *
 * @return number the default lightness hover
 */
function meetzeplumbing_get_default_lightness_hover() {
	return apply_filters( 'meetzeplumbing_default_lightness_hover', meetzeplumbing_DEFAULT_LIGHTNESS_HOVER );
}

function meetzeplumbing_has_custom_default_hue() {
	return meetzeplumbing_get_default_hue() !== meetzeplumbing_DEFAULT_HUE;
}
