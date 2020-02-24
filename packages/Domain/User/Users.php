<?php
declare(strict_types=1);

namespace Package\Domain\User;

class Users
{
    /**
     * @var User[]
     */
    private $value;

    public function __construct(array $users)
    {
        $this->value = $users;
    }

    /**
     * @return User[]
     */
    public function value(): array
    {
        return $this->value;
    }
}
