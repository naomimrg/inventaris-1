<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIMASET PSDKU UNILA</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  
  @if(auth()->user()->role === 'admin')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('asets') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kategoris') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Kategori Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('lokasis') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Lokasi Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kerusakans') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Laporan Kerusakan Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('peminjamans') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Peminjaman Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('perbaikans') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Perbaikan Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('riwayats') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Riwayat Aset</span>
      </a>
    </li>
  @endif

  @if(auth()->user()->role === 'staf_aset')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('asets') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kerusakans') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Laporan Kerusakan Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('peminjamans') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Peminjaman Aset</span>
      </a>
    </li>
  @endif

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
