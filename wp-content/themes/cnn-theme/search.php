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

	<section id="primary" class="content-area search-page">
		<!-- Окремий контейнер для сторінки пошуку, щоб зберегти стиль сайту. -->
		<main id="main" class="site-main container search-page__main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header search-page__header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Поиск для: %s', 'cnn-theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<div class="line ads search-page__ads">
					<!-- GW_GOL -->
					<!-- Ініціалізація слота відбувається централізовано у main.js. -->
					<ins class="adsbygoogle"
     					style="display:block"
     					data-ad-client="ca-pub-2328584419845560"
     					data-ad-slot="9571991316"
     					data-ad-format="auto"
     					data-full-width-responsive="true"></ins>
                </div>
			<!-- Сітка результатів пошуку керується окремими CSS-правилами. -->
			<div class="search-results-grid">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
			?>
			</div>
			<?php

			the_posts_navigation(
				array(
					'prev_text' => esc_html__( '← Попередні', 'cnn-theme' ),
					'next_text' => esc_html__( 'Наступні →', 'cnn-theme' ),
				)
			);

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
