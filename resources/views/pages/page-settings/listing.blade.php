@extends('layout.main')
@push('name')
    Listing
@endpush
@push('custom-css')
    <!-- CodeMirror -->
    <link rel="stylesheet" href="../../plugins/codemirror/codemirror.css" />
    <link rel="stylesheet" href="../../plugins/codemirror/theme/monokai.css" />
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css" />
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
                        <h1>Edit Listing Page Information</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div>
                <div class="card-title">Name</div>
                <input
                    type="text"
                    class="form-control mb-4"
                    placeholder="Listing"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                />
            </div>

            <!-- /.card-header -->
            <div class="card-body" style="padding: 0%">
                <span style="font-size: large">Details</span>
                <textarea id="summernote">

                Place <em>some</em> <u>text</u> <strong>here</strong>


              </textarea
              >
            </div>
            <div>
                <div class="card-title">Number of Listing per page</div>
                <input
                    type="number"
                    class="form-control mb-4"
                    placeholder="0"
                    aria-label="null"
                    aria-describedby="basic-addon1"
                />
            </div>

            <div
                class=""
                style="
              width: 250px;
              display: flex;
              align-items: center;
              justify-content: space-around;
              margin-bottom: 4px;
            "
            >
                <span style="font-weight: bolder">Status</span>

                <div class="custom-control custom-radio">
                    <input
                        class="custom-control-input custom-control-input-danger custom-control-input-outline"
                        type="radio"
                        id="customRadio5"
                        name="customRadio2"
                    />
                    <label for="customRadio5" class="custom-control-label"
                    >show</label
                    >
                </div>
                <div class="custom-control custom-radio">
                    <input
                        class="custom-control-input custom-control-input-danger custom-control-input-outline"
                        type="radio"
                        id="customRadio4"
                        name="customRadio2"
                    />
                    <label for="customRadio4" class="custom-control-label"
                    >hide</label
                    >
                </div>
            </div>

            <!-- /.col-->

            <!-- ./row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="margin-top: 4px">
                        <div>
                  <span
                      style="
                      color: #5480d7;
                      padding-left: 2px;
                      background-color: #f1f1f1;
                      display: block;
                      height: 35px;
                      font-size: large;
                      display: flex;
                      justify-content: center;
                    "
                  >
                    SEO Information
                  </span>
                        </div>
                        <div class="card-header">
                            <label for="Title">Title</label>
                            <input
                                type="text"
                                class="form-control mb-4"
                                width="50%"
                                placeholder="Listing"
                                aria-label="FAQ"
                                aria-describedby="basic-addon1"
                            />
                            <label for="Meta">Meta Discription</label>
                            <textarea
                                class="form-control mb-4"
                                width="50%"
                                style="height: 150px"
                                placeholder="FAQ Meta Discription"
                                aria-label="meta"
                                aria-describedby="basic-addon1"
                            >
                  </textarea>
                        </div>
                        <div class="card-header">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        <!-- /.card-header -->
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
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

</div>
<!-- ./wrapper -->
@endsection
@push('script')
<!-- CodeMirror -->
<script src="../../plugins/codemirror/codemirror.js"></script>
<script src="../../plugins/codemirror/mode/css/css.js"></script>
<script src="../../plugins/codemirror/mode/xml/xml.js"></script>
<script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
        // Summernote
        $("#summernote").summernote({
            height: 300, // set min-height to 300px
        });

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai",
        });
    });
    function selectOnlyThis(id) {
        for (var i = 1; i <= 4; i++) {
            if (
                "Check" + i === id &&
                document.getElementById("Check" + i).checked === true
            ) {
                document.getElementById("Check" + i).checked = true;
            } else {
                document.getElementById("Check" + i).checked = false;
            }
        }
    }
</script>
@endpush
