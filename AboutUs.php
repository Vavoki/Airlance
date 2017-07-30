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
    <li><a href="Hotels.php" ><span>Отели</span></a></li>
    <li><a href="" class="current" ><span>О нас</span></a></li>     
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
<h1> Обслуживание</h1>
  <p > Авиакомпания Air Travel делает все возможное для снижения стоимости полетов и применяет инновации на всех этапах обслуживания пассажиров. Мы стремимся сделать путешествия по воздуху доступными для жителей Центральной и Восточной Европы, а также открывать новые возможности путешественникам в любых странах ЕС.

Мы внедряем самые современные технологии, чтобы создать особую атмосферу путешествия с Air Travel, запоминающегося не только качеством, но и ценой. Мы предлагаем «упрощенную модель обслуживания»: перелет без билетов, использование второстепенных аэропортов (позволяющих сэкономить время и средства), салон унифицированного класса с кожаными креслами и заказ питания на борту за дополнительную плату.

Air Travel эксплуатирует только новые, лучшие в своем классе воздушные суда, обслуживаемые наиболее авторитетными компаниями, такими как Lufthansa Technik. Благодаря этому компания может обеспечить постоянный уровень качественного обслуживания пассажиров.  </p>
<h1> Аэропорты и маршрутная сеть</h1>
  <p > Air Travel постоянно ищет возможности расширения своей маршрутной сети и осуществления бюджетных воздушных перевозок. Air Travel стремится установить самый низкий уровень цен в регионе Центральной и Восточной Европы, и решающую роль здесь играет выбор аэропорта. Именно поэтому компания Air Travel комплексно задействует основные, второстепенные и региональные аэропорты, готовые доброжелательно и оперативно обслужить клиентов и предложить низкие цены, формирующие тарифы Air Travel. Мы постоянно рассматриваем возможности создания сети маршрутов для осуществления перелетов в другие аэропорты. </p>
  <h1> Команда</h1>
  <p> Мы верим, что успех нашей деятельности полностью зависит от людей. Всех сотрудников компании — как работающих на борту воздушного судна, так и выполняющих наземные операции, — роднит нечто общее: любовь к своей работе. Команда Air Travel  считает необходимым применять высокие этические стандарты, основанные на непревзойденном умении работать в коллективе. Сегодня в нашей компании работают преданные своему делу специалисты из самых разных европейских стран. Благодаря сознательности, профессионализму и культурному разнообразию руководящего состава лидерство и мотивация стали движущей силой и ключевым фактором успеха деятельности Air Travel .</p>
  <h1> Парк воздушных судов Air Travel</h1>
  <p> Авиапарк Air Travel включает новые воздушные суда одного типа: это самолеты Airbus семейства A320, включая A320 и A321ceo. Первое воздушное судно модификации A321ceo компания Air Travel получила в ноябре 2015 года и до конца 2018 года ожидает еще 20 таких самолетов.

Air Travel заказала у компании Airbus 110 воздушных судов новой модификации A321neo, оснащаемых современными системами и двигателями, которые помогут Air Travel еще больше сократить ее самые низкие в отрасли затраты и объем загрязняющих атмосферу оксидов углерода. Все вновь получаемые воздушные суда будут оснащены законцовками крыла «Sharklet».</p>
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