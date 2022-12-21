<?php
use http\Client\Curl\User;

require_once 'file_works.php';
require_once 'validation_logic.php';
$arrErr = [];
$arrErr['Name_mon'] = $arrErr['shar_id'] = $arrErr['price'] = $arrErr['desc'] = $arrErr['file_name'] = '';

$Name_mon = $shar_id = $price = $desc = $file_name = '';

$second_data = [];
$id = null;
$data = null;

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $data = UserTable::get_by_id($id);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST['closeEdit'])){
        header('Location: interface.php');
    }

    if(!empty($_POST['applyEdit'])){



        if(!empty($_POST['Name_mon'])){
            $Name_mon = validation('Name_mon', $_POST['Name_mon']);
            if(!$Name_mon) $arrErr['Name_mon'] = 'Некорректное название';
            $second_data['name'] = $Name_mon;
        } else $arrErr['Name_mon'] = 'Введите название';

        if(!empty($_POST['shar_id'])){
            $shar_id = validation('shar_id', $_POST['shar_id']);
            if(!$shar_id) $arrErr['shar_id'] = 'Некорректно выбрана акция';
            $second_data['id_share'] = $shar_id;
        } else $arrErr['shar_id'] = 'Выберите категорию';

        if(!empty($_POST['price'])){
            $price = validation('price', $_POST['price']);
            if(!$price) $arrErr['price'] = 'Некорректно указана цена';
            $second_data['cost'] = $price;
        } else $arrErr['price'] = 'Введите цену';

        if(!empty($_POST['desc'])){
            $desc = validation('desc', $_POST['desc']);
            if(!$desc) $arrErr['desc'] = 'Некорректно указано описание';
            $second_data['desc'] = $desc;

        } else $arrErr['desc'] = 'Введите акцию';

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
                UserTable::replace_by_id($id, $Name_mon, $shar_id, $price, $desc, $file_name);
                unlink('image_2/' . $data['img_path']);
                header('Location: interface.php');
            }
        }

    }

    if(!empty($_POST['reset'])){
        $second_data = null;
    }

}
