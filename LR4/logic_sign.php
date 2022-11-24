<?php

//require_once('logic_login.php');
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

function clear_data($val) {

    $val = trim($val);    // очищаем лишние пробелы в начале и в конце
    $val = stripslashes($val);   // очищаем лишние слэши
    $val = strip_tags($val);    //очищаем лишние html-символы
    $val = $val;  //преобразуем символы html в спец сущности
    return $val;

}

$pattern_phone = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';
$pattern_name = '/^.*[^А-яЁё].*$/';
$pattern_address = '/^.*[а-яА-ЯёЁ0-9].*$/';

$err = [];
$err['login'] ='';
$err['address'] ='';
$err['full_name'] ='';
$err['phone'] ='';
$err['vk'] ='';
$err['date'] ='';
$err['password'] ='';
$err['password_confirm'] ='';
$err['sex'] ='';

$flag = 0;

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $login_pre = $_POST['login'];
    $login = '';
    $full_name = clear_data($_POST['full_name']);
    $blood_type = clear_data($_POST['blood_type']);
    $rezus_factor = clear_data($_POST['rezus_factor']);
    //$password = clear_data($_POST['password']);
    $password_confirm = clear_data($_POST['password_confirm']);
    $vk = clear_data($_POST['vk']);
    $sex = clear_data($_POST['sex']);
    $date = clear_data($_POST['date']);
    $salt = '!@#$%^&*()';

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';


    if( preg_match('/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!"№;%:?*()@\#$^&])(?=.*\ )(?=.*\-)(?=.*\_).{6,})/', $_POST['password']) ) {

        $password = $_POST['password'];
        $password = md5($password . $salt);

    }
    else {
      $err['password'] = '<small class="text-danger">Пароль некорректный</small>';
    }


    if (empty($password)) {

        $err['password'] = '<small class="text-danger">Данное поле не NUL</small>';
        $flag = 1;

    }


    if( preg_match('/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!"№;%:?*()@\#$^&])(?=.*\ )(?=.*\-)(?=.*\_).{6,})/', $_POST['password_confirm']) ) {

        $password_confirm = $_POST['password_confirm'];
        $password_confirm = md5($password_confirm . $salt);

    }


    if (empty($password_confirm)) {

        $err['password_confirm'] = '<small class="text-danger">Данное поле не NULL</small>';
        $flag = 1;

    }

    if ( !preg_match($pattern_address, $_POST['address'])) {

        $err['address'] = '<small class="text-danger">Только буквы латиницы, кириллицы и цифры</small>';
        $flag = 1;

    }

    if (empty($blood_type)) {

    $err['blood_type'] = '<small class="text-danger">Данное поле не NULL</small>';
    $flag = 1;

    }

    if (empty($rezus_factor)) {

        $err['rezus_factor'] = '<small class="text-danger">Данное поле не NULL</small>';
        $flag = 1;

    }



    if (empty($date)) {

        $err['date'] = '<small class="text-danger">Данное поле не NULL</small>';
          $flag = 1;

    }

    if (empty($sex)) {

        $err['sex'] = '<small class="text-danger">Данное поле не NULL</small>';
          $flag = 1;

    }


    if(!preg_match($pattern_name, $full_name)) {

      $err['full_name'] = '<small class="text-danger">Здесь только русские буквы</small>';
      $flag = 1;

    }


    if (mb_strlen($full_name) > 45 || mb_strlen($full_name) < 15 || $full_name == '') {

        $err['full_name'] = '<small class="text-danger">Имя должно быть не больше 45 символов и не меньше 15</small>';
        $flag = 1;

    }

    if (empty($login_pre)) {

        $err['login'] = '<small class="text-danger">Пусто</small>';
        $flag = 1;

    }

    else if(filter_var($login_pre, FILTER_VALIDATE_EMAIL)) {

      $query = "SELECT * FROM `signup` WHERE `login` = ?";

      $queryPrep = mysqli_prepare($induction, $query); // подготавливаем SQL запрос (защита от инъекций)
      mysqli_stmt_bind_param($queryPrep, 's', $login_pre); // привязка переменных к парметрам
      mysqli_stmt_execute($queryPrep); // выполняем запрос return TRUE or FALSE
      $result = mysqli_stmt_get_result($queryPrep); // получаем результат запроса
      $user = mysqli_fetch_assoc($result); // помещаем строки в массив
      if(empty($user)){
          $login = $login_pre;
            }else{
                $err['login'] = 'Такой пользователь уже есть в БД';
            }

    }
    else {
      echo '123';
      $err['login'] = '<small class="text-danger">Формат не верный</small>';
      $flag = 1;
    }

    if((!empty($login)) && (!empty($password))) {


        if ($password_confirm == $password) {

            $check_user = "INSERT INTO `signup`(`login`, `password`) VALUES(?, ?) ";
            $queryPrep = mysqli_prepare($induction, $check_user); // подготавливаем SQL запрос (защита от инъекций)
            mysqli_stmt_bind_param($queryPrep, 'ss',$login, $password ); // привязка переменных к парметрам
            mysqli_stmt_execute($queryPrep); // выполняем запрос return TRUE or FALSE

            echo $password;

            header('Location: login.php');
        }

        else {

            $err['password_confirm'] = '<small class="text-danger">Пароли не совпадают</small>';

        }

    }

}


?>
