<?php

    $db_host = "127.0.0.1";
    $db_name = "root";

    $db_password = "";
    $db_table_to_show = "apple";

    $induction = mysqli_connect($db_host, $db_name, $db_password, $db_table_to_show);
    mysqli_select_db($induction, 'apple');

    if ($induction == false)
    {
      echo "Ошибка подключения";
    }
    function addpercent($asd) {
    return '%'.$asd.'%';
}

if(isset($_GET['aplFilter'])){
  $name = '%%';
  $brand_name = '%%';
  $opisanie = '';
  $cost = '%%';

  $monic = "SELECT img_path,drugs.name,brands.names,description,cost
            FROM drugs
            INNER JOIN brands ON drugs.id_brand = brands.id

            ";

}





    $monic = m"SELECT img_path,drugs.name,brands.names,description,cost
    FROM drugs
    INNER JOIN brands ON drugs.id_brand = brands.id";

      $prepare = mysqli_prepare($induction, $monic);

?>
