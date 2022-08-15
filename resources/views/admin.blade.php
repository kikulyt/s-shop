<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Static Navigation - SB Admin</title>




  <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  @stack('style')




</head>

<body>
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/">Admin</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
        class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      {{-- <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
          aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div> --}}
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li><a class="dropdown-item btn btn-default text-white" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          Đăng xuất</a></li>



      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>

    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="/admin">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Tùy chọn</div>


            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              Danh mục
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('admin_categories') }}">
                  Xem danh mục
                </a>
                <a class="nav-link" href="{{ route('admin_category_show_tab') }}">
                  Tab danh mục sp
                </a>
              </nav>
            </div>



            <a class="nav-link" href="{{ route('admin_brands') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Thương hiệu
            </a>
            <a class="nav-link" href="{{ route('admin_products') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-tshirt"></i></div>
              Sản phẩm
            </a>
            <a class="nav-link" href="{{ route('admin.coupons') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
              Mã giảm giá
            </a>

            <a class="nav-link" href="{{ route('admin.orders') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-dolly"></i></i></div>
              Đơn hàng
            </a>
            <a class="nav-link" href="{{ route('admin.contact') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-comment-alt"></i></i></div>
              Phản hồi
            </a>



            <div class="sb-sidenav-menu-heading">Cài đặt</div>
            <a class="nav-link" href="{{ route('admin.ship.fees') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-shipping-fast"></i></div>
              Phí ship
            </a>
            <a class="nav-link" href="{{ route('admin.slider') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-shipping-fast"></i></div>
              Slider trang chủ
            </a>
            <a class="nav-link" href="{{ route('admin.setting') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-info"></i></i></div>
              Thông tin
            </a>
{{--            <a class="nav-link" href="{{ route('admin.users') }}">--}}
{{--              <div class="sb-nav-link-icon"><i class="fas fa-info"></i></i></div>--}}
{{--              Tài khoản người dùng--}}
{{--            </a>--}}
          </div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        @yield('admin_content')
      </main>
      {{-- <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2021</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer> --}}
    </div>
  </div>
  @include('sweetalert::alert')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('backend/js/scripts.js') }}"></script>

  @stack('script')
</body>

</html>
