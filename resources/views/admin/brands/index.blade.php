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
                <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.brand.create') }}"> Create New Brand</a>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{!! $brand->description !!}</td>
                            <td>
                                <a href="{{route('admin.brand.edit',$brand->id)}}">
                                    <i class="fa fa-edit" title="Edit"></i>
                                </a>
                                <a href="{{route('admin.brand.delete',$brand->id)}}">
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

