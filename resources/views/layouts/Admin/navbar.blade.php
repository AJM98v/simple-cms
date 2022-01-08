<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">سایت</a>
        </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                    class="fa fa-th-large"></i></a>
        </li>
        <li class="nav-item">
            <form method="post" action="{{route('logout')}}">
                @csrf
                <button class="btn  btn-danger" type="submit">خروج</button>
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
