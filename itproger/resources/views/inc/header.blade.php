<header class="d-flex flex-wrap justify-content-center py-3 mb-4 bg-dark text-white border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 text-white">MerJAN</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('home') }}" class="btn btn-warning" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link text-white">Про нас</a></li>
        <li class="nav-item"><a href="{{ route('news') }}" class="nav-link text-white">Новости</a></li>
        <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link text-white">Контакты</a></li>
        <a class="nav-link text-white" href="{{ route('review') }}">Отзывы</a>
    </ul>
</header>

