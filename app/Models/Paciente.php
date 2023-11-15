<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function Usuarios()
    {
        return $this->belongsTo(Rol::class);
    }

    public function Citas()
    {
        return $this->hasMany(Cita::class);
    }
}
