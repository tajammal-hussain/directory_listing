@extends('layout.main')
    @push('name')
    Add Listing
    @endpush
     @push('custom-css')
         <!-- SweetAlert2 -->
         <link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">
         <!-- Toastr -->
         <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
         <!-- Theme style -->
         <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Listing</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('listing1')}}">Listing</a>
                            </li>

                            <li class="breadcrumb-item active">Add Listing</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- ./row -->
            <!-- tahir end of sidebar -->


            <!-- tahir general setting -->


            <!-- /.row tahir -->
            <!-- <div class="card card-primary card-outline"> -->

            <div class="card-body ">
                <div class="d-flex flex-row justify-content-between">
                <h4 class="position-relative mt-3">Edit Home Page Information</h4>
                <a class="btn btn-primary d-flex justify-content-end ml-5 mb-3" href="{{ route('dashboard') }}">
                    Back
                </a>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <!-- tahir home 1 to 6  -->

                            <a class="nav-link1 px-1" id="vert-tabs-main-tab" data-toggle="pill" href="#vert-tabs-main" role="tab" aria-controls="vert-tabs-main" aria-selected="true">Main Section</a>
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
                        <div class="tab-content" id="vert-tabs-tabContent">


                            <div class="tab-pane text-left show" id="vert-tabs-main" role="tabpanel" aria-labelledby="vert-tabs-logo-tab">

                                <div style="display: flex;">
                                    <div class="form-group" style="margin-left: 15px;">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="email" class="form-control h-50"  style="width: 350px;" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group " style="margin-left: 40px;">
                                        <label for="exampleInputEmail1">Slug</label>
                                        <input type="email" class="form-control h-50"  style="width: 350px;" id="exampleInputEmail1" >
                                    </div>
                                </div>

                                <div class="row "  style="margin-left: 10px;">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header ">
                                                <h3 class="card-title">
                                                    Description*
                                                </h3>
                                            </div>

                                            <div class="card-body ">
                                  <textarea id="summernote" class="w-100">

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
                            <div class="tab-pane fade" id="vert-tabs-media" role="tabpanel" aria-labelledby="vert-tabs-favicon-tab">

                                <label class="text-blue " style="margin-left: 3px;">Social Icons</label>
                                <hr class="w-100"/>
                                <div class="d-flex flex-row">
                                    <div class="form-group  w-50" style="margin-left: 5px;" >
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
                            <!-- two -->
                            <div class="tab-pane fade" id="vert-tabs-amenity" role="tabpanel" aria-labelledby="vert-tabs-footer-tab">
                                <label class="text-blue" style="margin-left: 4px;">Amenity</label>
                                <hr class="w-100"/>
                            </div>
                            <!-- three -->
                            <div class="tab-pane fade" id="vert-tabs-recaptcha" role="tabpanel" aria-labelledby="vert-tabs-recaptcha-tab">
                                <label for="exampleInputEmail1">Title </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="UK's Plumbing Directory">

                                <label for="exampleInputEmail1">Description</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="tahir">

                                <label>Existing Image</label><br/>
                                <i class="fa-solid fa-person text-xl text-purple"></i><br/>
                                <label>Change Search Background</label><br/>
                                <input type="file"/><br>

                                <label for="exampleInputEmail1">Show Position</label><br>

                                <input type="radio" id="left" name="image" value="left" checked>
                                <label for="left">Image Left</label>

                                <input type="radio" id="right" name="image" value="right">
                                <label for="right">Image Right</label>

                                <br>
                                <label for="exampleInputEmail1">Link</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="https://www.clicaplumbers.co.uk/customer/login">

                            </div>
                            <!-- four -->
                            <div class="tab-pane fade" id="vert-tabs-photo" role="tabpanel" aria-labelledby="vert-tabs-google-tab">

                                <label class="text-blue" style="margin-left: 5px;">Photos</label>
                                <hr class="w-100"/>
                                <div class="d-flex col" >
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
                            <div class="tab-pane fade" id="vert-tabs-video" role="tabpanel" aria-labelledby="vert-tabs-chat-tab">
                                <label style="margin-left: 6px; color: blue;">
                                    Videos
                                </label>
                                <hr class="w-100"/>
                                <div class="d-flex row">
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
                            <div class="tab-pane fade" id="vert-tabs-feature" role="tabpanel" aria-labelledby="vert-tabs-cookie-tab">
                                <label class=" text-blue" style="margin-left: 3px;"> Additional Features</label>
                                <hr class="w-100"/>
                                <div class="d-flex "  >
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
                                <div class="d-flex" >
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
                                <div class="d-flex">
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
                            <div class="tab-pane fade" id="vert-tabs-seo" role="tabpanel" aria-labelledby="vert-tabs-cookie-tab">
                                <div class="form-group w-75 ml-2" >
                                    <label style="margin-left: 1px;">Title</label>
                                    <input type="email" style="margin-left: 1px;" class="form-control "  id="exampleInputEmail1" >
                                </div>
                                <div class="form-group w-75">
                                    <label style="margin-left: 10px;">Meta Description</label>
                                    <textarea class="form-control" style="margin-left: 10px;" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- eight    -->
                            <div class="tab-pane fade" id="vert-tabs-status" role="tabpanel" aria-labelledby="vert-tabs-cookie-tab">
                                <div class="form-group  w-50" >
                                    <label style="margin-left: 10px;">Status</label>
                                    <select class="form-control select2" style="margin-left: 10px;" >
                                        <option selected="selected">Active</option>
                                        <option>No Active</option>
                                    </select>
                                </div>
                                <div class="form-group  w-50" >
                                    <label style="margin-left: 10px;">Is Featured?</label>
                                    <select class="form-control select2" style="margin-left: 10px;" >
                                        <option selected="selected">Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <!-- nine -->
                            <div class="tab-pane fade" id="vert-tabs-hour" role="tabpanel" aria-labelledby="vert-tabs-cookie-tab">
                                <label style="margin-left: 10px; color: blue;">Opening  Hours</label>
                                <hr class="w-100" />
                                <div class="d-flex" style="margin-left: 6px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Monday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <label>Tuesday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="d-flex" style="margin-left: 6px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Wednesday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <label>Thursday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="d-flex" style="margin-left: 6px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Friday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group w-50 ml-2" >
                                        <label>Saturday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>
                                <div class="d-flex" style="margin-left: 6px;">
                                    <div class="form-group w-50 ml-2" >
                                        <label>Sunday</label>
                                        <input type="email" class="form-control " placeholder="FFFFFFFF" id="exampleInputEmail1" >
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <td>
                <button type="button" class="btn btn-block btn-success mt-4">Update</button>
            </td>
    @endsection
