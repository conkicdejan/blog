@extends('layouts.app')

@section('title')
Welcome
@endsection

@section('content')
<h1> Hello {{ "$name $lastname" }}</h1>
@endsection