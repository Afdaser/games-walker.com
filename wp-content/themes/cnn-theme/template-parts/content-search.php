<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNN_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="search-result-card">
		<?php
		// Виводимо мініатюру першою, щоб у мобільній версії картка виглядала послідовно.
		cnn_theme_post_thumbnail();
		?>

		<div class="search-result-content">
			<div class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
					cnn_theme_posted_on();
					cnn_theme_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</div><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<div class="entry-footer">
				<?php cnn_theme_entry_footer(); ?>
			</div><!-- .entry-footer -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
