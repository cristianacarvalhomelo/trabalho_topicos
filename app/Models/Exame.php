<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    protected $table = 'exames';
    protected $fillable = ['tipo', 'resultado', 'id_paciente'];

    public function paciente() {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}
