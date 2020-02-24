<?php
declare(strict_types=1);

namespace Package\Adapter\Presenter\User\GetList;

use Package\App\User\GetList\UserResponse;

class UserViewModel
{
    /**
     * @var int
     */
    private $userId;
    /**
     * @var string
     */
    private $userName;

    public function __construct(int $userId, string $userName)
    {
        $this->userId = $userId;
        $this->userName = $userName;
    }

    public static function of(UserResponse $userResponse): self
    {
        return new self($userResponse->userId(), $userResponse->userName());
    }
}
