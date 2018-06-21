@extends('welcome')

@section('titulo', 'Novo Paciente')

@section('corpo')
<form method="POST" action="{{route('pacientes.salvar')}}">
	{{ csrf_field() }}
    <div class="form-group">
        <label for="nome">nome</label>
        <input type="text" class="form-control" id="nome"
               placeholder="Nome do Paciente."
               required
               name="pacientes[nome]" />
    </div>
           <div class="form-group">
        <label for="nascimento">nascimento</label>
        <input type="text" class="form-control" id="nascimento"
               placeholder="nascimento."
               required
               name="pacientes[nascimento]" />
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf"
               placeholder="CPF do paciente."
               required
               name="pacientes[cpf]" />
    </div>
    <div class="form-group">
        <label for="sexo">sexo</label>
        <input type="text" class="form-control" id="sexo"
               placeholder="sexo."
               required
               name="pacientes[sexo]" />
    </div>
         <div class="form-group">
        <label for="cns">cns</label>
        <input type="text" class="form-control" id="cns"
               placeholder="cns do paciente."
               required
               name="pacientes[cns]" />
    </div>
         <div class="form-group">
        <label for="telefone">telefone</label>
        <input type="text" class="form-control" id="telefone"
               placeholder="telefone."
               required
               name="pacientes[telefone]" />
    </div>
         <div class="form-group">
        <label for="endereco">endereco</label>
        <input type="text" class="form-control" id="endereco"
               placeholder="endereco."
               required
               name="pacientes[endereco]" />
    </div>
    <p style="text-align: right">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </p>
</form>
@endsection

