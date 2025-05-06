<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zuko - Вход</title>
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
      <button class="back-btn">← Назад</button>
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
      <h1 class="auth-title">Вход в аккаунт</h1>
      
      <form class="auth-form" id="login-form">
        <div class="form-group">
          <label for="login-email">Email</label>
          <input type="email" id="login-email" class="form-control" placeholder="Ваш email" required>
        </div>
        
        <div class="form-group">
          <label for="login-password">Пароль</label>
          <div class="password-container">
            <input type="password" id="login-password" class="form-control" placeholder="Ваш пароль" required>
            <button type="button" class="toggle-password">👁️</button>
          </div>
        </div>
        
        <button type="submit" class="auth-btn">Войти</button>
      </form>
      
      <div class="auth-footer">
        <p>Нет аккаунта? <a href="register.html" class="auth-link">Зарегистрироваться</a></p>
        <p><a href="forgot-password.html" class="auth-link">Забыли пароль?</a></p>
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