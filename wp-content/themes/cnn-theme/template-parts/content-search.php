<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNN_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'middle-block tablet-50 mobile-100 search-result-item' ); ?>>
	<?php // Узгоджуємо картку пошуку з існуючим візуальним блоком новин теми. ?>
	<a class="img search-result-thumb" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
		<?php
		if ( has_post_thumbnail() ) {
			cnn_theme_post_thumbnail();
		} else {
			echo '<img src="' . esc_url( get_template_directory_uri() . '/img/default-image.png' ) . '" alt="' . esc_attr__( 'Изображение отсутствует', 'cnn-theme' ) . '">';
		}
		?>
	</a>

	<div class="search-result-body">
		<?php the_title( sprintf( '<h2 class="title search-result-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="author date search-result-meta">
			<?php
			cnn_theme_posted_on();
			?>
		</div>
		<?php endif; ?>

		<div class="news-text search-result-summary">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
