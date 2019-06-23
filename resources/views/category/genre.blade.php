@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <section class="centered">
        <h3>Action</h3>
        <div class="movies">
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/9.jpg">
                    <h2 class="movietitle">The Space Between Us</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/7.jpg">
                    <h2 class="movietitle">Transformers</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/8.jpg">
                    <h2 class="movietitle">XXX</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/6.jpg">
                    <h2 class="movietitle">Fifty Shades Darker</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/9.jpg">
                    <h2 class="movietitle">The Space Between Us</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/9.jpg">
                    <h2 class="movietitle">The Space Between Us</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/7.jpg">
                    <h2 class="movietitle">Transformers</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/8.jpg">
                    <h2 class="movietitle">XXX</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/6.jpg">
                    <h2 class="movietitle">Fifty Shades Darker</h2>
                </a>
            </div>
            <div class="mov">
                <a href="single.html">
                    <img src="/public/images/9.jpg">
                    <h2 class="movietitle">The Space Between Us</h2>
                </a>
            </div>
        </div>
        <nav class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="menuactive">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#">21</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </nav>
    </section>

@endsection