@extends('layouts.app', ["current"=>"usuario"])

@section('conteudo')
    <form action = "{{route('usuario.update', $user)}}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "container tela">
            <br/>
            <h4 align="center">Edição de usuarios</h4>
            <label for="name">Nome: </label>
            <input type = "text" class = "form-control" id="name" name="name" value="{{$users->name}}">
            <br>
            <button class="btn btn-lg btn-block text-uppercase font-weight-bold"  type="submit" id="button">Salvar</button>
        </div>
    </form>
@endsection