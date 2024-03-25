@extends('layout.user.main-layout')

@push('name')
    Edit Banner
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Banner</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('user_dashboard') }}">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Edit Banner</li>
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
                                    <label>Existing Banner</label><br/>
                                    <img src="../../dist/img/user2-160x160.jpg" class="img elevation-2"
                                         alt="User Image"> <br>
                                    <label class="py-2">Change Banner</label><br/>
                                    <input type="file" class="rounded"/><br>
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
