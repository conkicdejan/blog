@extends('layouts.app')

@section('title') 
$post->title
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Published at: {{ $post->created_at }}</p>
    <p>{{ $post->content }}</p>
@endsection
