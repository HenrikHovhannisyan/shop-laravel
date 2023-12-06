@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Category</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <span>{{ $product->name }}</span>
                </div>
                <div class="form-group">
                    <strong>Image:</strong>
                    <div class="col-12 col-md-6">
                        @foreach(json_decode($product->images) as $imagePath)
                            <img src="{{asset($imagePath)}}" width="100" class="m-1">
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <strong>Price:</strong>
                    <span>{{ $product->price }}</span>
                </div>
                @if($product->discount)
                    <div class="form-group">
                        <strong>Discount:</strong>
                        <span>{{ $product->discount }}</span>
                    </div>
                @endif
                @if($product->material)
                    <div class="form-group">
                        <strong>Material:</strong>
                        <span>{{ $product->material }}</span>
                    </div>
                @endif
                @if($product->composition)
                    <div class="form-group">
                        <strong>Composition:</strong>
                        <span>{{ $product->composition }}</span>
                    </div>
                @endif
                @if($product->care_instructions)
                    <div class="form-group">
                        <strong>Care Instructions:</strong>
                        <span>{{ $product->care_instructions }}</span>
                    </div>
                @endif
                <div class="form-group">
                    <strong>Color:</strong>
                    <span>{{ $product->color }}</span>
                </div>
                <div class="form-group">
                    <strong>Size:</strong>
                    @foreach($size as $key => $value)
                        <span>{{ $value }}</span>
                        @if(!$loop->last)
                            ,
                        @endif
                    @endforeach
                </div>
                <div class="form-group">
                    <strong>Features:</strong>
                    <span>{!! html_entity_decode($product->features) !!}</span>
                </div>
                <div class="form-group">
                    <strong>Description:</strong>
                    <span>{!! html_entity_decode($product->description) !!}</span>
                </div>
                <div class="form-group">
                    <strong>Category:</strong>
                    <span>{{ $product->category->name }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
