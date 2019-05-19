@extends('base.menu', ["current"=>"users"])

@section('conteudo')
<div class="container tela">
    <div class="row" id="lista">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $use)
                <tr>       
                    <td>{{$use->id}}</td>
                    <td>{{$use->name}}</td>
                    <td>{{$use->email}}</td>
                    <td>
                        <form action = "{{route('usuarios.destroy', $use)}}" method = "POST">
                            @csrf
                            <a class = "btn btn-success" href="{{route('usuarios.edit', $use)}}">Editar</a>
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