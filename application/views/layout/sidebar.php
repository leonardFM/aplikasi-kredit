<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">Feature</li>     
          
          <li class="nav-item">
            <a href="<?php echo base_url('nasabahController'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Nasabah</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('pengajuanController'); ?>" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Pengajuan Kredit</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('tipePinjamanController'); ?>" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Tipe Pinjaman</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('bankController'); ?>" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>Bank</p>
            </a>
          </li>

          <li class="nav-header">Master</li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('bankController'); ?>" class="nav-link">
                  <p>Bank</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url('authController/logout'); ?>" class="nav-link">
              
              <p>Logout</p>
            </a>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>