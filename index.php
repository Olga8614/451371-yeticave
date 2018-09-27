<?php
require_once("functions.php");
require_once("data.php");
$is_auth = rand(0, 1);

$user_name = 'Оля'; // укажите здесь ваше имя
$user_avatar = 'img/user.jpg';
$title = "Главная";
$page = include_template("index.php", ['categories' => $categories, 'items' => $items]) ;
$layout = include_template("layout.php", ['content' => $page, 'categories' => $categories, 'user_name' => $user_name, 'title' => $title, 'is_auth' => $is_auth]) ;
print($layout);
?>
