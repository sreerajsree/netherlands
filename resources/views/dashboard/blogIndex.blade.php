@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="{{ route('add.blog') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add Blog</a>
        </div>

        <!-- Content Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-10 mb-4">
                <div class="card border-left-primary shadow h-100">
                    <div class="card-header">
                        <h3>Blogs</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>
                                            <img src="{{ Storage::url('images/' . $item->image) }}" height="60"
                                                width="100" alt="{{ $item->title }}">
                                        </td>
                                        <td><b>
                                                <h5 class="text-dark">{{ $item->title }}</h5>
                                            </b></td>
                                        <td>{{ $item->date }}</td>
                                        <td class="d-flex">
                                            <a target="_blank" href="{{ route('view.blog',$item->slug) }}" class="btn btn-primary mr-2"><i
                                                class="fas fa-fw fa-eye"></i></a>
                                            <a href="{{ route('edit.blog',$item->id) }}" class="btn btn-warning mr-2"><i
                                                    class="fas fa-fw fa-pen"></i></a>
                                            <a onclick="return confirm('Are you sure?')" href="{{ route('delete.blog',$item->id) }}" class="btn btn-danger"><i
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

