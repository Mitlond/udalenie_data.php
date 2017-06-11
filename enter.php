<?php
session_start();
   
if($_SESSION['admin']){
	header("Location: admin.php");
	exit;
}


$admin = 'admin';
$pass = '1234';

if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == ($_POST['pass'])){
		$_SESSION['admin'] = $admin;
		header("Location: admin.php");
		exit;
	}else echo '<div class="vis"><span><p>Логин или пароль неверны!</p></span></div>';
}
?>
<!Doctype html>
<html>
	<head>
		<title>Учебное Расписание</title>
		<meta charset="utf-8" />
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
		
		    <!--тут вставляем иконку сайта-->
			 <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
			 
			<!--подключение стилей-->
			 <link rel="stylesheet" type="text/css"  href="./css/styls.css" />
			 <link rel="stylesheet" type="text/css"  href="./cssmenu/stilent.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/formenter.css" />
			 
			<!-- подключения скриптов-->
			 <script src="/js/main.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			 <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
			 
	</head>
	<body>
<div id="enter">

 <div id="win">
     <div class="overlay"></div>
       <div class="visible">
	   
	      <h2>Панель управления</h2>
<div class="content">
<form method="post">
	Логин:  <input type="text" name="user" /><br />
    Пароль: <input type="password" name="pass" /><br />
	<a><input type="submit" name="submit" value="Войти" /></a>
</form>
 </div>
        <button type="button" onClick="getElementById('win').style.display='none';">X</button>
    </div>
</div>
 <div id="menu"> 
		         <ul>
				  <li><a class="button" href="/index.php">Главная</a></li>
				  <li><a class="button" href="novosti.php">Новости</a></li>
				  <li><a class="button" href="admin.php">Личный кабинет</a></li>
				</ul>	
		  </div>
		  </div>
</body>
</html>