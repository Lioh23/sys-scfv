@extends('layout.layout_default')

@section('content')


  <div class="flex-title">
    <div class="flex-item">
        <h2 class="page-title"> <i class="fa fa-address-card-o"></i> Novo Técnico</h2>
    </div>
    <div class="flex-item">
        <a href="{{ route('tecnicos.index') }}" class="personal-button"> <i class="fa fa-angle-double-left"></i> Voltar</a>
    </div>
</div>
<div class="frame">
  <form action="{{ route('tecnicos.guardar') }}" method="POST">
  @csrf
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="nome">Técnico(a)</label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome do(a) funcionário(a)">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="funcao">Função</label>
          <select id="funcao" name ="funcao" class="form-control">
            <option selected>Escolha uma função...</option>
            <option>Psicólogo(a)</option>
            <option>Assistente Social</option>
          </select>
        </div>
      </div>
  </div>



    <input type="submit" value="Salvar" class="btn btn-outline-success mt-3">
  </form>
</div>
@endsection
