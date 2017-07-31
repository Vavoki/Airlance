 <?
    $link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306);      
    $query1="SELECT * FROM ListCityHotel"; 
    $result1=mysqli_query($link,$query1) or die("Ошибка " . mysqli_error($link)); 
        while($fly = mysqli_fetch_assoc($result1)) {        
            echo "<div id='hotel'><a href ='listHotel.php?ListHotel={$fly['idC']}'><img src='image/".$fly['img']."'><h4>".$fly['nameC']."</h4></a></div>";
        }
?>
