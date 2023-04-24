<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerTest;
use App\Http\Controllers\ControllerHello;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CostProductController;
use App\Http\Controllers\NewUsersController;
use App\Http\Controllers\NewStudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Створити
- декілька рутів;
- get запити з параметрами;
- post запити;
- controller з декільками методами, які будуть відповідати за той чи інший запит;
- декілька шаблонів, які відповідним чином реагують на ті чи інші запити;
- модель, яка буде імітувати якісь дані (наприклад дані про товар чи про юзера).

Продемонструвати можливості blade template, а саме:
-вміння вставити змінні, які ви туди передали
-вміння foreach-ем пройти по масиву, який ви туди передали
-зробити if
-зробити наслідування від базового шаблону
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/test', [ControllerTest::class, 'test']);
Route::get('/hello', [ControllerHello::class, 'greeting']);
Route::get('/product', [ProductController::class, 'listProduct']);
Route::get('/costProduct', [CostProductController::class, 'cost']);
Route::get('/parent', function () {
    return view('parent');
});
Route::get('/son', function () {
    return view('son');
});
Route::get('/newUser', [NewUsersController::class, 'form']);
Route::post('/newUsers', [NewUsersController::class, 'store']);
Route::get('/newStudent', function () {
    return view('newStudent');
});
Route::post('/newStudents', [NewStudentController::class, 'store']);
