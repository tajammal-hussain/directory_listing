@extends('layout.user.main-layout')

@push('name')
    Wishlist
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Wish List</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="user-dashboard">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Wish List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->

                            <div class="card-body">
                                <table
                                    id="example2"
                                    class="table table-bordered table-hover"
                                >
                                    <thead class="bg-info">
                                    <tr>
                                        <th>Serial</th>

                                        <th>Featured Photo</th>


                                        <th>Name</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="w-25">
                                            <img class="img w-50" src="../dist/img/photo2.png" alt="Photo">
                                        </td>
                                        <td>
                                            Ruby Tuesday
                                            <p><a href="#" class="btn btn-primary btn-xs rounded-pill px-4">see
                                                    detail</a>
                                            </p>
                                        </td>

                                        <td class="project-actions text-left">

                                            <a
                                                class="btn btn-danger btn-md"
                                                href="#"
                                            >
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="w-25">
                                            <img class="img w-50" src="../dist/img/photo2.png" alt="Photo">
                                        </td>
                                        <td>
                                            Ruby Tuesday
                                            <p><a href="#" class="btn btn-primary btn-xs rounded-pill px-4">see
                                                    detail</a>
                                            </p>
                                        </td>

                                        <td class="project-actions text-left">

                                            <a
                                                class="btn btn-danger btn-md"
                                                href="#"
                                            >
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
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
