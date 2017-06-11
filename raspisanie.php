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
			 <link rel="stylesheet" type="text/css"  href="./css/stylraspisanie.css" />
			 <link rel="stylesheet" type="text/css"  href="./cssmenu/stilmen.css" />
			 
			<!-- подключения скриптов-->
			 <script src="./js/main.js"></script>
	       <!--<script src="./js/select.js"></script>-->
	</head>

	<body>
	  <div class ="glavn">
		<div class ="reqd">
          <div class ="reid">
		  
          <h2>Таблица</h2>
		  <form action="tabl.php" method="post"  enctype="multipart/form-data">
            <table id="dynamic" width="650" border="1" cellspacing="0" cellpadding="5">
		<tr>
		  <th scope="col">Группы</th>
		  <th scope="col">Предметы</th>
		  <th scope="col">№Ауд.</th>
		  <th scope="col">Учителя</th>
		  <th scope="col">№ п\п &nbsp;</th>
		</tr>
			<tr>	
			  <td>
			  <label>
			  <!--
			  <select name='options'>
				  <option value='option-1'>3 ВК</option>
				  <option value='option-2'>2 ПКМС</option>
				  <option value='option-3'>1 ЭРА</option>
				  <option value='option-4'>3 НК</option>
				  <option value='option-5'>МД-2</option>
				  <option value='option-6'>3 ПК</option>
				</select>  
				-->
				 <input type="text" name="Groups" required value="">
			  </label>
			  </td>
			  <td>
			  <label>
			  <!--
			  <select name='options'>
				  <option value='option-1'>Математика</option>
				  <option value='option-2'>Русский</option>
				  <option value='option-3'>Физика</option>
				  <option value='option-4'>Мдк 02.03</option>
				  <option value='option-5'>Физ-ра</option>
				  <option value='option-6'>Англ.яз</option>
				</select> 
-->				
				 <input type="text" name="Items" required value="">
			  </label>  
			  </td>
			  <td>
			  <label>
			  <!--
			  <select name='options'>
				  <option value='option-1'>15</option>
				  <option value='option-2'>23</option>
				  <option value='option-3'>9</option>
				  <option value='option-4'>11</option>
				  <option value='option-5'>18</option>
				  <option value='option-6'>7</option>
				</select>  
				-->
				 <input type="text" name="Aud"  required value="">
			  </label>   
			  </td>
			  <td>
			  <label>
			  <!--
			    <select name='options'>
					  <option value='option-1'>Филипова Т.А</option>
					  <option value='option-2'>Красова А.Н</option>
					  <option value='option-3'>Петров Н.И</option>
					  <option value='option-4'></option>
					  <option value='option-5'>18</option>
					  <option value='option-6'>7</option>
				</select>  
				-->
				 <input type="text" name="Teachers"  required value="">
			  </label>  
			  </td>
			  <td>&nbsp;</td>
			</tr>
  </table>
  <div class="q8">
  <input name="sub" type="submit" value="Сохранить">
  </div>
</form>

   
<div class="q9">
<form action="sortav_data.php" method="post" name="view_result">
<table>
 <tr>
  <td align="center"><span><input type="submit" class="buttons" value="сохраненые данные таблицы" /></span></td>
 </tr>
</table>
</form>
</div>

<div class="q10">
<form action="redactirovanie.php" method="post" name="redact_result">
<table>
 <tr>
  <td align="center"><span><input type="submit" class="buttons" value="Редактирование данных таблицы" /></span></td>
 </tr>
