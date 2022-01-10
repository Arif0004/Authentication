@extends('layout.app')


@section('title', 'User verify')

@section('main_content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h4 class="text-center">User Verification Form </h4>
            <p>Please your eamil have to verify then you can access this appication</p>

            <a href="" class="btn btn-sm btn-primary">Send Verification Email</a>
            <br>
            <form action="{{route('logout')}}" method="POST">
                @csrf

                <div class="form-group">
                    <button class="btn btn-sm btn-success btn-block">Logout</button>
                </div>

               </form>


        </div>

    </div>
</div>


@stop
