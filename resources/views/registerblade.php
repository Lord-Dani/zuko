<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zuko - Регистрация</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <link rel="stylesheet" href="styles/auth.css">

  @vite(['resources/css/base.css'])        <!-- Базовые стили -->
  @vite(['resources/js/auth.js'])         <!-- Для auth-страниц -->
</head>
<body>
  <!-- Хедер -->
  <header class="main-header">
    <div class="header-left">
      <button class="back-btn">
        ← <span class="back-text">Назад</span></button>
      <button class="theme-toggle-icon" id="theme-toggle-icon" title="Темная тема">☀</button>
    </div>
    <div class="header-center">
      <a href="baza.html" class="logo">Zuko</a>
    </div>
    <div class="header-right">
    </div>
  </header>

  <!-- Основное содержимое -->
  <main>
    <div class="auth-container">
      <h1 class="auth-title">Регистрация</h1>
      
      <form class="auth-form" id="register-form">
        <div class="form-group">
          <label for="register-name">Имя</label>
          <input type="text" id="register-name" class="form-control" placeholder="Ваше имя" required>
        </div>
        
        <div class="form-group">
          <label for="register-email">Email</label>
          <input type="email" id="register-email" class="form-control" placeholder="Ваш email" required>
        </div>
        
        <div class="form-group">
          <label for="register-phone">Телефон</label>
          <input type="tel" id="register-phone" class="form-control" placeholder="+7 (___) ___-__-__" required>
        </div>
        
        <div class="form-group">
          <label for="register-password">Пароль</label>
          <div class="password-container">
            <input type="password" id="register-password" class="form-control" placeholder="Придумайте пароль" required>
            <button type="button" class="toggle-password">👁️</button>
          </div>
        </div>
        
        <div class="form-group">
          <label for="register-confirm">Подтверждение пароля</label>
          <div class="password-container">
            <input type="password" id="register-confirm" class="form-control" placeholder="Повторите пароль" required>
            <button type="button" class="toggle-password">👁️</button>
          </div>
        </div>
        
        <div class="form-group agree-group">
          <input type="checkbox" id="register-agree" required>
          <label for="register-agree">Я согласен с <a href="/terms" class="auth-link">условиями использования</a></label>
        </div>
        
        <button type="submit" class="auth-btn">Зарегистрироваться</button>
      </form>
      
      <div class="auth-footer">
        <p>Уже есть аккаунт? <a href="login.html" class="auth-link">Войти</a></p>
      </div>
      
    </div>
  </main>

  <!-- Футер -->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <div class="legal-info">
          <p class="slogan">Zuko – секрет сочного вкуса</p>
          <p class="copyright">© Zuko, <span id="current-year"></span>. Все права защищены</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="scripts/baza.js"></script>
  <script src="scripts/auth.js"></script>
  @vite(['resources/js/baza.js'])         <!-- Для bazablade.php -->
  @vite(['resources/css/delivery.css'])    <!-- Для delivery.blade.php -->
</body>
</html>