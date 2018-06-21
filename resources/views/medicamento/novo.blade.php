@extends('welcome')

@section('titulo', 'Novo Medicamento')

@section('corpo')
<form method="POST" action="{{route('medicamentos.salvar')}}">
	{{ csrf_field() }}
    <div class="form-group">
        <label for="nome">nome</label>
        <input type="text" class="form-control" id="nome"
               placeholder="Nome do medicamento."
               required
               name="medicamentos[nome]" />
    </div>
           <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao"
               placeholder="descricao."
               required
               name="medicamentos[descricao]" />
    </div>
    <div class="form-group">
        <label for="tarja">tarja</label>
        <input type="text" class="form-control" id="tarja"
               placeholder="tarja."
               required
               name="medicamentos[tarja]" />
    </div>
    <div class="form-group">
        <label for="estoque">estoque</label>
        <input type="text" class="form-control" id="estoque"
               placeholder="estoque."
               required
               name="medicamentos[estoque]" />
    </div>
         
    <p style="text-align: right">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </p>
</form>
@endsection

