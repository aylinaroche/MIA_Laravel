<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
       protected $table = 'usuario';
       protected $primaryKey='ID_Usuario';
       protected $fillable = ['nombre','apellidos','clave','correo','telefono','genero','fecha_nac','fecha_reg','direccion','rol'];
       public $timestamps = false;
}
