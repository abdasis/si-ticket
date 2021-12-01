<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function semua()
    {

        return $this->user->latest()->get();
    }

    public function hapus($id)
    {
        return $this->user->delete($id);
    }

}
