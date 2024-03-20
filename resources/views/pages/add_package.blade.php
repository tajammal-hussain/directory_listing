@extends('layout.main')
@push('name')
    Add Package
@endpush
@push('custom-css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
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
                        <h1>Add package</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Add package</li>
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
                            <a class="btn btn-primary " href="{{ route('package_section') }}"><i class="fa fa-plus">  </i> View all</a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div>
                                        <label for="exampleInputEmail1" class="pt-2">Type *</label>
                                        <input type="name" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <!-- /.form-group -->
                                    <div>
                                        <label for="exampleInputEmail1" class="pt-2">Price *</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- /.phone-number -->
                                    <div>
                                        <label for="exampleInputEmail1" class="pt-2">Valid Number of Days</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div>
                                        <label for="exampleInputEmail1" class="pt-2">Allowed Amenities per Listing *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div>
                                        <label for="exampleInputEmail1" class="pt-2">Allowed Videos per Listing *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div>
                                        <label for="exampleInputEmail1" class="pt-2">Allowed Additional Features per Listing *</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div>
                                        <label for="exampleInputEmail1" class="pt-2">Order</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <!-- /.col -->

                            <div class="col-md-6">
                                <div>
                                    <label for="exampleInputEmail1" class="pt-2">Name *</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <!--Select -->
                                <div>
                                    <label class="pt-2">Discount Price *</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Manager</option>
                                        <option>Shopkeeper</option>
                                    </select>
                                </div>
                                <!--Select -->
                                <div>
                                    <label for="exampleInputEmail1" class="pt-2">Allowed Listings *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>

                                <div>
                                    <label for="exampleInputEmail1" class="pt-2">Allowed Photos per Listing *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>


                                <div>
                                    <label for="exampleInputEmail1" class="pt-2">Allowed Social Items per Listing *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>


                                <div>
                                    <label for="exampleInputEmail1" class="pt-2">Allow Featured Listing? *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>


                                <div>
                                    <label for="exampleInputEmail1" class="pt-2">Special Offer Label</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>

                            </div>
                        </div>
                        <label for="">Labels *</label>
                        <div class="input-container"></div>
                        <div class="mb-4 rounded-">
                            <a type="button" id="addInputBtn" class="btn btn-info mt-2">Add Label</a>


                        </div>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </section>

    </div>



</div>
<!-- ./wrapper -->
</section>

@endsection
@push('script')

    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
            // Function to remove input field
            function removeInputField(inputGroup) {
                inputGroup.remove();
            }

            // Add input field when button is clicked
            $('#addInputBtn').click(function() {
                var inputGroup = $('<div>').addClass('input-group mt-2');
                var input = $('<input>').attr({
                    type: 'text',
                    class: 'form-control',
                    placeholder: 'labels'
                });
                var inputGroupAppend = $('<div>').addClass('input-group-append');
                var trashIcon = $('<button>').addClass('btn btn-danger').attr({
                    type: 'button',
                    title: 'Remove',
                }).append($('<i>').addClass('fa fa-trash')).click(function() {
                    removeInputField(inputGroup);
                });

                inputGroup.append(input);
                inputGroupAppend.append(trashIcon);
                inputGroup.append(inputGroupAppend);

                $('.input-container').append(inputGroup);
            });

        })
        // DropzoneJS Demo Code End
    </script>
@endpush
