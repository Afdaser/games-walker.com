<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CNN_Theme
 */

get_header();
?>

	<section id="primary" class="content-area search-results-page">
		<main id="main" class="site-main">
			<div class="news-block search-results-block">
				<div class="container">
					<div class="search-results-shell">

		<?php if ( have_posts() ) : ?>

			<header class="page-header search-results-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Поиск для: %s', 'cnn-theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<div class="line ads search-results-ads">
					<!-- GW_GOL -->
					<!-- Ініціалізація слота відбувається централізовано у main.js. -->
					<ins class="adsbygoogle"
     					style="display:block"
     					data-ad-client="ca-pub-2328584419845560"
     					data-ad-slot="9571991316"
     					data-ad-format="auto"
     					data-full-width-responsive="true"></ins>
                </div>
			<?php
			/* Start the Loop */
			echo '<div class="search-results-list">'; // Обгортаємо результати, щоб стабілізувати сітку на desktop/mobile.

			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			echo '</div>';

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();