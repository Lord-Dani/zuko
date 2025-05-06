<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zuko - Доставка</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <link rel="stylesheet" href="styles/delivery.css">

  @vite(['resources/css/base.css'])        <!-- Базовые стили -->
  @vite(['resources/js/delivery.js'])     <!-- Для delivery.blade.php -->
  </head>
<body>
  <header class="main-header">
    <div class="header-left">
      <button class="menu-btn">&#9776;</button>
      <button class="theme-toggle-icon" id="theme-toggle-icon" title="Темная тема">☀</button>
    </div>
    <div class="header-center">
      <a href="#" class="logo">Zuko</a>
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
  <main class="delivery-container">
    <section class="delivery-section">
      <h3 class="section-title">Доставка еды от Zuko</h3>
      
      <div class="delivery-hero">
        <div class="hero-image">
          <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Доставка еды">
        </div>
        <div class="hero-text">
          <p>Быстрая и вкусная доставка ваших любимых блюд из Zuko прямо к вашему порогу!</p>
          <a href="baza.html" class="order-button">Заказать сейчас</a>
        </div>
      </div>
    </section>

    <section class="delivery-section">
      <h3 class="section-title">Как мы работаем</h3>
      <div class="steps-grid">
        <div class="step-card">
          <div class="step-number">1</div>
          <h3>Выберите блюда</h3>
          <p>Откройте наше меню и добавьте в корзину всё, что хотите попробовать</p>
        </div>
        <div class="step-card">
          <div class="step-number">2</div>
          <h3>Оформите заказ</h3>
          <p>Укажите адрес доставки и удобное время получения</p>
        </div>
        <div class="step-card">
          <div class="step-number">3</div>
          <h3>Оплатите заказ</h3>
          <p>Выберите удобный способ оплаты: онлайн или курьеру</p>
        </div>
        <div class="step-card">
          <div class="step-number">4</div>
          <h3>Получите заказ</h3>
          <p>Наслаждайтесь свежими и вкусными блюдами от Zuko</p>
        </div>
      </div>
    </section>

    <section class="delivery-section">
      <h3 class="section-title">Условия доставки</h3>
      <div class="conditions-grid">
        <div class="condition-card">
          <div class="condition-icon">⏱️</div>
          <h3>Время доставки</h3>
          <p>30-60 минут в зависимости от загруженности ресторана и расстояния</p>
        </div>
        <div class="condition-card">
          <div class="condition-icon">🚗</div>
          <h3>Зона доставки</h3>
          <p>Доставляем в пределах 10 км от наших ресторанов</p>
        </div>
        <div class="condition-card">
          <div class="condition-icon">💰</div>
          <h3>Минимальный заказ</h3>
          <p>500 рублей для доставки, 300 рублей для самовывоза</p>
        </div>
        <div class="condition-card">
          <div class="condition-icon">📦</div>
          <h3>Упаковка</h3>
          <p>Используем экологичную упаковку, которая сохраняет температуру блюд</p>
        </div>
      </div>
    </section>

    <section class="delivery-section">
      <h3 class="section-title">Способы оплаты</h3>
      <div class="conditions-grid">
        <div class="condition-card">
          <div class="condition-icon">💰</div>
          <h3>Наличными</h3>
          <p>Курьеру при получении заказа</p>
        </div>
        <div class="condition-card">
          <div class="condition-icon">💳</div>
          <h3>Картой</h3>
          <p>Курьеру или онлайн при оформлении</p>
        </div>
        <div class="condition-card">
          <div class="condition-icon">📱</div>
          <h3>СБП</h3>
          <p>Быстрый перевод по номеру телефона</p>
        </div>
        <div class="condition-card">
          <div class="condition-icon">🏦</div>
          <h3>Онлайн-банкинг</h3>
          <p>Оплата через интернет-банк</p>
        </div>
      </div>
    </section>

    <section class="delivery-section faq-section">
      <h3 class="section-title">Частые вопросы</h3>
      <div class="faq-accordion">
        <div class="faq-item">
          <button class="faq-question">Как узнать статус моего заказа?</button>
          <div class="faq-answer">
            <p>После оформления заказа вы получите SMS с номером заказа и ссылкой для отслеживания. Также вы можете позвонить нам по телефону +7 (999) 123-45-67.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Можно ли изменить заказ после оформления?</button>
          <div class="faq-answer">
            <p>Да, если кухня еще не начала готовить ваш заказ. Позвоните нам как можно скорее по телефону +7 (999) 123-45-67.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">Что делать, если в заказе что-то не так?</button>
          <div class="faq-answer">
            <p>Позвоните нам в течение 30 минут после получения заказа, и мы оперативно решим проблему: заменим блюдо или вернем деньги.</p>
          </div>
        </div>
      </div>
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
    
      <div class="footer-section">
        <h4 class="footer-title">Навигация</h4>
        <nav class="footer-nav">
          <a href="baza.html#burgers" class="nav-link">Бургеры</a>
          <a href="baza.html#woks" class="nav-link">Воки</a>
          <a href="baza.html#snacks" class="nav-link">Закуски</a>
          <a href="baza.html#drinks" class="nav-link">Напитки</a>
          <a href="about.html" class="nav-link">О нас</a>
          <a href="delivery.html" class="nav-link">Доставка</a>
        </nav>
      </div>
    
      <div class="footer-section">
        <h4 class="footer-title">Часы работы</h4>
        <div class="working-hours">
          <div class="hours-item">
            <span class="hours-icon">🕒</span>
            <span>Ежедневно с 12:00 до 23:00</span>
          </div>
          <div class="hours-item">
            <span class="hours-icon">🍔</span>
            <span>Кухня до 22:30</span>
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
  <script src="scripts/delivery.js"></script>
  @vite(['resources/js/baza.js'])         <!-- Для bazablade.php -->
  @vite(['resources/css/delivery.css'])    <!-- Для delivery.blade.php -->
</body>
</html>