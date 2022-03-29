@extends('layouts.app')

@section('New User')

@section('content')
<h1>New User</h1>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="First Name:">
    <input type="email" name="email" placeholder="E-mail:">
    <input type="password" name="password" placeholder="Password:">
    <button type="submit">
        Send
    </button>
</form>
@endsection