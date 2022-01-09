@extends('layout.app')


@section('title', 'registration')

@section('main_content')

<div class="container">
    <div class="row justify-content-center mt">
        <div class="col md-6">
            <h4 class="text-center">User Registration </h4>
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="form-group my-4">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group my-4">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group my-4">
                        <input type="password" class="form-control" placeholder="Password" name="pssword">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="pssword_confirmation">
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-sm btn-success btn-block">Register</button>
                    </div>


                </form>
                <a href="{{route('login')}}" class="btn btn-link">Login</a>
                <a href="{{route('dashboard')}}" class="btn btn-link">dashboard</a>

        </div>

    </div>
</div>


@stop
