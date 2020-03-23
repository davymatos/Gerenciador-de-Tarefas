@extends('layouts.app', ["current"=>"tipos"])

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
                        <form action = "{{route('tipos.destroy', $tip)}}" method = "POST">
                            @csrf
                            <a class = "btn btn-success" href="{{route('tipos.edit', $tip)}}">Editar</a>
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