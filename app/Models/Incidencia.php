<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $table = 'incidencias';

    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'asignada',
        'direccion',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'cliente_id');
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }

    use HasFactory;

}

