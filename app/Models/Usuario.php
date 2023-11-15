<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function Roles()
    {
        return $this->hasOne(Rol::class);
    }

    public function Pacientes()
    {
        return $this->hasOne(Paciente::class);
    }

    public function Doctores()
    {
        return $this->hasOne(Paciente::class);
    }
}
