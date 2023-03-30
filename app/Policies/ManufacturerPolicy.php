<?php

namespace App\Policies;

use App\Models\Manufacturer;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManufacturerPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return ($user->role==="admin" || $user->role === "root")?
            Response::allow()
            : Response::denyAsNotFound('Ezt a cselekvést nem teheted meg !');
    }

    public function update(User $user)
    {
        return ($user->role==="admin" || $user->role === "root")?
            Response::allow()
            : Response::denyAsNotFound('Ezt a cselekvést nem teheted meg !');
    }

    public function forceDelete(User $user)
    {
        return ($user->role === "root")?
            Response::allow()
            : Response::denyAsNotFound('Ezt a cselekvést nem teheted meg !');
    }
}
