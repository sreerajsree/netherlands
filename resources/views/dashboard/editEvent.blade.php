@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit: {{ $event->name }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-8 mb-4">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            <img src="/images/{{ Session::get('image') }}">
                        @endif
                        <form action="{{ route('update.event',$event->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="map" class="col-sm-2 col-form-label">Map</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="map" id="map" cols="30" rows="10">{{ $event->map }}</textarea>
                                    {!! $event->map !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="body" id="mytextarea" required class="form-control" autofocus>{{ $event->body }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="image">
                                    <img src="{{ Storage::url('events/' . $event->image) }}" height="100" width="60"
                                        class="pt-3" alt="{{ $event->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time" class="col-sm-2 col-form-label">Time</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="time" name="time" value="{{ $event->time }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cost" class="col-sm-2 col-form-label">Cost</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cost" name="cost" value="{{ $event->cost }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="location" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="org_name" class="col-sm-2 col-form-label">Organizer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="org_name" name="org_name" value="{{ $event->org_name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="org_phone" class="col-sm-2 col-form-label">Organizer Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="org_phone" name="org_phone" value="{{ $event->org_phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="org_email" class="col-sm-2 col-form-label">Organizer Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="org_email" name="org_email" value="{{ $event->org_email }}">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
