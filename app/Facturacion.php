<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    protected $table='facturacion';

    protected $primaryKey='id_factura';

    public $timestamps=false;

    protected $fillable=[
        'no_factura',
        'id_cliente',
        'fecha',
        'id_producto',
        'precio',
        'cantidad',
        'total',
        'ai'
    ];

    protected $guarded=[

    ];
}
