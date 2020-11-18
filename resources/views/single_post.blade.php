@extends('layouts.master')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>Man must explore, and this is exploration at its greatest</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
                <div class="col-lg-8 col-md-10">
                    <h3 class="text-center">Post  {{$post->title}}  </h3>
                    {{$post->title}}
                    <p class="post-subtitle">
                        {{$post->content}}
                    </p>
                    Post by {{$post->user->name}}
                    {{\Carbon\Carbon::parse($post->created_at)->format('G F, Y')}}
                    <hr>
                    <div class="comments mb-2">
                        <h3>
                            Comments on this post
                        </h3>
                    </div>

                @foreach($post->comments as $comment)
                <div class="comments">
                   <p>{{$comment->content}}</p>
                    <p><small>by {{$comment->user->name}}</small>
                    <small> {{\Carbon\Carbon::parse($comment->created_at)->format('G F, Y')}}</small> </p>
                    <hr>
                </div>
                @endforeach
                </div>
    </article>

    <hr>
@endsection
