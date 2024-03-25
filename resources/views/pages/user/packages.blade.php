@extends('layout.user.main-layout')
@push('name')
    Packages
@endpush
@push('custom-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        li {
            display: block;
        }
        .hovdiv {
            transition: all 0.2s;
        }

        .hovdiv:hover {
            transform: scale(1.05);
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

        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body d-flex justify-content-center p-5">

                        <div class="hovdiv">
                        <div class="card m-4">
                            <div class="card-header h4 text-center" style="font-size: xx-large; font-weight: 800; color: gray;">
                                FREE
                                <p style="font-weight: 500; font-size: xxx-large; color: black;">$0/<span style="font-size: large;">1 Days</span></p>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul>
                                    <li class=""><i class="fas fa-check-square m-2"></i>1 Listing Allowed</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>1 Amenities per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>1 Videos per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>1 Photos per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>1 Social Items per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>1 Additional Features per Listing</li>
                                    <li class="mt-4"><i class="fas fa-window-close m-2"></i> Not Allowed</li>
                                </ul>
                                <div class="text-center">
                                    <button type="button" class="btn btn-danger px-5">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="hovdiv">
                        <div class="card m-4">
                            <div class="card-header h4 text-center" style="font-size: xx-large; font-weight: 800; color: gray;">
                                STANDARD
                                <p style="font-weight: 500; font-size: xxx-large; color: black;">$10/<span style="font-size: large;">30 Days</span></p>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul>
                                    <li class=""><i class="fas fa-check-square m-2"></i>5 Listing Allowed</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>5 Amenities per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>5 Videos per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>5 Photos per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>5 Social Items per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>5 Additional Features per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>Featured Listing Allowed</li>
                                </ul>
                                <div class="text-center">
                                    <button type="button" class="btn btn-danger px-5">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="hovdiv">
                        <div class="card m-4">
                            <div class="card-header h4 text-center" style="font-size: xx-large; font-weight: 800; color: gray;">
                                PREMIUM
                                <p style="font-weight: 500; font-size: xxx-large; color: black;">$45/<span style="font-size: large;">60 Days</span></p>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul>
                                    <li class=""><i class="fas fa-check-square m-2"></i>20 Listing Allowed</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>20 Amenities per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>20 Videos per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>20 Photos per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>20 Social Items per Listing</li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>20 Additional Features per Listing
                                    </li>
                                    <li class="mt-4"><i class="fas fa-check-square m-2"></i>Featured Listing Allowed</li>
                                </ul>
                                <div class="text-center">
                                    <button type="button" class="btn btn-danger px-5">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- main -->
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
@endpush

