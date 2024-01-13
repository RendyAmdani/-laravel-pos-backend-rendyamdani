@extends('layouts.app')

@section('title', 'Products')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Products</h1>
                <div class="section-header-button">
                    <a href="{{route('product.create')}}"
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></div>
                    <div class="breadcrumb-item">All Products</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">@include('layouts.alert')</div>
                </div>

                <h2 class="section-title">Products</h2>
                <p class="section-lead">
                    You can manage all Products, such as editing, deleting and more.
                </p>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="get" action="{{route('product.index')}}">
                                        <div class="input-group">
                                            <input type="text" name="name"
                                                class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table table-bordered">
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">PRODUCT</th>
                                            <th class="text-center">KATEGORI</th>
                                            <th class="text-center">STOCK</th>
                                            <th class="text-center">IMAGE</th>
                                            <th class="text-center">CREATED AT</th>
                                            <th class="text-center" width="17%">AKSI</th>
                                        </tr>
                                        <?php $x = (!empty($pages))?(($pages - 1)*10):0;?>
                                        @foreach ($products as $product)
                                        <?php $x++; ?>
                                        <tr>
                                            <td class="text-center">{{$x}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->category}}</td>
                                            <td>{{$product->stock}}</td>
                                            <td class="text-center">
                                                <figure class="avatar mr-2 avatar-xl">
                                                    @if($product->image)
                                                        <img src="{{asset('storage/products/'.$product->image)}}" title="{{$product->name}}" width="125px" height="auto">
                                                    @else
                                                        <span class="badge">No Image</span>
                                                    @endif
                                                </figure>
                                            </td>
                                            <td>{{$product->created_at}}</td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-info btn-icon"><i class="fa fa-edit"></i> Edit</a> &nbsp;

                                                    <form action="{{route('product.destroy', $product->id)}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-sm btn-danger btn-icon confirm-delete"><i class="fa fa-times"></i> Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{$products->withQueryString()->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
