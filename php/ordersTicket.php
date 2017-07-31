<?
if( isset($_GET['flightB']) ) {
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