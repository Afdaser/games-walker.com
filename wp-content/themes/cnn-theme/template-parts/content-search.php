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
	<div class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			// Показуємо категорії російською замість англомовного "Posted on".
			$categories_list = get_the_category_list( esc_html__( ', ', 'cnn-theme' ) );
			if ( $categories_list ) {
				echo '<span class="cat-links">' . sprintf( esc_html__( 'Категории: %s', 'cnn-theme' ), wp_kses_post( $categories_list ) ) . '</span>';
			}
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<?php cnn_theme_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<div class="entry-footer">
		<?php cnn_theme_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
