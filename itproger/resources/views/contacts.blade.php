@extends('layout')

@section('title')Контакты@endsection

@section('main_content')

<div class="contacts">
    <h1>Наши контакты</h1>
    <li>Мы в инстаграм <a href='instagram.com'>insta</a></li>
    <li>Наша группа в вконтакте <a href="vk.com">vk</a></li>
    <li>Мы в телеграм <a href="telegram.com">telega</a></li>
    <li>Контактный телефон: +7 777 777 77 77</li><br>
    <a href="/review" class="btn btn-lg btn-danger" role="button" style="font-size: 16px">Позвонить нам</a>
</div>


@endsection