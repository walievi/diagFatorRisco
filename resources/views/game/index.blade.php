@extends('layouts.app')
@extends('general')

@section('content')

<div class="container">
    <h1 class="text-center mt-5" style="color: white">Gire a roleta e descubra qual o tema da pergunta!</h1>

    <div class="roulette-container">
        <img class="img-arrow" src="{{ asset('images/arrow.png') }}" alt="Arrow">
        <div class="roulette">
            <div class="option"><img class="img-opt" src="{{ asset('images/op-1.png') }}" alt="opção 1"></div>
            <div class="option"><img class="img-opt" src="{{ asset('images/op-2.png') }}" alt="opção 2"></div>
            <div class="option"><img class="img-opt" src="{{ asset('images/op-3.png') }}" alt="opção 3"></div>
            <div class="option"><img class="img-opt" src="{{ asset('images/op-4.png') }}" alt="opção 4"></div>
           
        </div>
    </div>

    <audio id="roletaAudio" preload="auto">
        <source src="{{ asset('music/roleta.mp3') }}" type="audio/mpeg">
    </audio>

    <div class="centralizar">
        <button id="spin-btn" class="btn btn-custom">Girar roleta</button>
    </div>
</div>

<script>
    // document.getElementById('spin-btn').addEventListener('click', function() {
    //     tocarSomRoleta();

    //     var degrees = Math.floor(Math.random() * 3600) + 360;
    //     var roulette = document.querySelector('.roulette');
    //     roulette.style.transition = "transform 5s ease-out"; 
    //     roulette.style.transform = 'rotate(' + degrees + 'deg)';

    //     var duracaoGiro = 5000 + degrees / 10; 
    //     setTimeout(function() {
    //         pararSomRoleta();
    //     }, duracaoGiro);
    // });

    
    document.getElementById('spin-btn').addEventListener('click', function() {
        tocarSomRoleta();

        var degrees = Math.floor(Math.random() * 3600) + 360;
        var roulette = document.querySelector('.roulette');
        roulette.style.transition = "transform 5s ease-out"; 
        roulette.style.transform = 'rotate(' + degrees + 'deg)';

        // Adiciona um evento de transição para detectar quando a roleta parou de girar
        roulette.addEventListener('transitionend', function() {
            // Calcula o ângulo atual da roleta após a transição terminar
            var style = window.getComputedStyle(roulette);
            var transform = style.getPropertyValue('transform');
            var matrix = new WebKitCSSMatrix(transform);
            var rotation = Math.round(Math.atan2(matrix.b, matrix.a) * (180/Math.PI));

            // Mapeia o ângulo para determinar a opção selecionada
            var options = document.querySelectorAll('.option');
            var angleStep = 360 / options.length;
            var selectedOptionIndex = Math.floor((rotation % 360) / angleStep);
            var selectedOption = options[selectedOptionIndex];
            var selectedOptionAlt = selectedOption.querySelector('.img-opt').alt;
            console.log("Opção selecionada:", selectedOptionAlt);
        });

        var duracaoGiro = 5000 + degrees / 10; 
        setTimeout(function() {
            pararSomRoleta();
        }, duracaoGiro);
    });

    const roletaAudio = document.getElementById("roletaAudio");
    const roletaSelecao = document.getElementById("selecao");

    function tocarSomRoleta() {
        if (roletaAudio.paused) {
            roletaAudio.currentTime = 0;
            roletaAudio.play();
        }
    }


    function pararSomRoleta() {
        roletaAudio.pause();
        window.location.href = '/question/1';
    }
    

</script>