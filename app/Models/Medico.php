<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';
    protected $fillable = ['name', 'cargo', 'cpf', 'email', 'password'];
}
