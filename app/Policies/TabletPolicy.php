<?php

namespace App\Policies;

use App\Models\Tablet;
use App\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TabletPolicy
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
