<?php
declare(strict_types=1);

namespace Package\Domain\User;

class User
{
    /**
     * @var UserId
     */
    private $userId;
    /**
     * @var UserName
     */
    private $userName;

    public function __construct(UserId $userId, UserName $userName)
    {
        $this->userId = $userId;
        $this->userName = $userName;
    }

    public function userId(): UserId
    {
        return $this->userId;
    }

    public function userName(): UserName
    {
        return $this->userName;
    }
}
