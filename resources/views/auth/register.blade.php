@extends('layouts.app')
@extends('general')

@section('content')

<div class="container">
    <div class="row">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card card-custom">
                    <div class="card-body card-body-home card-text text-center " style="margin: 0 auto">
                        <img class="logo" src="{{ asset('images/logo.png') }}" alt="árvore lúdica e colorida">
                        <div class="card-text text-center fs-2 mt-4">{{ __('Cadastre-se') }}</div>

                        <!-- <div class="mt-5">
                            <input type="name" class="form-control" id="name" placeholder="Nome">
                        </div>
                        <div class="mt-3">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3 mt-3">
                            <input type="password" class="form-control" id="password" placeholder="Senha">
                        </div>
                        <a  href="{{ route('game') }}" class="btn btn-custom mt-3">Acessar</a> -->

                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-2">
                            <input placeholder="Nome" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group mb-2">
                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group mb-2">
                            <input placeholder="Senha" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group mb-4">
                            <input placeholder="Confirmação de senha" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mb-2">
                            <center>
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Registrar') }}
                                </button>
                            </center>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>