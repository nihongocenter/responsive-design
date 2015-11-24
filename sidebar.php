<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package nihongo-center-responsive
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<!-- Special offer -->
	<!--<aside class="widget bubble">
		<h2>Special Offer 2015</h2>
		<a href="/early-registration-offer-october-2015/"><img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/img/special-offer.jpg" alt="Special Offer 2015" /></a>
	</aside>-->
	<!--<aside class="widget bubble">
		<h2>Navigation</h2>

	</aside>-->

	<!-- Apply now -->
	<a href="http://my.nihongo-center.com" target="_blank" class="widget bubble apply-now">
		<?php if(ICL_LANGUAGE_CODE == "fr") { ?>
			Postuler
		<?php } else { ?>
			Apply now!
		<?php } ?>
	</a>

	<!-- Recruitment -->
	<?php if(ICL_LANGUAGE_CODE == "ja"): ?>
		<aside class="widget bubble">
			<a href="/recruit/"><img class="aligncenter" src="/wp-content/themes/nihongo-center-responsive/img/recruit.jpg" alt="Job Recruitment" /></a>
		</aside>
	<?php endif; ?>

	<!-- Social Media -->
	<aside class="widget bubble sidebar-social-media">
		<a href="https://www.facebook.com/NihongoCenterKyoto" target="_blank" class="sidebar-social-media-link facebook">
			<img class="sidebar-social-media-icon" src="<?php echo get_template_directory_uri(); ?>/img/social-media/facebook.png" alt="Facebook" width="32" height="32">
		</a>

		<a href="https://plus.google.com/+NihongoCenterJapaneseLanguageSchool%E4%BA%AC%E9%83%BD%E5%B8%82/about" target="_blank" class="sidebar-social-media-link googleplus">
			<img class="sidebar-social-media-icon" src="<?php echo get_template_directory_uri(); ?>/img/social-media/googleplus.png" alt="Google+" width="32" height="32">
		</a>

		<a href="https://twitter.com/NihongoCenterJP" target="_blank" class="sidebar-social-media-link twitter" rel="publisher">
			<img class="sidebar-social-media-icon" src="<?php echo get_template_directory_uri(); ?>/img/social-media/twitter.png" alt="Twitter" width="32" height="32">
		</a>

		<a href="/contact" class="sidebar-social-media-link mail-button">
			<img class="sidebar-social-media-icon" src="<?php echo get_template_directory_uri(); ?>/img/social-media/email.png" alt="E-Mail" width="32" height="32">
		</a>
	</aside>

	<!-- Youtube -->
	<aside class="widget youtube-introduction bubble">
		<h2>Youtube</h2>
		<a href="https://www.youtube.com/channel/UCESbRxjpk764iuXmLt9soxQ" target="_blank">
			<img class="aligncenter" src="/wp-content/themes/nihongo-center-responsive/img/youtube-english-138p.jpg" alt="Japanese Language School: Nihongo Center (English Introduction)" />
		</a>
	</aside>

	<!-- Access -->
	<aside class="widget bubble">
		<a href="/access"><img class=" aligncenter" src="<?php echo get_template_directory_uri(); ?>/img/access.png" alt="Access" /></a>
	</aside>

	<!-- Student Blog -->
	<aside class="widget bubble">
		<h2>Blog</h2>
		<a href="http://blog.nihongo-center.com/" target="_blank"><img class=" aligncenter" src="<?php echo get_template_directory_uri(); ?>/img/student-blog.jpg" alt="Student Blog" /></a>
	</aside>

	<!-- Study Kyoto -->
	<aside class="widget bubble">
		<a href="https://www.studykyoto.jp" target="_blank"><img class=" aligncenter" src="<?php echo get_template_directory_uri(); ?>/img/studykyoto.png" alt="Study Kyoto" /></a>
	</aside>
</div><!-- #secondary -->
