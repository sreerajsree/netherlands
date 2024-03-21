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
                        <h3>Service Bookings</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Trainer Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">What are you interested in?</th>
                                    <th scope="col">Preferred days of the week for your appointment?
                                    </th>
                                    <th scope="col">Preferred time of day?</th>
                                    <th scope="col">Where would you like to have the appointment?
                                    </th>
                                    <th scope="col">Booking Status</th>
                                    <th scope="col">Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($myservices as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->trainer }}</td>
                                        <td>{{ $item->first_name }} {{ $item->first_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->interest }}</td>
                                        <td>{{ $item->day }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->place }}</td>
                                        <td>
                                            @if ($item->status == 0)
                                                <button
                                                    class="btn btn-success btn-sm">Booked</button>
                                            @else
                                                <button
                                                    class="btn btn-danger btn-sm">
                                                    Cancelled</button>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a onclick="return confirm('Are you sure?')"
                                                href="{{ route('cancel.service', $item->id) }}"
                                                class="btn btn-danger link-light btn-sm">Cancel</a>
                                        </td>
                                    </tr>
                                @empty
                                    No Bookings found
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
