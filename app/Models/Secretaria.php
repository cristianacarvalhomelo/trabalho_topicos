<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table = 'secretarias';
    protected $fillable = ['name', 'cpf', 'email', 'password'];
}
