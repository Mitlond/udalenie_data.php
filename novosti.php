<?php 
    //Запускаем сессию
    session_start();
?>

<!Doctype html>
<html>
	<head>
		<title>Учебное Расписание</title>
		<meta charset="utf-8" />
		
		    <!--тут вставляем иконку сайта-->
			 <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
			 
			<!--подключение стилей-->
			 <link rel="stylesheet" type="text/css"  href="./css/try.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/stylnovosti.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/forma.css" />
			 <link rel="stylesheet" type="text/css"  href="./cssmenu/stilnovo.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/dobli.css" />
			 <link rel="stylesheet" type="text/css"  href="./css/karusel.css" />
			 
			 
			<!-- подключения скриптов-->
			 <script src="./js/main.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				 <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
				 <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
				 <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
			 <script src="./js/jquery.js" type="text/javascript"></script>
		     <script src="./js/mobilyslider.js" type="text/javascript"></script>
			 <script src="./js/init.js" type="text/javascript"></script>
			 
			
			 <!-- 3. Подключаем библиотеку Google Maps Api, чтобы создать карту -->
    <!-- Атрибуты async и defer - позволяют загружать этот скрипт асинхронно, вместе с загрузкой всей страницы  -->
    <!-- В подключении библиотеки Google Maps Api в конце указан параметр callback, после  подключения и загрузки этого Api сработает функция initMap для отрисовки карты,  которую мы описали выше -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
	</head>
	<script type="text/javascript">
	$('.slider3').mobilyslider({
			transition: 'fade',
			animationSpeed: 800,
			bullets: true,
			arrowsHide: false
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
 <?php
    }else{
        //Если пользователь авторизован, то выводим ссылку Выход
?> 
			   <div id="link_logout">
				  <a href="/logout.php">Выход</a>
			   </div>
<?php
    }
?>
</div>
		<!--меню-->
		 <div id="menu"> 	
				<ul>
				  <li><a class="button" href="/index.php">Главная</a></li>
				  <li><a class="button" href="novosti.php">Новости</a></li>
				  <li><a class="button" href="admin.php">Личный кабинет</a></li>
				</ul>	
		  </div>
		 </div>	
		 <div class ="info">
	 <h2>Обзор основных вопросов автоматизированного <br> 
	 составления расписания занятий в высшем учебном заведении.</h2>
	      
<div class="slider slider1">
    <div class="sliderContent">
        <div class="item">
			<img src="./img/11.jpg" alt="" />
					</div>
					<div class="item">
			<img src="./img/5.jpg" alt="" />
					</div>
					<div class="item">
			<img src="./img/6.jpg" alt="" />
					</div>
					<div class="item">
			<img src="./img/8.jpg" alt="" />
					</div>
					<div class="item">
			<img src="./img/9.jpg" alt="" />
					</div>
					<div class="item">
			<img src="./img/10.jpg" alt="" />
        </div>
    </div>
</div>
     <div class="novosti">
		<p> Задача составления расписаний являются предметом научных исследований с середины прошлого века. 
		Область их применения включает в себя различные сферы человеческой деятельности, такие как: транспортные перевозки, массовое обслуживание, промышленность, образование и т. д. 
		Практика выдвигает множество задач, которые невозможно эффективно решить путем полного перебора.   </p>
		<p>Для большинства моделей теории расписаний нахождение оптимального расписания является трудноразрешимой задачей, 
		а решение приближенных к реальным условиям задач обладает ещё большей сложностью,
		так как данные решения должны удовлетворять многочисленным, 
		зачастую конфликтующим между собой ограничениям производственного, 
		организационного и психофизиологического характера. </p>
		<p>Выходом из данного положения является отказ от подхода,
		когда пригодным считается только самое лучшее решение. 
		Рассмотрим задачу подобного класса, возникающую в конкретной области управленческой деятельности, 
		— составление расписаний учебных занятий в техникуме.</p>
		 </div>
	  </div>
   </div>
   <!--вторая часть блока-->
         <div class="storm">
           <div class="kill">
		      <div class="trip">
			  <h3>Сравнительный анализ подходов к автоматизации<br>
			  составления расписаний учебных занятий<br> 
			  в образовательных учреждениях</h3>
			    <div class="q1">
			<div class="blur pic">
		  <img src="./img/13.jpeg" alt="plane">
		</div>
      </div>
	  
	       <div class="q2">
			 <div class="grow pic">
			  <img src="./img/14.jpg" alt="portrait">
			</div>
		   </div>  
		   
			  <div class="q3">
			   <div class="tilt pic">
                <img src="./img/15.jpg" alt="car" style="width:250px; height:250px;">
                 </div>
		          </div>	
					 
					    <div class="q4"> 
						  <div class="shrink pic">
                            <img src="./img/16.jpg" alt="city">
					          </div>
						        </div>	
								   <div class="q5"> 
									 <span><p>В общей постановке задача составления расписания представляет собой
									 процесс распределения некоторого конечного набора событий во времени
									 в условиях ресурсных и других ограничений.
									 В качестве исходных данных для составления расписания выступают перечень специальностей, 
									 списки групп студентов, дисциплин, а также учебная нагрузка на группы. 
									 Имеющийся ресурс выражен в качестве списка профессорско-преподавательского состава, 
									 которые могут читать некоторые предметы в заданных группах, списка аудиторий, количества учебных дней в неделю, 
									 максимального количества занятий в день.</p></span>	
									<span><p>Необходимо составить оптимальное расписание занятий для каждой группы по дням недели,
									распределить учебные аудитории в каждый из дней недели, распределить нагрузку на преподавателей по дням с учетом их пожеланий. 
									То есть наиболее удобным образом распределить имеющиеся ресурсы в соответствии с запросами и выделить время для занятий каждой группы.
                                    Существование удачно составленных расписаний говорит о том, что задача составления оптимального расписания разрешима, 
									или хотя бы о том, что для нее существуют допустимые решения.  </p></span>  
		 </div>							
	   </div>   
	 </div>	   
   </div>
              <div class="ritm">
	            <div class="karta">
			    <h2>Карта</h2>
		<!-- 1. Создаем элемент внутри которого у нас будет отображаться карта Google Maps -->
            <div id="map"></div>
	   </div>		  	
	</div>
</div>
