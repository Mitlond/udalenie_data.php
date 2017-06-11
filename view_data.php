<?php
 
/* Соединяемся с базой данных */
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя 
$password = ""; // пароль пользователя 
$dbName = "test"; // название базы данных
 
/* Таблица MySQL, в которой хранятся данные */
$table = "users";
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
 
/* Составляем запрос для извлечения данных из полей "first_name", "last_name", и т.д
таблицы "users" */
$query = "SELECT id, first_name,last_name,patronymic_name,email,login,password FROM $table";
 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());
 
/* Выводим данные из таблицы */
echo ("
<!Doctype html>
<html>
	<head>
	    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\" />
		<title>Учебное Расписание</title> 
		
		<style type=\"text/css\">
<!--
body, html {
background-color:#9F9F9F;
}-->
</style>

		<style type=\"text/css\">
<!--
body { font: 14px Georgia; color: #000000; }
h3 { font-size: 16px; text-align: center; }
table { width: 700px; border-collapse: collapse; margin: 0px auto; background: #E6E6E6; }
td { padding: 25px; text-align: center; vertical-align: middle; }
.buttons { width: auto; border: double 1px #666666; background: #D6D6D6; }
-->
</style>
		<style type=\"text/css\">
<!--
button {
    background: #FFA200; /* Цвет фона */
    padding: 7px 30px; /* Поля вокруг текста */
    font-size: 13px; /* Размер шрифта */ 
    font-weight: bold; /* Насыщенность шрифта */
    color: #000000; /* Цвет шрифта */
    text-align: center; /* Надпись на кнопке по центру */
    border: solid 1px #73C8F0; /* Параметры рамки кнопки */ 
    cursor: pointer; /* Изменение вида курсора при наведении*/
}-->
</style>
	</head>
<body>
 
<h3>Вывод ранее сохраненных данных из таблицы MySQL</h3>
 
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
 <tr style=\"border: solid 1px #000\">
  <td><b>#</b></td>
  <td align=\"center\"><b>Имена пользователей</b></td>
  <td align=\"center\"><b>Фамилия пользователей</b></td>
  <td align=\"center\"><b>Отчество пользователей</b></td>
  <td align=\"center\"><b>email пользователей</b></td>
  <td align=\"center\"><b>Логин</b></td>
  <td align=\"center\"><b>Пароль</b></td>
 </tr>
");
 
/* Цикл вывода данных из базы конкретных полей */
while ($row = mysql_fetch_array($res)) {
    echo "<tr>\n";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['first_name']."</td>\n";
	echo "<td>".$row['last_name']."</td>\n";
	echo "<td>".$row['patronymic_name']."</td>\n";
    echo "<td>".$row['email']."</td>\n";
	echo "<td>".$row['login']."</td>\n";
    echo "<td>".$row['password']."</td>\n</tr>\n";
}
 
echo ("</table>\n");
 
/* Закрываем соединение */
mysql_close();
 
/* Выводим ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;border:\"><a href=\"admin.php\"><button>Вернуться назад</button></a></div>");
 
?>