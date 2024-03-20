@extends('layout.main')
@push('name')
    Add Customer
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
                        <h1>Add Customer</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Add Customer</li>
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
                            <a
                                class="bg-primary rounded text-white py-1 px-2"
                                href="{{ route('customer_review') }}"
                            >
                                        <span class="fs-3 fw-bold">
                                            <i class="fa fa-plus"></i>
                                            View All
                                        </span>
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Photo </label>
                                    <input type="file" class="form-control border-0" id="exampleInputEmail1" placeholder="">
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
                                    <label for="exampleInputEmail1">Address*</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">State*</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Zip</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Linkedin</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pinterest</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>

                                </div>

                            </div>

                            <!-- /.col -->

                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1">Banner </label>
                                    <input type="file" class="form-control border-0" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Email *</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Twitter</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Instagram</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">YouTube</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>

                        </div>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>

                </div>

        </section>

    </div>


</div>
<!-- ./wrapper -->




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
<script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

    })
    // DropzoneJS Demo Code End
</script>
@endpush
@endsection
