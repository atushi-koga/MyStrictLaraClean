<?php
declare(strict_types=1);

namespace Package\App\User\Create;

use Package\App\User\UserRepositoryInterface;
use Package\Domain\User\User;
use Package\Domain\User\UserId;
use Package\Domain\User\UserName;

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

    public function handle(UserCreateRequest $request): void
    {
        $requestUser = new User(UserId::nullObject(), new UserName($request->name()));
        $createdUser = $this->userRepository->create($requestUser);

        $output = UserCreateResponse::of($createdUser);
        $this->outputPort->handle($output);
    }
}
