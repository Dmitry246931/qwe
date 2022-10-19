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
  return '"'.'%'.$asd.'%'.'"';
}

$AppleQuery = "SELECT img_path,monitors.name as monitors_name,shares.share as shares_share,description,cost
          FROM monitors
          INNER JOIN shares ON monitors.id_share = shares.id";

if(isset($_GET['FIlterOn']))
{
  $monitors_name = '%%';
  $shares_share = '%%';
  $description = '%%';
  $pr_start = 0;
  $pr_end =  PHP_INT_MAX;
  $bool = false;
  $AppleQuery .= " WHERE ";
  //Проверка на то заполнен ли фильтр по наименованию
  if (!empty($_GET['monitors_name'])){
    
    if($bool){
      $AppleQuery .= " AND ";
    }
    $monitors_name = addpercent($_GET['monitors_name']);
    $AppleQuery .= 'monitors.name LIKE '.$monitors_name;
    $bool = true;
  }
  //Проверка на то заполнен ли фильтр по акциям
  if (!empty($_GET['shares_share'])){
    if($bool){
      $AppleQuery .= " AND ";
    }
    $shares_share = addpercent($_GET['shares_share']);
    $AppleQuery .= 'shares.share LIKE '.$shares_share;
    $bool = true;
  }
  //Проверяет заполнен ли фильтр по описанию
  if (!empty($_GET['description'])){
    if($bool){
      $AppleQuery .= " AND ";
    }
    $description = addpercent($_GET['description']);
    $AppleQuery .= 'description LIKE '.$description;
    $bool = true;
  }
  //Проверка на то заполнен ли фильтр по цене начальной
  if (!empty($_GET['pr_start'])){
    if($bool){
      $AppleQuery .= " AND ";
    }
    $pr_start = $_GET['pr_start'];
    $AppleQuery .= 'cost >= '.$pr_start;
    $bool = true;
  }
  //Проверка на то заполнен ли фильтр по цене конечной
  if (!empty($_GET['pr_end'])){
    if($bool){
      $AppleQuery .= " AND ";
    }
    $pr_end = $_GET['pr_end'];
    $AppleQuery .= 'cost <= '.$pr_end;
    $bool = true;
  }

  $PrepareAppleQuery = mysqli_prepare($induction, $AppleQuery);
  mysqli_stmt_execute($PrepareAppleQuery);
  $Result = mysqli_stmt_get_result($PrepareAppleQuery);
  $monic = mysqli_fetch_all($Result, MYSQLI_ASSOC);                                                            //берём все строки из результирующего набора и помещаем их в ассоциативный массив

}



else
{
  $_GET['monitors_name'] = "";
  $_GET['shares_share'] = "";
  $_GET['description'] = "";
  $_GET['cost'] = "";
  $_GET['pr_start'] = "";
  $_GET['pr_end'] = "";


  $PrepareAppleQuery = mysqli_prepare($induction, $AppleQuery);
  mysqli_stmt_execute($PrepareAppleQuery);
  $Result = mysqli_stmt_get_result($PrepareAppleQuery);
  $monic = mysqli_fetch_all($Result, MYSQLI_ASSOC);
}



?>
