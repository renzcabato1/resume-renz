@extends('layouts.header')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h3>Login Here</h3>

    <label for="username">Email</label>
    <input id="username" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

    <label for="password">Password</label>
    <input id="password" type="password" placeholder="Password"  name="password" required>
   
    <button>Log In</button>
    <br>
    @if($errors->any())
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong><small>{{$errors->first()}}</small></strong>
        </div>
    @endif
</form>
@endsection
