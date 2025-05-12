// Обновленный vacancies.js
document.addEventListener('DOMContentLoaded', () => {
  // Анимация при скролле
  const animateOnScroll = () => {
    document.querySelectorAll('.vacancy-card, .contacts-card').forEach(element => {
      const rect = element.getBoundingClientRect();
      if (rect.top < window.innerHeight * 0.8) {
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
      }
    });
  };

  // Обработчик для кнопки
  document.querySelectorAll('.apply-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      showNotification('Свяжитесь с нами через контакты ниже 👇 Присоединяйтесь к крутой команде! 🚀');
    });
  });

  // Функция показа уведомления
  const showNotification = (message) => {
    const notification = document.createElement('div');
    notification.className = 'vacancy-notification';
    const emojis = ['🎉', '✨', '🚀',  '🤝', '🌟', '💡', '👏'];
    const randomEmoji = emojis[Math.floor(Math.random() * emojis.length)];
    
    // В функции showNotification замените строку с emoji на:
    notification.innerHTML = `
      <div class="notification-content">
        <span class="notification-emoji">${randomEmoji}</span>
        ${message}
      </div>
    `;
    document.body.appendChild(notification);
    
    setTimeout(() => {
      notification.classList.add('show');
      setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
          document.body.removeChild(notification);
        }, 500);
      }, 3000);
    }, 10);
  };

  window.addEventListener('scroll', animateOnScroll);
  animateOnScroll();
});