<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Event;
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
        return view('dashboard.dashboard');
    }

    public function blogIndex() {
        $blogs = Blog::orderBy('id','desc')->paginate(20);
        return view('dashboard.blogIndex', compact('blogs'));
    }

    public function eventIndex() {
        $events = Event::orderBy('id','desc')->paginate(20);
        return view('dashboard.eventIndex', compact('events'));
    }

    public function addBlog()
    {
        return view('dashboard.addBlog');
    }

    public function addEvent()
    {
        return view('dashboard.addEvent');
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
        return redirect()->route('blog.index')->with('success', 'Blog added successfully')->with('image', $imageName); 
    }

    public function storeEvent(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $event = new Event;
        $event->name = $request->name;
        $event->location = $request->location;
        $event->map = $request->map;
        $event->slug = Str::of($request->name)->slug('-');
        $event->user_id = auth()->user()->id;
        $event->date = $request->date;
        $event->body = $request->body;
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->storeAs('public/events', $imageName);
        $event->image = $imageName;
        $event->time = $request->time;
        $event->cost = $request->cost;
        $event->org_name = $request->org_name;
        $event->org_email = $request->org_email;
        $event->org_phone = $request->org_phone;
        $event->save();
        return redirect()->route('event.index')->with('success', 'Event added successfully')->with('image', $imageName); 
    }

    public function editBlog($id){
        $blog = Blog::find($id);
        return view('dashboard.editBlog', compact('blog'));
    }


    public function editEvent($id){
        $event = Event::find($id);
        return view('dashboard.editEvent', compact('event'));
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
        return redirect()->route('blog.index')->with('success', 'Blog updated successfully');
    }

    public function updateEvent(Request $request, $id){
        $event = Event::find($id);
        $event->name = $request->name;
        $event->location = $request->location;
        $event->map = $request->map;
        $event->slug = Str::of($request->name)->slug('-');
        $event->user_id = auth()->user()->id;
        $event->date = $request->date;
        $event->body = $request->body;
        if ($request->hasFile('image')) {
            Storage::delete('public/events/'.$event->image);
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->storeAs('public/events', $imageName);
            $event->image = $imageName;
        }
        $event->time = $request->time;
        $event->cost = $request->cost;
        $event->org_name = $request->org_name;
        $event->org_email = $request->org_email;
        $event->org_phone = $request->org_phone;
        $event->save();
        return redirect()->route('event.index')->with('success', 'Event updated successfully');
    }

    public function deleteBlog($id){
        $blog = Blog::find($id);
        Storage::delete('public/images/'.$blog->image);
        $blog->delete();
        toastr()->error('Blog Deleted Successfully', 'Deleted!');
        return back();
    }

    public function deleteEvent($id){
        $event = Event::find($id);
        Storage::delete('public/events/'.$event->image);
        $event->delete();
        toastr()->error('Event Deleted Successfully', 'Deleted!');
        return back();
    }
    
}
