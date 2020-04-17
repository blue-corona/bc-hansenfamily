<?php
/**
 * Meetze Plumbing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Meetze_Plumbing
 * @since 1.0.0
 */

/**
 * Meetze Plumbing only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'meetzeplumbing_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function meetzeplumbing_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Meetze Plumbing, use a find and replace
		 * to change 'meetzeplumbing' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'meetzeplumbing', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'meetzeplumbing' ),
				'footer' => __( 'Footer Menu', 'meetzeplumbing' ),
				'social' => __( 'Social Links Menu', 'meetzeplumbing' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'meetzeplumbing' ),
					'shortName' => __( 'S', 'meetzeplumbing' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'meetzeplumbing' ),
					'shortName' => __( 'M', 'meetzeplumbing' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'meetzeplumbing' ),
					'shortName' => __( 'L', 'meetzeplumbing' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'meetzeplumbing' ),
					'shortName' => __( 'XL', 'meetzeplumbing' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		$default_hue     = meetzeplumbing_get_default_hue();
		$saturation      = apply_filters( 'meetzeplumbing_custom_colors_saturation', 100 );
		$lightness       = apply_filters( 'meetzeplumbing_custom_colors_lightness', 33 );
		$lightness_hover = apply_filters( 'meetzeplumbing_custom_colors_lightness_hover', 23 );
		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'meetzeplumbing' ),
					'slug'  => 'primary',
					'color' => meetzeplumbing_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, $lightness ),
				),
				array(
					'name'  => __( 'Secondary', 'meetzeplumbing' ),
					'slug'  => 'secondary',
					'color' => meetzeplumbing_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'meetzeplumbing' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'meetzeplumbing' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'meetzeplumbing' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'meetzeplumbing_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function meetzeplumbing_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'meetzeplumbing' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'meetzeplumbing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'meetzeplumbing_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function meetzeplumbing_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'meetzeplumbing_content_width', 640 );
}
add_action( 'after_setup_theme', 'meetzeplumbing_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function meetzeplumbing_scripts() {
	wp_register_style( 'meetzeplumbing-fonts', get_template_directory_uri() . '/css/fonts.css' );
	wp_register_style( 'meetzeplumbing-combine', get_template_directory_uri() . '/css/combine.css' );
	wp_register_style( 'meetzeplumbing-style-guide', get_template_directory_uri() . '/style-guide.css' );
	

	wp_enqueue_style( 'meetzeplumbing-fonts', get_stylesheet_uri() );
	wp_enqueue_style( 'meetzeplumbing-combine', get_stylesheet_uri() );
	wp_enqueue_style( 'meetzeplumbing-style-guide', get_stylesheet_uri() );
	
	wp_enqueue_style( 'meetzeplumbing-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_register_style( 'meetzeplumbing-responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'meetzeplumbing-responsive', get_stylesheet_uri() );

	wp_style_add_data( 'meetzeplumbing-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'meetzeplumbing-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.1', true );
		wp_enqueue_script( 'meetzeplumbing-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_script( 'meetzeplumbing-bootstrap-min', get_theme_file_uri( '/js/bootstrap.min.js' ));
	wp_enqueue_script( 'meetzeplumbing-slick', get_theme_file_uri( '/js/slick.js' ));
	wp_enqueue_script( 'meetzeplumbing-selectric', get_theme_file_uri( '/js/jquery.selectric.min.js' ));
	wp_enqueue_script( 'meetzeplumbing-common', get_theme_file_uri( '/js/common.js' ));

	wp_enqueue_style( 'meetzeplumbing-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'meetzeplumbing_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function meetzeplumbing_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'meetzeplumbing_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function meetzeplumbing_editor_customizer_styles() {

	wp_enqueue_style( 'meetzeplumbing-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'meetzeplumbing-editor-customizer-styles', meetzeplumbing_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'meetzeplumbing_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function meetzeplumbing_colors_css_wrap() {

	// Only bother if we haven't customized the color.
	if ( 'default' === get_theme_mod( 'primary_color', 'default' ) && ! meetzeplumbing_has_custom_default_hue() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = meetzeplumbing_get_default_hue();
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', $primary_color );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo meetzeplumbing_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'meetzeplumbing_colors_css_wrap' );

/**
 * Default color filters.
 */
require get_template_directory() . '/inc/color-filters.php';

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-meetzeplumbing-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-meetzeplumbing-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


$setting_post_id = 47;
function my_acf_load_value( $value, $setting_post_id, $field ) 
{
    return preg_replace("/\D+/", "", $value);
}
add_filter('acf/load_value/name=phone_number', 'my_acf_load_value', 10, 3);
$phonnum = get_field( "phone_number", $setting_post_id );
