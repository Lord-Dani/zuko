<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zuko - Вакансии</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <link rel="stylesheet" href="styles/vacancies.css">

  
  @vite(['resources/css/base.css'])        <!-- Базовые стили -->
  @vite(['resources/js/vacancies.js'])    <!-- Для vacancies.blade.php -->
  </head>
<body>
 
      <!-- Хедер -->
  <header class="main-header">
    <div class="header-left">
      <button class="menu-btn">&#9776;</button>
      <button class="theme-toggle-icon" id="theme-toggle-icon" title="Темная тема">☀</button>
    </div>
    <div class="header-center">
    <a href="{{ route('menu') }}" class="logo">Zuko</a>
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
        <a href="{{ route('menu') }}">Главная</a>
        <a href="{{ route('profile') }}">Профиль</a>
        <a href="{{ route('about') }}">О нас</a>
        <a href="{{ route('delivery') }}">Доставка</a>
        <a href="{{ route('vacancies') }}">Вакансии</a>
        <a href="{{ route('login') }}">Войти</a>
        <a href="{{ route('register') }}">Регистрация</a>
        <a href="{{ route('menu') }}#burgers">Бургеры</a>
        <a href="{{ route('menu') }}#woks">Воки</a>
        <a href="{{ route('menu') }}#snacks">Закуски</a>
        <a href="{{ route('menu') }}#drinks">Напитки</a>
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
  <main class="vacancies-container">
    <section class="vacancies-section">
      <h3 class="section-title">Присоединяйся к команде Zuko!</h3>
      
      <div class="vacancy-card">
        <div class="vacancy-header">
          <h3>Повар</h3>
          <span class="vacancy-salary">от 90 000 ₽</span>
        </div>
        <div class="vacancy-content">
          <div class="vacancy-details">
            <div class="detail-item">
              <span class="detail-icon">📍</span>
              <span>Москва, Ржанова 164</span>
            </div>
            <div class="detail-item">
              <span class="detail-icon">🕒</span>
              <span>Гибкий график</span>
            </div>
          </div>
          <div class="vacancy-description">
            <h4>Требования:</h4>
            <ul>
              <li>Опыт работы от 1 года</li>
              <li>Знание стандартов безопасности пищи</li>
              <li>Умение работать в команде</li>
            </ul>
            <button class="apply-btn">Стать частью команды ✨</button>
          </div>
        </div>
      </div>

      <div class="vacancy-card">
        <div class="vacancy-header">
          <h3>Бариста</h3>
          <span class="vacancy-salary">от 75 000 ₽</span>
        </div>
        <div class="vacancy-content">
          <div class="vacancy-details">
            <div class="detail-item">
              <span class="detail-icon">📍</span>
              <span>Москва, Речная наб. 42</span>
            </div>
            <div class="detail-item">
              <span class="detail-icon">🕒</span>
              <span>Сменный график</span>
            </div>
          </div>
          <div class="vacancy-description">
            <h4>Требования:</h4>
            <ul>
              <li>Опыт работы с кофейным оборудованием</li>
              <li>Знание основных видов кофе</li>
              <li>Дружелюбие и коммуникабельность</li>
            </ul>
            <button class="apply-btn">Присоединиться к нам  🌟</button>
          </div>
        </div>
      </div>

      <div class="vacancy-card">
        <div class="vacancy-header">
          <h3>Курьер</h3>
          <span class="vacancy-salary">от 90 000 ₽</span>
        </div>
        <div class="vacancy-content">
          <div class="vacancy-details">
            <div class="detail-item">
              <span class="detail-icon">📍</span>
              <span>Москва и область</span>
            </div>
            <div class="detail-item">
              <span class="detail-icon">🛵</span>
              <span>Собственный транспорт</span>
            </div>
          </div>
          <div class="vacancy-description">
            <h4>Требования:</h4>
            <ul>
              <li>Водительские права категории B</li>
              <li>Знание города</li>
              <li>Ответственность и пунктуальность</li>
            </ul>
            <button class="apply-btn">Начать сотрудничество 🤝</button>
          </div>
        </div>
      </div>
    </section>

    <section class="benefits-section">
      <h3 class="section-title">Наши преимущества</h3>
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">💰</div>
          <h5>Конкурентная зарплата</h5>
          <p>Ежемесячные бонусы и премии</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">🏥</div>
          <h5>Медстраховка</h5>
          <p>Полное медицинское обслуживание</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">🎓</div>
          <h5>Обучение</h5>
          <p>Профессиональное развитие за наш счет</p>
        </div>
      </div>
    </section>
  <!-- Вакансии -->
  <section class="contacts-section">
    <h3 class="section-title">📨 Контакты HR-отдела</h3>
    <div class="contacts-grid">
      <div class="contact-card">
        <div class="contact-icon">📧</div>
        <h4>Электронная почта</h4>
        <a href="mailto:hr@zuko.com">hr@zuko.com</a>
        <p>Тема письма: "Вакансия: [Должность]"</p>
      </div>
      
      <div class="contact-card">
        <div class="contact-icon">📱</div>
        <h4>Телефон/WhatsApp</h4>
        <a href="tel:+79997654321">+7 (999) 765-43-21</a>
        <p>Пн-Пт: 10:00 - 19:00</p>
        <p>Telegram: @zuko_hr</p>
      </div>
      
      <div class="contact-card">
        <div class="contact-icon">📅</div>
        <h4>Онлайн-запись</h4>
        <p>Собеседования проходят онлайн</p>
        <p>Zoom/Google Meet</p>
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


        <!-- Навигация -->
        <div class="footer-section">
          <h4 class="footer-title">Навигация</h4>
          <nav class="footer-nav">
            <a href="{{ route('menu') }}#burgers" class="nav-link">Бургеры</a>
            <a href="{{ route('menu') }}#woks" class="nav-link">Воки</a>
            <a href="{{ route('menu') }}#snacks" class="nav-link">Закуски</a>
            <a href="{{ route('menu') }}#drinks" class="nav-link">Напитки</a>
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
  <script src="scripts/vacancies.js"></script>

  @vite(['resources/js/baza.js'])         <!-- Для bazablade.php -->
  @vite(['resources/css/vacancies.css'])   <!-- Для vacancies.blade.php -->
  </body>
</html>