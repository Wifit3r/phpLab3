<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return true;
    }


    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Employee $employee)
    {
        return $user->id === $employee->creator_user_id || $user->role === 'Editor' || $user->role === 'Superadmin';
    }


    public function delete(User $user, Employee $employee)
    {
        return $user->id === $employee->creator_user_id || $user->role === 'Superadmin';
    }
}
