<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CNN_Theme
 */
?>
</div>
<footer>
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'theme_location'    => 'menu-footer',
                'container'         => false,
                'menu_class'        => '',
                'menu_id'           => '',
                'items_wrap'        => '<ul class="block-news">%3$s</ul>',
                'walker'            => new True_Walker_Nav_Menu_Dropdown() // этот параметр нужно добавить

            );
            wp_nav_menu( $args );
            ?>

            <div class="copyright"></div>
            <div class="links">
    <?php
    $args = array(
        'theme_location'  => 'menu-links',
        'container'       => false,
        'echo'            => false,
        'items_wrap'      => '%3$s',
        'depth'           => 0,
    );

    $menu = wp_nav_menu($args);
    $menu = preg_replace('/<a /', '<a rel="nofollow" ', $menu);
    echo strip_tags($menu, '<a>');
    ?>
</div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="/wp-content/themes/cnn-theme/js/libs.min.js"></script>
<script src="/wp-content/themes/cnn-theme/js/main.js"></script>
<script>
$(function() {
  $('.ub_table-of-contents ul>li>a').click(function(){
    document.location.reload();
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Відновлення стану спойлерів після перезавантаження
  document.querySelectorAll('.lightweight-accordion details').forEach(function (details, index) {
    const shouldBeOpen = localStorage.getItem('spoiler_' + index) === 'true';
    if (shouldBeOpen) {
      details.setAttribute('open', '');
    } else {
      details.removeAttribute('open');
    }
  });

  // Прокрутка до потрібного спойлера після перезавантаження
  const targetSpoilerIndex = localStorage.getItem('scrollToSpoiler');
  if (targetSpoilerIndex !== null) {
    const element = document.querySelectorAll('.lightweight-accordion details')[targetSpoilerIndex];
    if (element) {
      const elementTop = element.getBoundingClientRect().top + window.scrollY;
      const offset = 100; // Відступ від верхньої частини вікна (можна налаштувати)
      window.scrollTo({
        top: elementTop - offset,
        behavior: 'smooth'
      });
    }
    // Очистка після прокрутки
    localStorage.removeItem('scrollToSpoiler');
  }

  // Додавання обробника кліку на заголовки спойлерів
  document.querySelectorAll('.lightweight-accordion details > summary').forEach(function (summary, index) {
    summary.addEventListener('click', function (event) {
      const details = summary.parentElement;

      // Збереження стану: відкритий чи закритий
      const isOpen = details.hasAttribute('open');
      localStorage.setItem('spoiler_' + index, !isOpen); // Зберігаємо протилежний стан

      // Збереження ID спойлера для прокрутки
      localStorage.setItem('scrollToSpoiler', index);

      // Перезавантаження сторінки
      document.location.reload();

      // Зупиняємо спливання події на інші елементи
      event.stopPropagation();
    });
  });

  // Заборона кліків на вміст спойлера
  document.querySelectorAll('.lightweight-accordion-body').forEach(function (body) {
    body.addEventListener('click', function (event) {
      event.stopPropagation();
    });
  });
});
</script>

<script>
$(function() {
  // При кліку на посилання з TOC
  $('#ez-toc-container nav ul>li>a').click(function(event) {
    event.preventDefault(); // Запобігаємо стандартній поведінці

    // Отримуємо ідентифікатор заголовка
    const targetId = $(this).attr('href');
    const offset = 100; // Відступ від верхньої частини (можна налаштувати)

    // Зберігаємо ідентифікатор у локальному сховищі
    localStorage.setItem('scrollTarget', targetId);

    // Перезавантажуємо сторінку
    document.location.reload();
  });

  // Після перезавантаження перевіряємо, чи є збережений ідентифікатор
  const scrollTarget = localStorage.getItem('scrollTarget');
  if (scrollTarget) {
    // Прокручуємо до заголовка з урахуванням відступу
    const element = $(scrollTarget);
    if (element.length) {
      $('html, body').scrollTop(element.offset().top - 100);
    }

    // Очищаємо локальне сховище
    localStorage.removeItem('scrollTarget');
  }
});
</script>



</body>
</html>