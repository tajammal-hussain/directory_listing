@extends('layout.main')
@push('name')
    Manage Staff
@endpush
@push('custom-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage Staff</h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="{{route('dashboard')}}">Dashboard</a>
                                </li>

                                <li class="breadcrumb-item active">Manage Staff</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
            </section>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><h3 class="card-title float-right">
                            <a href="{{ route('add_staff') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Add New
                            </a>
                        </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-muted">Serial</th>
                            <th class="text-muted">Name</th>
                            <th class="text-muted" style="width: 450px;">Email</th>
                            <th class="text-muted" style="width: 150px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-sm">1</td>
                            <td class="text-sm">Al Created</td>
                            <td class="text-sm">henrt2@local99.co.uk</td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs rounded">Edit</button>
                                <button type="button" class="btn btn-block btn-danger btn-xs rounded">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm">2</td>
                            <td class="text-sm">Al Created
                            </td>
                            <td class="text-sm">Clicaplumber@gmail.com</td>
                            <td class="text-sm"><button type="button" class="btn btn-block btn-primary btn-xs rounded">Edit</button>
                                <button type="button" class="btn btn-block btn-danger btn-xs rounded">Delete</button></td>
                        </tr>
                        <tr>
                            <td class="text-sm">3</td>
                            <td class="text-sm">AI System
                            </td>
                            <td class="text-sm">itcorconsult22@gmail.com</td>
                            <td class="text-sm"><button type="button" class="btn btn-block btn-primary btn-xs rounded">Edit</button>
                                <button type="button" class="btn btn-block btn-danger btn-xs rounded">Delete</button></td>
                        </tr>
                        <tr>
                            <td class="text-sm">4</td>
                            <td class="text-sm">Picked By AI
                            </td>
                            <td class="text-sm">team@local99.co.uk</td>
                            <td class="text-sm"><button type="button" class="btn btn-block btn-primary btn-xs rounded">Edit</button>
                                <button type="button" class="btn btn-block btn-danger btn-xs rounded">Delete</button></td>

                        </tr>
                        <tr class="text-sm">
                            <td class="text-sm">5</td>
                            <td class="text-sm">
                                AI Creation
                            </td>
                            <td class="text-sm">itcorconsult22@gmail.com</td>
                            <td class="text-sm"><button type="button" class="btn btn-block btn-primary btn-xs rounded">Edit</button>
                                <button type="button" class="btn btn-block btn-danger btn-xs rounded">Delete</button></td>

                        </tr>
                        <tr class="text-sm">
                            <td class="text-sm">6</td>
                            <td class="text-sm">Shop Keeper</td>
                            <td class="text-sm">Shop@gmail.com</td>
                            <td class="text-sm"><button type="button" class="btn btn-block btn-primary btn-xs rounded">Edit</button>
                                <button type="button" class="btn btn-block btn-danger btn-xs rounded">Delete</button></td>

                        </tr>
                        <tr class="text-sm">
                            <td class="text-sm">7</td>
                            <td class="text-sm">Salman</td>
                            <td class="text-sm">Salman@gamil.com</td>
                            <td class="text-sm"><button type="button" class="btn btn-block btn-primary btn-xs rounded">Edit</button>
                                <button type="button" class="btn btn-block btn-danger btn-xs rounded">Delete</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </section>
        <!-- /.card-body -->

        <!-- /.container-fluid -->


    </div>
    <!-- ./wrapper -->

@endsection
@push('script')
        <!-- DataTables  & Plugins -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- Page specific script -->
        <script>
            $(function () {
                $("#example1").DataTable({
                    "responsive": true, "lengthChange": true, "autoWidth": false,
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            });
        </script>
@endpush
