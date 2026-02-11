<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNN_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'middle-block tablet-50 mobile-100 search-result-card' ); ?>>
	<a class="img" href="<?php the_permalink(); ?>" rel="bookmark" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
		<?php cnn_theme_post_thumbnail(); ?>
	</a>

	<div class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title img-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</div><!-- .entry-header -->

	<div class="entry-summary news-text">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<div class="entry-footer text-small">
		<?php cnn_theme_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
