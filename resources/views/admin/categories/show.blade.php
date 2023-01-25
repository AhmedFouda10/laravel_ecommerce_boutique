@extends('layouts.admin')
@section('title')
{{ trans('main_trans.Roles') }}
@endsection


@section('content-title')
{{ trans('main_trans.Roles') }}
@endsection

@section('content-description')
{{ trans('main_trans.Show Roles') }}
@endsection

@section('page-title')
{{ trans('main_trans.Roles') }}
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.category.all') }}"> {{ trans('main_trans.Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="account-tab"
                                        data-bs-toggle="tab" href="#account" role="tab"
                                        aria-controls="account" aria-selected="true" data-original-title=""
                                        title="">{{ trans('main_trans.Show Brands') }}</a></li>
                            </ul>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ trans('main_trans.Brand') }}:</strong>
                                    @if (isset($brands ) && $brands->count() > 0)
                                        @foreach ($brands as $brand)
                                        <span style="background-color: #FF4C3B;color:#fff">{{ $brand->name }}</span>
                                        @endforeach
                                    @endif


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
