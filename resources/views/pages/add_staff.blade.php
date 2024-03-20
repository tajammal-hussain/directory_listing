@extends('layout.main')
@push('name')
    Add Staff
@endpush
@push('custom-css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
@endpush
@section('data')

<div class="wrapper">
    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Staff</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Add Staff</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">


                        <div class="card-tools">
                            <a class="btn btn-primary " href="{{ route('staff') }}"><i class="fa fa-plus">  </i> View all</a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Photo *</label>
                                    <input type="file" class="form-control border-0" id="exampleInputEmail1"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name *</label>
                                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New password</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <!-- /.form-group -->
                                <!-- /.phone-number -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>

                            <!-- /.col -->

                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1">Banner *</label>
                                    <input type="file" class="form-control border-0" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Email*</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <!--Select -->
                                <div class="form-group">
                                    <label>Role *</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Manager</option>
                                        <option>Shopkeeper</option>
                                    </select>
                                </div>
                                <!--Select -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">State</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Zip</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
        </section>

    </div>

</div>
<!-- ./wrapper -->


@endsection
@push('script')

    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
        })
        // DropzoneJS Demo Code End
    </script>
@endpush
