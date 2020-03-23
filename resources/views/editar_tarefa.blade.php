@extends('layouts.app', ["current"=>"tarefas"])

@section('conteudo')
    <form action = "{{route('tarefas.update', $tarefa)}}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "container tela">
            <br/>
            <h4 align="center">Edição de tarefa</h4>
            <label for="titulo">Titulo: </label>
            <input type = "text" class = "form-control" id="titulo" name="titulo" value="{{$tarefa->titulo}}">
            <br>
            <label for="privacidade">Privacidade: </label>
            <input type = "text" class = "form-control" id="privacidade" name="privacidade" value="{{$tarefa->privacidade}}">
            <br>
            <label for="descricao">Descricao: </label>
            <input type = "text" class = "form-control" id="descricao" name="descricao" value="{{$tarefa->descricao}}">
            <br>
            <label for="status">Status: </label>
            <input type = "text" class = "form-control" id="status" name="status" value="{{$tarefa->status}}">
            <br>
            <label for="data">Data: </label>
            <input type = "text" class = "form-control" id="data" name="data" value="{{$tarefa->data}}">
            <br>
            <label for="tipo_id">Tipo: </label>
            <input type = "text" class = "form-control" id="tipo_id" name="tipo_id" value="{{$tarefa->tipo_id}}">
            <br>
            <label for="usuario_id">Usuario: </label>
            <input type = "text" class = "form-control" id="usuario_id" name="usuario_id" value="{{$tarefa->usuario_id}}">
            <br>
            <button class="btn btn-lg btn-block text-uppercase font-weight-bold"  type="submit" id="button">Salvar</button>

        </div>
    </form>
@endsection