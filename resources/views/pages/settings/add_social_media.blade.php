@extends('layout.main')
@push('name')
    Add Social Media
@endpush
    @push('custom-css')
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
@section('data')

<div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


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
            <!-- tayyab end of sidebar -->
            <br><h5> Add Social Media Item</h5>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="text right" style="display: flex; justify-content: end;">
                                <a href="{{ route('social_media') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                    View All
                                </a>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group w-100">

                                    <div class="card-body">
                                        <div class="form-group">


                                            <label for="exampleInputEmail1">URL *</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter here">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Icon(Font Awasome 5 Code ) *</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                            <p class="text-danger">Example:"fab fa-facebook-fa"</p>
                                        </div>

                                        <label for="exampleInputPassword1">Order</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="0">


                                    </div>
                                    </form>
                                </div>
                                <button type="button" class="btn btn-success">Submit</button>
                            </div>


                        </div>

                    </div>
                </div>

    </section>
@endsection
