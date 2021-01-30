<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table='clientes';

    protected $primaryKey='id_cliente';

    public $timestamps=false;

    protected $fillable=[
        'nit',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'correo',
        'ai'
    ];

    protected $guarded=[

    ];
}
