<?php

use App\Http\Controllers\admin\BaseController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('welcome', ['title' => 'Casa', 'scripts' => []]);})->name('home');
// Route::get('/{id}', function (int $id) {return view('id', ['id' => $id]);})->where('id', '[1-9]+');
// Route::get('test', [BaseController::class, 'index'])->name('test');
// Route::get('test/id/{id}', [BaseController::class, 'index'])->name('test_de_prueba');
// Route::get('test/echo', [BaseController::class, 'test_echo'])->name('test_de_prueba_echo');
// Route::get('/crudys', [BaseController::class, 'crudys'])->name('crud');
// Route::get('/red', function() {return redirect()->route('crud');})->name('red');
// Route::get('/for', function() {$data = ['users' => [['name' => 'Alejandro'],['name' => 'Carlos'],['name' => 'Lucía']]];return view('/pruebas/forelse', $data);})->name('for');
// Route::get('test/name/{name?}', function($name) {var_dump($name);exit();});
// Route::get('test/email/{mail}', [BaseController::class, 'email'])->name('email');
// Route::resource('dashboard/post', PostController::class);
// Route::resource('dashboard/category', CategoryController::class);s

// Route::get('/', function() {
//     return('<a href="/post/review">Ir a prueba</a>');
// });

// Route::resources([
//     'dashboard/post' => PostController::class,
//     'dashboard/category' => CategoryController::class,
// ]);

Route::group(['prefix' => 'dashboard'], function() {
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
    ]);

    // Route::get('report/{year}/{month}', [ReportController::class, 'show'])
    // ->where([
    //     'year' => '[0-9]{4}', // Año con 4 dígitos
    //     'month' => '(0[1-9]|1[0-2])', // Mes en formato 01 a 12
    // ]);
});

?>
