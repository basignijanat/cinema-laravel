@extends('layouts.app')

@section('title', 'Search')

@section('content')
    <section class="centered">
        <h3>Genres</h3>
        @foreach($result as $res)
            <div class="mov">
                <a href="#">
                    <img src="/public/images/9.jpg">
                    <h2 class="movietitle">{{ $res->name }}</h2>
                </a>
            </div>
        @endforeach
    </section>
@endsection