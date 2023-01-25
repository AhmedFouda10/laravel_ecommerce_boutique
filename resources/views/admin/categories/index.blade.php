@extends('layouts.admin')
@section('title')
    {{ trans('main_trans.Category') }}
@endsection


@section('content-title')
{{ trans('main_trans.Category') }}
@endsection

@section('content-description')
{{ trans('main_trans.List Category') }}
@endsection

@section('page-title')
{{ trans('main_trans.Category') }}
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
                @can('create category')
                <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.category.create') }}">{{ trans('main_trans.Create New Category') }}</a>
                @endcan
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
                                <th>{{ trans('main_trans.No') }}</th>
                                <th>{{ trans('main_trans.Image') }}</th>
                                <th>{{ trans('main_trans.Name') }}</th>
                                <th>{{ trans('main_trans.Description') }}</th>
                                {{-- <th>{{ trans('main_trans.Brand Name') }}</th> --}}
                                <th>{{ trans('main_trans.Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td><img src="{{asset('backend/assets/images/categories/'.$category->image)}}" alt=""></td>
                                    <td>{{ $category->name }}</td>
                                    <td>{!! $category->description !!}</td>
                                    {{-- <td>{{$category->Brands->name}}</td> --}}
                                    <td>
                                        <a href="{{ route('admin.category.show', $category->id) }}">
                                            <i class="fa fa-eye" title="Show Brands"></i>
                                        </a>
                                        @can('edit category')
                                        <a href="{{ route('admin.category.edit', $category->id) }}">
                                            <i class="fa fa-edit" title="Edit"></i>
                                        </a>
                                        @endcan

                                            @can('delete category')
                                            <a href="{{ route('admin.category.delete', $category->id) }}">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                            @endcan

                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $categories->links('pagination::bootstrap-5') !!} --}}
                </div>

            </div>

        </div>
    </div>
@endsection
