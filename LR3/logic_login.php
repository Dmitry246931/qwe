<?php
session_start();
//require_once('logic_sign.php');
$db_host = "127.0.0.1";
$db_name = "root";
$db_password = "";
$db_table_to_show = "apple";


$induction = mysqli_connect($db_host, $db_name, $db_password, $db_table_to_show);    //Подключаемся к базе данных

if ($induction -> connect_error) {

    die('Ошибка подключения (' . $induction->connect_errno . ')' . $induction -> connect_error);

}

echo "<p>Cоединение установленно на хосте: " . $induction->host_info . "</p>";

mysqli_select_db($induction, 'apple');

                                           //Устанавливаем базу данных для запросов

/*function clear_data($val)
{
  $val = trim($val);    // очищаем лишние пробелы в начале и в конце
  $val = stripslashes($val);   // очищаем лишние слэши
  $val = strip_tags($val);    //очищаем лишние html-символы
  $val = htmlspecialchars($val);  //преобразуем символы html в спец сущности
  return $val;
}*/
if ('POST' == $_SERVER['REQUEST_METHOD']) {
  
    $login = $_POST['login'];
    $salt = '!@#$%^&*()';
    $password = $_POST['password'];
    $password = md5($password . $salt);

    if(isset($login,$password)) {

        $query = "SELECT * FROM `signup` WHERE `login` LIKE ?";
        $queryPrep = mysqli_prepare($induction, $query); // подготавливаем SQL запрос (защита от инъекций)
        mysqli_stmt_bind_param($queryPrep, 's', $login); // привязка переменных к парметрам
        mysqli_stmt_execute($queryPrep); // выполняем запрос return TRUE or FALSE
        $result = mysqli_stmt_get_result($queryPrep); // получаем результат запроса
        $user = mysqli_fetch_assoc($result); // помещаем строки в массив

        if(!empty($user)) {

            $hash = $user['password'];

            if($password == $hash) {

                  $_SESSION['login_success'] = 'Вы успешно авторизовались';
                  $_SESSION['user'] = $user['login'];
                  header('Location: 2_laba.php');

            }
            else {

                $arrErr['password'] = "Пароль неверный!";

            }
        }
        else {

            $arrErr['email'] = 'Такого пользователя не существует!';

        }
    }

}








?>
