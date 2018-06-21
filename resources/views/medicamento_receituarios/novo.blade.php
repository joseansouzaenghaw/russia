@extends('welcome')

@section('titulo', 'Novo Paciente')

@section('corpo')
<form method="POST" action="{{route('medicamento_receituarios.salvar')}}">
	{{ csrf_field() }}
    <div class="form-group">
        <label for="receituarios_id">receituarios_id</label>
        <input type="text" class="form-control" id="receituarios_id"
               placeholder="receituarios_id."
               required
               name="medicamento_receituarios[receituarios_id]" />
    </div>
           <div class="form-group">
        <label for="medicamentos_id">medicamentos_id</label>
        <input type="text" class="form-control" id="medicamentos_id"
               placeholder="medicamentos_id."
               required
               name="medicamento_receituarios[medicamentos_id]" />
    </div>
        
   
 
    <div class="form-group">
        <label for="qtd">tqd</label>
        <input type="text" class="form-control" id="qtd"
               placeholder="tqd."
               required
               name="medicamento_receituarios[qtd]" />
    </div>
         <div class="form-group">
        <label for="entregue">entregue</label>
        <input type="text" class="form-control" id="entregue"
               placeholder="entregue."
               required
               name="medicamento_receituarios[entregue]" />
    </div>
        
                <div class="form-group">
        <label for="usuario_id">usuario_id</label>
        <input type="text" class="form-control" id="usuario_id"
               placeholder="usuario_id."
               required
               name="medicamento_receituarios[usuario_id]" />
    </div>
        
    <p style="text-align: right">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </p>
</form>
@endsection

