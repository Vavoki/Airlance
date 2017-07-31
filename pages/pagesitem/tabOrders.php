<html>

<head>
</head>

<body>
  <div id="poisk">
    <div id="tab">
      <ul class="nav nav-tabs">
        <li class="active active-tab">
          <a class="user-name" data-toggle="tab" href="#panel1"> <img id="icon" src="image/Airplane1.png">Авиабилеты </a>
        </li>

      </ul>
      <div class="tab-content">
        <!-- Авиабилеты -->
        <div id="panel1" class="tab-pane fade in active">
          <div id="inputs">

            <form action="timetable.php" method="post" id="inputs">

              <input type="text" name="frm" id="input1" class="input-one form-control" placeholder="Из города или аэропорта">
              <img src="image/Arrows.png" id="arrows">
              <input type="text" name="to" class="form-control" id="input1" placeholder="В город, страну или регион">
              <select name="typeTicket" class="form-control" id="input3">
                <option>Выберите тип билета</option>
                <option>Бизнес класс </option>
                <option>Экономный</option>
                <option>Первый класс</option>
              </select>
              <div class='input-group date picker' id='datetimepicker2'>
                <input id="input-date " name="DateTO" type='text' class="form-control" placeholder="Дата вылета">
                <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar">
                      </span>
                </span>
              </div>
              <input type="submit" name="submit" value="Найти" id='button1'>

            </form>
          </div>
        </div>


      </div>
    </div>
  </div>
</body>

</html>