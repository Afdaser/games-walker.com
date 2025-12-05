<?php
get_header();
$user = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<?php global $authordata, $post; ?>

<!-- ProfilePage wrapper -->
<div itemscope itemtype="https://schema.org/ProfilePage">
<?php
    // Дані для microdata
    $author_id = get_the_author_meta('ID');
    $user_obj  = get_user_by('id', $author_id);

    // Дата створення профілю
    $date_created = !empty($user_obj->user_registered) ? mysql2date('c', $user_obj->user_registered) : current_time('c');

    // Дата останньої модифікації - беремо останній змінений пост автора як приблизний маркер
    $last_modified = $date_created;
    $latest_post_q = new WP_Query(array(
        'author'         => $author_id,
        'posts_per_page' => 1,
        'post_status'    => 'any',
        'orderby'        => 'modified',
        'order'          => 'DESC',
        'no_found_rows'  => true,
        'fields'         => 'ids'
    ));
    if ($latest_post_q->have_posts()) {
        $pid = $latest_post_q->posts[0];
        $last_modified = get_post_modified_time('c', true, $pid);
    }
    wp_reset_postdata();

    // Соціальні лінки з user_meta - підстав, якщо існують
    $same_as_links = array();
    $meta_keys = array('facebook', 'twitter', 'instagram', 'youtube', 'linkedin', 'user_url', 'url', 'website');
    foreach ($meta_keys as $k) {
        $v = get_user_meta($author_id, $k, true);
        if (!$v && $k === 'user_url') {
            $v = $user_obj->user_url;
        }
        if (!empty($v)) {
            $same_as_links[] = esc_url($v);
        }
    }

    // Логін як alternateName
    $alternate_name = $user_obj ? $user_obj->user_login : '';
