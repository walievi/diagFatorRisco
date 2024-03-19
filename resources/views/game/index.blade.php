@extends('layouts.app')
@extends('general')

@section('content')

<div class="container">
    <!-- <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card-game">
                <img class="card-game card-img-top" src="{{ asset('images/1.png') }}" alt="árvore lúdica e colorida">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-game">
                <img class="card-game card-img-top" src="{{ asset('images/2.png') }}" alt="árvore lúdica e colorida">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-game">
                <img class="card-game card-img-top" src="{{ asset('images/3.png') }}" alt="árvore lúdica e colorida">
            </div>
        </div>
    </div> -->

    <!-- <div class="roulette-container">
        <div class="roulette">
            @foreach($options as $index => $option)
                @php
                    $angle = ($index * (360/count($options))) * (pi() / 180);
                    $x = 200 + 150 * cos($angle);
                    $y = 200 + 150 * sin($angle);
                @endphp
                <div class="option" style="left: {{$x}}px; top: {{$y}}px;">{{ $option }}</div>
            @endforeach
        </div>
    </div>
    <button id="spin-btn">Spin</button>
    
    <script>
        document.getElementById('spin-btn').addEventListener('click', function() {
            var degrees = Math.floor(Math.random() * 3600) + 360;
            var roulette = document.querySelector('.roulette');
            roulette.style.transform = 'rotate(' + degrees + 'deg)';
        });
    </script> -->

    <div class="roulette-container">
        <img class="img-arrow" src="{{ asset('images/arrow.png') }}" alt="Arrow"> <!-- Imagem da seta no centro -->
        <div class="roulette">
            <div class="option"><img class="img-opt" src="{{ asset('images/opt-1.png') }}" alt="opção 1"></div>
            <div class="option"><img class="img-opt" src="{{ asset('images/opt-2.png') }}" alt="opção 2"></div>
            <div class="option"><img class="img-opt" src="{{ asset('images/opt-3.png') }}" alt="opção 3"></div>
            <div class="option"><img class="img-opt" src="{{ asset('images/opt-4.png') }}" alt="opção 4"></div>
           
        </div>
    </div>

    <div class="centralizar">
        <button id="spin-btn" class="btn btn-custom">Girar roleta</button>
    </div>
    
    <script>
        document.getElementById('spin-btn').addEventListener('click', function() {
            var degrees = Math.floor(Math.random() * 3600) + 360;
            var roulette = document.querySelector('.roulette');
            roulette.style.transform = 'rotate(' + degrees + 'deg)';
        });
    </script>
    
    
</div>