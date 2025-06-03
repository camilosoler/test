<?php

namespace App\Services;

use App\User;

class userService {

    //Devuelve un listado de usuarios de la aplicación
    public function allUsers()
    {
        //TODO: PAGINAR
        return User::all();
    }

}