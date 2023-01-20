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
                <h2>Users Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New User</a>
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
                        <th style="color: #fff">Email</th>
                        <th style="color: #fff">Status</th>
                        <th style="color: #fff">Roles</th>
                        <th style="color: #fff" width="280px">Action</th>
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
                        <span class="label badge badge-success">
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
                       <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                  @endif
                </td>
                <td>
                   <a class="btn btn-outline-info btn-sm p-2" href="{{ route('admin.users.show',$user->id) }}">Show</a>
                   <a class="btn btn-outline-success btn-sm p-2" href="{{ route('admin.users.edit',$user->id) }}">Edit</a>
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


