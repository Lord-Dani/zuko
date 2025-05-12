document.addEventListener('DOMContentLoaded', () => {
    // Инициализация текущего года в футере
    document.getElementById('current-year').textContent = new Date().getFullYear();
    
    // Анимация для карточек
    const cards = document.querySelectorAll('.step-card, .condition-card');
    cards.forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px)';
      });
      
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
      });
    });
    
    // Аккордеон для FAQ
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
      question.addEventListener('click', () => {
        const item = question.parentNode;
        item.classList.toggle('active');
        
        // Закрываем другие открытые вопросы
        faqQuestions.forEach(q => {
          if (q !== question && q.parentNode.classList.contains('active')) {
            q.parentNode.classList.remove('active');
          }
        });
      });
    });
    
   
  });