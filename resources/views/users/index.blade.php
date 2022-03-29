@extends('layouts.app')

@section('content')
<h1>
    Users
    (<a href="{{ route('users.create') }}">+</a>)
</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user -> name }} - 
            {{ $user -> email}}
            <a href="{{ route('users.show', $user -> id) }}"> | Details</a>
        </li>
    @endforeach
</ul>
@endsection