@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
@endsection

@section('content')
<div class="signin">
</div>
<div class="namf">
    <h2>Already
        <abbr class="let">SIGNED UP</abbr>? Log In!</h2>
    <h2>Let's make you some
        <abbr class="let">money</abbr>!</h2>
    <form id="signin" method="POST" action="{{ route('login') }}">
        @csrf
        <lable>Username</lable>
        <br>
        <input type="text" name="username" placeholder="Input your username here">
        <br>
        <lable>Password</lable>
        <br>
        <input type="password" name="password" placeholder="Input your password here">
        <br>
        <div class="suc">
            <a href="javascript:{}" onclick="document.getElementById('signin').submit(); return false;">Log In</a>
        </div>
        <br>
    </form>
    <div style="alignment: center">
        <h2>
            <abbr class="let">---------------</abbr> OR
            <abbr class="let">---------------</abbr>
        </h2>
        <h2>Get started
            <abbr class="let">TODAY</abbr>with
            <abbr class="let">US</abbr>!</h2>
        <a href="{{ route('register') }}" class="let">SIGN UP NOW!</a>
    </div>
</div>
@endsection
