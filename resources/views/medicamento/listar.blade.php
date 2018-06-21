@extends('welcome')

@section('titulo', 'Listar Medicamentos')

@section('corpo')
<p style="text-align: right">
    <a href="/medicamento/novo" class="btn btn-success">Adicionar Medicamento</a>
</p>
<hr />
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>descricao</th>
            <th>tarja</th>
            <th>estoque</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($medicamentos as $medicamento)
        <tr>
            <td>{{ $medicamento->id }}</td>
            <td>{{ $medicamento->nome }}</td>
            <td>{{ $medicamento->descricao}}</td>
            <td>{{ $medicamento->tarja }}</td>
            <td>{{ $medicamento->estoque }}</td>
          
            
           
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
