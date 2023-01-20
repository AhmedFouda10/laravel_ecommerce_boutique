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
            <form class="form-inline search-form search-box">
                <div class="form-group">
                    <input class="form-control-plaintext" type="search" placeholder="Search..">
                </div>
            </form>
                <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.roles.create') }}"> Create New Role</a>
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
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-outline-info btn-sm p-2 edit_show" href="{{ route('admin.roles.show', $role->id) }}">Show</a>
                                @can('role-edit')
                                    <a class="btn btn-outline-success btn-sm p-2 edit_show"
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

        </div>
        {!! $roles->render() !!}
    </div>
</div>
@endsection


