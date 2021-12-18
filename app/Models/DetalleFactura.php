<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;
    protected $table ='detalle_factura';
    protected $guarded = ['id'];

    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }
    public function detallefactura()
    {
        return $this->belongsTo(Factura::class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

}
