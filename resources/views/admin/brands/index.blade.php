@extends('layouts.admin')
@section('title')
{{ trans('main_trans.Brand') }}
@endsection


@section('content-title')
{{ trans('main_trans.Brand') }}
@endsection

@section('content-description')
{{ trans('main_trans.List Brand') }}
@endsection

@section('page-title')
{{ trans('main_trans.Brand') }}
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
                @can('create brand')
                    <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.brand.create') }}"> {{ trans('main_trans.Add Brand') }}</a>
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
                                <th>{{ trans('main_trans.Name') }}</th>
                                <th>{{ trans('main_trans.Description') }}</th>
                                <th>{{ trans('main_trans.Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{!! $brand->description !!}</td>
                                    <td>
                                        @can('edit brand')
                                            <a href="{{ route('admin.brand.edit', $brand->id) }}">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>
                                        @endcan

                                        @can('delete brand')
                                            <a href="{{ route('admin.brand.delete', $brand->id) }}">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        @endcan

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
