@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-10 mb-4">
                <div class="card border-left-primary shadow h-100">
                    <div class="card-header">
                        <h3>Event Bookings</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Event</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><b>
                                            <h5>{{ $item->event_name }}</h5>
                                        </b></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td class="d-flex">
                                            <a onclick="return confirm('Are you sure?')" href="{{ route('delete.eventbooking',$item->id) }}" class="btn btn-danger"><i
                                                    class="fas fa-fw fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

