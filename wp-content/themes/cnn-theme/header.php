<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CNN_Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="/wp-content/themes/cnn-theme/css/libs.min.css">
	<style>
		.news-block.var2 .img.large img {
			
		}
	</style>
    <script>
        document.querySelectorAll('.wp-block-ub-content-toggle .wp-block-ub-content-toggle-accordion').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                console.log(e);
            });
        });

    </script>
<!-- туй тягне впхеад -->
	<?php wp_head(); ?>
<!-- туй тягне впхеад -->
<meta name="yandex-verification" content="3e9f0c2801fb2ca4" />
</head>

<body <?php body_class(); ?>>
<?php // Виклик гачка для коректного підключення стороннього коду ?>
<?php wp_body_open(); ?>

<header>
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-news')) : ?>
    <?php endif; ?>

    <div class="container">
        <?php the_custom_logo(); ?>

        <?php if (wp_is_mobile()) : ?>
            <div class="menu">
                <div class="nav-menu__hamburger"></div>
            </div>
            <div class="main-menu">
                <div class="container flex-none">
                    <div class="mobile-search">
                        <?php get_search_form(); ?>
                    </div>
                    <?php
                    $args = array(
                        'theme_location' => 'menu-horizontal',
                        'container' => false,
                        'menu_class' => '',
                        'items_wrap' => '<ul class="block-news">%3$s</ul>',
                        'walker' => new True_Walker_Nav_Menu_Dropdown()
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        <?php else : ?>
            <nav class="menu-horizontal">
                <?php
                $args = array(
                    'theme_location' => 'menu-horizontal',
                    'container' => false,
                    'echo' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 0,
                );
                echo strip_tags(wp_nav_menu($args), '<a>');
                ?>
            </nav>
            <?php // Кнопка для відкриття пошуку на десктопі ?>
            <div class="search-btn"></div>
            <div class="search">
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</header>

<div class="content">