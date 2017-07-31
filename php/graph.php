 <?php

    $link = new mysqli("127.0.0.1", "root", "", "Airlains", 3306);
    $frm1 = $_POST['frm'];
    $frm4 = $_POST['to'];
    $DateTO = $_POST['DateTO'];
    $typiTikect = $_POST['typeTicket'];

    $queryCheck = "SELECT COUNT(id_orders) AS ord, id_ticket,nameBisnes,PriceBisnes,NofSeatsBinses,nameFist,PriceFist,NofSeatsFist,nameEco,PriceEco,
    NofSeatsEco FROM `orders`,`ticket` WHERE (orders.Nflight = ticket.id_ticket) AND (TypeTicket= '$typiTikect') AND(Data_ticket ='$DateTO')";
    $resultCheck=mysqli_query($link,$queryCheck) or die("Ошибка " . mysqli_error($link));
    $cheking = mysqli_fetch_assoc($resultCheck);

    if($cheking['nameBisnes']==$typiTikect)

    if($cheking['ord']>=$cheking['NofSeatsBinses'])

    die("К сожалению на эту дату билеты отсуствуют, выберете другую дату. <a href = '#'>Выбрать</a>");

    if($cheking['nameFist']==$typiTikect)

    if($cheking['ord']>=$cheking['NofSeatsFis'])

    die("К сожалению на эту дату билеты отсуствуют, выберете другую дату. <a href = '#'>Выбрать</a>");

    if($cheking['nameEco']==$typiTikect)

    if($cheking['ord']>=$cheking['NofSeatsEco'])

    die("К сожалению на эту дату билеты отсуствуют, выберете другую дату. <a href = '#'>Выбрать</a>"); 


    $queryFindTowerID="SELECT * FROM `flight` WHERE (city_1='$frm1') LIMIT 1"; 
    $resultFindTowerID=mysqli_query($link,$queryFindTowerID) or die("Ошибка " . mysqli_error($link)); 
      do { 

                    $a = $fly['NCity_1'];

                    }

               while($fly = mysqli_fetch_assoc($resultFindTowerID));
    $queryFindTowerIDTO="SELECT * FROM `flight` WHERE (city_2='$frm4') LIMIT 1"; 
    $resultFindTowerIDTO=mysqli_query($link,$queryFindTowerIDTO) or die("Ошибка " . mysqli_error($link)); 
      do { 

                    $b = $fly['NCity_2'];

                    }

               while($fly = mysqli_fetch_assoc($resultFindTowerIDTO));


    $_distArr = array(); 
    $query ="SELECT * FROM `flight` WHERE 1"; 
    $result=mysqli_query($link,$query) or die("Ошибка " . mysqli_error($link)); 
    while($myrow=mysqli_fetch_array($result)) 
    { 

    $_distArr[$myrow[NCity_1]][$myrow[NCity_2]]=$myrow[Distans]; 

    }

    //initialize the array for storing
    $S = array();//the nearest path with its parent and weight
    $Q = array();//the left nodes without the nearest path
    foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
    $Q[$a] = 0;

    //start calculating
    while(!empty($Q)){
        $min = array_search(min($Q), $Q);//the most min weight
        if($min == $b) break;
        foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
            $Q[$key] = $Q[$min] + $val;
            $S[$key] = array($min, $Q[$key]);
        }
        unset($Q[$min]);
    }

    //list the path
    $path = array();
    $pos = $b;
    while($pos != $a){
        $path[] = $pos;
        $pos = $S[$pos][0];
    }
    $path[] = $a;
    $path = array_reverse($path);

    $count = count($path); 
    for ($i=0; $i<$count-1; $i++) 
    {
            $j=0;
            $j = $i+1;

       $query1="SELECT * FROM `flightB`, ticket WHERE (NC_1='$path[$i]') AND (NC_2='$path[$j]') AND (forTicket = id_ticket) AND (status = 1)"; 
          $result1=mysqli_query($link,$query1) or die("Ошибка " . mysqli_error($link)); 
     while($fly = mysqli_fetch_assoc($result1)) {        if($typiTikect == $fly['nameBisnes'])
              {
                $price = $fly['PriceBisnes'];
              }
              if($typiTikect == $fly['nameFist'])
              {
                $price = $fly['PriceFist'];
              }
              if($typiTikect == $fly['nameEco'])
              {
                $price = $fly['PriceEco'];
              }

                      echo "
                      <a  href ='ticket.php?flightB={$fly['id']}&price={$price}&date={$DateTO}&typeTicket={$typiTikect}'>".$fly['C_1']."     ".$fly['C_2']."</a><p>".$fly['DepartureTime']."  ".$fly['ArrivalTime']."</p><p>". $price ."грн</p>";
                    };

           
   
   } 

?>