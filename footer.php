<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nihongo-center-responsive
 */
?>

	</div><!-- #content -->
	
	<?php if(!wp_is_mobile()): ?>
		<footer id="footer-navigation-container">
			<nav id="footer-navigation" class="footer-navigation" role="navigation">
				<h2>Footer Navigation</h2>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
		</footer>
	<?php endif; ?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" itemscope itemtype="http://schema.org/EducationalOrganization">
			&copy; <?php echo date('Y'); ?>
			<a href="/"><span itemscope itemtype="http://schema.org/Language"><span itemprop="name">Japanese</span></span> School - <span itemprop="name">Nihongo Center</span></a>

			<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress">356 Tominaga-cho, South Bukkoh-ji Kawaramachi Street</span>
				|
				<span itemprop="addressLocality">Shimogyo-ku, Kyoto</span>
				|
				<span itemprop="addressCountry">JAPAN</span>
				|
				<span itemprop="postalCode">600-8023</span>
			</address>
		</div><!-- .site-info -->

		<div class="social-media">
			<a href="https://www.facebook.com/NihongoCenterKyoto" target="_blank" class="social-media-link">
				<img class="social-media-icon" src="<?php echo get_template_directory_uri(); ?>/img/social-media/facebook.png" alt="Facebook" width="32" height="32">
			</a>

			<a href="https://plus.google.com/+NihongoCenterJapaneseLanguageSchool%E4%BA%AC%E9%83%BD%E5%B8%82/about" target="_blank" class="social-media-link">
				<img class="social-media-icon" src="<?php echo get_template_directory_uri(); ?>/img/social-media/googleplus.png" alt="Google+" width="32" height="32">
			</a>

			<a href="https://twitter.com/NihongoCenterJP" target="_blank" class="social-media-link" rel="publisher">
				<img class="social-media-icon" src="<?php echo get_template_directory_uri(); ?>/img/social-media/twitter.png" alt="Twitter" width="32" height="32">
			</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php if(wp_is_mobile()): ?>
	<script>
		function openSideMenu() {
			jQuery("#side-navigation").show();
			jQuery(".swipe-message").hide();
			sessionStorage.swipeUnderstood = true;
		}

		function closeSideMenu() {
			jQuery("#side-navigation").hide();
		}

		document.addEventListener('DOMContentLoaded', function() {
			var $page = jQuery("#page");

			$page.on("swiperight", openSideMenu);
			$page.on("swipeleft", closeSideMenu);

			if(sessionStorage.swipeUnderstood) {
				jQuery(".swipe-message").hide();
			}
		});
	</script>
<?php endif; ?>

</body>
</html>
