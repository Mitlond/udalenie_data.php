<?php
session_start();

require "authig.php";
?>
<!Doctype html>
<html>
	<head>
		<title>Учебное Расписание</title>
		<meta charset="utf-8" />
		
		    <!--тут вставляем иконку сайта-->
			 <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
			 
			<!--подключение стилей-->
			 <link rel="stylesheet" type="text/css"  href="./css/styladmin.css" />
			 <link rel="stylesheet" type="text/css"  href="./cssmenu/stileadmenu.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/dobli.css" />
			 
			<!-- подключения скриптов-->
			 <script src="/js/main.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	 
	</head>
<body>
       <div id="admin">
         <div class ="glavn">
		   <div class ="reqd">
             <div class="paneli">
               <a href="admin.php?do=logout">Выход</a>
            </div>
			
  <div id="menu"> 
		         <ul>
				  <li><a class="button" href="/index.php">Главная</a></li>
				  <li><a class="button" href="raspisanie.php">Учебное расписание</a></li> 
				  <li><a class="button" href="novosti.php">Новости</a></li>
				</ul>	
		  </div>
		  <div class="fon">
		  
		<h3>Форма с сохранением данных в MySQL</h3>
     <form action="save_form.php" method="post" name="test_form">
         <table border="1" cellpadding="0" cellspacing="0">
			 <tr>
			  <td colspan="2" align="center"><strong>Отправка запроса</strong></td>
			 </tr>
			 
			 <tr>
			  <td width="150">Имя :</td>
			  <td><input type="text" name="first_name" maxlength="30" /></td>
			 </tr>
			 
			 <tr>
			  <td width="150">Фамилия :</td>
			  <td><input type="text" name="last_name" maxlength="30" /></td>
			 </tr>
			 
			 <tr>
			  <td width="150">Отчество :</td>
			  <td><input type="text" name="patronymic_name" maxlength="30" /></td>
			 </tr>
			 
			 <tr>
			  <td width="150">Email :</td>
			  <td><input type="email" name="email" maxlength="30" /></td>
			 </tr>
			 
			 <tr>
			  <td width="150">Логин :</td>
			  <td><input type="text" name="login" maxlength="30" /></td>
			 </tr>
			 
			 <tr>
			  <td width="150">Пароль :</td>
			  <td><input type="password" name="password" maxlength="30" /></td>
			 </tr>

			 <tr>
           <td colspan="2" align="center">
        <a><input type="submit" class="buttons" value="Отправить запрос" /></a>
     <a><input type="reset" class="buttons" value="Очистить" /></a>
  </td>
 </tr>
</table>
</form>
<!--------------------------------------------------------------------------------------------------------------------------------> 
<form action="view_data.php" method="post" name="view_result">
<table>
 <tr>
  <td align="center"><span><input type="submit" class="buttons" value="Посмотреть ранее сохраненные данные" /></span></td>
 </tr>
</table>
</form>
 <!--------------------------------------------------------------------------------------------------------------------------------> 
<form action="del_data.php" method="post" name="delete_data">
<table>
 <tr>
  <td align="center"><span><input type="submit" class="buttons" value="Удаление данных" /></span></td>
 </tr>
</table>
</form>
 <!--------------------------------------------------------------------------------------------------------------------------------> 
 
 

   <!--------------------------------------------------------------------------------------------------------------------------------> 
<form action="udalenie_data.php" method="post" name="delete_data">
<table>
 <tr>
  <td align="center"><span><input type="submit" class="buttons" value="удаление строк в таблице" /></span></td>
 </tr>
</table>
</form>
 <!--------------------------------------------------------------------------------------------------------------------------------> 
<form action="soxr_data.php" method="post" name="view_result">
<table>
 <tr>
  <td align="center"><span><input type="submit" class="buttons" value="сохраненные данные таблицы" /></span></td>
 </tr>
</table>
</form>
 <!--------------------------------------------------------------------------------------------------------------------------------> 
<form action="redactirovanie.php" method="post" name="redact_result">
<table>
 <tr>
  <td align="center"><span><input type="submit" class="buttons" value="Редактировать  данные таблицы" /></span></td>
 </tr>
</table>
</form>

     </div>
    </div>
  </div>
 </div>
</body>
</html>