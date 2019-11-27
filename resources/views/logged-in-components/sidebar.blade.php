<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('calon-siswa.index') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ $role->role }}</sup></div>
  </a>

  <!-- Heading -->
  <div class="sidebar-heading mt-3">
  </div>
  
  <hr class="sidebar-divider">
  @foreach ($menu as $m)
    <!-- Nav Item - Pages Collapse m -->
    <li class="nav-item py-0" style="margin: -5px 0;">
      <a class="nav-link" href="{{ route($m->route_name) }}">
        <i class="fas fa-fw {{ $m->icon }}"></i>
        <span>{{ $m->menu }}</span>
      </a>
    </li>
  @endforeach

  <hr class="sidebar-divider">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->