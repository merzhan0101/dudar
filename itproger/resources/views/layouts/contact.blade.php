@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('main_content')

<h1>Страница контактов</h1>

<form action="/contact/submit" method="post">
    @csrf <!--token-->
    <div class="form-group">
        <label for="name">Введите имя:</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">Тема сообщения:</label>
        <input type="text" name="subject" placeholder="Введите имя" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Сообщения:</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Введите сообщение..."></textarea>
    </div>
    <button class="btn btn-success" type="submit">Отправить</button>
</form>


@endsection