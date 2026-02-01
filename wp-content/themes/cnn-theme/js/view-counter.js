// Обробник точного підрахунку переглядів через AJAX, щоб кеш не впливав на лічильник.
(function () {
  if (!window.cnnThemeViewCounter) {
    return;
  }

  var payload = new URLSearchParams();
  payload.append('action', 'cnn_theme_count_view');
  payload.append('nonce', window.cnnThemeViewCounter.nonce);
  payload.append('postId', window.cnnThemeViewCounter.postId);

  fetch(window.cnnThemeViewCounter.ajaxUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
    },
    body: payload.toString()
  }).catch(function () {
    // Навмисно ігноруємо помилку, щоб не ламати сторінку для користувача.
  });
})();
