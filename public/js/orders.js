function loadOrders() {
    const ordersContainer = document.getElementById('orders-list');
    const orders = JSON.parse(localStorage.getItem('orderHistory')) || [];
    
    if (!orders.length) {
      ordersContainer.innerHTML = '<p class="empty-orders">У вас пока нет заказов</p>';
      return;
    }
    
    ordersContainer.innerHTML = orders.map(order => `
      <div class="order-card">
        <div class="order-header">
          <h4>Заказ #${order.id}</h4>
          <span class="order-date">${order.date}</span>
          <span class="order-status ${order.status.toLowerCase()}">${order.status}</span>
        </div>
        <div class="order-items">
          ${order.items.map(item => `
            <div class="order-item">
              <span class="item-title">${item.title}</span>
              <span class="item-price">${item.price.toLocaleString()}₽</span>
            </div>
          `).join('')}
        </div>
        <div class="order-total">
          Итого: <span>${order.total.toLocaleString()}₽</span>
        </div>
      </div>
    `).join('');
  }