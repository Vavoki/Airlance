  <?
    if(isset($_GET['ListHotel']))
    {
        $id = $_GET['ListHotel'];
        $link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306);
        $query1="SELECT * FROM LlistHotel WHERE city_id = '$id'"; 
        $result1=mysqli_query($link,$query1) or die("Ошибка " . mysqli_error($link)); 
        while($fly = mysqli_fetch_assoc($result1)) {        
            echo "<img src='/image/hotels/".$fly['img']."'>";
            echo "<br>";
            echo "<a href ='currenthotel.php?CurrentHotel={$fly['id']}'>".$fly['name']."</a>";
            $count = $fly['CountStars'];
                 for($i=0; $i<$count; $i++)
                   {
                       echo "<img id='star' src='/image/star-xxl.png'>";
                   }
                        echo "<br>";
                        echo "<br>";

        }
    }
?>