@extends('layouts.master')

@section('content')

    <div class="col-sm-8">

        <h1>Sign In</h1>

        <hr>

        <form action="/login" method="POST">

            {{csrf_field()}}

            <div class="form-group">

                <label for="email">Email:</label>

                <input type="email" name="email" class="form-control">

            </div>

            <div class="form-group">

                <label for="password">Password:</label>

                <input type="password" name="password" class="form-control">

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