@extends('layouts.master')

@section('content')
<div class="container c-home">
    span.
    U bent ingelogd as {{ Auth::user()->name }}
    <div class="c-posts">
    @foreach ($list ?? '' as $item)
            <div class="c-post">
                <p class="title">{{ $item->text }}</p>
                <image>
                    <img class="img" src="https://d2uolguxr56s4e.cloudfront.net/img/kartrapages/video_player_placeholder.gif" alt="">
                </image>
                <div class="c-post-info">
                    <p class="description">{{  $item->description }}</p>
                    <p class="name">Creator:{{  $item->name }}</p>
                </div>
                @auth()
                <div class="c-post-buttons">
                    <a class="btn-primary" style="background: green" href="edit/{{$item->id}}">Edit</a>
                    <a class="btn-primary" style="background: red" href="delete/{{$item->id}}">Delete</a>
                </div>
                @endauth
            </div>
        @endforeach
    </div>
</div>
@endsection

