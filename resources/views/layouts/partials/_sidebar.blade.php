<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="image">
      <span class="logo-lg">

      <img src="dist/img/logo.png" width="200" >
      </span>
      </div>

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user-icon-jpg-29.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        @if(Session::get('loginstatus'))
        <p style="color: white"><b>{{Session::get('loginstatus')}}</b></p>
        @endif
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
              <p>
                Starter 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fab fa-product-hunt"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_products" class="nav-link">
                <i class="fas fa-plus-circle"></i>
                  <p>Add Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="product_list" class="nav-link">
                <i class="fas fa-eye"></i>
                  <p>List Products</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-code-branch"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_category" class="nav-link">
                <i class="fas fa-plus-square"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="category_list" class="nav-link">
                <i class="fas fa-th-list"></i>
                  <p>Category List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-balance-scale"></i>
              <p>
                Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="new_sale" class="nav-link">
                <i class="fab fa-shopify"></i>
                  <p>Add Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sale_list" class="nav-link">
                <i class="fas fa-tags"></i>
                  <p>List Sales</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-shopping-cart"></i>
              <p>
                Purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="new_purchase" class="nav-link">
                <i class="fas fa-cart-plus"></i>
                  <p>Add Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="purchase_list" class="nav-link">
                <i class="fas fa-list-alt"></i>
                  <p>Manage Purchase</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-truck"></i>
              <p>
                Supplier
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="new_supplier" class="nav-link">
                <i class="fas fa-user-plus"></i>
                  <p>New Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="supplier_list" class="nav-link">
                <i class="fas fa-list-alt"></i>
                  <p>Manage Supplier</p>
                </a>
              </li>
            </ul>
          </li>
          <!--Customer-->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="new_customer" class="nav-link">
                <i class="fas fa-user-plus"></i>
                  <p>New Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer_list" class="nav-link">
                <i class="fas fa-list-alt"></i>
                  <p>Manage Customer</p>
                </a>
              </li>
            </ul>
          </li>

          <!--Stock-->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-signal"></i>
              <p>
                Stock
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="stock_report" class="nav-link">
                <i class="fas fa-chart-line"></i>
                  <p>Stock Details</p>
                </a>
              </li>
            </ul>
            
          </li>

          <!--Report-->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-book-open"></i>
              <p>
                Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="income_report" class="nav-link">
                <i class="fas fa-file-medical-alt"></i>
                  <p>Payment Income Report</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="expense_report" class="nav-link">
                <i class="fas fa-file-signature"></i>
                  <p>Payment Expense Report</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="profit_report" class="nav-link">
                <i class="fas fa-file-contract"></i>
                  <p>Profit Report</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="today_report" class="nav-link">
                <i class="fas fa-copy"></i>
                  <p>Today's Report</p>
                </a>
              </li>
            </ul>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>