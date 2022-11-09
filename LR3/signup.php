<?php
  require_once('logic_sign.php');
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



      <div class="col-md-5 mx-auto" style="position: relative; width: 500px; height: 950px; background-color: #f5f5f5;  border: 2px solid #c0c0c0; border-radius: 6px;">
          <div class="row">
              <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="width: 440px; display: block; margin-left: auto; margin-right: auto; ">
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="login">Email (Логин)</label>
                      <input type="login" name="login" id="login"  class="form-control" placeholder="example@example.com" value="<?php if(isset($_POST['login'])){ echo $_POST['login'];}?>">
                      <p><?php echo $err['login'];?></p>
                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="full_name">ФИО</label>
                      <input type="text" name="full_name" id="full_name"  class="form-control" placeholder="Иванов Иван Иванович" value="<?php if(isset($_POST['full_name'])){ echo $_POST['full_name'];}?>">
                      <p><?php echo $err['full_name'];?></p>
                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="address">Адрес:</label>
                      <input type="text" name="address" id="address"  class="form-control" placeholder="Укажите адрес" value="<?php if(isset($_POST['address'])){ echo $_POST['address'];}?>">
                      <?php echo $err['address']; ?>
                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="date">Дата рождения: </label>
                      <input type="date" id="date" name="date" value="<?php if(isset($_POST['date'])){ echo $_POST['date'];}?>">
                      <?php echo $err['date']; ?>
                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="blood_type">Группа крови</label>
                      <select  name="blood_type"  id="blood_type" class="form-control">
                      <?php if(isset($_POST['blood_type']) && !empty($_POST['blood_type'])){
                          switch($_POST['blood_type']) {

                              case 1:
                                  echo '<option value="1" selected="">0 (I)</option>';
                                  echo '<option value="2">A (II)</option>';
                                  echo '<option value="3">B (III)</option>';
                                  echo '<option value="4">AB (IV)</option>';
                                  break;
                              case 2:
                                  echo '<option value="1">0 (I)</option>';
                                  echo '<option value="2" selected="">A (II)</option>';
                                  echo '<option value="3">B (III)</option>';
                                  echo '<option value="4">AB (IV)</option>';
                                  break;
                              case 3:
                                  echo '<option value="1">0 (I)</option>';
                                  echo '<option value="2">A (II)</option>';
                                  echo '<option value="3" selected="">B (III)</option>';
                                  echo '<option value="4">AB (IV)</option>';
                                  break;
                              case 4:
                                    echo '<option value="1">0 (I)</option>';
                                    echo '<option value="2">A (II)</option>';
                                    echo '<option value="3">B (III)</option>';
                                    echo '<option value="4" selected="">AB (IV)</option>';
                                    break;
                          }
                          }

                          else {
                              echo '<option value="1">0 (I)</option>';
                              echo '<option value="2">A (II)</option>';
                              echo '<option value="3">B (III)</option>';
                              echo '<option value="4">AB (IV)</option>';
                          }
                          ?>
                          <span class="red"><?php if(!empty($err['blood_type'])){echo $err['blood_type'];} ?></span>
                      </select>
                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="rezus_factor">Резус-фактор</label>
                      <select  name="rezus_factor"  id="rezus_factor" class="form-control">
                        <?php if(isset($_POST['rezus_factor']) && !empty($_POST['rezus_factor'])){
                              switch($_POST['rezus_factor']){
                                  case 'plus':
                                        echo '<option value="plus" selected="">Положительный (+)</option>';
                                        echo '<option value="minus">Отрицательный (-)</option>';
                                        break;
                                  case 'minus':
                                        echo '<option value="plus">Положительный (+)</option>';
                                        echo '<option value="minus" selected="">Отрицательный (-)</option>';
                                        break;
                              }
                          }
                          else {
                              echo '<option value="plus">Положительный (+)</option>';
                              echo '<option value="minus">Отрицательный (-)</option>';
                          }
                          ?>
                      </select>
                      <span class="red"><?php if(!empty($err['rezus_factor'])){echo $err['rezus_factor'];} ?></span>
                </div>
                <div class="form-group" style="margin-bottom: 1rem;">
                    <label for="sex">Выберите пол</label>
                        <select  name="sex"  id="sex" class="form-control">
                            <option value="" disabled="" selected="" >Выберите пол</option>
                                  <?php if(isset($_POST['sex']) && !empty($_POST['sex'])){
                                      switch($_POST['sex']){
                                          case 1:
                                              echo '<option value="1" selected="">Мужской</option>';
                                              echo '<option value="2">Женский</option>';
                                              break;
                                          case 2:
                                              echo '<option value="1">Мужской</option>';
                                              echo '<option value="2" selected="">Женский</option>';
                                              break;
                                      }
                                  }else{
                                      echo '<option value="1">Мужской</option>';
                                      echo '<option value="2">Женский</option>';
                                  }
                                  ?>
                                  <span class="red"><?php if(!empty($err['sex'])){echo $err['sex'];} ?></span>

                      </select>

                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="vk">Ссылка на профиль Вконтак</label>
                      <input type="url" name="vk" id="vk" class="form-control" placeholder="https://vk.com/idx" value="<?php if(isset($_POST['vk'])){ echo $_POST['vk'];}?>">
                      <?php echo $err['vk']; ?>
                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="password">Пароль</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="Совершенно секретно">
                      <?php echo $err['password']; ?>
                  </div>
                  <div class="form-group" style="margin-bottom: 1rem;">
                      <label for="password_confirm">Подтвердите пароль</label>
                      <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Совершенно секретно">
                      <?php echo $err['password_confirm']; ?>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" name="button">Зарегаться</button>


                    </a>
                    <p>Вы уже зарегестрированы?
                      <a href="login.php" style=" color: #212529;"> Войти</a>
                    </p>
                  </div>
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>
                  <p></p>
              </form>
          </div>
      </div>


      <!-- Таблица для заполнения -->












    </body>
</html>
