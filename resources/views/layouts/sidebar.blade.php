<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand" style="padding: 5px;">
            <a>SIMASET PSDKU UNIVERSITAS LAMPUNG</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Aset</li>
            <li class="nav-item">
                <a href="{{ route('asets') }}" class="nav-link"><i class="fas fa-columns"></i><span>Data Aset</span></a>
            </li>
            @if (auth()->user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kategoris') }}"><i class="fas fa-th"></i><span>Kategori
                            Aset</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('lokasis') }}" class="nav-link"><i class="fas fa-map-marker"></i><span>Data Lokasi
                            Aset</span></a>
                </li>
                <li class="menu-header">Kerusakan dan Perbaikan Aset</li>
                <li class="nav-item">
                    <a href="{{ route('kerusakans') }}" class="nav-link"><i class="fas fa-fire"></i><span>Laporan
                            Kerusakan Aset</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('perbaikans') }}" class="nav-link"><i class="fas fa-wrench"></i><span>Laporan
                            Perbaikan Aset</span></a>
                </li>
                <li class="menu-header">Peminjaman Aset</li>
                <li class="nav-item">
                    <a href="{{ route('peminjamans') }}" class="nav-link"><i class="fas fa-arrow-up"></i><span>Laporan
                            Peminjaman Aset</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('riwayats') }}" class="nav-link"><i class="fas fa-history"></i><span>Riwayat
                            Aset</span></a>
                </li>
            @endif
            @if (auth()->user()->role === 'staf_aset')
                <li class="menu-header">Peminjaman Aset</li>
                <li class="nav-item">
                    <a href="{{ route('peminjamans') }}" class="nav-link"><i class="fas fa-arrow-up"></i><span>Laporan
                            Peminjaman Aset</span></a>
                </li>
                <li class="menu-header">Kerusakan Aset</li>
                <li class="nav-item">
                    <a href="{{ route('kerusakans') }}" class="nav-link"><i class="fas fa-fire"></i><span>Laporan
                            Kerusakan Aset</span></a>
                </li>
            @endif
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a class="btn btn-danger btn-lg btn-block btn-icon-split" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </aside>
</div>
