<?php
declare(strict_types=1);

namespace Package\App\User\Create;

interface UserCreateInputPort
{
    public function handle(UserCreateRequest $request): void;
}
