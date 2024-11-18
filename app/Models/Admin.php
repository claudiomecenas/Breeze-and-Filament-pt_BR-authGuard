<?php

namespace App\Models;

use Filament\Panel;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable implements FilamentUser
{
    use HasFactory;
    use Notifiable;

    // Usa a tabela 'users' ao invés de 'admins'
    protected $table = 'users';

    protected $fillable = [
       'name',
       'email',
       'password',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
         // Restrição baseada no campo 'is_admin'
         return $this->is_admin;
        // return true;
    }

}
