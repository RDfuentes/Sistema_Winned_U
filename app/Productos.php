<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table='productos';

    protected $primaryKey='id_producto';

    public $timestamps=false;

    protected $fillable=[
        'producto',
        'marca',
        'modelo',
        'caracteristicas',
        'precio',
        'descuento',
        'ai'
    ];

    protected $guarded=[

    ];
}
