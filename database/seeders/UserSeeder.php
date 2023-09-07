<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrador user',
                'username' => 'adminuser',
                'email' => 'admin@gmail.com',
                'rol' => 'admin',
                'estado' => 'activo',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Vendedor user',
                'username' => 'vendedoruser',
                'email' => 'vendedor@gmail.com',
                'rol' => 'vendedor',
                'estado' => 'activo',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Usuario',
                'username' => 'usuario',
                'email' => 'usuario@gmail.com',
                'rol' => 'usuario',
                'estado' => 'activo',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
