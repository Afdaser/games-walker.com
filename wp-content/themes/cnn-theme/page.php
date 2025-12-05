     <?php
		 get_header();
		  ?>
     <div class="news-block var2">
       <div class="container">
         <div class="row" itemscope itemtype="https://schema.org/Article">
           <div class="middle-block var100p">
<div class="img large hover-title">
    <?php the_post(); ?>
    <?php 
        // Визначення стилю зображення для мобільних та десктопних пристроїв
        $thumbnail_style = wp_is_mobile() ? 'width:100%;height:auto;' : 'width:688px;height:688px;';

        // Отримання URL зображення
        $thumbnail_url = get_the_post_thumbnail_url(null, 'full');
    ?>
    <img 
        src="<?php echo esc_url($thumbnail_url); ?>" 
        style="<?php echo esc_attr($thumbnail_style); ?>" 
        alt="<?php the_title_attribute(); ?>" 
        itemprop="image"
    />
    <meta itemprop="image" content="<?php echo esc_url($thumbnail_url); ?>" />			 
    <div class="img-title">
        <h1 itemprop="headline" class="text page-title"><?php the_title(); ?></h1>
        <span class='author page-title' itemprop="author" itemscope itemtype="https://schema.org/Person">
            <a itemprop="url" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php echo esc_attr(sprintf(__('Posts by %s'), get_the_author())); ?>" rel="author">
                <span itemprop="name"><?php the_author(); ?></span>
            </a>
        </span>
        <?php
        // Отримання дати в форматі ISO 8601 та стандартному форматі
        $post_date_iso = get_the_date('c');
        $post_date_display = get_the_date();
        $post_modified_date_iso = get_the_modified_date('c');
        $post_modified_date_display = get_the_modified_date();
        ?>
        <span class="author date" itemprop="datePublished" content="<?php echo esc_attr($post_date_iso); ?>">
            Создано <?php echo esc_html($post_date_display); ?>
        </span>
        <span class='author date' itemprop="dateModified" content="<?php echo esc_attr($post_modified_date_iso); ?>">
            Редактировано <?php echo esc_html($post_modified_date_display); ?>
        </span>    
    </div>
</div>




             <div>
               <?php yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">','</p>' ); ?>
             </div>
             <div class="line ads">
               <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9571991316" data-ad-format="auto" data-full-width-responsive="true"></ins>
             </div>
             <span class="text-small by by" style='font-family: CNN,Helvetica Neue,Helvetica,Arial,Utkal,sans-serif; font-weight: 300; -webkit-font-smoothing: antialiased; font-size: 18px; font-size: 1.2rem; line-height: 1.66667; color:#737373;'>

             </span>
             <br />
             <? if(!wp_is_mobile()){?>
             <div class="row href">
               <div style="width: 70%;">
                 <?php the_content(); ?>
               </div>
               <div style="width: 30%;">
                 <!--	<?php dynamic_sidebar( 'for page' ); ?>	 -->
                 <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9128501331" data-ad-format="auto" data-full-width-responsive="true"></ins>
               </div>
             </div>
             <?}else{?>
             <div class="row href" style="margin: 1%;">
				 <div>
					<?php the_content(); ?> 
				 </div>
             </div>
             <?}?>
             <div class="tags">
               <?php 
						the_tags();
							?>
             </div>
             <div class="middle-block var100p brd">
               <p style="color: #ffffff; font-size: large;">
                   Отблагодарить нас за нашы труды вы можете поделившись ссылкой, либо отключив адблок <b>Но лучше поделитесь ссылкой</b>. Если есть желание дополнить статью, то напишите свой комментарий ниже, либо на почту <b>gameswalkercom@gmail.com</b>
               </p>
             </div>
           </div>
           <?php $category = get_the_category(); ?>
           <?php $posts = get_posts ("category=$category&orderby=date&numberposts=4"); ?>
           <?php if ($posts) : ?>
           <?php foreach ($posts as $post) : setup_postdata ($post); ?>
           <div class="middle-block var25p tablet-50">
             <div class="img">
               <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail(); ?>
               </a>
               <div class="img-title">
                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               </div>
             </div>
           </div>
           <?php endforeach; ?>
           <?php endif; ?>
           <?php wp_reset_postdata(); ?>
           <div class="middle-block-avatar-layout var100p">
             <div class="content-wrapper">
               <div class="avatar">
                 <img src="<?= get_wp_user_avatar_src() ?>" alt="Автор статьи" class="wp-user-avatar" loading="lazy">
               </div>
               <div class="descriptionavatar">
                 <?php pinterest(); ?>
               </div>
             </div>
             <div class="authorbottom">
               <p>Все статьи автора: <?php the_author_posts_link(); ?></p>
             </div>
           </div>

         </div>
         <? if ( wp_is_mobile() ){?>
         <div class="middle-block var100p">
           <?php dynamic_sidebar( 'for page' ); ?>
           <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9128501331" data-ad-format="auto" data-full-width-responsive="true"></ins>
         </div>
         <?}?>
		   <?php comments_template(); ?>
         <div class="middle-block var100p">
           <div class="border-title">Это очень интересно, советуем посмотреть</div>
           <div class="two-in-row full-width">
             <!-- Левая часть: Последний пост -->
             <?php
        $latest_post_query = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type'      => 'post',
            'post_status'    => 'publish'
        ));

        if ($latest_post_query->have_posts()):
            while ($latest_post_query->have_posts()): 
                $latest_post_query->the_post();
                ?>
             <div class="img mobile-100">
               <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail(); ?>
               </a>
               <div class="img-title" style="max-width: 100%; display: block;">
                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               </div>
             </div>

             <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
             <!-- Правая часть: Последняя страница -->
             <?php
        $latest_page_query = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type'      => 'page',
            'post_status'    => 'publish'
        ));

        if ($latest_page_query->have_posts()):
            while ($latest_page_query->have_posts()): 
                $latest_page_query->the_post();
                ?>
             <div class="img mobile-100">
               <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail(); ?>
               </a>
               <div class="img-title" style="max-width: 100%; display: block;">
                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               </div>
             </div>
             <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
			   <?php wp_reset_query(); ?>  <!-- //се зміна -->
           </div>
         </div>
       </div>
     </div>
     <?php
get_footer();
 ?>
