<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public function empleado()
    {
        return $this->belongsTo(User::class, 'empleado_id');
    }

    public function incidencia()
    {
        return $this->belongsTo(Incidencia::class);
    }

    use HasFactory;
}
