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
  <? include_once "pages/pagesitem/taborders.php"; ?>


  <!-- Текст -->

  <div id="info">
    <h1> Найдите самые дешевые авиабилеты от более, чем тысячи авиакомпаний и туристических сайтов</h1>
    <div class="blocks" id="blocks1">
      <img>
      <h2> <img class="image-info" src="image/17.png"> Владелец наград </h2>
      <p> AirTravel выиграл большое количество наград в категориях лучшего агрегатора цен на авиабилеты и получил рекомендации от таких авторитетных изданий.
      </p>
    </div>
    <div class="blocks">
      <img>
      <h2> <img class="image-info" src="image/starfull.png">Бесплатный и независимый </h2>
      <p> Мы предлагаем вам самые лучшие авиабилеты, а также перенаправляем вас на сайт, где можно снять жилье и арендовать авто.
      </p>
    </div>
    <div class="blocks">
      <img>
      <h2> <img class="image-info" src="image/blobwars.png"> Самые лучшие и дешевые </h2>
      <p> Вы можете с легкостью приобрести самые дешевые билеты на самый быстрый и оптимальный рейс. Все, что вам нужно сделать - это просто выбрать и вы готовы к путешествию.
      </p>
    </div>
  </div>


  <? include_once "pages/pagesitem/footer.php"; ?>




</body>

</html>