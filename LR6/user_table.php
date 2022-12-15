<?php

class UserTable{

    public static function ShowAll(){
        $query = Database::prepare('SELECT * FROM monitors');
        $query->execute(); // выполняем запрос TRUE or FALSE
        $result = $query->get_result(); // получаем результат запроса
        $fullList = $result->fetch_all(MYSQLI_ASSOC); // помещаем строки в массив

        return $fullList;
    }

    public static function create($Name_mon, $shar_id, $price, $desc, $file_name){
        $query = Database::prepare(
            'INSERT INTO `monitors` (`id`, `img_path`, `name`, `id_share`, `description`, `cost`) ' .
            'VALUES (NULL, ?, ?, ?, ?, ?)'
        );

        $query->bind_param('ssisi', $file_name, $Name_mon, $shar_id, $desc, $price);

        if(!$query->execute()){
            trigger_error("Query Execute failed", E_USER_ERROR);
        }
    }

}
