{{-- <body class="hold-transition sidebar-mini layout-fixed"> --}}
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-dark">FVIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{Str::ucfirst(Session::get('user')['name'])}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Admin Setting
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_banner" class="nav-link">
                  <p>
                    Manage Banner
                  </p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/admin/manage_social" class="nav-link">
                  <p>
                    Manage Social Links
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-plus"></i>
              <p>
                Manage Staff
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_staff" class="nav-link">
                  <p>
                    Manage Staff
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-check"></i>
              <p>
                Approve Forms
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/approve_cis_form" class="nav-link">
                  <p>
                    Approve CIS forms
                  </p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/admin/approve_pqf_form" class="nav-link">
                  <p>
                    Approve PQF forms
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/approve_ilrf_form" class="nav-link">
                  <p>
                    Approve ILRF forms
                  </p>
                </a>
              </li>
              <li class="paid_nav-item">
                <a href="/admin/approve_inspection" class="nav-link">
                  <p>
                    Approve Inspection
                  </p>
                </a>
              </li>
              <li class="paid_nav-item">
                <a href="/admin/approve_premiun_retainer" class="nav-link">
                  <p>
                    Approve Retainer
                  </p>
                </a>
              </li>
              <li class="paid_nav-item">
                <a href="/admin/approve_spv" class="nav-link">
                  <p>
                    Approve SPV
                  </p>
                </a>
              </li>
              <li class="paid_nav-item">
                <a href="/admin/approve_closing" class="nav-link">
                  <p>
                    Approve Closing
                  </p>
                </a>
              </li>
              <li class="paid_nav-item">
                <a href="/admin/approve_collateral" class="nav-link">
                  <p>
                    Approve Collateral
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file-image"></i>
              <p>
                Gallery
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_gallery" class="nav-link">
                  <p>
                    Manage Gallery
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-handshake"></i>
              <p>
                Our Partners
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_partner" class="nav-link">
                  <p>
                    Manage Partners
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-thumbs-up"></i>
              <p>
                Our Service
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_service" class="nav-link">
                  <p>
                    Manage Service
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Our Projects
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_project" class="nav-link">
                  <p>
                    Manage Projects
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Manage Users
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_user_list" class="nav-link">
                  <p>
                    All Users
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tag"></i>
              <p>
                Manage CMS Pages
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_investment_block" class="nav-link">
                  <p>
                    Manage Investment Blocks
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/manage_car" class="nav-link">
                  <p>
                    Agency Benifits Car
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Manage Testimonials
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_testimonial" class="nav-link">
                  <p>
                    Manage Testimonial
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tag"></i>
              <p>
                Manage Membership
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_membership_plan" class="nav-link">
                  <p>
                    Membership Plans
                  </p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>
                    Membership Request
                  </p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Membership User
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_membership" class="nav-link">
                  <p>
                    Membership User
                  </p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Project User
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>
                    Project User
                  </p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-line-chart"></i>
              <p>
                Free Consultation
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_free_consultation" class="nav-link">
                  <p>
                    Free Consultation
                  </p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-line-chart"></i>
              <p>
                Contact Details
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_contact" class="nav-link">
                  <p>
                    Contact Details
                  </p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Manage Enquiry
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_enquiry" class="nav-link">
                  <p>
                    Manage Enquiry
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Generate A-Code
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_acceptance" class="nav-link">
                  <p>
                    Generate A-Code
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Manage MemberId
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_memberid" class="nav-link">
                  <p>
                    Generate MemberId
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Newsletter
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/manage_newsletter" class="nav-link">
                  <p>
                    Manage Newsletter
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


