@extends('layout.main')
@push('name')
    Customer
@endpush
@push('custom-css')
    <!-- DataTables -->
    <link
        rel="stylesheet"
        href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
        rel="stylesheet"
        href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link
        rel="stylesheet"
        href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
    />
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
                        <h1>Manage Customer</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}">Dashboard</a>
                            </li>

                            <li class="breadcrumb-item active">Manage Customer</li>
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
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header" style="text-align: end">
                                <a class="btn btn-primary" href="{{ route('add_customer') }}">
                                    <i class="fa fa-plus"></i> Add New
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table
                                    id="example1"
                                    class="table table-bordered table-striped"
                                >
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="" alt="image" /></td>
                                        <td>sad z</td>
                                        <td>example@gmail.com</td>
                                        <td>
                                            <div class="card-body">
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
                                            </div>
                                        </td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-secondary"
                                            >
                                                Edit User
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-info"
                                            >
                                                Details
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-danger"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="" alt="image" /></td>
                                        <td>sad z</td>
                                        <td>salman@gmail.com</td>
                                        <td>
                                            <div class="card-body">
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
                                            </div>
                                        </td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-secondary"
                                            >
                                                Edit Users
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-info"
                                            >
                                                Details
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-danger"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="" alt="image" /></td>
                                        <td>sad z</td>
                                        <td>asdf@gmail.com</td>
                                        <td>
                                            <div class="card-body">
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
                                            </div>
                                        </td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-secondary"
                                            >
                                                Edit Users
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-info"
                                            >
                                                Details
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-block bg-gradient-danger"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
        >Copyright &copy; 2014-2021
            <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->


    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection
@push('script')

    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
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
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                responsive: true,
                lengthChange: true,
                autoWidth: false,
                Selection: true,
            });
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch("state", $(this).prop("checked"));
            });
        });
    </script>
@endpush
