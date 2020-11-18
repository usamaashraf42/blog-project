@extends('layouts.master')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>

            @endif
        </div>
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($post as $post)
            <div class="post-preview">
                <a href="{{route('post',$post->id)}}">

                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$post->content}}
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">{{$post->user->name}}</a>
                    on {{\Carbon\Carbon::parse($post->created_at)->format('G F, Y')}}
                <i class="fa fa-comment"></i>{{$post->comments->count()}}</p>
            </div>
            <hr>
        @endforeach
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>
    @endsection



