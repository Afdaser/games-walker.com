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
  const spoilers = Array.from(document.querySelectorAll('.lightweight-accordion details'));

  // Генеруємо стабільний ключ для спойлера (щоб не залежати від порядку елементів)
  const getSpoilerKey = function (details, index) {
    const wrapper = details.closest('.lightweight-accordion');
    const wrapperId = wrapper && wrapper.id ? wrapper.id : '';
    const wrapperDetails = wrapper ? Array.from(wrapper.querySelectorAll('details')) : [];
    const elementIndex = wrapperDetails.indexOf(details);
    const stableIndex = elementIndex !== -1 ? elementIndex : index;
    const baseId = wrapperId ? wrapperId + '-details' : 'lw-accordion';
    const detailsId = baseId + '-' + stableIndex;

    // Прив'язуємо ідентифікатор та ключ до DOM, щоб використовувати їх після перезавантаження
    // Унікалізація потрібна, щоб уникнути колізій та забезпечити стабільну роботу після змін у DOM.
    if (!details.id) {
      details.id = detailsId;
    }
    // Зберігаємо окремий ключ для localStorage, щоб він був стабільним навіть при зміні DOM.
    details.dataset.spoilerKey = detailsId;

    return detailsId;
  };

  // Відновлення стану спойлерів після перезавантаження
  spoilers.forEach(function (details, index) {
    const key = getSpoilerKey(details, index);
    const shouldBeOpen = localStorage.getItem('spoiler_state_' + key) === 'open';
    if (shouldBeOpen) {
      details.setAttribute('open', '');
    } else {
      details.removeAttribute('open');
    }
  });

  // Прокрутка до потрібного спойлера після перезавантаження
  const targetSpoilerKey = localStorage.getItem('scrollToSpoilerKey');
  if (targetSpoilerKey) {
    const element = spoilers.find(function (details) {
      return details.dataset.spoilerKey === targetSpoilerKey;
    });
    if (element) {
      const elementTop = element.getBoundingClientRect().top + window.scrollY;
      const offset = 100; // Відступ від верхньої частини вікна (можна налаштувати)
      window.scrollTo({
        top: elementTop - offset,
        behavior: 'smooth'
      });
    }
    // Очистка після прокрутки
    localStorage.removeItem('scrollToSpoilerKey');
  }

  // Додавання обробника кліку на заголовки спойлерів
  document.querySelectorAll('.lightweight-accordion details > summary').forEach(function (summary, index) {
    summary.addEventListener('click', function (event) {
      event.preventDefault(); // Зупиняємо стандартне розгортання, бо буде перезавантаження
      const details = summary.parentElement;
      const key = getSpoilerKey(details, index);

      // Збереження стану: відкритий чи закритий (після кліку потрібен протилежний стан)
      const isOpen = details.hasAttribute('open');
      localStorage.setItem('spoiler_state_' + key, isOpen ? 'closed' : 'open');

      // Збереження ID спойлера для прокрутки
      localStorage.setItem('scrollToSpoilerKey', key);

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
