<?php 
    //Подключение шапки
    require_once("header.php");
?>

<?php
    // Проверяем, если была нажата кнопка отправить то идем дальше.
    if(isset($_POST["send"])){
 
    /* Присваиваем переданные данные обычным переменным. Таким образом, мы застрахуемся от хостингов, которые не поддерживают глобальные переменные. */
    if(isset($_POST["name"])){ $name = $_POST["name"]; }
    if(isset($_POST["email"])){ $email = $_POST["email"]; }
    if(isset($_POST["subject"])){ $subject = $_POST["subject"]; }
    if(isset($_POST["message"])){ $message = $_POST["message"]; }
 
    /* Объявляем переменную, в которой содержится email администратора, которому отправим письмо. */
    $to = "diman.zhurin@mail.ru";
 
 
    /* Перед тем как отправить письмо, проверяем, если были заполнены все поля формы. Это делается для браузера Safari и Internet Explorer ниже 10-той версий, так как они не поддерживают атрибут required тега input */
    if($name == " ") echo "<strong>Ошибка:</strong> Вы не указали Ваше имя. <br />";
    if($email == " ") echo "<strong>Ошибка:</strong> Вы не указали Ваш E-mail. <br />";
    if($subject == " ") echo "<strong>Ошибка:</strong> Вы не указали тему сообшения. <br />";
    if($message == " ") echo "<strong>Ошибка:</strong> Вы нам написали пустое сообщение. <br />"; 
?>

<?php
    // Если все поля заполнены, то можем отправлять письмо .
    if($name != " " && $email != " " && $subject != " " && $message != " "){
 
        $header = "От: $name <$email>"; // Указываем имя и email отправителя.
 
        // Отправляем письмо
        $send = mail($to,$subject,$message,$header);
 
        if($send) echo "Письмо отправлена успешно!";
        else echo "Ошибка при отправке письма.";
    }
 
}// Закрываем блок if (isset($_POST["send"])) 
?>  

