@extends('layouts.master')

@section('content')

    <div class="col-sm-8">
        <h1>Publish Post</h1>
        <form action="/posts" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>

            <div class="form-group">
                <label for="body">Post Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            <div class="form-group">
                @include('layouts.errors')
            </div>
        </form>
    </div>

@endsection