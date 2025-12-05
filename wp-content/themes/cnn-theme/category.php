<!DOCTYPE html>
<head>
	<html <?php language_attributes(); ?>>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/css/libs.min.css">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/style.css">
	<meta property="og:image" content="https://games-walker.com/wp-content/uploads/2020/03/logo-1.png" class="yoast-seo-meta-tag" />
<?php wp_head(); ?>
</head>
<body>
    <header class="var2">
        <div class="container">
			<?php the_custom_logo(); ?>
            <nav class="menu-horizontal">
              <?php
              // WP_Query arguments
              $cat = get_queried_object_id();
              $args = array (
                'child_of'     => $cat,
                'order'        => 'ASC',
                'hide_empty'   => 0,
                'hierarchical' => 1,
              );
              $child_cat = get_categories($args);
              foreach($child_cat as $categ)
              {
                ?>
                <a href = '<?php echo get_category_link(get_cat_ID($categ->name)); ?>' class = 'menu-link'><?php echo $categ->name; ?></a>
                <?php
              }
              ?>
				
				<a href="https://games-walker.com/papych/" class = "menu-link">Папич</a>
				<a href="https://games-walker.com/silvernejm/" class = "menu-link">Сильвернейм</a>
				
            </nav>
            <div class="search">
    					<?php get_search_form(); ?>
            </div>
            <div class="social show">
              <a href="https://www.facebook.com/gameswalkercom/" class="fb" rel="nofollow" target="_blank"></a>
              <a href="https://twitter.com/Gameswalker2" class="twit" rel="nofollow" target="_blank"></a>
              <a href="https://www.instagram.com/games_walker/" class="inst" rel="nofollow" target="_blank"></a>
            </div>
            <div class="search-btn show"></div>
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="mobile-menu"></div>
        </div>
    </header>
    <div class="content">
        <div class="news-block">
            <div class="container">
                <div class="share-links">
                </div>
                <div class="row">
                    <div class="one-news">
                      <div class="middle-block var460 tablet-50">
    <?php
    // Отримуємо ID поточної категорії
    $cat_id = get_queried_object_id();

    // Отримуємо номер поточної сторінки
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    // Параметри запиту для отримання постів
    $args = array(
        'cat'         => $cat_id, // ID поточної категорії
        'order'       => 'DESC',
        'posts_per_page' => 6, // Кількість постів на сторінці
        'paged'       => $paged // Номер поточної сторінки пагінації
    );

    // Виконуємо запит для отримання постів
    $query = new WP_Query( $args );

    // Перевіряємо, чи є пости
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            // Виводимо пости
            ?>
            <a href="<?php the_permalink(); ?>" class="img">
                <?php the_post_thumbnail(); ?>
                <h2><span class="img-title"><?php the_title(); ?></span></h2>
            </a>
            <?php
        }
        wp_reset_postdata();
    } else {
        // Якщо пости відсутні
        echo 'Пости відсутні.';
    }
    ?>
<?php echo paginate_links(); ?>						  
</div>
						<div class="middle-block var33p tablet-50">
							
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
							<p class="title arrowed">Это тоже интересно</p>
							<?php
    // ID родительской страницы
    $parent_id = 1568; // Замените YOUR_PARENT_PAGE_ID на нужный ID

    // Устанавливаем аргументы для получения дочерних страниц
    $args = array(
        'post_parent'    => $parent_id,
        'post_type'      => 'page',
        'posts_per_page' => -1, // Получаем все дочерние страницы
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
    );

    // Получаем дочерние страницы
    $child_pages = new WP_Query($args);

    // Проверяем, есть ли дочерние страницы
    if ($child_pages->have_posts()) {
        while ($child_pages->have_posts()) {
            $child_pages->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="news-text img-text mini"><?php the_title(); ?></a>
            <?php
        }
        // Сброс глобальной переменной $post
        wp_reset_postdata();
    } else {
        echo '<p>Дочерних страниц не найдено.</p>';
    }
    ?>
							<!-- <p class="title arrowed">Наши последние записи</p>
<div>
    <?php
    // Устанавливаем аргументы для получения последних постов
    $args = array(
        'post_type'      => 'post', // Изменяем тип на 'post' для получения записей блога
        'posts_per_page' => 5,      // Ограничиваем количество постов до 5
        'orderby'        => 'date', // Сортировка по дате
        'order'          => 'DESC'  // Последние посты первыми
    );

    // Получаем последние посты
    $latest_posts = new WP_Query($args);

    // Проверяем, есть ли посты
    if ($latest_posts->have_posts()) {
        while ($latest_posts->have_posts()) {
            $latest_posts->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="news-text img-text mini"><?php the_title(); ?></a>
            <?php
        }
        // Сброс глобальной переменной $post
        wp_reset_postdata();
    } else {
        echo '<p>Новых постов не найдено.</p>';
    }
    ?>
</div>
-->

						</div>
                    </div>
                </div>
				
					<div class="tag_description">
						<h1><?php single_cat_title(); ?></h1>
    <?php
    // Перевіряємо, чи знаходиться поточна сторінка на першій сторінці пагінації
    if ( !is_paged() ) {
        // Отримуємо опис категорії
        $description = category_description();
        // Виводимо опис
        echo $description;
    }
    ?>
</div>
            </div>
        </div>
    </div>
	<footer class="var2">
	    <div class="container">
	        <div class="row">
                <div class="logo">
                    <div class="logo-links">
                        <img src="/wp-content/themes/cnn-theme/img/logo.png" class="logo link-data" data-href="index.html">
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
                <div class="copyright">© 2025 Games-Walker - Те, кто проходят игры. Все права наши</div>
                <div class="links">
				<a href="https://games-walker.com/vakansii/" rel="nofollow" target="_blank">Стань Автором!</a>
                </div>
	        </div>
	    </div>

		<script data-ad-client="ca-pub-2328584419845560" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/wp-content/themes/cnn-theme/js/libs.min.js"></script>
    <script src="/wp-content/themes/cnn-theme/js/main.js"></script>
</body>
</html>