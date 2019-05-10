@extends('base.menu', ["current"=>"tarefas"])

@section('conteudo')
    <form action = "{{route('tarefas.store')}}" method = "POST">
      @csrf
      <div class="container">
          <h4>Cadastro de Tarefas</h4>
        <div class="row">
            <div class="col">
                <label for="titulo">Titulo</label>
                <input  type = "text" class = "form-control" id="titulo" name="titulo" placeholder="Ex: Atividade de Matemática" value="" required>
                <br>
                <label for="privacidade">Privacidade</label>
                <input  type = "text" class = "form-control" id="privacidade" name="privacidade" placeholder="Privada/Publica" value="" required>
                <br>
                <label for="descricao">Descrição</label>
                <input  type = "text" class = "form-control" id="descricao" name="descricao" placeholder="" value="" required>
                <br>
                <label for="status">Status</label>
                <input  type = "text" class = "form-control" id="status" name="status" placeholder="Ex: Concluida/Pendente" value="" required>
                <br>
                <label for="data">Data de Conclusão</label>
                <input  type = "text" class = "form-control" id="data" name="data" placeholder="Ex: 23/02/2001" value="" required>
                <br>
                <button class="btn btn-lg btn-block text-uppercase font-weight-bold"  type="submit" id="button">Cadastrar</button>
            </div>
        </div>
      </div>
    </form>
@endsection