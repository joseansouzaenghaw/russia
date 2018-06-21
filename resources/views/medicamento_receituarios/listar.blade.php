@extends('welcome')

@section('titulo', 'Listar de medicamento_receituarios')

@section('corpo')
<p style="text-align: right">
    <a href="/medicamento_receituarios/novo" class="btn btn-success">Adicionar medicamento_receituarios</a>
</p>
<hr />
<table class="table">
    <thead>
        <tr>
            <th>ID _ receituario</th>
            <th>id Medicamento</th>
            <th>id</th>
            <th>tqd</th>
            <th>entregue</th>
            <th>usuario id</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($medicamento_receituarios as $medicamento_receituario)
        <tr>
            <td>{{ $medicamento_receituario->receituarios_id }}</td>
            <td>{{ $medicamento_receituario->medicamentos_id }}</td>
            <td>{{ $medicamento_receituario->id }}</td>
            <td>{{ $medicamento_receituario->qtd }}</td>
            <td>{{ $medicamento_receituario->entregue }}</td>
            <td>{{ $medicamento_receituario->usuario_id }}</td>
          
            
      
        </tr>
        @endforeach
    </tbody>
</table>
@endsection