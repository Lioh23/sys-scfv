@extends('layout.layout_default')

@section('content')

  <div class="d-flex flex-row-reverse bd-highlight">
    <div class="bd-highlight">
      <a href="{{ route('tecnicos.index') }}" class="btn btn-danger">Voltar</a>
    </div>
  </div>

  <h4 class="card-title mb-5">Inserir Novo Técnico(a)</h4>
  
  <form action="{{ route('tecnicos.guardar') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="nome">Técnico(a)</label>
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome do(a) funcionário(a)">
  </div>
  <div class="form-group">
    <label for="funcao">Função</label>
    <select id="funcao" name ="funcao" class="form-control">
      <option selected>Escolha uma função...</option>
      <option>Psicólogo(a)</option>
      <option>Assistente Social</option>
    </select>
  </div>
    
  <input type="submit" value="Salvar" class="btn btn-outline-success mt-3">
  </form>
@endsection