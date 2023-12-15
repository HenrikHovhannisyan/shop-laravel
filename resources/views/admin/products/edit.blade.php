@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
        <div class="col-12">
            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data"
                  class="mt-3">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group col-lg-3">
                        <strong>
                            Name:
                            <span class="text-danger">*</span>
                        </strong>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                               placeholder="Name" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Image:</strong>
                        @foreach(json_decode($product->images) as $imagePath)
                            <img src="{{asset($imagePath)}}" width="100px" class="m-1">
                        @endforeach
                        <input type="file" name="images[]" class="form-control" placeholder="image" multiple>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <strong>Price:
                                    <span class="text-danger">*</span>
                                </strong>
                                <input type="number" name="price" value="{{ $product->price }}" id="price" class="form-control" placeholder="Price" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <strong>Discount Percent:</strong>
                                <input type="number" name="discount" value="{{ $product->discount }}" id="discount_percent" class="form-control" placeholder="Discount Percent">
                            </div>
                            <div class="form-group col-lg-4">
                                <strong>Discount Price:</strong>
                                <input type="number" id="discount" value="{{$discount}}" class="form-control" placeholder="Discount Price" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Material:</strong>
                        <input type="text" name="material" value="{{ $product->material }}" class="form-control"
                               placeholder="Material">
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Composition:</strong>
                        <input type="text" name="composition" value="{{ $product->composition }}" class="form-control"
                               placeholder="Composition">
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Care Instructions:</strong>
                        <input type="text" name="care_instructions" value="{{ $product->care_instructions }}"
                               class="form-control" placeholder="Composition">
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Color:
                            <span class="text-danger">*</span>
                        </strong>
                        <input type="text" name="color" value="{{ $product->color }}" class="form-control"
                               placeholder="Color" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Size:
                            <span class="text-danger">*</span>
                        </strong>
                        <div class="d-flex">
                            @foreach($availableSizes as $size)
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="checkbox" name="size[]" value="{{ $size }}" id="{{ $size }}"
                                        {{ in_array($size, $selectedSizes) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="{{ $size }}">{{ $size }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Category:
                            <span class="text-danger">*</span>
                        </strong>
                        <select name="category_id" class="form-control" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if($product->category_id == $category->id) selected @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Features:
                            <span class="text-danger">*</span>
                        </strong>
                        <textarea name="features" id="features" class="form-control" placeholder="Features">
                            {{ $product->features }}
                        </textarea>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Description:
                            <span class="text-danger">*</span>
                        </strong>
                        <textarea name="description" id="description" class="form-control" placeholder="Description">
                            {{ $product->description }}
                        </textarea>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        ClassicEditor.create(document.querySelector("#features"), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList',
                ],
                shouldNotGroupWhenFull: false
            }
        }).catch((error) => {
            console.error(error);
        });
        ClassicEditor.create(document.querySelector("#description"), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList',
                ],
                shouldNotGroupWhenFull: false
            }
        }).catch((error) => {
            console.error(error);
        });
    </script>
@endsection
