<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ganaderos extends Model
{
    //
    protected $table = 'ganaderos';
    protected $primaryKey = 'id_ganadero';
    protected $fillable = ['nombre', 'apellidop','apellidom','correo_electronico','usuario','contrasena'];
}
