@extends('layout.main')
@push('name')
    Menu Text
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
                        <h1>Menu Text</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('menu-change')}}">Language Settings</a>
                            </li>

                            <li class="breadcrumb-item active">Menu Text</li>
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
</div>
<!-- ./wrapper -->
@endsection
@push('script')

    <script>
        // Sample array containing data
        const dataArray = [
            ["Menu_Home", "Home"],
            ["Menu_Listing", "Listing"],
            ["Menu_Pricing", "Pricing"],
            ["Menu_Pages", "Pages"],
            ["Menu_About", "About"],
            ["Menu_Location", "Location"],
            ["Menu_FAQ", "FAQ"],
            ["Menu_Category", "Category"],
            ["Menu_Blog", "Blog"],
            ["Menu_Contact", "Contact"],
            ["Menu_LogIn_Register", "Login Register"],
            ["Menu_Dashboard", "Dashboard"],
            ["Menu_Add_Listing", "Add Listing"],
            ["Menu_Privacy_Policy", "Privacy Policy"],
            ["Menu_Terms_and_Condition", "Terms and Condition"],
            ["Manage_Roles", "Manage Roles"],
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
