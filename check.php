<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$erro = true;

$name = $_POST['project_name'];
$key = $_POST['key'];

$logins = file_get_contents("./config/logins.json");
$logins_parsed = json_decode($logins, true);

print_r($logins_parsed);
// die;

echo "<br>Имя проекта: " . $name . "<br>";
echo "Ключ: " . $key . "<br>";

foreach($logins_parsed as $data){
    echo "Проверяем " . $data['name'] . " " . $data['key'] . "<br>";
    if ($data['name'] === $name && $data['key'] === $key){
        $erro = false;
        echo "Найдено совпадение!";
    }
}

if ($erro){
    header("Location:./login.php");
} else{
    header("Location:./admin.php");
}