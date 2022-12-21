<?php
  require_once 'db.php';
  require_once 'user_table.php';
  require_once 'interface_logic.php';
  require_once 'edit_logic.php';
  global $arrErr;
  $monic = $fullList;
  global $monic;







?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Фотогалерея</title>
    <link rel="stylesheet" href="lab_2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="lab1.js">
    </script>
  </head>
  <body >
      <header class="header">
          <div class="container-fluid" >
              <div class="row" style="background-color: #333">
                  <div class="col-md-2 col-sm-2" style=" color: #ffffff; padding: 2px ; text-align: center; font-weight: 600; ">
                      <a href="" style="text-decoration: none; color: #fff;">Волгоград</a>
                  </div>
                  <div class="col-md-1 col-sm-1" style=" color: #ffffff; padding: 2px ; position: relative; right: 50px; font-weight: 600;">
                      <a href="" style="text-decoration: none; color: #fff;">Магазины</a>
                  </div>
                  <div class="col-md-1 col-sm-1" style=" color: #ffffff; padding: 2px ; position: relative; right: 50px; font-weight: 600;">
                      <a href="" style="text-decoration: none; color: #fff;">Доставка</a>
                  </div>
                  <div class="col-md-3 col-sm-3" style=" color: #ffffff; padding: 2px ;"></div>
                  <div class="col-md-1 col-sm-1" style=" color: #ffffff; padding: 2px ; position: relative; left: 80px; font-weight: 600;">
                      <a href="" style="text-decoration: none; color: #fff;">Блог &laquoM.Клик&raquo</a>
                  </div>
                  <div class="col-md-1 col-sm-1" style=" color: #ffffff; padding: 2px ; position: relative; left: 90px; font-weight: 600;">
                      <a href="" style="text-decoration: none; color: #fff;">M.Club</a>
                  </div>
                  <div class="col-md-1 col-sm-1" style=" color: #ffffff; padding: 2px ; text-align: center; position: relative; left: 40px; font-weight: 600;">
                      <a href="" style="text-decoration: none; color: #fff;">Для бизнеса</a>
                  </div>
                  <div class="col-md-2 col-sm-2" style=" color: #ffffff; padding: 2px ; text-align: center;">
                      <div class="phone" style="color: #ffffff; text-align: center; position: relative; height: 10px; font-weight: 600;">
                          <a href="tel:+88006007775" style="color: #ffffff; text-decoration: none;"><img  src="image_ht/phone-call.png"  alt="phone" width="30px" height="30px">8-800-600-7775</a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="container-fluid" >
              <div class="row" style="background-color: #ffffff">
                  <div class="col-md-2" style=" color: #ffffff; position: relative; text-align: center;  right: 20px; bottom: 18px; margin-bottom: 10px;">
                      <a class="navbar-brand" href="#" ><img src="image_ht/logo_red_web_fl1.svg" alt="mvideo" height="120px" width="120px"></a>
                  </div>
                  <div class="col-md-1" >
                      <div class="dropdown" style=" position: relative; display: inline-block; border-radius: 5px; top: 16px; right: 80px; ">
                          <button  onclick="myFunction()" class="dropbtn">Каталог</button>
                          <div id="myDropdown" class="dropdown-content">
                              <a href="#">Акции, скидки, распродажи</a>
                              <a href="#">Смартфоны и гаджеты</a>
                              <a href="#">Ноутбуки и компьютеры</a>
                              <a href="#">Телевизоры и цифровое ТВ</a>
                              <a href="#">Аудиотехника</a>
                              <a href="#">Техника для кухни</a>
                              <a href="#">Техника для дома</a>
                              <a href="#">Красота и здоровье</a>
                              <a href="#">Умный дом</a>
                              <a href="#">Игры и софт</a>
                              <a href="#">Хобби, спорт и развлечения</a>
                              <a href="#">Фото и видео</a>
                              <a href="#">Автоэлектроника</a>
                              <a href="#">Аксессуары</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 ">
                      <form class="d-flex" style="width: 540px; height: 45px; position: relative; border: 0; border-radius: 5px; top: 18px; right: 50px;">
                          <input class="form-control me-2" type="search" placeholder="Искать iPhone 14" aria-label="Search">
                          <div class="lupa" >
                              <a href="#"><img src="image_ht/lupa3.png" width="20px" height="20px" right="10px" style="position: relative; left: 14px; top: 5px; "></a>
                          </div>
                      </form>
                  </div>
                  <div class="col-md-1" style=" color: #ffffff; padding: 6px ; position: relative; left: 80px; font-weight: 500;">
                      <a href="text_center_middle" class="clock" ><img src="image_ht/clock.png" width="20px" height="20px">
                          <span class="block-text" >Cтатус заказа</span>
                      </a>
                  </div>
                  <div class="col-md-1" style=" color: #ffffff; padding: 6px ; position: relative; left: 80px; font-weight: 500;">
                      <a href="text_center_middle" class="vhod" ><img src="image_ht/vhod.png" width="20px" height="20px">
                          <span class="block-text" >Войти</span>
                      </a>
                  </div>
                  <div class="col-md-1" style=" color: #ffffff; padding: 6px ; position: relative; left: 80px; font-weight: 500;">
                      <a href="text_center_middle" class="grafik" ><img src="image_ht/grafik.png" width="20px" height="20px">
                          <span class="block-text" >Сравнение</span>
                      </a>
                  </div>
                  <div class="col-md-1" style=" color: #ffffff; padding: 6px ; position: relative; left: 80px; font-weight: 500;">
                      <a href="text_center_middle" class="heart" ><img src="image_ht/heart.png" width="20px" height="20px">
                          <span class="block-text" >Избранное</span>
                      </a>
                  </div>
                  <div class="col-md-1" style=" color: #ffffff; padding: 6px ; position: relative; left: 80px; font-weight: 500;">
                      <a href="text_center_middle" class="korzina" ><img src="image_ht/korzina.png" width="20px" height="20px">
                          <span class="block-text" >Корзина</span>
                      </a>
                  </div>
              </div>
          </div>
      </header>

      <div class="container-fluid" >
          <div class="row" style="background-color: #ffffff">
              <div class="col-md-1" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: 25px; text-decoration: none; font-size: 13px; font-weight: 500;">ВСЕ АКЦИИ</a>
              </div>
              <div class="col-md-1" >
                  <a href="text_center_middle" style="position: relative; white-space: nowrap;  color: #333;  bottom: 50px;  left: -3px; text-decoration: none; font-size: 13px; font-weight: 500;">
                      <span class="block-text" >ОСЕННИЙ ЦЕНОПАД!</span>
                  </a>
              </div>
              <div class="col-md-1" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: 30px; text-decoration: none; font-size: 13px; font-weight: 500;">НОУТБУКИ</a>
              </div>
              <div class="col-md-1" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: 3px; text-decoration: none; font-size: 13px; white-space: nowrap; font-weight: 500;">IPHONE 14 И 14 PRO</a>
              </div>
              <div class="col-md-1" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: 30px; text-decoration: none; font-size: 13px; white-space: nowrap; font-weight: 500;">ЭКСПРЕСС-ДОСТАВКА</a>
              </div>
              <div class="col-md-2" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: 70px; text-decoration: none; font-size: 13px; white-space: nowrap; font-weight: 500;">ГАРАНТИЯ ЛУЧШЕЙ ЦЕНЫ</a>
              </div>
              <div class="col-md-2" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: 13px; text-decoration: none; font-size: 13px; white-space: nowrap; font-weight: 500;">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</a>
              </div>
              <div class="col-md-1" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: -45px; text-decoration: none; font-size: 13px; white-space: nowrap; font-weight: 500;">СТИРАЛЬНЫЕ МАШИНЫ</a>
              </div>
              <div class="col-md-2" >
                  <a href="#" style="position: relative; color: #333; bottom: 50px;  left: 20px; text-decoration: none; font-size: 13px; white-space: nowrap; font-weight: 500;">ХОЛОДИЛЬНИКИ<a href="#" class="arrow"><img src="image_ht/arrow.png" width="20px" height="20px;"></a></a>
              </div>
          </div>
      </div>



      <!-- Форма для фильтрации -->




      <!-- Таблица для заполнения -->

