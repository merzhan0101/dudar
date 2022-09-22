<aside> <!--Определяет блок сбоку от контента для размещения рубрик-->
    <div id="courses">
        <h2 class="heading">Видеокурсы</h2>
        <div style="clear: both"><br></div>
        <!-- Курсы -->
        <?php 
            for($i = 0; $i < 4; $i++)
                echo '
            <div class="course">
                    <img src="assets/img/coursera1.jpg" alt="Coursera" title="Coursera">
                    Начни IT карьеру вместе <em>Coursera</em>
                    <span>Множество курсов</span>
            </div>
            <div style="clear: both"><br></div>
                ';
        ?>
        <a href="" title="Посмотреть все курсы">
            <div class="btn">
                Посмотреть все курсы
            </div>
        </a>
    </div>
    <div id="one_course">
        <h2 class="heading">Как создать сайт за час?</h2>
        <div style="clear: both"><br></div>
        <img src="assets/img/coursera1.jpg" alt="Coursera" title="Coursera">
    </div>
</aside>


