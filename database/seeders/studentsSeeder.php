<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i = 0; $i < 10; $i++) { 
        $gender = fake()->randomElement(['Laki-laki', 'Perempuan']);

        DB::table('students')->insert([
            'name' =>$gender === 'Laki-laki' ? fake()->name('male') : fake('id_ID')->name('female'),

            'kelas' => fake()->randomElement(['X', 'XI', 'XII']),

            'jurusan' => fake()->randomElement(['RPL', 'TKJ', 'TKR', 'TB', 'AKL']),

            'alamat' => fake('id_ID')->unique()->address(),

            'jenis_kelamin' => $gender,

            'created_at' => now(),
        ]);
       }

        
       
    }
}
