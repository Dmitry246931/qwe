<?php
    $db_host = "127.0.0.1";
    $db_name = "root";
    $db_password = "";
    $db_table_to_show = "apple";


    $induction = mysqli_connect($db_host, $db_name, $db_password, $db_table_to_show);    //Подключаемся к базе данных
    if ($induction -> connect_error)
    {
      die('Ошибка подключения (' . $induction->connect_errno . ')' . $induction -> connect_error);
    }
    echo "<p>Cоединение установленно на хосте: " . $induction->host_info . "</p>";

    mysqli_select_db($induction, 'apple');                                              //Устанавливаем базу данных для запросов

    function addpercent($asd)
    {
      return '%'.$asd.'%';
    }



    if(isset($_GET['FIlterOn']))
    {
      $monitors_name = '%%';
      $shares_share = '%%';
      $description = '%%';
      $pr_start = 0;
      $pr_end =  PHP_INT_MAX;

      //INNER JOIN  - объединение таблиц по ключу
      $AppleQuery = "SELECT img_path,monitors.name as monitors_name,shares.share as shares_share,description,cost
                     FROM monitors
                     INNER JOIN shares ON monitors.id_share = shares.id
                     WHERE
                      monitors.name LIKE ? AND
                      shares.share LIKE ? AND
                      description LIKE ? AND
                      cost >= ? AND cost <= ?
                      ORDER BY cost";

      $PrepareAppleQuery = mysqli_prepare($induction, $AppleQuery);     //mysqli_prepare - возвращает объект запроса

      //Проверка на то заполнен ли фильтр по наименованию
      if (!empty($_GET['monitors_name'])){
        $monitors_name = addpercent($_GET['monitors_name']);
      }
      //Проверка на то заполнен ли фильтр по акциям
      if (!empty($_GET['shares_share'])){
        $shares_share = addpercent($_GET['shares_share']);
      }
      //Проверяет заполнен ли фильтр по описанию
      if (!empty($_GET['description'])){
        $description = addpercent($_GET['description']);
      }
      //Проверка на то заполнен ли фильтр по цене начальной
      if (!empty($_GET['pr_start'])){
        $pr_start = $_GET['pr_start'];
      }
      //Проверка на то заполнен ли фильтр по цене конечной
      if (!empty($_GET['pr_end'])){
        $pr_end = $_GET['pr_end'];
      }

      mysqli_stmt_bind_param($PrepareAppleQuery, "sssii", $monitors_name, $shares_share, $description, $pr_start, $pr_end); // привязываем переменные к параметрам запроса
      mysqli_stmt_execute($PrepareAppleQuery);                                                                             //выполняем запрос
      $Result = mysqli_stmt_get_result($PrepareAppleQuery);                                                                  //полученный результат помещаем в $res
      $monic = mysqli_fetch_all($Result, MYSQLI_ASSOC);                                                                //берём все строки из результирующего набора и помещаем их в ассоциативный массив

    }



    else
    {
      $_GET['monitors_name'] = "";
      $_GET['shares_share'] = "";
      $_GET['description'] = "";
      $_GET['cost'] = "";
      $_GET['pr_start'] = "";
      $_GET['pr_end'] = "";



      $AppleQuery = "SELECT img_path,monitors.name as monitors_name,shares.share as shares_share,description,cost
                FROM monitors
                INNER JOIN shares ON monitors.id_share = shares.id";

      $PrepareAppleQuery = mysqli_prepare($induction, $AppleQuery);
      mysqli_stmt_execute($PrepareAppleQuery);
      $Result = mysqli_stmt_get_result($PrepareAppleQuery);
      $monic = mysqli_fetch_all($Result, MYSQLI_ASSOC);
    }
?>
