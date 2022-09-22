$('#send').click (function () {
var email = $('#email').val ();
var name = $('#name').val ();
var message = $('#message').val ();
$.ajax({
    url: '/ajax/feedback.php',
    type: 'POST',
    cache: false,
    data: {'name':name, 'email':email, 'message':message},
    dataType: 'html',
    beforeSend: function () {
        $('#send').attr ("disabled", "disabled"); //делаем кнопку не активной
    },
    success: function(data) {
        console.log(data);
        if (data == true) {
            $('#name').val ("");
            $('#email').val ("");
            $('#message').val ("");
            $('#send').text ("Сообщение отправлено");
            $('#email').css ("border-color", "#60fc8c");
            $('#name').css ("border-color", "#60fc8c");
            $('#message').css ("border-color", "#60fc8c");
        } else {
            if (data == false)				
                alert ("Что-то пошло не так! Сообщение не отправлено");
            else {					
                switch (data) {
                case "Имя не указано":
                $('#name').css ("border-color", "#f7b4b4");
                break;
                case "Сообщение не указано":
                $('#message').css ("border-color", "#f7b4b4");
                break;
                case "Неправильный e-mail":
                $('#email').css ("border-color", "#f7b4b4");
                break;
                default:
                $('#email').css ("border-color", "#f7b4b4");
                $('#message').css ("border-color", "#f7b4b4");
                $('#name').css ("border-color", "#f7b4b4");
                }
            }
        }
        $('#send').removeAttr ("disabled");				
    }
});
});
