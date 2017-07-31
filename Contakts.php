<html>

<head>

  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>

</head>

<body>



  <? include_once "pages/pagesitem/menu.php"; ?>
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img id="image" src="image/1.jpg" alt="">
        <div class="carousel-caption">
          <h3>Авиабилеты по самым выгодным ценам только у нас! </h3>
        </div>
      </div>
      <div class="item">
        <img id="image" src="image/2.jpg" alt="">
        <div class="carousel-caption">
          <h3>Покупайте билеты в один клик! </h3>
        </div>
      </div>
      <div class="item">
        <img id="image" src="image/3.jpg" alt="">
        <div class="carousel-caption">
          <h3>Заказывайте дополнительные услуги быстро и выгодно! </h3>
        </div>
      </div>
    </div>
    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#myCarousel" class="right carousel-control" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>

  <!-- Вкладки -->
 <? include_once "pages/pagesitem/taborders.php"; ?>


  <!-- Текст -->

  <div id="info">
    <div class="blocks" id="blocks1">
      <h1> Адрес агентства</h1>
      <p>Компания Air Travel</p>
      <p>ул. Сумская, 48, оф. 228,</p>
      <p>г. Харьков, Украина
      </p>
    </div>
    <div class="blocks" id="blocks1">
      <h1> График работы</h1>
      <p> Пн-Пт с 9:00 до 19:00</p>
      <p>Сб с 10:00 до 17:00</p>
      <p>Вс с 10:00 до 15:00 </p>
    </div>
    <div class="blocks" id="blocks1">
      <h1> Контактные телефоны</h1>
      <p>
        +38 (044) 503-63-69</p>

      <p>+38 (067) 236-12-43</p>

      <p>+38 (066) 164-72-85</p>
    </div>

  </div>


  <!-- Популярные направления -->
  <div id="map">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.5133389998214!2d36.233137815157384!3d50.00173292747669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e71e4c2c7d%3A0x1a3fbcf7884fd434!2z0LLRg9C70LjRhtGPINCh0YPQvNGB0YzQutCwLCA0OCwg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LA!5e0!3m2!1sru!2snl!4v1495991099380"
    width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <!-- Футер -->
  <div id="block3">

    <div id="footer1" class="footer">
      <img id="logo1" src="image/AirLines.png" align=left>
      <h4>сравнит миллионы предложений на авиабилеты, подберет подходящий отель, авто на прокат и предложит самые выгодные варианты. </h4>
    </div>
    <div id="footer2" class="footer">
      <h4>Мы в социальных сетях:</h4>
      <div id="img-footer">
        <a href="https://uk-ua.facebook.com/"><img class="img-circle" src="image/Facebook.png"> </a>
        <a href="https://twitter.com/"> <img class="img-circle" src="image/Twitter.png"> </a>
      </div>
    </div>


  </div>

</body>

</html>