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
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <form class="form-inline search-form search-box">
                <div class="form-group">
                    <input class="form-control-plaintext" type="search" placeholder="Search..">
                </div>
            </form>

            <a href="{{route('admin.product.create')}}" class="btn btn-primary mt-md-0 mt-2">Add New
                Product</a>
        </div>

        <div class="card-body">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive table-desi">
                <table class="table list-digital all-package table-category "
                    id="editableTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>

                            <td>
                                <img src="{{asset('backend/assets/images/products/'.$product->image)}}"
                                    data-field="image" alt="">
                            </td>

                            <td data-field="name">{{$product->name}}</td>

                            <td data-field="price">{!! $product->description !!}</td>

                            <td data-field="name">{{$product->price}}</td>
                            <td data-field="name">{{$product->quantity}}</td>
                            <td data-field="name">{{$product->Category->name}}</td>
                            <td data-field="name">{{$product->Brand->name}}</td>

                            <td>
                                <a href="{{route('admin.product.edit',$product->id)}}">
                                    <i class="fa fa-edit" title="Edit"></i>
                                </a>

                                <a href="{{route('admin.product.delete',$product->id)}}">
                                    <i class="fa fa-trash" title="Delete"></i>
                                </a>
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


