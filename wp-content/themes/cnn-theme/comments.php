<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // Перевірка на наявність коментарів
    if ( have_comments() ) :
        ?>
        <h3 class="comments-title">
            <?php
            $cnn_theme_comment_count = get_comments_number();
            if ( '1' === $cnn_theme_comment_count ) {
                printf(
                    esc_html__( 'Один комментарий для статьи &ldquo;%1$s&rdquo;', 'cnn-theme' ),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf(
                    esc_html( _nx( '%1$s комментарий для статьи &ldquo;%2$s&rdquo;', '%1$s комментариев для статьи &ldquo;%2$s&rdquo;', $cnn_theme_comment_count, 'comments title', 'cnn-theme' ) ),
                    number_format_i18n( $cnn_theme_comment_count ),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h3><!-- .comments-title -->

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
            ) );
            ?>
        </ol><!-- .comment-list -->

        <?php the_comments_navigation(); ?>

        <?php
        // Якщо коментарі закриті і є коментарі, показуємо відповідне повідомлення
        if ( ! comments_open() ) :
            ?>
            <p class="no-comments"><?php esc_html_e( 'Комментарии закрыты.', 'cnn-theme' ); ?></p>
            <?php
        endif;

    endif; // Перевірка на наявність коментарів

    // Виведення форми для коментарів
    comment_form();
    ?>

</div><!-- #comments -->
