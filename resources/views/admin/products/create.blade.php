@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Product</h2>
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
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-3">
                        <strong>
                            Name:
                            <span class="text-danger">*</span>
                        </strong>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Images:
                            <span class="text-danger">*</span>
                        </strong>
                        <input type="file" name="images[]" class="form-control" multiple required>
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Price:
                            <span class="text-danger">*</span>
                        </strong>
                        <input type="number" name="price" class="form-control" placeholder="Price" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Discount:</strong>
                        <input type="number" name="discount" class="form-control" placeholder="Discount">
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Material:</strong>
                        <input type="text" name="material" class="form-control" placeholder="Material">
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Composition:</strong>
                        <input type="text" name="composition" class="form-control" placeholder="Composition">
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Care Instructions:</strong>
                        <input type="text" name="care_instructions" class="form-control" placeholder="Composition">
                    </div>
                    <div class="form-group col-lg-3">
                        <strong>Color:
                            <span class="text-danger">*</span>
                        </strong>
                        <input type="text" name="color" class="form-control" placeholder="Color" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Size:
                            <span class="text-danger">*</span>
                        </strong>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="size[]" value="XS" id="XS">
                            <label class="form-check-label" for="XS">XS</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="size[]" value="S" id="S">
                            <label class="form-check-label" for="S">S</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="size[]" value="M" id="M">
                            <label class="form-check-label" for="M">M</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="size[]" value="L" id="L">
                            <label class="form-check-label" for="L">L</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="size[]" value="XL" id="XL">
                            <label class="form-check-label" for="XL">XL</label>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Category:
                            <span class="text-danger">*</span>
                        </strong>
                        <select name="category_id" class="form-control" required>
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Features:
                            <span class="text-danger">*</span>
                        </strong>
                        <textarea name="features" class="form-control" placeholder="Features" required></textarea>
                    </div>
                    <div class="form-group col-lg-6">
                        <strong>Description:
                            <span class="text-danger">*</span>
                        </strong>
                        <textarea name="description" class="form-control" placeholder="Description" required></textarea>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
@endsection
