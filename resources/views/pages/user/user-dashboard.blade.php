@extends('layout.user.main-layout')

@push('name')
    User Dashboard
@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body" style="display: flex; justify-content: center;">
                        <div class="ml-n5">
                            <div
                                class="h3 text-bg-secondary p-3"
                                style="background-color: blue; color: white; width: 400px; border-radius: 6px; margin-top: 50px; margin-bottom: 70px;"
                            >
                                Active Listing Items

                                <h1 class="mt-2">2</h1>
                            </div>

                            <div
                                class="h3 text-bg-secondary p-3 mt-5"
                                style="background-color: green; color: white; width: 400px;  border-radius: 6px;"
                            >
                                Pending Listing Items

                                <h1 class="mt-2">0</h1>
                            </div>
                        </div>

                        <div style="display: contents; justify-content: center;">
                            <!-- table data -->

                            <div
                                class="col-md-6 ml-5"
                                style="margin-top: 40px;"
                            >
                                <div
                                    class="card ml-2"
                                    style="width: 850px; background-color:white;"
                                >
                                    <!-- /.card-header -->

                                    <div
                                        class="card-body"
                                        style="width: 840px;"
                                    >
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td
                                                    style="width: 350px;"
                                                    class="border border-dark"
                                                >Active Package Name
                                                </td>

                                                <td class="border border-dark">Free</td>
                                            </tr>

                                            <tr>
                                                <td class="border border-dark">Package Start Date</td>

                                                <td class="border border-dark">21 February 2024</td>
                                            </tr>

                                            <tr>
                                                <td class="border border-dark">Package End Date</td>

                                                <td class="border border-dark">22 February 2024</td>
                                            </tr>

                                            <tr>
                                                <td class="border border-dark">Listing Allowed</td>

                                                <td class="border border-dark">1</td>
                                            </tr>

                                            <tr>
                                                <td class="border border-dark">Days Remaining</td>

                                                <td class="border border-dark">Expired</td>
                                            </tr>

                                            <tr>
                                                <td class="border border-dark">Featured Listing Allowed?</td>

                                                <td class="border border-dark">No</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- /.card-body -->
                                </div>

                                <!-- /.card -->
                            </div>

                            <!-- table data -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

@endsection
