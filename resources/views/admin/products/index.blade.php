@extends('layouts.admin')
@section('title')
{{ trans('main_trans.Product') }}
@endsection


@section('content-title')
{{ trans('main_trans.Product') }}
@endsection

@section('content-description')
    Empty Description
@endsection

@section('page-title')
{{ trans('main_trans.Product') }}
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <form class="form-inline search-form search-box">
                    <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search..">
                    </div>
                </form>
                @can('create product')
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary mt-md-0 mt-2">{{ trans('main_trans.Add Product') }}</a>
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
                                <th>{{ trans('main_trans.Price') }}</th>
                                <th>{{ trans('main_trans.Quantity') }}</th>
                                <th>{{ trans('main_trans.Category Name') }}</th>
                                <th>{{ trans('main_trans.Brand Name') }}</th>
                                <th>{{ trans('main_trans.Option') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>

                                    <td>
                                        <img src="{{ asset('backend/assets/images/products/' . $product->image) }}"
                                            data-field="image" alt="">
                                    </td>

                                    <td data-field="name">{{ $product->name }}</td>

                                    <td data-field="price">{!! $product->description !!}</td>

                                    <td data-field="name">{{ $product->price }}</td>
                                    <td data-field="name">{{ $product->quantity }}</td>
                                    <td data-field="name">{{ $product->Category->name }}</td>
                                    <td data-field="name">{{ $product->Brand->name }}</td>

                                    <td>
                                        @can('edit create')
                                            <a href="{{ route('admin.product.edit', $product->id) }}">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>
                                        @endcan
                                        @can('delete product')
                                            <a href="{{ route('admin.product.delete', $product->id) }}">
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
        </div>
    </div>
@endsection
