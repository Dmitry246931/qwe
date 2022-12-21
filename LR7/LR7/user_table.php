
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

    public static function delete($id){
        $query = Database::prepare(
            'DELETE FROM `monitors` WHERE id = ?'
        );
        $query->bind_param('i', $id);

        if(!$query->execute()){
            trigger_error("Query Execute failed", E_USER_ERROR);
        }

    }

    public static function get_img_path($id){
        $query = Database::prepare(
            'SELECT `img_path` FROM `monitors` WHERE id = ?;'
        );
        $query->bind_param('i', $id);
        if(!$query->execute()){
            trigger_error("Query Execute failed", E_USER_ERROR);
        }
        $img_path = $query->get_result();
        $img_path = $img_path->fetch_array(MYSQLI_NUM);    // числовой массив
        return $img_path[0];
    }

    public static function get_by_id($id){
        $query = Database::prepare(
            'SELECT `img_path`, `name`, `id_share`, `description`, `cost` FROM `monitors` WHERE id=?'
        );
        $query->bind_param('i', $id);
        if(!$query->execute()){
            trigger_error("Query Execute failed", E_USER_ERROR);
        }
        $data = $query->get_result();
        $data = $data->fetch_array(MYSQLI_ASSOC);
        return $data;
    }

    public static function replace_by_id($id, $Name_mon, $shar_id, $price, $desc, $file_name){
        $query = Database::prepare(
            'UPDATE `monitors`
                        SET `img_path` = ?,
                            `name` = ?,
                            `id_share` = ?,
                            `description` = ?,
                            `cost` = ?
                      WHERE id = ?');

        $query->bind_param('ssisii', $file_name, $Name_mon, $shar_id, $desc, $price, $id);

        if(!$query->execute()){
            trigger_error("Query Execute failed", E_USER_ERROR);
        }

    }
}
