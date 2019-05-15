<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{
    //
    protected $table = 'registrar_animales';
    protected $primaryKey = 'id_animal';
    protected $fillable = ['id_ganadero','id_sexo','id_tipoganado','id_dispositivo','clave','peso','edad'];

}
