@extends('layout.user.main-layout')

@push('name')
    Purchase History
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
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Purchase History</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="user_dashboard">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Purchase History</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped text-muted" >
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Package Name</th>
                                <th>Package Start Name</th>
                                <th>Package End Name</th>
                                <th>Paid Amount</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>Free Listning
                                    <button type="button"
                                            class="btn btn-block btn-primary btn-xs w-50 rounded-pill">Currently
                                        Active
                                    </button>
                                </td>
                                <td>01 March, 2024</td>
                                <td>01 March, 2030</td>
                                <td>$0.00</td>
                                <td>
                                    <button type="button" class="btn btn-block btn-warning btn-xs text-white">
                                        Invoice
                                    </button>
                                    <button type="button" class="btn btn-block btn-secondary btn-xs">History
                                        Detail
                                    </button>
                                    <button type="button" class="btn btn-block btn-primary btn-xs">Package
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Free Listning
                                    <button type="button"
                                            class="btn btn-block btn-primary btn-xs w-50 rounded-pill">Currently
                                        Active
                                    </button>
                                </td>
                                <td>22 March, 2024</td>
                                <td>23 March, 2030</td>
                                <td>$0.00</td>
                                <td>
                                    <button type="button" class="btn btn-block btn-warning btn-xs text-white">
                                        Invoice
                                    </button>
                                    <button type="button" class="btn btn-block btn-secondary btn-xs">History
                                        Detail
                                    </button>
                                    <button type="button" class="btn btn-block btn-primary btn-xs">Package
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Free Listning
                                    <button type="button"
                                            class="btn btn-block btn-primary btn-xs w-50 rounded-pill">Currently
                                        Active
                                    </button>
                                </td>
                                <td>30 March, 2024</td>
                                <td>8 March, 2030</td>
                                <td>$0.00</td>
                                <td>
                                    <button type="button" class="btn btn-block btn-warning btn-xs text-white">
                                        Invoice
                                    </button>
                                    <button type="button" class="btn btn-block btn-secondary btn-xs">History
                                        Detail
                                    </button>
                                    <button type="button" class="btn btn-block btn-primary btn-xs">Package
                                        Detail
                                    </button>
                                </td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
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
                autoWidth: true,
                Selection: true,
            });
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch("state", $(this).prop("checked"));
            });
        });
    </script>
@endpush
