<?php
declare(strict_types=1);

namespace Package\Adapter\Presenter\User\Create;

use Package\App\User\Create\UserCreateResponse;
use Package\App\User\Create\UserCreateOutputPort;

class UserCreatePresenter implements UserCreateOutputPort
{
    public function handle(UserCreateResponse $response)
    {
        $viewModel = UserCreateViewModel::of($response);
//        $this->middleware->setData(view('user.create', compact('viewModel')));    // @todo: 専用のmiddlewareを定義する
    }
}
