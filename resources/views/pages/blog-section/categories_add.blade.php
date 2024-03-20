
@extends('layout.main')
@push('name')
    Add Category
@endpush
    @push('custom-css')

        <!-- DataTables -->

        <link
            rel="stylesheet"
            href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
        ></link>

        <link
            rel="stylesheet"
            href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
        ></link>

        <link
            rel="stylesheet"
            href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
        ></link>
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
                        <h1>Add Category</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Add Category</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div
                                class="card-header d-flex p-2"
                                style="display: flex; justify-content: end;"
                            >
                                <a
                                    class="bg-primary rounded text-white py-1 px-2"
                                    href="{{ route('categories') }}"
                                >
                                        <span class="fs-3 fw-bold">
                                            <i class="fa fa-plus"></i>
                                            View All
                                        </span>
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label
                                        for="inputClientCompany"
                                        class="text-muted"
                                    >Name *</label>

                                    <input
                                        type="text"
                                        id="inputClientCompany"
                                        class="form-control"
                                    ></input>
                                </div>

                                <div class="form-group">
                                    <label
                                        for="inputProjectLeader"
                                        class="text-muted"
                                    >Slug</label>

                                    <input
                                        type="text"
                                        id="inputProjectLeader"
                                        class="form-control"
                                    ></input>
                                </div>

                                <div
                                    class="mx-n3 p-2 h5"
                                    style="background-color: #E9ECEF; color: #1971c2; text-align: center;"
                                >SEO Information</div>

                                <div class="form-group">
                                    <label
                                        for="inputName"
                                        class="text-muted"
                                    >Title</label>

                                    <input
                                        type="text"
                                        id="inputName"
                                        class="form-control"
                                    ></input>
                                </div>

                                <div class="form-group">
                                    <label
                                        for="inputDescription"
                                        class="text-muted"
                                    >Meta Description</label>

                                    <textarea
                                        id="inputDescription"
                                        class="form-control"
                                        rows="4"
                                    ></textarea>
                                </div>

                                <div class="btn">
                                    <button
                                        type="button"
                                        class="btn btn-block btn-success btn-md"
                                    >Submit</button>
                                </div>
                            </div>

                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>

                    <!-- /.col -->
                </div>

                <!-- /.row -->
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->



</div>



@endsection
@push('script')

    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endpush
