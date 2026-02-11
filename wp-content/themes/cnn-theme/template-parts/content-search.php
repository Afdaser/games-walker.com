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

			<div class="entry-meta">
				<?php
				// Для пошукової видачі виводимо "опубликовано в" + категорію або батьківську сторінку.
				$published_in = '';

				if ( 'post' === get_post_type() ) {
					$categories = get_the_category_list( ', ' );
					if ( $categories ) {
						$published_in = $categories;
					}
				} elseif ( 'page' === get_post_type() ) {
					$parent_id = wp_get_post_parent_id( get_the_ID() );
					if ( $parent_id ) {
						$published_in = sprintf(
							'<a href="%1$s">%2$s</a>',
							esc_url( get_permalink( $parent_id ) ),
							esc_html( get_the_title( $parent_id ) )
						);
					}
				}

				if ( $published_in ) {
					echo wp_kses_post( sprintf( 'опубликовано в %s', $published_in ) );
				}
				?>
			</div><!-- .entry-meta -->
		</div><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<div class="entry-footer">
			<a class="search-result-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Читать дальше', 'cnn-theme' ); ?></a>
		</div><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->