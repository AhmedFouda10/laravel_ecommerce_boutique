@extends('layouts.admin')
@section('title')
    Edit User || Multikart Admin Panel
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
                            <li class="breadcrumb-item active">Edit</li>
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
                                <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
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
                                <div class="col-sm-12">
                                    <div class="card tab2-card">
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                                <li class="nav-item"><a class="nav-link active show" id="account-tab"
                                                        data-bs-toggle="tab" href="#account" role="tab" aria-controls="account"
                                                        aria-selected="true" data-original-title="" title="">Edit User</a></li>
                                            </ul>
                                            {!! Form::model($user, ['method' => 'PATCH','route' => ['admin.users.update', $user->id]]) !!}
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade active show" id="account" role="tabpanel"
                                                    aria-labelledby="account-tab">
                                                    {{-- <form class="needs-validation user-add" novalidate=""> --}}


                                                        <div class="form-group row">
                                                            <label for="validationCustom1"
                                                                class="col-xl-3 col-md-4"><span>*</span>Name</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="validationCustom2"
                                                                class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="validationCustom3"
                                                                class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                {!! Form::password('password', array('class' => 'form-control')) !!}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="validationCustom4"
                                                                class="col-xl-3 col-md-4"><span>*</span> Confirm
                                                                Password</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="validationCustom4"
                                                                class="col-xl-3 col-md-4"><span>*</span> Role:</label>
                                                            <div class="col-xl-8 col-md-7">
                                                                {!! Form::select('roles_name[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                                                                {{-- {!! Form::select('roles[]', $roles, array('class' => 'form-control','multiple')) !!} --}}
                                                            </div>
                                                        </div>
                                                    {{-- </form> --}}

                                                </div>

                                            </div>
                                            <div class="pull-right">

                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                            {!! Form::close() !!}
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
