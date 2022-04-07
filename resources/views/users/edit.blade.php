@extends('layouts.app')

@section('title', "Edit User {$user->name}")

@section('content')
<h1>Edit User {{ $user->name }}</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="erro">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="First Name:" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Password:">
    <button type="submit">
        Send
    </button>
</form>
@endsection