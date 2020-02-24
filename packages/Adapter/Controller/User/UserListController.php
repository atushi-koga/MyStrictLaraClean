<?php

namespace Package\Adapter\Controller\User;

use App\Http\Controllers\Controller;
use Package\App\User\GetList\UserListInputPort;

class UserListController extends Controller
{
    /**
     * @var UserListInputPort
     */
    private $inputPort;

    public function __construct(UserListInputPort $inputPort)
    {
        $this->inputPort = $inputPort;
    }

    public function __invoke()
    {
        $this->inputPort->handle();
    }
}
