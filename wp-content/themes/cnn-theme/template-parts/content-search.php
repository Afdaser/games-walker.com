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
	<a class="search-result-thumb" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium_large' ); ?>
		<?php else : ?>
			<span class="search-result-thumb-placeholder"><?php esc_html_e( 'Без зображення', 'cnn-theme' ); ?></span>
		<?php endif; ?>
	</a>

	<div class="search-result-content">
		<div class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				// Показуємо лише релевантний мінімум метаданих для компактнішої видачі.
				cnn_theme_posted_on();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<div class="entry-footer">
			<a class="search-result-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Читать дальше', 'cnn-theme' ); ?></a>
		</div><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->