@extends('layout.main')

@section('content')
<div class="container my-5">

    <h1 class="mb-5">Movies</h1>

    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-4">

            <div class="card mb-4 d-flex" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$movie->title}}</h4>
                    <h6 class="card-text">Original Title: {{$movie->original_title}}</h6>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</div>

@endsection
