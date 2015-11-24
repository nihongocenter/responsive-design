<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package nihongo-center-responsive
 */
?>

<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			$isFrontPage = is_front_page();
		?>
		<?php if($isFrontPage): ?>
			<?php the_title( '<h2 itemprop="name" class="entry-title front-page-title">', '</h2>' ); ?>

			<!-- Preloaded images, not shown -->
			<div>
				<img class="preload-image" src="/wp-content/uploads/2014/07/pic_slider04.jpg" alt="Preload image" />
				<img class="preload-image" src="/wp-content/uploads/2014/07/pic_slider07.jpg" alt="Preload image" />
				<img class="preload-image" src="/wp-content/uploads/2014/07/pic_slider06.jpg" alt="Preload image" />
			</div>
		<?php else: ?>
			<?php the_title( '<h2 itemprop="name" class="entry-title">', '</h2>' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nihongo-center-responsive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'nihongo-center-responsive' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
	if($isFrontPage)
		require("frontpage.php");
?>
