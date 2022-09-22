<?php 
    require_once "blocks/head.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meyirimdi JAN - сайт для разработчиков</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="assets/css/main-page.css" type="text/css" charset="utf-8">
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
                    <h2 class="heading">IT новости</h2>
                    <div style="clear: both"><br></div> <!-- отступ, то есть будет пустая строка -->
                    <!-- Статьи -->
                    <?php 
                        for($i = 0; $i < 6; $i++)
                            echo '
                        <div class="article">
                                <img src="assets/img/astanahub.jpg" alt="IT school" title="Astana hub">
                                <span>Друзья, у нас отличные новости! IT школа вошла в Astana Hub!</span>
                        </div>
                            ';
                    ?>
                </div>
            </div>
            
            <?php require_once "blocks/aside.php" ?>
            <div style="clear: both"><br></div>

        
        
        <a href="" title="Посмотреть больше статей">
            <div class="btn">
                Посмотреть больше
            </div>
        </a>
        <div id="subscribe">
            <span>Подпишитесь чтобы быть в курсе новостей</span>
            <div style="clear: both"><br></div>

            <!-- VK widget -->
            
            <div id="vk_groups"></div>
            
            <div style="clear: both"><br></div>

            <div class="fc_tw">
                <!-- widget facebook -->
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                <!-- widget twitter -->
                <a class="twitter-timeline" data-width="350" data-height="400" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>

        <div id="sub_to_project">
            <span class="heading">Подписаться на проект</span>
            <div style="clear: both"><br></div>
            <p>Чтобы получить доступ ко всем функциям сайта оформите подписку на проект</p>
            <a href="" title="Посмотреть информацию о подписке на проект">
                <div class="btn">
                    Узнать детальнее о подписке
                </div>
            </a>
            <div style="clear: both"><br></div>
            <h2 class="heading">Создание интернет магазина</h2>
            <div style="clear: both"><br></div>
            <img src="assets/img/coursera1.jpg" alt="Coursera" title="Coursera">
        </div>
        <div style="clear: both"><br></div>
        <div id="web_sites">
            <span>Хотите создать сайт?</span>
            <a href="" title="Посмотреть информацию о подписке на проект">
                <div class="btn">
                    Заказать сайт 
                </div>
            </a> 
        </div>
        </div>
        <?php require_once "blocks/footer.php" ?>       
    </div>
</div> 

<?php require_once "blocks/mainjs.php" ?>
</body>
</html>