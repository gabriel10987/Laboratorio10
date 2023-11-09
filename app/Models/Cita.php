<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    public function Pacientes()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function Diagnosticos()
    {
        return $this->belongsTo(Diagnostico::class);
    }

    public function Pagos()
    {
        return $this->hasOne(Pago::class);
    }

    public function Doctores()
    {
        return $this->belongsTo(Doctor::class);
    }
}


