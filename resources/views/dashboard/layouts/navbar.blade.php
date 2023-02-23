      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Website</span>
            </a>
          </li>

          <li class="nav-item nav-category">Operations</li>

          <li class="nav-item ">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-products" aria-expanded="false" aria-controls="ui-basic-products">                
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">All Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('products.create') }}">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('products.delete') }}">Deleted</a></li>
              </ul>
            </div>
          </li>

          @if(auth()->user()->user_type != 'supplier')

          <li class="nav-item ">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-categories" aria-expanded="false" aria-controls="ui-basic-categories">                
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-categories">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories.index') }}">All Categories</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories.create') }}">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('categories.delete') }}">Deleted</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-Sub-categories" aria-expanded="false" aria-controls="ui-basic-Sub-categories">                
              <span class="menu-title">Sub-Categories</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-Sub-categories">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('subcategories.index') }}">All Sub-Categories</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('subcategories.create') }}">Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('subcategories.delete') }}">Deleted</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-Sub-categories" aria-expanded="false" aria-controls="ui-basic-Sub-categories">                
              <span class="menu-title">Other Services</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-Sub-categories">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('contactUs.index') }}">All Contact-Us Forms</a></li>
              </ul>
            </div>
          </li>

          @endif

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>

          @if(auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'moderator')
          <li class="nav-item nav-category">Users</li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}"> All users </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}"> Create user </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('users.delete') }}"> Deleted User </a></li>
              </ul>
            </div>
          </li>
          @endif


          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
