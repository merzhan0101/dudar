<?php 
    require_once "blocks/head.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itProger - сайт для разработчиков</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="assets/css/aside.css" type="text/css" charset="utf-8">
    <meta name="description" content="Информационно-справочный сайт для программистов! Обучающие курсы, новости в IT и другие">
    <meta name="keywords" content="itProger, it, курсы, уроки">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/teg.ico" rel="shortcut icon" type="image/x-icon">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->
</head> 
<body>
    <div id="wrapper">
        <div class="content">
            <?php require_once "blocks/header.php" ?>

            <!-- Основная часть сайта -->
            <div id="main">
                <div id="news">
                    <h2 class="heading">Реклама</h2>
                    <div style="clear: both"><br></div> <!-- отступ, то есть будет пустая строка -->
                    
                    <div class="block">
                    В нашем сообществе программистов на данный момент представлено 86 курсов, большинство из которых являются бесплатными. Вы можете приступить к изучению как платных, так и бесплатных курсов прямо сейчас. Ниже представлено несколько случайных курсов на сайте.<br><br>
                    В нашем сообществе программистов на данный момент представлено 86 курсов, большинство из которых являются бесплатными. Вы можете приступить к изучению как платных, так и бесплатных курсов прямо сейчас. Ниже представлено несколько случайных курсов на сайте.<br><br>
                    <strong>Рекламные площадки:</strong>
                    <ul>
                        <li>Сертификаты</li>
                        <li>Справочники</li>
                        <li>Вакансии</li>
                        <li>Реклама</li>
                    </ul><br>
                    <noindex><a href="https://www.youtube.com/watch?v=LLbhOuzV-vo&list=PL0lO_mIqDDFVvK8d8B9k75DsANT6eMWFa&index=8" rel="nofollow" target="_blank">Youtube канал</a></noindex>:
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, maiores.</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, perspiciatis deleniti.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia cumque temporibus consequuntur deleniti?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ad reprehenderit voluptatibus temporibus quaerat.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem!</li>
                    </ul><br>
                    <noindex><a href="https://vk.com/prog_life" rel="nofollow" target="nofollow" target="_blank">Группа Вконтакте</a></noindex>: размещение рекламного поста<br><br>

                    </div>

                </div>
            </div> 
            <?php require_once "blocks/aside.php" ?>
            <div style="clear: both"><br></div>

           
        </div>
        
        <?php require_once "blocks/footer.php" ?>
    </div>

    <?php require_once "blocks/mainjs.php" ?>
</body>
</html>