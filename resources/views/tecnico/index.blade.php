@extends('layout.layout_default')

@section('header-title', 'Técnicos')



@section('content')
<div class="flex-title">
    <div class="flex-item">
        <h2 class="page-title"> <i class="fa fa-address-card-o"></i> Técnicos cadastrados</h2>
    </div>
    <div class="flex-item">
        <a href="{{ route('tecnicos.novo') }}" class="personal-button"> <i class="fa fa-plus-circle"></i> Novo Técnico</a>
    </div>
</div>
<div class="frame">
    <table class="table table-hover">
        <thead class="thead-personal">
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



@endsection
