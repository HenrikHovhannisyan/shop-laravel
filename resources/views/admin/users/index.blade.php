@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Users</h2>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>

            @foreach ($users as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                        @if($user->is_admin === 2)
                            <span class="text-danger "><b>Super Admin</b></span>
                        @elseIf($user->is_admin === 1)
                            <span class="text-success"><b>Admin</b></span>
                        @else
                            <span class="text-warning"><b>User</b></span>
                        @endif
                        @if($user->is_admin !== 2)
                                <form method="POST" action="{{ route('users.updateRole', ['user' => $user]) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="d-flex">
                                        <select class="form-select role_select" name="role">
                                            <option value="1" @if($user->is_admin == 1) selected @endif>Admin</option>
                                            <option value="0" @if($user->is_admin == 0) selected @endif>User</option>
                                        </select>

                                        <button class="btn btn-success" type="submit">
                                            <i class="fa-solid fa-check"></i>
                                        </button>
                                    </div>
                                </form>
                        @endif
                    </td>
                    <td>
                        @if(Auth::user()->id !== $user->id)
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="mt-3">
            {!! $users->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
@endsection
