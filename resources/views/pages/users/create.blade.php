@extends('layouts.app')

@section('title', 'Create New Users')

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
                    <a href="{{route('user.index')}}"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New Users</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{route('user.index')}}">Users</a></div>
                    <div class="breadcrumb-item">Create New Users</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create New Users</h2>
                <p class="section-lead">
                    On this page you can create a new Users and fill in all fields.
                </p>

                <div class="row">
                    <div class="col-12">
                        <form id="form-user" action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Write Your Users</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Nama Lengkap</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>
                                            @error('name')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="email">Email</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                            @error('email')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="phone">Phone</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                            @error('phone')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="password">Password</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="password" id="password" class="form-control pwstrength @error('password') is-invalid @enderror" name="password" data-indicator="pwindicator">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                            @error('password')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="password_confirmation">Password Confirmation</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                            @error('password_confirmation')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" name="role">Role</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select name="role" id="role" class="form-control selectric @error('role') is-invalid @enderror">
                                                <option value="staff">Staff</option>
                                                <option value="admin">Admin</option>
                                            </select>

                                            @error('role')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <a class="btn btn-warning" href="{{route('user.index')}}">Batal</a>
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
@endpush
