<?php
  require_once('logic_login.php');
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


      <div class="d-flex">


      <?php
          if ($_SESSION) {
              if (isset($_SESSION['user'])) {?>
                  <div class="col-md-5 mx-auto" style="position: relative; width: 400px; height: 300px; background-color: #f5f5f5;  border: 2px solid #ced4da; border-radius: 6px; margin-top: 50px; text-align: center; ">
                      <div class="row">
                          <form class="" action="" method="post">
                              Вы вошли как:
                              <p>
                                  <div class="" style="position: relative; display: block; margin-left: auto;   margin-right: auto; border: 2px solid #ced4da; border-radius: 6px; background-color: #fff; width: 350px; height: 30px;  top: 10px;">
                                      <a href="login.php" style="text-decoration: none; color: #212529; ">

                                      <?php
                                          echo '<p>' .  $_SESSION['user'] . '</p>';
                                          }
                                      ?>
                                      </a>
                                  </div>

                              </p>

                              <p>
                                  <div class="" style="position: relative; display: block; margin-left: auto;   margin-right: auto; border: 2px solid #ced4da; border-radius: 6px; background-color: #fff; width: 200px; height: 30px; top: 70px;">
                                      <a href="secret.php" style="text-decoration: none; color: #212529; ">
                                          Секретная страничка
                                      </a>
                                  </div>
                              </p>

                              <p>
                                  <div class="" style="position: relative; display: block; margin-left: auto;   margin-right: auto; border: 2px solid #ced4da; border-radius: 6px; background-color: #fff; width: 100px; height: 30px; top: 70px;">
                                      <a href="logout.php" style="text-decoration: none; color: #212529; ">
                                          Выйти
                                      </a>
                                  </div>
                              </p>
                          </form>
                      </div>
                  </div>

                  <?php
                      unset($_SESSION['user']);
                      }
                      else {
                  ?>
                  <div class="col-md-5 mx-auto" style="position: relative; width: 400px; height: 300px; background-color: #f5f5f5;  border: 2px solid #ced4da; border-radius: 6px; margin-top: 50px; text-align: center; ">
                      <div class="row">
                          <form class="" action="" method="post">
                              <p>
                                  <div class="" style="position: relative; display: block; margin-left: auto;   margin-right: auto; border: 2px solid #ced4da; border-radius: 6px; background-color: #fff; width: 160px; height: 30px;  top: 70px;">
                                      <a href="login.php" style="text-decoration: none; color: #212529; ">
                                          Войти
                                      </a>
                                  </div>
                              </p>

                              <p>
                                  <div class="" style="position: relative; display: block; margin-left: auto;   margin-right: auto; border: 2px solid #ced4da; border-radius: 6px; background-color: #fff; width: 160px; height: 30px; top: 70px;">
                                      <a href="signup.php" style="text-decoration: none; color: #212529; ">
                                          Зарегестрироваться
                                      </a>
                                  </div>
                              </p>
                              <p>
                                  <div class="" style="position: relative; display: block; margin-left: auto;   margin-right: auto; border: 2px solid #ced4da; border-radius: 6px; background-color: #fff; width: 200px; height: 30px; top: 70px;">
                                      <a href="login.php" style="text-decoration: none; color: #212529; ">
                                          Секретная страничка
                                      </a>
                                  </div>
                              </p>
                          </form>
                      </div>
                  </div>
                  <?php } ?>
              </div>
      <!-- Форма для фильтрации -->
