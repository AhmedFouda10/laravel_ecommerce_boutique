@extends('layouts.admin')
@section('title')
    Empty - فارغه
@endsection


@section('content-title')
    Empty
@endsection

@section('content-description')
    Empty Description
@endsection

@section('page-title')
    Empty
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <form class="form-inline search-form search-box">
                    <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search..">
                    </div>
                </form>
                    <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.category.create') }}"> Create New Category</a>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                <div class="table-responsive table-desi">
                    <table class="table list-digital all-package table-category " id="editableTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{!! $category->description !!}</td>
                                    <td>
                                        
                                    
                                            <a href="{{ route('admin.category.edit', $category->id) }}">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>
            
                                            <a href="{{ route('admin.category.delete', $category->id) }}">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            {{-- {!! $categories->render() !!} --}}
        </div>
    </div>
@endsection
