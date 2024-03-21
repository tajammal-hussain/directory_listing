@extends('layout.main')
@push('name')
    General Settings
@endpush
@push('custom-css')

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
    <!-- Navbar -->
{{--    @section('header')--}}

    <!-- /.navbar -->
{{--    @endsection--}}
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Settings</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('general_settings')}}">Settings</a>
                            </li>

                            <li class="breadcrumb-item active">General Settings</li>
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



            <!-- /.row tahir -->
            <!-- <div class="card card-primary card-outline"> -->
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                <h4>Left Sided</h4>
                    <a class="btn btn-primary" href="{{ route('dashboard') }}">
                        Back
                    </a>

                </div>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">


                            <!-- sakhi 1 to 6  -->

                            <a class="nav-link1 px-1 " id="vert-tabs-logo-tab" data-toggle="pill" href="#vert-tabs-logo" role="tab" aria-controls="vert-tabs-logo" aria-selected="true">Logo</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-favicon-tab" data-toggle="pill" href="#vert-tabs-favicon" role="tab" aria-controls="vert-tabs-favicon" aria-selected="false">Favicon</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-footer-tab" data-toggle="pill" href="#vert-tabs-footer" role="tab" aria-controls="vert-tabs-footer" aria-selected="false">Footer</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-recaptcha-tab" data-toggle="pill" href="#vert-tabs-recaptcha" role="tab" aria-controls="vert-tabs-recaptcha" aria-selected="false">Google Recaptcha</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-google-tab" data-toggle="pill" href="#vert-tabs-google" role="tab" aria-controls="vert-tabs-google" aria-selected="false">Google Analytic</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-chat-tab" data-toggle="pill" href="#vert-tabs-chat" role="tab" aria-controls="vert-tabs-chat" aria-selected="false">Tawk Live Chat</a>

                            <!-- tahir5 are added here -->
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-cookie-tab" data-toggle="pill" href="#vert-tabs-cookie" role="tab" aria-controls="vert-tabs-cookie" aria-selected="true">Cookie Consent</a>
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-Theme-tab" data-toggle="pill" href="#vert-tabs-Theme" role="tab" aria-controls="vert-tabs-Theme" aria-selected="false">Theme Color</a>
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-Customer-tab" data-toggle="pill" href="#vert-tabs-Customer" role="tab" aria-controls="vert-tabs-Customer" aria-selected="false">Customer Listing Option</a>
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-Layout-tab" data-toggle="pill" href="#vert-tabs-Layout" role="tab" aria-controls="vert-tabs-Layout" aria-selected="false">Layout Direction</a>
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-Clear-tab" data-toggle="pill" href="#vert-tabs-Clear" role="tab" aria-controls="vert-tabs-Clear" aria-selected="false">Clear Database</a>
                        </div>
                    </div>

                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <!-- sakhi added here -->
                            <div class="tab-pane text-left fade show active" id="vert-tabs-logo" role="tabpanel" aria-labelledby="vert-tabs-logo-tab">
                                <label>Existing Logo</label><br/>
                                <i class="fa-solid fa-person text-xl text-purple"></i><br/>
                                <label>Change Logo</label><br/>
                                <input type="file"/>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Site Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Clica Plumbers">
                                </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-favicon" role="tabpanel" aria-labelledby="vert-tabs-favicon-tab">
                                <label>Existing Logo</label><br/>
                                <i class="fa-solid fa-person text-xl text-purple"></i><br/>
                                <label>Change Logo</label><br/>
                                <input type="file"/>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-footer" role="tabpanel" aria-labelledby="vert-tabs-footer-tab">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Column 1 - Heading</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="  Categories">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Column 1 - Total  Items</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="5">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Column 2 - Heading</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Locations">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Column 1 - Total Items</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="5">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Column 3 - Heading</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Footer Menu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Footer Column 4 - Heading</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Plumbers Will Do">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Footer Address</label>
                                        <div class="select2-purple">
                                            <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 205%;">
                                                <h1>Hello</h1>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-recaptcha" role="tabpanel" aria-labelledby="vert-tabs-recaptcha-tab">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Google Recaptcha Site Key</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="6Lcf1VObAAAAAIN5nY_OMXqOhUuTiKTt_XOYM-_">
                                </div>
                                <div class="form-group">
                                    <label>Google Recaptcha Status</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Hide</option>
                                    </select>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-google" role="tabpanel" aria-labelledby="vert-tabs-google-tab">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Google Analytic Tracking ID</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="GTM-NZHPQCP5">
                                </div>
                                <div class="form-group">
                                    <label>Google Analytic Status</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Show</option>
                                    </select>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-chat" role="tabpanel" aria-labelledby="vert-tabs-chat-tab">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tawk Live Chat Code</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="6Of260f6d6e761Oa49abaef3">
                                </div>
                                <div class="form-group">
                                    <label>Tawk Live Chat Status</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Hide</option>
                                    </select>
                                </div>
                            </div>


                            <!-- tahir added here -->
                            <!-- Tahir  cookie page design -->
                            <div class="tab-pane fade" id="vert-tabs-cookie" role="tabpanel" aria-labelledby="vert-tabs-cookie-tab">
                                <label for="exampleInputEmail1">Cookie Consent Message</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="This website uses cookie to ensure you get the best experience on our website">

                                <label for="exampleInputEmail1"> Cookie Consent Button Text</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ACCEPT">

                                <label for="exampleInputEmail1">  Cookie Consent Text Color</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="F8FFED">

                                <label for="exampleInputEmail1">   Cookie Consent Backgound Color</label>
                                <!-- <div class="ml-2 bg-danger text-white rounded h-100 ">533CA2</div> -->

                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="533CA2">

                                <label for="exampleInputEmail1"> Cookie Consent  Button Text Color</label>
                                <!-- <div class="ml-2 bg-danger text-white  rounded">FF5757</div> -->

                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="FF5757">

                                <label for="exampleInputEmail1"> Cookie Consent Button Backgound Color</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="FFFFFF">


                                <label for="exampleInputEmail1"> Cookie Consent  Status</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Show">
                                <br><br>


                            </div>

                            <!-- Tahir  Theme color design -->
                            <div class="tab-pane fade" id="vert-tabs-Theme" role="tabpanel" aria-labelledby="vert-tabs-Theme-tab">
                                <label for="exampleInputEmail1">Theme Color</label>

                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="533CA2">

                                <label for="exampleInputEmail1">Special Label Color</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="FF5757">

                            </div>


                            <!-- Tahir Customer design -->
                            <div class="tab-pane fade" id="vert-tabs-Customer" role="tabpanel" aria-labelledby="vert-tabs-Customer-tab">

                                <div class="form-group">
                                    <label>Customer Listing</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">On</option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>

                            </div>

                            <!-- Tahir Layout Direction design -->
                            <div class="tab-pane fade" id="vert-tabs-Layout" role="tabpanel" aria-labelledby="vert-tabs-Layout-tab">

                                <div class="form-group">
                                    <label>Layout Direction</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">LTR(Left to Right)</option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>

                            </div>

                            <!-- TahirClear Database design -->
                            <div class="tab-pane fade" id="vert-tabs-Clear" role="tabpanel" aria-labelledby="vert-tabs-Clear-tab">

                                <div class="form-group">
                                    <label>Clear Database</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Hide</option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                    <td>
                        <button type="button" class="btn btn-block btn-success mt-4">Update</button>
                    </td>
                </div>



@endsection
