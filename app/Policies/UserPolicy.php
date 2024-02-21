<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{

    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        // Logika untuk menentukan apakah pengguna diizinkan melihat daftar pengguna
        return $user->hasRole('admin'); // Contoh: Hanya admin yang bisa melihat
    }
}
