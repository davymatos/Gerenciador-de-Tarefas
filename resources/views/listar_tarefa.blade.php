@extends('base.menu', ["current"=>"tarefas"])

@section('conteudo')
<div class="container tela">
    <div class="row" id="centro-sala">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Privacidade</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Data de Conclusão</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $tar)
                <tr>       
                    <td>{{$tar->id}}</td>
                    <td>{{$tar->titulo}}</td>
                    <td>{{$tar->privacidade}}</td>
                    <td>{{$tar->descricao}}</td>
                    <td>{{$tar->data}}</td>
                    <td>
                        <form>
                        <a class = "btn btn-success">Editar</a>
                        <a class = "btn btn-danger">Excluir</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection