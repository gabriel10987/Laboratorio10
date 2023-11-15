<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function Usuarios()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function Especialidades()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function Citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function Turnos()
    {
        return $this->hasMany(Turno::class);
    }
}