<p></p>
      <form method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>Редактирование позиции id = <?php if(isset($id) && !empty($id)){ echo $id; } ?></h1>
            <h5>Текущее изображение:</h5>
            <?php
                if(isset($data['img_path']) && !empty($data['img_path'])){ ?>
                    <img src="image_2/<?=$data['img_path']?>" style="max-width:150px;">
                <?php
                }else{?>
                    <span class="input-group-text" id="inputGroup-sizing-default">ПУСТО</span>
                <?php
                }
                ?>
                <div class="container mt-3">
                    <button class="btn btn-outline-success" name="reset">Вернуть исходные поля</button>
                </div>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Наименование</span>
                        <input type="text" name="Name_mon" id="menu_name" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Введите название"
                            value="<?php
                               if(isset($second_data) && !empty($second_data['name'])){
                                   echo $second_data['name'];
                               }else if(isset($data) && !empty($data['name'])){
                                   echo $data['name'];
                               }
                               ?>"
                        >
                      <span class="red"><?php if(!empty($arrErr['Name_mon'])){echo $arrErr['Name_mon'];} ?></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Акции</span>
                        <select name="shar_id" class="form-control" id="shar_id">
                            <option value="" disabled="" selected="">Выберите акцию</option>
                            <?php if(isset($second_data) && !empty($second_data['id_share'])){
                                switch($second_data['id_share']){
                                    case 1:
                                        echo '<option value="1" selected="">10%</option>';
                                        echo '<option value="2">20%</option>';
                                        echo '<option value="3">30%</option>';
                                        echo '<option value="4">40%</option>';
                                        echo '<option value="5">50%</option>';
                                        break;
                                    case 2:
                                        echo '<option value="1">10%</option>';
                                        echo '<option value="2" selected="">20%</option>';
                                        echo '<option value="3">30%</option>';
                                        echo '<option value="4">40%</option>';
                                        echo '<option value="5">50%</option>';
                                        break;
                                    case 3:
                                        echo '<option value="1">10%</option>';
                                        echo '<option value="2">20%</option>';
                                        echo '<option value="3" selected="">30%</option>';
                                        echo '<option value="4">40%</option>';
                                        echo '<option value="5">50%</option>';
                                        break;
                                    case 4:
                                        echo '<option value="1">10%</option>';
                                        echo '<option value="2">20%</option>';
                                        echo '<option value="3">30%</option>';
                                        echo '<option value="4" selected="">40%</option>';
                                        echo '<option value="5">50%</option>';
                                        break;
                                    case 5:
                                        echo '<option value="1">10%</option>';
                                        echo '<option value="2">20%</option>';
                                        echo '<option value="3">30%</option>';
                                        echo '<option value="4">40%</option>';
                                        echo '<option value="5" selected="">50%</option>';
                                        break;
                                }
                                }else if(isset($data) && !empty($data['id_share'])){
                                    switch($data['id_share']){
                                        case 1:
                                            echo '<option value="1" selected="">10%</option>';
                                            echo '<option value="2">20%</option>';
                                            echo '<option value="3">30%</option>';
                                            echo '<option value="4">40%</option>';
                                            echo '<option value="5">50%</option>';
                                            break;
                                        case 2:
                                            echo '<option value="1">10%</option>';
                                            echo '<option value="2" selected="">20%</option>';
                                            echo '<option value="3">30%</option>';
                                            echo '<option value="4">40%</option>';
                                            echo '<option value="5">50%</option>';
                                            break;
                                        case 3:
                                            echo '<option value="1">10%</option>';
                                            echo '<option value="2">20%</option>';
                                            echo '<option value="3" selected="">30%</option>';
                                            echo '<option value="4">40%</option>';
                                            echo '<option value="5">50%</option>';
                                            break;
                                        case 4:
                                            echo '<option value="1">10%</option>';
                                            echo '<option value="2">20%</option>';
                                            echo '<option value="3">30%</option>';
                                            echo '<option value="4" selected="">40%</option>';
                                            echo '<option value="5">50%</option>';
                                            break;
                                        case 5:
                                            echo '<option value="1">10%</option>';
                                            echo '<option value="2">20%</option>';
                                            echo '<option value="3">30%</option>';
                                            echo '<option value="4">40%</option>';
                                            echo '<option value="5" selected="">50%</option>';
                                            break;
                                    }
                                    }else{
                                        echo '<option value="1">Категория 1</option>';
                                        echo '<option value="2">Категория 2</option>';
                                        echo '<option value="3">Категория 3</option>';
                                        echo '<option value="4">Категория 4</option>';
                                        echo '<option value="5">Категория 5</option>';
                                    }
                                    ?>
                        </select>
                        <span class="red"><?php if(!empty($arrErr['shar_id'])){echo $arrErr['shar_id'];} ?></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Стоимость</span>
                            <input type="number" name="price" id="price" class="form-control" placeholder="Введите стоимость"
                                value="<?php
                                if(isset($second_data) && !empty($second_data['cost'])){
                                    echo $second_data['cost'];
                                }else if(isset($data) && !empty($data['cost'])){
                                    echo $data['cost'];
                                }
                                ?>"              >
                        <span class="red"><?php if(!empty($arrErr['price'])){echo $arrErr['price'];} ?></span>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" name="image" id="image">
                        <span class="red"><?php if(!empty($arrErr['file_name'])){echo $arrErr['file_name'];} ?></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Описание</span>
                        <textarea class="form-control" name="desc" id="desc" maxlength="255" placeholder="Введите описание"><?php if(isset($second_data) && !empty($second_data['desc'])){
                            echo $second_data['desc'];
                            }else if(isset($data) && !empty($data['description'])){
                                echo $data['description'];
                            }
                            ?></textarea>
                        <span class="red"><?php if(!empty($arrErr['desc'])){echo $arrErr['desc'];} ?></span>
                    </div>
                    <button class="btn btn-primary" name="applyEdit" value="submit_edit">Редактировать</button>
                    <button class="btn btn-primary" name="closeEdit" value="close_edit">Вернуться</button>
              </div>
        </form>





      <footer class="text-center text-lg-start bg-light text-muted">
          <div class="row" style="background-color: #333; color: #fff; ">
              <div class="col-md-9">
                  <a class="navbar-brand" href="#" style="position: relative; left: 45px"><img src="image_ht/mv.svg" alt="mvideo" height="120px" width="120px"></a>
              </div>
              <div class="col-md-3">
                  <div  style="background-color: #474747;  position: relative;  border-radius: 30px; border-radius: 5px; top: 40px; width: 200px; height: 47px;  left: 115px;">
                      <div class="rectangle text_center_middle" role="button" style="color: #fff; text-align: center; font-size: 16px; position: relative; text-align: center; font-size: 16px;  font-weight: 600;">
                          Карта магазинов
                      </div>
                  </div>
              </div>
          </div>

          <div class="row" style="background-color: #333; color: #fff; ">
              <div class="col-md-12" >
                  <hr style="position: relative; color: #808080; margin-left: 45px; margin-right: 45px; bottom: 30px;">
              </div>
          </div>

          <div class="row" style="background-color: #333; color: #fff; ">
              <div class="col-md-2" >
                  <ul class="list-unstyled mb-0" >
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; color: #fff; text-decoration: none;">Покупателям</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">Каталог</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px;text-decoration: none;">Частые вопросы </a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px;text-decoration: none;">Акции и скидки</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px;text-decoration: none;">M.Club – кэшбек и Бонусные рубли</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">Доставка</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">Обмен и возврат</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">М.Сервис – ремонт, страховка</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">Кредит и рассрочка</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none; ">Заберите товар через 15 минут после заказа</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">Гарантия лучшей цены</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">Публичная оферта</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 45px; text-decoration: none;">Безопасность в Интернете</a>
                      </li>
                  </ul>
              </div>

              <div class="col-md-2" >
                  <ul class="list-unstyled mb-0" >
                      <li>
                          <a href="#!"  style="position: relative; left: 60px; color: #fff; text-decoration: none;">Бизнесу</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 60px;  text-decoration: none;">Техника для вашей компании</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 60px; text-decoration: none;">Тендеры </a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 60px; text-decoration: none;">Поставщикам</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 60px; text-decoration: none; white-space: nowrap;">Арендуем помещения под магазины</a>
                      </li>
                      <li>
                          <a href="#!"  style="position: relative; left: 60px; text-decoration: none;">Электронный документооборот</a>
                      </li>
                  </ul>
              </div>

              <div class="col-md-2" >
                  <ul class="list-unstyled mb-0" >
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; color: #fff; text-decoration: none;">О компании</a>
                    </li>
                    <li>
                        <a href="#!" style="position: relative; left: 125px;  text-decoration: none;">Про М.Видео</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Вакансии </a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Пресс-центр</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none; white-space: nowrap;">Благотворительный фонд</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Экологические инициативы</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Партнёрская программа</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Инвесторам и акционерам</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Политика компан125</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-2" >
                <ul class="list-unstyled mb-0" >
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; color: #fff; text-decoration: none;">Блог</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px;  text-decoration: none;">18 лучших холодильников на сегодняшний день</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Как сделать, чтобы вещи в шкафу приятно пахли </a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Новый iPhone 14: каким он будет и когда старт продаж</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;  ">Куда деть кабачки: 12 интересных рецептов</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Осенняя обрезка плодовых деревьев: полезные советы</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Лучшие детские смарт-часы для разных возрастов</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">На чем мы будем передвигаться в XXI веке: 5 видов транспорта ближайшего будущего</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Как красиво фотографироваться осенью</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 125px; text-decoration: none;">Параллельный и серый импорт: что это такое и в чем отличия</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-2" >
                <ul class="list-unstyled mb-0" >
                    <li>
                        <a href="#!"  style="position: relative; left: 130px; color: #fff; text-decoration: none;">Обратная связь</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 130px;  text-decoration: none;">КОНТАКТЫ</a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 130px; text-decoration: none;">Канал Viber </a>
                    </li>
                    <li>
                        <a href="#!"  style="position: relative; left: 130px; text-decoration: none;">Telegram</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row" style="background-color: #333; color: #fff; ">
            <div class="col-md-12" >
                <hr style="position: relative; color: #808080; margin-left: 45px; margin-right: 45px; ">
            </div>
        </div>

        <div class="row" style="background-color: #333; color: #fff; ">
            <div class="col-md-8" >
                <p style="position: relative; left: 45px;">Скачайте мобильное приложение</p>
                <div  style="background-color: #474747;   position: relative; display: inline-block; border-radius: 30px; border-radius: 5px;  width: 150px; height: 35px; bottom: 5px; left: 45px;">
                    <div class="rectangle text_center_middle" role="button" style="color: #fff; text-align: center; font-size: 16px; position: relative;  font-size: 14px;  font-weight: 600;">
                        <a href="#" style="text-align: left; position: relative; right: 20px; bottom: 5px;"><img src="image_ht/google-play.png" width="22px" height="22px;"></a>
                            Google Play
                    </div>
                </div>
                <div  style="background-color: #474747;   position: relative; display: inline-block; border-radius: 30px; border-radius: 5px;  width: 150px; height: 35px; bottom: 5px; left: 45px;">
                    <div class="rectangle text_center_middle" role="button" style="color: #fff; text-align: center; font-size: 16px; position: relative;  font-size: 14px;  font-weight: 600;">
                        <a href="#" style="text-align: left; position: relative; right: 20px; bottom: 5px;"><img src="image_ht/apple.png" width="22px" height="22px;"></a>
                            App Store
                    </div>
                </div>
                <div  style="background-color: #474747;   position: relative; display: inline-block; border-radius: 30px; border-radius: 5px;  width: 150px; height: 35px; bottom: 5px; left: 45px;">
                    <div class="rectangle text_center_middle" role="button" style="color: #fff; text-align: center; font-size: 16px; position: relative;  font-size: 14px;  font-weight: 600;">
                        <a href="#" style="text-align: left; position: relative; right: 20px; bottom: 5px;"><img src="image_ht/huawei.png" width="22px" height="22px;"></a>
                            AppGallery
                    </div>
                </div>
                <div  style="background-color: #474747;   position: relative; display: inline-block; border-radius: 30px; border-radius: 5px;  width: 150px; height: 35px; bottom: 5px; left: 45px;">
                    <div class="rectangle text_center_middle" role="button" style="color: #fff; text-align: center; font-size: 16px; position: relative;  font-size: 14px;  font-weight: 600;">
                        <a href="#" style="text-align: left; position: relative; right: 20px; bottom: 5px;"><img src="image_ht/rustore.png" width="22px" height="22px;"></a>
                            RuStore
                    </div>
                </div>
            </div>

            <div class="col-md-4" >
                <p style="position: relative; text-align: right; right: 45px;">М.Видео в соцсетях</p>
                <div id="circle1" >
                    <a href="#" style="position: relative; top: 6px;"><img src="image_ht/vk.png" width="20px" height="20px;"></a>
                </div>
                <div id="circle2" >
                    <a href="#" style="position: relative; top: 6px;"><img src="image_ht/youtube.png" width="20px" height="20px;"></a>
                </div>
                <div id="circle3" >
                    <a href="#" style="position: relative; top: 6px;"><img src="image_ht/odnokl.png" width="20px" height="20px;"></a>
                </div>
            </div>

            <div class="col-md-12" >
                <hr style="position: relative; color: #808080; margin-left: 45px; margin-right: 45px; ">
            </div>

            <div class="col-md-8">
                <p style="position: relative; left: 45px; color: #b5b5b9;">Copyright М.Видео</p>
                <div class="qq">
                    <a href="#!"  style="position: relative; left: 45px;  bottom: 10px; display: inline-block; text-decoration: none;">Официальная информация</a>
                    <a href="#!"  style="position: relative; left: 55px;  bottom: 10px; display: inline-block; text-decoration: none;">Раскрытие информации</a>
                </div>
            </div>
            <div class="col-md-4">
                <p></p>
                <div id="circle4" >
                    <a href="#" style="position: relative; text-decoration: none; color: #333; top: 6px; font-size: 14px; font-weight: 800;">АКИТ</a>
                </div>
            </div>
        </footer>




    </body>
</html>
