<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/css/libs.min.css">
    <link rel="stylesheet" href="/wp-content/themes/cnn-theme/style.css">
</head>
<body>

    <header class="var2">
        <div class="header-news">
            <div class="container flex-none padd-none">
                <div class="title">Breaking News</div>
                <a href="#" class="text">
                    Journalist Maria Ressa, a high-profile critic of Philippines President Rodrigo Duterte, has been arrested
                </a>
                <div class="close"></div>
            </div>
        </div>
        <div class="container">
            <div class="logo link-data">
              <a href = '/'><?php the_custom_logo(); ?></a>
            <a href="/"><img src="//edition.i.cdn.cnn.com/.a/2.142.0/assets/logo_politics.svg" class="logo-additional"></a>
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
            </nav>
            <div class="search">
    					<?php get_search_form(); ?>
            </div>
            <div class="social show">
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
                <div class="share-links">
                    <!-- uSocial -->
                    <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
                    <div class="uSocial-Share" data-pid="e7a084283f877ddd253159bdb45b35b6" data-type="share" data-options="round,style1,default,absolute,vertical,size32,counter0" data-social="email,fb,twi" data-mobile="vi,wa,sms"></div>
                    <!-- /uSocial -->
                </div>
                <div class="row">
                    <div class="one-news">
                        <div class="middle-block var100p">
                          <?php the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <div class="published">
                                <div class="publisher">
                                    <div class="sub">
                                        <div class="name">By <?php the_author_posts_link(); ?>, Business CNN</div>
                                        <div class="date">Updated <?php the_time('j F Y в H:i'); ?></div>
                                    </div>
                                </div>
                                <div class="share-static">
                                    <!-- uSocial -->
                                    <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
                                    <div class="uSocial-Share" data-pid="914b8f31db2d4e311e079b10d416f42b" data-type="share" data-options="round,style1,default,absolute,horizontal,size32,counter0" data-social="email,fb,twi" data-mobile="vi,wa,sms"></div>
                                    <!-- /uSocial -->
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
                          <div class="title blue-line">Spotlight</div>
                          <?php $posts = get_posts ("cat=6&numberposts=2"); ?>
                          <?php if ($posts) : ?>
                          <?php foreach ($posts as $post) :  ?>
                            <a href="<?php the_permalink(); ?>" class="news-text img-text mini">
                                <?php the_post_thumbnail(); ?>
                                <span class="text"><?php the_title(); ?></span>
                            </a>
                          <?php endforeach; ?>
                          <?php endif; ?>
                          <div class="title blue-line">PAID CONTENT</div>
                          <?php $posts = get_posts ("&numberposts=2"); ?>
                          <?php if ($posts) : ?>
                          <?php foreach ($posts as $post) :  ?>
                            <a href="<?php the_permalink(); ?>" class="img paid">
                                <?php the_post_thumbnail(); ?>
                                <span class="img-title font-light"><?php the_title(); ?></span>
                            </a>
                          <?php endforeach; ?>
                          <?php endif; ?>
                          <div class="title blue-line">MORE FROM CNN</div>
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
                           <div class="title blue-line">PAID CONTENT</div>
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
                            <div class="title blue-line">PAID CONTENT</div>
                            <?php $posts = get_posts ("&numberposts=4"); ?>
                            <?php if ($posts) : ?>
                            <?php foreach ($posts as $post) :  ?>
                            <a href="<?php the_permalink(); ?>" class="news-text">
                              <?php the_title(); ?>
                            </a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                          </div>
                          <div>
                            <div class="title blue-line">MORE FROM CNN</div>
                            <?php $posts = get_posts ("orderby=date&numberposts=4"); ?>
                            <?php if ($posts) : ?>
                            <?php foreach ($posts as $post) :  ?>
                            <a href="<?php the_permalink(); ?>" class="news-text">
                            <?php the_title(); ?>
                            </a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                          </div>
                         </div>
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
                        <a href="article_with-video-slider1.html"><img src="https://edition.i.cdn.cnn.com/.a/2.142.0/assets/logo_politics.svg" class="logo-additional"></a>
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
                <div class="copyright">© 2019 Cable News Network. <a href="#">Turner Broadcasting System, Inc.</a> All Rights Reserved. CNN Sans ™ © 2016 Cable News Network.</div>
                <div class="links">
                    <a href="#">Terms of service</a>
                    <a href="#">Privacy guidelines</a>
                    <a href="#">AdChoices</a>
                </div>
	        </div>
	    </div>
	</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/wp-content/themes/cnn-theme/js/libs.min.js"></script>
    <script src="/wp-content/themes/cnn-theme/js/main.js"></script>
</body>

</html>
