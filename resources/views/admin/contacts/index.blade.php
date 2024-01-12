@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    Contact Us
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3 table-responsive">
            <tr>
                <th>Email</th>
                <th>phone</th>
                <th>Address</th>
                <th>Instagram</th>
                <th>facebook</th>
                <th width="280px">Action</th>
            </tr>

            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->instagram }}</td>
                    <td>{{ $contact->facebook }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
