<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zuko - Профиль</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <link rel="stylesheet" href="styles/profile.css">

  @vite(['resources/css/base.css'])        <!-- Базовые стили -->
  @vite(['resources/js/profile.js'])      <!-- Для profile.blade.php -->
  </head>
<body>
  <!-- Хедер -->
  <header class="main-header">
    <div class="header-left">
      <button class="menu-btn">&#9776;</button>
      <button class="theme-toggle-icon" id="theme-toggle-icon" title="Темная тема">☀</button>
    </div>
    <div class="header-center">
      <a href="baza.html" class="logo">Zuko</a>
    </div>
    <div class="header-right" id="basket-trigger">
      <div class="basket">
        <span class="basket-icon">&#128722;</span>
        <span class="basket-info">0 товаров - 0₽</span>
      </div>
    </div>
  </header>

  <!-- Боковое меню -->
  <div class="sidebar-menu" id="sidebar-menu">
    <div class="sidebar-content">
      <button class="close-btn">&times;</button>
      <nav class="sidebar-nav">
        <a href="baza.html">Главная</a>
        <a href="profile.html">Профиль</a>
        <a href="about.html">О нас</a>
        <a href="delivery.html" class="nav-link">Доставка</a>
        <a href="vacancies.html">Вакансии</a>
        <a href="login.html">Войти</a>
        <a href="register.html">Регистрация</a>
        <a href="baza.html#burgers">Бургеры</a>
        <a href="baza.html#woks">Воки</a>
        <a href="baza.html#snacks">Закуски</a>
        <a href="baza.html#drinks">Напитки</a>
      </nav>
    </div>
  </div>

  <!-- Корзина -->
  <div class="basket-drawer" id="basket-drawer">
    <button class="basket-close-btn">&times;</button>
    <h3>Ваша корзина</h3>
    <div class="basket-items"></div>
    <div class="basket-total">Итого: 0₽</div>
    <div class="delivery-method">
      <h4>Способ получения</h4>
      <div class="method-options">
        <label class="method-option">
          <input type="radio" name="deliveryMethod" value="delivery" checked>
          <span>Доставка</span>
        </label>
        <label class="method-option">
          <input type="radio" name="deliveryMethod" value="pickup">
          <span>Самовывоз</span>
        </label>
      </div>
    </div>
    <div class="basket-actions">
      <button class="clear-order-btn">Очистить корзину</button>
      <button class="pay-btn">Оформить заказ</button>
    </div>
  </div>

  <!-- Основное содержимое -->
  <main class="profile-container">
    <!-- Секция профиля -->
    <section class="profile-section">
      <h3 class="section-title">Мой профиль</h3>
      <div class="profile-card">
        <div class="profile-header">
          <div class="user-avatar">👤</div>
          <div class="user-info">
            <h4 class="user-name">Иван Иванов</h4>
          </div>
        </div>
        <div class="profile-details">
          <div class="detail-item">
            <span class="detail-icon">📧</span>
            <span class="detail-value">example@zuko.com</span>
          </div>
          <div class="detail-item">
            <span class="detail-icon">📱</span>
            <span class="detail-value">+7 (999) 123-45-67</span>
          </div>
        </div>
        <a href="baza.html"><button class="baza-profile-btn">Мы всегда рады вам! 😊</button></a>   
      </div>
    </section>

    <!-- Секция доставки -->
    <section class="delivery-section">
      <h3 class="section-title">Адрес доставки</h3>
      <div class="delivery-card">
        <div class="address-form">
          <div class="saved-address" id="saved-address" style="display: none;">
            <span>📦 Текущий адрес: </span>
            <span class="address-text"></span>
            <button class="edit-address-btn">Изменить</button>
          </div>
          <input type="text" 
                 id="delivery-address" 
                 placeholder="Введите ваш адрес...   (Населеный пункт,адрес улици,номер дома)"
                 class="address-input">
          <button class="save-address-btn">Сохранить адрес</button>
        </div>
      </div>
    </section>
    <!-- Секция заказов -->
<section class="orders-section">
  <div class="orders-header">
    <h3 class="section-title">Мои заказы</h3>
    <button class="clear-history-btn">Очистить историю</button>
  </div>
  <div class="orders-list" id="orders-list">
    <!-- Заказы будут загружены через JS -->
  </div>
</section>

    <!-- Секция настроек -->
    <section class="settings-section">
      <h3 class="section-title">Настройки</h3>
      <form class="settings-form">
        <div class="form-group">
          <label>Уведомления:</label>
          <select class="notification-select">
            <option value="all">Все уведомления</option>
            <option value="important">Только важные</option>
            <option value="none">Выключить</option>
          </select>
        </div>
        <div class="form-group">
          <label>Тема оформления:</label>
          <div class="theme-switch">
            <button type="button" class="theme-option light active">Светлая</button>
            <button type="button" class="theme-option dark">Тёмная</button>
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="save-settings-btn">Сохранить изменения</button>
          <button type="button" class="logout-btn">Выйти</button>
        </div>
      </form>
    </section>
  </main>

  <!-- Футер -->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h4 class="footer-title">Контакты</h4>
        <div class="footer-contacts">
          <div class="contact-item">
            <span class="contact-icon">📍</span>
            <span>Ржанова 164, 2 этаж</span>
          </div>
          <div class="contact-item">
            <span class="contact-icon">📞</span>
            <a href="tel:+79991234567">+7 (999) 123-45-67</a>
          </div>
          <div class="contact-item">
            <span class="contact-icon">📧</span>
            <a href="mailto:info@zuko.com">info@zuko.com</a>
          </div>
          <div class="social-links">
            <a href="#" class="social-link tg-link">
              <span class="social-icon">📢</span>
              <span>Telegram</span>
            </a>
            <a href="#" class="social-link insta-link">
              <span class="social-icon">📷</span>
              <span>Instagram</span>
            </a>
          </div>
        </div>
      </div>

 <!-- Навигация -->
 <div class="footer-section">
  <h4 class="footer-title">Навигация</h4>
  <nav class="footer-nav">
    <a href="#burgers" class="nav-link">Бургеры</a>
    <a href="#woks" class="nav-link">Воки</a>
    <a href="#snacks" class="nav-link">Закуски</a>
    <a href="#drinks" class="nav-link">Напитки</a>
  </nav>
</div>

      <div class="footer-section">
        <h4 class="footer-title">Часы работы</h4>
        <div class="working-hours">
          <div class="hours-item">
            <span class="hours-icon">🕒</span>
            <span>Ежедневно с 12:00 до 21:00</span>
          </div>
          <div class="hours-item">
            <span class="hours-icon">🍔</span>
            <span>Последний заказ: 20:30</span>
          </div>
        </div>
        <button class="order-button pulse-animation">Заказать сейчас</button>
      </div>

      <div class="footer-section">
        <div class="legal-info">
          <p class="slogan">Zuko – секрет сочного вкуса</p>
          <div class="legal-links">
            <a href="/privacy" class="legal-link">Политика конфиденциальности</a>
            <a href="/terms" class="legal-link">Пользовательское соглашение</a>
          </div>
          <p class="copyright">© Zuko, <span id="current-year"></span>. Все права защищены</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="scripts/baza.js"></script>
  <script src="scripts/profile.js"></script>
  <script src="scripts/orders.js"></script>

  @vite(['resources/js/baza.js'])         <!-- Для bazablade.php -->
  @vite(['resources/css/profile.css'])     <!-- Для profile.blade.php -->
  @vite(['resources/css/orders.js'])     <!-- Для profile.blade.php -->


</body>
</html>