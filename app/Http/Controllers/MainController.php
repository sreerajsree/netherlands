<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class MainController extends Controller
{
    public function services() {
        return view('pages.services');
    }

    public function privateSessions() {
        return view('pages.private-sessions');
    }

    public function retreats() {
        return view('pages.retreats');
    }

    public function himalayan() {
        return view('pages.retreats.himalayan');
    }

    public function signUp() {
        return view('pages.retreats.signup');
    }

    public function belgian() {
        return view('pages.retreats.belgian');
    }

    public function hostRetreat() {
        return view('pages.host-retreat');
    }

    public function pricing() {
        return view('pages.pricing');
    }

    public function about() {
        return view('pages.about');
    }

    public function blog() {
        $blogs = Blog::orderBy('id','desc')->paginate(12);
        return view('pages.blog.index', compact('blogs'));
    }

    public function viewBlog($slug) {
        $blog = Blog::where('slug', $slug)->first();
        $previous = Blog::where('id', '<', $blog->id)->first();
        $next = Blog::where('id', '>', $blog->id)->first();

        return view('pages.blog.view', compact('blog','previous','next'));
    }
}
