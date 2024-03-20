@extends('layout.main')
@push('name')
    Payment Settings
@endpush
    @push('custom-css')
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
              integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
              crossorigin="anonymous" referrerpolicy="no-referrer"  />
    @endpush
@section('data')
<div class="wrapper">
    <!-- Navbar -->
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Payment Settings</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Payment Settings</li>
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
                    <div class="col-md-12">
                        <!-- <div class="card card-primary card-outline"> -->


                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- ./row -->
            <!-- tahir end of sidebar -->

            <div>
                <br><h5 class="col-md-4">Edit payment setting</h5>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary ">
                                <div class="card-header">
                                    <h3 class="card-title"><small>PayPal</small></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Paypal Environment</label>
                                            <field>
                                                <select class="form-control select2" style="width: 100%;">

                                                    <option>Sandbox</option>
                                                    <option>Production</option>

                                                </select>

                                            </field>

                                            <label for="exampleInputEmail1">Paypal Client It</label>
                                            <input type="email" name="email" class="form-control"
                                                   id="exampleInputEmail1" placeholder="Enter here">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Paypal Secret Key</label>
                                            <input type="password" name="password" class="form-control"
                                                   id="exampleInputPassword1" placeholder="put here">
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="terms" class="custom-control-input"
                                                       id="exampleCheck1">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"><small>Stripe</small></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm">
                                    <div class="card-body">
                                        <div class="form-group">


                                            <label for="exampleInputEmail1">Stripe Public Key</label>
                                            <input type="email" name="email" class="form-control"
                                                   id="exampleInputEmail1" placeholder="Enter here">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Stripe Secret Key</label>
                                            <input type="password" name="password" class="form-control"
                                                   id="exampleInputPassword1" placeholder="put here">
                                        </div>
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="terms" class="custom-control-input"
                                                       id="exampleCheck1">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-block btn-success">Update</button>

                @endsection
                @push('script')
                    <!-- jQuery -->
                    <script src="../../plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap 4 -->
                    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="../../dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="../../dist/js/demo.js"></script>
                @endpush
