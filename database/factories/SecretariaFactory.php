<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SecretariaFactory extends Factory
{

    public function definition()
    {
        $faker = Faker::create('pt_BR');
        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'cpf' => $faker->randomNumber($nbDigits = NULL, $strict = false, $min=11, $max=11),
        ];

    }

}