</table>
</form>
</div>
</div>
		<!--меню-->
		 <div id="menu"> 	
			<ul>
			  <li><a class="button" href="/index.php">Главная</a></li>
			  <li><a class="button" href="/raspisanie.php">Учебное расписание</a></li> 
			  <li><a class="button" href="admin.php">Личный кабинет</a></li>
			  <li><a class="button" href="/novosti.php">Новости</a></li>
			</ul>	
		  </div>
		 </div>
	    </div>
	   <script>
    if(typeof window.DynamicTable !== 'function') {
 
    function DynamicTable(GLOB, htmlTable, config) {    
        // Так как эта функция является конструктором,
        // подразумевается, что ключевое слово this - будет
        // указывать на экземнпляр созданного объекта. Т.е. 
        // вызывать её нужно с оператором "new".
        // Проверка ниже является страховкой: 
        // если эта функция была вызвана без оператора "new",
        // то здесь эта досадная ситуация исправляется:
        if ( !(this instanceof DynamicTable) ) {
            return new DynamicTable(GLOB, htmlTable, config);   
        }
        // Зависимость:
        var DOC       = GLOB.document,
            // Ссылка на массив строк таблицы:
            tableRows = htmlTable.rows,
            // Кол-во строк таблицы:
            RLength   = tableRows.length,
            // Кол-во ячеек в таблице:
            CLength   = tableRows[0].cells.length,
            // Контейнер для работы в циклах ниже:
            inElement = null,
            // Контейнер кнопки
            button    = null,
            // Контейнер текстового узла кнопки
            butText   = null,
            // В одном из методов ниже, потребуется
            // сохранить контекст:
            self      = this,
            // Счётчики итераций:
            i,j;    
                 
        // Метод "Вставить кнопки". 
        // Создаёт/добавляет две кнопки "удалить" и "добавить"
        // завёрнутые в элемент "P". Используются DOM - методы создания 
        // и добавления элементов.
        this.insertButtons = function() {
            // Создаём первую кнопку:
            inElement = DOC.createElement("P");
            inElement.className = "d-butts";
             
            button = DOC.createElement("BUTTON");                   
            button.onclick = this.delRow;
                                         
            butText = DOC.createTextNode("-");
            button.appendChild(butText);    
            // Добавляем её в DOM:      
            inElement.appendChild(button);
            // Создаём вторую кнопку:
            button = DOC.createElement("BUTTON");                   
            button.onclick = this.addRow;
                                         
            butText = DOC.createTextNode("+");
            button.appendChild(butText);
            // Добавляем её в DOM:      
            inElement.appendChild(button);
            // Обнуляем переменную, т.к. 
            // она используется и в других методах.
            return inElement;
        };
        // Метод "Добавить строку"
        this.addRow = function(ev) {
            // Кросс бр. получаем событие и цель (кнопку)
            var e         = ev||GLOB.event,
                target    = e.target||e.srcElement,
                // Получаем ссылку на строку, в которой была кнопка:
                row       = target.parentNode.parentNode.parentNode,
                // Получаем кол-во ячеек в строке:
                cellCount = row.cells.length,
                // Получаем индекс строки в которой была кнопка + 1,
                // что бы добавить строку сразу после той, в которой
                // была нажата кнопка:
                index     = row.rowIndex + 1,
                i;
            // Вставляем строку:
            htmlTable.insertRow(index);         
            // В этом цикле, вставляем ячейки.
            for(i=0; i < cellCount; i += 1) {    
                         
                htmlTable.rows[index].insertCell(i);                
                // Если ячейка последняя...
                if(i == cellCount-1) {
                    // Получаем в переменную кнопки, используя метод, описанный выше:
                    inElement = self.insertButtons();               
                } else {            
                    // Иначе получаем в переменную текстовое поле:      
                    inElement = DOC.createElement("INPUT");
                    // ... и задаём ему имя, типа name[] - которое
                    // впоследствии станет массивом.
                                     
                }                   
                // Добавляем в DOM, то что получили в переменную:
                htmlTable.rows[index].cells[i].appendChild(inElement);                      
            }
            // Обнуляем переменную, т.к. 
            // она используется и в других методах.
            inElement = null;
            // Во избежании ненужных действий, при нажатии на кнопку
            // возвращаем false:
            return false;
        };
         
        // Метод "Удалить строку"
        // Удаляем строку, на  кнопку, которой нажали:
        this.delRow = function(ev) {
            // Страховка: не даёт удалить строку, если она осталась
            // последней. Цифра 2 здесь потому, что мы считаем так же
            // строку с заголовками TH. Итого получается, что 1 строка
            // с заголовками и 1 строка - с содержимым.
            if(tableRows.length > 2) {
                htmlTable.deleteRow(this.parentNode.parentNode.parentNode.rowIndex);
            } else {
                return false;   
            }           
        };          
         
        // Фактически, ниже это инициализация таблицы:
        // Содержимое ячеек помещается внутрь текстовых
        // полей, а в последнюю ячейку кажой строки, помещаются
        // нопки "удалить" и "добавить" Функция является
        // "вызываемой немедленно"
        return (function() {
            // Мы имеем дело с двумерным массивом: 
            // table.rows[...].cells[...]
            // Поэетому здесь вложенный цикл.
            // Внешний цикл "шагает" по строкам...
            for( i = 1; i < RLength; i += 1 ) {  
                // Внутренний цикл "шагает" по ячейкам: 
                for( j = 0; j < CLength; j += 1 ) { 
                    // Если ячейка последняя...
                    if( j + 1 == CLength ) {
                        // Помещаем в переменную кнопки:
                        inElement = self.insertButtons();                                       
                    } else {                    
                        // Иначе создаем текстовый элемент,
						//в скобках  назывем продолжением переменной для строки ("text") 
                        inElement = DOC.createElement("text5");
                        // Помещаем в него данные ячейки,
                        inElement.value = tableRows[i].cells[j].firstChild.data;
                        // Присваиваем имя - массив,
                        inElement.name  = config[j+1]+"[]";
                        // Удаляем, уже не нужный экземпляр данных непосредственно
                        // из самой ячейки, потому что теперь данные у нас внутри
                        // текстового поля:
                        tableRows[i].cells[j].firstChild.data = "";
                    }   
                    // Вставляем в ячейку содержимое переменной - это
                    // либо текстовое поле, либо кнопки: 
                    tableRows[i].cells[j].appendChild(inElement);
                    // Обнуляем переменную, т.к. 
                    // она используется и в других методах.
                    inElement = null;
                }       
            }
       
        }());
     
    }// end function DynamicTable
}
</script>
<script>
new DynamicTable( window, 
                  document.getElementById("dynamic"),
                  {1:"text1", 2:"text2", 3:"text3", 4:"text4"} );
				  </script>
   </body>
</html>