@extends('layouts.app', ["current"=>"tarefas"])

@section('conteudo')
    <form action = "{{route('tarefas.store')}}" method = "POST">
      @csrf
      <div class="container tela">
          <h4 align="center">Cadastro de Tarefas</h4>
        <div class="row">
            <div class="col">
                <label for="titulo">Titulo</label>
                <input  type = "text" class = "form-control" id="titulo" name="titulo" placeholder="Ex: Atividade de Matemática" value="" required>
                <br>
                <label for="descricao">Descrição</label>
                <input  type = "text" class = "form-control" id="descricao" name="descricao" placeholder="" value="" required>
                <br>
                <label for="status">Status</label>
                <input  type = "text" class = "form-control" id="status" name="status" placeholder="Ex: Concluida/Pendente" value="" required>
                <br>
                <label for="data">Data de Conclusão</label>
                <input  type = "date" class = "form-control" id="data" name="data" placeholder="Ex: 2019/12/31" value="" required>
                <br>
                <label for="usuario_id">Usuario</label>
                  <select class="custom-select d-block w-100" id="usuario_id" name="usuario_id">
                    @foreach($users as $use)    
                      <option value={{$use->id}}>{{$use->name}}</option>
                    @endforeach
                  </select>
                  <br/>
                  <label for="tipo_id">Tipo</label>
                  <select class="custom-select d-block w-100" id="tipo_id" name="tipo_id">
                    @foreach($tipos as $tip)    
                      <option value={{$tip->id}}>{{$tip->nome}}</option>
                    @endforeach
                  </select>
                <br/>
                <button class="btn btn-lg btn-block text-uppercase font-weight-bold"  type="submit" id="button">Cadastrar</button>
            </div>
        </div>
      </div>
    </form>
@endsection