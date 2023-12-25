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
                    <td>
                        @if($user->is_admin === 2)
                            <span class="text-danger">Super Admin</span>
                        @elseIf($user->is_admin === 1)
                            <span class="text-success">Admin</span>
                        @else
                            <span class="text-warning">User</span>
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
