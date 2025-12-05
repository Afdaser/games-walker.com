<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="news-block var2">
            <div class="container">
                <div class="row">
                    <div class="middle-block var100p">
                        <div class="img large hover-title">
                            <?php
                                $thumbnail_url     = get_the_post_thumbnail_url( null, 'full' );
                                // Перевірка, щоб не вивести порожнє зображення, якщо мініатюра не задана.
                                $fallback_thumbnail = get_template_directory_uri() . '/img/default-thumb.jpg';
                                $thumbnail          = $thumbnail_url ? $thumbnail_url : $fallback_thumbnail;
                            ?>
                            <img
                                src="<?php echo esc_url( $thumbnail ); ?>"
                                class="responsive-img"
                                alt="<?php the_title_attribute(); ?>"
                                itemprop="image"
                                loading="lazy"
                            />
                            <div class="img-title">
                                <!--<div class="status page-title">
                                    <?php //the_category(); ?>
                                </div> -->
                                <h1 class="text page-title"><?php the_title(); ?></h1>
                                <span class="author page-title"><?php the_author_posts_link(); ?></span>
                                <span class="author date">
                                    Создано <?php echo esc_html( get_the_date() ); ?>
                                </span>
                                <span class="author date">
                                    Редактировано <?php echo esc_html( get_the_modified_date() ); ?>
                                </span>
                            </div>
                        </div>

                        <!-- Виведення хлібних крихт (breadcrumbs) -->
                        <div>
                            <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
                                <?php yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">', '</p>' ); ?>
                            <?php endif; ?>
                        </div>

                        <?php
                            $share_url = rawurlencode( get_permalink() );

                            /**
                             * Відображення кнопок поширення в соцмережах.
                             * Виносимо в окремий блок, щоб уникати дублювання для мобільної/десктопної версій.
                             */
                            $render_share_buttons = function ( $share_url ) {
                                ?>
                                <h4>Поделиться в:</h4>
                                <div style="margin: 20px 0; display: flex; flex-wrap: wrap; gap: 10px;">
                                    <a href="<?php echo esc_url( 'https://www.facebook.com/sharer/sharer.php?u=' . $share_url ); ?>" target="_blank"
                                        style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #3b5998; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
                                        Facebook
                                    </a>
                                    <a href="<?php echo esc_url( 'https://t.me/share/url?url=' . $share_url ); ?>" target="_blank"
                                        style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #0088cc; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
                                        Telegram
                                    </a>
                                    <a href="<?php echo esc_url( 'https://vk.com/share.php?url=' . $share_url ); ?>" target="_blank"
                                        style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #4c75a3; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
                                        VK
                                    </a>
                                    <a href="<?php echo esc_url( 'https://chat.openai.com/?q=О+чем+эта+статья+' . $share_url ); ?>" target="_blank"
                                        style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #10a37f; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
                                        ChatGPT
                                    </a>
                                    <a href="<?php echo esc_url( 'https://www.google.com/search?q=О+чем+эта+статья%3A+' . $share_url ); ?>" target="_blank"
                                        style="display: inline-flex; align-items: center; padding: 8px 14px; background-color: #4285F4; color: #fff; border-radius: 25px; font-weight: bold; text-decoration: none; font-size: 14px;">
                                        Google AI
                                    </a>
                                </div>
                                <?php
                            };
                        ?>

                        <!-- Рекламний блок -->
                        <div class="lineads">
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9571991316" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        </div>
                        <br />

                        <!-- Контент для мобільних та десктопів -->
                        <?php if ( ! wp_is_mobile() ) : ?>
                            <div class="row href">
                                <div style="width: 70%;">
                                    <?php the_content(); ?>
                                    <?php $render_share_buttons( $share_url ); ?>
                                </div>
                                <div style="width: 30%;">
                                    <!-- Рекламний блок для десктопа -->
                                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9128501331" data-ad-format="auto" data-full-width-responsive="true"></ins>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="row href" style="margin: 1%;">
                                <div>
                                    <?php $render_share_buttons( $share_url ); ?>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endif; ?>

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
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            $primary_category = $categories[0]->term_id;
                            $related_posts    = get_posts(
                                array(
                                    'category'    => $primary_category,
                                    'orderby'     => 'date',
                                    'numberposts' => 4,
                                )
                            );

                            if ( $related_posts ) :
                                foreach ( $related_posts as $related_post ) :
                                    setup_postdata( $related_post );
                                    ?>
                                    <div class="middle-block var25p tablet-50">
                                        <div class="img">
                                            <a href="<?php echo esc_url( get_permalink( $related_post ) ); ?>">
                                                <?php echo get_the_post_thumbnail( $related_post ); ?>
                                            </a>
                                            <div class="img-title">
                                                <a href="<?php echo esc_url( get_permalink( $related_post ) ); ?>"><?php echo esc_html( get_the_title( $related_post ) ); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            wp_reset_postdata();
                        }
                    ?>

                    <!-- Інформація про автора -->
                    <div class="middle-block-avatar-layout var100p">
                        <div class="content-wrapper">
                            <div class="avatar">
                                <img src="<?php echo esc_url( get_wp_user_avatar_src() ); ?>" alt="Автор статьи" class="wp-user-avatar" loading="lazy">
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
                <?php if ( wp_is_mobile() ) : ?>
                    <div class="middle-block var100p" style="padding: 0;">
                        <?php
                            if ( function_exists( 'display_related_posts' ) ) {
                                display_related_posts();
                            }
                        ?>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2328584419845560" data-ad-slot="9128501331" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    </div>
                <?php endif; ?>

                <!-- Коментарі -->
                <?php
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                ?>

                <!-- Рекомендації за темою -->
                <div class="middle-block var100p">
                    <div class="border-title">Это очень интересно, советуем посмотреть</div>
                    <div class="two-in-row full-width">
                        <?php
                            $specific_page_ids = array( 1568, 3606 ); // Заміна на ID потрібних сторінок
                            $args              = array(
                                'posts_per_page' => 2, // Виводимо 2 сторінки
                                'post_type'      => 'page', // Використовуємо тип 'page'
                                'post__in'       => $specific_page_ids,
                            );
                            $query = new WP_Query( $args );
                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) :
                                    $query->the_post();
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
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php esc_html_e( 'Вибачте, запис не знайдено.', 'cnn-theme' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
