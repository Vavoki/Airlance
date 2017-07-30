<html>
<head>

<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" ref="bootstrap-3.3.7-dist/bootstrap.min.js">	
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/moment-with-locales.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>



<div id="menu">
<img id="logo" src="image/AirLines.png"  align=left>
	<ul>
		
		<li><a href="index.php" ><span>Авиабилеты</span></a></li>
    <li><a href="#" class="current"><span>Отели</span></a></li>
    <li><a href="AboutUs.php" ><span>О нас</span></a></li>     
    <li><a href="Contakts.php" ><span>Контакты</span></a></li>   				
	</ul>
</div>

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
  <a href="#myCarousel"  class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a href="#myCarousel" class="right carousel-control"  data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
 </div>
<!-- Вкладки -->
 <div id="poisk">
<div id="tab">
<ul class="nav nav-tabs">
  <li class="active active-tab">   <a class="user-name" data-toggle="tab" href="#panel1"> <img id="icon" src="image/Airplane1.png">Авиабилеты </a></li>

</ul>
<div class="tab-content">
<!-- Авиабилеты -->
  <div id="panel1" class="tab-pane fade in active">
    <div id="inputs"> 
         
        <form action="timetable.php" method="post" id="inputs">
            
        <input type="text" name="frm" id="input1" class="input-one form-control"  placeholder="Из города или аэропорта">   
       <img src="image/Arrows.png" id="arrows">
        <input type="text" name="to" class="form-control"  id="input1" placeholder="В город, страну или регион">
    <select name = "typeTicket"  class="form-control"  id="input3"> 
       <option>Выберите тип билета</option>
       <option>Бизнес класс </option> 
       <option>Эконом</option> 
     <option>Первый класс</option>
        </select>
    <div class='input-group date picker'  id='datetimepicker2'>
               <input id="input-date " type='text' class="form-control" placeholder="Дата вылета">
                   <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar">
                      </span>
                   </span>
           </div>         
        <input type="submit" name="submit" id="button1" class="btn btn-default btn-lg center-block" value="Найти">
            
        </form> 
    </div>
     </div>

</div>
</div>
</div>
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

 <?
        $link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306);
        
        
        $query1="SELECT * FROM ListCityHotel"; 
        $result1=mysqli_query($link,$query1) or die("Ошибка " . mysqli_error($link)); 
  while($fly = mysqli_fetch_assoc($result1)) {        
          
                   echo "<div id='hotel'><a href ='ListHotel.php?ListHotel={$fly['idC']}'><img src='image/".$fly['img']."'><h4>".$fly['nameC']."</h4></a></div>";
                   
                }
            
        
        
       
        ?>
        
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
	<a href="https://uk-ua.facebook.com/"><img  class="img-circle" src="image/Facebook.png"  > </a>
	<a href="https://twitter.com/"> <img  class="img-circle" src="image/Twitter.png"  > </a>
  </div>
	</div>
	
</div>
 
</body>
</html>
