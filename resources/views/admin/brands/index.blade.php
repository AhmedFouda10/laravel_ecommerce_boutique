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
            <div class="pull-left">
                <h2>Brand</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.brand.create') }}"> Create New Brand</a>
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
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{!! $brand->description !!}</td>
                            <td>
                                <a class="btn btn-outline-success btn-sm" href="{{route('admin.brand.edit',$brand->id)}}">edit</a>
                                <a class="btn btn-outline-primary btn-sm" href="{{route('admin.brand.delete',$brand->id)}}">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        {{-- {!! $categories->render() !!} --}}
    </div>
</div>
@endsection

