<!-- Main Sidebar Container -->
<aside
    class="main-sidebar sidebar-dark-primary elevation-4 my-1 rounded-start"
>
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img
            src="dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
        />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
            >
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('user_dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Packages -->
                <li class="nav-item">
                    <a href="{{ route('packages') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Packages</p>
                    </a>
                </li>

                <!-- Purchase History -->
                <li class="nav-item">
                    <a href="{{route('purch_history')}}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Purchase History</p>
                    </a>
                </li>

                <!-- All Listings -->
                <li class="nav-item">
                    <a href="{{ route('all_listing') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>All Listings</p>
                    </a>
                </li>

                <!-- Add Listing -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Add Listing</p>
                    </a>
                </li>

                <!-- My Reviews -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>My Reviews</p>
                    </a>
                </li>

                <!-- Wishlist -->
                <li class="nav-item">
                    <a href="{{ route('wishlist') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Wishlist</p>
                    </a>
                </li>

                <!-- Edit Profile -->
                <li class="nav-item">
                    <a href="{{ route('edit_profile') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Edit Profile</p>
                    </a>
                </li>

                <!-- Edit Password -->
                <li class="nav-item">
                    <a href="{{ route('edit_password') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Edit Password</p>
                    </a>
                </li>

                <!-- Edit Photo -->
                <li class="nav-item">
                    <a href="{{ route('edit_photo') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Edit Photo</p>
                    </a>
                </li>

                <!-- Edit Banner -->
                <li class="nav-item">
                    <a href="{{ route('edit_banner') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Edit Banner</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
