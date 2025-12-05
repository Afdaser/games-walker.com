<?php
/*
Template Name: Статья с видео 1
Template Post Type: post ,page, product
*/
?>
<!DOCTYPE html>

<head>
	<html <?php language_attributes(); ?>>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/css/libs.min.css">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/style.css">
	<?php wp_head(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115474918-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115474918-5');
</script>
</head>
<body>
    <header class="var2">
        <div class="container">
         <div class="logo link-data">
            <a href = '/'><?php the_custom_logo(); ?></a>
          </div>
            <nav>
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
				<a href="https://games-walker.com/papych/" class = "menu-link">Папич</a>
				<a href="https://games-walker.com/silvernejm/" class = "menu-link">Сильвернейм</a>
            </nav>
            <div class="search show">
              <?php get_search_form(); ?>
            </div>
            <div class="social">
                <a href="#" class="fb"></a>
                <a href="#" class="twit"></a>
                <a href="#" class="inst"></a>
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
                <div class="row">
                    <div class="one-news">
                        <div class="middle-block var100p">
                          <?php the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <div class="published">
                                <div class="publisher">
                                    <div class="logo">
                                      <?php echo do_shortcode('[avatar]'); ?>
                                    </div>
                                    <div class="sub">
                                        <div class="name"><?php the_author_posts_link(); ?> Games-Walker</div>
                                        <div class="date">Обновлено <?php the_time('j F Y в H:i'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="middle-block var66p tablet-100">
                            <div class="video-player fixed">
                              <div class = 'thevideo'>
                                <?php echo do_shortcode('[featured-video-plus]'); ?>
                              </div>
                            </div>
                            <div class="video-slider">
                                <div class="swiper-container videos">
                                    <div class="swiper-wrapper">
                                <?php $posts = get_posts(array('category_name' => 'video' , 'numberposts' => '8')); ?>
                                      <?php if ($posts) : ?>
                                      <?php foreach ($posts as $post) :  ?>
                                      <a href = '<?php the_permalink(); ?>'>
                                        <div class="swiper-slide">
                                            <div class="video">
                                                <span class="img">
                                                    <?php the_post_thumbnail(); ?>
                                                    <span class="video-time"><span class="play"></span> 2:13</span>
                                                </span>
                                                <span class="title"><?php the_title(); ?></span>
                                            </div>
                                        </div>
                                      </a>
                                      <?php endforeach; ?>
                                      <?php endif; ?>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="description" style = 'font-family: CNN,Helvetica Neue,Helvetica,Arial,Utkal,sans-serif; font-weight: 300; -webkit-font-smoothing: antialiased; font-size: 18px; font-size: 1.2rem; line-height: 1.66667; color:#737373;'>
                              <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="middle-block var33p tablet-50">
                            <div class="title blue-line"></div>
                            <?php $posts = get_posts ("cat=6&numberposts=2"); ?>
                            <?php if ($posts) : ?>
                            <?php foreach ($posts as $post) :  ?>
                              <a href="<?php the_permalink(); ?>" class="news-text img-text mini">
                                  <?php the_post_thumbnail(); ?>
                                  <span class="text"><?php the_title(); ?></span>
                              </a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="title blue-line">ТОП КОНТЕНТ</div>
                            <?php $posts = get_posts ("&numberposts=2"); ?>
                            <?php if ($posts) : ?>
                            <?php foreach ($posts as $post) :  ?>
                              <a href="<?php the_permalink(); ?>" class="img paid">
                                  <?php the_post_thumbnail(); ?>
                                  <span class="img-title font-light"><?php the_title(); ?></span>
                              </a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="title blue-line">БОЛЬШЕ С GAMES-WALKER</div>
                            <div class="two-in-row">
                              <?php $posts = get_posts ("&numberposts=4"); ?>
                              <?php if ($posts) : ?>
                              <?php foreach ($posts as $post) :  ?>
                                <a href="<?php the_permalink(); ?>" class="img mini">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                              <?php endforeach; ?>
                              <?php endif; ?>
                            </div>
                        </div>
                        <div class="middle-block var66p tablet-50">
                            <div class="title blue-line">ТОП КОНТЕНТ</div>
                            <div class="two-in-row">
                              <?php $posts = get_posts ("&numberposts=4"); ?>
                              <?php if ($posts) : ?>
                              <?php foreach ($posts as $post) :  ?>
                                <a href = "<?php the_permalink(); ?>" class = "video">
                                    <span class = "img">
                                        <?php the_post_thumbnail(); ?>
                                        <span class =" video-time">
                                          <span class="play"></span>
                                        </span>
                                    </span>
                                    <span class="img-title">
                                      <?php the_title(); ?>
                                    </span>
                                </a>
                              <?php endforeach; ?>
                              <?php endif; ?>
                           <div>
                             <div class="title blue-line">ПРИСМОТРИСЬ</div>
                             <?php
								$result = new WP_Query(
									array(
									'posts_per_page' => '5',
									'post_type'  => 'post', 
									'meta_query' => array( 
										array(
											'key'   => '_wp_page_template', 
											'value' => 'article-style.php'
										)
									)
								));
							   if($result->have_posts()):
								while($result->have_posts()): 
								$result->the_post();
								 ?>
								 <a href="<?php the_permalink(); ?>" class="news-text">
								 <?php the_title(); ?>
								 </a>
                             	<?php endwhile; ?>
                             <?php endif; ?>
                           </div>
                           <div>
                             <div class="title blue-line">ЭТО ТОЖЕ ИНТЕРЕСНО</div>
                             <?php
								$result = new WP_Query(
									array(
									'posts_per_page' => '5',
									'post_type'  => 'post', 
									'meta_query' => array( 
										array(
											'key'   => '_wp_page_template', 
											'value' => 'photo_page.php'
										)
									)
								));
							   if($result->have_posts()):
								while($result->have_posts()): 
								$result->the_post();
								 ?>
								 <a href="<?php the_permalink(); ?>" class="news-text">
								 <?php the_title(); ?>
								 </a>
                             	<?php endwhile; ?>
                             <?php endif; ?>
                           </div>
                          </div>
                        </div>
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
                        <a href="https://games-walker.com/"><img src="/wp-content/themes/cnn-theme/img/logo.png" class="logo link-data" data-href="index.html"></a>
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
                        <a href="#" class="fb"></a>
                        <a href="#" class="twit"></a>
                        <a href="#" class="inst"></a>
                    </div>
                </div>
                <div class="copyright">© 2019 Games-Walker - Те, кто проходят игры. Все права наши</div>
                <div class="links">
                    <a href="#">Стань Автором!</a>
                </div>
	        </div>
	    </div>
	</footer>
    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/wp-content/themes/cnn-theme/js/libs.min.js"></script>
    <script src="/wp-content/themes/cnn-theme/js/main.js"></script>
</body>
</html>