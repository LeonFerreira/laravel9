@extends('layouts.app')

@section('title')
    {{$user->name}}
@endsection

@section('content')
<h1>{{ $user -> name }}'s Details </h1>

<ul>
    <li>{{ $user -> name}}</li>
    <li>{{ $user -> email}}</li>
</ul>
@endsection