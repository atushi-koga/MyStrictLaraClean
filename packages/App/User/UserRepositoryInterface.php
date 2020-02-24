<?php
declare(strict_types=1);

namespace Package\App\User;

use Package\Domain\User\User;
use Package\Domain\User\Users;

interface UserRepositoryInterface
{
    public function create(User $user): User;

    public function getAll(): Users;
}
