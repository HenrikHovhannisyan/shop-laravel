@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Contact Us</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12 col-md-6">
            <form action="{{ route('contacts.update',$contact->id) }}" method="POST" enctype="multipart/form-data"
                  class="mt-3">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" value="{{$contact->email}}" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            <input type="text" value="{{$contact->phone}}" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            <input type="text" value="{{$contact->address}}" name="address" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <strong>Instagram:</strong>
                            <input type="text" value="{{$contact->instagram}}" name="instagram" class="form-control" placeholder="Instagram">
                        </div>
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            <input type="text" value="{{$contact->facebook}}" name="facebook" class="form-control" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
