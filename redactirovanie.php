<html>
<head>
<title>Редактирование данных</title>	
</head>
<body bgcolor="#FFFFFF">
<?php
// подключение к бд 
$db = mysql_connect("localhost", "root") or die ("Не могу создать соединение");
mysql_select_db("test" , $db);
 
// Если была нажата кнопка редактирования, вносим изменения
if(isset($_REQUEST['submit_edit'])) {
$queryup = "UPDATE `res_tab` SET `id`='".$_GET['id']."',`Groups`='".$_GET['Groups']."',`Items`='".$_GET['Items']."',`Aud`='".$_GET['Aud']."',`Teachers`='".$_GET['Teachers']."' WHERE `id`='".$_GET['id']."'";
mysql_query($queryup) or die (mysql_error());
}
// запрос
print_r($queryup); 
 
// вывод
$sql = "SELECT `id`, `Groups`, `Items`, `Aud`, `Teachers` FROM `res_tab`";
$result = mysql_query($sql);
 
printf("<center><table width='875' border='0'><tr>
    <td width=170> ID</td>
    <td width=155> Группы </td>
    <td width=160> Предметы </td>  
	 <td width=160> №Ауд. </td>
    <td> Учителя</td>
  </tr>
</table></center>");
 
 
while ($row = mysql_fetch_array($result)) {
printf("<form action=\"redactirovanie.php\" method=\"GET\" name=\"edit_form\" >
<input type=\"hidden\" name=\"id\" value=\"".$row['id']."\" />
<center><table border='1'>
  <tr>  
    <td> <input type=\"text\" value=\"".$row['id']."\" name=\"id\" /></td>
    <td> <input type=\"text\" value=\"".$row['Groups']."\" name=\"Groups\" /> </td>
    <td> <input type=\"text\" value=\"".$row['Items']."\" name=\"Items\" /> </td> 
	<td> <input type=\"text\" value=\"".$row['Aud']."\" name=\"Aud\" /> </td> 
    <td> <input type=\"text\" value=\"".$row['Teachers']."\" name=\"Teachers\" /></td>
    
    <td> <input type=\"submit\" name=\"submit_edit\" class=\"buttons\" value=\"Сохранить изменения\" /> </td>
  </tr>
</table></center>
</form>
");
}

/* Выводим ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"raspisanie.php\">Вернуться назад</a></div>");
?>
</body>
</html>