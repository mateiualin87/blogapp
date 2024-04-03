@extends('layouts')
@section('content')
    <div id="form-wrapper">
        <form action="{{route('blog.update', $blog->id)}}" method="POST" enctype='multipart/form-data'> 
            @method('PATCH')
            @csrf
            <div>
                <input type="text" id="title" name="title" placeholder="blog title" value="{{$blog->title}}">
            </div>
            <div>
                <input type="text" id="description" name="description" placeholder="blog description" value="{{$blog->description}}">
            </div>
            <div>
                <textarea name="blogBody" id="content" cols="30" rows="10">{{$blog->content}}</textarea>
            </div>
            <div>
                <input type="file" id="file" name="image">
            </div>
            <div>
            <button type="submit" class="button" id="button-form">Submit</button>
            </div>
        </form>
    </div>
@endsection