<?php
declare(strict_types=1);

namespace Package\App\User\GetList;

interface UserListOutputPort
{
    public function handle(UserListResponse $userListResponse);
}
