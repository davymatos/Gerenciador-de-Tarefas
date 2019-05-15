@extends('base.menu', ["current"=>"tipos"])
@section('conteudo')
<form action = "{{route('tipos.store')}}" method = "POST">
    @csrf
    <div class="container tela">
        <h4 align="center">Cadastro de Tipos</h4>
        <div class="row">
            <div class="col">
                <label for="nome">Nome</label>
                <input  type = "text" class = "form-control" id="nome" name="nome" placeholder="Ex: Compras" value="" required>
                <br>
                <button class="btn btn-lg btn-block text-uppercase font-weight-bold"  type="submit" id="button">Cadastrar</button>
            </div>
        </div>
    </div>
</form>
@endsection