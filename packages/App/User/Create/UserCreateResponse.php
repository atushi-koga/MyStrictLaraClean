<?php
declare(strict_types=1);

namespace Package\App\User\Create;

use Package\Domain\User\User;

class UserCreateResponse
{
    /**
     * @var int
     */
    private $createdUserId;
    /**
     * @var string
     */
    private $createdUserName;

    public function __construct(int $createdUserId, string $createdUserName)
    {
        $this->createdUserId = $createdUserId;
        $this->createdUserName = $createdUserName;
    }

    public static function of(User $user): self
    {
        return new self($user->userId()->value(), $user->userName()->value());
    }

    public function createdUserId(): int
    {
        return $this->createdUserId;
    }

    public function createdUserName(): string
    {
        return $this->createdUserName;
    }
}
