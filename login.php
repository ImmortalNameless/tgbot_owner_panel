<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в админ-панель</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="login-container">
        <h1>Вход в админ-панель</h1>
        <form action="./check.php" method="post" onsubmit="return validateForm()">
            <div class="input-container">
                <input type="text" name="project_name" id="project_name" placeholder="Название проекта" required>
            </div>
            <div class="input-container">
                <input type="password" name="key" id="key" placeholder="Ключ" required>
                <span class="show-password" onclick="togglePasswordVisibility()">👁</span>
            </div>
            <button type="submit">Войти</button>
        </form>
    </div>
    <script src="./js/login.js"></script>
</body>
</html>
