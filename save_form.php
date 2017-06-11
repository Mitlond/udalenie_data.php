<?php
 
/* Соединяемся с базой данных */
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = ""; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "test"; // название базы данных
 
/* Таблица MySQL, в которой будут храниться данные */
$table = "users";
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
 

 
/* Составляем запрос для вставки информации в таблицу
name...date - название конкретных полей в базе;
в $_POST["first_name"]... $_POST["last_name"] и т.д - в этих переменных содержатся данные, полученные из формы */
$query = "INSERT INTO $table SET first_name ='".$_POST['first_name']."',  last_name ='".$_POST['last_name']."',  patronymic_name ='".$_POST['patronymic_name']."',  
email='".$_POST['email']."',  login='".$_POST["login"]."',
password='".$_POST["password"]."', password1='".$_POST["password1"]."'";
 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($query) or die(mysql_error());
 
/* Закрываем соединение */
mysql_close();
 
/* В случае успешного сохранения выводим сообщение и ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\">
<font color=\"green\">Данные успешно сохранены!</font>
 
<a href=\"admin.php\">Вернуться назад</a></div>");
 
?>