@extends('layout.user.main-layout')

@push('name')
    Edit Password
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Password</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('user_dashboard') }}">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Edit Password</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-6 ml-3">
                                    <label for="exampleInputEmail1">New Password </label>
                                    <input type="password" class="form-control" id="exampleInputEmail1">
                                    <label for="exampleInputEmail1">Retype Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1">
                                    <button class="btn btn-primary mt-2">Update</button>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                </div>

                <!-- /.col -->
            </div>

            <!-- /.row -->
        </section>
    </div>

@endsection
