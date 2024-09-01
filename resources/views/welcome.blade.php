@extends('layout')


@section('content')

    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            @foreach($imagesInView as $image)

                <div class="col-md-3 gallery-item">
                    <div>
                        <img src="{{$image}}" alt="" class="img-thumbnail">
                        <!-- Контекстуальные кнопка для информационных сообщений о сигналах тревоги -->
                        <a href="/show" class="btn btn-info my-button">Show</a>

                        <!-- Указывает, что следует проявлять осторожность с этим действием -->
                        <a href="/edit" class="btn btn-warning my-button">Edit</a>

                        <!-- Указывает на опасное или потенциально негативное действие -->
                        <a href="#" class="btn btn-danger my-button">Delete</a>
                    </div>
                </div>
            @endforeach



    </div>
@endsection

