// Скрипт для открытия и закрытия сайдбара на больших экранах (ПК)
const sidebar = document.querySelector('.sidebar');
const usersButton = document.getElementById('users-button');
const closeButton = document.getElementById('close-button');

usersButton.addEventListener('click', () => {
    sidebar.style.left = '0';
});

closeButton.addEventListener('click', () => {
    sidebar.style.left = '0';
});

// Скрипт для открытия сайдбара на маленьких экранах (телефон)
const openButton = document.getElementById('open-button');

openButton.addEventListener('click', () => {
    sidebar.style.display = 'block';
});

// Скрипт для отображения кнопок при клике на строку пользователя
const userRows = document.querySelectorAll('.user-row');

userRows.forEach((row) => {
    row.addEventListener('click', () => {
        // Создаем кнопки при клике на строку
        const buttons = document.createElement('div');
        buttons.className = 'user-buttons';

        const infoButton = document.createElement('button');
        infoButton.className = 'user-action-button';
        infoButton.textContent = 'Инфо';

        const banButton = document.createElement('button');
        banButton.className = 'user-action-button';
        banButton.textContent = 'Забанить';

        const balanceButton = document.createElement('button');
        balanceButton.className = 'user-action-button';
        balanceButton.textContent = 'Изменить баланс';

        buttons.appendChild(infoButton);
        buttons.appendChild(banButton);
        buttons.appendChild(balanceButton);

        // Удаляем предыдущие кнопки, если они есть
        const existingButtons = document.querySelectorAll('.user-buttons');
        existingButtons.forEach((buttonGroup) => {
            buttonGroup.remove();
        });

        // Добавляем новые кнопки к строке
        row.appendChild(buttons);
    });
});
