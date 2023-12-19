@extends('layouts.app')

@section('title', 'Users')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-button">
                    <a href="{{route('user.create')}}"
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{route('user.index')}}">Users</a></div>
                    <div class="breadcrumb-item">All Users</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">@include('layouts.alert')</div>
                </div>

                <h2 class="section-title">Users</h2>
                <p class="section-lead">
                    You can manage all Users, such as editing, deleting and more.
                </p>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Users</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="get" action="{{route('user.index')}}">
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
                                            <th class="text-center">NAMA LENGKAP</th>
                                            <th class="text-center">EMAIL</th>
                                            <th class="text-center">PHONE</th>
                                            <th class="text-center">ROLE</th>
                                            <th class="text-center">CREATED AT</th>
                                            <th class="text-center" width="17%">AKSI</th>
                                        </tr>
                                        <?php $x = (!empty($pages))?(($pages - 1)*10):0;?>
                                        @foreach ($users as $user)
                                        <?php $x++; ?>
                                        <tr>
                                            <td class="text-center">{{$x}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td class="text-center">
                                                <div class="badge badge-{{($user->role=='admin')?'success':'primary'}}">{{$user->role}}</div>
                                            </td>
                                            <td>{{$user->created_at}}</td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-info btn-icon"><i class="fa fa-edit"></i> Edit</a> &nbsp;

                                                    <form action="{{route('user.destroy', $user->id)}}" method="post">
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
                                    {{$users->withQueryString()->links()}}
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
