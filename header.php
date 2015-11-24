<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nihongo-center-responsive
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/japanese-language-school.ico">

<?php
	define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', 1);
	/*add_action('wp_enqueue_scripts', 'removeResources');

	function removeResources() {
		
	}

	function rmStyle($name) {
		$ar = array($name, $name . "-css");
		wp_dequeue_style($ar);
		wp_deregister_style($ar);
	}*/

	wp_enqueue_style('ncenter', get_template_directory_uri() . "/css/style.css.php");

	if(wp_is_mobile()) {
		wp_enqueue_script('jquery-mobile', get_template_directory_uri() . "/mobile/jquery.mobile.custom.min.js", array('jquery'));
		//wp_enqueue_style('ncenter-mobile-structure', get_template_directory_uri() . "/js/jquery.mobile.custom/jquery.mobile.custom.structure.min.css");
		//wp_enqueue_style('ncenter-mobile-theme', get_template_directory_uri() . "/js/jquery.mobile.custom/jquery.mobile.custom.theme.min.css");
	}
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site" data-role="page">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'nihongo-center-responsive' ); ?></a>

	<header id="masthead" class="site-header bubble" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<h1><?php echo get_bloginfo('name'); ?></h1>
				<img src="<?php echo get_template_directory_uri(); ?>/img/japanese-language-school.png" width="367" height="44" alt="Japanese Language School in Kyoto: Nihongo Center">
			</a>
		</div>

		<?php if(!wp_is_mobile()): ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h2>Navigation</h2>
				<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><?php _e( 'Primary Menu', 'nihongo-center-responsive' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		<?php endif; ?>
	</header><!-- #masthead -->

	<?php if(wp_is_mobile()): ?>
		<nav id="side-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

		<a href="javascript:openSideMenu();" class="bubble swipe-message">
			Swipe to the right to open the menu!
		</a>
	<?php endif; ?>

	<div id="content" class="site-content">
