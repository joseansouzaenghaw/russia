<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use GuzzleHttp\Client;
use Illuminate\Http\Request;


Route::get('/', function() {
    return view('/index');
});


Route::get('/paciente', function () {
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0
    ]);
    
   $response = $client->get('pacientes/all');
   
   $pacientes = json_decode( $response->getBody());
    
    return view('/paciente.listar', ['pacientes' => $pacientes]);
});

Route::get('/paciente/novo', function() {
    return view('paciente.novo');
});

Route::post('/pacientes/salvar', function (Request $request){
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0]);
$response = $client->post('pacientes/criar', [
        'json' => $request->pacientes
        ]); 
        return redirect('/paciente');
})->name('pacientes.salvar');



Route::get('/medicamento', function () {
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0
    ]);
    
   $response = $client->get('medicamentos/all');
   
   $medicamentos = json_decode( $response->getBody());
    
    return view('/medicamento.listar', ['medicamentos' => $medicamentos]);
});

Route::get('/medicamento/novo', function() {
    return view('medicamento.novo');
});

Route::post('/medicamentos/salvar', function (Request $request){
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0]);
$response = $client->post('medicamentos/criar', [
        'json' => $request->medicamentos
        ]); 
        return redirect('/medicamento');
})->name('medicamentos.salvar');



Route::get('/receituario', function () {
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0
    ]);
    
   $response = $client->get('receituarios/all');
   
   $receituarios = json_decode( $response->getBody());
    
    return view('/receituario.listar', ['receituarios' => $receituarios]);
});

Route::get('/receituario/novo', function() {
    return view('receituario.novo');
});


Route::post('/receituarios/salvar', function (Request $request){
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0]);
$response = $client->post('receituarios/criar', [
        'json' => $request->receituarios
        ]); 
        return redirect('/receituario');
})->name('receituarios.salvar');






Route::get('/medicamento_receituarios', function () {
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0
    ]);
    
   $response = $client->get('medicamento_receituarios/all');
   
   $medicamento_receituarios = json_decode( $response->getBody());
    
    return view('/medicamento_receituarios.listar', ['medicamento_receituarios' => $medicamento_receituarios]);
});

Route::get('/medicamento_receituarios/novo', function() {
    return view('medicamento_receituarios.novo');
});


Route::post('/medicamento_receituarios/salvar', function (Request $request){
    $client = new client([
        'base_uri' => 'http://127.0.0.1/api/',
        'timeout' => 2.0]);
$response = $client->post('medicamento_receituarios/criar', [
        'json' => $request->medicamento_receituarios
        ]); 
        return redirect('/medicamento_receituarios');
})->name('medicamento_receituarios.salvar');