<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{
    //
    protected $table = 'registrar_animales';
    protected $primaryKey = 'id_animal';
    protected $fillable = ['id_user','id_sexo','id_tipoganado','id_dispositivo','clave','peso','edad'];


    function getSexos()
    {
        return $this->hasMany('App\Sexos','id_sexo','id_sexo');
    }

    function getTipoganado()
    {
        return $this->hasMany('App\Tganado','id_tipoganado','id_tipoganado');
    }

    function getDispositivo()
    {
        return $this->hasMany('App\Dispositivos','id_dispositivo','id_dispositivo');
    }

    function getUsuario()
    {
        return $this->hasMany('App\User','id_user','id_user');
    }
}
