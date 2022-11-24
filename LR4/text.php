<?php

use LDAP\Result;

  session_start();

if(isset($_GET['preset'])){
    $path = $_SERVER['DOCUMENT_ROOT'] . '/LR3/presets/preset_[preset_name].html';
    $preset = $_GET['preset'];


    $path = preg_replace('/\[preset_name\]/', $preset, $path);

    if(file_exists($path)){
        $content = file_get_contents($path);
        $_POST['text'] = $content;
    }else{
        echo 'Такого пресета не существует';
        echo $path;
    }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["text"])) {

            $content = $_POST["text"];

            $task = [];

            $task['task5'] = '<br>' . '<b>Задача №5:</b>' . '<br>' . task5($content);
            $task['task8'] = '<br>' . '<b>Задача №8:</b>' . '<br>' . task8($content);
            $task['task14'] = '<br>' . '<b>Задача №14:</b>' . '<br>' . task14($content);

            $task['task16'] = '<br>' . '<b>Задача №16:</b>' . '<br>' . task16($content);


            $allText = task5($content);
            $allText = task8($allText);

            $task15 = task14($allText);



            $allText = task16($allText);

            $task['all_tasks'] = '<br>' . '<b>Введенный текст после преобразований:</b>' . '<br>' . $allText;

            $two_now = task5($content);

        }
    }





    function task5($content) {
        $aa = [' - ' , ' -- '];
        $xx = ['&nbsp;&ndash; ', '&nbsp;&mdash; '];
        $TEXT = str_replace($aa, $xx, $content);
        return $TEXT;
    }

    function task8($content) {
        $itd = '/итд/u';
        $i_dt = 'и т.д.';
        $itp = '/итп/u';
        $i_tp = 'и т.п.';
        $TEXT = preg_replace($itd, $i_dt, $content);
        $TEXT = preg_replace($itp, $i_tp, $TEXT);
        return $TEXT;
    }

   function task14($content) {
        $content = stripslashes($content);
        preg_match_all('/<a.*?>(.*?)<\/a>/i', $content, $items);

        $result = '';



         if (!empty($items[1])) {

			         foreach ($items[1] as $i => $row) {
				       //$anchor = $items[2];
                         $result .= '<a href="#' . $i . '">' . 'Ссылка № '  . $i++ . '</a>' . '-' . $row  . '<br>';
                         echo $i;
			          }


          }

          //if (!empty($items[0])) {
	         // foreach ($items[0] as $i => $row) {
		      //    $content = str_replace($row, '<a name="tag-' . ++$i . '"></a>' . $row, $content);
	         // }
         // }
        return $result;
    }



    function task16($content) {
        //если слово начинается на запрещ слово мы меняем
        $pattern = '/(?<=\s|^)слово/u';
        $patt_repl = '/[А-Яа-яЁё]+/u';
        $Arr = [ 'пух', 'рот', 'делать', 'ехать', 'около', 'для'];

        $TEXT = $content;
        foreach($Arr as $val){
            $pattern = preg_replace($patt_repl, $val, $pattern, 1);
            //echo $pattern . '<br>';
            //echo mb_strlen($val) . '<br>';
            $replace_str = '';
            for($i = 0; $i < mb_strlen($val); $i++){
                $replace_str .= '#';
            }
            //cho $replace_str . '<br>';

            $TEXT = preg_replace($pattern, $replace_str, $TEXT);

            $replace_str = '';
        }
        //$x = ['###'];

        return $TEXT;
    }
