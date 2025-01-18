<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexBlog()
    {
        $blog = Blog::latest()->get();
        return view('admin.blog.index', compact('blog'));
    }

    public function storeBlog(Request $request)
    {
        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('blog-cover', 'public');
        }

        $slug = Str::slug($request->title); 

        Blog::create([
            'slug' => $slug,
            'cover' => $coverPath,
            'title' => $request->title,
            'category' => $request->category,
            'writer' => $request->writer,
            'content' => $request->content
        ]);

        return response()->json(['message' => 'Store Data Berhasil!'], 201);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return response()->json(['success' => 'Delete Successfully']);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $slug = Str::slug($request->title); 
        $blog->update([
            'slug' => $slug,
            'title' => $request->title,
            'category' => $request->category,
            'writer' => $request->writer,
            'content' => $request->content
        ]);
        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('hero-section', 'public');
            $blog->update([
                'cover' => $coverPath,
            ]);
        };

        return response()->json(['message' => 'Update Data Berhasil!'], 201);
    }
}
