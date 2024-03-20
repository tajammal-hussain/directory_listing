@extends('layout.main')
@push('name')
    Add Role
@endpush
@section('data')
<div class="wrapper ">

    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->



    <div class="content-wrapper bg-white" style="margin-left: 280px; margin-top: 20px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Role</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Add Role</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>
        <div class="row">
            <div class="col-12">
                <!-- Custom Tabs -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><h3 class="card-title float-right">
                                <td>
                                    <a href="{{ route('manage_roles') }}" class="btn btn-primary">
                                        <i class="fa fa-plus"> &nbsp;View All</i>
                                    </a>
                                </td>
                            </h3></h3>
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="label">Name*(In Any Language)</label>
                        <input type="email" class="form-control" style="max-width: 95%; margin-left: 12px;" id="exampleInputEmail1" placeholder="5">
                    </div>
                    <div class="card-body p-0 " style="margin-top: 20px;">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <td>
                                    Setting*
                                </td>
                                <td>
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"
                                        class="btn ml-auto"
                                    />
                                </td>
                                <td class="project_progress">
                                    Language Setting*
                                </td>

                                <td class="project-actions text-right">
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Page Setting*
                                </td>
                                <td>
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                                <td class="project_progress">
                                    Blog Section*
                                </td>

                                <td class="project-actions text-right">
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Website Section*
                                </td>
                                <td>
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                                <td class="project_progress">
                                    Listing Section*
                                </td>

                                <td class="project-actions text-right">
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Review Section*
                                </td>
                                <td>
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                                <td class="project_progress">
                                    Package Section
                                </td>

                                <td class="project-actions text-right">
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dynamic Section*
                                </td>
                                <td>
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                                <td class="project_progress">
                                    Purchase Hustory*
                                </td>

                                <td class="project-actions text-right">
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Customer
                                </td>
                                <td>
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                                <td class="project_progress">
                                    Email  Template*
                                </td>

                                <td class="project-actions text-right">
                                    <input
                                        type="checkbox"
                                        name="my-checkbox"
                                        checked
                                        data-on-Text="Active"
                                        data-off-Text="Pending"
                                        data-bootstrap-switch
                                        data-off-color="danger"
                                        data-on-color="success"

                                    />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <td class="d-flex justify-content-center">
                        <button type="button" class="btn btn-block bg-gradient-success btn-sm  w-25 " style="margin-left: 380px; margin-top: 50px; margin-bottom:10px;">Submit</button>
                    </td>



</section>
@endsection
@push('script')
                        <!-- Bootstrap Switch -->
                        <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
                        <!-- Page specific script -->
                        <script>
                            $("input[data-bootstrap-switch]").each(function () {
                                $(this).bootstrapSwitch("state", $(this).prop("checked"));
                            });

                        </script>
@endpush
