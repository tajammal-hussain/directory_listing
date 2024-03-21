@extends('layout.main')
@push('name')
    Add Listing Category
@endpush
@push('custom-css')
    <!-- Bootstrap Color Picker -->
    <link
        rel="stylesheet"
        href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"
    />
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css" />
    <link
        rel="stylesheet"
        href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"
    />
    <!-- Bootstrap4 Duallistbox -->
    <link
        rel="stylesheet"
        href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"
    />
    <!-- BS Stepper -->
    <link
        rel="stylesheet"
        href="../../plugins/bs-stepper/css/bs-stepper.min.css"
    />
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
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
                            <h1>Add Listing Location</h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="{{route('lis_location')}}">Listing Location</a>
                                </li>

                                <li class="breadcrumb-item active">Add Listing Location</li>
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
                                <a href="{{ route('lis_location') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Veiw All
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div>
                                            <label for="exampleInputEmail1">Name *</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                placeholder="Enter Name"
                                            />
                                        </div>
                                        <div>
                                            <label for="exampleInputEmail1">Detailed Name *</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                placeholder="Enter Detailed Name"
                                            />
                                        </div>
                                        <div>
                                            <label for="exampleInputEmail1">Slug</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleInputEmail1"
                                                placeholder=""
                                            />
                                        </div>
                                        <div>
                                            <label for="exampleInputEmail1">Photo *</label>

                                            <input
                                                type="file"
                                                class="border-0 pl-0 form-control"
                                                id="exampleInputEmail1"
                                                placeholder=""
                                            />
                                        </div>
                                        <div>
                                            <label>Listing Category Color</label>

                                            <input
                                                placeholder="FFFFFF"
                                                type="text"
                                                class="form-control my-colorpicker1"
                                            />
                                        </div>
                                        <div>
                                            <label>Parent category</label>
                                            <select
                                                class="form-control select2"
                                                style="width: 100%"
                                            >
                                                <option selected="selected">Select Category</option>
                                                <option>Plumbing Heating</option>
                                                <option>Plumbing Supply</option>
                                                <option>Drainage Services</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--Seo-->
                        <div
                            class="card-header border-0 px-0"
                            style="background-color: #f8f9fc"
                        >
                            <h3 class="card-title text-primary px-4">SEO Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">Title</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        placeholder="Enter Title"
                                    />
                                    <label class="pt-2" for="other_detail_textarea"
                                    >Description</label
                                    >
                                    <textarea
                                        class="form-control"
                                        name="other_detail_textarea"
                                        id=""
                                        cols="153"
                                        rows="5"
                                    ></textarea>

                                    <button class="btn btn-success mt-2" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--Seo-->
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

@endsection
@push('script')
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();
            $(".my-colorpicker1").colorpicker();
        });
    </script>
@endpush
