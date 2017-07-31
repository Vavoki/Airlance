<html>

<head>

  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <style>
    .с1 {
      display: none;
    }
  </style>

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
    <div id='Allhotel'>
      <? include_once "/php/currentHotels.php"; ?>
      <script type="text/javascript">
        function toggleDiv(divId) {
          $("#" + divId).toggle();
        }
      </script>
      <a href="javascript:toggleDiv('с2');">Услуги</a>
      <div id="с2" class='с1'>
        <div id='toggle'>
          <? if($fly[ 'Poll']==1): ?>
          <p>Бассейн</p>
          <?else: ?>
            <s>Бассейн</s>
            <? endif;?>
            <? if($fly[ 'WiFi']==1): ?>
            <p>Wi-Fi</p>
            <?else: ?>
              <s>Wi-Fi</s>
              <? endif;?>
              <? if($fly[ 'Animls']==1): ?>
              <p>Домажние Животные</p>
              <?else: ?>
                <s>Домажние Животные</s>
                <? endif;?>
                <? if($fly[ 'parking']==1): ?>
                <p>Парковка</p>
                <?else: ?>
                  <s>Парковка</s>
                  <? endif;?>
                  <? if($fly[ 'restor']==1): ?>
                  <p>Ресторан</p>
                  <?else: ?>
                    <s>Ресторан</s>
                    <? endif;?>
                    <? if($fly[ 'fitnes']==1): ?>
                    <p>Фитнес зал</p>
                    <?else: ?>
                      <s>Фитнес зал</s>
                      <? endif;?>
        </div>
      </div>

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