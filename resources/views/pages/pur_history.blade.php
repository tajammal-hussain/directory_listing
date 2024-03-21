@extends('layout.main')
@push('name')
    Purchase History
@endpush
@push('custom-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('data')





<!-- Main Sidebar Container -->




<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Purchase History</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('dashboard')}}">Dashboard</a>
                        </li>

                        <li class="breadcrumb-item active">Purchase History</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- /.container-fluid -->
    </section>



    <div class="card">
        <div class="card-header">

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Customer Name</th>
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
                        <td>
                            <span>Sulman</span>

                            <a type="button" class=" rounded-5 btn btn-block btn-success btn-xs rounded-pill w-50" href="#">See Detail</a>
                        </td>
                        <td>Free Listning
                            <button type="button" class="btn btn-block btn-primary btn-xs w-75 rounded-pill">Currently Active</button>
                        </td>
                        <td >01 March, 2024</td>
                        <td>01 March, 2030</td>
                        <td>$0.00</td>
                        <td>
                            <button type="button" class="btn btn-block btn-warning btn-xs text-white">Invoice</button>
                            <button type="button" class="btn btn-block btn-secondary btn-xs">History Detail</button>
                            <button type="button" class="btn btn-block btn-primary btn-xs">Package Detail</button>
                        </td>
                    </tr>
                    <tr >
                        <td>2</td>
                        <td>
                            <span>Sulman</span>
                            <a type="button" class="btn btn-block btn-success btn-xs rounded-pill  w-50" href="#">See Detail</a>
                        </td>
                        <td>Free Listning
                            <button type="button" class="btn btn-block btn-primary btn-xs w-75 rounded-pill">Currently Active</button>
                        </td>
                        <td>22 March, 2024</td>
                        <td>23 March, 2030</td>
                        <td>$0.00</td>
                        <td>
                            <button type="button" class="btn btn-block btn-warning btn-xs text-white">Invoice</button>
                            <button type="button" class="btn btn-block btn-secondary btn-xs">History Detail</button>
                            <button type="button" class="btn btn-block btn-primary btn-xs">Package Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <span>Sulman</span>
                            <a type="button" class="btn btn-block btn-success btn-xs rounded-pill  w-50" href="#">See Detail </a>
                        </td>
                        <td>Free Listning
                            <button type="button" class="btn btn-block btn-primary btn-xs w-75 rounded-pill">Currently Active</button>
                        </td>
                        <td>30 March, 2024</td>
                        <td>8 March, 2030</td>
                        <td>$0.00</td>
                        <td>
                            <button type="button" class="btn btn-block btn-warning btn-xs text-white">Invoice</button>
                            <button type="button" class="btn btn-block btn-secondary btn-xs">History Detail</button>
                            <button type="button" class="btn btn-block btn-primary btn-xs">Package Detail</button>
                        </td>
                    </tr>

                    </tbody>

                </table>
            </div>
        </div>

    </div>




@endsection
@push('script')
        <!-- DataTables  & Plugins -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/jszip/jszip.min.js"></script>
        <script src="../plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../plugins/pdfmake/vfs_fonts.js"></script>
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
