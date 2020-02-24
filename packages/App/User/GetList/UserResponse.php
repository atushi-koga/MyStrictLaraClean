<?php
declare(strict_types=1);

namespace Package\App\User\GetList;

use Package\Domain\User\User;

class UserResponse
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

    public static function of(User $user): self
    {
        return new self($user->userId()->value(), $user->userName()->value());
    }

    public function userId(): int
    {
        return $this->userId;
    }

    public function userName(): string
    {
        return $this->userName;
    }
}
