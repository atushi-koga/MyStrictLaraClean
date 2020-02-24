<?php
declare(strict_types=1);

namespace Package\App\User\Create;

interface UserCreateOutputPort
{
    public function handle(UserCreateResponse $response);
}
