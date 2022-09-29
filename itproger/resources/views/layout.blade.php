<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 bg-dark text-white border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 text-white">MerJAN</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="btn btn-warning" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="/about" class="nav-link text-white">Про нас</a></li>
            <li class="nav-item"><a href="/news" class="nav-link text-white">Новости</a></li>
            <li class="nav-item"><a href="/contacts" class="nav-link text-white">Контакты</a></li>
            <a class="nav-link text-white" href="/review">Отзывы</a>
        </ul>
        </header>
<div class="container">@yield('main_content')</div>


</body>
</html>