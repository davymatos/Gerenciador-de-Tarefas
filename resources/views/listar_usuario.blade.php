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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection