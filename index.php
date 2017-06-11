<?php 
    //Подключение шапки
    require_once("header.php");
?>

<div id="content">

 <!--блок для формы обратной связи-->
			  <div class="fon">
         <div id="openModal" class="modalDialog">
	         <div>
			 <a href="#close" title="Закрыть" class="close">X</a>
			  <h1> Форма обратной связи </h1>
 <form action="<?=$_SERVER[ ' PHP_SELF ' ]?>" name="myForm" method="post" >
    <table>
         
        <tr>
            <td>Имя: </td>
            <td>
                <input type="text" name="name" required=" " value="<?=$_POST[ ' name ' ]?>"/>
            </td>
        </tr>
         
        <tr>
            <td>E-mail: </td>
            <td>
                <input type="text" name="email" required=" " value="<?=$_POST[ ' email ' ]?>"/>
            </td>
        </tr>
 
        <tr>
            <td>Тема: </td>
            <td>
                <input type="text" name="subject" required=" " value="<?=$_POST[ ' subject ' ]?>"/>
            </td>
        </tr>
 
        <tr>
            <td>Сообщение: </td>
            <td>
                <textarea cols="30" rows="5" name="message" required=" "> <?=$_POST[ ' message ' ]?> </textarea>
            </td>
        </tr>
 
        <tr>
            <td colspan="2" >
                <input type="submit" name="send" value="Отправить"/>
            </td>
        </tr>
 
    </table>
  </form>
  	 </div>
   </div>
  </div>
</div>

<?php 
    //Подключение подвала
    require_once("footer.php");
?>