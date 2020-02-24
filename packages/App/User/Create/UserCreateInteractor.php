<?php
declare(strict_types=1);

namespace Package\App\User\Create;

use Package\App\User\UserRepositoryInterface;

class UserCreateInteractor implements UserCreateInputPort
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;
    /**
     * @var UserCreateOutputPort
     */
    private $outputPort;

    public function __construct(
        UserRepositoryInterface $userRepository,
        UserCreateOutputPort $outputPort
    ) {
        $this->userRepository = $userRepository;
        $this->outputPort = $outputPort;
    }

    public function handle(UserCreateInput $input): void
    {
    }
}
