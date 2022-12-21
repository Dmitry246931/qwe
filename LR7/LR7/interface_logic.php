<?php
require_once 'file_works.php';
require_once 'validation_logic.php';
$Name_mon = $shar_id = $price = $desc = $file_name = '';

$arrErr = [];
$arrErr['Name_mon'] = $arrErr['shar_id'] = $arrErr['price'] = $arrErr['desc'] = $arrErr['file_name'] = '';

$fullList = UserTable::ShowAll();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['addItem'])){

        if(!empty($_POST['Name_mon'])){
            $Name_mon = validation('Name_mon', $_POST['Name_mon']);
            if(!$Name_mon) $arrErr['Name_mon'] = 'Некорректное название';
        } else $arrErr['Name_mon'] = 'Введите название';

        if(!empty($_POST['shar_id'])){
            $shar_id = validation('shar_id', $_POST['shar_id']);
            if(!$shar_id) $arrErr['shar_id'] = 'Некорректно выбрана акция';
        } else $arrErr['shar_id'] = 'Выберите категорию';

        if(!empty($_POST['price'])){
            $price = validation('price', $_POST['price']);
            if(!$price) $arrErr['price'] = 'Некорректно указана цена';
        } else $arrErr['price'] = 'Введите цену';

        if(!empty($_POST['desc'])){
            $desc = validation('desc', $_POST['desc']);
            if(!$desc) $arrErr['desc'] = 'Некорректно указано описание';
        } else $arrErr['desc'] = 'Введите рецептуру';

        if($Name_mon && $shar_id && $price && $desc){
            $file_name = load_and_getFileName();
            if($file_name == '00'){
                $arrErr['file_name'] = 'Файл не выбран';
                $file_name = false;
            }
            if($file_name == '01'){
                $arrErr['file_name'] = 'Недопустимый тип файла';
                $file_name = false;
            }
            if($file_name){
                UserTable::create($Name_mon,$shar_id,$price,$desc,$file_name);
                header('Location: interface.php');
            }
        }
    }


    if(!empty($_POST['Edit'])){
        $id = $_POST['Edit'];
        header('Location: edit.php' . '?id=' . $id);

    }
    if(!empty($_POST['Delete'])){
        $id = $_POST['Delete'];
        $img_path = UserTable::get_img_path($id);
        UserTable::delete($id);
        unlink('image_2/' . $img_path);
        header('Location: interface.php');
    }
}
