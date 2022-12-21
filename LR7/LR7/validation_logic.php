<?php

function validation($for, $input){
    switch($for){
        case 'Name_mon':
            $regular_Name_mon = "/^[\w\s\-\d]+$/u";    //w - буква s -пробел d - любая цифра
            $input = htmlspecialchars($input);
            if(preg_match($regular_Name_mon, $input)){
                return $input;
            }else return false;
        case 'shar_id':
            $regular_shar_id = "/^\d$/";
            $input = htmlspecialchars($input);
            if(preg_match($regular_shar_id, $input)){
                return $input;
            }else return false;
        case 'price':
            $regular_price = "/^[^0]\d+$/";
            $input = htmlspecialchars($input);
            if(preg_match($regular_price, $input)){
                return $input;
            }else return false;
        case 'desc':
            $regular_desc =  '/^[А-Яа-яЁё\s,\-:;\"\'.0-9]+$/u'; //u - юникод для русских букв
            $input = htmlspecialchars($input);
            if(preg_match($regular_desc, $input)){
                return $input;
            }else return false;
    }
    return null;
}
