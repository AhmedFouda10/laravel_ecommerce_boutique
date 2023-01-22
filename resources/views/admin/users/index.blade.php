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
                <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.users.create') }}"> Create New User</a>
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
                        <th>Email</th>
                        <th>Status</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
             @foreach ($data as $key => $user)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->status == 'مفعل')
                        <span class="label badge" style="background-color: #ff1d08">
                            {{ $user->status }}
                        </span>
                    @else
                        <span class="label badge text-danger">
                            </div>{{ $user->status }}
                        </span>
                    @endif
                </td>
                <td>
                  @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                       <label class="badge " style="background-color: #ff1d08">{{ $v }}</label>
                    @endforeach
                  @endif
                </td>
                <td>
                   <a class="btn btn-outline-info btn-sm p-2 edit_show" href="{{ route('admin.users.show',$user->id) }}">Show</a>
                   <a class="btn btn-outline-success btn-sm p-2 edit_show" href="{{ route('admin.users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-outline-primary btn-sm p-2']) !!}
                    {!! Form::close() !!}
                </td>
              </tr>
             @endforeach
                </tbody>
            </table>

        </div>
        {!! $data->render() !!}
    </div>
</div>
@endsection


