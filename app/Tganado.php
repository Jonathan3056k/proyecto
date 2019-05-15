<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tganado extends Model
{
    //
    protected $table = 'tipos_ganado';
    protected $primaryKey = 'id_tipoganado';
    protected $fillable = ['desc_ganado'];
}
