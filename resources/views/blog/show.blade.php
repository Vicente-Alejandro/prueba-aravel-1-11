@extends('blog.base')

@section('content')

    <br>
    <x-card class="bg-white font-bold my-5" :active="true">
        Contenido del componente
    </x-card>
    <x-card class="bg-blue-600" >
        Contenido del componente
    </x-card>
    <x-card class="bg-green-600" >
        Contenido del componente
    </x-card>
    <br>

    <div class="card card-white ">
        {{-- <x-blog.show :post="$post" :route=" Request::path()"  data-id="1" /> --}}

        <x-dynamic-component component="blog.show" :post="$post" :route=" Request::path()"  data-id="1" />

    </div>
@endsection