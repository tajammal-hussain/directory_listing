@extends('layout.main')
@push('name')
    Notification Text
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
                        <h1>Language (Notifications Text Change)</h1>
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
                    <h3 class="card-title">Setup Key Values</h3>
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection
@push('script')

    <script>
        // Sample array containing data
        const dataArray = [
            ["FIND_ANYTHING", "Find Anything"],
            ["SELECT_LOCATION", "Select Location"],
            ["SELECT_CATEGORY", "Select Category"],
            ["SEARCH", "Search"],
            ["LISTINGS", "Listings"],
            ["FEATURED", "Featured"],
            ["REVIEWS", "Reviews"],
            ["HOME", "Home"],
            ["ADDRESS", "Address"],
            ["PHONE_NUMBER", "PhoneNumber"],
            ["PHONE", "Phone"],
            ["EMAIL_ADDRESS", "EmailAddress"],
            ["EMAIL", "Email"],
            ["CONTACT_FORM", "Contact Form"],
            ["NAME", "Name"],
            ["MESSAGE", "Message"],
            ["SEND_MESSAGE", "SendMessage"],
            ["FILTERS", "Filters"],
            ["FILTER", "Filter"],
            ["CATEGORIES", "Categories"],
            ["LOCATIONS", "Locations"],
            ["AMENITIES", "Amenities"],
            ["ADD_TO_WISHLIST", "Add To Wishlist"],
            ["REPORT", "Report"],
            ["SUBMIT_REPORT", "Submit Report"],
            ["DESCRIPTION", "Description"],
            ["PHOTOS", "Photos"],
            ["VIDEOS", "Videos"],
            ["LOCATION_MAP", "Location Map"],
            ["ADDITIONAL_FEATURES", "Additional Features"],
            ["CONTACT_INFORMATION", "Contact Information"],
            ["WEBSITE", "Website"],
            ["OVERALL", "Overall"],
            ["OUT_OF_5", "OutOf5"],
            ["NO_REVIEW_FOUND", "No Review Found"],
            ["WRITE_A_REVIEW", "Write A Review"],
            ["LOGIN_TO_REVIEW", "Login To Review"],
            ["OWN_PRODUCT_REVIEW_STOP", "Own Product Review Stop"],
            ["ALREADY_GIVEN_REVIEW_STOP", "Already Given Review Stop"],
            ["YOUR_RATING", "Your Rating"],
            ["STAR_1", "Star 1"],
            ["STAR_2", "Star 2"],
            ["STAR_3", "Star 3"],
            ["STAR_4", "Star 4"],
            ["STAR_5", "Star 5"],
            ["YOUR_REVIEW", "Your Review"],
            ["SUBMIT", "Submit"],
            ["AGENT", "Agent"],
            ["VIEW_PROFILE", "View Profile"],
            ["POSTED_ON", "Posted On"],
            ["OPENING_HOUR", "Opening Hour"],
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
