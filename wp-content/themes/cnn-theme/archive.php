<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/css/libs.min.css">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/style.css">
</head>
<?php 
    get_header();
?>
<body>	
<div class="content">
    <div class="news-block">
        <div class="container">
            <h1>Все интересное на тему <?php single_tag_title(); ?></h1>
            <div class="share-links">
            </div>
            <div class="line ads">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- GW_GOL -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-2328584419845560"
                    data-ad-slot="9571991316"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>		
            </div>
            <div class="row">
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : 
                        the_post();
                        get_template_part( 'template-parts/content', 'ilovenuled' );
                    endwhile;
                    the_posts_navigation();
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>

                <div class="tag_description">
                    <?php $description = tag_description (); echo $description;?>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="var2">
    <div class="container">
        <div class="row">
            <div class="logo">
                <div class="logo-links">
                    <img src="/wp-content/themes/cnn-theme/img/logo.png" alt="Логотип сайта Games-walker" class="logo link-data" data-href="index.html">
                </div>
            </div>
            <div class="menu">
                <?php
                // WP_Query arguments
                $cat = get_queried_object_id();
                $args = array (
                    'child_of'     => $cat,
                    'order'        => 'ASC',
                    'hide_empty'   => 1,
                    'hierarchical' => 0,
                );
                $child_cat = get_categories($args);
                foreach($child_cat as $categ)
                {
                ?>
                <a href = '<?php echo get_category_link(get_cat_ID($categ->name)); ?>' class = 'menu-link'><?php echo $categ->name; ?></a>
                <?php
                }
                ?>
            </div>
            <div class="social-block">
                <div class="social">
                    <a href="https://www.facebook.com/gameswalkercom/" class="fb" rel="nofollow" target="_blank"></a>
                    <a href="https://twitter.com/Gameswalker2" class="twit" rel="nofollow" target="_blank"></a>
                    <a href="https://www.instagram.com/games_walker/" class="inst" rel="nofollow" target="_blank"></a>
                </div>
            </div>
            <div class="copyright">© 2024 Games-Walker - Те, кто проходят игры. Все права наши</div>
            <div class="links">
                <a href="https://games-walker.com/vakansii/" rel="nofollow" target="_blank">Стань Автором!</a>
            </div>
        </div>
    </div>
</footer>
<script data-ad-client="ca-pub-2328584419845560" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/wp-content/themes/cnn-theme/js/libs.min.js"></script>
<script src="/wp-content/themes/cnn-theme/js/main.js"></script>
</body>
</html>
