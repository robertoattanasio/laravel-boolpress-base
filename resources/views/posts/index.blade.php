@extends('layouts.layout')

@section('pageTitle', 'Blog')

@section('content')
    <h1>Blog</h1>

    @foreach ($posts as $post)

    <h2>{{ $post['title'] }}</h2>
    <h4>{{ $post['author'] }} </h4>
        
    @endforeach
@endsection