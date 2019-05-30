<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey= "idUsuario";
    public $timestamps=false;

    protected $fillable = [
    	'Nombre',
    	'ApellidoPaterno',
    	'ApellidoMaterno',
   		'Correo',
   		'Contrasenia',
   		'Tipo',
   		'Foto' 
   	];
}
