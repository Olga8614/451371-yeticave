<?php
date_default_timezone_set ('Europe/Moscow');
require_once("functions.php");
$is_auth = rand(0, 1);

$con = mysqli_connect("localhost", "root", "", "451371-yeticave");
mysqli_set_charset($con, "utf8");

if ($con == false) {
    print("Ошибка подключения: " . mysqli_connect_error());
    die();}

#выборка свежих лотов
$freshlots_query="SELECT * FROM lots ORDER BY lot_id DESC";
$freshlots_result=mysqli_query($con, $freshlots_query);
if(!$freshlots_result) {
    $error = mysqli_error($con);
    print("Ошибка MySQL: " . $error);
    die();
}


#массив из лотов
#$freshlots_query_array=mysqli_fetch_all($freshlots_result, MYSQLI_ASSOC);

#выборка категорий
$categories_query="SELECT category, ctg_class FROM categories GROUP BY category, ctg_class;";
$categories_result=mysqli_query($con, $categories_query);
if(!$categories_result) {
    $error = mysqli_error($con);
    print("Ошибка MySQL: " . $error);
    die();
}

#массив из категорий
$categories_array=mysqli_fetch_all($categories_result, MYSQLI_ASSOC);

#подставляем данные из БД
$user_name = 'Юзер Оля'; // укажите здесь ваше имя
$user_avatar = 'img/user.jpg';
$title = "Главная";
$page = include_template("index.php", ['categories' => $categories_array, 'items' => $freshlots_result]) ;
$layout = include_template("layout.php", ['content' => $page, 'categories' => $categories_array, 'user_name' => $user_name, 'title' => $title, 'is_auth' => $is_auth]) ;
print($layout);
?>