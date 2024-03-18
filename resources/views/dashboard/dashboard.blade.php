@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{{ route('add.blog') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add Blog</a>
        </div>

    </div>
@endsection
