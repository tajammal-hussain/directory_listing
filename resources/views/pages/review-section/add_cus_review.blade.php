@extends('layout.main')
@push('name')
    Add Customer Review
@endpush
@push('custom-css')
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
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
                        <h1>Add Review</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Add Review</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <sec class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">


                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">

                            </button>
                            <button type="button" class="btn btn-tool" >
                                <a class="btn btn-primary" href="{{ route('customer_review') }}">
                                    <i class="fa fa-plus"></i> View All
                                </a>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Customer</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">salman</option>
                                        <option>waqar</option>
                                        <option>ali</option>

                                    </select>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <label>Listing</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">PiPs Heating Specialist Ltd
                                            </option>
                                            <option>Active Fitters
                                            </option>
                                            <option>Domestic Plumbing & Heating
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <label>Campany Name</label>
                                        <select class="form-control" style="width: 100%;">
                                            <option selected="selected">Google</option>
                                            <option>Trustpilot</option>
                                            <option>HomeViews</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company links</label>
                                    <input type="text" class="form-control my-colorpicker1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Rating</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Review</label>
                                    <textarea class="form-control" rows="3" placeholder=""></textarea>
                                </div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
@endsection
@push('script')
            <!-- Select2 -->
            <script src="../../plugins/select2/js/select2.full.min.js"></script>
            <!-- Bootstrap4 Duallistbox -->
            <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
            <!-- InputMask -->
            <script src="../../plugins/moment/moment.min.js"></script>
            <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
            <!-- date-range-picker -->
            <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
            <!-- bootstrap color picker -->
            <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
            <!-- Bootstrap Switch -->
            <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
            <!-- BS-Stepper -->
            <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
            <!-- dropzonejs -->
            <script src="../../plugins/dropzone/min/dropzone.min.js"></script>

            <!-- Page specific script -->
            <script>
                $(function () {
                    //Initialize Select2 Elements
                    $('.select2').select2()

                })
                // DropzoneJS Demo Code End
            </script>
@endpush
