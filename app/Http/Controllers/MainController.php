<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Service;
use App\Models\Retreat;
use App\Models\Eventbooking;
use Illuminate\Support\Facades\Auth;

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

    public function yogaPractices() {
        return view('pages.yoga.index');
    }

    public function ayuHealthcare() {
        return view('pages.ayu.index');
    }

    public function bodyFit() {
        return view('pages.body.index');
    }

    public function deepestchairYoga() {
        return view('pages.yoga.deeprest-chair-yoga');
    }

    public function trainyoutbreathYoga() {
        return view('pages.yoga.train-your-breath');
    }

    public function foundationalYoga() {
        return view('pages.yoga.foundational-yoga');
    }

    public function yopitrainingYoga() {
        return view('pages.yoga.yopi-training');
    }

    public function yogaTherapy() {
        return view('pages.yoga.yoga-therapy');
    }

    public function traumaYoga() {
        return view('pages.yoga.trauma-sensitive-yoga');
    }

    public function blog() {
        $blogs = Blog::orderBy('id','desc')->paginate(12);
        return view('pages.blog.index', compact('blogs'));
    }

    public function events() {
        $events = Event::orderBy('id','desc')->paginate(12);
        return view('pages.events.index', compact('events'));
    }

    public function viewBlog($slug) {
        $blog = Blog::where('slug', $slug)->first();
        $previous = Blog::where('id', '<', $blog->id)->first();
        $next = Blog::where('id', '>', $blog->id)->first();

        return view('pages.blog.view', compact('blog','previous','next'));
    }

    public function viewEvent($date, $slug) {
        $event = Event::where('slug', $slug)->first();
        $allevents = Event::orderBy('id', 'desc')->get();

        return view('pages.events.view', compact('event','allevents'));
    }

    public function eventBooking(Request $request) {

        $eventbooking = new Eventbooking;
        if(Auth::check() == true) {
            $eventbooking->user_id = auth()->user()->id;
        } else {
            $eventbooking->user_id = 0;
        }
        $eventbooking->event_name = $request->event_name;
        $eventbooking->name = $request->name;
        $eventbooking->email = $request->email;
        $eventbooking->phone = $request->phone;
        $eventbooking->nos = $request->nos;
        $eventbooking->message = $request->message;
        $eventbooking->save();

        toastr()->success('Booking Successfull', 'Success!');
        return redirect()->back();
    }

    public function updateEventbooking(Request $request, $id){
        $eventbooking = Eventbooking::find($id);
        if(Auth::check() == true) {
            $eventbooking->user_id = auth()->user()->id;
        } else {
            $eventbooking->user_id = 0;
        }
        $eventbooking->event_name = $request->event_name;
        $eventbooking->name = $request->name;
        $eventbooking->email = $request->email;
        $eventbooking->phone = $request->phone;
        $eventbooking->nos = $request->nos;
        $eventbooking->message = $request->message;
        $eventbooking->save();

        toastr()->success('Event Booking updated successfully', 'Success!');
        return redirect()->route('home');
    }

    public function storeRetreat(Request $request) {
        $retreat = new Retreat;
        $retreat->nop = $request->nop;
        if(Auth::check() == true) {
            $retreat->user_id = auth()->user()->id;
        } else {
            $retreat->user_id = 0;
        }
        $retreat->retreat_name = $request->retreat_name;
        $retreat->full_name = $request->full_name;
        $retreat->gender = $request->gender;
        $retreat->nationality = $request->nationality;
        $retreat->dob = $request->dob;
        $retreat->email = $request->email;
        $retreat->contact = $request->contact;
        $retreat->message = $request->message;
        $retreat->medical = $request->medical;
        $retreat->dietary = $request->dietary;
        $retreat->room = $request->room;
        $retreat->about_us = $request->about_us;
        $retreat->emer_name = $request->emer_name;
        $retreat->emer_email = $request->emer_email;
        $retreat->emer_number = $request->emer_number;
        $retreat->save();
        toastr()->success('Retreat Booking Successfull', 'Success!');
        return redirect()->back();
    }

    public function updateRetreat(Request $request, $id){
        $retreat = Retreat::find($id);
        $retreat->nop = $request->nop;
        if(Auth::check() == true) {
            $retreat->user_id = auth()->user()->id;
        } else {
            $retreat->user_id = 0;
        }
        $retreat->retreat_name = $request->retreat_name;
        $retreat->full_name = $request->full_name;
        $retreat->gender = $request->gender;
        $retreat->nationality = $request->nationality;
        $retreat->dob = $request->dob;
        $retreat->email = $request->email;
        $retreat->contact = $request->contact;
        $retreat->message = $request->message;
        $retreat->medical = $request->medical;
        $retreat->dietary = $request->dietary;
        $retreat->room = $request->room;
        $retreat->about_us = $request->about_us;
        $retreat->emer_name = $request->emer_name;
        $retreat->emer_email = $request->emer_email;
        $retreat->emer_number = $request->emer_number;
        $retreat->save();
        toastr()->success('Retreat Booking Successfull', 'Success!');
        return redirect()->back();
    }

    public function storeService(Request $request) {
        $service = new Service;
        if(Auth::check() == true) {
            $service->user_id = Auth::user()->id;
        } else {
            $service->user_id = 0;
        }
        $service->trainer = $request->trainer;
        $service->first_name = $request->first_name;
        $service->last_name = $request->last_name;
        $service->email = $request->email;
        $service->phone = $request->phone;
        $service->interest = implode(',', (array) $request['interest']);
        $service->message = $request->message;
        $service->day =implode(',', (array) $request['day']);
        $service->time = implode(',', (array) $request['time']);
        $service->place = implode(',', (array) $request['place']);
        $service->notes = $request->notes;
        $service->save();
        toastr()->success('Booking Successfull', 'Success!');
        return redirect()->back();
    }
}
