<?php
	header('Content-Type: text/css');

	// Clamp color value
	function c($val) {
		if($val > 255)
			return 255;

		if($val < 0)
			return 0;

		return intval($val);
	}

	/*$r = 255;
	$g = 228;
	$b = 186;*/
	$r = 174;
	$g = 35;
	$b = 15;

	$rgb = "$r, $g, $b";
	$rgbHover = c($r * 1.08) . ", " . c($g * 1.08) . ", " . c($b * 1.08);
	$rgbDark = c($r * 0.9) . ", " . c($g * 0.9) . ", " . c($b * 0.9);
	$rgbText = "32, 32, 32";
	$rgbTextHover = "240, 240, 240";

	// Include styles
	$dir = dirname(__FILE__);

	//$plugin = $dir . "/../../../plugins/";
	//$upload = $dir . "/../../../uploads/";

	require($dir . "/base.css");
	echo "\n";

	require($dir . "/menu.css");
	echo "\n";

	require($dir . "/news.css");
	echo "\n";

	require($dir . "/page-specific.css");
	echo "\n";

	require($dir . "/social-media.css");
	echo "\n";

	require($dir . "/contact-form.css");
	echo "\n";

	require($dir . "/language-selector.css");
	echo "\n";

	require($dir . "/flex-bubble.css");
	echo "\n";

	require($dir . "/chevron.css");
	echo "\n";

	//include($dir . "/bootstrap.min.css");
	//include($dir . "/open-sans.css");
	//include($dir . "/font-awesome.css");

	//include($dir . "/layout.css");
	//include($dir . "/menu-styles.css");
	//include($dir . "/non-responsive.css");

	//include($plugin . "sitepress-multilingual-cms/res/css/language-selector.css");
	//include($plugin . "LayerSlider/static/css/layerslider.css");
	//include($plugin . "contact-form-7/includes/css/styles.css");
	//include($upload . "layerslider.custom.css");
?>