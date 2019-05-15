<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'registrar_usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['nombre','apellidop','apellidom','correo_electronico','usuario','contrasena'];
}
