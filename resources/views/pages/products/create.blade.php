@extends('layouts.app')

@section('title', 'Create New Products')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{route('product.index')}}"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New Products</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></div>
                    <div class="breadcrumb-item">Create New Products</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create New Products</h2>
                <p class="section-lead">
                    On this page you can create a new Products and fill in all fields.
                </p>

                <div class="row">
                    <div class="col-12">
                        <form id="form-products" action="{{route('product.store')}}" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Write Your Products</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Nama Product</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>
                                            @error('name')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="description">Description</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote-simple form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
                                            @error('description')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="price">Price</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Rp.</div>
                                                </div>
                                                <input type="text" id="price" class="form-control num @error('price') is-invalid @enderror" name="price">
                                                @error('price')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="stock">Stock</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="input-group">
                                                <input type="text" id="stock" class="form-control num @error('stock') is-invalid @enderror" name="stock">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Buah</div>
                                                </div>
                                                @error('stock')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" name="category">Category</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="category" value="snack" class="selectgroup-input" checked=""><span class="selectgroup-button">Snack</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="category" value="food" class="selectgroup-input"><span class="selectgroup-button">Food</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="category" value="drink" class="selectgroup-input"> <span class="selectgroup-button">Drink</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="category" value="lainnya" class="selectgroup-input"><span class="selectgroup-button">Lainnya</span>
                                                </label>
                                            </div>
                                            @error('category')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <a class="btn btn-warning" href="{{route('product.index')}}">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.num').keyup(function () {
                if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
                    this.value = this.value.replace(/[^0-9\.]/g, '');
                }
            });
        })
    </script>
@endpush
