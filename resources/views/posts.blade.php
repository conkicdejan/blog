@extends('layouts.app')

@section('title')
Posts
@endsection

@section('content')
<h1>Posts</h1>
<ul>
    @foreach ($posts as $post)
    <li>
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </li>
    @endforeach
</ul>
@endsection
