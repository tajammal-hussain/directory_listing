@extends('layout.main')
    @push('name')
        Add Blog
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

        <!-- Toastr -->

        <link
            rel="stylesheet"
            href="../../plugins/toastr/toastr.min.css"
        ></link>
        <!-- SweetAlert2 -->

        <link
            rel="stylesheet"
            href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"
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
                        <h1>Add Blogs</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('add_blog')}}">Blog</a>
                            </li>

                            <li class="breadcrumb-item active">Add Blogs</li>
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
                                    href="{{ route('blog_sec') }}"
                                >
                                        <span class="fs-3 fw-bold">
                                            <i class="fa fa-plus"></i>
                                            View All
                                        </span>
                                </a>
                            </div>

                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label
                                        for="inputClientCompany"
                                        class="text-muted"
                                    >Title *</label>

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

                                <div class="form-group">
                                    <label
                                        for="inputContent"
                                        class="text-muted"
                                    >Content *</label>

                                    <textarea
                                        id="summernote"
                                        style="display: none;"
                                    >
                                            Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt;
                                        </textarea>
                                </div>

                                <div class="form-group">
                                    <label
                                        for="inputShortDescription"
                                        class="text-muted"
                                    >
                                        Short Content
                                        *
                                    </label>

                                    <textarea
                                        id="inputDescription"
                                        class="form-control"
                                        rows="4"
                                    ></textarea>
                                </div>

                                <div class="form-group">
                                    <label
                                        for="exampleInputFile"
                                        class="text-muted"
                                    >Photo</label>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input
                                                type="file"
                                                class="custom-file-input"
                                                id="exampleInputFile"
                                            ></input>

                                            <label
                                                class="custom-file-label"
                                                for="exampleInputFile"
                                            >33278.jpg</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label
                                        for="inputStatus"
                                        class="text-muted"
                                    >
                                        Select Category
                                        *
                                    </label>

                                    <select
                                        id="inputStatus"
                                        class="form-control custom-select"
                                    >
                                        <option
                                            selected=""
                                            disabled=""
                                        >Select one</option>

                                        <option>Choice 1</option>

                                        <option>Choice 2</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label
                                        for="inputStatus"
                                        class="text-muted"
                                    >Show Comment? *</label>

                                    <select
                                        id="inputStatus"
                                        class="form-control custom-select"
                                    >
                                        <option
                                            selected=""
                                            disabled=""
                                        >Select one</option>

                                        <option>No</option>

                                        <option>Yes</option>
                                    </select>
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
                                    >
                                        Meta
                                        Description
                                    </label>

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

                                <div>
                                    <button
                                        type="button"
                                        class="btn btn-success swalDefaultSuccess"
                                    >Launch Success Toast</button>
                                </div>
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

    <!-- SweetAlert2 -->
    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="../../plugins/codemirror/codemirror.js"></script>
    <script src="../../plugins/codemirror/mode/css/css.js"></script>
    <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    <script>
        $(function () {
            // Toaster / Alert
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.swalDefaultWarning').click(function() {
                Toast.fire({
                    icon: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            $('.toastsDefaultDefault').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            // Summernote
            $('#summernote').summernote({
                height: 300,   //set editable area's height
            });

        });
    </script>

    <script>
        $(function() {

        });
    </script>
@endpush
