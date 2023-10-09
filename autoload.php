<?php
function my_autoloader($class_name) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_register('my_autoloader');
?>