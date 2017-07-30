
  <html>
<head>

<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" ref="bootstrap-3.3.7-dist/bootstrap.min.js"> 
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/moment-with-locales.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
            .с1 {
       display:none;
    }
            </style>
    
</head>
<body>



<div id="menu">
<img id="logo" src="image/AirLines.png"  align=left>
    <ul>
        
        <li><a href="index.php" ><span>Авиабилеты</span></a></li>
    <li><a href="Hotels.php" class="current"><span>Отели</span></a></li>
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
   <div id='Allhotel'>
        

<?
if(isset($_GET['CurrentHotel']))
{
    $id =$_GET['CurrentHotel'];
    $link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306);
    $query1="SELECT * FROM  LlistHotel, ListServicesbyHotel WHERE (LlistHotel.id = '$id') AND (LlistHotel.Services_id=ListServicesbyHotel.idSer)"; 
    $result1=mysqli_query($link,$query1) or die("Ошибка " . mysqli_error($link)); 
    $fly = mysqli_fetch_assoc($result1);   
    
    echo "<img src='img/hotels/".$fly['img']."'>";  
    echo "<br>"; 
    echo "<a href ='currenthotel.php?CurrentHotel={$fly['id']}'>".$fly['name']."</a>";
    
    
    $count = $fly['CountStars'];
    for($i=0; $i<$count; $i++)
    {

         echo "<img id='star' src='img/star-xxl.png'>";
    }   
    echo "<br>";
        echo "<h2>Для бронрования номера обратитесь по <a target='_blank' href ='".$fly['LINK']."'>ссылке</a></h2>";             
   
    
}

?>
        
        
        <script type="text/javascript">
            function toggleDiv(divId) {
        $("#"+divId).toggle(); 
    }
 </script>
<a href="javascript:toggleDiv('с2');">Услуги</a>
<div id="с2" class='с1'>
        <div id='toggle'>
        <? if($fly['Poll']==1): ?>
        <p>Бассейн</p>
        <?else: ?>
        <s>Бассейн</s>
        <? endif;?>
        <? if($fly['WiFi']==1): ?>
        <p>Wi-Fi</p>
        <?else: ?>
        <s>Wi-Fi</s>
        <? endif;?>
        <? if($fly['Animls']==1): ?>
        <p>Домажние Животные</p>
        <?else: ?>
        <s>Домажние Животные</s>
        <? endif;?>
        <? if($fly['parking']==1): ?>
        <p>Парковка</p>
        <?else: ?>
        <s>Парковка</s>
        <? endif;?>
        <? if($fly['restor']==1): ?>
        <p>Ресторан</p>
        <?else: ?>
        <s>Ресторан</s>
        <? endif;?>
        <? if($fly['fitnes']==1): ?>
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
     
        
