@extends('layouts.layout')

@section('pageTitle', 'Blog')

@section('content')
    <h1>Blog</h1>

    @foreach ($posts as $post)

    <h2>{{ $post['title'] }}</h2>
    <h4>{{ $post['author'] }} </h4>
    <h4>{{ $post['created_at'] }}</h4>

    <h5 class="">
        <a href="{{ route('posts.show', [$post -> id] )}}">Dettagli</a>
    </h5>
    <form class="delete" action="{{ route('posts.destroy', [$post->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella">

    </form>

        
    @endforeach
@endsection