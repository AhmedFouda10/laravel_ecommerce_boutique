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
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.roles.create') }}"> Create New Role</a>
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
                        <th style="color: #fff" width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-outline-info btn-sm p-2" href="{{ route('admin.roles.show', $role->id) }}">Show</a>
                                @can('role-edit')
                                    <a class="btn btn-outline-success btn-sm p-2"
                                        href="{{ route('admin.roles.edit', $role->id) }}">Edit</a>
                                @endcan
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-outline-primary btn-sm p-2']) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        {!! $roles->render() !!}
    </div>
</div>
@endsection


