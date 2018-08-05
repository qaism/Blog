@extends('layouts.master')

@section('content')

    <div class="col-sm-8">
        <h1 class="hhh">Publish Post</h1>
        <form action="/posts" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>

            <div class="form-group">
                <label for="body">Post Body</label>
                <textarea class="form-control" name="body" id="summernote" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            <div class="form-group">
                @include('layouts.errors')
            </div>
        </form>
    </div>


    <script>

        $(document).ready(function() {
            $('#summernote').summernote();
        });

    </script>

@endsection