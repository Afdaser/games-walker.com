<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CNN_Theme
 */

get_header();
?>

	<div class="container">
        <h1 class="counter">
            <span class="label">Games-Walker</span>
            <span class="dot">•</span>
            <span class="clock-title">Игры</span>
            <span class="text-red">
                <span>прохождение и</span>
                <span>обзоры на игры</span>,
                <span>Мемы</span>
            </span>
        </h1>
    </div>
    <div class="news-block">
        <div class="container">
            <div class="row">
                <div class="middle-block var460 tablet-100">
                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 6,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC'
                    );

                    $latest = new WP_Query($args);
                    // The Loop
                    if ( $latest->have_posts() ) :
                        $i=1;
                        while ( $latest->have_posts() ) :
                            $latest->the_post();

                            if ($i==1){
                                ?>
                                <h2><a href="<?php the_permalink(); ?>" class="title biggest"><?php the_title(); ?></a></h2>
                                <?php
                            } elseif ($i==2){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title small"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {

                                $category_name = '';
                                $categories_detail=get_the_category($latest->ID);
                                foreach($categories_detail as $category_detail){
                                    $category_name = $category_detail->cat_name;
                                    break;
                                }

                                ?>
                                <div class="news-text">
    <?php if ($category_name != ''): ?>
        <span class="text-red"><?php echo esc_html($category_name); ?></span>:&nbsp;
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                </div>
                <div class="middle-block tablet-50">
    <h2><a href="<?php echo esc_url(get_permalink(1568)); ?>" class="title arrowed">Папич<span class="arrow"></span></a></h2>
    <?php
    $args = array(
        'posts_per_page' => 9,
        'post_type'      => 'page',
        'post_status'    => 'publish',
        'post_parent'    => 1568
    );

    $top_stories = new WP_Query($args);

    if ($top_stories->have_posts()) :
        $i = 1;
        while ($top_stories->have_posts()) : $top_stories->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="<?php echo $i === 1 ? 'img' : 'news-text'; ?>">
                <?php if ($i === 1 && has_post_thumbnail()) the_post_thumbnail(); ?>
                <?php if ($i === 1): ?>
    <h3 class="img-title"><?php the_title(); ?></h3>
<?php else: ?>
    <span><?php the_title(); ?></span>
<?php endif; ?>
            </a>
        <?php $i++;
        endwhile;
    endif;
    wp_reset_postdata();
?>
</div>


                <div class="middle-block tablet-50">
                    <div class="title">В Фокусе</div>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'post_type'     => array( 'post' ),
						'posts_per_page'   => -1,
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'meta_key'      => 'in_focus',
						'meta_value' => '1',
                    );
                    $in_focus = new WP_Query($args);
                    // The Loop
                    if ( $in_focus->have_posts() ) :
                        $i=1;
                        while ( $in_focus->have_posts() ) :
                            $in_focus->the_post();

                            if ($i==1){ 
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                </div>
               <!-- <div class="middle-block tablet-100">
                    <a href="<?php echo get_category_link(2); ?>" class="title arrowed">Around the world <span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 9,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 2
                    );

                    $world = new WP_Query($args);

                    // The Loop
                    if ( $world->have_posts() ) :
                        $i=1;
                        while ( $world->have_posts() ) :
                            $world->the_post();

                            if ($i==1){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                    a href="#" class="news-text">'Pineapple express' raises fears in California<span class="play"></span></a>
                </div>
                <div class="middle-block var460 tablet-50">
                    <div class="title">Featured</div>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 3,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'meta_query'    => array('key' => 'featured',
                                                'value' => 1,
                                                'compare' => '=')
                    );

                    $featured = new WP_Query($args);

                    // The Loop
                    if ( $featured->have_posts() ) :
                        $i=1;
                        while ( $featured->have_posts() ) :
                            $featured->the_post();

                            if ($i==1){


                                $category_name = '';
                                $categories_detail=get_the_category($top_stories->ID);
                                foreach($categories_detail as $category_detail){
                                    $category_name = $category_detail->cat_name;
                                    break;
                                }

                                ?>
                             	<a href="<?php the_permalink(); ?>" class="img hover-title">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="img-title"><span class="status"><?php echo $category_name; ?></span><?php the_title(); ?></span>
			                    </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text img-text">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="text"><?php the_title(); ?></span>
			                    </a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                </div>
                <div class="middle-block tablet-50">
                    <a href="<?php echo get_category_link(6); ?>" class="title">Spotlight</a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 5,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 2
                    );

                    $sport = new WP_Query($args);

                    // The Loop
                    if ( $sport->have_posts() ) :

                        while ( $sport->have_posts() ) :
                            $sport->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text img-text mini">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="text"><?php the_title(); ?></span>
			                    </a>
                                <?php
                        endwhile;
                    endif; wp_reset_postdata();
                    ?>

                </div>
                <div class="middle-block tablet-100">
                    <a href="<?php echo get_category_link(2); ?>" class="title arrowed">Around the world <span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 4,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 2
                    );

                    $posts = new WP_Query($args);

                    // The Loop
                    if ( $posts->have_posts() ) :
                        $i=1;
                        while ( $posts->have_posts() ) :
                            $posts->the_post();

                            if ($i==1){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text img-text mini">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="text"><?php the_title(); ?></span>
			                    </a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                    <a href="#" class="news-text">'Pineapple express' raises fears in California<span class="play"></span></a>
                </div>
                <div class="middle-block var460 tablet-50">
                    <div class="title">Featured</div>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 3,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'meta_query'    => array('key' => 'featured',
                                                'value' => 1,
                                                'compare' => '=')
                    );

                    $featured = new WP_Query($args);

                    // The Loop
                    if ( $featured->have_posts() ) :
                        $i=1;
                        while ( $featured->have_posts() ) :
                            $featured->the_post();

                            if ($i==1){


                                $category_name = '';
                                $categories_detail=get_the_category($top_stories->ID);
                                foreach($categories_detail as $category_detail){
                                    $category_name = $category_detail->cat_name;
                                    break;
                                }

                                ?>
                             	<a href="<?php the_permalink(); ?>" class="img hover-title">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="img-title"><span class="status"><?php echo $category_name; ?></span><?php the_title(); ?></span>
			                    </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text img-text">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="text"><?php the_title(); ?></span>
			                    </a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                </div>
                <div class="middle-block tablet-100">
                    <a href="<?php echo get_category_link(2); ?>" class="title arrowed">Around the world <span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 3,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 2
                    );

                    $posts = new WP_Query($args);

                    // The Loop
                    if ( $posts->have_posts() ) :
                        $i=1;
                        while ( $posts->have_posts() ) :
                            $posts->the_post();

                            if ($i==1){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text img-text mini">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="text"><?php the_title(); ?></span>
			                    </a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                    <a href="#" class="news-text">'Pineapple express' raises fears in California<span class="play"></span></a>
                </div-->
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
                <div class="line">
                    <span class="text">Рубрики</span>
                    <span class="stripes"></span>
                </div>
                <div class="middle-block var33p tablet-50">
                    <a href="<?php echo get_category_link(144); ?>" class="title arrowed">Мемопедия<span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 6,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 144
                    );

                    $world = new WP_Query($args);

                    // The Loop
                    if ( $world->have_posts() ) :
                        $i=1;
                        while ( $world->have_posts() ) :
                            $world->the_post();

                            if ($i==1){
                                ?>
								<a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                </div>
                <div class="middle-block var33p tablet-50">
    <div class="title">Самое интересное</div>

    <?php
    // WP_Query arguments
    $args = array(
        'posts_per_page' => 6,
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'meta_key'       => 'post_views_count',
        'orderby'        => 'post_views_count',
        'order'          => 'ASC'
    );

    $top_stories = new WP_Query($args);

    // The Loop
    if ($top_stories->have_posts()) :
        $i = 1;
        while ($top_stories->have_posts()) :
            $top_stories->the_post();

            if ($i == 1) {
                ?>
                <a href="<?php the_permalink(); ?>" class="img">
                    <?php the_post_thumbnail(); ?>
                    <span class="img-title"><?php the_title(); ?></span>
                </a>
                <?php
            } else {
                ?>
                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                <?php
            }
            $i++;
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>

                <div class="middle-block var33p tablet-50">
                    <a href="<?php echo get_category_link(5); ?>" class="title arrowed">Новости<span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 5,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 5
                    );

                    $world = new WP_Query($args);

                    // The Loop
                    if ( $world->have_posts() ) :
                        $i=1;
                        while ( $world->have_posts() ) :
                            $world->the_post();

                            if ($i==1){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                    <!--a href="#" class="news-text">'Pineapple express' raises fears in California<span class="play"></span></a-->
                </div>
                <div class="middle-block var33p tablet-50">
                    <a href="<?php echo get_category_link(6); ?>" class="title arrowed">Обзоры<span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 5,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 6
                    );

                    $world = new WP_Query($args);

                    // The Loop
                    if ( $world->have_posts() ) :
                        $i=1;
                        while ( $world->have_posts() ) :
                            $world->the_post();

                            if ($i==1){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                    <!--a href="#" class="news-text">'Pineapple express' raises fears in California<span class="play"></span></a-->
                </div>
                <div class="middle-block var33p tablet-50">
                    <a href="<?php echo get_category_link(7); ?>" class="title arrowed">Прохождения <span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 5,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 7
                    );

                    $world = new WP_Query($args);

                    // The Loop
                    if ( $world->have_posts() ) :
                        $i=1;
                        while ( $world->have_posts() ) :
                            $world->the_post();

                            if ($i==1){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                    <!--a href="#" class="news-text">'Pineapple express' raises fears in California<span class="play"></span></a-->
                </div>
                <div class="middle-block var33p tablet-50">
                    <a href="<?php echo get_category_link(27); ?>" class="title arrowed">Разное<span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'posts_per_page'=> 5,
                        'post_type'     => array( 'post' ),
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'cat'           => 27
                    );

                    $world = new WP_Query($args);

                    // The Loop
                    if ( $world->have_posts() ) :
                        $i=1;
                        while ( $world->have_posts() ) :
                            $world->the_post();

                            if ($i==1){
                                ?>
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title"><?php the_title(); ?></span>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>" class="news-text"><?php the_title(); ?></a>
                                <?php
                            }

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                    <!--a href="#" class="news-text">'Pineapple express' raises fears in California<span class="play"></span></a-->
                </div>
				 <!-- 
              <div class="line">
                    <span class="text">Посмотрите</span>
                    <span class="stripes"></span>
                </div>
                <div class="middle-block var66p tablet-100">
                    <a href="<?php echo get_category_link(3); ?>" class="title arrowed">Видео, которые вы должны увидеть<span class="arrow"></span></a>
                    <div class="content-block">

                    	 <?php
	                    // WP_Query arguments
	                    $args = array (
	                        'posts_per_page'=> 9,
	                        'post_type'     => array( 'post' ),
	                        'post_status'   => array( 'publish' ),
	                        'orderby'       => 'date',
	                        'order'         => 'DESC',
	                        'cat'           => 3
	                    );

	                    $video = new WP_Query($args);

	                    // The Loop
	                    if ( $video->have_posts() ) :
	                        $i=1;
	                        while ( $video->have_posts() ) :
	                            $video->the_post();
                                ?>
                                 <a href="<?php the_permalink(); ?>" class="video var31p">
			                        <span class="img">
                                    <?php the_post_thumbnail(); ?>
			                            <span class="video-time"><span class="play"></span></span>
			                        </span>
			                        <span class="img-title"><?php the_title(); ?></span>
			                    </a>
                                <?php

	                        endwhile;
	                    endif; wp_reset_postdata();
	                    ?>
                    </div>
                </div>
                <div class="middle-block var33p tablet-100">
                    <a href="<?php echo get_home_url(); ?>" class="title arrowed">В тренде<span class="arrow"></span></a>

                    <?php
                    // WP_Query arguments
                    $args = array (
                        'post_type'     => array( 'post' ),
                        'posts_per_page'   => -1,
                        'post_status'   => array( 'publish' ),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
						'meta_key'      => 'featured',
						'meta_value' => 1
                    );

                    $video = new WP_Query($args);

                    // The Loop
                    if ( $video->have_posts() ) :
                        $i=1;
                        while ( $video->have_posts() ) :
                            $video->the_post();

                            if ($i==1){
                                ?>
                                 <a href="<?php the_permalink(); ?>" class="video img">
			                        <span class="img">
                                    <?php the_post_thumbnail(); ?>
			                            <span class="video-time"><span class="play"></span></span>
			                        </span>
			                        <span class="img-title"><?php the_title(); ?></span>
			                    </a>
                                <?php
                            } else {
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

                            $i++;

                        endwhile;
                    endif; wp_reset_postdata();
                    ?>
                </div>
                <div class="line">
                    <span class="text">Фотографии, которые вы должны увидеть</span>
                    <span class="stripes"></span>
                </div>
                <div class="middle-block var66p tablet-100">
                    <div class="content-block">
                    	 <?php
	                    // WP_Query arguments
	                    $args = array (
	                        'posts_per_page'=> 6,
	                        'post_type'     => array( 'post' ),
	                        'post_status'   => array( 'publish' ),
	                        'orderby'       => 'date',
	                        'order'         => 'DESC',
                            'meta_query'    => array(
						  array(
            'key' => '_wp_page_template',
            'value' => 'photo_page.php'
        )
						)
						);

	                    $photo = new WP_Query($args);

	                    // The Loop
	                    if ( $photo->have_posts() ) :
	                        $i=1;
	                        while ( $photo->have_posts() ) :
	                            $photo->the_post();
                                ?>
			                    <a href="<?php the_permalink(); ?>" class="photo var31p">
		                            <span class="img">
                                    <?php the_post_thumbnail(); ?>
		                                <span class="photo-icon"><span class="camera"></span></span>
		                            </span>
		                            <span class="img-title"><?php the_title(); ?></span>
		                        </a>
                                <?php

	                        endwhile;
	                    endif; wp_reset_postdata();
	                    ?>
                    </div>
                </div>
-->

                <!-- место под рекламу -->
                <!--
                <div class="line">
                    <span class="text">Paid Content</span>
                    <span class="stripes"></span>
                </div>

                <div class="middle-block var100p">

                    место для вставки кода

                </div>
                -->
                <!-- место под рекламу -->


            </div>
        </div>
    </div>
    <div class="news-block black">
        <div class="container">
            <div class="row">
                <div class="line">
                    <span class="text">На случай, если вы пропустили</span>
                    <span class="stripes"></span>
                </div>

                <?php
            	$args = array(
                    'posts_per_page'=> 3,
                    //'post__not_in'=> get_the_ID(),
				    'post_type' => 'post',
				    'post_status' => 'publish',
				    'orderby' => 'date',
				    'order' => 'DESC',

				    // Using the date_query to filter posts from last week
				    'date_query' => array(
				        array(
				            'after' => '1 week ago'
				        )
				    )
				);

                $missed = new WP_Query($args);

                // The Loop
                if ( $missed->have_posts() ) :
                    $i=1;
                    while ( $missed->have_posts() ) :
                        $missed->the_post();

                        if ($i==1){

                            $category_name = '';
                            $categories_detail=get_the_category($top_stories->ID);
                            foreach($categories_detail as $category_detail){
                                $category_name = $category_detail->cat_name;
                                break;
                            }

                            ?>

                            <div class="middle-block var66p tablet-100">
			                    <a href="<?php the_permalink(); ?>" class="huge-news img hover-title">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="img-title"><span class="status"><?php echo $category_name; ?></span><?php the_title(); ?></span>
			                    </a>
			                </div>
			                 <div class="middle-block var33p tablet-100">
                            <?php
                        } else {
                            ?>
	                            <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
			                        <span class="img-title"><?php the_title(); ?></span>
			                    </a>
                            <?php
                        }

                        $i++;

                    endwhile;?>
                			</div>
                <?php
                endif; wp_reset_postdata();
                ?>


            </div>
        </div>
    </div>

<?php
//get_sidebar();
get_footer();
