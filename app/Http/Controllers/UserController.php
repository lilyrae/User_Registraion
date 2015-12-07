<?php

namespace App\Http\Controllers;

use Redis;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function createUser($username, $name, $age, $gender)
    {
        if (Redis::exists($username)) {
            return "User already exists";
        } 
        else {
            Redis::hmset($username, array(
                        "name" => $name,
                        "age" => $age,
                        "gender" => $gender));


            return "User has been set";
        }
        
    }


    public function showUser($username)
    {
        $user = Redis::hgetall($username);

        return $user;
    }

}