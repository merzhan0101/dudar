<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
    @include('inc.header')

    @if(Request::is(/))
        @include('inc.hero')
    @endif

 
    <div class="container">
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('inc.aside')
            </div>
        </div>
    </div>
        <!-- @yield('main_content')<br></div> тело сайта
    @include('inc.footer') -->

    <!-- для того чтобы, отображался этот файл только на указанной стр
    @if(Request::is('/'))
        include('назв файла')
    @endif -->
</body>
</html>