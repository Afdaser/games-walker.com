<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNN_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<!-- Мініатюра в картці підтримує візуальну консистентність із рештою контенту. -->
		<a class="search-result-card__thumb" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'medium_large' ); ?>
		</a>
	<?php endif; ?>

	<div class="search-result-card__body">
		<header class="entry-header search-result-card__header">
			<?php the_title( sprintf( '<h2 class="entry-title search-result-card__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta search-result-card__meta">
				<?php
				cnn_theme_posted_on();
				cnn_theme_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary search-result-card__summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer search-result-card__footer">
			<?php cnn_theme_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
