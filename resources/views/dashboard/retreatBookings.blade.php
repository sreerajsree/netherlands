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
                        <h3>Retreat Bookings</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Retreat</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No. of participants</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($myretreats as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->retreat_name }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->nop }}</td>
                                        <td class="d-flex">
                                            <a onclick="return confirm('Are you sure?')"
                                                href="{{ route('delete.retreatbooking', $item->id) }}"
                                                class="btn btn-danger link-light btn-sm"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></a>
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

