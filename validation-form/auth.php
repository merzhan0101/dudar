<?php 
        $login =  filter_var(trim($_POST['login'], FILTER_SANITIZE_STRING));
        $pass = filter_var(trim($_POST['pass'], FILTER_SANITIZE_STRING));

        $pass = md5($pass."sajdhjsdf4578");//хеширования пароля, (пароль+"sajdh....")

        //подключение к бд
        $mysql = new mysqli('localhost', 'root', '', 'regauth');
        //получение данных из бд
        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
        $user = $result->fetch_assoc();//выбрать все данные в виде массива
        if(count($user) == 0){
            echo "Такой пользователь не найден";
            exit();
        }


        setcookie('user', $user['name'], time() + 3600, "/");

        //auth
        //print_r($user);//выводит в виде массива
        //exit();

        $mysql->close();

        header('Location: /');//переадресация на гл стр
?>