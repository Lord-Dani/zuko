<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zuko - Магазин еды</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <!-- <link rel="stylesheet" href="{{ asset('css/base.css')  }}"> -->
  
  @vite(['resources/css/base.css'])        <!-- Базовые стили -->
  
 
</head>
<body>
  <!-- Хедер с анимациями -->
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
  <main>
    <!-- Бургеры -->
    <section id="burgers">
      <h3 class="section-title" style="margin-top:15%;">Бургеры</h3>
      <div class="cards-container">
        <!-- Бургер 1 -->
        <div class="card">
          <div class="card-inner">
            <div class="card-face card-front">
              <img src="images/burgers/classic-burger.jpg" alt="Классический бургер" class="card-image">
              <div class="card-title">Классический бургер</div>
              <div class="card-description">Нажмите, чтобы узнать подробности</div>
            </div>
            <div class="card-face card-back">
              <div class="card-title">Классический бургер</div>
              <div class="card-description">Сочная говяжья котлета, сыр чеддер, свежие овощи и фирменный соус в мягкой булочке.</div>
              <button class="buy-btn" data-price="250">Купить за 250₽</button>
            </div>
          </div>
        </div>
        <!-- Бургер 2 -->
        <div class="card">
          <div class="card-inner">
            <div class="card-face card-front">
              <img src="images/burgers/cheeseburger.jpg" alt="Чизбургер" class="card-image">
              <div class="card-title">Чизбургер</div>
              <div class="card-description">Нажмите, чтобы узнать подробности</div>
            </div>
            <div class="card-face card-back">
              <div class="card-title">Чизбургер</div>
              <div class="card-description">Говяжья котлета с плавленым сыром, луком, кетчупом и горчицей в булочке с кунжутом.</div>
              <button class="buy-btn" data-price="220">Купить за 220₽</button>
            </div>
          </div>
        </div>
        <!-- Бургер 3 -->
        <div class="card">
          <div class="card-inner">
            <div class="card-face card-front">
              <img src="images/burgers/chicken-burger.jpg" alt="Бургер с курицей" class="card-image">
              <div class="card-title">Бургер с курицей</div>
              <div class="card-description">Нажмите, чтобы узнать подробности</div>
            </div>
            <div class="card-face card-back">
              <div class="card-title">Бургер с курицей</div>
              <div class="card-description">Хрустящая куриная котлета, листья салата, помидор и соус тар-тар в булочке бриошь.</div>
              <button class="buy-btn" data-price="230">Купить за 230₽</button>
            </div>
          </div>
        </div>
        <!-- Бургер 4 -->
        <div class="card">
          <div class="card-inner">
            <div class="card-face card-front">
              <img src="images/burgers/bbq-burger.jpg" alt="Бургер BBQ" class="card-image">
              <div class="card-title">Бургер BBQ</div>
              <div class="card-description">Нажмите, чтобы узнать подробности</div>
            </div>
            <div class="card-face card-back">
              <div class="card-title">Бургер BBQ</div>
              <div class="card-description">Говяжья котлета с беконом, луковыми кольцами, сыром и соусом барбекю.</div>
              <button class="buy-btn" data-price="290">Купить за 290₽</button>
            </div>
          </div>
        </div>
        <!-- Бургер 5 -->
        <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/burgers/vegan-burger.jpg" alt="Вегетарианский бургер" class="card-image">
                <div class="card-title">Vegetarian бургер</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Vegetarian бургер</div>
                <div class="card-description">Котлета из нута и овощей, авокадо, руккола и йогуртовый соус в цельнозерновой булочке.</div>
                <button class="buy-btn" data-price="270">Купить за 270₽</button>
              </div>
            </div>
          </div>
          <!-- Бургер 6 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/burgers/double-cheese.jpg" alt="Двойной чизбургер" class="card-image">
                <div class="card-title">Двойной чизбургер</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Двойной чизбургер</div>
                <div class="card-description">Две говяжьи котлеты, двойной сыр чеддер, пикантный соус и хрустящий лук.</div>
                <button class="buy-btn" data-price="350">Купить за 350₽</button>
              </div>
            </div>
          </div>
          <!-- Бургер 7 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/burgers/mushroom-burger.jpg" alt="Бургер с грибами" class="card-image">
                <div class="card-title">Бургер с грибами</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Бургер с грибами</div>
                <div class="card-description">Говяжья котлета с шампиньонами, луком-карамель и сыром гауда в черной булочке.</div>
                <button class="buy-btn" data-price="310">Купить за 310₽</button>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Воки -->
      <section id="woks">
        <h3 class="section-title">Воки</h3>
        <div class="cards-container">
          <!-- Вок 1 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/woks/chicken-wok.jpg" alt="Вок с курицей" class="card-image">
                <div class="card-title">Вок с курицей</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Вок с курицей</div>
                <div class="card-description">Жареный рис с курицей, овощами, соевым соусом и кунжутом.</div>
                <button class="buy-btn" data-price="320">Купить за 320₽</button>
              </div>
            </div>
          </div>
          <!-- Вок 2 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/woks/beef-wok.jpg" alt="Вок с говядиной" class="card-image">
                <div class="card-title">Вок с говядиной</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Вок с говядиной</div>
                <div class="card-description">Лапша удон с говядиной, болгарским перцем и острой заправкой.</div>
                <button class="buy-btn" data-price="380">Купить за 380₽</button>
              </div>
            </div>
          </div>
          <!-- Вок 3 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/woks/seafood-wok.jpg" alt="Вок морской" class="card-image">
               <div class="card-title">Вок морской</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Вок с морепродуктами</div>
                <div class="card-description">Микс морепродуктов с овощами в устричном соусе на рисовой лапше.</div>
                <button class="buy-btn" data-price="450">Купить за 450₽</button>
              </div>
            </div>
          </div>
          <!-- Вок 4 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/woks/vegetable-wok.jpg" alt="Овощной вок" class="card-image">
                <div class="card-title">Овощной вок</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Овощной вок</div>
                <div class="card-description">Свежие овощи-гриль с тофу и кунжутной заправкой на гречневой лапше.</div>
                <button class="buy-btn" data-price="290">Купить за 290₽</button>
              </div>
            </div>
          </div>
          <!-- Вок 5 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/woks/duck-wok.jpg" alt="Вок с уткой" class="card-image">
                <div class="card-title">Вок с уткой</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Вок с уткой</div>
                <div class="card-description">Утка в апельсиновом соусе с овощами и рисовой лапшой.</div>
                <button class="buy-btn" data-price="420">Купить за 420₽</button>
              </div>
            </div>
          </div>
          <!-- Вок 6 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/woks/tom-yum.jpg" alt="Вок том-ям" class="card-image">
                <div class="card-title">Вок том-ям</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Вок том-ям</div>
                <div class="card-description">Острый соус с кокосовым молоком, креветками и рисовой лапшой.</div>
                <button class="buy-btn" data-price="370">Купить за 370₽</button>
              </div>
            </div>
          </div>
          <!-- Вок 7 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/woks/salmon-wok.jpg" alt="Вок с лососем" class="card-image">
                <div class="card-title">Вок с лососем</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Вок с лососем</div>
                <div class="card-description">Лосось на гриле с брокколи и спаржей в соусе терияки.</div>
                <button class="buy-btn" data-price="480">Купить за 480₽</button>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Закуски -->
      <section id="snacks">
        <h3 class="section-title">Закуски</h3>
        <div class="cards-container">
          <!-- Закуска 1 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/snacks/fries.jpg" alt="Картофель жареный" class="card-image">
                <div class="card-title">Картофель жареный</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Картофель по деревенски</div>
                <div class="card-description">Хрустящий картофель с травами и чесночным соусом.</div>
                <button class="buy-btn" data-price="150">Купить за 150₽</button>
              </div>
            </div>
          </div>
          <!-- Закуска 2 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/snacks/nuggets.jpg" alt="Куриные наггетсы" class="card-image">
                <div class="card-title">Куриные наггетсы</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Куриные наггетсы</div>
                <div class="card-description">6 кусочков в хрустящей панировке с соусом барбекю.</div>
                <button class="buy-btn" data-price="180">Купить за 180₽</button>
              </div>
            </div>
          </div>
          <!-- Закуска 3 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/snacks/cheese-sticks.jpg" alt="Сырные палочки" class="card-image">
                <div class="card-title">Сырные палочки</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Сырные палочки</div>
                <div class="card-description">Хрустящие палочки с сыром моцарелла и клюквенным соусом.</div>
                <button class="buy-btn" data-price="210">Купить за 210₽</button>
              </div>
            </div>
          </div>
          <!-- Закуска 4 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/snacks/wings.jpg" alt="Крылья BBQ" class="card-image">
                <div class="card-title">Крылья BBQ</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Крылья BBQ</div>
                <div class="card-description">6 куриных крылышек в соусе барбекю с сельдереем.</div>
                <button class="buy-btn" data-price="240">Купить за 240₽</button>
              </div>
            </div>
          </div>
          <!-- Закуска 5 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/snacks/onion-rings.jpg" alt="Луковые кольца" class="card-image">
                <div class="card-title">Луковые кольца</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Луковые кольца</div>
                <div class="card-description">Хрустящие кольца в пивном кляре с сырным соусом.</div>
                <button class="buy-btn" data-price="170">Купить за 170₽</button>
              </div>
            </div>
          </div>
          <!-- Закуска 6 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/snacks/mini-rolls.jpg" alt="Мини-роллы" class="card-image">
                <div class="card-title">Мини-роллы</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Мини-роллы</div>
                <div class="card-description">8 мини-роллов с курицей и овощами в кисло-сладком соусе.</div>
                <button class="buy-btn" data-price="190">Купить за 190₽</button>
              </div>
            </div>
          </div>
          <!-- Закуска 7 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/snacks/croutons.jpg" alt="Гренки с чесноком" class="card-image">
                <div class="card-title">Гренки с чесноком</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Гренки с чесноком</div>
                <div class="card-description">Хрустящие гренки с чесночным маслом и зеленью.</div>
                <button class="buy-btn" data-price="130">Купить за 130₽</button>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Напитки -->
      <section id="drinks">
        <h3 class="section-title">Напитки</h3>
        <div class="cards-container">
          <!-- Напиток 1 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/drinks/cola.jpg" alt="Кола" class="card-image">
                <div class="card-title">Кола</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Кола</div>
                <div class="card-description">Классический газированный напиток 0.5л.</div>
                <button class="buy-btn" data-price="120">Купить за 120₽</button>
              </div>
            </div>
          </div>
          <!-- Напиток 2 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/drinks/lemonade.jpg" alt="Лимонад" class="card-image">
                <div class="card-title">Лимонад</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Лимонад</div>
                <div class="card-description">Домашний лимонад с мятой и лаймом 0.4л.</div>
                <button class="buy-btn" data-price="180">Купить за 180₽</button>
              </div>
            </div>
          </div>
          <!-- Напиток 3 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/drinks/mojito.jpg" alt="Мохито" class="card-image">
                <div class="card-title">Мохито</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Мохито</div>
                <div class="card-description">Безалкогольный мохито с лаймом и мятой 0.4л.</div>
                <button class="buy-btn" data-price="200">Купить за 200₽</button>
              </div>
            </div>
          </div>
          <!-- Напиток 4 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/drinks/orange-juice.jpg" alt="Фреш апельсиновый" class="card-image">
                <div class="card-title">Фреш апельсиновый</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Фреш апельсиновый</div>
                <div class="card-description">Свежевыжатый апельсиновый сок 0.3л.</div>
                <button class="buy-btn" data-price="220">Купить за 220₽</button>
              </div>
            </div>
          </div>
          <!-- Напиток 5 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/drinks/cappuccino.jpg" alt="Капучино" class="card-image">
                <div class="card-title">Капучино</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Капучино</div>
                <div class="card-description">Классический капучино с молочной пенкой 200мл.</div>
                <button class="buy-btn" data-price="160">Купить за 160₽</button>
              </div>
            </div>
          </div>
          <!-- Напиток 6 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/drinks/latte.jpg" alt="Латте" class="card-image">
                <div class="card-title">Латте</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Латте</div>              
                  <div class="card-description">Нежный латте с молоком и пенкой 250мл.</div>
                <button class="buy-btn" data-price="180">Купить за 180₽</button>
              </div>
            </div>
          </div>
          <!-- Напиток 7 -->
          <div class="card">
            <div class="card-inner">
              <div class="card-face card-front">
                <img src="images/drinks/matcha.jpg" alt="Чай матча" class="card-image">
                <div class="card-title">Чай матча</div>
                <div class="card-description">Нажмите, чтобы узнать подробности</div>
              </div>
              <div class="card-face card-back">
                <div class="card-title">Чай матча</div>
                <div class="card-description">Традиционный японский чай с молоком 250мл.</div>
                <button class="buy-btn" data-price="190">Купить за 190₽</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  
    <!-- Футер -->
    <footer class="footer">
      <div class="footer-content">
        <!-- Контакты и соцсети -->
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

      
    
        <!-- Рабочее время -->
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
    
        <!-- Правовая информация -->
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
  <!-- Скрипты -->
  <script src="scripts/baza.js"></script>
  @vite(['resources/js/baza.js'])         <!-- Для bazablade.php -->
</body>
</html>