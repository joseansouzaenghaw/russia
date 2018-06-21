@extends('welcome')

@section('titulo', 'Listar de Pacientes')

@section('corpo')
<p style="text-align: right">
    <a href="/paciente/novo" class="btn btn-success">Adicionar Paciente</a>
</p>
<hr />
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>cpf</th>
            <th>cns</th>
            <th>sexo</th>
            <th>Nascimento</th>
            <th>endereco</th>
            <th>telefone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr>
            <td>{{ $paciente->id }}</td>
            <td>{{ $paciente->nome }}</td>
            <td>{{ $paciente->cpf }}</td>
            <td>{{ $paciente->cns }}</td>
            <td>{{ $paciente->sexo }}</td>
            <td>{{ $paciente->nascimento }}</td>
            <td>{{ $paciente->endereco }}</td>
            <td>{{ $paciente->telefone }}</td>
            
           
        </tr>
        @endforeach
    </tbody>
</table>
@endsection