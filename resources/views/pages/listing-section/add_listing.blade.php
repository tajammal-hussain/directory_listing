@extends('layout.main')
@push('name')
    Add Listing
@endpush
    @push('custom-css')
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
        <style>

            .nav-tabs {
                border-right: none;
            }
            #vert-tabs-tab.nav-tabs {
                border-right: none;
                border-radius: 14px;
            }

            .nav-link1{
                background-color: rgb(226, 223, 223);

                width: 180px;
                margin-left: 240px;
                border-radius: 5px;
                font-size: larger;
            }
            .nav-link1.active{
                background-color: rgb(127, 127, 252);
                color: white;

            }

        </style>
    @endpush
    @section('data')

        <div class="wrapper">

            <div class="card-body " style="margin-left: 30px; border-radius: 5px; ">
                <div class="row " >

                    <div class="col-5 col-sm-3 " >
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link1 px-1 " id="vert-tabs-main-tab" data-toggle="pill" href="#vert-tabs-main" role="tab" aria-controls="vert-tabs-main" aria-selected="true">Main Section</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-media-tab" data-toggle="pill" href="#vert-tabs-media" role="tab" aria-controls="vert-tabs-media" aria-selected="false">Social Media</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-amenity-tab" data-toggle="pill" href="#vert-tabs-amenity" role="tab" aria-controls="vert-tabs-amenity" aria-selected="false">Amenity</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-photo-tab" data-toggle="pill" href="#vert-tabs-photo" role="tab" aria-controls="vert-tabs-photo" aria-selected="false">Photo Gallery</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-video-tab" data-toggle="pill" href="#vert-tabs-video" role="tab" aria-controls="vert-tabs-video" aria-selected="false">Video Gallery</a>


                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-feature-tab" data-toggle="pill" href="#vert-tabs-feature" role="tab" aria-controls="vert-tabs-feature" aria-selected="true">Additional Features</a>
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-seo-tab" data-toggle="pill" href="#vert-tabs-seo" role="tab" aria-controls="vert-tabs-seo" aria-selected="false">SEO</a>
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-status-tab" data-toggle="pill" href="#vert-tabs-status" role="tab" aria-controls="vert-tabs-status" aria-selected="false">Status & Featured</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-hour-tab" data-toggle="pill" href="#vert-tabs-hour" role="tab" aria-controls="vert-tabs-hour" aria-selected="false">Opening Hours</a>

                        </div>
                    </div>

                    <div class="col-7 col-sm-9">
                        <div class="tab-content " id="vert-tabs-tabContent">
                            <!-- one -->
                            <div class="tab-pane text-left fade show active "  id="vert-tabs-main" role="tabpanel" aria-labelledby="vert-tabs-logo-tab">
                                <div style="display: flex;">
                                    <div class="form-group" style="margin-left: 150px;">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="email" class="form-control h-50"  style="width: 350px;" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group " style="margin-left: 70px;">
                                        <label for="exampleInputEmail1">Slug</label>
                                        <input type="email" class="form-control h-50"  style="width: 350px;" id="exampleInputEmail1" >
                                    </div>
                                </div>

                                <div class="row "  style="margin-left: 145px;">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Description*
                                                </h3>
                                            </div>

                                            <div class="card-body ">
                         <textarea id="summernote">

                         </textarea>
                                            </div>

                                        </div>

                                    </div>
                                    <div style="display: flex;">
                                        <div>
                                            <div class="form-group w-100">
                                                <label>Minimal</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select>
                                            </div>
                                            <div class="form-group w-100">
                                                <label>Address</label>
                                                <textarea class="form-control" rows="3" ></textarea>
                                            </div>
                                            <div class="form-group w-100">
                                                <label>Email</label>
                                                <textarea class="form-control" rows="3" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Slug</label>
                                                <input type="email" class="form-control h-50"  style="width: 300px;" id="exampleInputEmail1" >
                                            </div>
                                            <div class="form-group w-100">
                                                <label>Map(iFrame Code)</label>
                                                <textarea class="form-control" rows="3" ></textarea>
                                            </div>
                                            <div>
                                                <label>Featured Photo*</label><br>
                                                <input type="file"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Slug</label>
                                                <input type="email" class="form-control " placeholder="FFFFFFFF"  style="width: 100%" id="exampleInputEmail1" >
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group ml-5">
                                                <label>Minimal</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select>
                                            </div>
                                            <div class="form-group  ml-5">
                                                <label>Address</label>
                                                <textarea class="form-control " style="width: 400px;" rows="3" ></textarea>
                                            </div>
                                            <div class="form-group  ml-5">
                                                <label>Address</label>
                                                <textarea class="form-control" rows="3" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- one -->
                            <!-- third -->
                            <div class="tab-pane fade " id="vert-tabs-media"role="tabpanel" aria-labelledby="vert-tabs-media-tab">
                                <label class="text-blue " style="margin-left: 120px;">Social Icons</label>
                                <hr class="w-75"/>
                                <div class="d-flex flex-row">
                                    <div class="form-group  w-25" style="margin-left: 120px;" >
                                        <select class="form-control select2" >
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                    <div class="form-group w-50 ml-2" >

                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div>
                                        <ul class="nav nav-pills ml-auto p-2 " style="margin-top: -10px;">
                                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">+</a></li>
                                            <li class="nav-item dropdown">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- third -->
                            <!-- four -->
                            <div class="tab-pane fade " id="vert-tabs-amenity"role="tabpanel" aria-labelledby="vert-tabs-amenity-tab">
                                <label class="text-blue" style="margin-left: 120px;">Amenity</label>
                                <hr class="w-75"/>
                            </div>
                            <!-- four -->
                            <!-- five -->
                            <div class="tab-pane fade " id="vert-tabs-photo"role="tabpanel" aria-labelledby="vert-tabs-photo-tab">
                                <label class="text-blue" style="margin-left: 120px;">Photos</label>
                                <hr class="w-75"/>
                                <div class="d-flex col" style="margin-left: 110px;">
                                    <div>
                                        <form>
                                            <input type="file">
                                        </form>
                                    </div>
                                    <div>
                                        <ul class="nav nav-pills ml-auto p-2 " style="margin-top: -10px;">
                                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">+</a></li>
                                            <li class="nav-item dropdown">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- five -->
                            <!-- six -->
                            <div class="tab-pane fade " id="vert-tabs-video"role="tabpanel" aria-labelledby="vert-tabs-photo-tab">
                                <label style="margin-left: 120px; color: blue;">
                                    Videos
                                </label>
                                <hr class="w-75"/>
                                <div class="d-flex row" style="margin-left: 110px;">
                                    <div class="form-group w-50 ml-2" >
                                        <input type="email" class="form-control " placeholder="You Tube Videos ID" id="exampleInputEmail1" >
                                    </div>
                                    <div class="ml-5">
                                        <ul class="nav nav-pills ml-auto p-2 " style="margin-top: -10px;">
                                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">+</a></li>
                                            <li class="nav-item dropdown">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- six -->
                            <!-- seven -->
                            <div class="tab-pane fade " id="vert-tabs-feature"role="tabpanel" aria-labelledby="vert-tabs-photo-tab">
                                <label class=" text-blue" style="margin-left: 110px;"> Additional Features</label>
                                <hr class="w-75"/>
                                <div class="d-flex " style="margin-left: 100px;" >
                                    <div class="form-group w-50 ml-2" >
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div>
                                        <ul class="nav nav-pills ml-auto p-2 " style="margin-top: -10px;">
                                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">+</a></li>
                                            <li class="nav-item dropdown">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex"  style="margin-left: 100px;">
                                    <div class="form-group w-50 ml-2" >
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div>
                                        <ul class="nav nav-pills ml-auto p-2 " style="margin-top: -10px;">
                                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">+</a></li>
                                            <li class="nav-item dropdown">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex" style="margin-left: 100px;">
                                    <div class="form-group w-50 ml-2" >
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div>
                                        <ul class="nav nav-pills ml-auto p-2 " style="margin-top: -10px;">
                                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">+</a></li>
                                            <li class="nav-item dropdown">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- seven -->
                            <!-- Eight -->
                            <div class="tab-pane fade " id="vert-tabs-seo"role="tabpanel" aria-labelledby="vert-tabs-photo-tab">
                                <div class="form-group w-75 ml-2" >
                                    <label style="margin-left: 110px;">Title</label>
                                    <input type="email" style="margin-left: 110px;" class="form-control "  id="exampleInputEmail1" >
                                </div>
                                <div class="form-group w-75">
                                    <label style="margin-left: 115px;">Meta Description</label>
                                    <textarea class="form-control" style="margin-left: 120px;" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- Eight -->
                            <!-- Ninth -->
                            <div class="tab-pane fade " id="vert-tabs-status"role="tabpanel" aria-labelledby="vert-tabs-photo-tab">
                                <div class="form-group  w-50" >
                                    <label style="margin-left: 115px;">Status</label>
                                    <select class="form-control select2" style="margin-left: 120px;" >
                                        <option selected="selected">Active</option>
                                        <option>No Active</option>
                                    </select>
                                </div>
                                <div class="form-group  w-50" >
                                    <label style="margin-left: 115px;">Is Featured?</label>
                                    <select class="form-control select2" style="margin-left: 120px;" >
                                        <option selected="selected">Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Ninth -->
                            <!-- Ten -->
                            <div class="tab-pane fade " id="vert-tabs-hour"role="tabpanel" aria-labelledby="vert-tabs-hour-tab">
                                <label style="margin-left: 120px; color: blue;">Opening  Hours</label>
                                <hr class="w-75" />
                                <div class="d-flex" style="margin-left: 110px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Monday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <label>Tuesday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="d-flex" style="margin-left: 110px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Wednesday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <label>Thursday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="d-flex" style="margin-left: 110px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Friday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <label>Saturday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="d-flex" style="margin-left: 110px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Sunday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>

                            </div>
                            <!-- Ten -->
                        </div>
                    </div>
                </div>
            </div>


            <td class="d-flex justify-content-center">
                <button type="button" class="btn btn-block bg-gradient-success btn-sm   " style=" margin-top: 50px; margin-bottom:2400px;">Submit</button>
            </td>


       @endsection

@push('script')
            <!-- Select2 -->
            <script src="../../plugins/select2/js/select2.full.min.js"></script>
            <!-- Bootstrap4 Duallistbox -->
            <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
            <!-- InputMask -->
            <script src="../../plugins/moment/moment.min.js"></script>
            <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
            <!-- date-range-picker -->
            <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
            <!-- bootstrap color picker -->
            <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
            <!-- Bootstrap Switch -->
            <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
            <!-- BS-Stepper -->
            <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
            <!-- dropzonejs -->
            <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
            <!-- Page specific script -->

            <script>

                $("input[data-bootstrap-switch]").each(function () {
                    $(this).bootstrapSwitch("state", $(this).prop("checked"));
                });
                $(function () {
                    // Summernote
                    $('#summernote').summernote()

                    // CodeMirror
                    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                        mode: "htmlmixed",
                        theme: "monokai"
                    });
                })
            </script>
@endpush
