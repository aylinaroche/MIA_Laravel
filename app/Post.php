<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use PDO;

class Post extends Model
{
       protected $table = 'post';
      // protected $primaryKey='ID';
       protected $fillable = ['nombre','apellidos'];
    // protected $guardated
      public $timestamps = false;
}
