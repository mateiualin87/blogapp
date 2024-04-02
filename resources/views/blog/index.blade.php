@extends('layouts')
@section('content')
    <div class="blog-wrapper">
        @foreach($blogs as $blog)
        <div class="blog-card">
        <img src="{{asset('images/'.$blog->image)}}" alt="">
            <div class="blog-content"> 
                <div class="title">{{$blog->title}}</div>
                <div class="description">{{$blog->description}}</div>
                <div class="date">{{$blog->created_at}}</div>
            </div>
        <div class="button-wrapper">
            <div class="button">Read More</div>
        </div>
        </div>
        @endforeach
    </div>
@endsection