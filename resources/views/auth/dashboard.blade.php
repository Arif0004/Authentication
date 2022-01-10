@extends('layout.app')


@section('title', 'User Dashboard')

@section('main_content')

<div class="container">

    <h1>Hi, {{auth()->user()->name ?? 'NULL'}}</h1>
   <form action="{{route('logout')}}" method="POST">
    @csrf

    <div class="form-group">
        <button class="btn btn-sm btn-success btn-block">Logout</button>
    </div>

   </form>
</div>


@stop
