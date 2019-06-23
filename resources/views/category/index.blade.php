@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <section class="centered">
        <h3>Genres</h3>
        @foreach($categories as $category)
            <div class="mov">
                <a href="/category/genre/{{ $category->id }}">
                    <img src="{{ $category->image }}">
                    <h2 class="movietitle">{{ $category->name }}</h2>
                </a>
            </div>
        @endforeach
            {{ $categories->links() }}
    </section>

@endsection