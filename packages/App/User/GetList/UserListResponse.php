<?php
declare(strict_types=1);

namespace Package\App\User\GetList;

class UserListResponse
{
    /**
     * @var UserResponse[]
     */
    private $value;

    public function __construct(array $userResponses)
    {
        $this->value = $userResponses;
    }

    /**
     * @return UserResponse[]
     */
    public function value(): array
    {
        return $this->value;
    }
}
