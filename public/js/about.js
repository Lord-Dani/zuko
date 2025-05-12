document.addEventListener('DOMContentLoaded', () => {
    // Инициализация текущего года в футере
    document.getElementById('current-year').textContent = new Date().getFullYear();
    
    // Анимация для достижений
    const achievementItems = document.querySelectorAll('.achievement-item');
    achievementItems.forEach(item => {
      item.addEventListener('mouseenter', () => {
        const number = item.querySelector('.achievement-number');
        number.style.transform = 'scale(1.1)';
        number.style.transition = 'transform 0.3s ease';
      });
      
      item.addEventListener('mouseleave', () => {
        const number = item.querySelector('.achievement-number');
        number.style.transform = 'scale(1)';
      });
    });
   
  });