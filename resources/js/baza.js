document.addEventListener('DOMContentLoaded', () => {
  // Модуль управления темой
  const themeModule = {
      toggleButton: document.getElementById('theme-toggle-icon'),
      init() {
          const savedTheme = localStorage.getItem('theme') || 
              (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
          document.body.classList.toggle('dark-mode', savedTheme === 'dark');
          this.updateToggleButton();
          this.toggleButton.addEventListener('click', (e) => this.toggleTheme(e));
      },
      toggleTheme(e) {
          e.stopPropagation();
          document.body.classList.toggle('dark-mode');
          localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' : 'light');
          this.updateToggleButton();
      },
      updateToggleButton() {
          const isDark = document.body.classList.contains('dark-mode');
          this.toggleButton.textContent = isDark ? '🌙' : '☀';
          this.toggleButton.title = isDark ? 'Светлая тема' : 'Тёмная тема';
          this.toggleButton.style.transform = 'rotate(360deg)';
          setTimeout(() => this.toggleButton.style.transform = '', 500);
      }
  };

  // Модуль корзины
  const cartModule = {
      items: [],
      total: 0,
      elements: {
          container: document.querySelector('.basket-items'),
          total: document.querySelector('.basket-total'),
          info: document.querySelector('.basket-info'),
          drawer: document.getElementById('basket-drawer')
      },
      init() {
          this.addEventListeners();
          this.restoreCart();
          this.initDeliveryMethods(); // Новая инициализация
      },

      initDeliveryMethods() {
        document.querySelectorAll('.method-option input').forEach(radio => {
            radio.addEventListener('change', () => this.handleMethodChange(radio));
        });
    },

    handleMethodChange(radio) {
        const methodOption = radio.closest('.method-option');
        document.querySelectorAll('.method-option').forEach(opt => 
            opt.classList.remove('active')
        );
        methodOption.classList.add('active');
    },
      addEventListeners() {
          document.querySelectorAll('.buy-btn').forEach(btn => 
              btn.addEventListener('click', (e) => this.addItem(e))
          );
          
          document.querySelector('#basket-trigger').addEventListener('click', (e) => 
              this.toggleDrawer(e)
          );
          
          document.querySelector('.basket-close-btn').addEventListener('click', (e) => 
              this.toggleDrawer(e)
          );
          
          document.querySelector('.clear-order-btn').addEventListener('click', () => 
              this.clearCart()
          );
          
          document.querySelector('.pay-btn').addEventListener('click', () => 
              this.processOrder()
          );
          
          this.elements.container.addEventListener('click', (e) => 
              this.handleItemClick(e)
          );
          
          document.querySelector('.order-button').addEventListener('click', () => 
              this.openCartFromFooter()
          );
      },
      addItem(e) {
          const card = e.target.closest('.card');
          const title = card.querySelector('.card-back .card-title').textContent;
          const description = card.querySelector('.card-back .card-description').textContent;
          const price = parseInt(e.target.dataset.price);
          
          this.items.push({ title, description, price });
          this.total += price;
          this.updateUI();
          this.animateAddButton(e.target);
          this.saveCart();
      },
      removeItem(index) {
          this.total -= this.items[index].price;
          this.items.splice(index, 1);
          this.updateUI();
          this.saveCart();
      },
      clearCart() {
          if (!this.items.length || !confirm('Вы уверены, что хотите очистить корзину?')) return;
          
          this.items = [];
          this.total = 0;
          this.showEmptyState();
          this.saveCart();
      },
      processOrder() {
        const selectedMethod = document.querySelector('input[name="deliveryMethod"]:checked');
        if (!selectedMethod) return alert('Пожалуйста, выберите способ получения!');
        
        const methodValue = selectedMethod.value;
        const methodText = selectedMethod.parentElement.querySelector('span').textContent;

        const order = {
            id: Date.now(),
            date: new Date().toLocaleString(),
            items: [...this.items],
            total: this.total,
            status: 'Оформлен',
            deliveryMethod: methodValue,
            deliveryMethodText: methodText
        };
          
          // Сохраняем в историю заказов
          this.saveOrderToHistory(order);
          
          alert(`Заказ #${order.id} на сумму ${this.total.toLocaleString()}₽ оформлен!\nФункционал оплаты в разработке.`);
          this.clearCart();
          this.toggleDrawer();
      },
      saveOrderToHistory(order) {
          let orders = JSON.parse(localStorage.getItem('orderHistory')) || [];
          orders.unshift(order); // Добавляем новый заказ в начало
          localStorage.setItem('orderHistory', JSON.stringify(orders));
      },
      updateUI() {
          this.elements.container.innerHTML = this.items
              .map((item, index) => `
                  <div class="basket-item">
                      <div class="basket-item-info">
                          <div class="basket-item-title">${item.title}</div>
                          <div class="basket-item-desc">${item.description.substring(0, 60)}...</div>
                          <div class="basket-item-price">${item.price.toLocaleString()}₽</div>
                      </div>
                      <button class="remove-btn" data-index="${index}">&times;</button>
                  </div>
              `).join('');
          
          this.elements.total.textContent = `Итого: ${this.total.toLocaleString()}₽`;
          this.elements.info.textContent = 
              `${this.items.length} товаров - ${this.total.toLocaleString()}₽`;
      },
      toggleDrawer(e) {
          if (e) e.stopPropagation();
          this.elements.drawer.classList.toggle('active');
      },
      handleItemClick(e) {
          if (e.target.classList.contains('remove-btn')) {
              const index = parseInt(e.target.dataset.index);
              this.animateRemoveButton(e.target);
              this.removeItem(index);
          }
      },
      animateAddButton(button) {
          button.textContent = 'Добавлено!';
          button.style.backgroundColor = '#2ecc71';
          setTimeout(() => {
              button.textContent = `Купить за ${button.dataset.price}₽`;
              button.style.backgroundColor = '';
          }, 1000);
      },
      animateRemoveButton(button) {
          button.textContent = '✓';
          button.style.backgroundColor = '#2ecc71';
          setTimeout(() => {
              button.textContent = '×';
              button.style.backgroundColor = '#e74c3c';
          }, 500);
      },
      showEmptyState() {
          this.elements.container.innerHTML = 
              '<div class="empty-cart-message">Корзина пуста</div>';
          this.updateUI();
      },
      saveCart() {
          localStorage.setItem('cart', JSON.stringify({
              items: this.items,
              total: this.total
          }));
      },
      restoreCart() {
          const savedCart = localStorage.getItem('cart');
          if (savedCart) {
              const { items, total } = JSON.parse(savedCart);
              this.items = items;
              this.total = total;
              this.updateUI();
          }
      },
      openCartFromFooter() {
          this.toggleDrawer();
          const button = document.querySelector('.order-button');
          button.classList.add('clicked');
          setTimeout(() => button.classList.remove('clicked'), 300);
      }
  };

  // Модуль бокового меню
  const sidebarModule = {
      init() {
          this.menuBtn = document.querySelector('.menu-btn');
          this.sidebar = document.getElementById('sidebar-menu');
          this.closeBtn = document.querySelector('.close-btn');
          
          this.menuBtn.addEventListener('click', (e) => this.toggleSidebar(e));
          this.closeBtn.addEventListener('click', (e) => this.toggleSidebar(e));
          document.addEventListener('click', (e) => this.handleOutsideClick(e));
      },
      toggleSidebar(e) {
          e.stopPropagation();
          this.sidebar.classList.toggle('active');
      },
      handleOutsideClick(e) {
          if (!this.sidebar.contains(e.target) && 
              !this.menuBtn.contains(e.target) && 
              this.sidebar.classList.contains('active')) {
              this.sidebar.classList.remove('active');
          }
      }
  };

  // Инициализация анимаций при скролле
  const initScrollAnimations = () => {
      const animateOnScroll = () => {
          document.querySelectorAll('.card').forEach(card => {
              const rect = card.getBoundingClientRect();
              if (rect.top < window.innerHeight * 0.75) {
                  card.style.opacity = '1';
                  card.style.transform = 'translateY(0)';
              }
          });
      };

      window.addEventListener('scroll', animateOnScroll);
      setTimeout(animateOnScroll, 100);
  };

  // Общая инициализация
  themeModule.init();
  cartModule.init();
  sidebarModule.init();
  initScrollAnimations();
  
  // Обновление года в футере
  document.getElementById('current-year').textContent = new Date().getFullYear();
});