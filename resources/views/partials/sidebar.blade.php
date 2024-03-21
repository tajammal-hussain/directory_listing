
{{--there is a code--}}
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

                <!-- Dashbooard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-secondary rounded my-3">
                        <li class="nav-item">
                            <a href="{{ route('general_settings') }}" class="nav-link">
                                <p>General Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('payment_settings') }}" class="nav-link">
                                <p>Payment Settings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('social_media') }}" class="nav-link">
                                <p>Social Media</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Language Settings -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Language Settings
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-secondary rounded my-3">
                        <li class="nav-item">
                            <a href="{{ route('menu-change') }}" class="nav-link">
                                <p>Menu Text</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('website-text') }}" class="nav-link">
                                <p>Website Text</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('notification-text') }}" class="nav-link">
                                <p>Notification Text</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin-panel-text') }}" class="nav-link">
                                <p>Admin Panel Text</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Page Settings -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Page Settings
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-secondary rounded my-3">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog_2') }}" class="nav-link">
                                <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link">
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">
                                <p>Contact</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pricing') }}" class="nav-link">
                                <p>Pricing</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('listing_category') }}" class="nav-link">
                                <p>Listing Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('listing_location') }}" class="nav-link">
                                <p>Listing Location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('listing') }}" class="nav-link">
                                <p>Listing</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('terms') }}" class="nav-link">
                                <p>Terms and Conditions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('privacy_policy') }}" class="nav-link">
                                <p>Privacy Policy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('other') }}" class="nav-link">
                                <p>Other</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Blog Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Blog Section
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-secondary rounded my-3">
                        <li class="nav-item">
                            <a href="{{ route('categories') }}" class="nav-link">
                                <p>Categories</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog_sec') }}" class="nav-link">
                                <p>Blogs</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('approved_comments') }}" class="nav-link">
                                <p>Approved Comments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pending_comments') }}" class="nav-link">
                                <p>Pending Comments</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Website Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Website Section
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-secondary rounded my-3">
                        <li class="nav-item">
                            <a href="{{ route('faq-web') }}" class="nav-link">
                                <p>FAQ</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Listing Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Listing Section
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-secondary rounded my-3">
                        <li class="nav-item">
                            <a href="{{ route('lis_category') }}" class="nav-link">
                                <p>Listing Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('lis_location') }}" class="nav-link">
                                <p>Listing Location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('lis_amenity') }}" class="nav-link">
                                <p>Listing Amenity</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('listing1') }}" class="nav-link">
                                <p>Listing</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Review Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Review Section
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview bg-secondary rounded my-3">
                        <li class="nav-item">
                            <a href="{{ route('admin_review') }}" class="nav-link">
                                <p>Admin Review</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('customer_review') }}" class="nav-link">
                                <p>Customer Review</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Package Section -->
                <li class="nav-item">
                    <a href="{{ route('package_section') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Package Section</p>
                    </a>
                </li>

                <!-- Dynamic Pages -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Dynamic Pages</p>
                    </a>
                </li>

                <!-- Purchase History -->
                <li class="nav-item">
                    <a href="{{ route('pur_history') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Purchase History</p>
                    </a>
                </li>

                <!-- Customer -->
                <li class="nav-item">
                    <a href="{{ route('customer') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Customer</p>
                    </a>
                </li>

                <!-- Email Template -->
                <li class="nav-item">
                    <a href="{{ route('email_template') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Email Template</p>
                    </a>
                </li>

                <!-- Staffs -->
                <li class="nav-item">
                    <a href="{{ route('staff') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Staff</p>
                    </a>
                </li>

                <!-- Manage Roles -->
                <li class="nav-item">
                    <a href="{{ route('manage_roles') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Manage Roles</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
