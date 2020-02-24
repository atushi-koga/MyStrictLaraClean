<?php
declare(strict_types=1);

namespace Package\Adapter\Presenter\User\Create;

use Package\App\User\Create\UserCreateResponse;

class UserCreateViewModel
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

    public static function of(UserCreateResponse $response): self
    {
        return new self($response->createdUserId(), $response->createdUserName());
    }
}