?>
    <meta itemprop="dateCreated" content="<?php echo esc_attr($date_created); ?>" />
    <meta itemprop="dateModified" content="<?php echo esc_attr($last_modified); ?>" />

        <div class="news-block black author">
            <div class="author-profile">
                <!-- Робимо головну сутність Person -->
                <div class="container" itemprop="mainEntity" itemscope itemtype="https://schema.org/Person">
                    <meta itemprop="identifier" content="<?php echo esc_attr($author_id); ?>" />
                    <?php if (!empty($alternate_name)): ?>
                        <meta itemprop="alternateName" content="<?php echo esc_attr($alternate_name); ?>" />
                    <?php endif; ?>

                    <div class="top-side">
                        <div itemprop="name" class="name">
                            <?php echo esc_html($user->first_name . ' ' . $user->last_name); ?>
                        </div>

                        <div class="reporter">
                            <?php linkedin(); // якщо ця функція виводить посилання - воно нижче також піде у sameAs ?>
                        </div>

                        <div class='social'>
                            <?php
                                twitter();
                                facebook();
                                instagram();
                                url();
                                youtube();
                            ?>
                        </div>

                        <?php
                        // sameAs зібране з user_meta
                        if (!empty($same_as_links)) {
                            echo '<div class="social-sameas" aria-hidden="true" style="display:none">';
                            foreach ($same_as_links as $href) {
                                echo '<a itemprop="sameAs" href="' . esc_url($href) . '"></a>';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <div class="bott-side">
                        <div class="author-profile">
                        <?php
                        // Отримуємо ID поточного автора
                        $author_id = get_the_author_meta('ID');

                        // Отримуємо збережену інформацію з метаданих користувача
                        $full_bio = get_user_meta($author_id, 'full_bio', true);

                        // Отримуємо аватар автора
                        $author_avatar = get_avatar($author_id, 200);
                        $author_avatar_with_itemprop = str_replace('<img', '<img itemprop="image"', $author_avatar);

                        // Виводимо аватар автора
                        if ($author_avatar) {
                            echo '<div class="author-avatar">' . $author_avatar_with_itemprop . '</div>';
                        }

                        // Виводимо повний опис автора як description
                        if (!empty($full_bio)) {
                            echo '<div class="author-full-bio" itemprop="description">' . wpautop(wp_kses_post($full_bio)) . '</div>';
                        }
                        ?>
                            <p itemprop="jobTitle">Журналист</p>

                            <?php
                            // Кількість публікацій як InteractionCounter
                            $posts_count = (int) count_user_posts($author_id, 'post', true);
                            ?>
                            <span itemprop="agentInteractionStatistic" itemscope itemtype="https://schema.org/InteractionCounter" style="display:none">
                                <meta itemprop="interactionType" content="https://schema.org/WriteAction" />
                                <meta itemprop="userInteractionCount" content="<?php echo esc_attr($posts_count); ?>" />
                            </span>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="container">
                <div class="row">
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

                    <div class="middle-block var100p">
                      <?php $posts = get_posts("author=$authordata->ID&numberposts=2&orderby=date"); ?>
                      <?php if ($posts) : ?>
                      <?php foreach ($posts as $post) :  ?>
                      <?php the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="huge-news img hover-title">
                            <?php the_post_thumbnail(); ?>
                            <span class="img-title"><span class="status">статья</span><?php the_title(); ?></span>
                        </a>
                      <?php endforeach; ?>
                      <?php endif; ?>
                    </div>

                    <div class="middle-block var460 tablet-100">
                      <?php
                      $args = array(
                          'posts_per_page'=> 5,
                          'post_type'     => array('post'),
                          'post_status'   => array('publish'),
                          'orderby'       => 'date',
                          'order'         => 'DESC'
                      );
                      $latest = new WP_Query($args);
                      if ($latest->have_posts()) :
                          $i = 1;
                          while ($latest->have_posts()) :
                              $latest->the_post();
                              if ($i == 1){
                                  ?>
                                  <a href="<?php the_permalink(); ?>" class="title biggest"><?php the_title(); ?></a>
                                  <?php
                              } elseif ($i == 2){
                                  ?>
                                  <a href="<?php the_permalink(); ?>" class="img">
                                      <img src="<?php echo esc_url(get_the_post_thumbnail_url($latest->ID,'thumbnail')); ?>" alt="">
                                      <span class="img-title small"><?php the_title(); ?></span>
                                  </a>
                                  <?php
                              } else {
                                  $category_name = '';
                                  $categories_detail = get_the_category($latest->ID);
                                  foreach ($categories_detail as $category_detail){
                                      $category_name = $category_detail->cat_name;
                                      break;
                                  }
                                  ?>
                                  <a href="<?php the_permalink(); ?>" class="news-text">
                                      <?php if ($category_name != ''): ?>
                                          <span class="text-red"><?php echo esc_html($category_name); ?></span>&nbsp;
                                      <?php endif; ?>
                                      <?php the_title(); ?>
                                  </a>
                                  <?php
                              }
                              $i++;
                          endwhile;
                      endif; wp_reset_postdata();
                      ?>
                    </div>

                    <div class="middle-block tablet-50">
                        <div class="title">Лучшие статьи</div>
                        <?php
                        $args = array(
                            'posts_per_page'=> 5,
                            'post_type'     => array('post'),
                            'post_status'   => array('publish'),
                            'meta_key'      => 'post_views_count',
                            'orderby'       => 'post_views_count',
                            'order'         => 'DESC',
                            // Рекомендується виправити фільтр автора, але лишаємо як було
                        );
                        $top_stories = new WP_Query($args);
                        if ($top_stories->have_posts()) :
                            $i = 1;
                            while ($top_stories->have_posts()) :
                                $top_stories->the_post();

                                if ($i == 1){
                                    $category_name = '';
                                    $categories_detail = get_the_category($top_stories->ID);
                                    foreach ($categories_detail as $category_detail){
                                        $category_name = $category_detail->cat_name;
                                        break;
                                    }
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="img">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url($top_stories->ID,'thumbnail')); ?>" alt="">
                                        <span class="img-title">
                                            <?php if ($category_name != ''): ?>
                                                <span class="status"><?php echo esc_html($category_name); ?></span>
                                            <?php endif; ?>
                                            <?php the_title(); ?>
                                        </span>
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

                    <div class="middle-block tablet-50">
                        <div class="title">В фокусе</div>
                        <?php
                        $args = array(
                            'posts_per_page'=> 9,
                            'post_type'     => array('post'),
                            'post_status'   => array('publish'),
                            'orderby'       => 'date',
                            'order'         => 'DESC',
                            'meta_query'    => array(
                                'key'     => 'in_focus',
                                'value'   => 1,
                                'compare' => '='
                            )
                        );
                        $in_focus = new WP_Query($args);
                        if ($in_focus->have_posts()) :
                            $i = 1;
                            while ($in_focus->have_posts()) :
                                $in_focus->the_post();
                                if ($i == 1){
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="img">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url($in_focus->ID,'thumbnail')); ?>" alt="">
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
                        <a href="<?php echo esc_url(get_category_link(5)); ?>" class="title arrowed">
                            <?php echo esc_html(get_cat_name(5)); ?> <span class="arrow"></span>
                        </a>
                        <?php
                        $args = array(
                            'post_type'     => array('post'),
                            'post_status'   => array('publish'),
                            'orderby'       => 'date',
                            'order'         => 'DESC',
                            'cat'           => 5
                        );
                        $world = new WP_Query($args);
                        if ($world->have_posts()) :
                            $i = 1;
                            while ($world->have_posts()) :
                                $world->the_post();
                                if ($i == 1){
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="img">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url($world->ID,'thumbnail')); ?>" alt="">
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
                        <a href="<?php echo esc_url(get_category_link(6)); ?>" class="title arrowed">
                            <?php echo esc_html(get_cat_name(6)); ?><span class="arrow"></span>
                        </a>
                        <?php
                        $args = array(
                            'post_type'     => array('post'),
                            'post_status'   => array('publish'),
                            'orderby'       => 'date',
                            'order'         => 'DESC',
                            'cat'           => 6
                        );
                        $world = new WP_Query($args);
                        if ($world->have_posts()) :
                            $i = 1;
                            while ($world->have_posts()) :
                                $world->the_post();
                                if ($i == 1){
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="img">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url($world->ID,'thumbnail')); ?>" alt="">
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
                        <a href="<?php echo esc_url(get_category_link(7)); ?>" class="title arrowed">
                            <?php echo esc_html(get_cat_name(7)); ?><span class="arrow"></span>
                        </a>
                        <?php
                        $args = array(
                            'post_type'     => array('post'),
                            'post_status'   => array('publish'),
                            'orderby'       => 'date',
                            'order'         => 'DESC',
                            'cat'           => 7
                        );
                        $world = new WP_Query($args);
                        if ($world->have_posts()) :
                            $i = 1;
                            while ($world->have_posts()) :
                                $world->the_post();
                                if ($i == 1){
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="img">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url($world->ID,'thumbnail')); ?>" alt="">
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

                    <div class="middle-block var100p">
                        <div class="row">
                        <?php $posts = get_posts('numberposts=16'); ?>
                        <?php foreach ($posts as $post): ?>
                        <?php the_post(); ?>
                            <div class="middle-block var25p tablet-50">
                                <a href="<?php the_permalink(); ?>" class="img">
                                    <?php the_post_thumbnail(); ?>
                                    <span class="img-title font-light"><?php the_title(); ?></span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div><!-- end ProfilePage wrapper -->

<?php
get_footer();
?>
