<?php
 
/* Соединяемся с базой данных */
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя 
$password = ""; // пароль пользователя 
$dbName = "test"; // название базы данных
 
/* Таблица MySQL, в которой хранятся данные */
$table = "res_tab";
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
 
/* Если была нажата ссылка удаления, удаляем запись */
if (isset($_GET['del'])) {
   $del = intval($_GET['del']);
   $query = "delete from $table where (id='$del')";
   /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
   mysql_query($query) or die(mysql_error());
}
/* Заносим в переменную $res всю базу данных */
$query = "SELECT * FROM $table";
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());
/* Узнаем количество записей в базе данных */
$row = mysql_num_rows($res);
 
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
table { width: 1050px; border-collapse: collapse; margin: 0px auto; background: #E6E6E6; }
td { padding: 40px; text-align: center; vertical-align: middle; }
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
  <td align=\"center\"><b>Группы</b></td>
  <td align=\"center\"><b>Предметы</b></td>
  <td align=\"center\"><b>№Ауд</b></td>
  <td align=\"center\"><b>Учителя</b></td>
  <td align=\"center\"><b>Удалить</b></td>
 </tr>
");
 
/* Цикл вывода данных из базы конкретных полей */
while ($row = mysql_fetch_array($res)) {
    echo "<tr>\n";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['Groups']."</td>\n";
	echo "<td>".$row['Items']."</td>\n";
	echo "<td>".$row['Aud']."</td>\n";
    echo "<td>".$row['Teachers']."</td>\n";
    /* Генерируем ссылку для удаления поля */
    echo "<td><a name=\"del\" href=\"udalenie_data.php?del=".$row["id"]."\"><button>Удалить</button></a></td>\n";
    echo "</tr>\n";
}
 
echo ("</table>\n");
 
/* Закрываем соединение */
mysql_close();
 
/* Выводим ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"admin.php\"><button>Вернуться назад</button></a></div>");
 
?>