<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/dist/img/IMG_20200111_155232_063.jpg"
                         class="img-fluid elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">ابوالفضل جعفری مقدم</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="/admin" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبوردها

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                پیام ها
                                <span class="right badge badge-danger">جدید</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('service.index')}}" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                سرویس ها

                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tree"></i>
                            <p>
                                پروژه ها
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('project.create')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('project.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('users')}}" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                کاربران

                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                درباره من
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/info/1/edit " class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>کلی</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('skill.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>مهارت ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('education.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تحصیلات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('expirement.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>سابقه کار</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('social.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>شبکه های اجتماعی</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
