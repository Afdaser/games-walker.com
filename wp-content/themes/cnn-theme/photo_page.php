<?php
/*
Template Name: Фото страница
Template Post Type: post ,page, product
*/
get_header();

 ?>
        <div class="news-block black">
            <div class="container">
                <div class="row">
                    <div class="middle-block var100p">
                      <?php the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="published">
                            <div class="publisher">
                                <div class="sub">
                                    <div class="name"><b><?php echo the_author_posts_link(); ?>, Games-Walker</b></div>
                                    <div class="date">Обновлено: <?php the_date(); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container gallery-top">
                  <div class="swiper-wrapper">
                    <?php $count = get_post_images_count(); ?>
                    <?php //$captions = the_post_image_captions(); ?>
                    <?php $images = get_post_images(); ?>
                    <?php foreach($images as $image): ?>
                    <div class="swiper-slide">
                        <?php print_r($image); ?>
                          <div class="caption">
                              <div class="caption-title">
                              </div>
                              <div class="caption-text">
                                <?php //print_r($captions); ?>
                                <?php
                                $atts = shortcode_atts(
									  array(
										'id'         => '',
										'caption_id' => '',
										'align'      => 'alignnone',
										'width'      => '',
										'caption'    => '',
										'class'      => '',
									  ),
									  $attr,
									  'caption'
									);
									?>
                                <?php img_caption_shortcode($attrs); ?>
                              </div>
                          </div>
                          <div class="caption-bottom">
                              <div class="swiper-pagination"></div>
                              <div class="hide-caption">Скрыть описание</div>
                          </div>
                      </div>
                  <?php endforeach; ?>
                  </div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next swiper-button-white"></div>
                  <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                  <div class="swiper-wrapper">
                    <?php $images = get_post_images(); ?>
                    <?php foreach($images as $image): ?>
                      <div class="swiper-slide">
                          <?php print_r($image); ?>
                      </div>
                    <?php endforeach; ?>
                  </div>
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
                    <div class="middle-block var33p tablet-50">
                        <div class="title black">Это стоит увидеть</div>
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
							while ( $result->have_posts() ) 
							{
		               		$result->the_post();
	                         ?>
							<a href="<?php the_permalink(); ?>" class="video news-text img-text mini">
								<span class="img">
									<?php the_post_thumbnail(); ?>
									<span class="video-time"><span class="play"></span></span>
								</span>
								<span class="text"><?php the_title(); ?></span>
							</a>
							<?php
						    }
						wp_reset_postdata();
						?>
                    </div>
                    <div class="middle-block var33p tablet-50">
                        <div class="title black">Это стоит посмотреть</div>
                         <?php
							$result = new WP_Query(
								array(
								'posts_per_page' => '5',
								'post_type'  => 'post', 
								'meta_query' => array( 
									array(
										'key'   => '_wp_page_template', 
										'value' => 'article_with-video-slider1.php'
									)
								)
							));
							while ( $result->have_posts() ) 
							{
		               		$result->the_post();
	                         ?>
							<a href="<?php the_permalink(); ?>" class="video news-text img-text mini">
								<span class="img">
									<?php the_post_thumbnail(); ?>
									<span class="video-time"><span class="play"></span></span>
								</span>
								<span class="text"><?php the_title(); ?></span>
							</a>
							<?php
						    }
												wp_reset_postdata();
						?>
                    </div>
                    <div class="middle-block var33p tablet-50">
                        <div class="title black">Это стоить прочитать</div>
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
							while ( $result->have_posts() ) 
							{
		               		$result->the_post();
	                         ?>
							<a href="<?php the_permalink(); ?>" class="video news-text img-text mini">
								<span class="img">
									<?php the_post_thumbnail(); ?>
									<span class="video-time"><span class="play"></span></span>
								</span>
								<span class="text"><?php the_title(); ?></span>
							</a>
							<?php
						    }
						?>
                    </div>
                </div>
            </div>
        </div>
  <?php
  get_footer();
   ?>
