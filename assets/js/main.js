//при скролла меню идет вместе с блоком
if(screen.width > 800) { // Animate navigation
    $(document).ready(function() {
    // функцию скролла привязать к окну браузера
        $(window).scroll(function(){
            var distanceTop = $('#slideMenu').offset().top;
            if ($(window).scrollTop() >= distanceTop)
                $ ('nav').attr ("id", "fixed");
            else //if ($(window).scrollTop() < distanceTop)
                $ ('nav').attr ("id", "nav");
        });
    });
}

