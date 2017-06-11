<?php
//Принимаем постовые данные
$Groups=$_POST['Groups'];
$Items=$_POST['Items'];
$Aud=$_POST['Aud'];
$Teachers=$_POST['Teachers'];

//соединение с базой
$db  =  new  PDO('mysql:dbname=test; host=localhost',"root","");
 
//далее сам запрос
$sql="insert into `res_tab` (Groups,Items,Aud,Teachers) values (:Groups,:Items,:Aud,:Teachers)";
$sth=$db->prepare($sql);
$sth->bindValue(':Groups', $Groups);
$sth->bindValue(':Items', $Items);
$sth->bindValue(':Aud', $Aud);
$sth->bindValue(':Teachers', $Teachers);

$sth->execute();
//проверка массива(для проверки нужно раскомментировать ниже строки с кодом
//$error=$sth->errorInfo();
//print_r($error);
?>