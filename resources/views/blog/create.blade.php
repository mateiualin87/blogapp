@extends('layouts')
@section('content')
    <div id="form-wrapper">
        <form action="{{route('blog.store')}}" method="POST" enctype='multipart/form-data'> 
            @csrf
            <div>
                <input type="text" id="title" name="title" placeholder="blog title">
            </div>
            <div>
                <input type="text" id="description" name="description" placeholder="blog description">
            </div>
            <div>
                <textarea name="blogBody" id="content" placeholder="write blog content" cols="30" rows="10"></textarea>
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