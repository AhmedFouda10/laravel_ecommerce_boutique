@extends('layouts.admin')
@section('title')
Users || Multikart Admin Panel
@endsection
@section('content')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>User
                            <small>Manage User</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <h2>Category</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('admin.category.create') }}"> Create New Category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif


                        <table class="table table-bordered table-striped text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th style="color: #fff">No</th>
                                    <th style="color: #fff">Name</th>
                                    <th style="color: #fff">Description</th>
                                    <th style="color: #fff" width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{!! $category->description !!}</td>
                                        <td>
                                            <a class="btn btn-outline-success btn-sm" href="{{route('admin.category.edit',$category->id)}}">edit</a>
                                            <a class="btn btn-outline-primary btn-sm" href="{{route('admin.category.delete',$category->id)}}">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    {{-- {!! $categories->render() !!} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
