<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
   public function index(){
    	$usuarios = User::all();
    	return response()->json($usuarios, 200);
    }

    public function store(Request $request){
    	$usuarios=new User();
    	$usuarios->Nombre=$request->get('Nombre');
    	$usuarios->ApellidoPaterno=$request->get('ApellidoPaterno');
    	$usuarios->ApellidoMaterno=$request->get('ApellidoMaterno');
    	$usuarios->Correo=$request->get('Correo');
    	$usuarios->password= bcrypt($request->get('password'));
    	$usuarios->Tipo=$request->get('Tipo');
    	$usuarios->Foto=$request->get('Foto');
    	$usuarios->save();
    	return response()->json(["Mensaje"=>"Datos Insertados"]);
    }

    public function update(User $usuario, Request $request){
    	$usuario->update($request->all());
    	return response()->json(["Mensaje"=>"Datos Actualizados"]);
    }

    public function destroy(User $usuario){
    	$usuario->delete();
    	return response()->json(["Mensaje"=>"Datos Eliminados"]);
    } 

    public function show(User $usuario){
    	return response()->json($usuario, 200);
    }
}
