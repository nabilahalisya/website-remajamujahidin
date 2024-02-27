 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="img/logo-rm.png" alt="Logo Remaja Mujahidin" class="brand-image img-circle">
    <span class="brand-text font-weight-regular">Remaja Mujahidin</span>
  </a>


<!-- Sidebar -->
<div class="sidebar">
  

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
              
       <li class="nav-item">
          <a href="{{'/home'}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
              </a>
                </li>
      
                <li class="nav-item">
                  <a href="" class="nav-link {{ Request::is('create_user') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>
                      Kelola User
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/create_user" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kelola Akun</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/buatakun" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kelola Akun Angoota Muda</p>
                      </a>
                    </li>
                  </ul>
                </li>
      <li class="nav-item">
        <a href="/sejarah" class="nav-link {{ Request::is('sejarah') ? 'active' : '' }}">
          <i class="nav-icon fas fa-landmark"></i>
            <p>
              Kelola Sejarah
            </p>
        </a>
          </li>
      <li class="nav-item">
        <a href="/visi" class="nav-link {{ Request::is('visi') ? 'active' : '' }}">
          <i class="nav-icon fas fa-scroll"></i>
          <p>
            Kelola Visi
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/misi" class="nav-link {{ Request::is('misi') ? 'active' : '' }}">
          <i class="nav-icon fas fa-scroll"></i>
          <p>
            Kelola Misi
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="struktur" class="nav-link {{ Request::is('struktur') ? 'active' : '' }}">
          <i class="nav-icon fas fa-sitemap"></i>
          <p>
            Kelola Struktur Organisasi
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/narahubung" class="nav-link {{ Request::is('narahubung') ? 'active' : '' }}">
          <i class="nav-icon far fa-address-book"></i>
          <p>
            Kelola Narahubung
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/agenda" class="nav-link {{ Request::is('agenda') ? 'active' : '' }}">
          <i class="nav-icon fas fa-calendar-plus"></i>
          <p>
            Kelola Agenda
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/muda" class="nav-link {{ Request::is('muda') ? 'active' : '' }}">
          <i class="nav-icon fas fa-file-alt"></i>
          <p>
            Kelola Pendaftaran Anggota Muda
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/biasa" class="nav-link {{ Request::is('biasa') ? 'active' : '' }}">
          <i class="nav-icon fas fa-file-alt"></i>
          <p>
            Kelola Pendaftaran Anggota Biasa
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/screening" class="nav-link {{ Request::is('screening') ? 'active' : '' }}">
          <i class="nav-icon fas fa-bullhorn"></i>
          <p>
            Kelola Hasil Screening
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/dataanggota" class="nav-link {{ Request::is('dataanggota') ? 'active' : '' }}">
          <i class="nav-icon fas fa-folder-open"></i>
          <p>
            Kelola Anggota
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/creates" class="nav-link {{ Request::is('creates') ? 'active' : '' }}">
          <i class="nav-icon fas fa-folder-open"></i>
          <p>
            Kelola Periode Pendaftaran
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

