<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class NewStudentController extends BaseController
{
    public function store(Request $request)
    {
        // отримуємо дані, що передані через POST-запит
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $IdCard = $request->input('IdCard');

        // формуємо повідомлення користувачу на основі отриманих даних
        $message = "FirstName: $firstName;<br>LastName: $lastName;<br>Surname: $surname;<br>Phone: $phone;<br>IdCard: $IdCard";

        // повертаємо відповідь
        return response("Student created<br>$message", 201);
    }
}
