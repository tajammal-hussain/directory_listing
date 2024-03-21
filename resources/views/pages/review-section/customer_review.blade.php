@extends('layout.main')
@push('name')
    Customer Review
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
                        <h1>Customer Review</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('customer_review')}}">Customer Section</a>
                            </li>

                            <li class="breadcrumb-item active">Customer Review</li>
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
                                <a class="btn btn-primary" href="{{ route('add_cus_review') }}">
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
                                        <th>Listing Featured Photo</th>
                                        <th>Listing Name</th>
                                        <th>Customer Name</th>
                                        <th>Rating</th>
                                        <th>Review</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="" alt="image" /></td>
                                        <td>Plumbing</td>
                                        <td>Salman</td>
                                        <td>4</td>
                                        <td>
                                            <p>Good Product</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit text-white"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="" alt="image" /></td>
                                        <td>Plumbing</td>
                                        <td>Salman</td>
                                        <td>4</td>
                                        <td>
                                            <p>Good Product</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit text-white"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="" alt="image" /></td>
                                        <td>Plumbing</td>
                                        <td>Salman</td>
                                        <td>4</td>
                                        <td>
                                            <p>Good Product</p>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit text-white"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash text-white"></i>
                                            </a>
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

</div>
<!-- ./wrapper -->

</section>
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
