<!-- jQuery для того чтоб был эффект выпадания меню -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#menuShow').click (function() {
        if ($('#mobileMenu').is(':visible'))
            $('#mobileMenu').hide();
        else
            $('#mobileMenu').show();
    });

    // фиксация меню
    $(document).scroll(function() {
        if($(document).width() > 785){
            if($(document).scrollTop() > $('header').height() + 10)
                $('nav').addClass('fixed');
            else
                $('nav').removeClass('fixed');
        }
    });

    // при изменении ширины экрана, меню должна скрываться
    window.onresize = function(event){
        $('#mobileMenu').hide();
    }
</script>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
<script type="text/javascript">VK.Widgets.Group("vk_groups", {mode: 3, width: 500, color1: "FFFFFF", color2: "000000", color3: "5181B8"}, 166562603);</script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>