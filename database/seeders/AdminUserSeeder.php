<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'], // Critério para evitar duplicação
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // Senha criptografada
                'is_admin' => true, // Define como administrador
            ]
        );

        $this->command->info('Usuário administrador criado com sucesso!');
    }
}
