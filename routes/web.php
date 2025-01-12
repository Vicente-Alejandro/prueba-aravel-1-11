<?php

use App\Http\Controllers\admin\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Casa', 'scripts' => []]);
})->name('home');

Route::get('/{id}', function (int $id) {
    return view('id', ['id' => $id]);
})->where('id', '[1-9]+');

Route::get('test', [BaseController::class, 'index'])->name('test');

Route::get('test/id/{id}', [BaseController::class, 'index'])->name('test_de_prueba');

Route::get('test/echo', [BaseController::class, 'test_echo'])->name('test_de_prueba_echo');

Route::get('/crudys', [BaseController::class, 'crudys'])->name('crud');

Route::get('/red', function() {

    return redirect()->route('crud');

})->name('red');

Route::get('/for', function() {

    $data = [
        'users' => [
            ['name' => 'Alejandro'],
            ['name' => 'Carlos'],
            ['name' => 'Lucía']
        ]
    ];

    return view('/pruebas/forelse', $data);
})->name('for');

Route::get('test/name/{name?}', function($name) {
    var_dump($name);exit();
});

// Route::resource('post', BaseController::class);

Route::get('test/email/{mail}', [BaseController::class, 'email'])->name('email');

?>
