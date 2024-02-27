<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(20);
        return view('dashboard.dashboard', compact('blogs'));
    }

    public function addBlog()
    {
        return view('dashboard.addBlog');
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->slug = Str::of($request->title)->slug('-');
        $blog->user_id = auth()->user()->id;
        $blog->body = $request->body;
        $blog->date = \now();
        $blog->author = 'House for Positive Change';
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->storeAs('public/images', $imageName);
        $blog->image = $imageName;
        $blog->save();
        return back()
        ->with('success', 'Blog added successfully')
        ->with('image', $imageName); 
    }

    public function editBlog($id){
        $blog = Blog::find($id);
        return view('dashboard.editBlog', compact('blog'));
    }
    
    public function updateBlog(Request $request, $id){
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->slug = Str::of($request->title)->slug('-');
        $blog->user_id = auth()->user()->id;
        $blog->body = $request->body;
        $blog->date = \now();
        $blog->author = 'House for Positive Change';
        if ($request->hasFile('image')) {
            Storage::delete('public/images/'.$blog->image);
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->storeAs('public/images', $imageName);
            $blog->image = $imageName;
        }
        $blog->save();
        return back()
        ->with('success', 'Blog updated successfully');
    }

    public function deleteBlog($id){
        $blog = Blog::find($id);
        Storage::delete('public/images/'.$blog->image);
        $blog->delete();
        toastr()->error('Blog Deleted Successfully', 'Deleted!');
        return back();
    }
    
}
