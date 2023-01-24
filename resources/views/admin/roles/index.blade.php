@extends('layouts.admin')
@section('title')
{{ trans('main_trans.Roles') }}

@endsection


@section('content-title')
{{ trans('main_trans.Roles') }}

@endsection

@section('content-description')
{{ trans('main_trans.Manage Role') }}
@endsection

@section('page-title')
{{ trans('main_trans.Roles') }}
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
                <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.roles.create') }}"> {{ trans('main_trans.Add Role') }}</a>
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
                        <th>{{ trans('main_trans.Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>

                                <a href="{{ route('admin.roles.show', $role->id) }}">
                                    <i class="fa fa-eye btn_hover" title="Show"></i>
                                </a>
                                <a href="{{ route('admin.roles.edit', $role->id) }}">
                                    <i class="fa fa-edit btn_hover" title="Edit"></i>
                                </a>

                                <a href="{{ route('admin.roles.destroy', $role->id) }}" onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">
                                    <i class="fa fa-trash btn_hover" title="Delete"></i>
                                </a>

                                <form id="delete-form" action="{{ route('admin.roles.destroy', $role->id) }}" method="POST"
                                    class="d-none">
                                    {{ method_field('delete') }}
                                    @csrf
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>

        </div>
        {!! $roles->render() !!}
    </div>
</div>
@endsection


