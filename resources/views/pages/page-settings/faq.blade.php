@extends('layout.main')
@push('name')
    FAQ
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
                            <h1>Edit FAQ Page Information</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Faq Page Info</li>
                            </ol>
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
                        placeholder="FAQ"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                    />
                </div>

                <!-- /.card-header -->
                <div class="card-body" style="padding: 0%">
                    <span style="font-size: large">Details</span>
                    <textarea id="summernote">

                Place <em>some</em> <u>text</u> <strong>here</strong><br />
                <strong>3) Are there any special rates or discounts available?</strong><br />
For plumbers listed here, we offer a special 25% discount voucher to work with a Local Business Agency we partnered with. For customers, there may be some plumbers who offer discounts, bundled service packages, or special promotions. You can browse individual plumber profiles to find deals relevant to you.<br />
<strong>4)What types of plumbing services do the listed companies offer?</strong> <br />
Plumbers listed here offer a full range of services like repairs, installations, maintenance, gas work, drainage, etc.<br />
<strong>5) What should I do in a plumbing emergency?</strong><br />
Emergencies can be stressful. Just use our filter on the Listing page and search for plumbers in your area or nearby. There will be many who offer emergency services.<br />

              </textarea
              >
                </div>

                <!-- <div class="checkbox" style="display: inline-block;"><label class="unselectable"><input id="chkAlreadyDelivered" type="checkbox" checked=""> Skrij že oddane količine</label></div>
      <button class="btn btn-primary" style="display: inline-block;">Natisni</button>
      <div class="checkbox" style="display: inline-block;"><label class="unselectable"><input id="chkAlreadyDelivered" type="checkbox" checked=""> Natisni artikle iz privzete ponudbe</label></div> -->
                <div
                    class=""
                    style="
              width: 250px;
              display: flex;
              align-items: center;
              justify-content: space-around;
            "
                >
                    <span style="font-weight: bolder">Status</span>
                    <!-- <input type="checkbox" id="Check1" value="Show" onclick="selectOnlyThis(this.id)" >Show</input>
                            <input type="checkbox" id="Check2" value="Hide" onclick="selectOnlyThis(this.id)" >Hide</input> -->
                    <div class="custom-control custom-radio">
                        <input
                            class="custom-control-input custom-control-input-primary custom-control-input-outline"
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
                            class="custom-control-input custom-control-input-primary custom-control-input-outline"
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
                                    placeholder="FAQ"
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

    </div>
    <!-- ./wrapper -->
@endsection
@push('script')
    <!-- CodeMirror -->
    <script src="../../plugins/codemirror/codemirror.js"></script>
    <script src="../../plugins/codemirror/mode/css/css.js"></script>
    <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

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
