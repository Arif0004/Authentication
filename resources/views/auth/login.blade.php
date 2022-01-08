@extends('layout.app')


@section('title', 'User Login')

@section('main_content')

<div class="container">
    <div class="row justify-content-center mt">
        <div class="col md-6">
            <h4 class="text-center">User Login </h4>
                <form action="">
                    <div class="form-group my-4">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="pssword">
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-sm btn-success btn-block">Login</button>
                    </div>

                </form>


        </div>

    </div>
</div>


@stop
