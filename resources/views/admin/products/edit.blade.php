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
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.product.all') }}"> Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="card tab2-card">
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                                <li class="nav-item"><a class="nav-link active show" id="general-tab"
                                                        data-bs-toggle="tab" href="#general" role="tab"
                                                        aria-controls="general" aria-selected="true" data-original-title=""
                                                        title="">Create New Product</a></li>

                                            </ul>
                                            <form action="{{ route('admin.product.update',$product->id) }}" method="post" enctype="multipart/form-data" class="dropzone digits" id="singleFileUpload">
                                                @csrf


                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade active show" id="general" role="tabpanel"
                                                        aria-labelledby="general-tab">
                                                        <div class="form-group row">
                                                            <label for="validationCustom0"
                                                                class="col-xl-3 col-md-4"><span>*</span>
                                                                Name</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                <input class="form-control" id="validationCustom0"
                                                                    type="text" name="name" required value="{{(old('name') ? old('name') : $product->name)}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row editor-label">
                                                            <label class="col-xl-3 col-md-4"><span>*</span>
                                                                Description</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                <div class="editor-space">
                                                                    <textarea id="editor1" cols="30" rows="10" name="description" >{{$product->description}}</textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group row editor-label">
                                                            <label class="col-xl-3 col-md-4"><span>*</span>
                                                                Image</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                <div class="editor-space">
                                                                    <input type="file" class="form-control" name="image" id="" value="{{old('image')}}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="validationCustom0"
                                                                class="col-xl-3 col-md-4"><span>*</span>
                                                                Price</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                <input class="form-control" id="validationCustom0"
                                                                    type="number" name="price" required value="{{(old('price') ? old('price') : $product->price)}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="validationCustom0"
                                                                class="col-xl-3 col-md-4"><span>*</span>
                                                                Quentity</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                <input class="form-control" id="validationCustom0"
                                                                    type="number" name="quantity" required value="{{(old('quantity') ? old('quantity') : $product->quantity)}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="validationCustom0"
                                                                class="col-xl-3 col-md-4"><span>*</span>
                                                                Category</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                <select name="category_id" id="" required class="form-control">
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{$category->id}}" @if ($product->category_id==$category->id)
                                                                            selected
                                                                        @endif>{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="validationCustom0"
                                                                class="col-xl-3 col-md-4"><span>*</span>
                                                                Brand</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                <select name="brand_id" id="" required class="form-control">
                                                                    @foreach ($brands as $brand)
                                                                        <option value="{{$brand->id}}" @if ($product->brand_id==$brand->id)
                                                                            selected
                                                                        @endif>{{$brand->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                                <div class="pull-right">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
