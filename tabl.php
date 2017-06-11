<?php
    //Подключение шапки
    require_once("raspisanie.php");
	
	 //Добавляем файл подключения к БД
    require_once("dbconnectin.php");

//Принимаем постовые данные
$Groups=$_POST['Groups'];
$Items=$_POST['Items'];
$Aud=$_POST['Aud'];
$Teachers=$_POST['Teachers'];

//обращаемся к глобальной переменной SERVER
$ip=$_SERVER['REMOTE_ADDR'];
 
//формируем строку для записи
$str=$Groups.', '.$Items.', '.$Aud.', '.$Teachers.', '.$ip.'\r\n';
 
?>