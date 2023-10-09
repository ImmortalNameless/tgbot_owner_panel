<?php
    session_start();
    if ($_SESSION['hash'] === null){
        header("Location:./../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (остальные мета-теги и стили) ... -->
    <link rel="stylesheet" href="./../css/users.css">
</head>
<body>
    <div class="sidebar">
        <!-- ... (кнопки меню) ... -->
    </div>
    <div class="content">
        <table>
            <!-- ... (заголовок таблицы) ... -->
            <tbody>
                <tr class="user-row">
                    <td>1</td>
                    <td>Иван</td>
                    <td>Иванов</td>
                    <td>$100</td>
                    <!-- Добавьте другие данные здесь -->
                    <td>
                        <button class="user-action-button">Инфо</button>
                    </td>
                </tr>
                <!-- Добавьте других пользователей здесь -->
            </tbody>
        </table>
    </div>
    <button class="menu-button" id="open-button">Меню</button>
    <script src="./../js/users.js"></script>
</body>
</html>
