@extends('layouts.master')

@section('content')

    <div class="col-sm-8">

        <h1>Register Page</h1>

        <hr>

        <form action="/register" method="POST">

            {{csrf_field()}}

            <div class="form-group">

                <label for="name">Name:</label>

                <input type="text" name="name" class="form-control">

            </div>

            <div class="form-group">

                <label for="email">Email:</label>

                <input type="email" name="email" class="form-control">

            </div>

            <div class="form-group">

                <label for="password">Password:</label>

                <input type="password" name="password" class="form-control">

            </div>

            <div class="form-group">

                <label for="password_confirmation">Confirm Your Password:</label>

                <input type="password" name="password_confirmation" class="form-control">

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Register</button>

            </div>

            <div class="form-group">

                @include('layouts.errors')

            </div>

        </form>

    </div>

@endsection