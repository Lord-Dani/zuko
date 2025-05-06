<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zuko - О нас</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <link rel="stylesheet" href="styles/about.css">
  @vite(['resources/css/base.css'])        <!-- Базовые стили -->
  @vite(['resources/css/about.css'])       <!-- Для about.blade.php -->

</head>
<body>
  <!-- Хедер с анимациями -->
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
  <main class="about-container">
    <section class="about-section">
      <h3 class="section-title">Наша история</h3>
      <div class="about-content">
        <div class="about-image">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Интерьер ресторана Zuko">
        </div>
        <div class="about-text">
          <p>Zuko - это гастрономический проект, родившийся из любви к качественной еде и желания создать место, где каждый сможет почувствовать себя как дома. Наша история началась в 2015 году с небольшого фуд-трака, где мы подавали авторские бургеры по собственным рецептам.</p>
          <p>Благодаря уникальным вкусам и вниманию к деталям, всего за 2 года мы превратились в полноценный ресторан, а сегодня Zuko - это уже сеть из 7 заведений в Москве и Подмосковье, известная своими фирменными бургерами, азиатской кухней и особой атмосферой уюта.</p>
          <p>Мы гордимся тем, что сохранили дух маленького семейного бизнеса, даже став популярной сетью. Каждое наше блюдо - это история, которую мы рассказываем с любовью.</p>
        </div>
      </div>
    </section>

    <section class="about-section">
      <h3 class="section-title">Наши принципы</h3>
      <div class="philosophy-grid">
        <div class="philosophy-card">
          <div class="philosophy-icon">🍅</div>
          <h4>Свежие продукты</h4>
          <p>Мы работаем только с проверенными фермерскими хозяйствами и ежедневно получаем свежие овощи, мясо и морепродукты</p>
        </div>
        <div class="philosophy-card">
          <div class="philosophy-icon">👨‍🍳</div>
          <h4>Мастерство шефов</h4>
          <p>Наши повара проходят строгий отбор и регулярное обучение, чтобы поддерживать высочайший уровень кухни</p>
        </div>
        <div class="philosophy-card">
          <div class="philosophy-icon">🌱</div>
          <h4>Экологичность</h4>
          <p>Мы минимизируем использование пластика, сортируем отходы и выбираем экологичную упаковку</p>
        </div>
        <div class="philosophy-card">
          <div class="philosophy-icon">💡</div>
          <h4>Инновации</h4>
          <p>Мы постоянно экспериментируем с новыми вкусами и технологиями приготовления</p>
        </div>
      </div>
    </section>

    <section class="about-section">
      <h3 class="section-title">Наша команда</h3>
      <div class="team-grid">
        <div class="team-member">
          <img src="https://images.unsplash.com/photo-1581299894007-aaa50297cf16?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Шеф-повар">
          <h4>Михаил Волков</h4>
          <p>Главный шеф-повар</p>
          <p class="team-bio">Опыт работы 15 лет, обучался в Милане и Токио. Автор фирменных соусов Zuko.</p>
        </div>
        <div class="team-member">
          <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Повар">
          <h4>Атон Семёновов</h4>
          <p>Шеф-кондитер</p>
          <p class="team-bio">Специалист по десертам с авторским подходом. Создала линейку десертов Zuko.</p>
        </div>
        <div class="team-member">
          <img src="images/other/dobrovinskiy.jpg" alt="Бармен">
          <h4>Алексей Петров</h4>
          <p>Шеф-бармен</p>
          <p class="team-bio">Автор коктейльной карты Zuko. Специалист по крафтовым напиткам.</p>
        </div>        
      </div>
    </section>

    <section class="about-section">
      <h3 class="section-title">Наши достижения</h3>
      <div class="achievements">
        <div class="achievement-item">
          <div class="achievement-number">7</div>
          <div class="achievement-text">ресторанов в Москве и области</div>
        </div>
        <div class="achievement-item">
          <div class="achievement-number">50+</div>
          <div class="achievement-text">уникальных блюд в меню</div>
        </div>
        <div class="achievement-item">
          <div class="achievement-number">1000+</div>
          <div class="achievement-text">довольных гостей ежедневно</div>
        </div>
        <div class="achievement-item">
          <div class="achievement-number">3</div>
          <div class="achievement-text">премии в области гастрономии</div>
        </div>
      </div>
    </section>

    <section class="about-section">
      <h3 class="section-title">Наши рестораны</h3>
      <div class="locations">
        <div class="location-card">
          <h3>Zuko Central</h3>
          <p>ул. Ржанова, 164</p>
          <p>Метро: Курская</p>
          <p>Ежедневно: 12:00 - 23:00</p>
          <p>Заказ столиков: +7 (999) 123-45-67</p>
        </div> 
        <div class="location-card">
          <h3>Zuko Riverside</h3>
          <p>наб. Речная, 42</p>
          <p>Метро: Речной вокзал</p>
          <p>Ежедневно: 12:00 - 22:00</p>
          <p>Заказ столиков: +7 (999) 123-45-69</p>
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
  <script src="scripts/about.js"></script>

  @vite(['resources/js/baza.js'])         <!-- Для bazablade.php -->
  @vite(['resources/js/about.js'])        <!-- Для about.blade.php -->


</body>
</html>