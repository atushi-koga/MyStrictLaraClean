<?php
declare(strict_types=1);

namespace Package\Adapter\Presenter\User\GetList;

use Package\App\User\GetList\UserListOutputPort;
use Package\App\User\GetList\UserListResponse;
use Package\App\User\GetList\UserResponse;

class UserListPresenter implements UserListOutputPort
{
    public function handle(UserListResponse $userListResponse)
    {
        $userViewModels = array_map(function (UserResponse $userResponse) {
            return UserViewModel::of($userResponse);
        }, $userListResponse->value());

        $viewModel = new UserListViewModel($userViewModels);
//        $this->middleware->setData(view('user.list', compact('viewModel')));    // @todo: 専用のmiddlewareを定義する
    }
}
