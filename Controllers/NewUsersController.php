<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class NewUsersController extends BaseController
{
    public function form()
    {
        return view('newUser');
    }

    public function store(Request $request)
    {
        // отримуємо дані, що передані через POST-запит
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // формуємо повідомлення користувачу на основі отриманих даних
        $message = "Name: $name;<br>Email: $email;<br>Password: $password;";

        // повертаємо відповідь
        return response("User created<br>$message", 201);
    }
}
