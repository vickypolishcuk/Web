<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class ControllerTest extends BaseController
{
    public function test()
    {
        // створюємо змінні для передачі у view
        $name = 'John Doe';
        $tasks = ['Task 1', 'Task 2', 'Task 3'];

        // передаємо змінні в шаблон /test
        return view('test', compact('name', 'tasks'));
    }
}
