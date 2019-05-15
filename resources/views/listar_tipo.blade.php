@extends('base.menu', ["current"=>"tipos"])

@section('conteudo')
<div class="container tela">
    <div class="row" id="lista">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipos as $tip)
                <tr>       
                    <td>{{$tip->id}}</td>
                    <td>{{$tip->nome}}</td>
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