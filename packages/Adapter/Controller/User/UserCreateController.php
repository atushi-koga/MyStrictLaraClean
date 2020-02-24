<?php

namespace Package\Adapter\Controller\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Package\App\User\Create\UserCreateInputPort;

class UserCreateController extends Controller
{
    /**
     * @var UserCreateInputPort
     */
    private $inputPort;

    public function __construct(UserCreateInputPort $inputPort)
    {
        $this->inputPort = $inputPort;
    }

    public function createUser(Request $request)
    {

    }
}
