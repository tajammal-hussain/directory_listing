@extends('layout.user.main-layout')
@push('name')
    Packages
@endpush
@push('custom-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        /* ul {
    list-style: none;
    }

    ul label:before {
    content: '✓';
    } */
        li {
            display: block;
        }

        .card {
            transition: all 0.3s;
        }

        .card:hover {
            transform: scale(1.1);
        }
    </style>
@endpush
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- main -->

    <div class="content-wrapper ">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Packages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pace</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-white ml-5 rounded border" style="height: 600px; width: 1000px;">
            <div class="d-flex ml-3 mt-2">
                <div class="card ml-5 mt-4"
                     style="width: 16rem; background-color: hsl(60, 100%, 100%); height: 540px;">

                    <div class="card-body">
                        <h5 class="card-title"
                            style="margin-left: 30px; font-size: larger; font-weight: 800; color: gray;">
                            PREMIUM</h5>
                        <p class="card-text"
                           style="margin-left: 30px; font-weight: bolder; font-size: xx-large;">$0/<span
                                style="font-size: small;">1 Days</span></p>
                    </div>
                    <hr>
                    <ul>
                        <li class=""><i class="fa-solid fa-check"></i>1 Listing Allowed</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>1 Amenities per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>1 Videos per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>1 Photos per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>1 Social Items per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>1 Additional Features per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-xmark"></i> Not Allowed</li>
                    </ul>
                    <button type="button" class="btn btn-danger w-75 ml-4 mb-3">Enroll Now</button>
                </div>

                <div class="card ml-5 mt-4"
                     style="width: 16rem; background-color: hsl(60, 100%, 100%); height: 540px;">

                    <div class="card-body">
                        <h5 class="card-title"
                            style="margin-left: 30px; font-size: larger; font-weight: 800; color: gray;">
                            PREMIUM</h5>
                        <p class="card-text"
                           style="margin-left: 30px; font-weight: bolder; font-size: xx-large;">$10/<span
                                style="font-size: small;">30 Days</span></p>
                    </div>
                    <hr>
                    <ul>
                        <li class=""><i class="fa-solid fa-check"></i>5 Listing Allowed</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>5 Amenities per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>5 Videos per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>5 Photos per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>5 Social Items per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>5 Additional Features per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>Featured Listing Allowed</li>
                    </ul>
                    <button type="button" class="btn btn-danger w-75 ml-4 mb-3">Enroll Now</button>
                </div>

                <div class="card ml-5 mt-4"
                     style="width: 16rem; background-color: hsl(60, 100%, 100%); height: 540px;">

                    <div class="card-body">
                        <h5 class="card-title"
                            style="margin-left: 30px; font-size: larger; font-weight: 800; color: gray;">
                            PREMIUM</h5>
                        <p class="card-text"
                           style="margin-left: 30px; font-weight: bolder; font-size: xx-large;">$45/<span
                                style="font-size: small;">60 Days</span></p>
                    </div>
                    <hr>
                    <ul>
                        <li class=""><i class="fa-solid fa-check"></i>20 Listing Allowed</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>20 Amenities per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>20 Videos per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>20 Photos per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>20 Social Items per Listing</li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>20 Additional Features per Listing
                        </li>
                        <li class="mt-4"><i class="fa-solid fa-check"></i>Featured Listing Allowed</li>
                    </ul>
                    <button type="button" class="btn btn-danger w-75 ml-4 mb-3">Enroll Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- main -->
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
@endpush

