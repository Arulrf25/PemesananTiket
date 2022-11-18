<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="{!! asset('assets/img/user.jpg') !!}" width="30" alt="">
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">Pelanggan</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  <div class="menu-inner-shadow"></div>
  <ul class="menu-inner py-1">
    <li class="menu-item">
      <a href="/dashboard-admin" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Beranda</div>
      </a>
    <li class="menu-item">
      <a href="/pesan" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Account">Pesan Tiket</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="/pesan" class="menu-link">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Account">History Pesanan</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="" class="menu-link">
        <i class="menu-icon tf-icons bx bx-log-out"></i>
        <div data-i18n="Account">Keluar</div>
      </a>
    </li>
  </ul>
</aside>