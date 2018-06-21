@extends('welcome')

@section('titulo', 'Novo Paciente')

@section('corpo')
<form method="POST" action="{{route('receituarios.salvar')}}">
	{{ csrf_field() }}
    <div class="form-group">
        <label for="data">data</label>
        <input type="text" class="form-control" id="data"
               placeholder="data."
               required
               name="receituarios[data]" />
    </div>
           <div class="form-group">
        <label for="observacao">observacao</label>
        <input type="text" class="form-control" id="observacao"
               placeholder="observacao."
               required
               name="receituarios[observacao]" />
    </div>
    <div class="form-group">
        <label for="pacientes_id">paciente_id</label>
        <input type="text" class="form-control" id="pacientes_id"
               placeholder="paciente_id."
               required
               name="receituarios[pacientes_id]" />
    </div>
    <div class="form-group">
        <label for="usuario_id">usuario_id</label>
        <input type="text" class="form-control" id="usuario_id"
               placeholder="usuario_id"
               required
               name="receituarios[usuario_id]" />
    </div>
        
      
    <p style="text-align: right">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </p>
</form>
@endsection

