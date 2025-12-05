<?php get_header(); ?>

<div class="news-block var2">
    <div class="container">
        <div class="row">
            <div class="middle-block var100p">
                <div class="img large hover-title">
                    <?php the_post(); ?>
                    <?php 
                        $thumbnail_url = get_the_post_thumbnail_url(null, 'full');
                    ?>
                    <img 
                        src="<?php echo esc_url($thumbnail_url); ?>" 
                        class="responsive-img" 
                        alt="<?php the_title_attribute(); ?>" 
                        itemprop="image"
                    />
                    <div class="img-title">
                        <!--<div class="status page-title">
                            <?php //the_category(); ?>
                        </div> -->
                        <h1 class="text page-title"><?php the_title(); ?></h1>
                        <span class="author page-title"><?php the_author_posts_link(); ?></span>
                        <span class="author date">
                            Создано <?php echo get_the_date(); ?>
                        </span>
                        <span class="author date">
                            Редактировано <?php echo get_the_modified_date(); ?>
                        </span>    
                    </div>
                </div>

                <!-- Виведення хлібних крихт (breadcrumbs) -->
                <div>
                    <?php yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">','</p>' ); ?>
                </div>

                <!-- Рекламний блок -->
                <div class="lineads">
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9571991316" data-ad-format="auto" data-full-width-responsive="true"></ins>
                </div>
                <br />

                <!-- Контент для мобільних та десктопів -->
                <?php if (!wp_is_mobile()) { ?>
                    <div class="row href">
                        <div style="width: 70%;">
						<?php $url = urlencode(get_permalink()); ?>
                            <?php the_content(); ?>
							<h4>Поделиться в:</h4>
<div style="margin: 20px 0; display: flex; flex-wrap: wrap; gap: 10px;">

    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #3b5998; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        Facebook
    </a>

    <!-- Telegram -->
    <a href="https://t.me/share/url?url=<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #0088cc; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        Telegram
    </a>

    <!-- VKontakte -->
    <a href="https://vk.com/share.php?url=<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #4c75a3; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        VK
    </a>

    <!-- ChatGPT -->
    <a href="https://chat.openai.com/?q=О+чем+эта+статья+<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #10a37f; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        ChatGPT
    </a>

    <!-- Google AI -->
    <a href="https://www.google.com/search?q=О+чем+эта+статья%3A+<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #4285F4; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        Google AI
    </a>
</div>
                        </div>
                        <div style="width: 30%;">
                            <!-- Рекламний блок для десктопа -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9128501331" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row href" style="margin: 1%;">
                        <div>
<h4>Поделиться в:</h4>
					<?php $url = urlencode(get_permalink()); ?>
<div style="margin: 20px 0; display: flex; flex-wrap: wrap; gap: 10px;">

    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #3b5998; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        Facebook
    </a>

    <!-- Telegram -->
    <a href="https://t.me/share/url?url=<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #0088cc; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        Telegram
    </a>

    <!-- VKontakte -->
    <a href="https://vk.com/share.php?url=<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #4c75a3; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        VK
    </a>

    <!-- ChatGPT -->
    <a href="https://chat.openai.com/?q=О+чем+эта+статья+<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #10a37f; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        ChatGPT
    </a>

    <!-- Google AI -->
    <a href="https://www.google.com/search?q=О+чем+эта+статья%3A+<?= $url ?>" target="_blank"
       style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #4285F4; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
        Google AI
    </a>
</div>

                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php } ?>

                <!-- Теги статті -->
                <div class="tags">
                    <?php the_tags(); ?>
                </div>

                <!-- Підписка / Коментарі -->
                <div class="middle-block var100p brd">
                    <p style="color: #ffffff; font-size: large;">
                        Отблагодарить нас за нашы труды вы можете поделившись ссылкой, либо отключив адблок <b>Но лучше поделитесь ссылкой</b>. Если есть желание дополнить статью, то напишите свой комментарий ниже, либо на почту <b>gameswalkercom@gmail.com</b>
                    </p>
                </div>
            </div>

            <!-- Виведення останніх статей тієї ж категорії -->
            <?php 
                $category = get_the_category(); 
                $posts = get_posts( array( 
                    'category' => $category[0]->term_id, // Використовуємо ID категорії
                    'orderby' => 'date',
                    'numberposts' => 4
                ));
                if ($posts) : 
                    foreach ($posts as $post) : setup_postdata($post); ?>
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
                    <?php endforeach; 
                endif; 
                wp_reset_postdata(); 
            ?>

            <!-- Інформація про автора -->
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

        <!-- Виведення додаткових постів для мобільних -->
        <?php if ( wp_is_mobile() ) { ?>
            <div class="middle-block var100p" style="padding: 0;">
                <?php 
                    if (function_exists('display_related_posts')) {
                        display_related_posts();
                    }
                ?>
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9128501331" data-ad-format="auto" data-full-width-responsive="true"></ins>
            </div>
        <?php } ?>

        <!-- Коментарі -->
        <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        ?>

        <!-- Рекомендації за темою -->
        <div class="middle-block var100p">
            <div class="border-title">Это очень интересно, советуем посмотреть</div>
            <div class="two-in-row full-width">
                <?php
                    $specific_page_ids = array(1568, 3606); // Заміна на ID потрібних сторінок
                    $args = array(
                        'posts_per_page' => 2, // Виводимо 2 сторінки
                        'post_type'      => 'page', // Використовуємо тип 'page'
                        'post__in'       => $specific_page_ids,
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while ($query->have_posts()): $query->the_post(); ?>
                            <div class="img mobile-100">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <div class="img-title" style="max-width: 100%; display: block;">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>