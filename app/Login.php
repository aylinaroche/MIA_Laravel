<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User\ as Authenticatable;

class Login extends Authenticatable
{
	use Notifiable;


	protected $guard = 'login'
       //protected $table = 'usuario';
       /*protected $primaryKey='ID_Usuario';
       protected $fillable = ['correo','clave'];
       public $timestamps = false;*/
}
