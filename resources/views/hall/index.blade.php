@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="hall">
        <div class="row">
            <div class="seat" id="s1">
                <input type="checkbox" id="c1" name="seat" value="1" onclick="toggleSeat(1)">
            </div>
            <div class="seat" id="s2">
                <input type="checkbox" id="c2" name="seat" value="2" onclick="toggleSeat(2)">
            </div>
            <div class="seat" id="s3">
                <input type="checkbox" id="c3" name="seat" value="3" onclick="toggleSeat(3)">
            </div>
            <div class="seat occupied" id="s4">
                <input type="checkbox" id="c4" name="seat" value="4" onclick="toggleSeat(4) disabled">
            </div>
            <div class="seat" id="s5">
                <input type="checkbox" id="c5" name="seat" value="5" onclick="toggleSeat(5)">
            </div>
            <div class="seat" id="s6">
                <input type="checkbox" id="c6" name="seat" value="6" onclick="toggleSeat(6)">
            </div>
        </div>
        <div class="row">
            <div class="seat">
                <input type="checkbox" name="seat" value="7">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="8">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="9">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="10">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="11">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="12">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="13">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="14">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="15">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="16">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="17">
            </div>
            <div class="seat">
                <input type="checkbox" name="seat" value="18">
            </div>
        </div>
    </div>
    <section class="centered">
        <h3>Halls</h3>
        @foreach($halls as $hall)
            <div class="">
                <a href="/hall/{{ $hall->id }}">
                    <h2 class="movietitle">{{ $hall->name }}</h2>
                </a>
                <div class="checkbox_array">
                    <table>
                        @foreach ($place->getPlaceByHallId($hall->id) as $seat)
                            {{ Form::checkbox('place['.$hall->id.']'.'['.$seat->id.']', 'value') }}

                            @endforeach
                    </table>
                </div>
            </div>
        @endforeach
        {{ $halls->links() }}
    </section>

@endsection