<?php


$Name_mon = $shar_id = $price = $desc = $file_name = '';

$fullList = UserTable::ShowAll();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['add'])){

        if(isset($_FILES['image']['name'])) {
            $file = $_FILES['image'];
            // проверяем, можно ли загружать изображение
            $check = can_upload($file['name']);

            if($check === true){
                // загружаем изображение на сервер
                $file_name = make_upload($file);
            }
            else{
                // выводим сообщение об ошибке
                echo "<strong>$check</strong>";
            }
        }

        if(!empty($_POST['Name_mon'])) $Name_mon = htmlspecialchars($_POST['Name_mon']);
        if(!empty($_POST['shar_id'])) $shar_id = htmlspecialchars($_POST['shar_id']);
        if(!empty($_POST['price'])) $price = htmlspecialchars($_POST['price']);
        //if(!empty($_POST['recipe'])) $recipe = htmlspecialchars($_POST['recipe']);
        if(!empty($_POST['desc'])) $desc = htmlspecialchars($_POST['desc']);

        UserTable::create($Name_mon,$shar_id,$price,$desc,$file_name);
        header('Location: interface.php');
    }
}

function can_upload($file_name){
    if ($file_name == '') return 'Файл не выбран';

    // разбиваем имя файла по точке и получаем массив
    $getMime = explode('.', $file_name);

    // последний элемент массива - расширение
    $mime = strtolower(end($getMime));

    // массив разрешенных типов
    $allow_types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

    if(!in_array($mime, $allow_types)) return 'Недопустимый тип файла';

    return true;
}

function make_upload($file){
    // формируем уникальное имя картинки: случайное число и name
    $name = mt_rand(0, 10000) . $file['name'];
    $dir = 'image_2/' . $name;
    copy($file['tmp_name'], $dir);

    return $name;
}
