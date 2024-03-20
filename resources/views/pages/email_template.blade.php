@extends('layout.main')
@push('name')
    Email Template
@endpush
    @push('custom-css')
        <!-- Theme style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
@section('data')

<div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header"> -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Email Template</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Email Template</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>
        <div class="container-fluid">
            <!-- <div class="row mb-12">
              <div class="col-sm-6">
                <h1></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
              </div>
            </div> -->
        </div><!-- /.container-fluid -->
        <!-- </section> -->

        <!-- Main content -->
        <style>
            .table{
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);;
            }
        </style>
        <body>
        <section class="mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="">
                                <h4 class="card-title text-muted mt-2 px-2">Email Template</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered text-muted">
                                    <thead class="text-muted text-sm">
                                    <tr>
                                        <th style="width: 150px text-muted">Serial</th>
                                        <th>Name</th>
                                        <th style="width: 170px">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                    <tr>
                                        <td>1</td>
                                        <td>Contact Page Message</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Comment Message To Admin </td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Reset Password Message To Admin</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Registeration Email To Customer</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Reset password Message To Customer</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Package Purchase Complete Email To Customer</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Listing Page Email To Agent</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Listing Page Reort To Admin</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Verify Your Buisness</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit text-lg text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- /.control-sidebar -->
                        </div>
                        <!-- ./wrapper -->

@endsection
