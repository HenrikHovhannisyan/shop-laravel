@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <!-- Card stats -->
                            <div class="row g-6 mb-6">
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="card shadow border-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Users</span>
                                                    <span class="h3 font-bold mb-0">{{$countUsers}}</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-success text-white text-lg rounded-circle">
                                                        <i class="fa-solid fa-users"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 mb-0 text-sm">
                                                <a href="{{route('categories.index')}}" class="badge badge-pill bg-soft-success text-success">
                                                    Users Page
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="card shadow border-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Categories</span>
                                                    <span class="h3 font-bold mb-0">{{$countCategory}}</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                                        <i class="fa-solid fa-list"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 mb-0 text-sm">
                                                <a href="{{route('categories.index')}}" class="badge badge-pill bg-soft-success text-success">
                                                    Categories Page
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="card shadow border-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Products</span>
                                                    <span class="h3 font-bold mb-0">{{$countProduct}}</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                                        <i class="fa-solid fa-shirt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 mb-0 text-sm">
                                                <a href="{{route('products.index')}}" class="badge badge-pill bg-soft-success text-success">
                                                    Products Page
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
