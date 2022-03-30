@extends('layouts.app')

@section('New User')

@section('content')
<h1>New User</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="erro">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="First Name:" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="E-mail:" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="Password:">
    <button type="submit">
        Send
    </button>
</form>
@endsection