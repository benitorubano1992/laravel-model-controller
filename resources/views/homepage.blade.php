@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-5 gy-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nationality: {{ $movie->Nationality }}</li>
                                <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                                <li class="list-group-item">date:{{ $movie->date }}</li>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
