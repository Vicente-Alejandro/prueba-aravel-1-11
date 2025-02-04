@extends('blog.base')

@section('content')
    <x-blog.post.index :posts="$posts" :active="true"  />
@endsection