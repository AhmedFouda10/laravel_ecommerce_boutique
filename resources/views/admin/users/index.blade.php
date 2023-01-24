@extends('layouts.admin')
@section('title')
    {{ trans('main_trans.Users') }}
@endsection


@section('content-title')
    {{ trans('main_trans.Users') }}
@endsection

@section('content-description')
    {{ trans('main_trans.Manage Users') }}
@endsection

@section('page-title')
    {{ trans('main_trans.Users') }}
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
                <a class="btn btn-primary mt-md-0 mt-2" href="{{ route('admin.users.create') }}">
                    {{ trans('main_trans.Add User') }}</a>
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
                                <th>{{ trans('main_trans.Email') }}</th>
                                <th>{{ trans('main_trans.Status') }}</th>
                                <th>{{ trans('main_trans.Roles') }}</th>
                                <th>{{ trans('main_trans.Action') }}</th>
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
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <label class="badge " style="background-color: #ff1d08">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                        <a href="{{ route('admin.users.show', $user->id) }}">
                            <i class="fa fa-eye btn_hover" title="Show"></i>
                        </a>
                        <a href="{{ route('admin.users.edit', $user->id) }}">
                            <i class="fa fa-edit btn_hover" title="Edit"></i>
                        </a>

                        <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();">
                            <i class="fa fa-trash btn_hover" title="Delete"></i>
                        </a>

                        <form id="delete-form" action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
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
            {!! $data->render() !!}
        </div>
    </div>
@endsection
