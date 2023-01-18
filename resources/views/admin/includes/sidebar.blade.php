<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="{{route('admin.dashboard')}}">
                <img class="d-none d-lg-block blur-up lazyloaded"
                    src="{{asset('backend/assets/images/dashboard/multikart-logo.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                aria-hidden="true"></i></a>
        <div class="sidebar-user">
            <img class="img-60" src="{{asset('backend/assets/images/dashboard/user3.jpg')}}" alt="#">
            <div>
                <h6 class="f-14">JOHN</h6>
                <p>general manager.</p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="{{route('admin.dashboard')}}">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Departments</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-circle"></i>
                            <span>Category</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{route('admin.category.all')}}">
                                    <i class="fa fa-circle"></i>List Category
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.category.create')}}">
                                    <i class="fa fa-circle"></i>Add Category
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-circle"></i>
                            <span>Brand</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{route('admin.brand.all')}}">
                                    <i class="fa fa-circle"></i>List Brand
                                </a>
                            </li>

                            <li>
                                <a href="{{route('admin.brand.create')}}">
                                    <i class="fa fa-circle"></i>Add Brand
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="product-review.html">
                            <i class="fa fa-circle"></i>
                            <span>product Review</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href="{{ route('admin.users.index') }}">
                    <i data-feather="home"></i>
                    <span>Manage Users</span>
                </a>
            </li>
            {{-- @can('role-list') --}}
            <li>
                <a class="sidebar-header" href="{{ route('admin.roles.index') }}">
                    <i data-feather="home"></i>
                    <span>Manage Role</span>
                </a>
            </li>
            {{-- @endcan --}}

        </ul>
    </div>
</div>
