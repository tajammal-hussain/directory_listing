@extends('layout.main')
@push('name')
    Other
@endpush
@push('custom-css')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

        .nav-tabs {
            border-right: none;
        }
        #vert-tabs-tab.nav-tabs {
            border-right: none;
            border-radius: 14px;
        }

        .nav-link1{
            background-color: rgb(226, 223, 223);
            border-radius: 5px;
            font-size: larger;
        }
        .nav-link1.active{
            background-color: rgb(127, 127, 252);
            color: white;
        }

    </style>
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


                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- ./row -->
            <!-- tahir end of sidebar -->




            <!-- /.row tahir -->
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card-header">
                <!-- <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Vertical Tabs Examples
                </h3> -->
            </div>
            <div class="card-body">
                <h4>Edit Othr Page Information</h4>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <!-- tahir other  1 to 4  -->

                            <a class="nav-link1 px-1 " id="vert-tabs-login-tab" data-toggle="pill" href="#vert-tabs-login" role="tab" aria-controls="vert-tabs-login" aria-selected="true">Login Page</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-favicon-tab" data-toggle="pill" href="#vert-tabs-favicon" role="tab" aria-controls="vert-tabs-favicon" aria-selected="false">Registration Page</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-footer-tab" data-toggle="pill" href="#vert-tabs-footer" role="tab" aria-controls="vert-tabs-footer" aria-selected="false">Forget Password Page</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-recaptcha-tab" data-toggle="pill" href="#vert-tabs-recaptcha" role="tab" aria-controls="vert-tabs-recaptcha" aria-selected="false">Customer Panel</a>
                        </div>
                    </div>

                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">

                            <!-- login page main -->
                            <div class="tab-pane fade show active" id="vert-tabs-login" role="tabpanel" aria-labelledby="vert-tabs-login-tab">

                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Login">

                                <label for="exampleInputEmail1">Meta Decription</label>
                                <textarea class="form-control" style="height: 70px"></textarea>

                            </div>

                            <!-- design 2 registration page             -->
                            <div class="tab-pane fade" id="vert-tabs-favicon" role="tabpanel" aria-labelledby="vert-tabs-favicon-tab">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Registration">
                                <label for="exampleInputEmail1">Meta Decription</label>
                                <textarea class="form-control" style="height: 70px"></textarea>

                            </div>
                            <div class="tab-pane fade" id="vert-tabs-footer" role="tabpanel" aria-labelledby="vert-tabs-footer-tab">

                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Forget Password">

                                <label for="exampleInputEmail1">Meta Decription</label>
                                <textarea class="form-control" style="height: 70px"></textarea>

                            </div>

                            <div class="tab-pane fade" id="vert-tabs-recaptcha" role="tabpanel" aria-labelledby="vert-tabs-recaptcha-tab">

                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Customer Panel">

                                <label for="exampleInputEmail1">Meta Decription</label>
                                <textarea class="form-control" style="height: 70px"></textarea>

                            </div>


                        </div>
                    </div>
                    <td>
                        <button type="button" class="btn btn-block btn-success mt-4">Update</button>
                    </td>
                </div>
            </div>
        </section>

@endsection
