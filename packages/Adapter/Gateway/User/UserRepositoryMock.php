<?php
declare(strict_types=1);

namespace Package\Adapter\Gateway\User;

use Package\App\User\UserRepositoryInterface;
use Package\Domain\User\User;
use Package\Domain\User\Users;

class UserRepositoryMock implements UserRepositoryInterface
{
    public function create(User $user): User
    {
        // TODO: Implement create() method.
    }

    public function getAll(): Users
    {
        // TODO: Implement getAll() method.
    }
}
