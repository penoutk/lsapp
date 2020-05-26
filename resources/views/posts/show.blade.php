@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
    <hr>
    <small>Written on {{ $post->created_at }} by</small>
@endsection
