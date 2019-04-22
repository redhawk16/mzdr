<?php require_once('./_includes/connect.php');
$connect = get_connect(); ?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Министерство здравоохранения Омской области</title>
    <link rel="icon" href="assets/img/header-logo.png" type="image/png">
  
    <link href="css/libs.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  
    <!-- <script src="https://api-maps.yandex.ru/2.1/?apikey=b4c8f470-ee66-4d3f-9a05-b627095fabdb&lang=ru_RU" type="text/javascript"></script> -->
    <script src="js/libs.min.js"></script>		
    <script src="js/owl.carousel.min.js"></script>	
    <script async src="js/common.js"></script>	
  </head>

  <body>
    <header>
      <div class="header-top">
        <div class="header-top__logo"><a href="index"><img src="assets/img/header-logo.png" width="auto" height="100%" align="middle" alt=">Министерство здравоохранения Омской области" title="На главную"></a></div>
        <!-- /.header-top__logo -->
        <div class="header-top__title"><h2 
        class="header-top__title">Минстерство здравоохранения Омской области</h2></div>
        <!-- /.header-top__title -->
        <div class="header-top__blind"><p class="header-top__blind-text">Версия для слабовидящих <i class="fas fa-eye"></i></p></div>
        <!-- /.header-top__blind -->
      </div>
      <!-- /.header-top -->

      <div class="header-bottom">
        <nav class="header-bottom__nav">
          <ul>
            <li class="header-bottom__nav-item" data-dropdown-to="1"><a class="header-bottom__nav-item__link" href="#">Министерство</a></li>
            <li class="header-bottom__nav-item" data-dropdown-to="2"><a class="header-bottom__nav-item__link" href="#">Нормотворческая деятельность</a></li>
            <li class="header-bottom__nav-item"><a class="header-bottom__nav-item__link" href="./about.php">Руководитель</a></li>
            <li class="header-bottom__nav-item" data-dropdown-to="0"><a class="header-bottom__nav-item__link" href="#"><i class="fas fa-ellipsis-h"></i></a></li>
          </ul>
        </nav>
        <!-- /.header-bottom__nav -->
        <div class="header-bottom__dropdown" id="dropdown-menu-items">
          <div class="header-bottom__dropdown-menu-item">
            <ul>
              <li class="header-bottom__dropdown-item"><a href="https://www.gosuslugi.ru" target="_blank" class="header-bottom__dropdown-item__link">Госуслуги</a></li>
              <li class="header-bottom__dropdown-item"><a href="http://www.pfrf.ru/" target="_blank" class="header-bottom__dropdown-item__link">Пенсионный фонд Российской Федерации</a></li>
              <li class="header-bottom__dropdown-item"><a href="http://www.garant55.ru" target="_blank" class="header-bottom__dropdown-item__link">Законодательство Омской области</a></li>
              <li class="header-bottom__dropdown-item"><a href="http://www.omskzakaz.ru/" target="_blank" class="header-bottom__dropdown-item__link">Госзакупки Омской области</a></li>
              <li class="header-bottom__dropdown-item"><a href="http://www.omdrug.ru/index.php" target="_blank" class="header-bottom__dropdown-item__link">Контроль качества лекарственных средств</a></li>
            </ul>
          </div>
          <div class="header-bottom__dropdown-menu-item">
            <ul>
              <li class="header-bottom__dropdown-item"><a href="./systems.php" class="header-bottom__dropdown-item__link">Перечень информационных систем, реестров и баз данных</a></li>
              <li class="header-bottom__dropdown-item"><a href="./staff.php" class="header-bottom__dropdown-item__link">Организационная структура</a></li>
              <li class="header-bottom__dropdown-item"><a href="./contacts.php" class="header-bottom__dropdown-item__link">Контактная информация</a></li>
            </ul>
          </div>
          <div class="header-bottom__dropdown-menu-item">
            <ul>
              <li class="header-bottom__dropdown-item"><a href="./citizens.php" class="header-bottom__dropdown-item__link">Обращения граждан</a></li>
              <li class="header-bottom__dropdown-item"><a href="./international.php" class="header-bottom__dropdown-item__link">Международное сотрудничество</a></li>
            </ul>
          </div>
        </div>
        <!-- /.header-bottom__dropdown -->
      </div>
      <!-- /.header-bottom -->
    </header>