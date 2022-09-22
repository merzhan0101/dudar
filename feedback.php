<?php 
    require_once "blocks/head.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь / itProger</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="assets/css/aside.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="assets/css/form.css" type="text/css" charset="utf-8">
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
                    <h2 class="heading">Обратная связь</h2>
                    <div style="clear: both"><br></div> <!-- отступ, то есть будет пустая строка -->
                    
                    <div class="block">
                        Чтобы отправить нам сообщение, заполните форму и отправьте нам
                        <form>
                            <div>
                                <input type="name" id="name" placeholder="Ваше имя" onclick="$(this).css ('border-color', '#ccc')"><br>
                                <input type="email" id="email" placeholder="Ваша email" onclick="$(this).css ('border-color', '#ccc')"><br>
                            </div>
                            <div>
                                <textarea id="message" placeholder="Введите ваше сообщение" onclick="$(this).css ('border-color', '#ccc')"></textarea>
                            </div>
                            <input type="button" id="send" class="btn" value="Отправить">
                        </form>
                    </div>

                </div>
            </div> 
            <?php require_once "blocks/aside.php" ?>
            <div style="clear: both"><br></div>

        </div>
        
        <?php require_once "blocks/footer.php" ?>
    </div>

    <?php require_once "blocks/mainjs.php" ?>
<script src="assets/js/form.js"></script>
</body>
</html>