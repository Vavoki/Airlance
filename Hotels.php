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
        <img id="image" src="image/otel.jpg" alt="">
        <div class="carousel-caption">
          <h3>Лучшие цены на гостиничные номера по всему миру. </h3>
        </div>
      </div>
      <div class="item">
        <img id="image" src="image/otel2.jpg" alt="">
        <div class="carousel-caption">
          <h3>Бронирование гостиничных номеров в один клик.</h3>
        </div>
      </div>
      <div class="item">
        <img id="image" src="image/otel3.jpg" alt="">
        <div class="carousel-caption">
          <h3>Самый легкий поиск отелей по всему миру.</h3>
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
  <? include_once "pages/pagesitem/taborders.php"; ?>
  <!-- Текст -->

  <div id="info">
    <h1> Найдите самые лучшие цены на люксовые, бутик и бюджетные отели</h1>
    <div class="blocks" id="blocks1">
      <img>
      <h2> <img class="image-info" src="image/17.png">  Гарантия лучшей цены </h2>
      <p> Это, действительно, самое дешевое предложение? С гарантией лучшей цены вы можете быть уверены, что получите самое выгодное предложение при онлайн-бронировании.
      </p>
    </div>
    <div class="blocks">
      <img>
      <h2> <img class="image-info" src="image/starfull.png">Выгодные предложения</h2>
      <p> Уникальная технология позволяет нашим роботам сканировать все основные сайты бронирования отелей, находя самые лучшие предложения на отели по любому из заданных направлений.
      </p>
    </div>
    <div class="blocks">
      <img>
      <h2> <img class="image-info" src="image/blobwars.png"> Отзывы гостей </h2>
      <p> Мы сканируем все основные сайты бронирования отелей и собираем реальные отзывы гостей, чтобы вы могли получить информацию из первых рук.
      </p>
    </div>
  </div>
  <!-- Лучшие отели -->
  <div id="best-hotels">
    <h1>Предложения на отели в одном из этих городов!</h1>
    <h3> Гарантия лучшей цены позволяет бронировать отели по самым низким ценам в любом из направлений. </h3>

    <? include_once "/php/selectListHotels.php"; ?>

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