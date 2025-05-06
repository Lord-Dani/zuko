// auth.js - Скрипт для работы с формами авторизации

document.addEventListener('DOMContentLoaded', () => {
  // Инициализация текущего года в футере
  document.getElementById('current-year').textContent = new Date().getFullYear();
  
  // Переключение видимости пароля
  document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', function() {
      const input = this.previousElementSibling;
      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);
      this.textContent = type === 'password' ? '👁️' : '🙈';
    });
  });
  
  // Валидация формы регистрации
  const registerForm = document.getElementById('register-form');
  if (registerForm) {
    registerForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const password = this.querySelector('#register-password').value;
      const confirm = this.querySelector('#register-confirm').value;
      
      if (password !== confirm) {
        showMessage('Пароли не совпадают', 'error');
        return;
      }
      
      if (password.length < 6) {
        showMessage('Пароль должен содержать минимум 6 символов', 'error');
        return;
      }
      
      // Здесь должна быть логика отправки формы
      showMessage('Регистрация прошла успешно!', 'success');
      setTimeout(() => {
        window.location.href = 'profile.html';
      }, 1500);
    });
  }
  
  // Валидация формы входа
  const loginForm = document.getElementById('login-form');
  if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Здесь должна быть логика отправки формы
      showMessage('Вход выполнен успешно!', 'success');
      setTimeout(() => {
        window.location.href = 'profile.html';
      }, 1500);
    });
  }
  
  // Валидация формы восстановления пароля
  const forgotForm = document.getElementById('forgot-form');
  if (forgotForm) {
    forgotForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Здесь должна быть логика отправки формы
      showMessage('Инструкции по восстановлению пароля отправлены на ваш email', 'success');
    });
  }
  
  // Функция показа сообщений
  function showMessage(text, type) {
    let message = document.querySelector('.auth-message');
    
    if (!message) {
      message = document.createElement('div');
      message.className = `auth-message ${type}`;
      const container = document.querySelector('.auth-container');
      const form = document.querySelector('.auth-form');
      container.insertBefore(message, form);
    } else {
      message.className = `auth-message ${type}`;
    }
    
    message.textContent = text;
    
    setTimeout(() => {
      message.style.opacity = '1';
    }, 10);
  }
  
  // Маска для телефона
  const phoneInput = document.getElementById('register-phone');
  if (phoneInput) {
    phoneInput.addEventListener('input', function(e) {
      let value = this.value.replace(/\D/g, '');
      let formattedValue = '';
      
      if (value.length > 0) {
        formattedValue = '+7 (';
        if (value.length > 1) {
          formattedValue += value.substring(1, Math.min(4, value.length));
        }
        if (value.length >= 4) {
          formattedValue += ') ' + value.substring(4, Math.min(7, value.length));
        }
        if (value.length >= 7) {
          formattedValue += '-' + value.substring(7, Math.min(9, value.length));
        }
        if (value.length >= 9) {
          formattedValue += '-' + value.substring(9, Math.min(11, value.length));
        }
      }
      
      this.value = formattedValue;
    });
  }
  // Возврат на предыдущую страницу
   document.querySelectorAll('.back-btn').forEach(btn => {
   btn.addEventListener('click', () => window.history.back());
   });
});