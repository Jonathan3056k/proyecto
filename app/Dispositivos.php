<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    //
    protected $table = 'dispositivos';
    protected $primaryKey = 'id_dispositivo';
    protected $fillable = ['clave_dis'];
}
