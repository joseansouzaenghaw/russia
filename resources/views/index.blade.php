@extends('welcome')

@section('titulo', 'Consultas')

@section('corpo')
<p style="text-align: right">
    <a href="/api/pacientes/all" class="btn btn-success">API Paciente</a>
    <a href="/api/medicamentos/all" class="btn btn-success">API Medicamentos</a>
    <a href="/api/receituarios/all" class="btn btn-success">API Recei</a>
    <a href="/api/medicamento_receituarios/all" class="btn btn-success">API med</a>
    <a href="/paciente" class="btn btn-success">Paciente</a>
    <a href="/medicamento" class="btn btn-success">Medicamento</a>
    <a href="/receituario" class="btn btn-success">receituario</a>
    <a href="/medicamento_receituarios" class="btn btn-success">medicamento e receituario</a>
</p>
<hr />
@endsection
