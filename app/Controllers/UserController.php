<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function register(array $data)
    {
        //TODO Сделать валидацию
        $user = new User();
        $user->setName($data['name']);
        $user->setEmail($data['name']);
        $user->setPassword($data['name']);


    }
}