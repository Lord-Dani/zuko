<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zuko - Восстановление пароля</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/base.css">
  <link rel="stylesheet" href="styles/auth.css">

  @vite(['resources/css/base.css'])        <!-- Базовые стили -->
  @vite(['resources/js/auth.js'])         <!-- Для auth-страниц -->
  <style>
    .auth-title::after {
     width: 90%;
    }  
  </style>
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
      <h1 class="auth-title">Восстановление пароля</h1>
      
      <p class="reset-instructions">
        Введите email, указанный при регистрации. Мы отправим вам инструкции по восстановлению пароля.
      </p>
      
      <form class="auth-form" id="forgot-form">
        <div class="form-group">
          <label for="forgot-email">Email</label>
          <input type="email" id="forgot-email" class="form-control" placeholder="Ваш email" required>
        </div>
        
        <button type="submit" class="auth-btn">Отправить инструкции</button>
      </form>
      
      <div class="auth-footer">
        <p>Вспомнили пароль? <a href="login.html" class="auth-link">Войти</a></p>
        <p>Нет аккаунта? <a href="register.html" class="auth-link">Зарегистрироваться</a></p>
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