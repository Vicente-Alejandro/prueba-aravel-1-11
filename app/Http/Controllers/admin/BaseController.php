<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BaseMail;

class BaseController extends Controller
{
    function index(int $id = 0) : \Illuminate\Contracts\View\View {

        if ($id !== 0) {
            echo $id;exit();
        }

        return view('/public/home/test');
    }

    function crudys() : \Illuminate\Contracts\View\View {
        $data = [
            'name' => 'Alejandro',
            'email' => 'ale@gmail.comn',
            'title' => 'CRUDYS',
            'scripts' => array_map(fn($script) => $script['file'], [
                ['file' => 'app'],
                ['file' => 'bootstrap'],
                ['file' => 'admin/index']
            ]),
            'users' => [
                ['name' => 'Alejandro'],
                ['name' => 'Carlos'],
                ['name' => 'Lucía']
            ]
        ];
    
        return view('/crud/index', $data);
    }

    function test_echo() {
        echo 'Hola mundo';
        exit();
    }

    function arrays() {
        $data_posts = ['name', 'mail'];

        return view('/pruebas/arrays', compact('data_posts')); // luego se imprime con @foreach por ejemplo @foreach($data_posts as $data_post) {{ $data_post }} @endforeach
    }

    function email($mail) {
        $data = [
            'name' => 'Alejandro',
            'message' => 'Mensaje de prueba desde laravel'
        ];

        Mail::to($mail)->send(new BaseMail($data));
        return 'Correo enviado';exit();
    }
}

