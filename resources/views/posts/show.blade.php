@extends('layouts.layout')

@section('pageTitle', 'Post Details')

@section('content')
    <p>
        {{ $post['main_post']}}
    </p>
@endsection