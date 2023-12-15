@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th scope="col">
                        <strong>Name</strong>
                    </th>
                    <th scope="col">
                        <strong>Price</strong>
                    </th>
                    @if($product->discount)
                        <th scope="col">
                            <strong>Discount</strong>
                        </th>
                    @endif
                    @if($product->material)
                        <th scope="col">
                            <strong>Material</strong>
                        </th>
                    @endif
                    @if($product->composition)
                        <th scope="col">
                            <strong>Composition</strong>
                        </th>
                    @endif
                    @if($product->care_instructions)
                        <th scope="col">
                            <strong>Care Instructions</strong>
                        </th>
                    @endif
                    <th scope="col">
                        <strong>Color</strong>
                    </th>
                    <th scope="col">
                        <strong>Size</strong>
                    </th>
                    <th scope="col">
                        <strong>Category</strong>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>{{ $product->name }}</th>
                    <td>{{ $product->price }}</td>
                    @if($product->discount)
                        <td>{{ $product->discount }}%</td>
                    @endif
                    @if($product->material)
                        <td>{{ $product->material }}</td>
                    @endif
                    @if($product->composition)
                        <td>{{ $product->composition }}</td>
                    @endif
                    @if($product->care_instructions)
                        <td>{{ $product->care_instructions }}</td>
                    @endif
                    <td>{{ $product->color }}</td>
                    <td>
                        @foreach($size as $key => $value)
                            <span>{{ $value }}</span>
                            @if(!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $product->category->name }}</td>
                </tr>
                </tbody>
            </table>
            <div class="col-12">
                <div class="row mt-2">
                    <div class="col-12 col-md-6 border rounded">
                        <strong>Features:</strong>
                        <hr>
                        <span>{!! html_entity_decode($product->features) !!}</span>
                    </div>
                    <div class="col-12 col-md-6 border rounded">
                        <strong>Description:</strong>
                        <hr>
                        <span>{!! html_entity_decode($product->description) !!}</span>
                    </div>
                    <div class="col-12">
                        <strong>Image:</strong><br>
                        @foreach(json_decode($product->images) as $imagePath)
                            <img src="{{asset($imagePath)}}" width="200" class="m-1 img-fluid">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
