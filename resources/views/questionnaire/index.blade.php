@extends('general')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5" style="color: white">Olá, bem-vindo(a) ao Rainbow Minds</h1>
        <h3 class="text-center mt-5" style="color: white">Escolha um dos questionários abaixo para começar</h3>
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card card-custom-questionnaire">
                    <div class="card-body">
                        <h5 class="card-title">Questionário Harry Potter</h5>
                        <p class="card-text">Esse questionário é sobre o filme Harry Potter e a Câmara Secreta.</p>
                        <a href="{{ route('question', ['question' => 1]) }}" class="btn btn-custom">Iniciar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-custom-questionnaire">
                    <div class="card-body">
                        <h5 class="card-title">Questionário Harry Potter</h5>
                        <p class="card-text">Esse questionário é sobre o filme Harry Potter e a Câmara Secreta com roleta.</p>
                        <a href="{{ route('game') }}" class="btn btn-custom">Iniciar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection