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
    <h1>Список рейсов по заданному запросу</h1>
    <h1>
         <?php

    $link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306);
    $frm1 = $_POST['frm'];
    $frm4 = $_POST['to'];
    $DateTO = $_POST['DateTO'];
    $typiTikect = $_POST['typeTicket'];

    $queryCheck = "SELECT COUNT(id_orders) AS ord, id_ticket,nameBisnes,PriceBisnes,NofSeatsBinses,nameFist,PriceFist,NofSeatsFist,nameEco,PriceEco,
    NofSeatsEco FROM `orders`,`ticket` WHERE (orders.Nflight = ticket.id_ticket) AND (TypeTicket= '$typiTikect') AND(Data_ticket ='$DateTO')";
    $resultCheck=mysqli_query($link,$queryCheck) or die("Ошибка " . mysqli_error($link));
    $cheking = mysqli_fetch_assoc($resultCheck);

    if($cheking['nameBisnes']==$typiTikect)

    if($cheking['ord']>=$cheking['NofSeatsBinses'])

    die("К сожалению на эту дату билеты отсуствуют, выберете другую дату. <a href = '#'>Выбрать</a>");

    if($cheking['nameFist']==$typiTikect)

    if($cheking['ord']>=$cheking['NofSeatsFis'])

    die("К сожалению на эту дату билеты отсуствуют, выберете другую дату. <a href = '#'>Выбрать</a>");

    if($cheking['nameEco']==$typiTikect)

    if($cheking['ord']>=$cheking['NofSeatsEco'])

    die("К сожалению на эту дату билеты отсуствуют, выберете другую дату. <a href = '#'>Выбрать</a>"); 


    $queryFindTowerID="SELECT * FROM `flight` WHERE (city_1='$frm1') LIMIT 1"; 
    $resultFindTowerID=mysqli_query($link,$queryFindTowerID) or die("Ошибка " . mysqli_error($link)); 
      do { 

                    $a = $fly['NCity_1'];

                    }

               while($fly = mysqli_fetch_assoc($resultFindTowerID));
    $queryFindTowerIDTO="SELECT * FROM `flight` WHERE (city_2='$frm4') LIMIT 1"; 
    $resultFindTowerIDTO=mysqli_query($link,$queryFindTowerIDTO) or die("Ошибка " . mysqli_error($link)); 
      do { 

                    $b = $fly['NCity_2'];

                    }

               while($fly = mysqli_fetch_assoc($resultFindTowerIDTO));


    $_distArr = array(); 
    $query ="SELECT * FROM `flight` WHERE 1"; 
    $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link)); 
    while($myrow=mysqli_fetch_array($result)) 
    { 

    $_distArr[$myrow[NCity_1]][$myrow[NCity_2]]=$myrow[Distans]; 

    }

    //initialize the array for storing
    $S = array();//the nearest path with its parent and weight
    $Q = array();//the left nodes without the nearest path
    foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
    $Q[$a] = 0;

    //start calculating
    while(!empty($Q)){
        $min = array_search(min($Q), $Q);//the most min weight
        if($min == $b) break;
        foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
            $Q[$key] = $Q[$min] + $val;
            $S[$key] = array($min, $Q[$key]);
        }
        unset($Q[$min]);
    }

    //list the path
    $path = array();
    $pos = $b;
    while($pos != $a){
        $path[] = $pos;
        $pos = $S[$pos][0];
    }
    $path[] = $a;
    $path = array_reverse($path);

    $count = count($path); 
    for ($i=0; $i<$count-1; $i++) 
    {
            $j=0;
            $j = $i+1;

       $query1="SELECT * FROM `flightB`, ticket WHERE (NC_1='$path[$i]') AND (NC_2='$path[$j]') AND (forTicket = id_ticket) AND (status = 1)"; 
          $result1=mysqli_query($link,$query1) or die("Ошибка " . mysqli_error($link)); 
     while($fly = mysqli_fetch_assoc($result1)) {        if($typiTikect == $fly['nameBisnes'])
              {
                $price = $fly['PriceBisnes'];
              }
              if($typiTikect == $fly['nameFist'])
              {
                $price = $fly['PriceFist'];
              }
              if($typiTikect == $fly['nameEco'])
              {
                $price = $fly['PriceEco'];
              }

                      echo "
                      <a  href ='ticket.php?flightB={$fly['id']}&price={$price}&date={$DateTO}&typeTicket={$typiTikect}'>".$fly['C_1']."     ".$fly['C_2']."</a><p>".$fly['DepartureTime']."  ".$fly['ArrivalTime']."</p><p>". $price ."грн</p>";
                    };



    } 

?>
                    
      </h1>
  </div>


  <!-- Популярные направления -->
  <div id="popular">
    <h1> Популярные направления </h1>
    <table id="popular-table">
      <tr>
        <td>
          <img src="image/Berlin.jpg">
        </td>
        <td>
          <img src="image/Barselona.jpg">
        </td>
        <td>
          <img src="image/Dubai.jpg">
        </td>
        <td>
          <img src="image/Goa.jpg">
        </td>
      </tr>
      <tr>
        <td>
          <img src="image/hoshimin.jpg">
          <td>

            <img src="image/Kolombo.jpg">

          </td>
          <td>
            <img src="image/Kopengagen.jpg">
          </td>
          <td>

            <img src="image/London.jpg">

          </td>
      </tr>
      <tr>
        <td>
          <img src="image/Milan.jpg">
        </td>
        <td>
          <img src="image/New-York.jpg">
        </td>
        <td>
          <img src="image/Parig.jpg">
        </td>
        <td>
          <img src="image/Piter.jpg">
        </td>
      </tr>
      <tr>
        <td>
          <img src="image/Praga.jpg">
        </td>
        <td>
          <img src="image/Riga.jpg">
        </td>
        <td>
          <img src="image/Tel-Aviv.jpg">
        </td>
        <td>
          <img src="image/Tokio.jpg">
        </td>
      </tr>
    </table>
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