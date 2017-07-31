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
  <a href="#myCarousel"  class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a href="#myCarousel" class="right carousel-control"  data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
 </div>

 <? include_once "pages/pagesitem/taborders.php"; ?>


 <!-- Текст -->

  <div id="info" >
  <h1> Оформление заказа</h1>
  <div id="ticket">
  <? include_once "/php/ordersTicket.php"?>

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
    <img src="image/Berlin.jpg"> 
</td>
<td>
     <img src="image/Barselona.jpg"> 
</td>
<td>
  >  <img src="image/Dubai.jpg"> 
</td>
<td>
    <img src="image/Goa.jpg"> 
   </td>
 </tr>
 <tr>
      <td>
    <img src="image/hoshimin.jpg"> 
</td>
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
	<a href="https://uk-ua.facebook.com/"><img  class="img-circle" src="image/Facebook.png"  > </a>
	<a href="https://twitter.com/"> <img  class="img-circle" src="image/Twitter.png"  > </a>
  </div>
	</div>
	
	
</div>
 
</body>
</html>
