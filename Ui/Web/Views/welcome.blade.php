@extends('ui::layouts.empty')

@section('title', __('dashboard::home.title'))

@section('page')
    <h1>Welcome</h1>
    <a href="{{ route('login') }}">Login</a>
@endsection