    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ url('/accueil') }}" class="text-nowrap logo-img">
              <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">ONGLETS</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/accueil') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-building-hospital"></i>
                  </span>
                  <span class="hide-menu">Accueil</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/dossiers') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-user-heart"></i>
                  </span>
                  <span class="hide-menu">Patients</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/consultations') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-emergency-bed"></i>
                  </span>
                  <span class="hide-menu">Consultations</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/examens') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-check"></i>
                  </span>
                  <span class="hide-menu">Examens</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/specialistes') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-stethoscope"></i>
                  </span>
                  <span class="hide-menu">Spécialistes</span>
                </a>
              </li>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->