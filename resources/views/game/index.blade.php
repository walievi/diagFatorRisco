@extends('layouts.app')
@extends('general')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
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
    </div>
</div>
