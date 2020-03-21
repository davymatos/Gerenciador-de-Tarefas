@extends('base.inicial')
@section('body')
    <div class="fundo">
        <h1 class="tex">Gerenciador de tarefas</h1>
        <div class="inicio">
            <h3 class="titulo">Bem vindo</h3>
            <h5 class="subtexto">Cadastre-se ou faça o login e aproveite</h5>
            <div class="botoes">
                <a class="btn btn-secondary btn-lg" href="{{route('register')}}">Cadastrar</a>
                <a class="btn btn-secondary btn-lg" href="/login" role="button">Login</a>
            </div>
        </div>
    </div>
@endsection