<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('asset/dist/img/default-user-imge.jpeg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrasi Umum</a>
        </div>
      </div>
   
      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            @if($menu == 'dashboard')
              <a href="/dashboard" class="nav-link active">
            @else
              <a href="/dashboard" class="nav-link">
            @endif
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Dashboard
              </p>
            </a>
          </li>
          <!-- <li class   -->
          <li class="nav-item has-treeview menu-open">
            @if($menu == 'barang')
              <a href="#" class="nav-link active">
            @else
              <a href="#" class="nav-link">
            @endif  
            <i class="fas fa-bars nav-icon"></i>
              <p>
                Barang  
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                @if($submenu == 'view_barang')
                  <a href="/view_barang" class="nav-link active">
                @else
                  <a href="/view_barang" class="nav-link">
                @endif
                <i class="fas fa-archive nav-icon"></i>
                  <p>Barang Pakai Habis</p>
                </a>
              </li>
              <li class="nav-item">
                @if($submenu == 'view_rencana_pengadaan')
                  <a href="/view_rencana_pengadaan" class="nav-link active">
                @else
                  <a href="/view_rencana_pengadaan" class="nav-link">
                @endif
                <i class="fas fa-shopping-cart nav-icon"></i>
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Rencana Pengadaan</p>
                </a>
              </li>
              <li class="nav-item">
                @if($submenu == 'view_pengadaan')
                  <a href="/view_pengadaan" class="nav-link active">
                @else
                  <a href="/view_pengadaan" class="nav-link">
                @endif
                <i class="fas fa-cart-plus nav-icon"></i>
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Pengadaan Barang</p>
                </a>
              </li>
              <li class="nav-item">
                @if($submenu == 'view_permintaan') 
                  <a href="/view_permintaan" class="nav-link active">
                @else
                  <a href="/view_permintaan" class="nav-link">
                @endif
                <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Permintaan Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            @if($menu == 'inventaris')
              <a href="#" class="nav-link active">
            @else
              <a href="#" class="nav-link">
            @endif  
            <i class="fas fa-bars nav-icon"></i>
              <p>
                Inventaris
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                @if($submenu == 'view_inventaris')
                  <a href="/view_inventaris" class="nav-link active">
                @else
                  <a href="/view_inventaris" class="nav-link">
                @endif
                <i class="fas fa-boxes nav-icon"></i>
                  <p>Barang Inventaris</p>
                </a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
              @if($submenu == 'view_peminjaman_inv')
                  <a href="/view_peminjaman_inv" class="nav-link active">
                @else
                  <a href="/view_peminjaman_inv" class="nav-link">
                @endif
                <i class="fas fa-dolly-flatbed nav-icon"></i>
                  <p>Peminjaman Inventaris</p>
                </a>
              </li>
            </ul>
          </li>         
          <li class="nav-item has-treeview menu-open">
                @if($menu == 'kearsipan')
                  <a href="#" class="nav-link active">
                @else
                  <a href="#" class="nav-link">
                @endif
                  <i class="fas fa-bars nav-icon"></i>
              <p>
                Kearsipan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    @if($submenu == 'arsip')
                      <a href="/view_arsip" class="nav-link active">
                    @else
                      <a href="/view_arsip" class="nav-link">
                    @endif
                    <i class="fas fa-folder-open nav-icon"></i>
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                    <p>Arsip</p>
                  </a>
                </li>
                <li class="nav-item">
                @if($submenu == 'peminjaman_arsip')
                      <a href="/view_peminjaman_arsip" class="nav-link active">
                    @else
                      <a href="/view_peminjaman_arsip" class="nav-link">
                    @endif
                    <i class="fas fa-archive nav-icon"></i>
                      <!-- <i class="far fa-circle nav-icon"></i> -->
                    <p>Peminjaman Arsip</p>
                  </a>
                </li>
              </ul>
            </li>          
      <!-- /.sidebar-menu -->
    </div>