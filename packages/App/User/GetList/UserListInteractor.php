<?php
declare(strict_types=1);

namespace Package\App\User\GetList;

use Package\App\User\UserRepositoryInterface;
use Package\Domain\User\User;
use Package\Domain\User\Users;

class UserListInteractor implements UserListInputPort
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;
    /**
     * @var UserListOutputPort
     */
    private $outputPort;

    public function __construct(
        UserRepositoryInterface $userRepository,
        UserListOutputPort $outputPort
    ) {
        $this->userRepository = $userRepository;
        $this->outputPort = $outputPort;
    }

    public function handle()
    {
        /** @var Users $users */
        $users = $this->userRepository->getAll();
        $userResponses = array_map(function (User $user) {
            return UserResponse::of($user);
        }, $users->value());

        $this->outputPort->handle(new UserListResponse($userResponses));
    }
}
