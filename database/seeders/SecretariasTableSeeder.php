<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Secretaria;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SecretariasTableSeeder extends Seeder
{

    public function run(): void
    {
       Secretaria::factory(10)->create();
    }
}