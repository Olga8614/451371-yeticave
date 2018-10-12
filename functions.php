<?php
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';
    if (!file_exists($name)) {
        return $result;
    }
    ob_start();
    extract($data);
    require($name);
    $result = ob_get_clean();
    return $result;
}

function formated($number) {
    $num = ceil($number);
        if ($num > 1000) {
            $num = number_format($num, 0, '.', ' ');
        }
    $num .= ' ₽';
    return $num; 
    }

function get_category($id) {
    $con = mysqli_connect("localhost", "root", "", "451371-yeticave");
    mysqli_set_charset($con, "utf8");
    $select = "SELECT category FROM categories WHERE id = '$id'";
    $query = mysqli_query($con, $select);
    $result = mysqli_fetch_assoc($query);
    return $result['category'];
}
function time_left($lefttomidnight) {
    $left = strtotime('today')-strtotime('now')+86400;
    $hours = floor($left/3600);
    $sekinhours = $hours*3600;
    $minutes = floor(($left-$sekinhours)/60);
    $secinminutes = $minutes*60;
    $seconds = $left-$sekinhours-$secinminutes;

$lefttomidnight = $hours . ":". $minutes . ":" . $seconds;
    return $lefttomidnight;
    }
?>

