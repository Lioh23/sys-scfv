@extends('layout.layout_default')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="d-flex flex-row-reverse bd-highlight">
      <div class="bd-highlight">
        <a href="{{ route('tecnicos.novo') }}" class="btn btn-success">Novo Técnico</a>
      </div>
    </div>
    <h4 class="card-title mb-5">Técnicos Cadastrados</h4>
    <table class="table table-hover">
      <thead class="thead-dark">
          <th style="width: 70%">Nome</th>
          <th style="width: 20%">Função</th>
          <th style="width: 10%">Ações</th>
      </thead>
      @if(isset($tecnicos))
    
      <tbody>
        @foreach ($tecnicos as $tecnico)
        <tr>
          <td><?= $tecnico['nome'] ?></td>
          <td><?= $tecnico['funcao'] ?></td>
          <td>
            <a href="{{ route('tecnicos.edit', $tecnico['id']) }}"><i class="fa fa-pencil mr-2" aria-hidden="true"></i></a>
            <a href="{{ route('tecnicos.destroy', $tecnico['id']) }}"><i class="fa fa-trash-o text-danger"></i></a>
          </td>
          
        </tr>
        @endforeach
      </tbody>

      @endif
    </table>
  </div>
</div>



@endsection