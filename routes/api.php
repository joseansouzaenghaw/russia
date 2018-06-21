<?php

use Illuminate\Http\Request;
use App\pacientes;
use App\medicamentos;
use App\receituarios;
use App\medicamento_receituarios;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/pacientes/all', function(){
    $pacientes = pacientes::orderBy("nome")->get();
    
    return response()->json($pacientes, 200);
});


Route::get('/medicamentos/all', function(){
    $medicamentos = medicamentos::orderBy("nome")->get();
    
    return response()->json($medicamentos, 200);
});

Route::get('/receituarios/all', function(){
   $receituarios = receituarios::orderBy("id")->get();
    
    
    
    //$receituarios = receituarios::orderBy('id')
          //  ->join('pacientes', 'pacientes.id', '=', 'pacientes.nome')
          //  ->join('orders', 'users.id', '=', 'orders.user_id')
           // ->select('users.*', 'contacts.phone', 'orders.price')
          //  ->get();
    
    
    return response()->json($receituarios, 200);
});

Route::get('/medicamento_receituarios/all', function(){
    $medicamento_receituarios = medicamento_receituarios::orderBy("id")->get();
    
    return response()->json($medicamento_receituarios, 200);
});



Route::post('/pacientes/criar', function (Request $request){
  $data = $request->json()->all();
  $pacientes = new pacientes($data);
  //$data['titulo'];
  //$data['autor'];
  //$data['paginas'];
  //$data['categoria'];
 
  try{
      $pacientes->save();
      return response()->json([
          "msg" => "Objeto criado com sucesso"
      ], 200);
      
  } catch (\Exception $ex){
      return response()->json([
          "msg" => $ex->getMessage()              
      ], 400);
  }
  
    
    
});



Route::post('/medicamentos/criar', function (Request $request){
  $data = $request->json()->all();
  $medicamentos = new medicamentos($data);
  //$data['titulo'];
  //$data['autor'];
  //$data['paginas'];
  //$data['categoria'];
 
  try{
      $medicamentos->save();
      return response()->json([
          "msg" => "Objeto criado com sucesso"
      ], 200);
      
  } catch (\Exception $ex){
      return response()->json([
          "msg" => $ex->getMessage()              
      ], 400);
  }
  
    
    
});


Route::post('/receituarios/criar', function (Request $request){
  $data = $request->json()->all();
  $receituarios = new receituarios($data);
  //$data['titulo'];
  //$data['autor'];
  //$data['paginas'];
  //$data['categoria'];
 
  try{
      $receituarios->save();
      return response()->json([
          "msg" => "Objeto criado com sucesso"
      ], 200);
      
  } catch (\Exception $ex){
      return response()->json([
          "msg" => $ex->getMessage()              
      ], 400);
  }
  
    
    
});





Route::post('/medicamento_receituarios/criar', function (Request $request){
  $data = $request->json()->all();
  $medicamento_receituarios = new medicamento_receituarios($data);
  //$data['titulo'];
  //$data['autor'];
  //$data['paginas'];
  //$data['categoria'];
 
  try{
      $medicamento_receituarios->save();
      return response()->json([
          "msg" => "Objeto criado com sucesso"
      ], 200);
      
  } catch (\Exception $ex){
      return response()->json([
          "msg" => $ex->getMessage()              
      ], 400);
  }
  
    
    
});
