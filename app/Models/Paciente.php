<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $fillable = ['name', 'cpf', 'endereco', 'telefone', 'email', 'password', 'id_medico'];

    public function medico() {
        return $this->belongsTo(Medico::class, 'id_medico');
    }
    
}
