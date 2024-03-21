@extends('layout.main')
@push('name')
    Add listing Amenity
@endpush
@push('custom-css')
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"
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
                        <h1>Add Listing Amenity</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('lis_amenity')}}">Listing Amenity</a>
                            </li>

                            <li class="breadcrumb-item active">Add Listing Amenity</li>
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
                            <a class="btn btn-primary " href="{{ route('lis_amenity') }}"><i class="fa fa-plus">  </i> View all</a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name *</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    <label for="exampleInputEmail1" class="pt-2">Slug</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <button type="button" class="btn btn-success">Submit</button>
                            </div>
                        </div>

        </section>


    </div>




</div>
<!-- ./wrapper -->

@endsection
