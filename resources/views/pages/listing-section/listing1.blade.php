@extends('layout.main')
@push('name')
    Listing
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
                        <h1>Listing</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('listing1')}}">Listing Section</a>
                            </li>

                            <li class="breadcrumb-item active">Listing</li>
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

                                        <span class="fs-3 fw-bold">
                                            <a class="btn btn-primary" href="{{route('add_listing')}}">
                                    <i class="fa fa-plus"></i> Add New
                                </a>
                                        </span>

                            </div>

                            <!-- /.card-header -->

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
                                                <button class="btn bg-primary rounded-pill py-0">Custome Details</button>
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
                                                <i class="fas fa-eye" data-toggle="modal" data-target="#modal-xl"></i>
                                            </a>
                                            <div class="modal fade" id="modal-xl">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Extra Large Modal</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>One fine body&hellip;</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

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
                                                <button class="btn bg-primary rounded-pill py-0">Custome Details</button>
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
                                                <i class="fas fa-eye" data-toggle="modal" data-target="#modal-xl"></i>
                                            </a>
                                            <div class="modal fade" id="modal-xl">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Extra Large Modal</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>One fine body&hellip;</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
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

    <!-- /.container-fluid -->
    <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<!-- Control Sidebar -->


<!-- /.control-sidebar -->
<!-- ./wrapper -->
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
