@extends('layout.user.main-layout')
@push('name')
    All Listing
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
@section('content')
    <div class="wrapper">
        <!-- Navbar -->
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>All Listing</h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('user_dashboard') }}">Home</a>
                                </li>

                                <li class="breadcrumb-item active">All Listing</li>
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
                                <div class="card-body">
                                    <table
                                        id="example2"
                                        class="table table-bordered table-hover"
                                    >
                                        <thead>
                                        <tr>
                                            <th>Serial</th>

                                            <th>Featured Photo</th>

                                            <th>Name</th>

                                            <th>Category</th>

                                            <th>Location</th>

                                            <th>Status</th>

                                            <th>Is Featured?</th>

                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>1</td>

                                            <td>
                                                <img src="https://placehold.it/150x100" alt="...">
                                            </td>

                                            <td>
                                                <div class="name text-muted">
                                                    <strong>AAbc1</strong>
                                                    <p><span>Added By:</span>xyz1</p>
                                                    <button class="btn bg-primary rounded-pill py-0">Custome Details
                                                    </button>
                                                </div>
                                            </td>

                                            <td>Test 1</td>

                                            <td>Test 1</td>

                                            <td>
                                                <!-- Bootstrap Switch -->
                                                <input
                                                    type="checkbox"
                                                    name="my-checkbox"
                                                    checked
                                                    data-on-Text="Active"
                                                    data-off-Text="Pending"
                                                    data-bootstrap-switch
                                                    data-off-color="danger"
                                                    data-on-color="success"
                                                />

                                            </td>

                                            <td>
                                                <span class="btn btn-primary btn-xs rounded-pill px-4">Yes</span>
                                            </td>

                                            <td class="project-actions text-left">
                                                <a
                                                    class="btn btn-info btn-sm"
                                                    href="#"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>


                                                <a
                                                    class="btn btn-warning btn-sm"
                                                    href="#"
                                                >
                                                    <i class="fas fa-edit text-white"></i>
                                                </a>

                                                <a
                                                    class="btn btn-danger btn-sm"
                                                    href="#"
                                                >
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>

                                            <td>
                                                <img src="https://placehold.it/150x100" alt="...">
                                            </td>

                                            <td>
                                                <div class="name text-muted">
                                                    <strong>AAbc2</strong>
                                                    <p><span>Added By:</span>xyz2</p>
                                                    <button class="btn bg-primary rounded-pill py-0">Custome Details
                                                    </button>
                                                </div>
                                            </td>

                                            <td>Test 2</td>

                                            <td>Test 2</td>

                                            <td>
                                                <!-- Bootstrap Switch -->
                                                <input
                                                    type="checkbox"
                                                    name="my-checkbox"
                                                    checked
                                                    data-on-Text="Active"
                                                    data-off-Text="Pending"
                                                    data-bootstrap-switch
                                                    data-off-color="danger"
                                                    data-on-color="success"
                                                />

                                            </td>

                                            <td>
                                                <span class="btn btn-danger btn-xs rounded-pill px-4">no</span>
                                            </td>

                                            <td class="project-actions text-left">
                                                <a
                                                    class="btn btn-info btn-sm"
                                                    href="#"
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a
                                                    class="btn btn-warning btn-sm"
                                                    href="#"
                                                >
                                                    <i class="fas fa-edit text-white"></i>
                                                </a>

                                                <a
                                                    class="btn btn-danger btn-sm"
                                                    href="#"
                                                >
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>

                    <!-- /.col -->
                </div>

                <!-- /.row -->
            </section>
        </div>

        <!-- /.content -->
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
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- Page specific script -->

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": true
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch("state", $(this).prop("checked"));
            });

        });
    </script>
@endpush
