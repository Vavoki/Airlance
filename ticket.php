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
		
		<li><a href="index.php" class="current"><span>Авиабилеты</span></a></li>
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
       <option>Эконом</option> 
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

  <div id="info" >
  <h1> Оформление заказа</h1>
  <div id="ticket">
  <?
if( isset($_GET['flightB']) ){
		$link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306); 
		$query ="SELECT * FROM `flightB` WHERE 1"; 
		$result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link)); 
		$id =intval($_GET['flightB']);
		$query ="SELECT * FROM `flightB` WHERE id ='$id'"; 
		$result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link)); 
		$pr =intval($_GET['price']);
		$typeticket =$_GET['typeTicket'];
		$date =$_GET['date'];
		$fly = mysqli_fetch_assoc($result);
		$C_1=$fly['C_1'];
		$C_2=$fly['C_2'];
		$DepartureTime=$fly['DepartureTime'];
		$ArrivalTime=$fly['ArrivalTime'];
		echo "Выбранный вами класс ".$typeticket."<br>";
		echo "Цена полета составляет ".$pr."<br>";				
        echo "<p>Рейс №".$fly['id'].".".$C_1."-".$C_2."</p>";
	    echo "<p>Вылет: ".$DepartureTime."</p>";
		echo "<p>Посадка: ".$ArrivalTime."</p>";
		echo "<p>Дата вылета:".$date."</p>";
		if( isset($_POST['submit']))
		{
        $email=$_POST['email'];
        $name=$_POST['Name'];
		$surname =$_POST['Surname'];
		$SerPasp=$_POST['SerPasp'];
		$NPasp =$_POST['NPasp'];
		$NandS_passport=$SerPasp.$NPasp;
		$query1 ="INSERT INTO `orders`
		(`Nflight`, `Price`, `Data_ticket`, `NandS_passport`, `TypeTicket`, `NameC`, `SurnameC`) 
		VALUES 
		('$id','$pr','$name','$NandS_passport','$typeticket','$name','$surname')";
 
		$result1 = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link)); 
		mail ($email, "Покупка авиобилета","Уважаемый ".$name." ".$surname." спасибо что воспользовались нашим сервисом");
		}

}

?>

<div>
	<form class ="formAnket form-horizontal" method="POST">
		<div class="passengerInfo form-inline">
		<p>Контактная информация о пассажире</p>
			<input type ="email" name="email" placeholder="Email" class="form-control" >
			<input type ="text" name="tel" placeholder="Телефон" class="form-control">
		</div>
		<div class="PassportData form-inline">
		<p>Паспортные данные</p>
		   <input type ="text" name="SerPasp" placeholder="Серия паспорта" maxlength="2" class="form-control">
			<input type ="text" name="NPasp" placeholder="Номер паспорта"  maxlength="6" class="form-control">
		</div>
		<div class="PassengertData form-inline">
		<p>Информация о пассажире</p>
		<input type ="text" name="Name" placeholder="Имя" class="form-control">
			<input type ="text" name="Surname" placeholder="Фамилия" class="form-control">
			<div class="Banking form-inline" >
		<p>Реквизиты оплаты</p>
		<input type ="text" name="cartN" placeholder="Введите номер карты" maxlength="16" class="form-control">
			<input type ="text" name="cartM" placeholder="Месяц" maxlength="2" class="form-control">
			<input type ="text" name="cartY" placeholder="Год" maxlength="2" class="form-control">
			<input type ="text" name="cartCod" placeholder="СVV код" maxlength="3" class="form-control">
			<input type="submit" value="Оформить заказ" name = "submit" class="btn btn-default " id="button2" >
		</div>
		
	</form>
</div>
</div>
</div>
</div>
  </div>


   <!-- Популярные направления -->
   <div id="popular">
   <h1> Популярные направления </h1>  
   <table id="popular-table">
<tr>
      <td>
   <a href="Berlin.php"> <img src="image/Berlin.jpg"> </a>
</td>
<td>
    <a href="Barcelona.php"> <img src="image/Barselona.jpg"> </a>
</td>
<td>
  <a href="Dubai.php">  <img src="image/Dubai.jpg"> </a>
</td>
<td>
    <a href="Goa.php"> <img src="image/Goa.jpg"> </a>
   </td>
 </tr>
 <tr>
      <td>
   <a href="Hoshimin.php">  <img src="image/hoshimin.jpg"> </a>
</td>
<td>
 <a href="Kolombo.php"> 
   <img src="image/Kolombo.jpg">
   </a>
</td>
<td>
  <a href="Kopengagen.php">   <img src="image/Kopengagen.jpg"> </a>
</td>
<td>
 <a href="London.php"> 
   <img src="image/London.jpg">
   </a>
   </td>
 </tr>
  <tr>
      <td>
    <a href="Milan.php"> <img src="image/Milan.jpg"> </a>
</td>
<td>
    <a href="New-York.php">  <img src="image/New-York.jpg"> </a>
</td>
<td>
   <a href="Paris.php">  <img src="image/Parig.jpg"> </a>
</td>
<td>
    <a href="Piter.php"> <img src="image/Piter.jpg"> </a>
   </td>
 </tr>
 <tr>
      <td>
   <a href="Praga.php">   <img src="image/Praga.jpg"> </a>
</td>
<td>
   <a href="Riga.php">  <img src="image/Riga.jpg"> </a>
</td>
<td>
    <a href="Tel-Aviv.php"> <img src="image/Tel-Aviv.jpg"> </a>
</td>
<td>
    <a href="Tokio.php">  <img src="image/Tokio.jpg"> </a>
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
	<a href="https://uk-ua.facebook.com/"><img  class="img-circle" src="image/Facebook.png"  > </a>
	<a href="https://twitter.com/"> <img  class="img-circle" src="image/Twitter.png"  > </a>
  </div>
	</div>
	
	
</div>
 
</body>
</html>

