@extends('layouts.app', ["current"=>"tarefas"])

@section('conteudo')
<div class="container tela">
    <div class="row" id="lista">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Privacidade</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Data de Conclusão</th>
                <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $tar)
                <tr>       
                    <td>{{$tar->id}}</td>
                    <td>{{$tar->titulo}}</td>
                    <td>{{$tar->privacidade}}</td>
                    <td>{{$tar->descricao}}</td>
                    <td>{{$tar->status}}</td>
                    <td>{{$tar->data}}</td>
                    <td>{{$tar->tipo_id}}</td>
                    <td>
                        <form action = "{{route('tarefas.destroy', $tar)}}" method = "POST">
                            @csrf
                            <a class = "btn btn-success" href="{{route('tarefas.edit', $tar)}}">Editar</a>
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger">Excluir</button>
                        </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection