@extends('layouts.app', ["current"=>"tipos"])

@section('conteudo')
    <form action = "{{route('tipos.update', $tipo)}}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "container tela">
            <br/>
            <h4 align="center">Edição de tipo</h4>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" value="{{$tipo->nome}}">
            <br>
            <button class="btn btn-lg btn-block text-uppercase font-weight-bold"  type="submit" id="button">Salvar</button>
        </div>
    </form>
@endsection