@extends('layouts.master')
@section('content')
    <div class="col-sm-8">
        <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">
                {{$post->title}}
            </a>
        </h2>

        <p class="blog-post-meta">

            {{$post->created_at->toFormattedDateString()}}

        </p>

        <p>{{$post->body}}</p>

        <hr>

        <ul class="list-group">

            @foreach($post->comments as $comment)

                <li class="list-group-item">

                   <strong>
                       {{$comment->created_at->diffForHumans()}}: &nbsp;
                   </strong>

                    {{$comment->body}}

                </li>

            @endforeach

        </ul>

        @if(auth()->check())

        <hr>

        <div class="card">

            <div class="card-body">

                <form action="/posts/{{$post->id}}/comments" method="POST">

                    {{csrf_field()}}

                    <div class="form-group">
                        <textarea class="form-control" name="body" id="body" cols="30" rows="5" placeholder="write your comment"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>

            </div>

        </div>

        @endif
        
    </div>
@endsection