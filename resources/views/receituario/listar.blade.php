@extends('welcome')

@section('titulo', 'Listar receituarios')

@section('corpo')
<p style="text-align: right">
    <a href="/receituario/novo" class="btn btn-success">Adicionar receituario</a>
</p>
<hr />
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>observação</th>
            <th>paciente_id</th>
            <th>usuario_id</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($receituarios as $receituario)
        <tr>
            <td>{{ $receituario->id }}</td>
            <td>{{ $receituario->data }}</td>
            <td>{{ $receituario->observacao}}</td>
            <td>{{ $receituario->pacientes_id }}</td>
            <td>{{ $receituario->usuario_id }}</td>
          
            
           
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
