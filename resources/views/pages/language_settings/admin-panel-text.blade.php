@extends('layout.main')
@push('name')
    Admin Panel Text
@endpush
@section('data')
<!-- Site wrapper -->
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
                        <h1>Admin Panel Text</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin-panel-text')}}">Language Settings</a>
                            </li>

                            <li class="breadcrumb-item active">Admin Panel Text</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="card-title position-relative mt-2">Setup Key Values</div>
                        <a class="btn btn-primary d-flex justify-content-end ml-5 mb-3" href="{{ route('dashboard') }}">
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <!--Table -->
                    <table class="table table-bordered" id="myTable">
                        <thead>
                        <tr>
                            <th style="width: 50%">Key</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <button
                        style="margin-top: 16px"
                        type="button"
                        class="btn btn-block btn-success btn-xs"
                    >
                        Update
                    </button>
                    <!--Table -->
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection
@push('script')

    <script>
        // Sample array containing data
        const dataArray = [
            ["ERR_EMAIL_REQUIRED", "Email Required"],
            ["ERR_EMAIL_INVALID", "Email Invalid"],
            ["ERR_PASSWORD_REQUIRED", "Password Required"],
            ["ERR_RECAPTCHA_REQUIRED", "Recaptcha Required"],
            ["ERR_NAME_REQUIRED", "Name Required"],
            ["ERR_RE_PASSWORD_REQUIRED", "Re-Password Required"],
            ["ERR_PASSWORDS_MATCH", "Passwords Match"],
            ["ERR_NEW_PASSWORD_REQUIRED", "New Password Required"],
            ["ERR_CUSTOMER_NOT_FOUND", "Customer Not Found"],
            ["SUCCESS_LOGIN", "Success Login"],
            ["SUCCESS_REGISTRATION_EMAIL_SEND", "Success Registration Email Send"],
            [
                "SUCCESS_REGISTRATION_VERIFY_DONE",
                "Success Registration Verify Done",
            ],
            ["ERR_EMAIL_NOT_FOUND", "Email Not Found"],
            [
                "SUCCESS_FORGET_PASSWORD_EMAIL_SEND",
                "Success Forget Password Email Send",
            ],
            ["SUCCESS_RESET_PASSWORD", "Success Reset Password"],
            ["ERR_COMMENT_REQUIRED", "Comment Required"],
            ["SUCCESS_BLOG_COMMENT", "Success Blog Comment"],
            ["ERR_MESSAGE_REQUIRED", "Message Required"],
            ["SUCCESS_CONTACT_MESSAGE", "Success Contact Message"],
            ["ERR_EMAIL_EXIST", "Email Exist"],
            ["SUCCESS_PASSWORD_UPDATE", "Success Password Update"],
            ["SUCCESS_PROFILE_UPDATE", "Success Profile Update"],
            ["SUCCESS_PHOTO_UPDATE", "Success Photo Update"],
            ["ERR_PHOTO_REQUIRED", "Photo Required"],
            ["ERR_PHOTO_IMAGE", "Photo Image"],
            ["ERR_PHOTO_JPG_PNG_GIF", "Photo JPG PNG GIF"],
            ["ERR_PHOTO_MAX", "Photo Max"],
            ["SUCCESS_BANNER_UPDATE", "Success Banner Update"],
            ["ERR_ENROLL_PACKAGE_FIRST", "Enroll Package First"],
            ["ERR_LISTING_DATE_EXPIRED", "Listing Date Expired"],
            ["ERR_LISTING MAXIMUM_LIMIT_REACHED", "Listing Maximum Limit Reached"],
            ["ERR_NAME_EXIST", "Name Exist"],
            ["ERR_SLUG_UNIQUE", "Slug Unique"],
            ["ERR_DESCRIPTION_REQUIRED", "Description Required"],
            ["ERR_PHONE_REQUIRED", "Phone Required"],
            ["ERR_PHONE_UNIQUE", "Phone Unique"],
            ["ERR_SLUG_WHITESPACE", "Slug Whitespace"],
            ["SUCCESS_LISTING_ADD", "Success Listing Add"],
            ["SUCCESS_LISTING_EDIT", "Success Listing Edit"],
            ["SUCCESS_LISTING_DELETE", "Success Listing Delete"],
            ["SUCCESS_SOCIAL_ITEM_DELETE", "Success Social Item Delete"],
            ["SUCCESS_PHOTO_DELETE", "Success Photo Delete"],
            ["SUCCESS_VIDEO_DELETE", "Success Video Delete"],
            [
                "SUCCESS_ADDITIONAL_FEATURE_DELETE",
                "Success Additional Feature Delete",
            ],
            ["ERR_REVIEW_REQUIRED", "Review Required"],
            ["SUCCESS_RATING_PLACED", "Success Rating Placed"],
            ["SUCCESS_PACKAGE_ENROLL", "Success Package Enroll"],
            ["SUCCESS_REVIEW_UPDATE", "Success Review Update"],
            ["SUCCESS_REVIEW_DELETE", "Success Review Delete"],
            [
                "SUCCESS_ITEM_REMOVED_FROM_WISHLIST",
                "Success Item Removed From Wishlist",
            ],
            ["SUCCESS_PACKAGE_PURCHASE", "Success Package Purchase"],
        ];

        // Function to populate the table
        function populateTable() {
            var table = document.getElementById("myTable");
            var tbody = table.getElementsByTagName("tbody")[0];

            // Clear existing rows if any
            tbody.innerHTML = "";

            // Loop through the data array and create rows and cells
            dataArray.forEach(function (rowData) {
                var row = document.createElement("tr");

                rowData.forEach(function (cellData, index) {
                    var cell = document.createElement("td");
                    var input = document.createElement("input");
                    input.setAttribute("type", "text");
                    input.setAttribute(
                        "placeholder",
                        index === 0 ? cellData : cellData
                    );
                    input.style.width = "100%";
                    input.style.fontSize = "small";
                    input.style.borderRadius = "5px";
                    input.style.padding = "4px";
                    input.style.borderWidth = "1px";

                    // For the first column, disable the input
                    if (index === 0) {
                        input.setAttribute("disabled", "disabled");
                        input.style.backgroundColor = "#eaecf4";
                        input.style.textTransform = "uppercase";
                    }

                    cell.appendChild(input);
                    row.appendChild(cell);
                });

                tbody.appendChild(row);
            });
        }

        // Call the function to populate the table
        populateTable();
    </script>
@endpush
