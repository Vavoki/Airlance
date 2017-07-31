<?
if(isset($_GET['CurrentHotel']))
{
    $id =$_GET['CurrentHotel'];
    $link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306);
    $query1="SELECT * FROM  LlistHotel, ListServicesbyHotel WHERE (LlistHotel.id = '$id') AND (LlistHotel.Services_id=ListServicesbyHotel.idSer)"; 
    $result1=mysqli_query($link,$query1) or die("Ошибка " . mysqli_error($link)); 
    $fly = mysqli_fetch_assoc($result1);   
    
    echo "<img src='/image/hotels/".$fly['img']."'>";  
    echo "<br>"; 
    echo "<a href ='currenthotel.php?CurrentHotel={$fly['id']}'>".$fly['name']."</a>";
    
    
    $count = $fly['CountStars'];
    for($i=0; $i<$count; $i++)
    {
         echo "<img id='star' src='/image/star-xxl.png'>";
    }   
    echo "<br>";
        echo "<h2>Для бронрования номера обратитесь по <a target='_blank' href ='".$fly['LINK']."'>ссылке</a></h2>";             
   
    
}
?>