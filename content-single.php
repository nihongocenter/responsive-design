<?php
/**
 * @package nihongo-center-responsive
 */
?>

<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 itemprop="name" class="entry-title">', '</h2>' ); ?>

		<div class="entry-meta">
			<?php nihongo_center_responsive_posted_on(); ?>
		</div><!-- .entry-meta -->
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
		<?php nihongo_center_responsive_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
