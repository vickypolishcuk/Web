<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class ControllerHello extends BaseController
{
    public function greeting(Request $request)
    {
        // отримуємо name від користувача з URL-рядка
        $name = $request->input('name');
        if ($name==NULL) { // якщо name не заданий, виводимо повідомлення про це
            $message = null;
        } else { // в інакшому випадку вітаємося з користувачем
            $message = "Hello, " . $name . "!";
        }
        return view('hello', compact('message'));
    }
}
