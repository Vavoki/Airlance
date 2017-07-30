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
		
		<li><a href="#" class="current"><span>Авиабилеты</span></a></li>
		<li><a href="Hotels.php"><span>Отели</span></a></li>
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
       <option>Экономный</option> 
     <option>Первый класс</option>
        </select>
    <div class='input-group date picker'  id='datetimepicker2'>
               <input id="input-date " name="DateTO" type='text' class="form-control" placeholder="Дата вылета">
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


   <!-- Популярные направления -->


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