<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extphpends Controller
{
    public function index($id)
    {
        // Declare variables and assign the values stated in the question
        $name = "Donal Trump";
        $age = "75";

        // Add three variables in $data variable as associative array with values stated in the question
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set your cookie variables stated in the question
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the response with the data, status code, and set the cookie
        return response()
            ->json($data, 200)
            ->cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
