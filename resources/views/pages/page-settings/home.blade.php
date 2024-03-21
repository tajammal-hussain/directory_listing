@extends('layout.main')
@push('name')
    Home
@endpush
    @push('custom-css')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>home</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Page Settings</a>
                            </li>

                            <li class="breadcrumb-item active">home</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid d-flex flex-row justify-content-between">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="card card-primary card-outline"> -->
                        <h4>Edit</h4>

                        <!-- /.card -->
                    </div>
                </div>
                <a class="btn btn-primary" href="{{ route('dashboard') }}">
                    Back
                </a>
                <!-- /.col -->
            </div>
            <!-- ./row -->
            <div class="card-body">
{{--                <h4>Edit Home Page Information</h4>--}}
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <!-- tahir home 1 to 6  -->

                            <a class="nav-link1 px-1 " id="vert-tabs-logo-tab" data-toggle="pill" href="#vert-tabs-logo" role="tab" aria-controls="vert-tabs-logo" aria-selected="true">SEO Section</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-favicon-tab" data-toggle="pill" href="#vert-tabs-favicon" role="tab" aria-controls="vert-tabs-favicon" aria-selected="false">Search Section</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-footer-tab" data-toggle="pill" href="#vert-tabs-footer" role="tab" aria-controls="vert-tabs-footer" aria-selected="false">Image With Text</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-recaptcha-tab" data-toggle="pill" href="#vert-tabs-recaptcha" role="tab" aria-controls="vert-tabs-recaptcha" aria-selected="false">Image With Text 2</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-google-tab" data-toggle="pill" href="#vert-tabs-google" role="tab" aria-controls="vert-tabs-google" aria-selected="false">Category Section</a>
                            <a class="nav-link1  mt-2 px-1" id="vert-tabs-chat-tab" data-toggle="pill" href="#vert-tabs-chat" role="tab" aria-controls="vert-tabs-chat" aria-selected="false">Listing Section</a>
                            <a class="nav-link1 mt-2 px-1" id="vert-tabs-cookie-tab" data-toggle="pill" href="#vert-tabs-cookie" role="tab" aria-controls="vert-tabs-cookie" aria-selected="true">Location Section</a>


                        </div>
                    </div>

                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">


                            <div class="tab-pane text-left fade " id="vert-tabs-logo" role="tabpanel" aria-labelledby="vert-tabs-logo-tab">

                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Trusted Plumbers Direectory UK | ClicaPlumbers">

                                <label for="exampleInputEmail1">Meta Decription</label>
                                <textarea class="form-control"  placeholder="At Clica Plumbers we conect you with skilled professional plumbers right un your neighbourhood ,ensuring quick response times aand familiarity with Your area's specific needs." id="floatingTextarea2" style="height: 60px"></textarea>

                            </div>

                            <div class="tab-pane fade" id="vert-tabs-favicon" role="tabpanel" aria-labelledby="vert-tabs-favicon-tab">

                                <label for="exampleInputEmail1">Search Heading</label>
                                <textarea class="form-control"  placeholder="Find Trusted Plumbers Nearby"id="floatingTextarea2" style="height: 70px"></textarea>


                                <label for="exampleInputEmail1">Search Text</label>
                                <textarea class="form-control"   placeholder="Stop the stress and ditch theDIY despaire! Using Clica Plumbers directory to find the right plumbers near you is a breeze!" id="floatingTextarea2" style="height: 60px"></textarea>


                                <label>Existing Search Background</label><br/>
                                <i class="fa-solid fa-person text-xl text-purple"></i><br/>
                                <label>Change Search Background</label><br/>
                                <input type="file"/>
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-footer" role="tabpanel" aria-labelledby="vert-tabs-footer-tab">
                                <label for="exampleInputEmail1">Title </label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="UK's Plumbing Directory">

                                <label for="exampleInputEmail1">Description</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Want to connect with more users in your area who need your plumbing services? Ditch leaky pipes of traditional advertinsing and drive into Clica Plumbers, the plateform built to amplify your bussiness. We're not justanother directory ,we're your direct line to a steady stream of qualiified customers,ready to flow right" id="floatingTextarea2" style="height: 102px"></textarea>
                                    <!-- <label for="floatingTextarea2">Comments</label> -->
                                </div>

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

                            <div class="tab-pane fade" id="vert-tabs-google" role="tabpanel" aria-labelledby="vert-tabs-google-tab">

                                <label for="exampleInputEmail1">Heading</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Categories">

                                <label for="exampleInputEmail1">Subheading</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please see all the listing categories from here">

                                <label for="exampleInputEmail1">Total items</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="4">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="show">

                                <label for="exampleInputEmail1">Listing Counter</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Hide">
                            </div>

                            <div class="tab-pane fade" id="vert-tabs-chat" role="tabpanel" aria-labelledby="vert-tabs-chat-tab">
                                <label for="exampleInputEmail1">Heading</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Featured Listings">

                                <label for="exampleInputEmail1">Subheading</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="See all the popular listing from below">

                                <label for="exampleInputEmail1">Status</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Show">

                            </div>




                            <div class="tab-pane fade" id="vert-tabs-cookie" role="tabpanel" aria-labelledby="vert-tabs-cookie-tab">
                                <label for="exampleInputEmail1">Heading</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Locations">

                                <label for="exampleInputEmail1">Subheading</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder=" Please See all the listing locations from here">

                                <label for="exampleInputEmail1">Total items</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="12">

                                <label for="exampleInputEmail1">Status</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Show">

                                <label for="exampleInputEmail1">Location Counter</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Hide">
                            </div>


                        </div>
                    </div>
                    <td>
                        <button type="button" class="btn btn-block btn-success mt-4">Update</button>
                    </td>
                </div>
        </section>
@endsection
