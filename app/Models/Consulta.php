<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';
    protected $fillable = ['hora', 'id_paciente', 'id_medico'];

    public function paciente() {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
    public function medico() {
        return $this->belongsTo(Medico::class, 'id_medico');
    }
}
