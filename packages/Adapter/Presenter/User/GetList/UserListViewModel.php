<?php
declare(strict_types=1);

namespace Package\Adapter\Presenter\User\GetList;

class UserListViewModel
{
    /**
     * @var UserViewModel[]
     */
    private $userViewModel;

    public function __construct(array $userViewModel)
    {
        $this->userViewModel = $userViewModel;
    }
}
