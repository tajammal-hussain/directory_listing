@extends('layout.user.main-layout')

@push('name')
    Edit Profile
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Profile Information</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Profile Information</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-6 text-muted px-4">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name" class="mx-1 my-2">Name</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Name -->

                                <!-- Phone-number -->
                                <div class="form-group">
                                    <label for="phone" class="mx-1 my-2">Phone</label>

                                    <input
                                        type="phone"
                                        class="form-control"
                                        id="phone"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.phone-number -->

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="address" class="mx-1 my-2">Address</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="address"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Address -->

                                <!-- City -->
                                <div class="form-group">
                                    <label for="city" class="mx-1 my-2">City</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="city"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.City -->

                                <!-- Website -->
                                <div class="form-group">
                                    <label for="website" class="mx-1 my-2">Website</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="website"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Website -->

                                <!-- Twitter -->
                                <div class="form-group">
                                    <label for="twitter" class="mx-1 my-2">Twitter</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="twitter"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Twitter -->

                                <!-- Instagram -->
                                <div class="form-group">
                                    <label for="instagram" class="mx-1 my-2">Instagram</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="instagram"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Instagram -->

                                <!-- YouTube -->
                                <div class="form-group">
                                    <label for="youTube" class="mx-1 my-2">YouTube</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="youTube"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.YouTube -->

                            </div>
                            <!-- /.col -->

                            <!-- col -->
                            <div class="col-md-6 text-muted px-4">
                                <!-- Email-Address -->
                                <div class="form-group">
                                    <label for="email" class="mx-1 my-2">Email Address</label>

                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Email-Address -->

                                <!-- Country -->
                                <div class="form-group">
                                    <label for="country" class="mx-1 my-2">Country</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="country"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Country -->

                                <!-- State -->
                                <div class="form-group">
                                    <label for="state" class="mx-1 my-2">State</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="state"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.State -->

                                <!-- Zip -->
                                <div class="form-group">
                                    <label for="zip" class="mx-1 my-2">Zip</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="zip"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Zip -->

                                <!-- Facebook -->
                                <div class="form-group">
                                    <label for="facebook" class="mx-1 my-2">Facebook</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="facebook"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Facebook -->

                                <!-- Linkedin -->
                                <div class="form-group">
                                    <label for="linkedin" class="mx-1 my-2">Linkedin</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="linkedin"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Linkedin -->

                                <!-- Pinterest -->
                                <div class="form-group">
                                    <label for="pinterest" class="mx-1 my-2">Pinterest</label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="pinterest"
                                        placeholder=""
                                    ></input>
                                </div>
                                <!-- /.Pinterest -->

                            </div>
                            <!-- /.col -->
                        </div>

                        <button
                            type="button"
                            class="btn btn-primary"
                        >Update
                        </button>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
