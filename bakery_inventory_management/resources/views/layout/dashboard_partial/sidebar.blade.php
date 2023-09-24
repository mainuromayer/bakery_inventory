<!-- Main Sidebar Start -->
<aside class="main-sidebar text-white sidebar-light-dark elevation-1">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
{{--        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">--}}
        <span class="fw-bold px-3 py-2 mx-1 border rounded">
            <i class="fa-brands fa-stripe-s"></i>
        </span>
        <span class="pl-2 brand-text font-weight-bold">SHOP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <!-- <li class="nav-header">Menu</li> -->
                <!-- nav-item-1 start -->
                <li class="nav-item">
                    <a href="#" class="nav-link mb-2 active">
                        <i class="fa-solid fa-home nav-icon"></i>
                        <p>
                            Dashboard
{{--                            <i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Submenu-1</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Submenu-2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Submenu-3</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </li>
                <!-- nav-item-1 end -->

                <!-- nav-item-2 start -->
                <li class="nav-item">
                    <a href="#" class="nav-link mb-2">
                        <i class="fa-solid fa-user-friends nav-icon"></i>
                        <p>
                            Customer
{{--                            <i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                </li>
                <!-- nav-item-2 end -->

                <!-- nav-item-3 start -->
                <li class="nav-item">
                    <a href="#" class="nav-link mb-2">
                        <i class="fa-solid fa-address-card nav-icon"></i>
                        <p>
                            Category
{{--                            <i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                </li>
                <!-- nav-item-3 end -->

                <!-- nav-item-4 start -->
                <li class="nav-item">
                    <a href="#" class="nav-link mb-2">
                        <i class="fa-solid fa-box-archive nav-icon"></i>
                        <p>
                            Product
{{--                            <i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                </li>
                <!-- nav-item-4 end -->

                <!-- nav-item-5 start -->
                <li class="nav-item">
                    <a href="#" class="nav-link mb-2">
                        <i class="fa-solid fa-file-invoice nav-icon"></i>
                        <p>
                            Invoice
{{--                            <i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                </li>
                <!-- nav-item-5 end -->

                <!-- nav-item-6 start -->
                <li class="nav-item">
                    <a href="#" class="nav-link mb-2">
                        <i class="fa-solid fa-receipt nav-icon"></i>
                        <p>
                            Report
{{--                            <i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                </li>
                <!-- nav-item-6 end -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Main Sidebar End -->




<script>
    // Function to set background-image for active nav-links
    function setActiveNavLinksBackground() {
        // Select all nav-links with the 'active' class
        const activeNavLinks = document.querySelectorAll('.nav-link.active');

        // Define the linear gradient background style
        const linearGradient = 'linear-gradient(to right, #0c0958, #00228d, #255d9d)';

        // Set the background-image for each active nav-link
        activeNavLinks.forEach((navLink) => {
            navLink.style.backgroundImage = linearGradient;
        });
    }

    // Call the function to set the background on page load
    setActiveNavLinksBackground();
</script>


