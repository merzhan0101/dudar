@extends('layouts.app') <!--путь к файлу-->

@section('title')
Home
@endsection

@section('content')
<h1>Главная</h1>
<p> Олар баққа тіккенде мен тіктім баппенен еңбекке<br>
    Өмір қағидасы не өсесің, не өшесің<br>
    Ал кеме сырғып барады<br>
    Сол баяғы серіктесім –<br>


    Жалғыздық</p>
@endsection

@section('aside')
    @parent<!--взятие с aside-->
    <p>Lorem ipsum dolor dsfsit.</p>
    
@endsection