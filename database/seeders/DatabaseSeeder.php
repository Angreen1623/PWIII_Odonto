<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
             'name' => 'André',
             'email' => 'andreopaim@gmail.com',
             'password' => '$2y$10$SgKY6lTPqz0vTbi7Lr4Fz.fdl7B3ydMSndTo2jyO0UUUvXXkxSz4C',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Igor',
            'email' => 'igornogueira@gmail.com',
            'password' => '$2y$10$SgKY6lTPqz0vTbi7Lr4Fz.fdl7B3ydMSndTo2jyO0UUUvXXkxSz4C',
       ]);
       
        \App\Models\User::factory()->create([
            'name' => 'Bruno',
            'email' => 'brunoaparecido@gmail.com',
            'password' => '$2y$10$SgKY6lTPqz0vTbi7Lr4Fz.fdl7B3ydMSndTo2jyO0UUUvXXkxSz4C',
       ]);
    }
}
