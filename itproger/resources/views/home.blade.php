@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')

    <main role="main">
        <div class="jumbotron bg-warning">
            <div class="container">
                <h1 class="display-3">Главная страница</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, molestiae.</p>
                <p><a href="#" class="btn btn-danger btn-lg" role="button">Отзывы >></a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nemo fuga mollitia quaerat? Earum at nobis animi totam nostrum quibusdam.</p>
                    <p><a href="#" class="btn btn-secondary" role="button">View details >></a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nemo fuga mollitia quaerat? Earum at nobis animi totam nostrum quibusdam.</p>
                    <p><a href="#" class="btn btn-secondary" role="button">View details >></a></p>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nemo fuga mollitia quaerat? Earum at nobis animi totam nostrum quibusdam.</p>
                    <p><a href="#" class="btn btn-secondary" role="button">View details >></a></p>
                </div>
            </div>
        </div>
    </main>
    
@endsection