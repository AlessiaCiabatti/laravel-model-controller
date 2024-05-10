@extends('layout.main')

@section('content')
<div class="container my-5">

    <h1 class="mb-5">{{$title}}</h1>

    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-4">

            <div class="card mb-4 d-flex" style="width: 20rem;">
                <img src="{{$movie->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$movie->title}}</h4>
                    <h6 class="card-text">Original Title: {{$movie->original_title}}</h6>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">Voto: {{$movie->vote}}/10</p>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</div>

@endsection
