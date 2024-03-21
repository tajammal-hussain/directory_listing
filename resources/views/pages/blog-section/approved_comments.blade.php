@extends('layout.main')
@push('name')
    Approved Comments
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
                        <h1>Approved Comments</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('approved_comments')}}">Blog Section</a>
                            </li>

                            <li class="breadcrumb-item active">Approved Comments</li>
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
                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="tab-content">
                                    <div
                                        class="tab-pane active"
                                        id="tab_1"
                                    >
                                        <table
                                            id="example2"
                                            class="table table-bordered table-hover"
                                        >
                                            <thead>
                                            <tr>
                                                <th>Serial</th>

                                                <th>Name and Email</th>

                                                <th>Comment</th>

                                                <th>Blog Title</th>

                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>1</td>

                                                <td>Test 1</td>

                                                <td>Test 1</td>

                                                <td>Test 1</td>

                                                <td class="project-actions text-left">
                                                    <a
                                                        class="btn btn-info btn-sm"
                                                        href="#"
                                                    >
                                                        <i class="fas fa-pencil-alt"></i>
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

                                                <td>Test 2</td>

                                                <td>Test 2</td>

                                                <td>Test 2</td>

                                                <td class="project-actions text-left">
                                                    <a
                                                        class="btn btn-info btn-sm"
                                                        href="#"
                                                    >
                                                        <i class="fas fa-pencil-alt"></i>
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

                                    <!-- /.tab-pane -->

                                    <div
                                        class="tab-pane"
                                        id="tab_2"
                                    >
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="inputClientCompany">Name</label>

                                                <input
                                                    type="text"
                                                    id="inputClientCompany"
                                                    class="form-control"
                                                ></input>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputProjectLeader">Slug</label>

                                                <input
                                                    type="text"
                                                    id="inputProjectLeader"
                                                    class="form-control"
                                                ></input>
                                            </div>

                                            <div class="mx-n4 p-2 bg-gray h5">SEO Information</div>

                                            <div class="form-group">
                                                <label for="inputName">Title</label>

                                                <input
                                                    type="text"
                                                    id="inputName"
                                                    class="form-control"
                                                ></input>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputDescription">Meta Description</label>

                                                <textarea
                                                    id="inputDescription"
                                                    class="form-control"
                                                    rows="4"
                                                ></textarea>
                                            </div>

                                            <div class="btn">
                                                <button
                                                    type="button"
                                                    class="btn btn-block btn-success btn-lg"
                                                >Success</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.tab-pane -->
                                </div>

                                <!-- /.tab-content -->
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

    <!-- Page specific script -->

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": true, "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
        });
    </script>
@endpush
