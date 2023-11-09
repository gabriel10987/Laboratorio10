<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    public function Doctores()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function Horarios()
    {
        return $this->belongsTo(Horario::class);
    }
}
