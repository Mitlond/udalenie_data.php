<?php 
    //Запускаем сессию
    session_start();
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
			 <link rel="stylesheet" type="text/css"  href="./css/try.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/style.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/forma.css" />
			 <link rel="stylesheet" type="text/css"  href="./cssmenu/stilmenu.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/dobli.css" />
			 
			<!-- подключения скриптов-->
			 <script src="/js/main.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			 <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
			 
	</head>
	 <script type="text/javascript">
        $(document).ready(function(){
            "use strict";
            //================ Проверка email ==================

            //регулярное выражение для проверки email
            var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
            var mail = $('input[name=email]');
            
            mail.blur(function(){
                if(mail.val() != ''){

                    // Проверяем, если введенный email соответствует регулярному выражению
                    if(mail.val().search(pattern) == 0){
                        // Убираем сообщение об ошибке
                        $('#valid_email_message').text('');

                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    }else{
                        //Выводим сообщение об ошибке
                        $('#valid_email_message').text('Не правильный Email');

                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);
                    }
                }else{
                    $('#valid_email_message').text('Введите Ваш email');
                }
            });

            //================ Проверка длины пароля ==================
            var password = $('input[name=password]');
            
            password.blur(function(){
                if(password.val() != ''){

                    //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                    if(password.val().length < 6){
                        //Выводим сообщение об ошибке
                        $('#valid_password_message').text('Минимальная длина пароля 6 символов');

                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);
                        
                    }else{
                        // Убираем сообщение об ошибке
                        $('#valid_password_message').text('');

                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    }
                }else{
                    $('#valid_password_message').text('Введите пароль');
                }
            });
			
			var password1 = $('input[name=password1]');
            password1.blur(function(){
                if(password1.val() != ''){

                    //Если длина введенного пароля меньше шести символов, то выводим сообщение об ошибке
                    if(password1.val().length < 6){
                        //Выводим сообщение об ошибке
                        $('#valid_password1_message').text('Минимальная длина пароля 6 символов');

                        // Дезактивируем кнопку отправки
                        $('input[type=submit]').attr('disabled', true);
                        
                    }else{
                        // Убираем сообщение об ошибке
                        $('#valid_password_message').text('');

                        //Активируем кнопку отправки
                        $('input[type=submit]').attr('disabled', false);
                    }
                }else{
                    $('#valid_password_message').text('Введите пароль');
                }
            });
			
        });
    </script>
	<body>
	
	  <div id ="header">
	  <div class ="glavn">
		<div class ="reqd">
		
			      <div id="auth_block">
 <?php
    //Проверяем авторизован ли пользователь
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
?>
                <div id="link_register">
                  <a href="/form_register.php">Регистрация</a>
                </div>
 
                <div id="link_auth">
                    <a href="/form_auth.php">Авторизация</a>
                </div>
 <?php
    }else{
        //Если пользователь авторизован, то выводим ссылку Выход
?> 
			   <div id="link_logout">
				  <a href="/logout.php">Выход</a>
			   </div>
			
			   <div id="men"> 	
				<ul>
			    <a class="button" href="raspisanie.php">Учебное расписание</a>
				<br>
				 <a class="button" href="#openModal">Тех.поддержка</a>
	</ul>	
		  </div>
<?php
    }
?>
            </div>
             <div class="clear"></div>
			
		<!--меню-->
		 <div id="menu"> 	
				<ul>
				  <li><a class="button" href="/index.php">Главная</a></li>
				  <li><a class="button" href="novosti.php">Новости</a></li>
				  <li><a class="button" href="admin.php">Личный кабинет</a></li>
				</ul>	
		  </div>
		 </div>	
		 <div class="rid"></div>
		 <div class ="info">
	 <div class="ret">Расписания учебных занятий </div>
		 <p>Задача планирования расписания учебных занятий — это задача на составление расписания комбинаторного типа, характерной особенностью которой является огромная размерность и наличие большого числа ограничений сложной формы. 
		  Фактически, в настоящее время, не существует универсальных методов решения таких задач. 
		  Прямое применение математической (классической) теории расписания к задаче составления учебных занятий не представляется возможным.  
		  Тем не менее, есть ряд эвристических и переборных методов, которые вполне поддаются программированию.</P>
             
			<p>Есть мнение, что опытный диспетчер сможет составить расписание так, что оно будет отвечать интересам учебного процесса и общественной жизни образовательного учреждения. 
			Однако с этим нельзя согласиться. Ручное решение задачи составления расписания занятий требует больших затрат времени, квалифицированных специалистов, в то же время результат такого решения часто получается далеко не оптимальным. 
			После ввода исходной информации требуется её согласование, в то время как невозможность получения требуемого расписания может быть определена ещё на этапе анализа. Во время составления расписания возможно возникновение тупиковых ситуаций.</p>
			 
				 <p>Всё это требует изменения исходных данных и ослабления ограничений, и здесь без человека не обойтись. Без внесения данных изменений расписание не будет иметь практической ценности. Также следует учесть тот момент, что расписание может меняться и во время его использования, т.е. после составления, и здесь весьма важен человеческий фактор. 
				 В этом плане важна поддержка данного процесса автоматизированными методами и процедурами. 
				 Основное преимущество состоит в том, что автоматизированное составление устраняет массу рутинной работы, такой как: поиск возможных вариантов внесения очередных элементов в расписание, проверку выполнения требований, поиск случайных ошибок в готовом расписании, оформление расписания на бумаге в виде различных таблиц (для преподавателей, групп, покабинетного), оставляя человеку больше времени на более интеллектуальные действия.
				 Компьютер в данном случае также является инструментом, существенно усиливающим способности человека, т.к. человек не в состоянии перебрать и проанализировать такое же количество вариантов расписаний, как компьютер.</p>
	   </div>
  </div>
</div>
