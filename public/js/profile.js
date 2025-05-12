document.addEventListener('DOMContentLoaded', () => {
    // Функция для форматирования адреса
    const formatAddress = (address) => {
        // Удаляем лишние пробелы и разделяем по запятым
        const parts = address.split(',')
            .map(part => part.trim())
            .filter(part => part.length > 0);
        
        // Форматируем каждую часть
        const formattedParts = parts.map(part => {
            // Делаем первую букву заглавной, остальные - строчными
            return part.split(' ')
                .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
                .join(' ');
        });
        
        // Собираем обратно с красивыми запятыми
        return formattedParts.join(', ');
    };

    // Загрузка и отображение истории заказов
    const loadOrders = () => {
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
                <div class="order-delivery-method">
                    <span>${order.deliveryMethodText}</span>
                </div>
                <div class="order-items">
                    ${order.items.map(item => `
                        <div class="order-item">
                            <span class="item-title">${item.title}</span>
                            <span class="item-price">${item.price.toLocaleString()}₽</span>
                        </div>
                    `).join('')}
                </div>
                <div class="order-footer">
                    <div class="order-total">
                        Итого: <span class="order-total-price">${order.total.toLocaleString()}₽</span>
                    </div>
                </div>
            </div>
        `).join('');
    };
  
    // Очистка истории заказов
    const initClearHistoryButton = () => {
        const clearHistoryBtn = document.querySelector('.clear-history-btn');
        if (clearHistoryBtn) {
            clearHistoryBtn.addEventListener('click', () => {
                if (confirm('Вы уверены, что хотите очистить историю заказов?')) {
                    localStorage.removeItem('orderHistory');
                    loadOrders();
                }
            });
        }
    };
  
    // Настройки профиля
    const initSettingsForm = () => {
        const form = document.querySelector('.settings-form');
        if (!form) return;
  
        // Загрузка настроек
        const savedSettings = JSON.parse(localStorage.getItem('userSettings')) || {};
        form.querySelector('.notification-select').value = savedSettings.notifications || 'all';
        
        // Применение темы
        if (savedSettings.theme === 'dark') {
            document.body.classList.add('dark-mode');
            form.querySelector('.theme-option.dark').classList.add('active');
        } else {
            form.querySelector('.theme-option.light').classList.add('active');
        }
  
        // Обработчики темы
        form.querySelectorAll('.theme-option').forEach(btn => {
            btn.addEventListener('click', function() {
                form.querySelectorAll('.theme-option').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
  
        // Сохранение настроек
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const settings = {
                notifications: form.querySelector('.notification-select').value,
                theme: form.querySelector('.theme-option.active').classList.contains('light') ? 'light' : 'dark'
            };
            localStorage.setItem('userSettings', JSON.stringify(settings));
            document.body.classList.toggle('dark-mode', settings.theme === 'dark');
            alert('Настройки сохранены!');
        });
    };
  
    // Выход из аккаунта
    const initLogoutButton = () => {
        const logoutBtn = document.querySelector('.logout-btn');
        logoutBtn.addEventListener('click', () => {
            if (confirm('Вы уверены, что хотите выйти?')) {
                localStorage.removeItem('userToken');
                window.location.href = 'login.html';
            }
        });
    };
  
    // Работа с адресом доставки
    const initAddressSection = () => {
        const addressInput = document.getElementById('delivery-address');
        const saveBtn = document.querySelector('.save-address-btn');
        const savedAddressBlock = document.getElementById('saved-address');
        const addressText = document.querySelector('.address-text');
        const editButton = document.querySelector('.edit-address-btn');
  
        // Загрузка адреса
        const updateUI = () => {
            const savedAddress = localStorage.getItem('userAddress');
            if (savedAddress) {
                savedAddressBlock.style.display = 'flex';
                addressText.textContent = savedAddress;
                addressInput.style.display = 'none';
                saveBtn.style.display = 'none';
            } else {
                savedAddressBlock.style.display = 'none';
                addressInput.style.display = 'block';
                saveBtn.style.display = 'block';
                addressInput.value = '';
            }
        };
  
        // Инициализация
        updateUI();
  
        // Сохранение адреса
        saveBtn.addEventListener('click', () => {
            const address = addressInput.value.trim();
            if (address.length >= 6) {
                const formattedAddress = formatAddress(address);
                localStorage.setItem('userAddress', formattedAddress);
                updateUI();
            } else {
                alert('Адрес должен содержать минимум 6 символов');
            }
        });
  
        // Редактирование адреса
        editButton.addEventListener('click', () => {
            localStorage.removeItem('userAddress');
            updateUI();
        });
    };
  
    // Обновление года в футере
    document.getElementById('current-year').textContent = new Date().getFullYear();
  
    // Инициализация всех компонентов
    loadOrders();
    initClearHistoryButton();
    initSettingsForm();
    initLogoutButton();
    initAddressSection();
});