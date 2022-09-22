<?php 
    $to = "test@mail.ru";
    $email = $_POST['email'];

    $err = "";
    if(trim($_POST['name']) == "" && trim($_POST['email']) == "" && trim($_POST['message']) == "")
        $err = "Заполните все поля";
    else if(trim($_POST['name']) == "")
        $err = "Имя не указано";
    else if(trim($_POST['message']) == "")
        $err = "Сообщение не указано";
    else if(!((strpos($email, ".") > 0) && (strpos($email, "@") > 0)))
        $err = "Неправильный e-mail";

    if($err != ""){ //Есть какие либо ошибки
        echo $err;
        exit;
    }

    $msg = "Сообщение отправил(а) <b>".$_POST['name']."</b>.<br><b>Текс сообщения:<b><br>".$_POST['message']."<br><br>Вопрос с сайта: itproger.com";
    $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта Meyirimdi JAN")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    $success = mail($to, $subject, $msg, $headers);
    echo $success;
?>