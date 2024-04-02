<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog.index')->with('blogs', $blogs);

    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->blogBody,
            'image' => $newImageName
        ]);
        return redirect(route('blog.index')) -> with('Success', 'Blog created successfully!');
    }
}
