<?php

use models\User;
use persistence\UserPersistence;

class UserController {
    public function register($userForm): void
    {
        $user = new User(
            $userForm['firstName'],
            $userForm['lastName'],
            $userForm['email'],
            $userForm['password'],
            $userForm['shippingAddress']
        );
        $userPersistence = new UserPersistence();
        $userPersistence->save($user);
    }

}
