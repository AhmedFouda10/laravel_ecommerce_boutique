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
                <h6 class="f-14">{{Auth::user()->name}}</h6>
                <p>{{Auth::user()->status}}.</p>
            </div>
        </div>
        <ul class="sidebar-menu">
            @can('dashboard')
            <li>
                <a class="sidebar-header" href="{{route('admin.dashboard')}}">
                    <i data-feather="home"></i>
                    <span>{{ trans('main_trans.Dashboard') }}</span>
                </a>
            </li>
            @endcan

            @can('departments')

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>{{ trans('main_trans.Departments') }}</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    @can('category')

                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-circle"></i>
                            <span>{{ trans('main_trans.Category') }}</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            @can('list category')
                            <li>
                                <a href="{{route('admin.category.all')}}">
                                    <i class="fa fa-circle"></i>{{ trans('main_trans.List Category') }}
                                </a>
                            </li>
                            @endcan

                            @can('add category')
                            <li>
                                <a href="{{route('admin.category.create')}}">
                                    <i class="fa fa-circle"></i>{{ trans('main_trans.Add Category') }}
                                </a>
                            </li>
                            @endcan

                        </ul>
                    </li>
                    @endcan

                    @can('brand')
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-circle"></i>
                            <span>{{ trans('main_trans.Brand') }}</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            @can('list brand')
                            <li>
                                <a href="{{route('admin.brand.all')}}">
                                    <i class="fa fa-circle"></i>{{ trans('main_trans.List Brand') }}
                                </a>
                            </li>
                            @endcan

                            @can('add brand')
                            <li>
                                <a href="{{route('admin.brand.create')}}">
                                    <i class="fa fa-circle"></i>{{ trans('main_trans.Add Brand') }}
                                </a>
                            </li>
                            @endcan



                        </ul>
                    </li>
                    @endcan

                    @can('product')
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-circle"></i>
                            <span>{{ trans('main_trans.Product') }}</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            @can('list product')
                            <li>
                                <a href="{{route('admin.product.all')}}">
                                    <i class="fa fa-circle"></i>{{ trans('main_trans.List Product') }}
                                </a>
                            </li>
                            @endcan

                            @can('add product')
                            <li>
                                <a href="{{route('admin.product.create')}}">
                                    <i class="fa fa-circle"></i>{{ trans('main_trans.Add Product') }}
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan

            @can('list user')
            <li>
                <a class="sidebar-header" href="{{ route('admin.users.index') }}">
                    <i data-feather="users"></i>
                    <span>{{ trans('main_trans.Manage Users') }}</span>
                </a>
            </li>
            @endcan

            @can('role-list')
            <li>
                <a class="sidebar-header" href="{{ route('admin.roles.index') }}">
                    <i data-feather="settings"></i>
                    <span>{{ trans('main_trans.Manage Role') }}</span>
                </a>
            </li>
            @endcan

        </ul>
    </div>
</div>
